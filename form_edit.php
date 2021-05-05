<?php 
include('library.php');
$lib = new Library();
if(isset($_GET['semester'])){
    $semester = $_GET['semester']; 
    $data_ipk = $lib->get_by_id($semester);
}
else
{
    header('Location: home.php');
}

if(isset($_POST['tombol_update'])){
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    $status_update = $lib->update($semester, $ipk);
    if($status_update)
    {
        header('Location:index.php');
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
                <h3>Update Data IPK Mahasiswa</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="semester" value="<?php echo $data_ipk['semester']; ?>"/>
                <div class="form-group row">
                    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                    <input type="text" name="semester" class="form-control" id="semester" value="<?php echo $data_ipk['semester']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ipk" class="col-sm-2 col-form-label">IPK</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_ipk['ipk']; ?>" name="ipk" class="form-control" id="ipk">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>