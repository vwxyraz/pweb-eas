<!DOCTYPE html>
<html>

<head>
    <title>Study Material</title>

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
    <p><h4>Study Material</h4><br>
      <h1>Study Material</h1></p>
  </div>

  <!--CONTENT-->
  <div class="container pl-5">
  <table class="table table-striped">
    <thead>
      <tr>
          <th>ID</th>
          <th>Subject</th>
          <th>Semester</th>
          <th>Study Material</th>
      </tr>
    </thead>
    <tbody>
        <?php 
            $con = mysqli_connect("localhost","root","","study_mat");
            
            if(isset($_GET['search'])) {
              $filtervalues = $_GET['search'];
              $query = "SELECT * FROM stud_mat WHERE CONCAT(id,subject,semester) LIKE '%$filtervalues%' ";
              $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0) {
                  foreach($query_run as $items) {
        ?>
                    <tr>
                      <td><?= $items['id']; ?></td>
                      <td><?= $items['subject']; ?></td>
                      <td><?= $items['semester']; ?></td>
                      <td><?="<a href='details.php' class='btn btn-success'>Details📑</a>"?></td>
                    </tr>
                    <?php
                    }
                } else {
                  ?>
                      <tr>
                          <td colspan="4">No Record Found</td>
                      </tr>
                  <?php
                }
              }
            ?>
        </tbody>
    </table>
  </div>

</body>

</html>