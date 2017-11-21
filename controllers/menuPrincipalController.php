<?php
class menuPrincipalController extends controller{


 public function __construct(){
 	parent::__construct();
  $u = new usuarios();
        $u->verificarLogin();
 }
    
    public function index() {
        $dados = array();

        $u = new usuarios();
        $u->setlogado();
        
       
        $this->loadTemplate2('menuPrincipal', $dados);
    }
    
    
}