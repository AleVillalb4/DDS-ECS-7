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

    public static function BuscarPersonas(){
        $listPersonas =array ();

        $p1 = new Persona();
        $p1-> ApellidoNombre= 'Alejandro';
        $p1-> Id = '1';

        $p2 = new Persona();
        $p2-> ApellidoNombre= 'Agustin';
        $p2-> Id = '2';
       

        $p3 = new Persona();
        $p3-> ApellidoNombre= 'Daiana';
        $p3-> Id = '3';
       

        $p4 = new Persona();
        $p4-> ApellidoNombre= 'Luciano';
        $p4-> Id = '4';
        

        $p5 = new Persona();
        $p5-> ApellidoNombre= 'Floreal';
        $p5-> Id = '5';

        $listPersonas[]=$p1;
        $listPersonas[]=$p2;
        $listPersonas[]=$p3;
        $listPersonas[]=$p4;
        $listPersonas[]=$p5;

        return $listPersonas;
    }
}
