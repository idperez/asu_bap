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
            'policies', 'new_announcement', 'edit_announcement', 'our_sponsors', 'charge');
    }
    
    public function index() {
        $this->Session->write('Page', 'Info');
    }
    
    public function announcements() {
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Info');
    }
    
    public function advisory_board() {
        $this->layout = 'hero-ish'; 
        $this->Session->write('Page', 'Info');
    }
    
    public function executive_board() {
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Info');
    }
    
    public function sponsor() {
        $this->Session->write('Page', 'Info');
    }
    
    public function events() {
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Info');
    }
    
    public function opportunities() {
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Info');
    }
    
    public function policies() {
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Members');
    }
    
    public function new_announcement() {
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Hub');
    }
    
    public function edit_announcement() {
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Hub');
    }
    
    public function our_sponsors() {
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Info');
    }
    
    public function charge() {
        
    }
}