 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>

<div class="container">
 <h2>Edit Data</h2>
      <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  value="" name="name">

  </div>
  
  <div class="form-group">
		    <label>Work</label>
		    <select class="custom-select" name="id_work">
			</select>
		  </div>
		  <div class="form-group">
		    <label>Salary</label>
		    <select class="custom-select" name="id_salary">
			</select>
		  </div>
  

  </div>
  
  <input type="hidden" name="id" value="">
  <button type="submit" name="update" class="btn btn-primary">Submit</button>
</form>
 </div>
 </body>
 </html>