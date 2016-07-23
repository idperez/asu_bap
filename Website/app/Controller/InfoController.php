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
     //All pages that are visible to regular users
    public function beforeFilter()
    {
        $this->Auth->allow('index', 'announcements', 'advisory_board', 'executive_board', 'sponsor', 'events', 'opportunities', 
            'policies', 'new_announcement', 'edit_announcement', 'our_sponsors');
    }
    
    public function index() {
        
    }
    
    public function announcements() {
        
    }
    
    public function advisory_board() {
        
    }
    
    public function executive_board() {
        
    }
    
    public function sponsor() {
        
    }
    
    public function events() {
        
    }
    
    public function opportunities() {
        
    }
    
    public function policies() {
        
    }
    
    public function new_announcement() {
        
    }
    
    public function edit_announcement() {
        
    }
    
    public function our_sponsors() {
        
    }
}