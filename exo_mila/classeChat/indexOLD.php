<?php

spl_autoload_register(function($class) {
 	require_once 'class/' . $class . '.php';
 });


$chat_1 = new Chat('Sashimi', 10, 'Gris', 'male', 'Persan');

echo '<strong>Chat n°1</strong>';
echo '<ul>';
foreach($chat_1->getInfos() as $info){
    echo '<li>' . $info . '</li>';
}
echo '</ul>';


$chat_2 = new Chat('Sushi', 2, 'Roux', 'male', 'Maincoon');

echo '<strong>Chat n°1</strong>';
echo '<ul>';
foreach($chat_2->getInfos() as $info){
    echo '<li>' . $info . '</li>';
}
echo '</ul>';


$chat_3 = new Chat('Minou', 5, 'Noir', 'male', 'Chat de gouttière');

echo '<strong>Chat n°1</strong>';
echo '<ul>';
foreach($chat_3->getInfos() as $info){
    echo '<li>' . $info . '</li>';
}
echo '</ul>';




 ?>
