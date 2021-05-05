<?php 
include('library.php');
$lib = new Library();
if(isset($_POST['tombol_tambah'])){
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];

    $add_status = $lib->add_data($semester, $ipk);
    if($add_status){
    header('Location: home.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data IPK Mahasiswa</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                    <input type="text" name="semester" class="form-control" id="semester">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ipk" class="col-sm-2 col-form-label">IPK</label>
                    <div class="col-sm-10">
                    <input type="text" name="ipk" class="form-control" id="ipk">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>