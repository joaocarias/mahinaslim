<?php

namespace App\Controllers;

use Lib\Controller;

/**
 * Description of LoginController
 *
 * @author branc
 */
class LoginController extends Controller {
            
    public function login($request, $response){
        $vars['action'] = 'login';
        $vars['controller'] = 'Login';        
        return $this->view->render($response, 'layout_home.php', $vars);
    }
    
    public function logar($request, $response){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        
        $btnAcessar = filter_input(INPUT_POST, 'btnAcessar', FILTER_SANITIZE_STRING);
        $loginInput = filter_input(INPUT_POST, 'loginInput', FILTER_SANITIZE_STRING);
        $senhaInput = filter_input(INPUT_POST, 'senhaInput', FILTER_SANITIZE_STRING);
        
        if($btnAcessar){
            
        }else{
            
        }
    }
}