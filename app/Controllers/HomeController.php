<?php

namespace App\Controllers;

/**
 * Description of HomeController
 *
 * @author branc
 */
class HomeController {
    public function index($request, $response){
        $vars['page'] = 'home';        
        return $this->view->render($response, 'template.php', $vars);
    }
}
