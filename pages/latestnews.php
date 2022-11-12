<?PHP header("Content-Type: text/html; charset=ISO-8859-1", true);
date_default_timezone_set('America/Sao_Paulo');

if ($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
	$main_content .= '
				<div class="TableContainer">
					<div class="CaptionContainer">
						<div class="CaptionInnerContainer"> 
							<span class="CaptionEdgeLeftTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span> 
							<span class="CaptionEdgeRightTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span> 
							<span class="CaptionBorderTop" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span> 
							<span class="CaptionVerticalLeft" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>
							<div class="Text">Newsticker</div>
							<span class="CaptionVerticalRight" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span> 
							<span class="CaptionBorderBottom" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span> 
							<span class="CaptionEdgeLeftBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span> 
							<span class="CaptionEdgeRightBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span> 
						</div>
					</div>
					<table class="Table3" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td>
									<div class="InnerTableContainer" >
										<table style="width:100%;" >
											<tr>
												<td>
													<div class="TableShadowContainerRightTop" >
														<div class="TableShadowRightTop" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rt.gif);" ></div>
													</div>
													<div class="TableContentAndRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rm.gif);" >
														<div class="TableContentContainer" >
															<table class="TableContent" width="100%">
																<tr style="background-color:#D4C0A1;" >
																	<td class="LabelV" >The last one:</td>';
$get_ticker = $SQL->query("SELECT * FROM `z_news_tickers` WHERE hide_ticker != 1 ORDER BY date DESC LIMIT 1");
if (count($get_ticker) > 0)
	foreach ($get_ticker as $ticker)
		$main_content .= '
																			<td style="width:90%;" >
																			    <div style="max-width: 600px">
																				<img src="images/news/icon_' . $ticker['icon_id'] . '.gif" style=" vertical-align: middle;"> ' . $ticker['text'] . '
																				<a href="index.php?subtopic=latestnews&action=deleteticker&id=' . $ticker['id'] . '">Delete</a>
																				<input type="hidden" name="tickerID" value="' . $ticker['id'] . '"><br />
																				<small><strong>Posted ' . date("M d Y, H:i:s", $ticker['date']) . '</strong></small>
																			    </div>
																			</td>';
else
	$main_content .= '<td style="width:90%;" >No tickers added yet</td>';
$main_content .= '
																</tr>
																<tr style="background-color:#F1E0C6;" >
																	<td class="LabelV" >Add one:</td>
																	<td>
																	<form action="?subtopic=latestnews&action=newticker" method="post">
																		<table class="TableContent" width="100%">
																			<tr>
																				<td width="100%"><input type="text" name="new_ticker" style="width:100%;" placeholder="Max lenght 255 characters" maxlenght="255"></td>
																			</tr>
																			<tr>
																				<td width="90%">
																					<select name="icon_id" style="width:100%;">
																						<option value="">Select an Icon</option>
																						<option value="1">Technical Icon</option>
																						<option value="2">Staff Icon</option>
																						<option value="3">Development Icon</option>
																						<option value="4">Community Icon</option>
																					</select>
																				</td>
																				<td><input id="insertTicker" type="submit" name="insert" value="Add Ticker"></td>
																			</tr>
																		</table>
																		</form>
																	</td>
																</tr>
															</table>
														</div>
													</div>
													<div class="TableShadowContainer" >
														<div class="TableBottomShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bm.gif);" >
															<div class="TableBottomLeftShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bl.gif);" ></div>
															<div class="TableBottomRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-br.gif);" ></div>
														</div>
													</div>
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div><br>';
}


$main_content .= '<center><div class="NewsHeadline">
        <div class="NewsHeadlineBackground" style="background-image:url(' . $layout_name . '/images/news/newsheadline_background.gif);">
            <table border="0">
                <tr>
			<div class="TableContainer" >
			   <div class="CaptionContainer" >
       <span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);" />
</span>
       <span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);" />
</span>  
     <span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);" >
</span>
       <span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);" />
</span>  

     <div class="Text" ><center><h3>Most Powerfull Guilds</div>
	 </div>
	  </div>
	   </div>
       <span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);" />
</span>

      <span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);" >
</span>    
   <span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);" />
</span>
       <span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);" />
</span>
                </tr>
            </table>
        </div>
    </div>
    <table border="3" cellspacing="3" cellpadding="4" width="100%"><tr>';
 
foreach ($SQL->query('SELECT ' . $SQL->tableName('g') . '.' . $SQL->fieldName('id') . ' AS ' . $SQL->fieldName('id') . ', ' . $SQL->tableName('g') . '.' . $SQL->fieldName('name') . ' AS ' . $SQL->fieldName('name') . ', COUNT(' . $SQL->tableName('g') . '.' . $SQL->fieldName('name') . ') AS ' . $SQL->fieldName('frags') . ' FROM ' . $SQL->tableName('killers') . ' k LEFT JOIN ' . $SQL->tableName('player_killers') . ' pk ON ' . $SQL->tableName('k') . '.' . $SQL->fieldName('id') . ' = ' . $SQL->tableName('pk') . '.' . $SQL->fieldName('kill_id') . ' LEFT JOIN ' . $SQL->tableName('players') . ' p ON ' . $SQL->tableName('pk') . '.' . $SQL->fieldName('player_id') . ' = ' . $SQL->tableName('p') . '.' . $SQL->fieldName('id') . ' LEFT JOIN ' . $SQL->tableName('guild_ranks') . ' gr ON ' . $SQL->tableName('p') . '.' . $SQL->fieldName('rank_id') . ' = ' . $SQL->tableName('gr') . '.' . $SQL->fieldName('id') . ' LEFT JOIN ' . $SQL->tableName('guilds') . ' g ON ' . $SQL->tableName('gr') . '.' . $SQL->fieldName('guild_id') . ' = ' . $SQL->tableName('g') . '.' . $SQL->fieldName('id') . ' WHERE ' . $SQL->tableName('g') . '.' . $SQL->fieldName('id') . ' > 0 AND ' . $SQL->tableName('k') . '.' . $SQL->fieldName('unjustified') . ' = 1 AND ' . $SQL->tableName('k') . '.' . $SQL->fieldName('final_hit') . ' = 1 GROUP BY ' . $SQL->fieldName('name') . ' ORDER BY ' . $SQL->fieldName('frags') . ' DESC, ' . $SQL->fieldName('name') . ' ASC LIMIT 4;') as $guild)
    $main_content .= '<td style="width: 25%; text-align: center;"><a href="?subtopic=guilds&action=show&guild=' . $guild['id'] . '"><img src="guild_image.php?id=' . $guild['id'] . '" width="64" height="64" border="0"/> <br />' . $guild['name'] . '</a><br />' . $guild['frags'] . ' kills
    </td>';
$main_content .= '</tr></table></center>';
// top kills - guilds
$tickers = $SQL->query('SELECT * FROM `z_news_tickers` WHERE hide_ticker != 1 ORDER BY date DESC LIMIT 50;');

$main_content .= '<center><div class="TableContainer" > 
<div class="NewsHeadline">
<table class="Table4" cellpadding="0" cellspacing="0" >
   <div class="CaptionContainer" >
     <div class="CaptionInnerContainer" >
	   <span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);" />
</span>
<span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);" />
</span>  
 <span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);" >
</span>
 <span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);" />
</span> 
<div class="Text" >Changelog</div>
       <span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);" />
</span>
    <span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);" >
</span>    
   <span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);" />
</span>
       <span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);" />
</span>
     
                <tr bgcolor="#202229"></tr>
                </tbody>
                </table>
                <table align="center" border="1" cellspacing="2" style="border-color: #4d4d4d #4d4d4d #737373 #4d4d4d" cellpadding="4" width="100%"><tbody><tr bgcolor="#20222c"><td width="21" style="padding: 5px"><font class="white">Type</font></td><td width="70" style="padding: 5px"><center><font class="white">Date</font></center></td><td style="padding: 5px"><font class="white">Description</font></td></tr>';
				foreach ($tickers as $ticker) {
                $main_content .= '<tr bgcolor="#1b1e26">
				<td align="center" valign="top"><img src="/images/news/icon_'.$ticker['image_id'].'.gif" title="added"></td>
				<td valign="top"><center> '.date('d.m.Y', $ticker['date']).' </center></td>
				<td style="padding: 2px">'.$ticker['text'].'</td>
				</tr>';
				}
				


				$main_content .= '<table style="clear:both" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody><tr bgcolor="#242438" style="text-align:right">
			<center><div class="TableContainer" > 
<div class="NewsHeadline">
<table class="Table4" cellpadding="0" cellspacing="0" >
   <div class="CaptionContainer" >
     <div class="CaptionInnerContainer" >
	   <span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);" />
</span>
<span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);" />
</span>  
 <span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);" >
</span>
 <span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);" />
</span> 
<div class="Text" ><center><h3> Tibia-Old Start-Up</div></center>
       <span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);" />
</span>
    <span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);" >
</span>    
   <span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);" />
</span>
       <span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);" />
</span>

		</tr>
<table border="3" cellspacing="1" style="border-color: #4d4d4d #4d4d4d #8c8c8c #4d4d4d;" width="100%">
    <tbody>
        <tr bgcolor="#20222c">
            <td class="white ">';
            $zapytanie = $SQL->query("SELECT `z_forum`.`icon_id`,`z_forum`.`post_topic`, `z_forum`.`author_guid`, `z_forum`.`post_date`, `z_forum`.`post_text`, `z_forum`.`id`, `z_forum`.`replies`, `players`.`name` FROM `z_forum`, `players` WHERE `section` = '1' AND `z_forum`.`id` = `first_post` AND `players`.`id` = `z_forum`.`author_guid` ORDER BY `post_date` DESC LIMIT 6;")->fetchAll();
            foreach ($zapytanie as $row) {
                $BB = array(
                    '/\[youtube\](.*?)\[\/youtube\]/is' => '<center><object width="500" height="405"><param name="movie" value="https://www.youtube.com/watch?v=Vci4jAheEVs&ab_channel=TeteuTutors"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://www.youtube.com/watch?v=Vci4jAheEVs&ab_channel=TeteuTutors" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="500" height="405"></embed></object></center>',
                    '/\[b\](.*?)\[\/b\]/is' => '<strong>$1</strong>',
                    '/\[center\](.*?)\[\/center\]/is' => '<center>$1</center>',
                    '/\[quote\](.*?)\[\/quote\]/is' => '<table cellpadding="0" style="background-color: #c4c4c4; width: 480px; border-style: dotted; border-color: #007900; border-width: 2px"><tr><td>$1</td></tr></table>',
                    '/\[u\](.*?)\[\/u\]/is' => '<u>$1</u>',
                    '/\[i\](.*?)\[\/i\]/is' => '<i>$1</i>',
                    '/\[letter\](.*?)\[\/letter\]/is' => '<img src=images/letters/$1.gif alt=$1 />',
                    '/\[url](.*?)\[\/url\]/is' => '<a href=$1>$1</a>',
                    '/\[color\=(.*?)\](.*?)\[\/color\]/is' => '<span style="color: $1;">$2</span>',
                    '/\[img\](.*?)\[\/img\]/is' => '<img src=$1 alt=$1 />',
                    '/\[player\](.*?)\[\/player\]/is' => '<a href=' . $server['ip'] . 'index.php?subtopic=characters&amp;name=$1>$1</a>',
                    '/\[code\](.*?)\[\/code\]/is' => '<div dir="ltr" style="margin: 0px;padding: 2px;border: 1px inset;width: 500px;height: 290px;text-align: left;overflow: auto"><code style="white-space:nowrap">$1</code></div>'
                );
                $message = preg_replace(array_keys($BB), array_values($BB), nl2br($row['post_text']));
                $main_content .= '
                    <!--div class="NewsHeadline">
                    <div class="NewsHeadlineBackground" style="">
                    <center><h3><div class="NewsHeadlineText"><br>' . $row['post_topic'] . '</div></h3></center>
                    </div>
                    </div-->
                    <table style=\'clear:both\' border=0 cellpadding=0 cellspacing=0 width=\'100%\'><tr>
                    <td><img src="' . $layout_name . '/images/global/general/blank.gif" width=10 height=1 border=0 alt=\'\' /></td>';
                if ($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
                    $main_content .= '<td width="100%">' . $message . '<br><p align="right"><a href="index.php?subtopic=forum&action=remove_post&id=' . $row['id'] . '"><font color="red">[Delete this news]</font></a>  <a href="index.php?subtopic=forum&action=edit_post&id=' . $row['id'] . '"><font color="green">[Edit this news]</font></a>';
                } else {
                    $main_content .= '<td width="100%">' . $message . '<br /><br />';
                }
                $main_content .= '</td>
                    <td><img src="' . $layout_name . '/images/global/general/blank.gif" width=10 height=1 border=0 alt=\'\' /></td>
                    </tr></table>';
            }
            $main_content .='</td>
        </tr>
    </tbody>
</table>
		</tr>
                </tr>
            </table>
        </div>
    </div>
    <table border="0" cellspacing="3" cellpadding="4" width="100%"><tr>';
$main_content .= '<td style="width: 25%; text-align: center;">
    </td>';
$main_content .= '</tr></table></center>';

//######################## SHOW TICKERS AND NEWS #######################
if ($logged) {
    $players_from_account = $SQL->query("SELECT `players`.`name`, `players`.`id` FROM `players` WHERE `players`.`account_id` = " . (int) $account_logged->getId())->fetchAll();
    foreach ($players_from_account as $player) {
        $str .= '<option value="' . $player['id'] . '"';
        if ($player['id'] == $char_id)
            $strt .= ' selected="selected"';
        $str .= '>' . $player['name'] . '</option>';
    }
}
$time = time();
$news_content .= '
<div id="newsticker" class="Box">
<div class="Corner-tl" style="background-image: url(' . $layout_name . '/images/content/corner-tl.gif);"></div>
<div class="Corner-tr" style="background-image: url(' . $layout_name . '/images/content/corner-tr.gif);"></div>
<div class="Border_1" style="background-image: url(' . $layout_name . '/images/content/border-1.gif);"></div>
<div class="BorderTitleText" style="background-image: url(' . $layout_name . '/images/content/title-background-green.gif);"></div>
<img class="Title"  src="/images/head/News Ticker.png" alt="Contentbox headline" />
	
<div class="Border_2">
<div class="Border_3">
<div class="BoxContent" style="background-image: url(' . $layout_name . '/images/content/scroll.gif);">';
//##################### ADD NEW TICKER #####################
if ($action == "newticker") {
    if ($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
        $ticker_text = stripslashes(trim($_POST['new_ticker']));
        $ticker_icon = (int) $_POST['icon_id'];
        if (empty($ticker_text)) {
            $news_content .= 'You can\'t add empty ticker.';
        } else {
            if (empty($ticker_icon)) {
                $news_icon = 0;
            }
            $SQL->query('INSERT INTO ' . $SQL->tableName('z_news_tickers') . ' (date, author, image_id, text, hide_ticker) VALUES (' . $SQL->quote($time) . ', ' . $account_logged->getId() . ', ' . $ticker_icon . ', ' . $SQL->quote($ticker_text) . ', 0)');
            header("Location: index.php");
        }
    } else {
        $news_content .= 'You don\'t have admin rights. You can\'t add new ticker.';
    }
    $news_content .= '<form action="index.php?subtopic=latestnews" METHOD="post"><div class="BigButton" style="background-image:url(' . $layout_name . '/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="' . $layout_name . '/images/buttons/_sbutton_back.gif" ></div></div></form>';
}
//#################### DELETE (HIDE only!) TICKER ############################
if ($action == "deleteticker") {
    if ($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
        header("Location: index.php");
        $date = (int) $_REQUEST['id'];
        $SQL->query('UPDATE ' . $SQL->tableName('z_news_tickers') . ' SET hide_ticker = 1 WHERE ' . $SQL->fieldName('id') . ' = ' . $date . ';');
        $news_content .= '<center>News tickets with <b>date ' . date("j M Y", $date) . '</b> has been deleted.<form action="index.php?subtopic=latestnews" METHOD=post><div class="BigButton" style="background-image:url(' . $layout_name . '/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="' . $layout_name . '/images/buttons/_sbutton_back.gif" ></div></div></form></center>';
    } else {
        $news_content .= '<center>You don\'t have admin rights. You can\'t delete tickers.<form action="index.php?subtopic=latestnews" METHOD=post><div class="BigButton" style="background-image:url(' . $layout_name . '/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="' . $layout_name . '/images/buttons/_sbutton_back.gif" ></div></div></form></center>';
    }
}
//show tickers if any in database or not blocked (tickers limit = 0)
$tickers = $SQL->query('SELECT * FROM `z_news_tickers` WHERE hide_ticker != 1 ORDER BY date DESC LIMIT 50;');
$number_of_tickers = 0;
if (is_object($tickers)) {
    foreach ($tickers as $ticker) {
        if (is_int($number_of_tickers / 2))
            $color = "Odd";
        else
            $color = "Even";
        $tickers_to_add .= '
<div id="TickerEntry-' . $number_of_tickers . '" class="Row" onclick=\'TickerAction("TickerEntry-' . $number_of_tickers . '")\'>
<div class="' . $color . '">
<div class="NewsTickerIcon" style="background-image: url(' . $layout_name . '/images/news/icon_' . $ticker['image_id'] . '.gif);"></div>
<div id="TickerEntry-' . $number_of_tickers . '-Button" class="NewsTickerExtend" style="background-image: url(' . $layout_name . '/images/general/plus.gif);"></div>
<div class="NewsTickerText">
<span class="NewsTickerDate">' . date("j M Y", $ticker['date']) . ' -</span>
<div id="TickerEntry-' . $number_of_tickers . '-ShortText" class="NewsTickerShortText">';
        //if admin show button to delete (hide) ticker
        if ($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
            $tickers_to_add .= '<a href="index.php?subtopic=latestnews&action=deleteticker&id=' . $ticker['date'] . '"><img src="' . $layout_name . '/images/news/delete.png" border="0"></a>';
        }
        $tickers_to_add .= short_text($ticker['text'], 60) . '</div>
<div id="TickerEntry-' . $number_of_tickers . '-FullText" class="NewsTickerFullText">';
        //if admin show button to delete (hide) ticker
        if ($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
            $tickers_to_add .= '<a href="index.php?subtopic=latestnews&action=deleteticker&id=' . $ticker['date'] . '"><img src="' . $layout_name . '/images/news/delete.png" border="0"></a>';
        }
        $tickers_to_add .= $ticker['text'] . '</div>
</div>
</div>
</div>';
        $number_of_tickers++;
    }
}
if (!empty($tickers_to_add)) {
    //show table with tickers
    if ($group_id_of_acc_logged >= $config['site']['access_admin_panel'] && $action != 'newticker')
        $news_content .= '<script type="text/javascript">
var showednewticker_state = "0";
function showNewTickerForm()
{
if(showednewticker_state == "0") {
document.getElementById("newtickerform").innerHTML = \'<form action="index.php?subtopic=latestnews&action=newticker" method="post" ><table border="0"><tr><td bgcolor="D4C0A1" align="center"><b>Select icon:</b></td><td><table border="0" bgcolor="F1E0C6"><tr><td><img src="' . $layout_name . '/images/news/icon_0.gif" width="20"></td><td><img src="' . $layout_name . '/images/news/icon_1.gif" width="20"></td><td><img src="' . $layout_name . '/images/news/icon_2.gif" width="20"></td><td><img src="' . $layout_name . '/images/news/icon_3.gif" width="20"></td><td><img src="' . $layout_name . '/images/news/icon_4.gif" width="20"></td></tr><tr><td><input type="radio" name="icon_id" value="0" checked="checked"></td><td><input type="radio" name="icon_id" value="1"></td><td><input type="radio" name="icon_id" value="2"></td><td><input type="radio" name="icon_id" value="3"></td><td><input type="radio" name="icon_id" value="4"></td></tr></table></td></tr><tr><td align="center" bgcolor="D4C0A1"><b>New<br>ticker<br>text:</b></td><td bgcolor="F1E0C6"><textarea name="new_ticker" rows="3" cols="45"></textarea></td></tr><tr><td><div class="BigButton" style="background-image:url(' . $layout_name . '/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="' . $layout_name . '/images/buttons/_sbutton_submit.gif" ></div></div></form><div class="BigButton" style="background-image:url(' . $layout_name . '/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="AddTicker" src="' . $layout_name . '/images/buttons/_sbutton_cancel.gif" onClick="showNewTickerForm()" alt="AddTicker" /></div></div></td></tr></table>\';
document.getElementById("jajo").innerHTML = \'\';
showednewticker_state = "1";
}
else {
document.getElementById("newtickerform").innerHTML = \'\';
document.getElementById("jajo").innerHTML = \'<div class="BigButton" style="background-image:url(' . $layout_name . '/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="AddTicker" src="' . $layout_name . '/images/buttons/addticker.gif" onClick="showNewTickerForm()" alt="AddTicker" /></div></div>\';
showednewticker_state = "0";
}
}
</script><div id="newtickerform"></div><div id="jajo"><div class="BigButton" style="background-image:url(' . $layout_name . '/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="AddTicker" src="' . $layout_name . '/images/buttons/addticker.gif" onClick="showNewTickerForm()" alt="AddTicker" /></div></div></div><hr/>';
    //add tickers list
    $news_content .= $tickers_to_add;
    //koniec
}
$news_content .= '</div>
</div>
</div>
<div class="Border_1" style="background-image: url(' . $layout_name . '/images/content/border-1.gif);"></div>
<div class="CornerWrapper-b"><div class="Corner-bl" style="background-image: url(' . $layout_name . '/images/content/corner-bl.gif);"></div></div>
<div class="CornerWrapper-b"><div class="Corner-br" style="background-image: url(' . $layout_name . '/images/content/corner-br.gif);"></div></div>
</div>';
//end of tickers, news part
//featured article
//sem creditos do autor, apenas postado por Dhenyz Shady no X-tibia.

$news_content .= '
    <div id="news" class="Box">
    <div class="Corner-tl" style="background-image:url(' . $layout_name . '/images/content/corner-tl.gif);"></div>
    <div class="Corner-tr" style="background-image:url(' . $layout_name . '/images/content/corner-tr.gif);"></div>
    <div class="Border_1" style="background-image:url(' . $layout_name . '/images/content/border-1.gif);"></div>
    <div class="BorderTitleText" style="background-image:url(layouts/tibiacom/images/content/title-background-green.gif);"></div>
   <img class="Title" src="/images/head/Featured Article.png" alt="Contentbox headline" />
    <div class="Border_2">
        <div class="Border_3">
            <div class="BoxContent" style="background-image:url(' . $layout_name . '/images/content/scroll.gif);">
                <div id=\'TeaserThumbnail\'><img src="layouts/tibiacom/images/news/topitems.jpg" width=150 height=100 border=0 alt="" ALIGN=right hspace="10" /></div>
                <div id=\'TeaserText\'>
                    <div style="position: relative; top: -9px; margin-bottom: -60px;"></br>
				 <b><font size="5px"><center><b><font style="text-decoration: inherit; text-shadow:#000 1px -1px 2px, #000 -1px 1px 2px, #000 1px 1px 2px, #000 -1px -1px 2px" size="1px" color="white">| IP: <font color="#00FF00">www.warglobal.com.br</font> / Port: <font color="#00FF00">7171</font> / Client: <font color="#00FF00">10.51</font>/<font color="#00FF00">10.53</font> |</b></font></center><br></b><font size="2px">Seja bem vindo ao <b><font color="green">www.warglobal.com.br</font></b>, servidor feito especialmente para jogadores que gostam de um pvp up. Oferecemos quests, outfits e quest sem algumas missoes, temos uma boa jogabilidade e estabilidade que poucos ots tem, esperamos que goste.<br><br><br><br>	
                </font> </div>
	 </div>
            </div>
        </div>
    </div>
    <div class="Border_1" style="background-image: url(' . $layout_name . '/images/content/border-1.gif);"></div>
    <div class="CornerWrapper-b"><div class="Corner-bl" style="background-image: url(' . $layout_name . '/images/content/corner-bl.gif);"></div></div>
    <div class="CornerWrapper-b"><div class="Corner-br" style="background-image: url(' . $layout_name . '/images/content/corner-br.gif);"></div></div>
    </div>
';
//Fim do featured Article
//adding news
if ($action == "newnews") {
    if ($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
        $text = ($_REQUEST['text']);
        $char_id = (int) $_REQUEST['char_id'];
        $post_topic = stripslashes(trim($_REQUEST['topic']));
        $smile = (int) $_REQUEST['smile'];
        $news_icon = (int) $_REQUEST['icon_id'];
        if (empty($news_icon)) {
            $news_icon = 0;
        }
        if (empty($post_topic)) {
            $an_errors[] .= 'You can\'t add news without topic.';
        }
        if (empty($text)) {
            $an_errors[] .= 'You can\'t add empty news.';
        }
        if (empty($char_id)) {
            $an_errors[] .= 'Select character.';
        }
        //execute query
        if (empty($an_errors)) {
            $SQL->query("INSERT INTO `z_forum` (`id` ,`first_post` ,`last_post` ,`section` ,`replies` ,`views` ,`author_aid` ,`author_guid` ,`post_text` ,`post_topic` ,`post_smile` ,`post_date` ,`last_edit_aid` ,`edit_date`, `post_ip`, `icon_id`) VALUES ('NULL', '0', '" . time() . "', '1', '0', '0', '" . $account_logged->getId() . "', '" . (int) $char_id . "', " . $SQL->quote($text) . ", " . $SQL->quote($post_topic) . ", '" . (int) $smile . "', '" . time() . "', '0', '0', '" . $_SERVER['REMOTE_ADDR'] . "', '" . $news_icon . "')");
            $thread_id = $SQL->lastInsertId();
            $SQL->query("UPDATE `z_forum` SET `first_post`=" . (int) $thread_id . " WHERE `id` = " . (int) $thread_id); //show added data
            $main_content .= '<form action="index.php?subtopic=latestnews" METHOD=post><div class="BigButton" style="background-image:url(' . $layout_name . '/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="' . $layout_name . '/images/buttons/_sbutton_back.gif" ></div></div></form>';
        } else {
            //show errors
            $main_content .= '<div class="SmallBox" >  <div class="MessageContainer" >    <div class="BoxFrameHorizontal" style="background-image:url(' . $layout_name . '/images/content/box-frame-horizontal.gif);" /></div>    <div class="BoxFrameEdgeLeftTop" style="background-image:url(' . $layout_name . '/images/content/box-frame-edge.gif);" /></div>    <div class="BoxFrameEdgeRightTop" style="background-image:url(' . $layout_name . '/images/content/box-frame-edge.gif);" /></div>    <div class="ErrorMessage" >      <div class="BoxFrameVerticalLeft" style="background-image:url(' . $layout_name . '/images/content/box-frame-vertical.gif);" /></div>      <div class="BoxFrameVerticalRight" style="background-image:url(' . $layout_name . '/images/content/box-frame-vertical.gif);" /></div>      <div class="AttentionSign" style="background-image:url(' . $layout_name . '/images/content/attentionsign.gif);" /></div><b>The Following Errors Have Occurred:</b><br/>';
            foreach ($an_errors as $an_error) {
                $main_content .= '<li>' . $an_error;
            }
            $main_content .= '</div>    <div class="BoxFrameHorizontal" style="background-image:url(' . $layout_name . '/images/content/box-frame-horizontal.gif);" /></div>    <div class="BoxFrameEdgeRightBottom" style="background-image:url(' . $layout_name . '/images/content/box-frame-edge.gif);" /></div>    <div class="BoxFrameEdgeLeftBottom" style="background-image:url(' . $layout_name . '/images/content/box-frame-edge.gif);" /></div>  </div></div><br/>';
            //okno edycji newsa z wpisanymi danymi przeslanymi wczesniej
            $main_content .= '<form action="index.php?subtopic=latestnews&action=newnews" method="post" ><table border="0"><tr><td bgcolor="D4C0A1" align="center"><b>Select icon:</b></td><td><table border="0" bgcolor="F1E0C6"><tr><td><img src="' . $layout_name . '/images/news/icon_0.gif" width="20"></td><td><img src="' . $layout_name . '/images/news/icon_1.gif" width="20"></td><td><img src="' . $layout_name . '/images/news/icon_2.gif" width="20"></td><td><img src="' . $layout_name . '/images/news/icon_3.gif" width="20"></td><td><img src="' . $layout_name . '/images/news/icon_4.gif" width="20"></td></tr><tr><td><input type="radio" name="icon_id" value="0" checked="checked"></td><td><input type="radio" name="icon_id" value="1"></td><td><input type="radio" name="icon_id" value="2"></td><td><input type="radio" name="icon_id" value="3"></td><td><input type="radio" name="icon_id" value="4"></td></tr></table></td></tr><tr><td align="center" bgcolor="F1E0C6"><b>Topic:</b></td><td><input type="text" name="topic" maxlenght="50" style="width: 300px" value="' . $post_topic . '"></td></tr><tr><td align="center" bgcolor="D4C0A1"><b>News<br>text:</b></td><td bgcolor="F1E0C6"><textarea name="text" rows="6" cols="60">' . $text . '</textarea></td></tr><tr><td width="180"><b>Character:</b></td><td><select name="char_id"><option value="0">(Choose character)</option>' . $str . '</select></td></tr><tr><td><div class="BigButton" style="background-image:url(' . $layout_name . '/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="' . $layout_name . '/images/buttons/_sbutton_submit.gif" ></div></div></form><div class="BigButton" style="background-image:url(' . $layout_name . '/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="CancelAddNews" src="' . $layout_name . '/images/buttons/_sbutton_cancel.gif" onClick="location.href=\'index.php?subtopic=latestnews\';" alt="CancelAddNews" /></div></div></td></tr></table>';
        }
    } else {
        $main_content .= 'You don\'t have site-admin rights. You can\'t add news.';
    }
}
//####################Show script with new news panel############################								
if ($group_id_of_acc_logged >= $config['site']['access_admin_panel'] && $action != 'newnews') {

    $main_content .= '
<font style="font-size: 16px; font-weight: bold; margin-left: 20px;">New News</font>
<form action="index.php?subtopic=latestnews&action=newnews" method="post" >
<table border="0">
<tr>
<td bgcolor="D4C0A1" align="center"><b>Select icon:</b></td>
<td>
<table border="0">
<tr bgcolor="F1E0C6">
<td><img src="' . $layout_name . '/images/news/icon_0.gif" width="20"></td>
<td><img src="' . $layout_name . '/images/news/icon_1.gif" width="20"></td>
<td><img src="' . $layout_name . '/images/news/icon_2.gif" width="20"></td>
<td><img src="' . $layout_name . '/images/news/icon_3.gif" width="20"></td>
<td><img src="' . $layout_name . '/images/news/icon_4.gif" width="20"></td>
</tr>
<tr bgcolor="D4C0A1">
<td><input type="radio" name="icon_id" value="0" checked="checked"></td>
<td><input type="radio" name="icon_id" value="1" /></td>
<td><input type="radio" name="icon_id" value="2" /></td>
<td><input type="radio" name="icon_id" value="3" /></td>
<td><input type="radio" name="icon_id" value="4" /></td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" bgcolor="F1E0C6"><b>Topic:</b></td>
<td><input type="text" name="topic" maxlenght="50" style="width: 300px" ></td>
</tr>
<tr>
<td align="center" bgcolor="D4C0A1"><b>News<br>text:</b></td>
<td bgcolor="F1E0C6"><textarea name="text" rows="6" cols="50"></textarea></td>
</tr>
<tr>
<td width="180"><b>Character:</b></td>
<td><select name="char_id"><option value="0">(Choose character)</option>' . $str . '</select></td>
</tr>
<tr>
<td>
<div class="BigButton" style="background-image:url(' . $layout_name . '/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="' . $layout_name . '/images/buttons/_sbutton_submit.gif" ></div></div></form></td></tr>
</table>
<hr/>';
    $zapytanie = $SQL->query("SELECT `z_forum`.`icon_id`,`z_forum`.`post_topic`, `z_forum`.`author_guid`, `z_forum`.`post_date`, `z_forum`.`post_text`, `z_forum`.`id`, `z_forum`.`replies`, `players`.`name` FROM `z_forum`, `players` WHERE `section` = '1' AND `z_forum`.`id` = `first_post` AND `players`.`id` = `z_forum`.`author_guid` ORDER BY `post_date` DESC LIMIT 3;")->fetchAll();
}
//show news
//$announcements = $SQL->query("SELECT * FROM `announcements` WHERE id ORDER BY `date` DESC LIMIT 1");
//foreach ($announcements as $announcementsRow){
$news_content .= '<div id="featuredarticle" class="Box">
<div class="Corner-tl" style="background-image:url(' . $layout_name . '/images/content/corner-tl.gif);"></div>
<div class="Corner-tr" style="background-image:url(' . $layout_name . '/images/content/corner-tr.gif);"></div>
<div class="Border_1" style="background-image:url(' . $layout_name . '/images/content/border-1.gif);"></div>
<div class="BorderTitleText" style="background-image:url(' . $layout_name . '/images/content/title-background-green.gif);"></div>
<img class="Title" src="montaimg.php?text=Announcement" alt="Contentbox headline" />
<div class="Border_2">
<div class="Border_3">
<div class="BoxContent" style="background-image:url(' . $layout_name . '/images/content/scroll.gif);">
<div id="TeaserThumbnail"><img src="images/news/announcement.jpg" width="150" height="100" border="0" alt="" /></div>
<div id="TeaserText">
<div style="position: relative; margin-bottom: 2px;" >
<div style="font-size:18px; font-weight:bold;">' . $announcementsRow['title'] . '</div>
</div>
' . $announcementsRow['text'] . '
<br />
<br />
<small style="float: right;">Posted by <font color="red">' . $announcementsRow['author'] . '</font> - ' . date("d M Y", $announcementsRow['date']) . '</small>';
if ($logged) if ($account_logged->getCustomField("page_access") > 6) {
    $news_content .= '<input type="button" value="Deletar" OnClick="location.href=\'index.php?subtopic=cpanel&action=deletar_ann&id=' . $announcementsRow['id'] . '\'" />';
}
$news_content .= '
</div>
</div>
</div>
</div>

<div class="Border_1" style="background-image:url(' . $layout_name . '/images/content/border-1.gif);"></div>
<div class="CornerWrapper-b"><div class="Corner-bl" style="background-image:url(' . $layout_name . '/images/content/corner-bl.gif);"></div></div>
<div class="CornerWrapper-b"><div class="Corner-br" style="background-image:url(' . $layout_name . '/images/content/corner-br.gif);"></div></div>
</div>
';
//}//

//

