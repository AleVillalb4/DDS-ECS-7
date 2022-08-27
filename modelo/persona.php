<?php
require_once 'match.php';
class Persona
{
    public $Id;
    public $ApellidoNombre;
    public $ListMatcheos = array();

    public function GenerarSolicitudDeMatcheo($idPersonaAMatchear)
    {
        //codigo q guarda la solictud en la db
        //ejecuta todas las validaciones

        $p = new Persona();
        $p->ApellidoNombre = 'Escamoso, pedro';
        $p->Id = $idPersonaAMatchear;

        $matchGenerado = new Matcheo();
        $matchGenerado->Id = 1;
        $matchGenerado->Estado = 'No matcheado';
        $matchGenerado->Persona = $p;
        return $matchGenerado;
    }

    public static function getPersona($idPersona)
    {
        //codigo q busca la persona en la db
        $p = new Persona();
        $p->ApellidoNombre = 'Juarez, Alejandro';
        $p->Id = $idPersona;
        return $p;
    }

    public function Agregar(){
        //codigo q agrega la persona en la db
        $p = new Persona();
        $p->Id =
        $p->ApellidoNombre = $this->ApellidoNombre;
        return $p;
    }
}
