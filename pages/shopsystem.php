<?php
if(!defined('INITIALIZED'))
	exit;

if($config['site']['shop_system'])
{
	if($logged)
	{
		$user_premium_points = $account_logged->getCustomField('premium_points');
	}
	else
	{
		$user_premium_points = 'Login first';
	}

	$outfits_images_path = "images/outfits_shop/";
	$outfits_images_extension = ".gif";

	function getItemByID($id)
	{
		$id = (int) $id;
		$SQL = $GLOBALS['SQL'];
		$data = $SQL->query('SELECT * FROM '.$SQL->tableName('z_shop_offer').' WHERE '.$SQL->fieldName('id').' = '.$SQL->quote($id).';')->fetch();
		if($data['offer_type'] == 'item')
		{
			$offer['id'] = $data['id'];
			$offer['type'] = $data['offer_type'];
			$offer['item_id'] = $data['itemid1'];
			$offer['item_count'] = $data['count1'];
			$offer['points'] = $data['points'];
			$offer['description'] = $data['offer_description'];
			$offer['name'] = $data['offer_name'];
		}
		elseif($data['offer_type'] == 'scroll')
		{
			$offer['id'] = $data['id'];
			$offer['type'] = $data['offer_type'];
			$offer['item_id'] = $data['itemid1'];
			$offer['item_count'] = $data['count1'];
			$offer['points'] = $data['points'];
			$offer['description'] = $data['offer_description'];
			$offer['name'] = $data['offer_name'];
		}
		elseif($data['offer_type'] == 'decoration')
		{
			$offer['id'] = $data['id'];
			$offer['type'] = $data['offer_type'];
			$offer['item_id'] = $data['itemid1'];
			$offer['item_count'] = $data['count1'];
			$offer['points'] = $data['points'];
			$offer['description'] = $data['offer_description'];
			$offer['name'] = $data['offer_name'];
		}
		elseif($data['offer_type'] == 'outfit')
		{
			$offer['id'] = $data['id'];
			$offer['type'] = $data['offer_type'];
			$offer['item_id'] = $data['itemid1'];
			$offer['item_count'] = $data['count1'];
			$offer['points'] = $data['points'];
			$offer['description'] = $data['offer_description'];
			$offer['name'] = $data['offer_name'];
		}
		elseif($data['offer_type'] == 'container')
		{
			$offer['id'] = $data['id'];
			$offer['type'] = $data['offer_type'];
			$offer['item_id'] = $data['itemid1'];
			$offer['item_count'] = $data['count1'];
			$offer['points'] = $data['points'];
			$offer['description'] = $data['offer_description'];
			$offer['name'] = $data['offer_name'];
		}
		return $offer;
	}

	function getOfferArray()
	{
		$offer_list = $GLOBALS['SQL']->query('SELECT * FROM '.$GLOBALS['SQL']->tableName('z_shop_offer').';');
		$i_item = 0;
		$i_scroll = 0;
		$i_outfit = 0;
		$i_decoration = 0;
		$i_container = 0;
		while($data = $offer_list->fetch())
		{
			if($data['offer_type'] == 'item')
			{
				$offer_array['item'][$i_item]['id'] = $data['id'];
				$offer_array['item'][$i_item]['item_id'] = $data['itemid1'];
				$offer_array['item'][$i_item]['item_count'] = $data['count1'];
				$offer_array['item'][$i_item]['points'] = $data['points'];
				$offer_array['item'][$i_item]['description'] = $data['offer_description'];
				$offer_array['item'][$i_item]['name'] = $data['offer_name'];
				$i_item++;
			}
			elseif($data['offer_type'] == 'scroll')
			{
				$offer_array['scroll'][$i_scroll]['id'] = $data['id'];
				$offer_array['scroll'][$i_scroll]['item_id'] = $data['itemid1'];
				$offer_array['scroll'][$i_scroll]['item_count'] = $data['count1'];
				$offer_array['scroll'][$i_scroll]['points'] = $data['points'];
				$offer_array['scroll'][$i_scroll]['description'] = $data['offer_description'];
				$offer_array['scroll'][$i_scroll]['name'] = $data['offer_name'];
				$i_scroll++;
			}
			elseif($data['offer_type'] == 'outfit')
			{
				$offer_array['outfit'][$i_outfit]['id'] = $data['id'];
				$offer_array['outfit'][$i_outfit]['item_id'] = $data['itemid1'];
				$offer_array['outfit'][$i_outfit]['item_count'] = $data['count1'];
				$offer_array['outfit'][$i_outfit]['points'] = $data['points'];
				$offer_array['outfit'][$i_outfit]['description'] = $data['offer_description'];
				$offer_array['outfit'][$i_outfit]['name'] = $data['offer_name'];
				$i_outfit++;
			}			
			elseif($data['offer_type'] == 'decoration')
			{
				$offer_array['decoration'][$i_decoration]['id'] = $data['id'];
				$offer_array['decoration'][$i_decoration]['item_id'] = $data['itemid1'];
				$offer_array['decoration'][$i_decoration]['item_count'] = $data['count1'];
				$offer_array['decoration'][$i_decoration]['points'] = $data['points'];
				$offer_array['decoration'][$i_decoration]['description'] = $data['offer_description'];
				$offer_array['decoration'][$i_decoration]['name'] = $data['offer_name'];
				$i_decoration++;
			}	
			elseif($data['offer_type'] == 'container')
			{
				$offer_array['container'][$i_container]['id'] = $data['id'];
				$offer_array['container'][$i_container]['container_id'] = $data['itemid1'];
				$offer_array['container'][$i_container]['container_count'] = $data['count1'];
				$offer_array['container'][$i_container]['item_id'] = $data['itemid2'];
				$offer_array['container'][$i_container]['item_count'] = $data['count2'];
				$offer_array['container'][$i_container]['points'] = $data['points'];
				$offer_array['container'][$i_container]['description'] = $data['offer_description'];
				$offer_array['container'][$i_container]['name'] = $data['offer_name'];
				$i_container++;
			}
		}
		return $offer_array;
	}
	if(($action == '') or ($action == 'item') or ($action == 'scroll') or ($action == 'decoration') or ($action == 'outfit') or ($action == 'container'))
	{
		unset($_SESSION['viewed_confirmation_page']);
		$offer_list = getOfferArray();

		if(empty($action))
		{
			if(count($offer_list['item']) > 0)
				$action = 'item';
			elseif(count($offer_list['scroll']) > 0)
				$action = 'scroll';
			elseif(count($offer_list['outfit']) > 0)
				$action = 'outfit';			
			elseif(count($offer_list['decoration']) > 0)
				$action = 'decoration';
				elseif(count($offer_list['container']) > 0)
				$action = 'container';
		}

		function selectcolor($value)
		{
			if($GLOBALS['action'] == $value)
				return '#505050; color: #FFFFFF';
			else
				return '#303030; color: #aaaaaa';
		}

		if((count($offer_list['item']) > 0) or (count($offer_list['scroll']) > 0) or (count($offer_list['outfit']) > 0) or (count($offer_list['decoration']) > 0) or (count($offer_list['container']) > 0))
		{
			$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=0 CELLPADDING=4><TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white colspan="2"><B>Choose a categorie: </B>';

			if(count($offer_list['item']) > 0) $main_content .= '<a href="?subtopic=shopsystem&action=item" style="padding: 5px 5px 7px 5px; margin: 5px 1px 0px 1px; background-color: '.selectcolor('item').';">ITEMS</a>';

			if(count($offer_list['scroll']) > 0) $main_content .= '<a href="?subtopic=shopsystem&action=scroll" style="padding: 5px 5px 7px 5px; margin: 5px 1px 0px 1px; background-color: '.selectcolor('scroll').';">SCROLLS</a>';

			if(count($offer_list['decoration']) > 0) $main_content .= '<a href="?subtopic=shopsystem&action=decoration" style="padding: 5px 5px 7px 5px; margin: 5px 1px 0px 1px; background-color: '.selectcolor('decoration').';">DECORATION</a>';

			if(count($offer_list['outfit']) > 0) $main_content .= '<a href="?subtopic=shopsystem&action=outfit" style="padding: 5px 5px 7px 5px; margin: 5px 1px 0px 1px; background-color: '.selectcolor('outfit').';"><font color=yellow>OUTFITS</font></a>';

			if(count($offer_list['container']) > 0) $main_content .= '<a href="?subtopic=shopsystem&action=container" style="padding: 5px 5px 7px 5px; margin: 5px 1px 0px 1px; background-color: '.selectcolor('container').';">CONTAINERS</a>';

			$main_content .= '</TD></TR></TD></TR></table><table BORDER=0 CELLPaDDING="4" CELLSPaCING="1" style="width:100%;font-weight:bold;text-align:center;"><tr style="background:#505050;"><td colspan="3" style="height:px;"></td></tr></table>';
		}

		//show list of item offers
		if((count($offer_list['item']) > 0) and ($action == 'item'))
		{
			$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%"><tr bgcolor="'.$config['site']['vdarkborder'].'"><td width="8%" align="center" class="white"><b>Points</b></td><td width="9%" align="center" class="white"><b>Picture</b></td><td width="350" align="left" class="white"><b>Description</b></td><td width="100" align="center" class="white"><b>Select product</b></td></tr>';
			foreach($offer_list['item'] as $item)
			{
				if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
				$main_content .= '<tr bgcolor="'.$bgcolor.'"><td align="center"><b>'.$item['points'].'</b></td><td align="center"><img src="' . $config['site']['item_images_url'] . $item['item_id'] . $config['site']['item_images_extension'] . '"></td><td><b>'.htmlspecialchars($item['name']).'</b><br />'.htmlspecialchars($item['description']).'</td><td align="center">';
				if(!$logged)
				{
					$main_content .= '<b>Login to buy</b>';
				}
				else
				{
					$main_content .= '<form action="?subtopic=shopsystem&action=select_player" method="POST" name="itemform_'.$item['id'].'"><input type="hidden" name="buy_id" value="'.$item['id'].'"><div class="navibutton"><a href="" onClick="itemform_'.$item['id'].'.submit();return false;">BUY</a></div></form>';
				}
				$main_content .= '</td></tr>';
			}
			$main_content .= '</table>';
		}

		//show list of scroll offers
		if((count($offer_list['scroll']) > 0) and ($action == 'scroll'))
		{
			$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%"><tr bgcolor="'.$config['site']['vdarkborder'].'"><td width="8%" align="center" class="white"><b>Points</b></td><td width="9%" align="center" class="white"><b>Picture</b></td><td width="350" align="left" class="white"><b>Description</b></td><td width="250" align="center" class="white"><b>Select product</b></td></tr>';
			foreach($offer_list['scroll'] as $scroll)
			{
				if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
				$main_content .= '<tr bgcolor="'.$bgcolor.'"><td align="center"><b>'.$scroll['points'].'</b></td><td align="center"><img src="' . $config['site']['item_images_url'] . $scroll['item_id'] . $config['site']['item_images_extension'] . '"></td><td><b>'.htmlspecialchars($scroll['name']).'</b> ('.$scroll['points'].' points)<br />'.htmlspecialchars($scroll['description']).'</td><td align="center">';
				if(!$logged)
				{
					$main_content .= '<b>Login to buy</b>';
				}
				else
				{
					$main_content .= '<form action="?subtopic=shopsystem&action=select_player" method="POST" name="itemform_'.$scroll['id'].'"><input type="hidden" name="buy_id" value="'.$scroll['id'].'"><div class="navibutton"><a href="" onClick="itemform_'.$scroll['id'].'.submit();return false;">BUY</a></div></form>';
				}
				$main_content .= '</td></tr>';
			}
			$main_content .= '</table>';
		}

		//show list of decoration offers
		if((count($offer_list['decoration']) > 0) and ($action == 'decoration'))
		{
			$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%"><tr bgcolor="'.$config['site']['vdarkborder'].'"><td width="8%" align="center" class="white"><b>Points</b></td><td width="9%" align="center" class="white"><b>Picture</b></td><td width="350" align="left" class="white"><b>Description</b></td><td width="250" align="center" class="white"><b>Select product</b></td></tr>';
			foreach($offer_list['decoration'] as $decoration)
			{
				if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
				$main_content .= '<tr bgcolor="'.$bgcolor.'"><td align="center"><b>'.$decoration['points'].'</b></td><td align="center"><img src="' . $config['site']['item_images_url'] . $decoration['item_id'] . $config['site']['item_images_extension'] . '"></td><td><b>'.htmlspecialchars($decoration['name']).'</b> ('.$decoration['points'].' points)<br />'.htmlspecialchars($decoration['description']).'</td><td align="center">';
				if(!$logged)
				{
					$main_content .= '<b>Login to buy</b>';
				}
				else
				{
					$main_content .= '<form action="?subtopic=shopsystem&action=select_player" method="POST" name="itemform_'.$decoration['id'].'"><input type="hidden" name="buy_id" value="'.$decoration['id'].'"><div class="navibutton"><a href="" onClick="itemform_'.$decoration['id'].'.submit();return false;">BUY</a></div></form>';
				}
				$main_content .= '</td></tr>';
			}
			$main_content .= '</table>';
		}
	
		//show list of outfit offers
		if((count($offer_list['outfit']) > 0) and ($action == 'outfit'))
		{
			$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%"><tr bgcolor="'.$config['site']['vdarkborder'].'"><td width="8%" align="center" class="white"><b>Points</b></td><td width="9%" align="center" class="white"><b>Picture</b></td><td width="350" align="left" class="white"><b>Description</b></td><td width="250" align="center" class="white"><b>Select product</b></td></tr>';
			foreach($offer_list['outfit'] as $outfit)
			{
				if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
				$main_content .= '<tr bgcolor="'.$bgcolor.'"><td align="center"><b>'.$outfit['points'].'</b></td><td align="center"><img src="' . $outfits_images_path . $outfit['item_id'] . $outfits_images_extension.'"></td><td><b>'.htmlspecialchars($outfit['name']).'</b> ('.$outfit['points'].' points)<br />'.htmlspecialchars($outfit['description']).'</td><td align="center">';
				if(!$logged)
				{
					$main_content .= '<b>Login to buy</b>';
				}
				else
				{
					$main_content .= '<form action="?subtopic=shopsystem&action=select_player" method="POST" name="itemform_'.$outfit['id'].'"><input type="hidden" name="buy_id" value="'.$outfit['id'].'"><div class="navibutton"><a href="" onClick="itemform_'.$outfit['id'].'.submit();return false;">BUY</a></div></form>';
				}
				$main_content .= '</td></tr>';
			}
			$main_content .= '</table>';
		}

		//show list of container offers
		if((count($offer_list['container']) > 0) and ($action == 'container'))
		{
			if(!is_int($number_of_rows / 2)) { $bgcolor = $config['site']['darkborder']; } else { $bgcolor = $config['site']['lightborder']; } $number_of_rows++;
			$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%"><tr bgcolor="'.$config['site']['vdarkborder'].'"><td width="8%" align="center" class="white"><b>Points</b></td><td width="9%" align="center" class="white"><b>Picture</b></td><td width="350" align="left" class="white"><b>Description</b></td><td width="250" align="center" class="white"><b>Select product</b></td></tr>';
			foreach($offer_list['container'] as $container)
			{
				$main_content .= '<tr bgcolor="'.$bgcolor.'"><td align="center"><b>'.$container['points'].'</b></td><td align="center"><img src="' . $config['site']['item_images_url'] . $container['item_id'] . $config['site']['item_images_extension'] . '"></td><td><b>'.htmlspecialchars($container['name']).'</b> ('.$container['points'].' points)<br />'.htmlspecialchars($container['description']).'</td><td align="center">';
				if(!$logged)
				{
					$main_content .= '<b>Login to buy</b>';
				}
				else
				{
					$main_content .= '<form action="?subtopic=shopsystem&action=select_player" method="POST" name="contform_'.$container['id'].'"><input type="hidden" name="buy_id" value="'.$container['id'].'"><div class="navibutton"><a href="" onClick="contform_'.$container['id'].'.submit();return false;">BUY</a></div></form>';
				}
				$main_content .= '</td></tr>';
			}
			$main_content .= '</table>';
		}

		//Finish container
		if((count($offer_list['item']) > 0) or (count($offer_list['mount']) > 0) or (count($offer_list['addon']) > 0) or (count($offer_list['container']) > 0) or (count($offer_list['mage']) > 0) or (count($offer_list['pala']) > 0) or (count($offer_list['kina']) > 0))
		{
			$main_content .= '<table BORDER=0 CELLPaDDING="4" CELLSPaCING="1" style="width:100%;font-weight:bold;text-align:center;">
			<tr style="background:#505050;">
					<td colspan="3" style="height:px;"></td>
			</tr>
			</table>';
		}
	}
	if($action == 'select_player')
	{
		unset($_SESSION['viewed_confirmation_page']);
		if(!$logged) {
			$errormessage .= 'Please login first.';
		}
		else
		{
			$buy_id = (int) $_REQUEST['buy_id'];
			if(empty($buy_id))
			{
				$errormessage .= 'Please <a href="?subtopic=shopsystem">select item</a> first.';
			}
			else
			{
				$buy_offer = getItemByID($buy_id);
				if(isset($buy_offer['id'])) //item exist in database
				{
					if($user_premium_points >= $buy_offer['points'])
					{
						$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%">
						<tr bgcolor="'.$config['site']['vdarkborder'].'"><td colspan="2" class="white"><b>Selected Offer</b></td></tr>
						<tr bgcolor="'.$config['site']['lightborder'].'"><td width="100"><b>Name:</b></td><td width="550">'.htmlspecialchars($buy_offer['name']).'</td></tr>
						<tr bgcolor="'.$config['site']['darkborder'].'"><td width="100"><b>Description:</b></td><td width="550">'.htmlspecialchars($buy_offer['description']).'</td></tr>
						</table><br />
						<form action="?subtopic=shopsystem&action=confirm_transaction" method="POST"><input type="hidden" name="buy_id" value="'.$buy_id.'">
						<table border="0" cellpadding="4" cellspacing="1" width="100%">
						<tr bgcolor="'.$config['site']['vdarkborder'].'"><td colspan="2" class="white"><b>Give item to player from your account</b></td></tr>
						<tr bgcolor="'.$config['site']['lightborder'].'"><td width="110"><b>Name:</b></td><td width="550"><select name="buy_name">';
						$players_from_logged_acc = $account_logged->getPlayersList();
						if(count($players_from_logged_acc) > 0)
						{
							foreach($players_from_logged_acc as $player)
							{
								$main_content .= '<option>'.htmlspecialchars($player->getName()).'</option>';
							}
						}
						else
						{
							$main_content .= 'You don\'t have any character on your account.';
						}
						$main_content .= '</select>&nbsp;<input type="submit" value="Give"></td></tr>
						</table>
						</form><br /><form action="?subtopic=shopsystem&action=confirm_transaction" method="POST"><input type="hidden" name="buy_id" value="'.$buy_id.'">
							<table border="0" cellpadding="4" cellspacing="1" width="100%">
							<tr bgcolor="'.$config['site']['vdarkborder'].'"><td colspan="2" class="white"><b>Give item to other player</b></td></tr>
							<tr bgcolor="'.$config['site']['lightborder'].'"><td width="110"><b>To player:</b></td><td width="550"><input type="text" name="buy_name"> - name of player</td></tr>
							<tr bgcolor="'.$config['site']['darkborder'].'"><td width="110"><b>From:</b></td><td width="550"><input type="text" name="buy_from">&nbsp;<input type="submit" value="Give"> - your nick, \'empty\' = Anonymous</td></tr>
							</table><br />
							</form>';

					}
					else
					{
						$errormessage .= 'For this item you need <b>'.$buy_offer['points'].'</b> points. You have only <b>'.$user_premium_points.'</b> premium points. Please <a href="?subtopic=shopsystem">select other item</a> or buy premium points.';
					}
				}
				else
				{
					$errormessage .= 'Offer with ID <b>'.$buy_id.'</b> doesn\'t exist. Please <a href="?subtopic=shopsystem">select item</a> again.';
				}
			}
		}
		if(!empty($errormessage))
		{
			$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
				<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Informations</B></TD></TR>
				<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.$errormessage.'</b></TD></TR>
				</table>';
		}
	}
	elseif($action == 'confirm_transaction')
	{
		if(!$logged)
		{
			$errormessage .= 'Please login first.';
		}
		else
		{
			$buy_id = (int) $_POST['buy_id'];
			$buy_name = trim($_POST['buy_name']);
			$buy_from = trim($_POST['buy_from']);
			if(empty($buy_from))
			{
				$buy_from = 'Anonymous';
			}
			if(empty($buy_id))
			{
				$errormessage .= 'Please <a href="?subtopic=shopsystem">select item</a> first.';
			}
			else
			{
				if(!check_name($buy_from))
				{
					$errormessage .= 'Invalid nick ("from player") format. Please <a href="?subtopic=shopsystem&action=select_player&buy_id='.$buy_id.'">select other name</a> or contact with administrator.';
				}
				else
				{
					$buy_offer = getItemByID($buy_id);
					if(isset($buy_offer['id'])) //item exist in database
					{
						if($user_premium_points >= $buy_offer['points'])
						{
							if(check_name($buy_name))
							{
								$buy_player = new Player();
								$buy_player->find($buy_name);
								if($buy_player->isLoaded())
								{
									$buy_player_account = $buy_player->getAccount();
									if($_SESSION['viewed_confirmation_page'] == 'yes' && $_POST['buy_confirmed'] == 'yes')
									{
										if($buy_offer['type'] == 'item' || $buy_offer['type'] == 'scroll' || $buy_offer['type'] == 'decoration' || $buy_offer['type'] == 'outfit')
										{
											$sql = 'INSERT INTO '.$SQL->tableName('z_ots_comunication').' ('.$SQL->fieldName('id').','.$SQL->fieldName('name').','.$SQL->fieldName('type').','.$SQL->fieldName('action').','.$SQL->fieldName('param1').','.$SQL->fieldName('param2').','.$SQL->fieldName('param3').','.$SQL->fieldName('param4').','.$SQL->fieldName('param5').','.$SQL->fieldName('param6').','.$SQL->fieldName('param7').','.$SQL->fieldName('delete_it').') VALUES (NULL, '.$SQL->quote($buy_player->getName()).', '.$SQL->quote('login').', '.$SQL->quote('give_item').', '.$SQL->quote($buy_offer['item_id']).', '.$SQL->quote($buy_offer['item_count']).', '.$SQL->quote('').', '.$SQL->quote('').', '.$SQL->quote('item').', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote($buy_offer['id']).', '.$SQL->quote(1).');';
											$SQL->query($sql);
											$save_transaction = 'INSERT INTO '.$SQL->tableName('z_shop_history_item').' ('.$SQL->fieldName('id').','.$SQL->fieldName('to_name').','.$SQL->fieldName('to_account').','.$SQL->fieldName('from_nick').','.$SQL->fieldName('from_account').','.$SQL->fieldName('price').','.$SQL->fieldName('offer_id').','.$SQL->fieldName('trans_state').','.$SQL->fieldName('trans_start').','.$SQL->fieldName('trans_real').') VALUES ('.$SQL->lastInsertId().', '.$SQL->quote($buy_player->getName()).', '.$SQL->quote($buy_player_account->getId()).', '.$SQL->quote($buy_from).',  '.$SQL->quote($account_logged->getId()).', '.$SQL->quote($buy_offer['points']).', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('wait').', '.$SQL->quote(time()).', '.$SQL->quote(0).');';
											$SQL->query($save_transaction);
											$account_logged->setCustomField('premium_points', $user_premium_points-$buy_offer['points']);
											$user_premium_points = $user_premium_points - $buy_offer['points'];
											$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
												<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Item added!</B></TD></TR>
												<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.htmlspecialchars($buy_offer['name']).'</b> added to player <b>'.htmlspecialchars($buy_player->getName()).'</b> items (he will get this items after relog) for <b>'.$buy_offer['points'].' premium points</b> from your account.<br />Now you have <b>'.$user_premium_points.' premium points</b>.<br /><a href="?subtopic=shopsystem">GO TO MAIN SHOP SITE</a></TD></TR>
												</table>';
										}
										elseif($buy_offer['type'] == 'container')
										{
											$sql = 'INSERT INTO '.$SQL->tableName('z_ots_comunication').' ('.$SQL->fieldName('id').','.$SQL->fieldName('name').','.$SQL->fieldName('type').','.$SQL->fieldName('action').','.$SQL->fieldName('param1').','.$SQL->fieldName('param2').','.$SQL->fieldName('param3').','.$SQL->fieldName('param4').','.$SQL->fieldName('param5').','.$SQL->fieldName('param6').','.$SQL->fieldName('param7').','.$SQL->fieldName('delete_it').') VALUES (NULL, '.$SQL->quote($buy_player->getName()).', '.$SQL->quote('login').', '.$SQL->quote('give_item').', '.$SQL->quote($buy_offer['item_id']).', '.$SQL->quote($buy_offer['item_count']).', '.$SQL->quote($buy_offer['container_id']).', '.$SQL->quote($buy_offer['container_count']).', '.$SQL->quote('container').', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote($buy_offer['id']).', '.$SQL->quote(1).');';
											$SQL->query($sql);
											$save_transaction = 'INSERT INTO '.$SQL->tableName('z_shop_history_item').' ('.$SQL->fieldName('id').','.$SQL->fieldName('to_name').','.$SQL->fieldName('to_account').','.$SQL->fieldName('from_nick').','.$SQL->fieldName('from_account').','.$SQL->fieldName('price').','.$SQL->fieldName('offer_id').','.$SQL->fieldName('trans_state').','.$SQL->fieldName('trans_start').','.$SQL->fieldName('trans_real').') VALUES ('.$SQL->lastInsertId().', '.$SQL->quote($buy_player->getName()).', '.$SQL->quote($buy_player_account->getId()).', '.$SQL->quote($buy_from).',  '.$SQL->quote($account_logged->getId()).', '.$SQL->quote($buy_offer['points']).', '.$SQL->quote($buy_offer['name']).', '.$SQL->quote('wait').', '.$SQL->quote(time()).', '.$SQL->quote(0).');';
											$SQL->query($save_transaction);
											$account_logged->setCustomField('premium_points', $user_premium_points-$buy_offer['points']);
											$user_premium_points = $user_premium_points - $buy_offer['points'];
											$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
												<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Container of items added!</B></TD></TR>
												<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.htmlspecialchars($buy_offer['name']).'</b> added to player <b>'.htmlspecialchars($buy_player->getName()).'</b> items (he will get this container with items after relog) for <b>'.$buy_offer['points'].' premium points</b> from your account.<br />Now you have <b>'.$user_premium_points.' premium points</b>.<br /><a href="?subtopic=shopsystem">GO TO MAIN SHOP SITE</a></TD></TR>
												</table>';
										}
									}
									else
									{
										$set_session = TRUE;
										$_SESSION['viewed_confirmation_page'] = 'yes';
										$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="100%">
										<tr bgcolor="'.$config['site']['vdarkborder'].'"><td colspan="3" class="white"><b>Confirm Transaction</b></td></tr>
										<tr bgcolor="'.$config['site']['lightborder'].'"><td width="100"><b>Name:</b></td><td width="550" colspan="2">'. htmlspecialchars($buy_offer['name']).'</td></tr>
										<tr bgcolor="'.$config['site']['darkborder'].'"><td width="100"><b>Description:</b></td><td width="550" colspan="2">'. htmlspecialchars($buy_offer['description']).'</td></tr>
										<tr bgcolor="'.$config['site']['lightborder'].'"><td width="100"><b>Cost:</b></td><td width="550" colspan="2"><b>'. htmlspecialchars($buy_offer['points']).' premium points</b> from your account</td></tr>
										<tr bgcolor="'.$config['site']['darkborder'].'"><td width="100"><b>For Player:</b></td><td width="550" colspan="2"><font color="red">'.htmlspecialchars($buy_player->getName()).'</font></td></tr>
										<tr bgcolor="'.$config['site']['lightborder'].'"><td width="100"><b>From:</b></td><td width="550" colspan="2"><font color="red">'.htmlspecialchars($buy_from).'</font></td></tr>
										<tr bgcolor="'.$config['site']['darkborder'].'"><td colspan="3"></td></tr>
										<tr bgcolor="'.$config['site']['darkborder'].'"><td width="100"><b>Transaction?</b></td><td width="275" align="left">
										<form action="?subtopic=shopsystem&action=confirm_transaction" method="POST"><input type="hidden" name="buy_confirmed" value="yes"><input type="hidden" name="buy_id" value="'.$buy_id.'"><input type="hidden" name="buy_from" value="'.htmlspecialchars($buy_from).'"><input type="hidden" name="buy_name" value="'.htmlspecialchars($buy_name).'"><input type="submit" value="Accept"></form></td>
										<td align="right"><form action="?subtopic=shopsystem" method="POST"><input type="submit" value="Cancel"></form></td></tr>
										<tr bgcolor="'.$config['site']['darkborder'].'"><td colspan="3"></td></tr>
										</table> 
										';
									}
								}
								else
								{
									$errormessage .= 'Player with name <b>'.htmlspecialchars($buy_name).'</b> doesn\'t exist. Please <a href="?subtopic=shopsystem&action=select_player&buy_id='.$buy_id.'">select other name</a>.';
								}
							}
							else
							{
								$errormessage .= 'Invalid name format. Please <a href="?subtopic=shopsystem&action=select_player&buy_id='.$buy_id.'">select other name</a> or contact with administrator.';
							}
						}
						else
						{
							$errormessage .= 'For this item you need <b>'.$buy_offer['points'].'</b> points. You have only <b>'.$user_premium_points.'</b> premium points. Please <a href="?subtopic=shopsystem">select other item</a> or buy premium points.';
						}
					}
					else
					{
						$errormessage .= 'Offer with ID <b>'.$buy_id.'</b> doesn\'t exist. Please <a href="?subtopic=shopsystem">select item</a> again.';
					}
				}
			}
		}
		if(!empty($errormessage))
		{
			$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
				<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Informations</B></TD></TR>
				<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.$errormessage.'</b></TD></TR>
				</table>';
		}
		if(!$set_session)
		{
			unset($_SESSION['viewed_confirmation_page']);
		}
	}
	elseif($action == 'show_history')
	{
		if(!$logged)
		{
			$errormessage .= 'Please login first.';
		}
		else
		{
			$items_history_received = $SQL->query('SELECT * FROM '.$SQL->tableName('z_shop_history_item').' WHERE '.$SQL->fieldName('to_account').' = '.$SQL->quote($account_logged->getId()).' OR '.$SQL->fieldName('from_account').' = '.$SQL->quote($account_logged->getId()).';');
			if(is_object($items_history_received))
			{
				foreach($items_history_received as $item_received)
				{
					if($account_logged->getId() == $item_received['to_account'])
						$char_color = 'green';
					else
						$char_color = 'red';
					$items_received_text .= '<tr bgcolor="'.$config['site']['lightborder'].'"><td><font color="'.$char_color.'">'.htmlspecialchars($item_received['to_name']).'</font></td><td>';
					if($account_logged->getId() == $item_received['from_account'])
						$items_received_text .= '<i>Your account</i>';
					else
						$items_received_text .= htmlspecialchars($item_received['from_nick']);
					$items_received_text .= '</td><td>'.htmlspecialchars($item_received['offer_id']).'</td><td>'.htmlspecialchars($item_received['price']).'</td><td>'.date("j F Y, H:i:s", $item_received['trans_start']).'</td>';
					if($item_received['trans_real'] > 0)
						$items_received_text .= '<td>'.date("j F Y, H:i:s", $item_received['trans_real']).'</td>';
					else
						$items_received_text .= '<td><b><font color="red">Not realized yet.</font></b></td>';
					$items_received_text .= '</tr>';
				}
			}
			$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
				<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'"></TD></TR>
				<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><center><B>Transactions History</B></center></TD></TR>
				<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'"></TD></TR>
				</table><br>';
				
			if(!empty($items_received_text))
			{
				$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
					<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white colspan="6"><B>Item Transactions</B></TD></TR>
					<tr bgcolor="'.$config['site']['darkborder'].'"><td><b>To:</b></td><td><b>From:</b></td><td><b>Offer name</b></td><td><b>Price</b></td><td><b>Bought on page</b></td><td><b>Received on OTS</b></td></tr>
					'.$items_received_text.'
					</table><br />';
			}
			if(empty($items_received_text))
				$errormessage .= 'You did not buy/receive any item.';
		}
		if(!empty($errormessage))
		{
			$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
				<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Informations</B></TD></TR>
				<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b>'.$errormessage.'</b></TD></TR>
				</table>';
		}
	}
	$main_content .= '<br><TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
		<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=left CLASS=white><B>Premium Points</B></TD></TR>
		<TR><TD BGCOLOR="'.$config['site']['lightborder'].'" ALIGN=left><b><font color="green">You have premium points: </font></b>'.$user_premium_points.'</TD></TR>
		</table>';
}
else
	$main_content .= '<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
	<TR><TD BGCOLOR="'.$config['site']['vdarkborder'].'" ALIGN=center CLASS=white ><B>Shop Information</B></TD></TR>
	<TR><TD BGCOLOR="'.$config['site']['darkborder'].'"><center>Shop is currently closed. [to admin: edit it in \'config/config.php\']</TD></TR>
	</table>';