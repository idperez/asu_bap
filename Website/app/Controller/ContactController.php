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
class ContactController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
    public $name = 'Contact';

/**
 * This controller does not use a model
 *
 * @var array
 */
    public $uses = array();

    //All pages that are visible to regular users
    public function beforeFilter()
    {
        $this->Auth->allow('index');
    }
    
/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
    public function index() {
        $this->Session->write('Page', 'Contact');
    }
}