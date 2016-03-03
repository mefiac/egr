<?php
  class autors  extends Model {
 
   public function __construct() {
	     parent::__construct();
    
   }
    public function get($id_article=null) {  
  
    $query='select * from autor';	
 
	return $this->database->query($query);
   }
    public function findAutors($name) {
		   //а можно и так.  тем более в этой ситуации оправдано
		$query='SELECT a . * , f.name autors 
		FROM article a, autor f, temp t
		WHERE a.id = t.id_article
		AND t.id_autor = f.id_autor
		AND f.name LIKE  "%'.$name.'%"
		LIMIT 0 , 10 ';	
 
	  return $this->database->query($query);
   
  }
		public function delAutor($id,$id_autor) {
	   $query='DELETE FROM temp where id_article='.$id.' AND id_autor='.$id_autor;
      return $this->database->query($query);
	}
  	 public function findAutorsbystat($id) {
	 $query='SELECT a.* FROM  autor a JOIN temp t on a.id_autor=t.id_autor where t.id_article='.$id;
     return $this->database->query($query);
	}
	 
  }
?>