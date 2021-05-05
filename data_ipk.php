<?php 
include('library.php');
$lib = new Library();
$data_ipk = $lib->show();

if(isset($_GET['hapus_ipk']))
{
    $semester = $_GET['hapus_ipk'];
    $status_hapus = $lib->delete($semester);
    if($status_hapus)
    {
        header('Location: data_ipk.php');
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Home</title>
 
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
 
    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
 
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
 
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="assets/css/starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Assesment 2</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
 
    <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
 
  </div>
</nav>

    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data IPK Mahasiswa</h3>
            </div>
            <div class="card-body">
                <a href="form_add.php" class="btn btn-success">Tambah</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>Semester</th>
                        <th>ipk</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach($data_ipk as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$row['semester']."</td>";
                        echo "<td>".$row['ipk']."</td>";
                        echo "<td><a class='btn btn-info' href='form_edit.php?semester=".$row['semester']."'>Update</a>
                        <a class='btn btn-danger' href='about.php?hapus_ipk=".$row['semester']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>