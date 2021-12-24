<?php 
    include('connection.php'); 
    $semester = isset($_GET['semester']) ? $_GET['semester'] : '';
    $id = isset($_GET['id']) ? $_GET['id'] : '';

    if($semester == 1 || $semester == 2){
        $tahun = "2019 - 2020";
    }
    else if($semester == 3 || $semester == 4){
        $tahun = "2020 - 2021";
    }

    $sql = "SELECT * FROM siswa WHERE id = 2";
    $q = mysqli_query($db, $sql);   
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
            <h3><a href="index.php" style="color: gray;">Result</a> / Semester <?= $semester?></h3>
        </header>

        <div class="row">
            <?php
                $result= mysqli_query($db, "SELECT AVG(nilai) AS average FROM nilai_rapot WHERE semester = $semester AND id_siswa = $id");

                $row = mysqli_fetch_assoc($result); 
                
                // $average = $row['average'];
            ?>
            <div class="card" style="height: max-content;">
                <div class="card-col">
                    <div class="card-title">
                        <p>Semester <?= $semester?></p>
                    </div>
                    <h2 class="card-title-side"><?= $tahun ?></h2>
                </div>
                <div class="card-col">
                    <div class="card-info" style="margin-left : 150px ;">
                        <h4>Ranking : 39</h4>
                        <h4>Rata-Rata : <?= $row['average'] ?></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php	
                while($res = $q->fetch_assoc()) :
            ?>

            <div class="table-info"  style="border: 1px black; border-radius: 10px;">
                <p> Nama&nbsp; : <?= $res['nama'] ?> </p>
                <p> NIK &emsp; : <?= $res['nik'] ?> </p>
            </div>
            <?php endwhile ?>
        </div>
        
        <div class="row" style="margin: 0 10px 10px 10px;">
            <div class="table-nilai">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $j = 1;
					
                            $query = "SELECT * FROM nilai_rapot WHERE semester = $semester AND id_siswa = $id";
                            $mysql = mysqli_query($db, $query); 
                            while($nilai = mysqli_fetch_array($mysql)):
                        ?>
                        <tr>
                            <td class="align-middle" style="text-align: center;"><?= $j ?></td>
                            <td class="align-middle"><?= $nilai['pelajaran'] ?></td>
							<td class="align-middle" style="text-align: center; color: #136B5B"><?= $nilai['nilai'] ?></td>
                        </tr>
                        <?php $j++ ?>
                        <?php endwhile ?>
                    </tbody>
                    
                    
                </table>
            </div>
            
            
        </div>
    
</body>
</html>