<?PHP
# Account Maker Config
$config['site']['serverPath'] = "C:/otserv/";
$config['site']['useServerConfigCache'] = false;
$config['site']['worlds'] = array(0 => 'Tibia');
$towns_list[0] = array(1 => 'Ab/dendriel', 2 => 'Kazordoon', 3 => 'Thais', 4 => 'Venore', 5 => 'Carlin', 6 => 'Ankrahmun', 7 => 'Darashia', 9 => 'Edron', 12 => 'Rookgaard', 13 => 'Port Hope');

$config['site']['outfit_images_url'] = '/outfit.php';
$config['site']['item_images_url'] = 'images/items/';
$config['site']['item_images_extension'] = '.gif';
$config['site']['flag_images_url'] = 'http://flag-images.ots.me/';
$config['site']['flag_images_extension'] = '.png';
$config['site']['players_group_id_block'] = 3;
$config['site']['limitDeath'] = 5;
$config['site']['levelVideo'] = 150;

# Create Account Options
$config['site']['one_email'] = true;
$config['site']['create_account_verify_mail'] = false;
$config['site']['verify_code'] = true;
$config['site']['email_days_to_change'] = 7;
$config['site']['newaccount_premdays'] = 3;
$config['site']['send_register_email'] = true;

# Create Character Options
$config['site']['newchar_vocations'][0] = array(0 => 'Rook Sample');
$config['site']['newchar_towns'][0] = array(12);
$config['site']['max_players_per_account'] = 7;


$config['site']['send_emails'] = true;
$config['site']['mail_address'] = "";
$config['site']['smtp_enabled'] = true;
$config['site']['smtp_host'] = "smtp.gmail.com";
$config['site']['smtp_port'] = 465; 
$config['site']['smtp_auth'] = true;
$config['site']['smtp_user'] = "";
$config['site']['smtp_pass'] = "fyltgjstdcozvxjx";
$config['site']['smtp_secure'] = true;

# PAGE: whoisonline.php
$config['site']['private-servlist.com_server_id'] = 0;
/*
Server id on 'private-servlist.com' to show Players Online Chart (whoisonline.php page), set 0 to disable Chart feature.
To use this feature you must register on 'private-servlist.com' and add your server.
Format: number, 0 [disable] or higher
*/

$config['site']['quests'] = array('Trolls' => 800201,'Globins' => 800202,'Rotworms' => 800203,'Cyclops' => 800204,'Dwarf Guards' => 800205,'Orc Warlords' => 800206,'Dwarfs' => 800207,'Orcs' => 800208,'Tarantulas' => 800209,'Demon Skeletons' => 800210,'Minotaurs' => 800211,'Necromancers' => 800212,'Carniphilas' => 800213,'Apes' => 800214,'Fire Elementals' => 800215,'Dragons' => 800216,'Pandas' => 800217,'Giant Spiders' => 800218,'Hydras' => 800219,'Serpent Spawns' => 800220,'Behemoths' => 800221,'Crocodiles' => 800222,'Demons' => 800223,'Terror Birds' => 800224,'Larvas' => 800225,'Humans' => 800226,'Scarabs' => 800227,'Vampires' => 800228,'Ancient Scarabs' => 800229,'Heros' => 800230,'Black Knights' => 800231,'Dragon Lords' => 800232,'Warlocks' => 800233,'Lost Souls' => 800234,'Nightmares' => 800235,'Dark Torturers' => 800236,'Plaguesmiths' => 800237,'Defilers' => 800238,'Hellfire Fighters' => 800239,'Destroyers' => 800240,'Diabolic Imps' => 800241,'Hellhounds' => 800242,'Blightwalkers' => 800243,'Hand of Cursed Fates' => 800244,'Son Of Verminors' => 800245,'Juggernauts' => 800246,'Undead Dragons' => 800247,'Betrayed Wraiths' => 800248,'Phantasms' => 800249,'Ghouls' => 800250,'Lizards' => 800251,'Orc Berserkers' => 800252,'Orc Leaders' => 800253);
$config['site']['show_skills_info'] = true;
$config['site']['showQuests'] = true;
$config['site']['showVipList'] = false;
$config['site']['show_vip_storage'] = 0;

# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = true;
$config['site']['send_mail_when_generate_reckey'] = true;
$config['site']['generate_new_reckey'] = true;
$config['site']['generate_new_reckey_price'] = 100;

# PAGE: guilds.php
$config['site']['guild_need_level'] = 50;
$config['site']['guild_need_pacc'] = false;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 2000;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 8347;
$config['site']['access_tickers'] = 8347;

# PAGE: latestnews.php
$config['site']['news_limit'] = 6;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 40;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4, 5, 6, 7);

# PAGE: highscores.php
$config['site']['groups_hidden'] = array(4, 5, 6);
$config['site']['accounts_hidden'] = array(1);

# PAGE: shopsystem.php
$config['site']['shop_system'] = true;
$config['site']['shopguild_system'] = false;

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

# Layout Config
$config['site']['layout'] = 'cyber';
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#3a3738';
$config['site']['lightborder'] = '#3a3738';
$config['site']['download_page'] = false;
$config['site']['serverinfo_page'] = true;

############################
## PagSeguro/Paypal Email ##
############################
$config['pagseguro']['email'] = 'raul_freitas2@yahoo.com.br'; ## EMAIL PAGSEGURO ##
$config['paypal']['email'] = 'raul_freitas2@yahoo.com.br'; ## EMAIL PAYPAL ##
$config['pagseguro']['produtoNome'] = 'Premium Points'; //Identifica????o do Pontos
$config['pagseguro']['produtoValor'] = '100'; //100 = R$ 1,00 - 250 = R$ 2,50
$config['site']['boosted_monster_count'] = 2;
## Formas de pagamento [1 = ativo | 0 = inativo] ##
$config['site']['pagseguro'] = 1;
$config['site']['paypal'] = 1;
$config['site']['paypalbr'] = 1;
$config['site']['caixa'] = 1;
$config['site']['bonusPoints'] = 0;

#####################
## Nome do Produto ##
#####################
$config['pagseguro']['produtoNome'] = 'Premium Points';

#############################
######### C A I X A ########
#############################
#! Informa????es do pagamento com PIX !#
$config['site']['CaixaCont'] = "
Pre??os da Loja:
15 Reais (30 points)
30 Reais (100 points)
45 Reais (150 points)

Aqui est??o os passos que voc?? precisa fazer: 
1. Escolha o valor desejado. 
2. Acesse o seu aplicativo do Banco, e fa??a um PIX para a chave e-mail (@gmail.com).
3. Fa??a o deposito. 
4. Envie um Email para gmail.com contendo Nome do Char e IMG/FOTO
do comprovante. 
5. Ap??s a opera????o de 30, 100 ou 150 pontos ser?? adicionado ?? sua conta. 
6. V?? ate a loja e use seus pontos.

PIX E-MAIL = @gmail.com

"; 