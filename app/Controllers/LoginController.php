<?php

namespace App\Controllers;

use Lib\Controller;
use App\Repositorios\RepositorioLogAcesso;
use App\Repositorios\RepositorioUsuario;
use App\Models\LogAcesso;
/**
 * Description of LoginController
 *
 * @author branc
 */
class LoginController extends Controller {
    public function login($request, $response){
        $vars['action'] = 'login';
        $vars['controller'] = 'Login';        
        return $this->view->render($response, 'layout_login.php', $vars);
    }
    
    public function logar($request, $response){
        $btnAcessar = filter_input(INPUT_POST, 'btnAcessar', FILTER_SANITIZE_STRING);
        $loginInput = filter_input(INPUT_POST, 'loginInput', FILTER_SANITIZE_STRING);
        $senhaInput = filter_input(INPUT_POST, 'senhaInput', FILTER_SANITIZE_STRING);
        
        if($btnAcessar){
            $repUsuario = new RepositorioUsuario(); 
            $objUsuario = $repUsuario->getObjPorLogin($loginInput);
            
            $_SESSION['id_usuario'] = $objUsuario->getId_usuario();
            $_SESSION['id_pessoa'] = $objUsuario->getId_pessoa();
            $_SESSION['login'] = $objUsuario->getLogin();
           // $_SESSION['cpf_pessoa'] = $dados->getCpf_servidor();
           // $_SESSION['nome_pessoa'] = $dados->getCpf_servidor();
            $_SESSION['logado'] = '1';
            //var_dump($_SESSION);
            
            $retorno = $this->registrarLogin("PERMITIDO", $loginInput, $_SESSION['id_usuario']);
           
            header("Location: ../dashboard?r=".$retorno['id']);           
            exit();
        }else{
            $retorno = $this->registrarLogin("NEGADO", $loginInput);
           
            header("Location: ../dashboard?r=".$retorno['id']."&msg=0");           
            exit();
        }        
    }
}
