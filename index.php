<?php

echo __LINE__.'<br />';

if ( $_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'localhost' ) {
	$socket = '/Applications/MAMP/tmp/mysql/mysql.sock';
	
	$user = 'root';
	$mdp = 'root';
	$db = 'test';
	
	echo __LINE__.'<br />';
}
else {
	$socket = '/tmp/mysql/lorilee.sock';
	
	$user = 'amal';
	$mdp = 'MNFDXp8a';
	$db = 'lorilee';
	
	echo __LINE__.'<br />';
}

echo __LINE__.'<br />';

try { 
	$dbh = new PDO( "mysql:unix_socket=$socket;dbname=$db", $user, $mdp );
	
	echo __LINE__.'<br />';
} 
catch ( PDOException $e ) { 
	return $e->getMessage(); 
} 

echo __LINE__.'<br />';

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

echo __LINE__.'<br />';

echo '<pre>'.__FILE__.' ( '.__LINE__.' ) ';
	print_r( $dbh->query($sql) );
echo '</pre>';

echo __LINE__.'<br />';

$sth = $dbh->prepare("SELECT * FROM `plop`");
$sth->execute();

echo __LINE__.'<br />';

/* Récupération de toutes les lignes d'un jeu de résultats */
echo "Récupération de toutes les lignes d'un jeu de résultats :\n";
$result = $sth->fetchAll();

echo '<pre>'.__FILE__.' ( '.__LINE__.' ) ';
print_r($result);
echo '</pre>';