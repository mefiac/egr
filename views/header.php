<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test</title>

        <link rel="stylesheet" type="text/css" href=" /views/css/bootstrap.css" />
		    <link rel="stylesheet" type="text/css" href="/views/css/base.css" />
	    <link rel="stylesheet" type="text/css" href=" /views/css/bootstrap-theme.min.css" />
		<script type='text/javascript' src='/views/js/jquery-2.1.4.min.js'></script>
        <script src="../js/bootstrap.min.js"></script> 
		    <script language="javascript" type="text/javascript">

		function load(val) {
		 
	    $.ajax({
        url: '/api/find',
        data: {
			   name: $("#"+val).val(),
			   what: val
			  },
        type: 'GET',
        success: function (data) {
         $("#center").empty().append(data).fadeIn("2000");
		 
        }
    });
     
      return true;
}
		function load_autors() {
		
		 
	    $.ajax({
        url: '/api/getAutor',
        data: {  
			  },
        type: 'GET',
        success: function (data) {
         $("#add").append(data).css("opacity", 1);
		 
        }
    });
     
      return true;
}
		function del(val) {
		
		 
	    $.ajax({
        url: '/api/del',
        data: {id:val  
			  },
        type: 'GET',
        success: function (data) {
         $("#tr"+val).fadeOut("2000");
		 
        }
    });
	   return true;
}
	function del_autor(val) {
		
		 
	    $.ajax({
        url: '/api/delAutor',
        data: {id:val,
		id_autor: $("#article_id").val() 	
			  },
        type: 'GET',
        success: function (data) {
         $("#"+val).fadeOut("2000");
		 
        }
    });
	   return true;
}
</script>   
      
</head>
<body>
 
<div class="container">

