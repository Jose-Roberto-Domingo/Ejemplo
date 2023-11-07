<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Adoptador extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar()
    {
        $adoptadorModel = model('AdoptadorModel');
        $data['adoptador'] = $adoptadorModel->findAll();
        return
            view('common/head') .
            view('common/menu') .
            view('Adoptador/mostrar', $data) .
            view('common/footer');
    }


    public function agregar()
    {
        $data['title'] = "Agregar Adoptador";
        $validation = \Config\Services::validation();
        if(strtolower($this->request->getMethod()) != 'post'){
            print "insert";
        }
        $rules = [
            'adoptador'=> 'required|max_length[30]'
        ];
        if (!$this->validate($rules)) {
            return
                view('common/head') .
                view('common/menu') .
                view('Adoptador/agregar', $data, ['validation' => $validation]) .
                view('common/footer');
        }
    }
    public function insert()
    {
        $adoptadorModel = model('AdoptadorModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "teléfono" => $_POST['teléfono'],
            "dirección" => $_POST['dirección']
        ];
        $adoptadorModel->insert($data, false);
        return redirect('Adoptador/mostrar');
    }

    public function delete($id)
    {
        $adoptadorModel = model('AdoptadorModel');
        $adoptadorModel->delete($id);
        return redirect('Adoptador/mostrar');
    }

    public function editar($idAdoptador)
    {
        $adoptadorModel = model('AdoptadorModel');
        $data['adoptador'] = $adoptadorModel->find($idAdoptador);

        return
            view('common/head') .
            view('common/menu') .
            view('Adoptador/editar', $data) .
            view('common/footer');
    }

    public function update()
    {
        $adoptadorModel = model('AdoptadorModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "teléfono" => $_POST['teléfono'],
            "dirección" => $_POST['dirección']
        ];
        $adoptadorModel->update($_POST['idAdoptador'], $data);
        return redirect('Adoptador/mostrar');
    }

    public function buscar()
    {
        $adoptadorModel = model('AdoptadorModel');
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $data['adoptador'] = $adoptadorModel->like('nombre', $nombre)->findAll();

        } else {
            $nombre = "";
            $data['adoptador'] = $adoptadorModel->findAll();
        }

        return
            view('common/head') .
            view('common/menu') .
            view('Adoptador/buscar', $data) .
            view('common/footer');
    }

}

