<?php
/*
include "classes/chat.php";
include "classes/chien.php";
include "classes/lapin.php";
*/
function my_autoloader($class){ 
    include "classes/$class.php";
}
spl_autoload_register('my_autoloader');//si plusieurs classes on peut charger dirèctement le dossier avec les fichiers

$c = new chat;
echo "Chat = ".$c->pays." prix = ".$c->prix;
echo "<br>";
$ch = new chien;
echo "Chien = ".$ch->pays." prix = ".$ch->prix;
echo "<br>";
$l = new lapin;
echo "Chat = ".$l->pays." prix = ".$l->prix;