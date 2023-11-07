<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dietas extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar()
    {
        $dietaModel = model('DietasModel');
        $data['dietas'] = $dietaModel->findAll();
        return
            view('common/head') .
            view('common/menu') .
            view('Dietas/mostrar', $data) .
            view('common/footer');
    }


    public function agregar()
    {
        $data['title'] = "Agregar Dieta";
        $validation = \Config\Services::validation();
        if(strtolower($this->request->getMethod()) != 'post'){
            print "insert";
        }
        $rules = [
            'dietas'=> 'required|max_length[30]'
        ];
        if (!$this->validate($rules)) {
            return
                view('common/head') .
                view('common/menu') .
                view('Dietas/agregar', $data, ['validation' => $validation]) .
                view('common/footer');
        }else{
            if($this->insert()){
                return redirect('Dietas/mostrar');
            }
        }
    }
    public function insert()
    {
        $dietaModel = model('DietasModel');
        $data = [
            "dieta" => $_POST['dieta'],
            "restricciones" => $_POST['restricciones'],
            "cuidadosEspeciales" => $_POST['cuidadosEspeciales']
        ];
        $dietaModel->insert($data, false);
        return redirect('Dietas/mostrar');
    }

    public function delete($id)
    {
        $dietaModel = model('DietasModel');
        $dietaModel->delete($id);
        return redirect('Dietas/mostrar');
    }

    public function editar($idDieta)
    {
        $dietaModel = model('DietasModel');
        $data['dietas'] = $dietaModel->find($idDieta);

        return
            view('common/head') .
            view('common/menu') .
            view('Dietas/editar', $data) .
            view('common/footer');
    }

    public function update()
    {
        $dietaModel = model('DietasModel');
        $data = [
            "dieta" => $_POST['dieta'],
            "restricciones" => $_POST['restricciones'],
            "cuidadosEspeciales" => $_POST['cuidadosEspeciales']
        ];
        $dietaModel->update($_POST['idDieta'], $data);
        return redirect('Dietas/mostrar');
    }

    public function buscar()
    {
        $dietaModel = model('DietasModel');
        if (isset($_GET['dieta'])) {
            $dieta = $_GET['dieta'];
            $restricciones = $_GET['restricciones'];
            $data['dietas'] = $dietaModel->like('dieta', $dieta)->like('restricciones', $restricciones)->findAll();

        } else {
            $dieta = "";
            $restricciones = "";
            $data['dietas'] = $dietaModel->findAll();
        }

        return
            view('common/head') .
            view('common/menu') .
            view('Dietas/buscar', $data) .
            view('common/footer');
    }

}

