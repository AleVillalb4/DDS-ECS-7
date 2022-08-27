<?php

header('Content-Type: application/json');
require_once '../personas/consultarTodas.php';
require_once '../../modelo/persona.php';
require_once 'response/consultarTodasResponse.php';

$resp =new ConsultarTodasResponse();
$resp -> ListPersonas= Persona::BuscarPersonas();


echo json_encode($resp);