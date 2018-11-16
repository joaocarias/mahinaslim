<?php

namespace App\Controllers;

use Lib\Controller;

/**
 * Description of DashboardController
 *
 * @author branc
 */
class DashboardController extends Controller {
    public function index($request, $response){
        $vars['action'] = 'index';
        $vars['controller'] = 'Dashboard';
        var_dump($vars);
      //  return $this->view->render($response, 'layout_home.php', $vars);
    }
}
