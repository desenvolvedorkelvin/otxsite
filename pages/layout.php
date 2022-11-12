<?php
if(!defined('INITIALIZED'))
	exit;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
  <title><?PHP echo $title ?> Tibia Old Tibia</title>
  <meta name="description" content="Tibia Old, Otserv(Tibia) é um jogo multiplayer online (MMORPG). Inspirado nas antigas versões de Tibia com uma das melhores jogabilidades ja criadas! -- " />
  <meta name="author" content="Tibia Wix" />
  <meta http-equiv="content-language" content="en" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="keywords" content="Tibia Old, Servidor de otserv,Servidor de tibia, jogo gratis, jogo legal, free online game, free multiplayer game, free online rpg, free mmorpg, mmorpg, mmog, online role playing game, online multiplayer game, internet game, online rpg, rpg,tibia, br, tibiabr, downloads, magias, magic, brasil, tibiabrasil, macetes, tibiarpgbrasil, dicas, tibiagg, mapas, rpg, graphical mud, rpg, game, fantasy, medieval, roleplaying game, mmorpg, massively multiplayer, online game, persistent online game, online world, persistent online world, massively multi-user, massively multi user, multi-user-dungeon, multiuser dungeon, internet game, online spiel, internet spiel, rollenspiel, multiplayer spiel, multiplayer game, free game, kostenloses spiel, free internet game, free online game, Página Inicial" />
  <?PHP echo $layout_header; ?>      
        <link rel="stylesheet" type="text/css" href="<?php echo $layout_name; ?>/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $layout_name; ?>/basic.css" />
        <style>
        #facebook{
            background: url('<?php echo $layout_name; ?>/images/facebook.png') no-repeat;
            position: fixed;
            top: 200px;
            right: 0px;
            height: 42px;
            width: 42px;
        }
        </style>
        <!-- Load MooTools 1.2.5 and needed Libraries-->
 
        <script type="text/javascript" src="<?php echo $layout_name; ?>/js/mootools.js"></script>
        <script type="text/javascript" src="<?php echo $layout_name; ?>/js/lang_switcher.js"></script>
        <script type="text/javascript" src="<?php echo $layout_name; ?>/js/statusbox.js"></script>
		<script type="text/javascript" src="<?PHP echo $layout_name; ?>/initialize.js"></script>
  <script type='text/javascript'> var IMAGES=0; IMAGES='<?PHP echo $layout_name; ?>/images'; var g_FormField='';  var LINK_ACCOUNT=0; LINK_ACCOUNT='';</script>
</head> 
 <script type="text/javascript">
                        function init()
                        {
                                initLanguageBox();
                                initStatusBox();
                        }
                       
                        window.onload = init;
                </script>
                <script type="text/javascript">
            jQuery(document).ready(function($) {
            $('a[rel*=facebox]').facebox()
            })
 
            $.facebox.settings.opacity = 0.7;
        </script>
<script language="javascript">  
<!--  
function somente_numero(campo){  
var digits="0123456789"  
var campo_temp   
    for (var i=0;i<campo.value.length;i++){  
        campo_temp=campo.value.substring(i,i+1)   
        if (digits.indexOf(campo_temp)==-1){		
            campo.value = campo.value.substring(0,i);  
        }  
    }  
}  
  
--> 
</script> 		
        <body>	
                <div id="vt_page">
                <div id="vt_header">
                <div id="vt_lang_switcher" onmouseover="ShowLanguages();" onmouseout="HideLanguages();">
                        <div id="vt_active_language">
                        <div id="vt_language">English</div>
                        <div id="vt_language_flag"><img src="<?php echo $layout_name; ?>/images/gb.png" alt="GB" /></div>
                    </div>
                        <ul id="vt_languages_list">
                        <a href="http://translate.google.com/translate?hl=en&sl=en&tl=pl&u=http://<?php echo $_SERVER['SERVER_NAME']; ?>/">
                                                        <li id="language_pl">
                                                                <div class="list_left">Polski</div>
                                                                <div class="list_right"><img src="<?php echo $layout_name; ?>/images/pl.png" alt="PL" /></div>
                                                        </li>
                                                </a>
                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>">
                                                        <li id="language_eng">
                                                                <div class="list_left">English</div>
                                                                <div class="list_right"><img src="<?php echo $layout_name; ?>/images/gb.png" alt="ENG" /></div>
                                                        </li>
                                                </a>
                        <a href="http://translate.google.com/translate?hl=en&sl=en&tl=pt&u=http://<?php echo $_SERVER['SERVER_NAME']; ?>/">
                                                        <li id="language_eng">
                                                                <div class="list_left">Portuguese</div>
                                                                <div class="list_right"><img src="<?php echo $layout_name; ?>/images/br.png" alt="ENG" /></div>
                                                        </li>
                                                </a>
                        <a href="http://translate.google.com/translate?hl=en&sl=en&tl=sv&u=http://<?php echo $_SERVER['SERVER_NAME']; ?>/">
                                                        <li id="language_eng">
                                                                <div class="list_left">Swedish</div>
                                                                <div class="list_right"><img src="<?php echo $layout_name; ?>/images/swe.png" alt="ENG" /></div>
                                                        </li>
                                                </a>
                    </ul>
                </div>
            </div>
            <div id="vt_content">
                <div id="vt_content_top">
                        <div id="vt_content_bot">
                        <div id="vt_container">
                                <div id="vt_content_header">
                                                                <img src="<?php echo $layout_name; ?>/images/sub.png" alt="" />
                                                        </div>
                                <div id="vt_padding_box">
                                    <div class="darkbox">
                                        <div class="top">
                                            <div class="bot">
                                            <?php
                                                if($_GET['subtopic'] == 'latestnews' || $_GET['subtopic'] == '')
                                                    echo $main_content;
                                                else
                                                    echo '<div class="content">'.$main_content.'</div>';
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div id="vt_panel">

                                <div class="vt_status_box" onmouseover="ShowStatusBox(1);" onmouseout="HideStatusBox(1);">
                                <div class="vt_active_status">
                                        <div class="vt_status_name"><?php echo $config['server']['serverName']; ?></div>
                                    <div class="vt_status_state online"><?php if($config['status']['serverStatus_online'] == 1){ ?><span class="online">ON</span><?php }else{ ?><span class="offline">OFF</span><?php } ?></div>
                                </div>
                                                                        <div class="vt_status_info" id="server_status_1">
                                                                                <?php if($config['status']['serverStatus_online'] == 1){ ?>
                                                                                        <table cellpadding="3" cellspacing="0" border="0" width="100%">
                                                                                                <tr>
                                                                                                        <td><b>IP:</b></td>
                                                                                                        <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
                                                                                                </tr>
                                                <tr>
                                                                                                        <td><b>Status:</b></td>
                                                                                                        <td><span class="online">ONLINE</span></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                        <td><b>Players:</b></td>
                                                                                                        <td><a class="pcountlink" href="?subtopic=whoisonline">
																										<?PHP if($config['status']['serverStatus_online'] == 1)
                                                                                                            echo $config['status']['serverStatus_players'].' Players Online';
                                                                                                                else
                                                                                                            echo '<font color="red"><b>Server OFFLINE</b></font>';
                                                                                                        ?></a></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                        <td><b>Save:</b></td>
                                                                                                        <td> 5:00</td>
                                                                                                </tr>
                                                                                        </table>
                                                                                        <?php }else{ ?>
                                                                                        <table cellpadding="3" cellspacing="0" border="0" width="100%">
                                                                                                <tr>
                                                                                                        <td><b>IP:</b></td>
                                                                                                        <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
                                                                                                </tr>
                                                <tr>
                                                                                                        <td><b>Status:</b></td>
                                                                                                        <td><span class="offline">OFFLINE</span></td>
                                                                                                </tr>
                                                                                        </table>
                                                                                        <?php } ?>
                                     </div>
                            </div>
                        <div id="vt_news_menu">
                            <div class="header"><img src="<?php echo $layout_name; ?>/images/menu_latestnews.png" alt="News"/></div>
                                                                <div class="content">
                                    <ul>
                                                                                <li><a href="?subtopic=latestnews">Latest News</a></li>
                                                                                <li><a href="?subtopic=archive">News Archive</a></li>                               </ul>
                                </div>
                         </div>
                            <div id="vt_account_menu">
                                <div class="header"><img src="<?php echo $layout_name; ?>/images/menu_account.png" alt="Account"/></div>
                                                                        <div class="content">
                                                                                <ul>
                                                                                       <?php
                                                                                        if($logged){
                                                                                                echo    '<li><a href="?subtopic=accountmanagement">Account management</a></li>';
                                                                                        }else{
                                                                                                echo'<li><a href="?subtopic=accountmanagement">Login</a></li>
                                                                                                <li><a href="?subtopic=createaccount">Create Account</a></li>
                                                                                                <li><a href="?subtopic=lostaccount">Lost Account?</a></li>';
                                                                                        }
                                                                                               echo ' <li><a href="?subtopic=downloads">Downloads
																							   </a></li>';
                                                                                        ?>
                                                                                </ul>
                                </div>
                            </div>
                            <div id="vt_forum_menu">
                                <div class="header"><img src="<?php echo $layout_name; ?>/images/menu_community.png" alt="community" /></div>
                                                                        <div class="content">
                                                                                <ul>
                                                                                     <li><a href="?subtopic=characters">Characters</a></li>
                                                                                     <li><a href="?subtopic=whoisonline">Who is Online?</a></li>
                                                                                     <li><a href="?subtopic=highscores">Highscores</a></li>
                                                                                     <li><a href="?subtopic=houses">Houses</a></li>
                                                                                     <li><a href="?subtopic=guilds">Guilds</a></li>
                                                                                     <li><a href="?subtopic=wars">Guild wars</a></li>
                                                                                     <li><a href="?subtopic=killstatistics">Kill Statistics</a></li>
                                                                                     <li><a href="?subtopic=team">Support</a></li>
																					 <li><a href="?subtopic=tasks">Task Informations</a></li>
                                                                                </ul>
                                                                        </div>
                                                        </div>
                            <div id="vt_community_menu">
                                <div class="header"><img src="<?php echo $layout_name; ?>/images/menu_forum.png" alt="forum" /></div>
                                                                        <div class="content">
                                                                                <ul>
                                                                                     <li><a href="?subtopic=forum">Forum</a> </li>
                                                                                </ul>
                                                                        </div>
                            </div>
                            <div id="vt_library_menu">
                                <div class="header"><img src="<?php echo $layout_name; ?>/images/menu_library.png" alt="Library" /></div>
                                                                        <div class="content">
                                                                                <ul>
                                                                                        <li><a href="?subtopic=tibiarules">Rules</a></li>
                                                                                        <li><a href="?subtopic=serverinfo">Server Information</a></li>
                                                                                        <li><a href="?subtopic=experiencetable">Experience Table</a></li>
                                                                                </ul>
                                </div>
                            </div>
                            <div id="vt_shop_menu">
                                <div class="header"><img src="<?php echo $layout_name; ?>/images/menu_shops.png" alt="Sklep" /></div>
                                                                        <div class="content">
                                                                                <ul>
                                                                                        <li><a href="?subtopic=buypoints">Donate</a></li>
                                                                                        <li><a href="?subtopic=shopsystem">Shop</a></li>
                                                                                </ul>
                                                                        </div>
                            </div>
                                                </div>
                                        </div>
                                </div>
                                <a href="https://http://52.188.6.253/" target="_blank"><div id="facebook"></div></a>
                        </div>
                            <div id="vt_footer">
                                <p>Copyright &copy; 2021 <a href="index.php"><?php echo $config['server']['serverName']; ?></a>. All rights reserved.</p>
                            </div>
                </div>
        </body>
</html>