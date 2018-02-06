<?php
$pdo = new PDO ('mysql:host=localhost;dbname=cinema;
charset=utf8', 'root', 'root');

$pdo->setAttriute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);
