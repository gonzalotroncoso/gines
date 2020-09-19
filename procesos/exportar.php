<?php 
  include_once 'Mysqldump.php';
use Ifsnop\Mysqldump as IMysqldump;
try {
    $dump = new IMysqldump\Mysqldump('mysql:host=localhost;dbname=gines 2', 'root', '');
    $dump->start('dump.sql');
    echo 1;
    
} catch (\Exception $e) {
    echo 'mysqldump-php error: ' . $e->getMessage();
}
 ?>