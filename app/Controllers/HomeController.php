<?php

namespace App\Controllers;

use Lib\Controller;

/**
 * Description of HomeController
 *
 * @author joão carias de frança
 */
class HomeController extends Controller{
    public function index($request, $response){
        $vars['page'] = 'home';        
        return $this->view->render($response, 'layout_home.php', $vars);
    }
    
    public function sobre($request, $response){
        $vars['page'] = 'sobre';        
        return $this->view->render($response, 'layout_home.php', $vars);
    }
    
    public function contato($request, $response){
        $vars['page'] = 'contato';        
        return $this->view->render($response, 'layout_home.php', $vars);
    }
}
