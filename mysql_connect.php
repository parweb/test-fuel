<?php

if ( $_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'localhost' ) {
	$socket = 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock';
	
	$user = 'root';
	$mdp = 'root';
	$db = 'test';
	
	echo __LINE__.'<br />';
}
else {
	$socket = 'localhost:/tmp/mysql/lorilee.sock';
	
	$user = 'amal';
	$mdp = 'MNFDXp8a';
	$db = 'lorilee';
	
	echo __LINE__.'<br />';
}

$link = mysql_connect($socket, $user, $mdp);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

mysql_select_db( $db );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sql = "CREATE TABLE `plop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `plop`
--

INSERT INTO `plop` VALUES(1, 'kuhg', 'lejrhlezrjh\r\nzer\r\nh\r\nh\r\nrzeh\r\nre', '0000-00-00 00:00:00');
INSERT INTO `plop` VALUES(2, 'erhijer', 'erohijerphjerh\r\ne\r\nrh\r\nerh\r\ner\r\nh\r\nerh\r\n', '0000-00-00 00:00:00');";

mysql_query($sql, $link);


$req = mysql_query( "SELECT * FROM `plop`", $link);

while ( $row = mysql_fetch_assoc( $req ) ) {
	echo '<pre>'.__FILE__.' ( '.__LINE__.' ) ';
		print_r( $row );
	echo '</pre>';
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

mysql_close($link);