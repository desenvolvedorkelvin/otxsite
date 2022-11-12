
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app>
<script src='https://www.google.com/recaptcha/api.js'></script>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MD6VZ17C5K"></script>


	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type='text/javascript'></script>

				<center><font color="white"><h2>World Map</h2></font></center>
				<center>
	 
    
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.js"></script>
    <style>
      #map {position: absolute;margin:2px; margin-top:10px; width:660px; height:650px;}
    .leaflet-popup-content {
    	font-family: Arial;
    	color: gold;
    	text-shadow: none;
}
	.leaflet-popup-content-wrapper{
		font-family: Arial;
    	color: gold;
		background: #242438;
	}

	.leaflet-popup-content p {
		color: white;
	}


    </style>

      <div id="map">
      
    </div>

    <script text="text/javascript">

var map = L.map("map", {
	attributionControl: false,
    minZoom: 1,
    maxZoom: 3,
    center: [-215, 115],
    zoom: 1,
    zoomDelta: 1,
    crs: L.CRS.Simple
});
var w = 1627;
var h = 1619;
var url = "images/worldmap1.png";
var southWest = map.unproject([ 0, h], map.getMaxZoom()-1);
var northEast = map.unproject([ w, 0], map.getMaxZoom()-1);
var bounds = new L.LatLngBounds( southWest, northEast);

L.imageOverlay( url, bounds).addTo(map);


map.setMaxBounds(bounds);

/*
var marker0 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([318.5, 258])), {
opacity: 0,
title: "This is shitness",
	});
marker0.addTo(map).bindPopup("<h3> 16 - Holy Minotaurs (Deep Mintwallin) </h3> <p><img src='images/nobleman.gif'></p>");
*/

//var myIcon = L.divIcon({ popupAnchor: [200, 0] });    icon: myIcon     popupAnchor: [100,0
//{keepInView:true}  false
//leaflet-popup  leaflet-zoom-animated <- classe da popup



var marker1 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([-552.5, 292])), {
opacity: 0,
	});
marker1.addTo(map).bindPopup("<b>1 - Arena</b><p> PvP for fun. No death, infinite ammo and supply.<br>Ask to any temple's NPC: hi, arena.<br><center><img src='images/mapcreatures/arena.png'></center></p>",{});

var marker2 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([1210.5, 249])), {
opacity: 0,

	});
marker2.addTo(map).bindPopup("<b>2 - Venore's Dragon Lair Extension I</b><p>There is a cave extension in addition to the original Dragon Lair.<br><center><img src='images/mapcreatures/dragon.png'><img src='images/mapcreatures/dragon lord.png'></center></p>",{});

var marker3 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([1268, 293])), {
opacity: 0,

	});
marker3.addTo(map).bindPopup("<b>3 - 	Venore's Dragon Lair Extension II</b><p>There is a cave extension in addition to the original Dragon Lair.<br><center><img src='images/mapcreatures/dragon.png'><img src='images/mapcreatures/dragon lord.png'></center></p>",{});

var marker4 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([1298, -131])), {
opacity: 0,

	});
marker4.addTo(map).bindPopup("<b>4 - Black Knights' Quarters</b><p>Deep into the Black Knight's Quest.<br><center><img src='images/mapcreatures/black knight.png'></center></p>",{});

var marker5 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([1607.5, 1197])), {
opacity: 0,

	});
marker5.addTo(map).bindPopup("<b>5 - Extended Hydras Spot</b><p>Tiquanda Hydras extension.<br><center><img src='images/mapcreatures/hydra.png'></center></p>",{});

var marker6 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([1795, 1297])), {
opacity: 0,

	});
marker6.addTo(map).bindPopup("<b>6 - Ankrahmun's Dragon Lair Extension I</b><p>There is a cave extension in addition to the original Dragon Lair.<br><center><img src='images/mapcreatures/dragon.png'><img src='images/mapcreatures/dragon lord.png'></center></p>",{});

var marker7 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([1850, 1124])), {
opacity: 0,

	});
marker7.addTo(map).bindPopup("<b>7 - Ankrahmun's Dragon Lair Extension II</b><p>There is a cave extension in addition to the original Dragon Lair.<br><center><img src='images/mapcreatures/dragon.png'><img src='images/mapcreatures/dragon lord.png'></center></p>",{});

var marker8 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([1607, 738])), {
opacity: 0,

	});
marker8.addTo(map).bindPopup("<b>8 - Increased Necromancers Respawn</b><p>There are more Necromancers on Drefria's respawn than usual.<br><center><img src='images/mapcreatures/necromancer.png'></center></p>",{});

var marker9 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([1932, -805])), {
opacity: 0,

	});
marker9.addTo(map).bindPopup("<b>9 - Edron Heroes Extension</b><p>Extended Heroes respawn.<br><center><img src='images/mapcreatures/hero.png'></center></p>",{});

var marker10 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([1975, -805])), {
opacity: 0,

	});
marker10.addTo(map).bindPopup("<b>10 - Edron Demons Extension</b><p>Extended Demons respawn.<br><center><img src='images/mapcreatures/demon.png'></center></p>",{});

var marker11 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([936, 647])), {
opacity: 0,

	});
marker11.addTo(map).bindPopup("<b>11 - Warlocks Dark Cathedral</b><p>Warlocks have taken Dark Cathedral's 2nd and 3rd underground floors.<br><center><img src='images/mapcreatures/warlock.png'></center></p>",{});

var marker12 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([318, 802])), {
opacity: 0,

	});
marker12.addTo(map).bindPopup("<b>12 - Celestial Sanctuary</b><p>Celestial creatures live here.<br><center><img src='images/mapcreatures/caelestis.png'><img src='images/mapcreatures/servus caelesti.png'></center></p>",{});

var marker13 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([1309, 1351])), {
opacity: 0,

	});
marker13.addTo(map).bindPopup("<b>13 - Monastery of Despair Main Entrance</b><p>A great variety of underworld creatures dominated the Monastery. Beware. Level 90 or higher is required to get in.<br><center><img src='images/mapcreatures/dark torturer.png'><img src='images/mapcreatures/nightmare.png'><img src='images/mapcreatures/fury.png'><img src='images/mapcreatures/destroyer.png'><img src='images/mapcreatures/plaguesmith.png'><img src='images/mapcreatures/defiler.png'><img src='images/mapcreatures/blightwalker.png'><img style='margin-left:-10px;' src='images/mapcreatures/lost soul.png'><img src='images/mapcreatures/betrayed wraith.png'><img src='images/mapcreatures/diabolic imp.png'><img style='margin-left:-24px;' src='images/mapcreatures/hand of cursed fate.png'><img style='padding-left:10px;' src='images/mapcreatures/son of verminor.png'><img src='images/mapcreatures/phantasm.png'><img src='images/mapcreatures/spectre.png'><img src='images/mapcreatures/undead dragon.png'><img src='images/mapcreatures/juggernaut.png'><img src='images/mapcreatures/hellhound.png'></center></p>",{});

var marker14 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([697, 1319])), {
opacity: 0,

	});
marker14.addTo(map).bindPopup("<b>14 - Monastery of Despair Secondary Entrance</b><p>A great variety of underworld creatures dominated the Monastery. Beware. Level 90 or higher is required to get in.<br><center><img src='images/mapcreatures/dark torturer.png'><img src='images/mapcreatures/nightmare.png'><img src='images/mapcreatures/fury.png'><img src='images/mapcreatures/destroyer.png'><img src='images/mapcreatures/plaguesmith.png'><img src='images/mapcreatures/defiler.png'><img src='images/mapcreatures/blightwalker.png'><img style='margin-left:-10px;' src='images/mapcreatures/lost soul.png'><img src='images/mapcreatures/betrayed wraith.png'><img src='images/mapcreatures/diabolic imp.png'><img style='margin-left:-24px;' src='images/mapcreatures/hand of cursed fate.png'><img style='padding-left:10px;' src='images/mapcreatures/son of verminor.png'><img src='images/mapcreatures/phantasm.png'><img src='images/mapcreatures/spectre.png'><img src='images/mapcreatures/undead dragon.png'><img src='images/mapcreatures/juggernaut.png'><img src='images/mapcreatures/hellhound.png'></center></p>",{});

var marker15 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([157, -987])), {
opacity: 0,

	});
marker15.addTo(map).bindPopup("<b>15 - Upper Kingdom</b><p>Home for Frost Dragons and Icy Behemoths. The land of, some would say, the True King.<br><center><img src='images/mapcreatures/frost dragon.png'><img src='images/mapcreatures/ancient frost dragon.png'><img src='images/mapcreatures/icy behemoth.png'></center></p>",{});

var marker16 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([314, 270])), {
opacity: 0,

	});
marker16.addTo(map).bindPopup("<b>16 - Holy Minotaurs</b><p>There is a rumour that, deeply into Mintwallin, a group of minotaurs live around a lake of holy waters, which gives them power and agelessness.<br><center><img src='images/mapcreatures/holy minotaur.png'><img src='images/mapcreatures/holy minotaur guard.png'><img src='images/mapcreatures/holy minotaur archer.png'><img src='images/mapcreatures/holy minotaur mage.png'></center></p>",{});

var marker17 = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([1605, -452])), {
opacity: 0,

	});
marker17.addTo(map).bindPopup("<b>17 - Orc Fortress Vault</b><p>Recently discovered treasures vault, keeped by a barely known species of Orcs.<br><center><img src='images/mapcreatures/torug.png'><img src='images/mapcreatures/bugrol.png'><img src='images/mapcreatures/duggarot.png'></center></p>",{});

var markera = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([941, -564])), {
opacity: 0,

	});
markera.addTo(map).bindPopup("<b>A - Third Tier Daily Raid</b><p>Place to fight the Daily Raids' Bosses. Level 80 or higher is required.<br><center><img src='images/mapcreatures/zadras necromanti.png'><img src='images/mapcreatures/abomination.png'><img src='images/mapcreatures/drin spellcaster.png'></center></p>",{});

var markerb = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([835, -10])), {
opacity: 0,

	});
markerb.addTo(map).bindPopup("<b>B - Second Tier Daily Raid</b><p>Place to fight the Daily Raids' Bosses. Level 140 or higher is required.<br><center><img src='images/mapcreatures/ras apprentice.png'><img src='images/mapcreatures/elroth the horned.png'><img src='images/mapcreatures/profane spirit.png'></center></p>",{});

var markerc = L.marker(map.layerPointToLatLng(map.containerPointToLayerPoint([1084, 470])), {
opacity: 0,

	});
markerc.addTo(map).bindPopup("<b>C - First Tier Daily Raid</b><p>Place to fight the Daily Raids' Bosses. Level 200 or higher is required.<br><center><img src='images/mapcreatures/ferumbras servant.png'><img src='images/mapcreatures/deathbringer.png'><img src='images/mapcreatures/madawc.png'></center></p>",{});









function doStuff(e) {
  console.log(e.latlng);
  // coordinates in tile space
  var x = e.layerPoint.x;
  var y = e.layerPoint.y;
  console.log([x, y]);

  // calculate point in xy space
  var pointXY = L.point(x, y);


}

</script>






			</center>
			<br>
			<center>
			<div style="margin-top:710px;">
		<table border="0" cellpadding="4" cellspacing="2" width="95%">
			<tr bgcolor="#20222c">
				<td colspan="2"><font color="white"><b><center><h2>Custom Areas</h2></center></b></font></td>
			</tr>
			<tr bgcolor="#20222c">
				<td width="10%"><font class="white"><b></b></font></td><td><font class="white"><b><h3>Content</h3></b></font></td>
			</tr>


			<tr bgcolor="#202229">
				<td><h2><center>1</center></h2></td><td><font class="green">Arena (ask to any temple's NPC: hi, arena)</font></td>
			</tr>
			<tr bgcolor="#20222c">
				<td><h2><center>2</center></h2></td><td><font class="green">Venore's Dragon Lair Extension I</font></td>
			</tr>

			<tr bgcolor="#202229">
				<td><h2><center>3</center></h2></td><td><font class="green">Venore's Dragon Lair Extension II</font></td>
			</tr>
			<tr bgcolor="#20222c">
				<td><h2><center>4</center></h2></td><td><font class="green">Black Knights Quarters (in Black Knight's Quest)</font></td>
			</tr>

			<tr bgcolor="#202229">
				<td><h2><center>5</center></h2></td><td><font class="green">Extended Hydras Spot</font></td>
			</tr>
			<tr bgcolor="#20222c">
				<td><h2><center>6</center></h2></td><td><font class="green">Ankrahmun's Dragon Lair Extension I</font></td>
			</tr>

			<tr bgcolor="#202229">
				<td><h2><center>7</center></h2></td><td><font class="green">Ankrahmun's Dragon Lair Extension II</font></td>
			</tr>
			<tr bgcolor="#20222c">
				<td><h2><center>8</center></h2></td><td><font class="green">Increased Necromancers Respawn</font></td>
			</tr>

			<tr bgcolor="#202229">
				<td><h2><center>9</center></h2></td><td><font class="green">Edron Heroes Extension</font></td>
			</tr>

			<tr bgcolor="#20222c">
				<td><h2><center>10</center></h2></td><td><font class="green">Edron Demons Extension</font></td>
			</tr>

			<tr bgcolor="#202229">
				<td><h2><center>11</center></h2></td><td><font class="green">Warlocks Dark Cathedral (-2 and -3 floors)</font></td>
			</tr>
			<tr bgcolor="#20222c">
				<td><h2><center>12</center></h2></td><td><font class="green">Celestial Sanctuary</font></td>
			</tr>
			<tr bgcolor="#202229">
				<td><h2><center>13</center></h2></td><td><font class="green">Monastery of Despair Main Entrance (level 90+)</font></td>
			</tr>
			<tr bgcolor="#20222c">
				<td><h2><center>14</center></h2></td><td><font class="green">Monastery of Despair Secondary Entrance (level 90+)</font></td>
			</tr>
			<tr bgcolor="#202229">
				<td><h2><center>15</center></h2></td><td><font class="green">Upper Kingdom</font></td>
			</tr>
			<tr bgcolor="#20222c">
				<td><h2><center>16</center></h2></td><td><font class="green">Holy Minotaurs (Deep Mintwallin)</font></td>
			</tr>
			<tr bgcolor="#202229">
				<td><h2><center>17</center></h2></td><td><font class="green">Orc Fortress Vault</font></td>
			</tr>


			<tr bgcolor="#20222c">
				<td><h2><center><font color="yellow">A</font></font></center></h2></td><td><font color="yellow">Third Tier Daily Raid (Level 80+)</font></td>
			</tr>
			<tr bgcolor="#202229">
				<td><h2><center><font color="yellow">B</font></center></h2></td><td><font color="yellow">Second Tier Daily Raid (Level 140+)</font></td>
			</tr>
			<tr bgcolor="#20222c">
				<td><h2><center><font color="yellow">C</font></center></h2></td><td><font color="yellow">First Tier Daily Raid (Level 200+)</font></td>
			</tr>

		</table>
		</div>

</body>
</html>