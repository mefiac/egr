<?php
  class Api extends Base {
   public function __construct() {
	  parent::__construct();
	
   }
    public function get($arg=0,$params=0) {	

    $page = (empty($params['page'])) ? 0 : $params['page'];
 
	$sort= [(empty($params['by']) ? 'id' : $params['by']),(empty($params['vector']) ? 'asc' : $params['vector'])];	 
    require 'models/article.php';
	$article = new article();
    $this->view->articles=$article->get($page,$sort);
    $this->view->render('index/index');
	 
    }
    public function find($arg,$params=0) {	  
  
	if($params['what']=="name")
	{
	require 'models/article.php';
    $article = new article();
    $this->view->articles=$article->find($params['name']);
	}else
	{
	require 'models/autors.php';
    $autors = new autors();
    $this->view->articles=$autors->findAutors($params['name']);
	}
    $this->view->render('index/center');
   }
    public function add($arg,$params=0) {	  
    require 'models/article.php';
    $article = new article();
    $article->add($params['name'],$params['date'],$params['aut']);
    $this->view->render('index/add');
   }
    public function redact($arg,$params=0) {	 
	$id=$arg;	
    require 'models/article.php';
	require 'models/autors.php';
    $autors = new autors();
    $article = new article();
    $this->view->pole=$article->getArticle($id);
   	$this->view->autors=$autors->findAutorsbystat($id);
    $this->view->render('index/redact');
   }
    public function getAutor($arg=null,$params=0) {	  
    require 'models/autors.php';
    $autors = new autors();
    $this->view->autors=$autors->get();
	$this->view->render('index/autors');
    
   }
    public function delAutor($arg=null,$params=0) {	  
	if(!empty($params['id']) && !empty($params['id_autor']))
	{
    require 'models/autors.php';
    $autors = new autors();
    $this->view->autors=$autors->delAutor($params['id'],$params['id_autor']);
	$this->view->msg="автор удален";
	}
	$this->view->render('index/add');
    
   }
    public function del($arg,$params=0) {	  
    require 'models/article.php';
    $article = new article();
    $article->del($params['id']);
    
   }
    public function update($arg,$params=0) {	  
    require 'models/article.php';
    $article = new article();
    $article->update($params['id'],$params['name'],$params['date']);
	$this->view->msg="Запись обновлена";
    $this->view->render('index/add');
   }
  }
?>