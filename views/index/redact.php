 <?php require 'views/header.php'; ?>
	<div class="well">
	 <form action="/api/update" id="form" method="get">
	 <h1>Редактировать публикацию</h1>
    
   <?php
   
    echo    '
      <input type="hidden"  name="id" id="article_id" value="'.$this->pole[0]['id'].'" readonly/>
      <input type="text"  name="name" value="'.$this->pole[0]['name'].'" required placeholder="Название"/>
      <input type="date" name="date" value="'.$this->pole[0]['date'].'" required placeholder="Дата"/><div class="well">
	 <h1>Авторы</h1>';
 	  foreach($this->autors as $autor) {
		  echo '<p  id='.$autor['id_autor'].'>'.$autor['name'].' <a onclick=del_autor('.$autor['id_autor'].')>Удалить</a></p>';
	  }
   ?>
 </div>
  <p><input type="submit" value="Отправить"></p>
  </form>
	</div>
<?php require 'views/footer.php'; ?>