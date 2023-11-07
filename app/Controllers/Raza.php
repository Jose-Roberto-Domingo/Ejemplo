<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Raza extends BaseController
{
    public function index()
    {
        //
    }
    public function mostrar()
    {
        $razaModel = model('RazaModel');
        $data['razas'] = $razaModel->findAll();
        return
            view('common/head') .
            view('common/menu') .
            view('Raza/mostrar', $data) .
            view('common/footer');
    }

    public function agregar()
    {
        $data['title'] = "Agregar Raza";
        $validation = \Config\Services::validation();
        if(strtolower($this->request->getMethod()) != 'post'){
            print "insert";
        }
        $rules = [
            'razas'=> 'required|max_length[30]'
        ];
        if (!$this->validate($rules)) {
            return
                view('common/head') .
                view('common/menu') .
                view('Raza/agregar', $data, ['validation' => $validation]) .
                view('common/footer');
        }else{
            if($this->insert()){
                return redirect('Raza/mostrar');
            }
        }
    }
    public function insert()
    {
        $razaModel = model('RazaModel');
        $data = [
            "raza" => $_POST['raza'],
            "tipoAnimal" => $_POST['tipoAnimal']
        ];
        $razaModel->insert($data, false);
        return redirect('Raza/mostrar');
    }

    public function delete($id)
    {
        $razaModel = model('RazaModel');
        $razaModel->delete($id);
        return redirect('Raza/mostrar');
    }

    public function editar($idRaza)
    {
        $razaModel = model('RazaModel');
        $data['razas'] = $razaModel->find($idRaza);

        return
            view('common/head') .
            view('common/menu') .
            view('Raza/editar', $data) .
            view('common/footer');
    }

    public function update()
    {
        $razaModel = model('RazaModel');
        $data = [
            "raza" => $_POST['raza'],
            "tipoAnimal" => $_POST['tipoAnimal']
        ];
        $razaModel->update($_POST['idRaza'], $data);
        return redirect('Raza/mostrar');
    }

    public function buscar()
    {
        $razaModel = model('RazaModel');
        if (isset($_GET['raza'])) {
            $tipoAnimal = $_GET['tipoAnimal'];
            $raza = $_GET['raza'];
            $data['razas'] = $razaModel->like('raza', $raza)->like('tipoAnimal', $tipoAnimal)->findAll();

        } else {
            $raza = "";
            $tipoAnimal = "";
            $data['razas'] = $razaModel->findAll();
        }

        return
            view('common/head') .
            view('common/menu') .
            view('Raza/buscar', $data) .
            view('common/footer');
    }

}

