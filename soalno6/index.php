<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="container mr-md-3" ></div>
	<a class="btn btn-primary" href="tambah.php" role="button" mr-md-3>Tambah</a>
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Work</th>
      <th scope="col">Salary</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Bintang</th>
      <td>Frontend Dev</td>
      <td>Rp. 12.000.000</td>
      <td>
      	<a href="delete.php" class="btn-danger btn">hapus</a>
		<a href="edit.php" class="btn btn-warning">ubah</a>
      </td>
    </tr>
   <tr>
      <th scope="row">Tasya</th>
      <td>Backend dev</td>
      <td>Rp. 12.000.000</td>
      <td>
      	<a href="delete.php" class="btn-danger btn">hapus</a>
		<a href="edit.php" class="btn btn-warning">ubah</a>
	</td>
    </tr>
   
  </tbody>
</table>
</body>
</html>