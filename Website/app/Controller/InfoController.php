<?php
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class InfoController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
    public $name = 'Info';

/**
 * This controller does not use a model
 *
 * @var array
 */
    public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
    public function index() {
        $this->redirect('info');
    }
}