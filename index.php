<?php

mysql_connect( 'localhost:3307', 'amal', 'MNFDXp8a' ) or die ('Could not connect to mysql server.' );
mysql_select_db( 'lorilee' );

//////////////////////////////////////////////////////////////////////////////////////////////////////////

$mysqli = new mysqli( '/tmp/mysql/lorilee.sock', 'amal', 'MNFDXp8a', 'lorilee' );

echo '<pre>'.__FILE__.' ( '.__LINE__.' ) ';
	print_r( $mysqli );
echo '</pre>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////

$mysqli = new mysqli( 'localhost:/tmp/mysql/lorilee.sock', 'amal', 'MNFDXp8a', 'lorilee' );

echo '<pre>'.__FILE__.' ( '.__LINE__.' ) ';
	print_r( $mysqli );
echo '</pre>';