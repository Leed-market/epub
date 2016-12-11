<?php
/*
@name Epub
@author Adrien Dorsaz <adrien@adorsaz.ch>
@link https://redmine.adorsaz.ch/projects/leed-market_
@link git://adorsaz.ch/leed-market.git
@licence LGPLv3
@version 1.1.4
@description Ce plugin permet de télécharger vos articles au format epub pour une lecture hors-ligne.
*/

/**
 * List of TODOs :
 *  - TODO L10N : add right language in META of EPUB
 *  - TODO PHP 5.5.0 : marks TODO when php functions will be depreciated
 * */

/** Includes **/
include_once("./plugins/epub/PHPePub/EPub.php");

/** Epub configuration **/
define("EPUBBOOK_HEAD_START_v2",
"<?xml version=\"1.0\" encoding=\"utf-8\"?>\n"
. "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\"\n"
. "    \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">\n"
. "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n"
. "<head>\n"
. "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n"
//. "<link rel=\"stylesheet\" type=\"text/css\" href=\"styles.css\" />\n" // TODO : add Leed css ?
. "<title>");

define("EPUBBOOK_HEAD_START_v3",
"<?xml version=\"1.0\" encoding=\"utf-8\"?>\n"
. "<html  xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:epub=\"http://www.idpf.org/2007/ops\">\n"
. "<head>\n"
. "<meta http-equiv=\"Default-Style\" content=\"text/html; charset=utf-8\" />\n"
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
function epub_plugin_menu(){
    $configManager = new Configuration();
    $configManager->getAll();

    if($configManager->get('epub_menu')){
        echo '<aside class="epubMenu clear">
                <h3 class="left">Epubs</h3>
                    <ul style="font-size:0.8em;">';
                    if($configManager->get('epub_menu_unread')){
                            echo '<li class="clear">'._t('P_EPUB_DOWNLOAD_UNREAD').'<br/>
                                    <a class="button" href="action.php?action=epub_unread_textonly">'._t('P_EPUB_TEXTONLY').'</a>
                                    <a class="button" href="action.php?action=epub_unread_noimage">'._t('P_EPUB_NOIMAGES').'</a>
                                    <a class="button" href="action.php?action=epub_unread_full">'._t('P_EPUB_FULL').'</a>
                                    </li>';
                    }
                    if($configManager->get('epub_menu_favorites')){
                            echo '<li class="clear">'._t('P_EPUB_DOWNLOAD_FAVORITES').'<br/>
                                    <a class="button" href="action.php?action=epub_favorites_textonly">'._t('P_EPUB_TEXTONLY').'</a>
                                    <a class="button" href="action.php?action=epub_favorites_noimage">'._t('P_EPUB_NOIMAGES').'</a>
                                    <a class="button" href="action.php?action=epub_favorites_full">'._t('P_EPUB_FULL').'</a>
                                    </li>';
                    }
                    echo '</ul>
                <div class="clear"></div>
                </aside>';
    }
}

/* Ajout du lien pour les configurations dans le menu "Gestion" */
function epub_plugin_managelink(){
    echo '<li><a class="toggle" href="#epub">'._t('P_EPUB_MANAGE_TITLE').'</a></li>';
}

/* Préférences du plugin */
function epub_plugin_settings(){
    $configManager = new Configuration();
    $configManager->getAll();
    ?>

    <section id="epub" name="epub" class="epub">
        <form action="action.php?action=epub_plugin_update" method="POST" style="width:80%;">
            <h2><?php echo _t('P_EPUB_SETTINGS'); ?></h2>
            <ul>
                <li>
                    <label for="epub_version"><?php echo _t('P_EPUB_SET_VERSION'); ?></label>
                    <select id="epub_version" name="epub_version">
                        <option value="2" <?php if($configManager->get('epub_version')==='2') echo 'selected';?>>2</option>
                        <option value="3" <?php if($configManager->get('epub_version')==='3') echo 'selected';?>>3</option>
                    </select>
                </li>
                <li>
                    <label for="epub_menu"><?php echo _t('P_EPUB_SET_HOME_MENU'); ?></label>
                    <input type="checkbox" id="epub_menu" name="epub_menu" <?php if($configManager->get('epub_menu')) echo 'checked';?>/>
                    <ul style="margin:0;">
                        <li>
                            <label for="epub_menu_unread" ><?php echo _t('P_EPUB_SET_UNREAD_LINK'); ?></label>
                            <input type="checkbox" id="epub_menu_unread" name="epub_menu_unread" <?php if($configManager->get('epub_menu_unread')) echo 'checked';?>/>
                        </li>
                        <li>
                            <label for="epub_menu_favorites" ><?php echo _t('P_EPUB_SET_FAVORITE_LINK'); ?></label>
                            <input type="checkbox" id="epub_menu_favorites" name="epub_menu_favorites" <?php if($configManager->get('epub_menu_favorites')) echo 'checked';?>/>
                        </li>
                    </ul>
                </li>
            </ul>
            <p style="text-align:right;">
                <input type="submit" class="button" value="<?php echo _t('P_EPUB_SAVE_SETTINGS'); ?>"><br/>
            </p>
        </form>
        <h2><?php echo _t('P_EPUB_DOWNLOAD_TITLE'); ?></h2>
        <ul>
            <li><?php echo  _t('P_EPUB_DOWNLOAD_UNREAD'); ?>
                    <a class="button" href="action.php?action=epub_unread_textonly"><?php echo _t('P_EPUB_TEXTONLY'); ?></a>
                    <a class="button" href="action.php?action=epub_unread_noimage"><?php echo _t('P_EPUB_NOIMAGES'); ?></a>
                    <a class="button" href="action.php?action=epub_unread_full"><?php echo _t('P_EPUB_FULL'); ?></a>
            </li>
            <li><?php echo  _t('P_EPUB_DOWNLOAD_FAVORITES'); ?>
                    <a class="button" href="action.php?action=epub_favorites_textonly"><?php echo _t('P_EPUB_TEXTONLY'); ?></a>
                    <a class="button" href="action.php?action=epub_favorites_noimage"><?php echo _t('P_EPUB_NOIMAGES'); ?></a>
                    <a class="button" href="action.php?action=epub_favorites_full"><?php echo _t('P_EPUB_FULL'); ?></a>
            </li>
        </ul>
    </section>
    <?php
}

/* Mise à jour des options */
function epub_plugin_update_settings(&$_){
   if($_['action']=='epub_plugin_update'){
       $myUser = (isset($_SESSION['currentUser'])?unserialize($_SESSION['currentUser']):false);
       if($myUser===false) exit(_t('P_EPUB_NOTLOGGED_ERROR_MODIFY_SETTINGS'));

       $configManager = new Configuration();
       $configManager->getAll();

       $configManager->put('epub_version',$_['epub_version']);
       $configManager->put('epub_menu',(isset($_['epub_menu'])?(($_['epub_menu']==='on')?1:0):0));
       $configManager->put('epub_menu_unread',(isset($_['epub_menu_unread'])?(($_['epub_menu_unread']==='on')?1:0):0));
       $configManager->put('epub_menu_favorites',(isset($_['epub_menu_favorites'])?(($_['epub_menu_favorites']==='on')?1:0):0));
       $_SESSION['configuration'] = null;
       
       header('location: settings.php#epub');
   }
}

/* Création et envoi des fichiers Epub */
function epub_plugin_download(&$_){

    if(strpos($_['action'],'epub_unread')!==false || strpos($_['action'],'epub_favorites')!==false){
        $myUser = (isset($_SESSION['currentUser'])?unserialize($_SESSION['currentUser']):false);
        if($myUser===false) exit(_t('P_EPUB_NOTLOGGED_ERROR_DOWNLOAD'));
	
		$mysqli = new MysqlEntity();

        $requete = 'SELECT title,creator,content,pubdate
                    FROM `'.MYSQL_PREFIX.'event`
                    WHERE ';

        $epubfile_title = "Title to be defined";

        if(strpos($_['action'],'epub_unread')!==false){
            $requete .= 'unread=1 ';
            $epubfile_title = _t('P_EPUB_UNREAD_ARTICLES');
        }elseif(strpos($_['action'],'epub_favorites')!==false){
            $requete .= 'favorite=1 ';
            $epubfile_title = _t('P_EPUB_FAVOITE_ARTICLES');
        }
        $epubfile_title .= ' - '._t('P_EPUB_ON_DATE').' '.date('d/m/y').' '._t('P_EPUB_AT_TIME').' '.date('H:i');
        
        $requete .= 'ORDER BY pubdate DESC';
        
        $query = $mysqli->customQuery($requete);

        if($query){
            if(preg_match('/_([^_]*)$/', $_['action'], $extref)===1){
                create_epub($epubfile_title." ".$extref[1], $query, $extref[1]);
            }else{
                echo _t('P_EPUB_UNKNOWN_ACTION_ERROR').' '.$_['action'];
            }
        }else{
            echo mysqli->error;
        }
    }
}

/* Utilise le contenu des articles pour créer un livre epub */
function create_epub($title, $qry_articles, $external_content){
	$mysqli = new MysqlEntity();
    $configManager = new Configuration();
    $configManager->getAll();

	$nbArticles = 0;
	if ($stmt = $mysqli->prepare($qry_articles)) {
		$stmt->execute(); //TODO manage errors
		$stmt->store_result();
		$nbArticles = $stmt->num_rows;
		$stmt->close();
	}

    if($nbArticles>0){
        // Epub initialisation
        switch($configManager->get('epub_version')){
            case 3:
                $book = new EPub(EPub::BOOK_VERSION_EPUB3);
                $epubbook_start = constant("EPUBBOOK_HEAD_START_v3").$title.constant("EPUBBOOK_HEAD_END");
                break;

            case 2:
            default :
                $book = new EPub(EPub::BOOK_VERSION_EPUB2);
                $epubbook_start = constant("EPUBBOOK_HEAD_START_v2").$title.constant("EPUBBOOK_HEAD_END");
                break;
        }

        $book->setTitle($title);
        $book->setIdentifier("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."/".$title, EPub::IDENTIFIER_URI);
        $book->setLanguage("fr"); // TODO L10N
        $book->setDescription(_t('P_EPUB_BOOK_DESCRIPTION'));
        //$book->addCSSFile("styles.css", "css1", $cssData); //TODO add Leed css ?
        //$book->setCoverImage("Cover.jpg", file_get_contents("demo/cover-image.jpg"), "image/jpeg");
        
        $cover = $epubbook_start. "<h1>".$title."</h1>\n<h2>"._t('P_EPUB_BYLEED')."</h2>\n" . constant("EPUBBOOK_END");
        $book->addChapter("Notices", "Cover.html", $cover);
        
        // Epub chapters (articles) creation
        $chapNb = 1;
        while($data=mysql_fetch_array($qry_articles)){
            $title_article = html_entity_decode($data['title'], ENT_QUOTES, 'UTF-8');
            $author_article = html_entity_decode($data['creator'], ENT_QUOTES, 'UTF-8');
            
            $html_content = $epubbook_start
                . '<h2 class="articleTitle">'.$title_article.'</h2>'
                . '<h3 class="articleDetails">'._t('P_EPUB_BY').' '.$author_article.' '._t('P_EPUB_ON_DATE').' '.date("d/m/Y", $data['pubdate']).' '._t('P_EPUB_AT_TIME').' ' .date("H:i:s",$data['pubdate']).'</h3>'
                . $data['content'].constant("EPUBBOOK_END");

            $html_content = html_entity_decode($html_content, ENT_QUOTES, 'UTF-8');
            
            switch($external_content){
                case "textonly":
                    // Replace img tags by their alt value if possible (PHPePub make it only for Epub::EXTERNAL_REF_REPLACE_IMAGES)
                    $html_content = preg_replace('/<\s*?img.*alt="(.*?)".*?>/', '[image: ${1}]', $html_content);
                    $html_content = preg_replace('/<\s*?br.*(.*?)".*?>/', '[image: ${1}]', $html_content);
                    $book->addChapter($title_article, _t('P_EPUB_CHAPTER')."_".$chapNb.".html", $html_content, true, EPub::EXTERNAL_REF_IGNORE);
                    break;

                case "noimage":
                    $book->addChapter($title_article, _t('P_EPUB_CHAPTER')."_".$chapNb.".html", $html_content, true, EPub::EXTERNAL_REF_REPLACE_IMAGES);
                    break;

                case "full":
                default:
                    $book->addChapter($title_article, _t('P_EPUB_CHAPTER')."_".$chapNb.".html", $html_content, true, EPub::EXTERNAL_REF_ADD);
                    break;
            }

            $chapNb++;
        }

        // Epub finalization
        $book->buildTOC();
        $book->finalize();
        $zipData = $book->sendBook(preg_replace("( )", '_', preg_replace("([^\w\s\d\,;\[\]\(\]])", '', $title)));
        exit;
    }else{
        echo _t('P_EPUB_NOARTICLES_WARNING');
    }
}

$myUser = (isset($_SESSION['currentUser'])?unserialize($_SESSION['currentUser']):false);
if($myUser!==false){
    // Ajout de la fonction epub_plugin_displayEvents au Hook situé après le menu des flux
    Plugin::addHook("menu_post_folder_menu", "epub_plugin_menu");
    // Ajout de la fonction epub_plugin_action à la page action de leed qui contient tous les traitements qui n'ont pas besoin d'affichage (ex :supprimer un flux, faire un appel ajax etc...)
    Plugin::addHook("action_post_case", "epub_plugin_download");
    // Ajout de la fonction epub_update pour mettre à jour les options
    Plugin::addHook("action_post_case", "epub_plugin_update_settings");
    // Ajout du lien dans le menu "Gestion"
    Plugin::addHook("setting_post_link", "epub_plugin_managelink");
    // Page du menu "Gestion"
    Plugin::addHook("setting_post_section", "epub_plugin_settings");
}
?>
