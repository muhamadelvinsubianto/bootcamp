 <!DOCTYPE html>
 <html>
 <head>
   <title>ADD</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title></title>
 </head>
 <body>
 <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">

            <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
       </div>

       <div class="form-group">
          <label for="nrp">NRP</label>
          <input type="number" class="form-control" id="nrp" name="nrp">
       </div>

       <div class="form-group">
          <label for="email">EMAIL</label>
          <input type="email" class="form-control" id="email" name="email">
       </div>

        <div class="form-group">
          <label for="jurusan">JURUSAN</label>
          <select class="form-control" id="jurusan" name="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Pangan">Teknik Pangan</option>
            <option value="Teknik Pinalogi">Teknik Pinalogi</option>
            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
          </select>
        </div>
      </div>
 </body>
 </html>

  