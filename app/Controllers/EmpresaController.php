<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Services\EmpresaService;
use CodeIgniter\HTTP\ResponseInterface;
use App\Entities\Empresa;

class EmpresaController extends BaseController
{
    public function crear(){
        if(!empty($this->request->getPost())){
            $data = $this->request->getPost();
            $service = new EmpresaService();
            $service->create($data);
            return redirect()->to(base_url('empresa/listar'));
        }
        return view('empresa');
    }
    public function listar(){
        $service = new EmpresaService();
        $lista = $service->getList();
        return view('lista-empresas', compact('lista'));
    }
}
