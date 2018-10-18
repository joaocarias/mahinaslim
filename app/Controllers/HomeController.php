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
}
