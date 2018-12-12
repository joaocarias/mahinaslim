<?php

namespace App\Controllers;

use Lib\Controller;

class EmpresaController  extends Controller {
    public function index($request, $response){
       $controller = 'Empresa';
       $action = 'index';
       
       $vars['action'] = $action;
       $vars['controller'] = $controller;      
       $_SESSION['controller'] = $controller;
       $_SESSION['action'] = $action;     
       
       return $this->view->render($response, 'layout_dashboard.php', $vars);
    }
    
    public function cadastro($request, $response){
       $controller = 'Empresa';
       $action = 'cadastro';
       
       $vars['action'] = $action;
       $vars['controller'] = $controller;      
       $_SESSION['controller'] = $controller;
       $_SESSION['action'] = $action;     
       
       return $this->view->render($response, 'layout_dashboard.php', $vars);
    }
}
