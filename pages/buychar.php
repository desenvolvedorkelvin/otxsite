<?PHP
if ($logged) {
	$main_content .= '<center><b><h3>Welcome to our characters market</h3></center></b><br>';
	$main_content .= '<b>NOTE:</b> If you put your character on sale anyone can buy it, you will lose acces to that character and you wont be able to log in with that character until someone buys it, you can also delete your offer by talking to an admin or buying your character back by yourself.<b> When someone buys your character you will get the price in points.</b>';
	$main_content .= '<br>';
	$main_content .= '
		<br>
		<div class="TableContainer">
		  <div class="CaptionContainer">
		     <div class="CaptionInnerContainer">
		        <span class="CaptionEdgeLeftTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionBorderTop" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span>        <span class="CaptionVerticalLeft" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>
		        <div class="Text">Rules to Sell</div>
		        <span class="CaptionVerticalRight" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>        <span class="CaptionBorderBottom" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span>        <span class="CaptionEdgeLeftBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>
		     </div>
		  </div>

		  <table class="Table3" cellpadding="0" cellspacing="0">
		     <tbody>
		        <tr>
		           <td>
		              <div class="InnerTableContainer">
		                 <table style="width:100%;">
		                    <tbody>
		                       <tr>
		                          <td>
		                             <div class="TableShadowContainerRightTop">
		                                <div class="TableShadowRightTop" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rt.gif);"></div>
		                             </div>
		                             <div class="TableContentAndRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rm.gif);">
		                                <div class="TableContentContainer">
		                                   <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
		                                      <tbody>
									<tr>
										<td><ul><i><small><li>You can not be online.</li><li>You can not belong to any guild.</li><li>Your account can not be banned.</li><li>Your character must be at least <strong>level 20</strong>.</li>
										</small></i></ul></td>
									</tr>
									</tbody>
								</table>
								</div>
								</div>
								<div class="TableShadowContainer">
								<div class="TableBottomShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bm.gif);">
								<div class="TableBottomLeftShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bl.gif);"></div>
								<div class="TableBottomRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-br.gif);"></div>
								</div>
								</div>
								</td>
								</tr>
								</tbody>
								</table>
								</div>
								</td>
								</tr>
								</tbody>
								</table><br/>
								  </div> ';
	$main_content .= '<br>';
	$main_content .= '    <div class="TableContainer">
		  <div class="CaptionContainer">
		     <div class="CaptionInnerContainer">
		        <span class="CaptionEdgeLeftTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionBorderTop" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span>        <span class="CaptionVerticalLeft" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>
		        <div class="Text">Sell character</div>
		        <span class="CaptionVerticalRight" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>        <span class="CaptionBorderBottom" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span>        <span class="CaptionEdgeLeftBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>
		     </div>
		  </div>

		  <table class="Table3" cellpadding="0" cellspacing="0">
		     <tbody>
		        <tr>
		           <td>
		              <div class="InnerTableContainer">
		                 <table style="width:100%;">
		                    <tbody>
		                       <tr>
		                          <td>
		                             <div class="TableShadowContainerRightTop">
		                                <div class="TableShadowRightTop" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rt.gif);"></div>
		                             </div>
		                             <div class="TableContentAndRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rm.gif);">
		                                <div class="TableContentContainer">
		                                   <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
		                                      <tbody>';
	$main_content .= '<TR BGCOLOR=' . $config['site']['darkborder'] . '><TD CLASS=black width="64px"><B></B>';

	$players_from_logged_acc = $account_logged->getPlayersList();

	$players_from_logged_acc->addOrder(new SQL_Order(new SQL_Field('name'), SQL_Order::ASC));
	$main_content .= '<center><center>Select the character you want to sell<br><form action="index.php?subtopic=buychar" method="post"><select name="char">';
	foreach ($players_from_logged_acc as $player) {
		$main_content .= '<option value="' . $player->getName() . '">' . $player->getName() . '</option>';
	}

	$main_content .= '</select>';
	$main_content .= '<center>Enter the value in Tibia Coins<br><input type="text" name="price" maxlength="5" size="10" > </center><br>';
	$main_content .= '<center><input type="submit" name="submit" value="Sell character"></TD></TR></center>';
	$main_content .= '</form>  </tbody>
												</table>
												</div>
												</div>
												<div class="TableShadowContainer">
												<div class="TableBottomShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bm.gif);">
												<div class="TableBottomLeftShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bl.gif);"></div>
												<div class="TableBottomRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-br.gif);"></div>
												</div>
												</div>
												</td>
												</tr>
												</tbody>
												</table>
												</div>
												</td>
												</tr>
												</tbody>
												</table><br/>
												  </div><br>';

	if (isset($_POST['submit'])) {

		$char = stripslashes($_POST['char']);
		$price = stripslashes($_POST['price']);
		$mensagem = "";

		$charLevel = $SQL->query('SELECT * FROM players WHERE name = "' . $char . '" LIMIT 1');
		foreach ($charLevel as $dados) {
			$level = $dados['level'];
		}		


		foreach ($players_from_logged_acc as $player) {
			if ($player->getName() == $char) {
				$check = 1;
				if ($player->isOnline()) {
					$check = 0;
					$mensagem = "Your char is online, please log out before placing it for sale! <br /><br />";
				}
				if ($player->getLevel() < 20) {
					$check = 0;
					$mensagem = "Your character must have a level greater than 20! <br /><br />";
				}
				if ($price <= 0 or $price > 10000) {
					$check = 0;
					$mensagem = "Please enter a price from 1 to 10000 Tibia Coins! <br /><br />";
				}
				if ($price % 25 != 0) {
					$check = 0;
					$mensagem = "Please enter a positive value and a multiple of 25, example: 25, 50, 75, 100 ... <br /><br />";
				}
				break;
			} else {
				$check = 0;
			}
		}

		if ($char && $price && $check == 1) {
			if (is_numeric(trim($_POST['price']))) {
				$check2 = $SQL->query("SELECT * FROM `players` WHERE `name` = '$char'");
				foreach ($check2 as $re) {
					$voc = $re['vocation'];
					$oid = $re['account_id'];
				}

				$check1 = $SQL->query("UPDATE `players` SET `account_id` = 1 WHERE `name` = '$char'");
				$check3 = $SQL->query("INSERT INTO `sellchar` VALUES ('','$char','$voc','$price','1','$oid')");
				$main_content .= '<b><center>Character successfully added to sale, Thanks!</b></center>';
				header("Location: index.php?subtopic=buychar");
			} else {
				$main_content .= '<b><center>Price in numbers!!</b></center>';
			}
		} else {
			$main_content .= '<center><h2>' . $mensagem . '</h2></center>';
		}
	}
}
if ($logged) {

	if ($action == '') {


		$main_content .= '<div class="TableContainer">
  <div class="CaptionContainer">
     <div class="CaptionInnerContainer">
        <span class="CaptionEdgeLeftTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionBorderTop" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span>        <span class="CaptionVerticalLeft" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>
        <div class="Text">Buy Character</div>
        <span class="CaptionVerticalRight" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>        <span class="CaptionBorderBottom" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span>        <span class="CaptionEdgeLeftBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>
     </div>
  </div>

  <table class="Table3" cellpadding="0" cellspacing="0">
     <tbody>
        <tr>
           <td>
              <div class="InnerTableContainer">
                 <table style="width:100%;">
                    <tbody>
                       <tr>
                          <td>
                             <div class="TableShadowContainerRightTop">
                                <div class="TableShadowRightTop" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rt.gif);"></div>
                             </div>
                             <div class="TableContentAndRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rm.gif);">
                                <div class="TableContentContainer">
                                   <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                      <tbody>';


		$main_content .= '<TR BGCOLOR=' . $config['site']['vdarkborder'] . '><TD CLASS=white width="64px"><CENTER><B></B></CENTER></TD><TD CLASS=white width="80px"><CENTER><B>Name</B></CENTER></TD><TD CLASS=white width="64px"><CENTER><B>Vocation</B></CENTER></TD><TD CLASS=white width="40px"><CENTER><B>Level</B></CENTER></TD><TD CLASS=white width="40px"><CENTER><B>Coins</B></CENTER></TD><TD CLASS=white width="64px"><CENTER><B>Continue to buy</B></CENTER></TD></TR>';

		$getall = $SQL->query('SELECT `id`, `name`, `price`, `status` FROM `sellchar` ORDER BY `id`')->fetchAll();

		if (is_array($getall)){
		foreach ($getall as $tt) {
			$namer = $tt['name'];
			$queryt = $SQL->query("SELECT `name`, `vocation`, `level`, `looktype`, `lookaddons`, `lookhead`, `lookbody`, `looklegs`, `lookfeet` FROM `players` WHERE `name` = '$namer'");
			foreach ($queryt as $ty) {
				if ($ty['vocation'] == 0) {
					$tu = 'No Vocation';
				} else if ($ty['vocation'] == 1) {
					$tu = 'Sorcerer';
				} else if ($ty['vocation'] == 2) {
					$tu = 'Druid';
				} else if ($ty['vocation'] == 3) {
					$tu = 'Paladin';
				} else if ($ty['vocation'] == 4) {
					$tu = 'Knight';
				} else if ($ty['vocation'] == 5) {
					$tu = 'Sorcerer';
				} else if ($ty['vocation'] == 6) {
					$tu = 'Druid';
				} else if ($ty['vocation'] == 7) {
					$tu = 'Paladin';
				} else if ($ty['vocation'] == 8) {
					$tu = 'Knight';
				}
				$ee = $tt['name'];
				$ii = $tt['price'];

				//inserir aqui o tdd do outfit

				$main_content .= '<TR BGCOLOR=' . $config['site']['darkborder'] . '>

	<TD height="64px" style="position:relative;"><span style="display:block; position:absolute; top:-15px; left:-10px;"><img src="http://outfit-images.ots.me/animatedOutfits1090/animoutfit.php?id=' . $ty['looktype'] . '&addons=' . $ty['lookaddons'] . '&head=' . $ty['lookhead'] . '&body=' . $ty['lookbody'] . '&legs=' . $ty['looklegs'] . '&feet=' . $ty['lookfeet'] . '"> </span><br/></TD>

	<TD CLASS=black width="64px"><CENTER><B><a href="index.php?subtopic=characters&name=' . $tt['name'] . '">' . $tt['name'] . '</a></B></CENTER></TD>
	<TD CLASS=black width="64px"><CENTER><B><small>' . $tu . '</small></B></CENTER></TD>
	<TD CLASS=black width="64px"><CENTER><B>' . $ty['level'] . '</B></CENTER></TD>
	<TD CLASS=black width="64px"><CENTER><B>' . $tt['price'] . '</B></CENTER></TD>

	<td>
   <center>
      <form id="myform" name="myform" action="?subtopic=buychar&action=buy" method="post" style="padding:0px;margin:0px;">
            <input type="hidden" name="char" value="' . $ee . '">
			<input type="hidden" name="price" value="' . $ii . '">
			<input type="submit" name="Buy" value="Continue" />
      </form>
   </center>
	</td>
	</TR>
	</form>


';
			}
		}
		}
		$main_content .= ' </tbody>
</table>
</div>
</div>
<div class="TableShadowContainer">
<div class="TableBottomShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bm.gif);">
<div class="TableBottomLeftShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bl.gif);"></div>
<div class="TableBottomRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-br.gif);"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table><br/>
  </div>';
	}

	if ($action == 'buy') {

		$name = $_POST['char'];
		$price = $_POST['price'];
		$ceh = $SQL->query("SELECT `name` FROM `sellchar` WHERE `name` = '$name'");

		if ($ceh) {

			if ($name == '') {

				$main_content .= '<b><center>Select a character to buy first</b>';
			} else {

				$user_premium_points = $account_logged->getCustomField('premium_points');
				$user_id = $account_logged->getCustomField('id');

				if ($user_premium_points >= $price) {

					$check = $SQL->query("SELECT * FROM `sellchar` WHERE `name` = '$name'");
					$check1 = $SQL->query("SELECT * FROM `players` WHERE `name` = '$name'");
					$check2 = $SQL->query("SELECT `oldid` FROM `sellchar` WHERE `name` = '$name'");
					foreach ($check as $result) {
						foreach ($check1 as $res) {
							foreach ($check2 as $ress) {

								$oid = $ress['oldid'];
								$main_content .= '<center>You bought<b> ' . $name . ' ( ' . $res['level'] . ' ) </b>for <b>' . $result['price'] . ' points.</b><br></center>';
								$main_content .= '<br>';
								$main_content .= '<center><b>The character is in your account, have fun!</b></center>';
								$execute1 = $SQL->query("UPDATE `accounts` SET `premium_points` = `premium_points` - '$price' WHERE `id` = '$user_id'");
								$execute2 = $SQL->query("UPDATE `players` SET `account_id` = '$user_id' WHERE `name` = '$name'");
								$execute2 = $SQL->query("UPDATE `accounts` SET `premium_points` = `premium_points` + '$price' WHERE `id` = '$oid'");
								$execute3 = $SQL->query("DELETE FROM `sellchar` WHERE `name` = '$name'");
							}
						}
					}
				} else {

					$main_content .= '<center><b>You do not have enough tibia coins.</b></center>';
				}
			}
		} else {
			$main_content .= '<center><b>This char can no longer be purchased.</b></center>';
		}
	}
} else {
	//pagina para nao logados
	$main_content .= '<div class="sellinfo">
			<i class="fas fa-bullhorn"></i>You are logged out!<br> <a href="?subtopic=accountmanagement">Click Here</a> to log into your account and start trading characters.
		</div>';
}
