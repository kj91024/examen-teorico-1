<?php
namespace App\Services;
use App\Entities\Empresa;

class EmpresaService{
    public function create($data){
        $empresa = new Empresa();
        $empresa->nombre = $data['nombre'];
        $empresa->ruc = $data['ruc'];
        $empresa->razon_social = $data['razon_social'];
        $empresa->direccion = $data['direccion'];
        if($empresa->hasChanged()){
            model("Empresas")->save($empresa);
            return true;
        }
        return false;
    }
    public function getList(){
        $lista = model("Empresas")->findAll();
        return $lista;
    }
}