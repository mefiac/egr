<?php
  class article extends Model {
 
   public function __construct() {
	     parent::__construct();
    
   }
    public function get($page=0,$order) {
	 $query='SELECT f.*, GROUP_CONCAT(a.name ORDER BY a.name SEPARATOR ", ") autors,GROUP_CONCAT(a.id_autor ORDER BY a.id_autor SEPARATOR ", ") id_s
     FROM article f
     LEFT JOIN temp fm ON f.id  = fm.id_article
     LEFT JOIN autor a ON fm.id_autor = a.id_autor';
     if($order!=null) { $query=$query." GROUP BY f.id order by f.".$order[0]."  ".$order[1]; }
     else $query=$query.' GROUP BY f.id 
     LIMIT  '.$page.'  ,10';
 
	//return $this->database->select->Query("article",null,$page); 
	return $this->database->query($query);


   }
    public function find($name) {
	 $query='SELECT f.*, GROUP_CONCAT(a.name ORDER BY a.name SEPARATOR ", ") autors,GROUP_CONCAT(a.id_autor ORDER BY a.id_autor SEPARATOR ", ") id_s
     FROM article f
     LEFT JOIN temp fm ON f.id  = fm.id_article
     LEFT JOIN autor a ON fm.id_autor = a.id_autor 
	 WHERE f.name like "%'.$name.'%"  GROUP BY f.id 
     LIMIT  0 ,10';
	 
     return $this->database->query($query);
	}
	 public function del($id) {
	 $query='DELETE FROM article
	 WHERE id='.$id;
	 //связями удалит и авторов в пром таблице
     return $this->database->query($query);
	}
	 public function getArticle($id) {
	 $query='SELECT * FROM article
	 WHERE id='.$id;
     return $this->database->query($query);
	}
	 public function update($id,$name,$date) {
	 $query='UPDATE article SET name="'.$name.'",date="'.$date.'"
	 WHERE id='.$id;
     return $this->database->query($query);
	}

	 public function add($name,$date,$autor=null) {
	 $query='INSERT INTO `article`(`name`, `date`) VALUES ( "'.$name.'","'.$date.'")';
	
	  $id=$this->database->insQuery($query);
	 
	 
	 if($autor!=null)
	 {
		$query='INSERT INTO temp(id_article,id_autor) VALUES '; 
		 	foreach($autor as $autors)
		 {
			  $autors===reset($autor) ? $str=$str.'('.$id.','.$autors.')' :  $str=$str.',('.$id.','.$autors.')';
			 
	    }
		 $id=$this->database->query($query.$str);
		 }
	
	 
	  }
 
    
	
  }
?>