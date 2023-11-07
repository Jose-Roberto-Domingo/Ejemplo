<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Mascota extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar()
    {
        $mascotaModel = model('MascotaModel');
        $data['mascotas'] = $mascotaModel->findAll();
        return
            view('common/head') .
            view('common/menu') .
            view('Mascota/mostrar', $data) .
            view('common/footer');
    }


    public function agregar()
    {
        helper(['form', 'url']);
        $dietasModel = model('DietasModel');
        $razaModel = model('RazaModel');
        $adoptadorModel = model('AdoptadorModel');

        $data['dietas'] = $dietasModel->findAll();
        $data['razas'] = $razaModel->findAll();
        $data['adoptador'] =$adoptadorModel->findAll();

        $validation = \Config\Services::validation();
        if (strtolower($this->request->getMethod()) != 'get') {
            return
                view('common/head') .
                view('common/menu') .
                view('Mascota/agregar', $data) .
                view('common/footer');
        }
        $rules = [
            'dietas'=> 'required|max_length[20]',
            'razas'=> 'required|max_length[30]'
        ];

        if (!$this->validate($rules)) {
            return
                view('common/head') .
                view('common/menu') .
                view('Mascota/agregar', $data, ['validation' => $validation]) .
                view('common/footer');
        }
    }
    public function insert()
    {
        $mascotaModel = model('MascotaModel');
        $data = [
            "nombre"=> $_POST['nombre'],
            "tipoAnimal" => $_POST['tipoAnimal'],
            "raza" => $_POST['raza'],
            "dieta" => $_POST['dieta'],
            "estado" => $_POST['estado'],
            "adoptador" => $_POST['adoptador'],
            "cuidadosEspeciales" => $_POST['cuidadosEspeciales']
        ];
        $mascotaModel->insert($data, false);
        return redirect('Mascota/mostrar');
    }

    public function delete($id)
    {
        $mascotaModel = model('MascotaModel');
        $mascotaModel->delete($id);
        return redirect('Mascota/mostrar');
    }

    public function editar($idMascota)
    {
        $mascotaModel = model('MascotaModel');
        $data['mascota'] = $mascotaModel->find($idMascota);

        return
            view('common/head') .
            view('common/menu') .
            view('Mascota/editar', $data) .
            view('common/footer');
    }

    public function update()
    {
        $mascotaModel = model('MascotaModel');
        $data = [
            "nombre"=> $_POST['nombre'],
            "tipoAnimal" => $_POST['tipoAnimal'],
            "raza" => $_POST['raza'],
            "dieta" => $_POST['dieta'],
            "estado" => $_POST['estado'],
            "adoptador" => $_POST['adoptador'],
            "cuidadosEspeciales" => $_POST['cuidadosEspeciales']
        ];
        $mascotaModel->update($_POST['idMascota'], $data);
        return redirect('Mascota/mostrar');
    }

    public function buscar()
    {
        $mascotaModel = model('MascotaModel');
        if (isset($_GET['estado'])) {
            $estado = $_GET['estado'];
            $raza = $_GET['raza'];
            $data['mascota'] = $mascotaModel->like('estado', $estado)->like('raza', $raza)->findAll();

        } else {
            $estado = "";
            $raza = "";
            $data['mascota'] = $mascotaModel->findAll();
        }

        return
            view('common/head') .
            view('common/menu') .
            view('Mascota/buscar', $data) .
            view('common/footer');
    }

}

