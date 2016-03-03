 
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
	 <form action="/api/add" method="get">
	 <h1>Добавить публикацию</h1>
	<p> <a onclick="load_autors()" style="cursor:pointer">Добавить автора</a></p>
	<div id="add">
	</div>
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
 