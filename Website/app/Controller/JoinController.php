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
class JoinController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
    public $name = 'Join';

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
    public function beforeFilter()
    {
        $this->Auth->allow('index', 'new_member', 'prospective_member');
    }
    
    public function index() {
        $this->Session->write('Page', 'Members');
    }
    
    public function new_member() {
        $this->Session->write('Page', 'Members');
    }

    public function prospective_member() {
        
        $this->loadModel('Prospective');
        
        if($this->request->is('post'))
            {
                $this->Prospective->create();
                
                if($this->Prospective->save($this->request->data))
                {                  
                    $this->redirect('success');
                }
            }
            
        $this->Session->write('Page', 'Members');
    }
    
    public function success() {
        $this->Session->write('Page', 'Members');
    }    
   
}