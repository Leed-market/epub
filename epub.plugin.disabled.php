<?php
/*
@name Epub
@author Adrien Dorsaz <adrien@adorsaz.ch>
@link https://www.adorsaz.ch
@licence Need to be chosen
@version 1.0.0
@description Le plugin Epub est un plugin qui permet de télécharger vos articles au format epub
*/

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
//. "<link rel=\"stylesheet\" type=\"text/css\" href=\"styles.css\" />\n" // TODO : add Leed style ?
. "<title>");

define("EPUBBOOK_HEAD_END",
"</title>\n"
. "</head>\n"
. "<body>\n");

define("EPUBBOOK_END",
"</body>\n"
."</html>\n");

/* Menu pour télécharger les fichiers Epub en page d'accueil */
function epub_plugin_menu(&$myUser){
	echo '<aside class="epubMenu clear">
				<h3 class="left">Epubs</h3>
                <div class="right" style="margin-top:20px;">
                    <a class="button" href="action.php?action=epub_unread">'.Functions::truncate("Non lu",30).'</a>
                    <a class="button" href="action.php?action=epub_favorites">'.Functions::truncate("Favoris",30).'</a>
                </div>
                <div class="clear"></div>
			</aside>';
}

/* Création et envoi des fichiers Epub */
function epub_plugin_action($_,$myUser){
    if($myUser==false){
        exit('Vous devez vous connecter pour cette action.');
    }
    else{
        $requete = 'SELECT id,title,guid,content,description,link,pubdate,unread,favorite
                    FROM '.MYSQL_PREFIX.'event
                    WHERE ';
        if($_['action']=='epub_unread'){
            $requete.='unread=1';
        }elseif($_['action']=='epub_favorites'){
            $requete.='favorite=1';
        }
        $query = mysql_query($requete);
        // TODO Create EPUB here
        if($query){
            while($data=mysql_fetch_array($query)){
                // TODO Add chapters here
                echo $data['id'];
            }
            // TODO Finalize EPUB and send it
        }else{
            echo mysql_error();
        }
    }
}


// Ajout de la fonction epub_plugin_displayEvents au Hook situé après le menu des flux
Plugin::addHook("menu_post_folder_menu", "epub_plugin_menu");
// Ajout de la fonction epub_plugin_action à la page action de leed qui contient tous les traitements qui n'ont pas besoin d'affichage (ex :supprimer un flux, faire un appel ajax etc...)
Plugin::addHook("action_post_case", "epub_plugin_action");
?>
