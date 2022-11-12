<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title><?PHP echo $title; ?> ::Old Tibia::</title>
	<meta name="author" content="Bufostudio.pl" />
	<link rel="stylesheet" href="<?PHP echo $layout_name; ?>/_css/default.css" type="text/css" />
	<link rel="stylesheet" href="<?PHP echo $layout_name; ?>/_css/basic.css" type="text/css" />

	<link rel="icon" href="<?php echo $layout_name; ?>/images/simbol.ico" type="image/x-icon">

	<script type="text/javascript" src="<?PHP echo $layout_name; ?>/_js/slideshow.js"></script>
	<script type="text/javascript" src="<?PHP echo $layout_name; ?>/_js/jquery-1.4.2.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
            <script>
                function onloadCallback() {
                    $(function () {
                        grecaptcha.execute();
                    });
                }
            </script>
        
	<script type='text/javascript'>
		$(document).ready(function() {

			$("img.a").hover(
				function() {
					$(this).stop().animate({
						"opacity": "0"
					}, "slow");
				},
				function() {
					$(this).stop().animate({
						"opacity": "1"
					}, "slow");
				});
		});
	</script>
	<script src='//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' type='text/javascript'></script>
	<script>
// Set the date we're counting down to
//var countDownDate = new Date("Jan 5, 2035 8:00:00").getTime();
var countDownDate = new Date(Date.UTC(2035,1,1,8,0,0))

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"

  var hoursStr = hours.toString();
  var minutesStr = minutes.toString();
  var secondsStr = seconds.toString();

  if(hours < 10)
    hoursStr = "0" + hoursStr;
  if(minutes < 10)
    minutesStr = "0" + minutesStr;
  if(seconds < 10)
    secondsStr = "0" + secondsStr;

  document.getElementById("demo").innerHTML = hoursStr + ":"
  + minutesStr + ":" + secondsStr + "";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

	<style>
		#fbox-background {
			display: none;
			background: rgba(0, 0, 0, 0.8);
			width: 100%;
			height: 100%;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 99999;
		}

		#fbox-close {
			width: 100%;
			height: 100%;
		}

		#fbox-display {
			background: #eaeaea;
			border: 5px solid #828282;
			width: 340px;
			height: 230px;
			position: absolute;
			top: 32%;
			left: 37%;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
		}

		#fbox-button {
			float: right;
			cursor: pointer;
			position: absolute;
			right: 0px;
			top: 0px;
		}

		#fbox-button:before {
			content: "CLOSE";
			padding: 5px 8px;
			background: #828282;
			color: #eaeaea;
			font-weight: bold;
			font-size: 10px;
			font-family: Tahoma;
		}

		#fbox-link,
		#fbox-link a.visited,
		#fbox-link a,
		#fbox-link a:hover {
			color: #aaaaaa;
			font-size: 9px;
			text-decoration: none;
			text-align: center;
			padding: 5px;
		}
	</style>
	<script type='text/javascript'>
		//<![CDATA[
		jQuery.cookie = function(key, value, options) {
			// key and at least value given, set cookie...
			if (arguments.length > 1 && String(value) !== "[object Object]") {
				options = jQuery.extend({}, options);
				if (value === null || value === undefined) {
					options.expires = -1;
				}
				if (typeof options.expires === 'number') {
					var days = options.expires,
						t = options.expires = new Date();
					t.setDate(t.getDate() + days);
				}
				value = String(value);
				return (document.cookie = [
					encodeURIComponent(key), '=',
					options.raw ? value : encodeURIComponent(value),
					options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
					options.path ? '; path=' + options.path : '',
					options.domain ? '; domain=' + options.domain : '',
					options.secure ? '; secure' : ''
				].join(''));
			}
			// key and possibly options given, get cookie...
			options = value || {};
			var result, decode = options.raw ? function(s) {
				return s;
			} : decodeURIComponent;
			return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
		};
		//]]>
	</script>
	<?php echo $layout_header; ?>
</head>

<body>
	<div id="page">
		<div id="logo"></div>

		<div id="content">
			<div id="menu_top">
				<div class='img'>
					<div class="left">
						<div id='menu_top_home'>
							<a href="?subtopic=latestnews">
								<div class='fadehover'>
									<img src='/<?PHP echo $layout_name; ?>/_img/menu/news_1a.png' alt='<?PHP echo $title; ?> ::Tibia-Old:: ' class='a' />
									<img src='/<?PHP echo $layout_name; ?>/_img/menu/news_1b.png' alt='<?PHP echo $title; ?> ::Tibia-Old:: ' class='b' />
								</div>
							</a>
						</div>
						<div id='menu_top_acc'>
							<a href="?subtopic=accountmanagement">
								<div class='fadehover'>
									<img src='/<?PHP echo $layout_name; ?>/_img/menu/account_1a.png' alt='Account ::Tibia-Old:: ' class='a' />
									<img src='/<?PHP echo $layout_name; ?>/_img/menu/account_1b.png' alt='Account ::Tibia-Old:: ' class='b' />
								</div>
							</a>
						</div>
						<div id='menu_top_shop'>
							<a href="?subtopic=shopsystem">
								<div class='fadehover'>
									<img src='/<?PHP echo $layout_name; ?>/_img/menu/shop_1a.png' alt='Shop ::Tibia-Old:: ' class='a' />
									<img src='/<?PHP echo $layout_name; ?>/_img/menu/shop_1b.png' alt='Shop ::Tibia-Old:: ' class='b' />
								</div>
							</a>
						</div>

						<div class="online">
							<?PHP
							$players_online = $SQL->query("SELECT COUNT(*) AS online FROM players WHERE world_id = '.$world_id.' and online = 1");
							foreach ($players_online as $players);

							if ($config['status']['serverStatus_online'] == 1) {
								echo '<center style="text-shadow: 1px 1px #2d2d2d; text-transform: uppercase;"><img src=' . $layout_name . '/_img/online/online.png /><br/>									
										<a style="color:#FFF;" href="index.php?subtopic=whoisonline">Online: ' . $config['status']['serverStatus_players'] . '</a><br/>
			
										</center>';
							} else {
								echo '<center style="text-shadow: 1px 1px #2d2d2d; text-transform: uppercase;"><img src=' . $layout_name . '/_img/online/online.png /><br/>									
										<a style="color:#FFF;" href="index.php?subtopic=whoisonline">Online: ' . $config['status']['serverStatus_players'] . '</a><br/>
										
										</center>';
							}
							?>
						</div>

						<div class="right">
							<div id='menu_top_forum'>
								<a href="?subtopic=forum">
									<div class='fadehover'>
										<img src='/<?PHP echo $layout_name; ?>/_img/menu/forum_1a.png' alt='Forum ::Tibia-Old:: ' class='a' />
										<img src='/<?PHP echo $layout_name; ?>/_img/menu/forum_1b.png' alt='Forum ::Tibia-Old:: ' class='b' />
									</div>
								</a>
							</div>
							<div id='menu_top_highscores'>
								<a href="?subtopic=highscores">
									<div class='fadehover'>
										<img src='/<?PHP echo $layout_name; ?>/_img/menu/highscores_1a.png' alt='Highscores ::Tibia-Old:: ' class='a' />
										<img src='/<?PHP echo $layout_name; ?>/_img/menu/highscores_1b.png' alt='Highscores ::Tibia-Old:: ' class='b' />
									</div>
								</a>
							</div>
							<div id='menu_top_register'>
								<a href="?subtopic=createaccount">
									<div class='fadehover'>
										<img src='/<?PHP echo $layout_name; ?>/_img/menu/register_1a.png' alt='Register ::Tibia-Old:: ' class='a' />
										<img src='/<?PHP echo $layout_name; ?>/_img/menu/register_1b.png' alt='Register ::Tibia-Old:: ' class='b' />
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="menu_left">
				<div id="menu-label">
					<div id="icon-news"></div>
					<div id="text-news"></div>
				</div>
				<div id="menu_links">
					<ul>
						<li><a href="?subtopic=latestnews">&rarr; Latest news</a></li>
						<li><a href="?subtopic=archive">&rarr; News archive</a></li>
					</ul>
				</div>
				
				<div class="clean_5"></div>
				
				<div id="menu-label">
					<div id="icon-market"></div>
					<div id="text-market"></div>
				</div>
				
				<div id="menu_links">
					<li><a href="?subtopic=buychar"><font color="DeepSkyBlue">&rarr; Buy Character</a></li></font>
					<li><a href="?subtopic=tradeoff"><font color="lime">&rarr; Trade Items</a></li></font>
				</div>

				<div class="clean_5"></div>

				<div id="menu-label">
					<div id="icon-account"></div>
					<div id="text-account"></div>
				</div>
				<div id="menu_links">
					<ul>
						<?PHP if ($logged) {
							if ($group_id_of_acc_logged >= $config['site']['access_admin_panel'])
								echo '<li><a href="?subtopic=phpmyadmin"><font color="red">&rarr; PhpMyAdmin</font></a></li>
								<li><a href="?subtopic=shopadmin"><font color="red">&rarr; Shop Admin</font></a></li>';
							if ($logged)
								echo '<li><a href="?subtopic=accountmanagement"><font color="orange"><b>Acc. Management</b></font></a></li>';
						} else {
							echo '<li><a href="?subtopic=accountmanagement"><b>&rarr; Login</b></a></li>
								<li><a href="?subtopic=createaccount"><b>&rarr; Create Account</b></a></li>
								<li><a href="?subtopic=lostaccount"><b>&rarr; Lost Account</b></a></li>';
						} ?>
						<li><a href="?subtopic=tibiarules"><b>&rarr; Server Rules</b></a></li>
					</ul>
				</div>

				<div class="clean_5"></div>

				<div id="menu-label">
					<div id="icon-community"></div>
					<div id="text-community"></div>
				</div>
				<div id="menu_links">
					<li><a href="?subtopic=characters">&rarr; Characters</a></li>
					<li><a href="?subtopic=whoisonline">&rarr; Who is Online?</a></li>
					<li><a href="?subtopic=highscores">&rarr; Highscores</a></li>
					<li><a href="?subtopic=killstatistics">&rarr; Kill Statistics</a></li>
					<li><a href="?subtopic=guilds">&rarr; Guilds</a></li>
					<li><a href="?subtopic=wars">&rarr; Guild Wars</a></li>
					<li><a href="?subtopic=forum">&rarr; Forum</a></li>
					<li><a href="?subtopic=team">&rarr; Support</a></li>
				</div>
				

				<div class="clean_5"></div>

				<div id="menu-label">
					<div id="icon-library"></div>
					<div id="text-library"></div>
				</div>
				<div id="menu_links">
					<li><a href="?subtopic=raid"><font color="#FFA500">&rarr; Boss Room</a></li></font>
					<li><a href="?subtopic=respawn"><font color="#FFA500">&rarr; World Map</a></li></font>
					<li><a href="?subtopic=items"><font color="#FFA500">&rarr; Items Wiki</a></li></font>
					<li><a href="?subtopic=serverinfo">&rarr; Server Info</a></li>
					<li><a href="?subtopic=tasks">&rarr; Task Info</a></li>
					<li><a href="?subtopic=downloads"><font color="yellow">&rarr; Downloads</a></li></font>
				</div>

				<div class="clean_5"></div>

				<div id="menu-label">
					<div id="icon-shop"></div>
					<div id="text-shop"></div>
				</div>
				<div id="menu_links">
					<li><a href="?subtopic=buypoints&system=homepay"><b>
								<font color="red">&rarr; Buy Points</font>
							</b></a></li>
					<li><a href="?subtopic=shopsystem"><b>
								<font color="green">&rarr; Shop Offers</font>
							</b></a></li>
					<?PHP
					if ($logged)
						echo '<li><a href="?subtopic=shopsystem&action=show_history"><b>&rarr; Trans History</b></a></li>';
					?>
				</div>

			</div>

			<div id="content_text">
				<?PHP echo $main_content; ?>
			</div>
			
				<div id="menu_right">
				<div id="menu-label">
				<div id="icon-boost"></div>
				<div id="text-boost"></div>
				</div>
				<span class="white" style="font-weight: bold;">	&nbsp;&nbsp; Exp Double: </span><i></i><br/>
				<?php
					$count = $config['site']['boosted_monster_count'];
					$monstersData = '';
					$query = $SQL->query("SELECT * FROM `global_storage` WHERE (`key` > 1000 AND `key` <= (1000 + $count))");
					foreach($query as $monster) {
					$data = explode(":", $monster['value']);
					$monstersData .= '<span class="white" style="font-weight: bold;">&nbsp;&nbsp;  </span><i>'.$data[0].' (+'.$data[1].'% Exp)</i><br/>';
				}
				echo $monstersData;
				?>
				<div id="menu_links">
				</div>
					<div class="clean_5"></div>
		<div class="clean_5"></div>
				<div id="menu-label">
					<div id="icon-info"></div>
					<div id="text-info"></div>
				</div>
				<span class="white" style="font-weight: bold;">&nbsp;&nbsp; Exp: </span><i>20x (+ Stages)</i><br />
				<span class="white" style="font-weight: bold;">&nbsp;&nbsp; Skill: </span><i>7x</i><br />
				<span class="white" style="font-weight: bold;">&nbsp;&nbsp; Magic: </span><i>3x</i><br />
				<span class="white" style="font-weight: bold;">&nbsp;&nbsp; Loot: </span><i>3x</i><br/>
				<span class="white" style="font-weight: bold;">&nbsp;&nbsp; Save in: </span><span class="white" id="demo"></span><br/>

				<div class="clean_5"></div>
	<div class="clean_5"></div>
				<div id="menu-label">
					<div id="icon-search"></div>
					<div id="text-search"></div>
				</div>
	<div class="clean_5"></div>
				<div class="clean_5"></div>
				<center>
					<FORM ACTION="?subtopic=characters" METHOD=post>
						<INPUT NAME="name" VALUE="" class="search" SIZE=20 MAXLENGTH=29>
						<div class="clean_5"></div>
						<INPUT TYPE=image NAME="Submit" SRC="layouts/cyber/images/buttons/sbutton_submit.gif" BORDER=0 WIDTH=120 HEIGHT=18>
					</FORM>
				</center>

				<div class="clean_5"></div>
					<div class="clean_5"></div>
				<div id="menu-label">
				<div id="icon-social"></div>
				<div id="text-social"></div>
				</div>

				<div class="clean_5"></div>
				<div id="themeboxews-content">
	<div class="clean_5"></div>
				<center>
				<div style="margin-bottom:10px; margin-left:20px; margin-top:8px;">
				<div style="float:left">
				<a href="https://discord.gg/zS4U5tcn" target="_blank"><img src="images/discord.png" style="width:48px; height:48px; border:2px solid $config['site']['lightborder']; border-radius:15px;"/></a>
				</div>
				</center>
							<center>
				<div style="margin-bottom:10px; margin-left:20px; margin-top:8px;">
				<div style="float:left">
				<a href="https://discord.gg/zS4U5tcn" target="_blank"><img src="images/face.png" style="width:48px; height:48px; border:2px solid $config['site']['lightborder']; border-radius:15px;"/></a>
				</div>
				</center>
											<center>
				<div style="margin-bottom:10px; margin-left:20px; margin-top:8px;">
				<div style="float:left">
				<a href="https://discord.gg/zS4U5tcn" target="_blank"><img src="images/insta.png" style="width:48px; height:48px; border:2px solid $config['site']['lightborder']; border-radius:15px;"/></a>
				</div>
				</center>
					<div class="clean_5"></div>
				<div class="clean_5"></div>

				<div id="menu-label">
                    <div id="icon-toplevel"></div>
                    <div id="text-toplevel"></div>
                </div>

                <table width="100%" border="0">
                    <?PHP
                    $order = 0;
                    $number_of_people = 0;
                    $skills = $SQL->query('SELECT name,online,level,experience,vocation,promotion FROM players WHERE players.deleted = 0 AND players.group_id < ' . $config['site']['players_group_id_block'] . ' AND name != "Account Manager" AND name != "Rook Sample" AND name != "Sorcerer Sample" AND name != "Druid Sample" AND name != "Paladin Sample" AND name != "Knight Sample" ORDER BY level DESC, experience DESC LIMIT 10;');
                    foreach ($skills as $skill) {
                        $order++;
                        if (is_int($number_of_people / 2))
                            $bgcolor = $config['site']['darkborder'];
                        else
                            $bgcolor = $config['site']['lightborder'];
                        $number_of_people++;
                        $players_skill .= '<tr BGCOLOR="' . $bgcolor . '"><td align="center">' . $order . '.</td><td align="left"><B><a href="?subtopic=characters&name=' . urlencode($skill['name']) . '">' . ($skill['online'] > 0 ? "<font color='green'>" . $skill['name'] . "</font>" : "" . $skill['name'] . "</font>") . '</a></td> <td align="center"><font color="#7073FC"><em>LvL ' . $skill['level'] . '</em></font></td>';
                    }
                    echo "$players_skill";
                    ?>
                </table>
	<div class="clean_5"></div>
				<div class="clean_5"></div>

				<div id="menu-label">
					<div id="icon-topguilds"></div>
					<div id="text-topguilds"></div>
				</div>

				<table width="100%" border="0">
					<?PHP
					$guilds = $SQL->query('SELECT `g`.`id` AS `id`, `g`.`name` AS `name`,
							`g`.`logo_gfx_name` AS `logo`, COUNT(`g`.`name`) as `frags`
					FROM `killers` k
							LEFT JOIN `player_killers` pk ON `k`.`id` = `pk`.`kill_id`
							LEFT JOIN `players` p ON `pk`.`player_id` = `p`.`id`
							LEFT JOIN `guild_ranks` gr ON `p`.`rank_id` = `gr`.`id`
							LEFT JOIN `guilds` g ON `gr`.`guild_id` = `g`.`id`
					WHERE `k`.`unjustified` = 1 AND `k`.`final_hit` = 1
							GROUP BY `name`
							ORDER BY `frags` DESC, `name` ASC
							LIMIT 0, 10;');
					$i = 0;
					foreach ($guilds as $guild) {
						$i++;
						echo '<tr BGCOLOR="' . $bgcolor . '">
								<td align="center">' . $i . '. </td>
								<td align="left">
									<B><a href="?subtopic=guilds&action=show&guild=' . $guild['id'] . '">' . $guild['name'] . '</a></b>
								</td>
								<td align="center">' . $guild['frags'] . ' kills</td>
							</tr>';
					}
					?>
				</table>
			</div>
		</div>

		<div id="content_bot"></div>
	</div>
	
</body>

</html>