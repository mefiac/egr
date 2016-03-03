<?php
  class Index extends Base {
  
     public function __construct()
	 { 
     parent::__construct();
    $page = (empty($params['page'])) ? 0 : $params['page'];
 
	$sort= [(empty($params['by']) ? 'id' : $params['by']),(empty($params['vector']) ? 'asc' : $params['vector'])];	 
	require 'models/article.php';
	$article = new article();
    $this->view->articles=$article->get($page, $sort);
    $this->view->render('index/index');
    }
    public function stats($arg = false) {
		
    $this->view->render('index/index');
   }
  }
?>