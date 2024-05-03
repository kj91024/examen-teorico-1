<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Services\EmpresaService;
use App\Services\SedeService;
use CodeIgniter\HTTP\ResponseInterface;

class SedeController extends BaseController
{
    public function asignar(int $id_empresa){
        if(!empty($this->request->getPost())){
            $data = $this->request->getPost();
            $service = new SedeService();
            $service->create($id_empresa, $data);
            return redirect()->to(base_url('sede/listar/'.$id_empresa));
        }

        return view('sede', compact('id_empresa'));
    }
    public function listar(int $id_empresa){
        $service = new SedeService();
        $lista = $service->getList($id_empresa);
        return view('lista-sedes', compact('lista'));
    }
}
