<!DOCTYPE html>
<html>

<head>
    <title>Details</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <!--SIDEBAR-->
  <div class="sidenav">
    <div class="profile" align="center">
      <img src="img/sano.jpg" alt="sano">
      <p style="margin-top: 20px;">Sano Manjirou<br>
        <span class="small">Siswa</span></p>
    </div>
    <a href="#" id="u">Timetable View</a>
    <a href="#" id="u">Result View</a>
    <a href="#" id="u">Assignment Submission</a>
    <a href="study_material.php" id="u">Study Material</a>
  </div>

  <!--SEARCH BAR-->
  <div class="search-container" align="right" style="margin-top: 30px; margin-right:60px;">
    <form action="">
      <input type="text" placeholder="  Search" name="search" style="width: 10%; border-radius: 1rem;" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>">
      <button type="submit" style="border-radius: 1rem;">🔍</button>
    </form>
  </div>

  <!--TITLE-->
  <div class="title container p-5">
    <p><h4>
      <a href="study_material.php" class="sm" style="text-decoration: none; color:rgb(199, 199, 199);">Study Material</a>
       > Matematika</h4><br>
      <h1>Details</h1></p>
  </div>

  <!--CONTENT-->
  <div class="container pl-5">
    <p>
        <span class="badge badge-success text-wrap">MT0104</span>
        | Semester 1<br>
        <h3>Matematika</h3>
    </p>
    <div class="container border rounded mt-4 pt-2 bg-light">
      <div class="row">
        <div class="col-10">
          <h3>Bab 1</h3>
          <p style="font-size: 30px;">Bilangan Eksponen dan Logaritma</p>
        </div>
        <div class="col-sm pt-4">
          <a class="btn btn-dark" href="https://sman3simpanghilir.sch.id/download/file/X_Matematika_Peminatan_KD_3_1_Fungsi_Eksponen_dan_Fungsi_Logaritma_.pdf" download>Download🔽</a>
        </div>
      </div>
    </div>

    <div class="container border rounded mt-4 pt-2 bg-light">
      <div class="row">
        <div class="col-10">
          <h3>Bab 2</h3>
          <p style="font-size: 30px;">Barisan Aritmatika dan Geometri</p>
        </div>
        <div class="col-sm pt-4">
          <a class="btn btn-dark" href="http://files1.simpkb.id/guruberbagi/rpp/153642-1600778848.pdf" download>Download🔽</a>
        </div>
      </div>
    </div>

    <div class="container border rounded mt-4 pt-2 bg-light">
      <div class="row">
        <div class="col-10">
          <h3>Bab 3</h3>
          <p style="font-size: 30px;">Vektor</p>
        </div>
        <div class="col-sm pt-4">
          <a class="btn btn-dark" href="https://sumberbelajar.seamolec.org/Media/Dokumen/59d30d30865eacbc6001ebdc/d1f80382a15a733dc374c3719ee4fbb1.pdf" download>Download🔽</a>
        </div>
      </div>
    </div>

  </div>

</body>

</html>