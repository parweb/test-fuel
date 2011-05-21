<?php

$link = mysql_connect('localhost:/tmp/mysql/lorilee.sock', 'amal', 'MNFDXp8a');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

mysql_select_db( 'lorilee' );

mysql_close($link);