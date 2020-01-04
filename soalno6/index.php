<!DOCTYPE html>
<html>
<head>
  <title>Index</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- Button trigger modal -->
  
<div class="container mt-3">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Add
  </button>
  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Cashier</th>
        <th scope="col">Product</th>
        <th scope="col">Catregory</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Pevita Pearce</td>
          <td>Latte</td>
          <td>Drink</td>
          <td>Rp. 10.000</td>
          <td><a href=''>Delete</a> | <a href='edit.php'>Edit</a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Pevita Pearce</td>
          <td>Latte</td>
          <td>Drink</td>
          <td>Rp. 10.000</td>
          <td><a href=''>Delete</a> | <a href='edit.php'>Edit</a></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Pevita Pearce</td>
          <td>Latte</td>
          <td>Drink</td>
          <td>Rp. 10.000</td>
          <td><a href=''>Delete</a> | <a href='edit.php'>Edit</a></td>
        </tr>
        <tr>
          <td>4</td>
          <td>Pevita Pearce</td>
          <td>Latte</td>
          <td>Drink</td>
          <td>Rp. 10.000</td>
          <td><a href=''>Delete</a> | <a href='edit.php'>Edit</a></td>
        <tr>
          <td>5</td>
          <td>Pevita Pearce</td>
          <td>Latte</td>
          <td>Drink</td>
          <td>Rp. 10.000</td>
          <td><a href=''>Delete</a> | <a href='edit.php'>Edit</a></td>
       </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Name" name="name">
      </div>
      <div class="form-group">
        <label>Work</label>
        <select class="custom-select" name="id_work">
        
      </select>
      </div>
      <div>
       <label>Salary</label>
        <select class="custom-select" name="id_salary">
      </select>       
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


