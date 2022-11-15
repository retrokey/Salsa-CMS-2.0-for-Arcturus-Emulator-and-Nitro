<?php
// Database configurations
$config['database_hostname'] = "localhost"; // Host
$config['database_username'] = "root"; // Database user
$config['database_password'] = ""; // Database password
$config['database_name'] = "db"; // Database name
// Site settings


$config['site.nome'] = "Habbo"; // Hotel name
$config['site.url'] = "http://localhost"; // Hotel URL
$config['404page'] = "404"; // *Do not touch this
$config['site.manutencao'] = 0; // Placing or removing maintenance from the hotel
$config['site.login'] = 1; // Deactivate or activate hotel login
$config['site.avatar'] = "https://habbo.city/habbo-imaging/avatarimage?figure="; // CMS avatarimage URL
$config['site.appdownload'] = "http://localhost"; // Download APP URL
$config['site.red'] = "1";
$config['site.rank.minimo'] = 3; // Minimum rank that you can enter with the Hotel in maintenance
$config['site.cmfclient'] = 0; // Function to hide IP and Port in the client


// Control Panel Settings
$config['painel.rankminimo'] = 5; // Minimum rank to access the Panel
$config['painel.premiar_creditos'] = 200; // The amount of credits the panel award will give
$config['painel.premiar_diamantes'] = 10; // Number of diamonds that the panel award will give
$config['painel.premiar_codigo_emblema'] = "NV"; // Code of the level badge that awarding it will give, if u don't want to give any badge leave it in blank


// Registry Settings
$config['registro.ativado'] = 1; // Disable or enable Hotel registration
$config['registro.captcharegistro'] = 0; // Captcha on/off to prevent BOTS
$config['registro.missao'] = "I'm new on Habbo!"; // Initial mission
$config['registro.creditos'] = "100"; // Starting credits
$config['registro.visual'] = "hr-115-45.hd-209-2.ch-255-76.lg-275-62.fa-1204.ca-1806-65"; // Initial look
$config['registro.quartoinicial'] = "1"; // Starter bedroom
$config['registro.contasporip'] = 50; // Number of accounts per IP

// Nitro configurations
$config['nitro.url'] = "http://localhost/nitro"; // Nitro Folder's Path (https://localhost/nitro)

// Client Configurations
$config['connection.info.host'] = "localhost"; // VPS or Hamachi IP
$config['connection.info.port'] = "30000"; // Emulator port
$config['url.prefix'] = "http://localhost"; // Site URL
$config['client.starting'] = "Welcome!";
$config['external.texts.txt'] = "http://localhost/swf/gamedata/external_flash_texts.txt"; // External Flash Texts URL
$config['furnidata.load.url'] = "http://localhost/swf/gamedata/furnidata.xml"; // Furnidata URL
$config['external.variables.txt'] = "http://localhost/swf/gamedata/external_variables.txt"; // External Variables URL
$config['external.override.texts.txt'] = "http://localhost/swf/gamedata/override/external_flash_override_texts.txt"; //  External Flash Override Texts URL
$config['external.figurepartlist.txt'] = "http://localhost/swf/gamedata/figuredata.xml"; // Figuredata URL 
$config['productdata.load.url'] = "http://localhost/swf/gamedata/productdata.txt"; // Productdata URL
$config['external.override.variables.txt'] = "http://localhost/swf/gamedata/override/external_override_variables.txt"; // External Override Variables URL
$config['flash.client.url'] = "http://localhost/swf/gordon/PRODUCTION-201601012205-226667486/"; // Production URL
$config['habbo.swf'] = "http://localhost/swf/gordon/PRODUCTION-201601012205-226667486/Habbo.swf"; // SWF URL


// Current theme settings
$config['tema.tema'] = "original";
$config['tema.logo'] = "https://habbofont.net/font/habbo_clicker/salsacms.gif"; // Site Logo
$config['tema.topheader'] = "https://i.imgur.com/kNOKNpG.png"; // Site Top Header
$config['tema.urlemblemas'] = "http://images.habbo.com/c_images/album1584/"; // Profile badges folder
$config['tema.postagens'] = 1; // Deactivate or activate posts on the main page
$config['tema.facebook'] = "http://facebook.com/Habbo";
$config['tema.twitter'] = "http://twitter.com/Habbo";
$config['tema.discord'] = "http://discord.gg/Habbo";
