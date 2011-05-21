<?php

try { 
	$dbh = new PDO( "mysql:unix_socket=/tmp/mysql/lorilee.sock;dbname=lorilee", 'amal', 'MNFDXp8a' ); 
} 
catch ( PDOException $e ) { 
	return $e->getMessage(); 
} 

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

$dbh->query($sql);

$list = $dbh->query("SELECT * FROM `plop`");

echo '<pre>'.__FILE__.' ( '.__LINE__.' ) ';
	print_r( $list );
echo '</pre>';exit;