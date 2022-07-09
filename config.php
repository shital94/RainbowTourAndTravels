<?php

 define("DOCUMENT_ROOT",$_SERVER["DOCUMENT_ROOT"]);
 define("WORKSPACE",DOCUMENT_ROOT . "action/");
 define("TEMP",DOCUMENT_ROOT . "temp/"); 
 define("LIB",WORKSPACE ."lib/"); 
 define("CLASS_PATH",DOCUMENT_ROOT . "classes/");
 define("ADMIN_PATH","admin/"); 
 define('SMARTY_PATH',LIB .'external/Smarty/libs/');
 define('TEMPLATE_PATH',DOCUMENT_ROOT .'smarty_templates/'); 
 define("URL","localhost");
 define("ADMIN_URL",URL . ADMIN_PATH);
 define("SITE_NAME","MaisMaranhão");
 define("SITE_SLOGAN","Mais Notícias do Maranhão para Você!");

 set_include_path(get_include_path() . PATH_SEPARATOR . WORKSPACE .PATH_SEPARATOR . LIB . PATH_SEPARATOR . CLASS_PATH);
?>