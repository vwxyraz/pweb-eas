<?php 
    include('connection.php'); 
    $id = 2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>

    <link href="style.css" rel="stylesheet">

</head>
<body>
    <div class="sidenav">
        <div class="profile">
            <img src="img/shugo.png">
            <div class="column">
                <h2 class="profile-name"> Shugo Meian</h2>
                <p>Siswa</p>
            </div>
        </div>
        <a href="#">Timetable View</a>
        <a href="#">Result View</a>
        <a href="#">Assignment Submission</a>
        <a href="#">Study Material</a>
    </div>

    <div class="content">
        <header>
            <h1>Result</h1>
            <h3>Result </h3>
        </header>

        <div class="row">
            <div class="chart">
                <iframe width="600" height="371" seamless frameborder="0" scrolling="no" 
                src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ6Aqnu87DtAhcNU4CYlo5Hxk0aBht0l17MPwW_V2HPCWRH2dtON_n2ry4mLgKCQX5DcE-b0nOP2BUm/pubchart?oid=1176654852&amp;format=interactive">
                </iframe>
            </div>
        </div>

        <div class="row">
            
            <div class="card">
                <?php
                    $result= mysqli_query($db, "SELECT AVG(nilai) AS average FROM nilai_rapot WHERE semester = 1 AND id_siswa = $id");

                    $row = mysqli_fetch_assoc($result); 
                ?>
                <div class="card-col">
                    <div class="card-row">
                        <div class="card-title">
                            <p>Semester 1</p>
                        </div>
                        <h2 class="card-title-side">2019 - 2020</h2>
                    </div>
                    
                    <div class="card-row">
                        <div class="card-info">
                            <h4>Ranking : 39</h4>
                            <h4>Rata-Rata : <?= $row['average'] ?></h4>
                        </div>
                    </div>
                </div>
                <div class="card-col">
                    <a href="detail-nilai.php?semester=1&id=2" class="btn-1">
                        <h4>Detail Nilai</h4>
                        <img src="img/nilai-icon.png">
                    </a>
                </div>
            </div>
            
        </div>


        <div class="row">
            <?php
                $result= mysqli_query($db, "SELECT AVG(nilai) AS average FROM nilai_rapot WHERE semester = 2 AND id_siswa = $id");

                $row = mysqli_fetch_assoc($result); 
            ?>
            <div class="card">
                <div class="card-col">
                    <div class="card-row">
                        <div class="card-title">
                            <p>Semester 2</p>
                        </div>
                        <h2 class="card-title-side">2019 - 2020</h2>
                    </div>
                    
                    <div class="card-row">
                        <div class="card-info">
                            <h4>Ranking : 39</h4>
                            <h4>Rata-Rata : <?= $row['average'] ?></h4>
                        </div>
                    </div>
                </div>
                <div class="card-col">
                    <a href="detail-nilai.php?semester=2&id=2" class="btn-1">
                        <h4>Detail Nilai</h4>
                        <img src="img/nilai-icon.png">
                    </a>
                </div>
            </div>
            
        </div>

        <div class="row">
        <?php
                $result= mysqli_query($db, "SELECT AVG(nilai) AS average FROM nilai_rapot WHERE semester = 3 AND id_siswa = $id");

                $row = mysqli_fetch_assoc($result); 
            ?>
            <div class="card">
                <div class="card-col">
                    <div class="card-row">
                        <div class="card-title">
                            <p>Semester 3</p>
                        </div>
                        <h2 class="card-title-side">2020 - 2021</h2>
                    </div>
                    
                    <div class="card-row">
                        <div class="card-info">
                            <h4>Ranking : 39</h4>
                            <h4>Rata-Rata : <?= $row['average'] ?></h4>
                        </div>
                    </div>
                </div>
                <div class="card-col">
                    <a href="detail-nilai.php?semester=3&id=2" class="btn-1">
                        <h4>Detail Nilai</h4>
                        <img src="img/nilai-icon.png">
                    </a>
                </div>
            </div>
            
        </div>

        <div class="row">
            <?php
                $result= mysqli_query($db, "SELECT AVG(nilai) AS average FROM nilai_rapot WHERE semester = 4 AND id_siswa = $id");

                $row = mysqli_fetch_assoc($result); 
            ?>
            <div class="card">
                <div class="card-col">
                    <div class="card-row">
                        <div class="card-title">
                            <p>Semester 4</p>
                        </div>
                        <h2 class="card-title-side">2020 - 2021</h2>
                    </div>
                    
                    <div class="card-row">
                        <div class="card-info">
                            <h4>Ranking : 39</h4>
                            <h4>Rata-Rata : <?= $row['average'] ?></h4>
                        </div>
                    </div>
                </div>
                <div class="card-col">
                    <a href="detail-nilai.php?semester=4&id=2" class="btn-1">
                        <h4>Detail Nilai</h4>
                        <img src="img/nilai-icon.png">
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>
    
</body>
</html>