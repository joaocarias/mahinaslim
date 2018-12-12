<?php

namespace App\Repositorios;
use App\Interfaces\IRepositorioEmpresa;
use App\Models\Empresa;

class RepositorioEmpresa implements IRepositorioEmpresa {
    
    public function getEmpresa($id): Empresa {
         $sql = " SELECT * FROM tb_empresa WHERE id_empresa = '{$id}' AND ativo = '1' ";
        $obj = new Empresa();
                
        $dados = $obj->selectObj($sql);        
        
        if($dados["obj"]){
            foreach ($dados["obj"] as $row){                        
                $obj->setAtivo($row->ativo);
                $obj->setCriado_por($row->criado_por);
                $obj->setDt_criacao($row->dt_criacao);
                $obj->setDt_modificacao($row->dt_modificacao);
                $obj->setId_empresa($row->id_empresa);                
                $obj->setModificado_por($row->modificado_por);
                $obj->setCnpj($row->cnpj);
                $obj->setId_endereco($row->id_endereco);
                $obj->setNome($row->nome);
                $obj->setNome_fantasia($row->nome_fantasia);                
            }                
            return $obj;
        }else{
            return new Empresa();
        }   
    }

}
