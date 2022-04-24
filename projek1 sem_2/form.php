<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<form method="POST" action="formUTAMA.php">
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="id" class="col-4 col-form-label">Id Pasien</label> 
    <div class="col-8">
      <input id="id" name="id" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="gender">Gender</label> 
    <div class="col-8">
      <select id="gender" name="gender" class="custom-select">
        <option value="laki">Laki-Laki</option>
        <option value="cewek">Perempuan</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tempat" name="tempat" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl" name="tgl" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="bb" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <input id="bb" name="bb" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tb" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <input id="tb" name="tb" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form> 