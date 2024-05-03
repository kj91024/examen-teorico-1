<?php
namespace App\Services;
use App\Entities\Empresa;
use App\Entities\Sede;

class SedeService{
    public function create(int $id_empresa, $data){
        $sede = new Sede();
        $sede->id_empresa = $id_empresa;
        $sede->nombre = $data['nombre'];
        $sede->direccion = $data['direccion'];
        if($sede->hasChanged()){
            model("Sedes")->save($sede);
            return true;
        }
        return false;
    }
    public function getList(int $id_empresa){
        $lista = model("Sedes")->where('id_empresa', $id_empresa)->findAll();
        return $lista;
    }
}