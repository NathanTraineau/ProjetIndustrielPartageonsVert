<?php

/* Get the port for the WWW service. */
$port = 1000;
/* Get the IP address for the target host. */
$address = gethostbyname('http://localhost/PseudoAPI/getDataAPI/Communication');


if(!empty($_POST['message'])){
//remplacement des caractères enter par des espaces
 $message=ereg_replace(chr(13).chr(10),' ',$_POST['message']);
//Creation de la socket
 $sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die('Création de socket refusée');
//Connexion au serveur
 socket_connect($sock,$address,$port) or die('Connexion impossible');
//Codage de la longueur du message
 $header=sprintf('d',strlen($message));
//Construction du paquet à envoyer au serveur
 $paquet=$header.$message;
//Calcul de la longueur du paquet
 $write_len=strlen($paquet)+HEADER;
//Ecriture du paquet vers le serveur
 socket_write($sock,$paquet,$write_len);
//Fermeture de la connexion
 socket_close($sock);
}

?>