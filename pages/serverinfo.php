<?php
if(!defined('INITIALIZED'))
	exit;
	$main_content .= '<br><center>
		<table border="0" cellpadding="4" cellspacing="1" width="95%">
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td colspan="2"><font class="white"><b>Status</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td>Server Status:</td><td><font class="green">ONLINE</font></td>
			</tr>
		</table>
		<br>';
	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td colspan="2"><font class="white"><b>Rates</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td width="50%">Experience</td><td>From 1 To 20 - 20x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td width="50%"></td><td>From 21 To 30 - 15x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td width="50%"></td><td>From 31 To 40 - 10x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td width="50%"></td><td>From 41 To 50 - 8x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td width="50%"></td><td>From 51 To 60 - 6x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td width="50%"></td><td>From 61 To 70 - 5x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td width="50%"></td><td>From 71 To 80 - 3x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td width="50%"></td><td>From 81 To 100 - 2x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td width="50%"></td><td>From 101 - 1x</td>
			</tr>
			<tr bgcolor="'.$config['site']['lightborder'].'">
				<td>Skill</td><td>7x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td>Magic</td><td>3x</td>
			</tr>
			<tr bgcolor="'.$config['site']['lightborder'].'">
				<td>Loot</td><td>2x</td>
			</tr>
		</table><br>';

	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Info Server</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>World Type</td><td>RPG/PVP</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Server motd</td><td>'.$config['server']['motd'].'</td>
		</tr>
	</table><br>';
	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Frags</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>White Skull Time</td><td>15 Minutes</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>RedSkull Time</td><td>24 hours</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Frags to Red Skull</td><td>Daily: 4</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Frags to Ban</td><td>Daily: 6</td>
		</tr>		
	</table><br>';
	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Other information</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Bank System</td><td>Active</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Guild halls</td><td>Inactive</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Kick Time</td><td>15 Minutes</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>PZ Lock</td><td>60 Seconds</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Premium Account</td><td><a href="?subtopic=shopsystem">Donate</a></td>
		</tr>		
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Buy house</td><td>Free Level 50</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Create guild</td><td>Free Level 50</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>All Outfits</td><td>Premium</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Port Hope Access</td><td>Premium</td>
		</tr>
		<!--
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td></td><td></td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td></td><td></td>
		</tr>
		
		-->
	</table><br>';

	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Quest information</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>The Postman Missions Quest</td><td><a href="http://www.tibiahispano.com/quests/The+Postman+Missions+Quest">Click here</a></td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>The Djinn War - Efreet Faction</td><td><a href="http://www.tibiahispano.com/quests/The+Djinn+War+-+Efreet+Faction">No Have Mission</a></td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>The Djinn War - Marid Faction</td><td><a href="http://www.tibiahispano.com/quests/The+Djinn+War+-+Marid+Faction">No Have Mission</a></td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>The Paradox Tower Quest</td><td><a href="http://www.tibiahispano.com/quests/The+Paradox+Tower+Quest">Click here</a></td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Others Quest</td><td><a href="http://www.tibiahispano.com/quests">Click here</a></td>
		</tr>
		<!--
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td></td><td></td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td></td><td></td>
		</tr>
		-->
	</table><br>';
	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Extra Information</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white">
>> Unique Features:<br>
<br>
-7.4 Features: No Protection zone on boats and carpet. Spells, vocations and spells formuled based on Tibia 7.4. There is no Hotkleys!<br>
-War System.<br>
-Cast System.<br>
-Anti Clone.<br>
-Party Sharing Experience. You can share experience in-party with your friends, and receive 10% bonus experience when actived (!share).<br>
-No runes on Shop. They must be conjured.<br>
-Edited Charged Runes. You conjure runes with more charges then real tibia (eg. Sd 2x).<br>
-Fast Soul Regen<br>
-Conjure Runes on your backpack. You can leave blank rune on your backpack to conjure them!<br>
-Loot message on screen.<br>
-Do not have Wands/Rods, Burst Arrowns based on magic level.<br>
<br>
<br>
>> Vocation Features:<br>
<br>
-Paladins conjure more ammunition. (eg. exevo con = 15 arrows)<br>
-Mages conjure more runes. (eg. adori vita vis = 2 SDs)<br>
-Damage increased by 10% for Knights and Paladins.<br>
-Attack speed increased by 10% for all vocations.<br>
<br>
>> NPCs:<br>
<br>
-They do not sell runes.<br>
-You can buy backpack of mana fluid using the words: "buy bp mf"<br>
-You can buy backpack of life fluid using the words: "buy bp lf"<br>
-Djinns in ankrahmun (DONT NEED THE QUEST)<br>
-Eremo sells amulet of loss.<br>
<br>
>> Game Features:<br>
<br>
-Bank system.<br>
-Auto-stack items: Items like gold will be automatically grouped.<br>
-Full HP and MP at level up.<br>
-Stone Skin Amulet not avaiable on shop or NPCs, you need to drop them from Warlock or Hydra.<br>
<br>
>> Extra Information:<br>
<br>
-Real Tibia map: Full real Tibia map, incluiding all NPCs, Port Hope, monsters and quests.
-POI quest with all rooms.<br>
-Demon Oak Quest.<br>
-Uptime: 24 hours a day, 7 days a week.<br>
-Team: Dedicated team, ready to give you the proper support.<br>
-You: We want you as a player! Your opinions, advice and / or complaints will be welcome in our forums..<br>
</font></td>
		</tr>
	</table><br>';
	$main_content .= '</center>';