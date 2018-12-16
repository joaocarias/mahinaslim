<?php

namespace App\Repositorios;
use App\Models\Endereco;
use App\Interfaces\IRepositorioEndereco;

class RepositorioEndereco implements IRepositorioEndereco{
    
    public function insertObj(Endereco $endereco) {
        $i = 0;
        $tabela = "tb_endereco";
        
        $params = array(
                "logradouro" =>$endereco->getLogradouro(), 
                "numero" => $endereco->getNumero(),
                "complemento" => $endereco->getComplemento(),
                "cep" => $endereco->getCep(),
                "bairro" => $endereco->getBairro(),
                "cidade" => $endereco->getCidade(),
                "uf" => $endereco->getUf(), 
                "telefone" => $endereco->getTelefone(),
                "celular"  => $endereco->getCelular(),
                "email" => $endereco->getEmail(),
                "criado_por" => $_SESSION["id_usuario"]
                );
        
        $colunas = "";        
        $valores = "";
        foreach ($params as $coluna => $valor){
            if($i == 0){
                $colunas .= "{$coluna}";
                $valores .= "'{$valor}'";
            }else{
                $colunas .= ", {$coluna}";
                $valores .= ", '{$valor}'";
            }
            $i++;
        }
        
        $sql = " INSERT INTO {$tabela} ( {$colunas} ) "
        . "VALUES ({$valores}); ";
        
        $arrayRetorno = $endereco->insert($sql);
        return $arrayRetorno;
    }

}
