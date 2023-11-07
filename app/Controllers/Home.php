<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
    $db = db_connect();
    $sql = "SELECT mascota.*, dietas.dieta,dietas.cuidadosEspeciales, razas.raza FROM mascota, dietas, razas where mascota.dieta = dietas.dieta and mascota.raza = razas.raza";
    $query = $db->query($sql);
    $data['mascotas'] = $query->getResult();

    return view('home/head') . 
    view('home/menu') . 
    view('home/listaMascotas',$data) .
    view('home/footer');
    }
}
