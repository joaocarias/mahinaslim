<?php

namespace Lib;

use App\Models\LogAcesso;
use App\Repositorios\RepositorioLogAcesso;

/**
 * Description of Controller
 *
 * @author branc
 */
class Controller {
    private $container;
    
    function __construct($container) {
        $this->container = $container;
    }
    
    public function __get($property) {
        if($this->container->{$property}){
            return $this->container->{$property};
        }
    }
    
    public function registrarLogin($status, $login, $id_usuario = 0){
        $logAcesso = new LogAcesso($id_usuario, $login, $status);
        $repositorioLogAcesso = new RepositorioLogAcesso();
        return $repositorioLogAcesso->insertObj($logAcesso);
    }
}
