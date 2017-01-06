<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/


function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	} 
	else {
		include '../pages/'.$_GET['page'].'.php';
	}

}

function getUserData(){

// 4. créez une fonction getUserData récupérez le contenu du fichier `data/user.json` grâce à la fonction standard 'file_get_contents' et transformez le json en un tableau PHP avec la fonction standard `json_decode` puis affichez ces informations 
	
	$fileGet=file_get_contents("../data/user.json");
	//json_decode();
	echo ($fileGet).PhP_EOL;
}


function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}
?>