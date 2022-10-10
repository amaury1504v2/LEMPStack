<?php
$pdo = new PDO('mysql:host=amaury_mysql_lemp', 'root', 'root');
$databases = $pdo->query('SHOW DATABASES')->fetch(PDO::FETCH_ASSOC);
print_r($databases);