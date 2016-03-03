<?php require 'views/header.php'; ?>
<div class="row">
<div class="form-group">
  <label for="name">Поиск по названию:</label>
<input type="text" name="name" id="name" onchange=load('name'); class=" col-md-2 form-control"/>
</div>
<div class="form-group">
 <label for="autor">Поиск по автору:</label>
<input type="text" name="autor" id="autor"  onchange=load('autor'); class=" col-md-2 form-control "/>
</div>
</div>
<div class="row" id="center">
<table class="table table-striped">
 <thead>
      <tr>
        <th><a href="/api/get?by=id&vector=asc">&and;</a>
		#
		 <a href="/api/get?by=id&vector=desc">&or;</a>
		</th>
        <th>Название</th>
        <th><a href="/api/get?by=date&vector=asc">&and;</a>
		 Дата публиуации
		 <a href="/api/get?by=date&vector=desc">&or;</a>
		</th>
        <th>Авторы/Автор</th>
		<th>Удалить</th>
		<th>Редактировать</th>
      </tr>
    </thead>
	<div class="well">
	 <form action="/api/add" id="form" method="get">
	 <h1>Добавить публикацию</h1>
	<p> <a onclick="load_autors()" style="cursor:pointer">Добавить автора</a></p>
   <p><select size="3" multiple name="aut[]" id="add" style="width:50%;opacity:0">
   
</select></p> 
    <input type="text"  name="name" required placeholder="Название"/>
    <input type="date" name="date" required placeholder="Дата"/>
   
   <p><input type="submit" value="Отправить"></p>
   
  </form>
	</div>
<?php foreach($this->articles as $article) {
        echo ' <tr id="tr'.$article['id'].'">
                          <td class="col-sm-3">'.$article['id'].'</td>
                          <td class="col-sm-3">'.$article['name'].'</td>
                          <td class="col-sm-3">'.$article['date'].'</td>
						  <td class="col-sm-3">'.$article['autors'].'</td>
					      <td class="col-sm-3"><a onclick="del('.$article['id'].')">X</a></td>
						
						  <td class="col-sm-3"><a href="/api/redact/'.$article['id'].'">R</a></td>
        </tr>';

 
   
}  ?>
</table>
</div>
<?php require 'views/footer.php'; ?>