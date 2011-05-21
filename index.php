<?php

try { 
	$dbh = new PDO( "mysql:unix_socket=/tmp/mysql/lorilee.sock;dbname=lorilee", 'amal', 'MNFDXp8a' ); 
} 
catch ( PDOException $e ) { 
	return $e->getMessage(); 
} 