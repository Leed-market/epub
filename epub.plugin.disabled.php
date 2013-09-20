<?php
/*
@name Epub
@author Adrien Dorsaz <adrien@adorsaz.ch>
@link https://redmine.adorsaz.ch/projects/leed-market_
@link git://adorsaz.ch/leed-market.git
@licence LGPLv3
@version 1.0.0
@description Ce plugin permet de télécharger vos articles au format epub pour une lecture hors-ligne.
*/

/**
 * List of TODOs :
 *  - TODO L10N : marks TODO when localisation on Leed is done.
 *  - TODO PHP 5.5.0 : marks TODO when php functions will be depreciated
 * */

/** Includes **/
include_once("./plugins/epub/PHPePub/EPub.250.php");

/** Epub configuration **/
define("EPUBBOOK_HEAD_START",
"<?xml version=\"1.0\" encoding=\"utf-8\"?>\n"
. "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\"\n"
. " \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">\n"
. "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n"
. "<head>"
. "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n"
//. "<link rel=\"stylesheet\" type=\"text/css\" href=\"styles.css\" />\n" // TODO : add Leed css ?
. "<title>");

define("EPUBBOOK_HEAD_END",
"</title>\n"
. "</head>\n"
. "<body>\n");

define("EPUBBOOK_END",
"</body>\n"
."</html>\n");

/* Menu pour télécharger les fichiers Epub en page d'accueil */
// TODO L10N
function epub_plugin_menu(&$myUser){
	echo '<aside class="epubMenu clear">
				<h3 class="left">Epubs</h3>
                <ul style="font-size:0.8em;">
                    <li class="clear">
                        Textes seulement (+ rapide)
                        <span class="right">
                            <a class="button" href="action.php?action=epub_unread_text">'.Functions::truncate("Non lu",30).'</a>
                            <a class="button" href="action.php?action=epub_favorites_text">'.Functions::truncate("Favoris",30).'</a>
                        </span>
                    </li>
                    <li class="clear">
                        Articles entiers (+ lent)
                        <span class="right">
                            <a class="button" href="action.php?action=epub_unread_full">'.Functions::truncate("Non lu",30).'</a>
                            <a class="button" href="action.php?action=epub_favorites_full">'.Functions::truncate("Favoris",30).'</a>
                        </span>
                    </li>
                </ul>
                <div class="clear"></div>
			</aside>';
}

/* Création et envoi des fichiers Epub */
// TODO L10N
function epub_plugin_action($_,$myUser){
    if($myUser==false){
        exit('Vous devez vous connecter pour cette action.');
    }
    else{
        $requete = 'SELECT title,creator,content,pubdate
                    FROM '.MYSQL_PREFIX.'event
                    WHERE ';

        $epubfile_title = "Title to be defined";

        if(strpos($_['action'],'epub_unread')!==false){
            $requete.='unread=1';
            $epubfile_title = 'Articles Leed Non lu - le '.date('d/m/y').' à '.date('H:i');
        }elseif(strpos($_['action'],'epub_favorites')!==false){
            $requete.='favorite=1';
            $epubfile_title = 'Articles Leed Favoris - le '.date('d/m/y').' à '.date('H:i');
        }
        
        $query = mysql_query($requete); // TODO PHP 5.5.0, remove this function to use mysqli_query or PDO

        if($query){
            create_epub($epubfile_title, $query, strpos($_['action'],'full')!==false);
        }else{
            echo mysql_error();
        }
    }
}

/* Utilise le contenu des articles pour créer un livre epub */
function create_epub($title, $qry_articles, $external_content){
    $nbArticles = mysql_num_rows($qry_articles); // TODO PHP 5.5.0, remove this function to use mysqli_stmt_num_rows or PDO
    
    if($nbArticles>0){
        // Epub initialisation
        $book = new EPub();
        $epubbook_start = constant("EPUBBOOK_HEAD_START").$title.constant("EPUBBOOK_HEAD_END");
        
        $book->setTitle($title);
        $book->setIdentifier("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."/".$title, EPub::IDENTIFIER_URI);
        $book->setLanguage("fr"); // TODO L10N
        $book->setDescription("Auto generated epub file with artilces from Leed rss reader.");
        //$book->addCSSFile("styles.css", "css1", $cssData); //TODO add Leed css ?
        //$book->setCoverImage("Cover.jpg", file_get_contents("demo/cover-image.jpg"), "image/jpeg");
        
        $cover = $epubbook_start. "<h1>".$title."</h1>\n<h2>By your Leed rss reader</h2>\n" . constant("EPUBBOOK_END");
        $book->addChapter("Notices", "Cover.html", $cover);
        
        // Epub chapters (articles) creation
        $chapNb = 1;
        while($data=mysql_fetch_array($qry_articles)){
            $html_content = $epubbook_start
                . '<h2 class="articleTitle">'.$data['title'].'</h2>'
                . '<h3 class="articleDetails"> par '.$data['creator'].' le '.date("d/m/Y à H:i:s",$data['pubdate']).'</h3>'
                . $data['content'].constant("EPUBBOOK_END");
            
            if($external_content){
                $book->addChapter($data['title'], "Chapitre_".$chapNb.".html", $html_content, true, EPub::EXTERNAL_REF_ADD);
            }else{
                $book->addChapter($data['title'], "Chapitre_".$chapNb.".html", $html_content, true, EPub::EXTERNAL_REF_IGNORE);
            }
            
            $chapNb++;
        }
        
        // Epub finalization
        $book->buildTOC();
        $book->finalize();
        $zipData = $book->sendBook(preg_replace("( )", '_', preg_replace("([^\w\s\d\,;\[\]\(\]])", '', $title)));
        exit;
    }else{
        echo "Aucun articles à mettre dans le fichier epub.";
    }
}

// Ajout de la fonction epub_plugin_displayEvents au Hook situé après le menu des flux
Plugin::addHook("menu_post_folder_menu", "epub_plugin_menu");
// Ajout de la fonction epub_plugin_action à la page action de leed qui contient tous les traitements qui n'ont pas besoin d'affichage (ex :supprimer un flux, faire un appel ajax etc...)
Plugin::addHook("action_post_case", "epub_plugin_action");
?>
