<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
<form method="post" action="hasil-nilai.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">nama mahasiswa</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="masukan nama lengkap " type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">nim</label> 
    <div class="col-8">
      <input id="nim" name="nim" placeholder="masukan nim" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="rombel" class="col-4 col-form-label">rombel</label> 
    <div class="col-8">
      <input id="rombel" name="rombel" placeholder="masukan rombel" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">mata kulia</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" required="required">
        <option value="jaringan komputer">jariangan komputer</option>
        <option value="pemweb">pemweb</option>
        <option value="UI/UX">UI/UX</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" placeholder="masukan nilai tugas" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">nilai uts</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="masukan nilai uts " type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">nilai uas</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="masukan nilai uas " type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
            </div>
        </div>
    </div>
    
</body>
</html>