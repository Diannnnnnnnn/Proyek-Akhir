<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>

<body>


    <header>

        <div class="container-fluid">

            <div class="navb-logo">
                <img src="image/del.jpg" style=" width:80px; height:80px; padding-left:2%;">
            <a style="font-size:2.4rem; font-family: 'Times New Roman', Times, serif;">penilaian ta</a>
            </div>

            <div class="navb-items d-none d-xl-flex ">

                <div class="item">
                    <a href="home.php">Home</a>
                </div>

                <div class="item">
                    <a href="Penilaian.php">Penilaian</a>
                </div>

                <div class="item">
                    <a href="profil.php">profil </a>
                </div>

                <div class="item">
                    <a href="about.php">About</a>
                </div>

                <div class="item-button">
                    <a href="logout.php" type="button">Logout</a>
                </div>
            </div>

        </div>
    </header>
<!-- Hero section start -->
<section class="hero" id="home">
                <main class="content">
                    <h1> Apa Itu <span>Tugas Akhir ?</span></h1>
                    <p>Tugas Akhir merupakan mata kuliah wajib yang penyelesaiannya merupakan syarat 
                        kelululusan bagi mahasiswa semua program studi Diploma (Diploma 3/D3 dan Diploma 4/D4) di Fakultas Informatika 
                        dan Teknik Elektro (FITE) Institut Teknologi Del (IT Del).</p>
                        <a href="home.php" class="btn" role="button">Selengkapnya</a>
                </main>    
                </section>    
                
    <section class="section-1">
    </section>
</body>

</html>