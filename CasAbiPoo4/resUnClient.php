<?php
require ("dao/Abi.dao.php");
require("presentation/resUnClient.vue.php");
$idClient = $_GET["idClient"];
$resultClient =  AbiDAO::ResUnClient($idClient);
AfficheUnClient($resultClient, $idClient);



?>