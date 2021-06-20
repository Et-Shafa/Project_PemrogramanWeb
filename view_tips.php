<?php 
    if(isset($_GET['log'])){
            require 'view_login.php';
        }

    if(isset($_GET['reg'])){
            require 'view_registrasi.php';
        }

    


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
 	<title>Tips</title>
 </head>
 <body>
    <header>
        

    </header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E8713C;">

        <a class="navbar-brand" href="#" style="font-family: cursive; font-weight: 20pt; font-size: 20pt;"><strong>NEED.ID</strong></a>
     
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     
        <div class="collapse navbar-collapse">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="view_cariLowongan.php">Cari Lowongan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_review.php">Review</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="view_tips.php">Tips</a>
                </li>
            </ul>

        </div>
        <div class="collapse navbar-collapse">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Bahasa Indonesia</a>
                </li>
                <li class="nav-item">
                    <form action="" method="GET">
                        <input class='nav-link masuk' type="submit" name="log" value="Masuk">
                        <!-- <a href="" name="log" class="nav-link">Masuk</a> -->
                    </form>
                    <!-- <a class="nav-link" href="#">Masuk</a> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">|</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="#">Daftar</a> -->
                    <form action="" method="GET">
                        <input class='nav-link masuk' type="submit" name="reg" value="Daftar">
                        <!-- <a href="" name="log" class="nav-link">Masuk</a> -->
                    </form>
                </li>
            </ul>

        </div>
    </nav>

    <div class="badan" style="text-align: center;">
        <p style="font-family: serif;"><strong><h3>ARTIKEL</h3></strong></p>
        <P>Tips karir untuk kamu yang ingin mengetahui bagaimana membangun karir kamu</P>

        <!-- <article class="artikel">
            asndkafkmafn
            
        </article> -->
        <div class="container">
        <!-- <h1>Cari lowongan kerja sesuai minat</h1>  -->
        <div class="card card-defaul" style="margin-bottom: 20px;">
            <div class="card-heading" style="background-color:#FCECB8">
                <b>Cari lowongan kerja sesuai minat</b>
            </div>
            <div class="card-body">
                <p>Pengusaha nyentrik asal Indonesia Bob Sadino pernah berkata bahwa pekerjaan yang enak adalah hobi yang dibayar. Bekerja pada hal atau bidang yang disukai tentu akan membawa kepuasan bagi diri sendiri maupun bagi perusahaan.

                Carilah lowongan pekerjaan yang memang sesuai dengan minat atau hobi agar bila diterima tidak ada beban saat menjalankannya.

                Minat atau hobi yang sesuai dengan pekerjaan yang akan digeluti biasanya akan membantu pekerja supaya lebih produktif dalam menghasilkan sesuatu. Tak hanya itu, bisa juga kualitas yang dihasilkan lebih baik dibanding yang pekerjaannya tidak sesuai minat.

                Namun tak ada salahnya mempertimbangkan opsi lain yang mendekati dengan bidang kesukaanmu, atau industri lainnya yang punya peluang karier baik. Jangan terlalu strict atau kaku berpatok pada satu pekerjaan. Dengan begitu akan memperluas peluang dan kesemapatanmu diterima bekerja.</p>
            </div>          
        </div>

        <div class="card card-defaul" style="margin-bottom: 20px;">
            <div class="card-heading" style="background-color:#FCECB8">
                <b>Melatih soft skill</b>
            </div>
            <div class="card-body">
                <p>Dalam pekerjaan tertentu tidak jarang soft skill akan lebih dibutuhkan dibandingkan hard skill. Soft skill yang harus dimiliki oleh setiap pelamar adalah kemampuan komunikasi atau interpersonal yang baik, kecerdasan sosial dan emosional.

                Keterampilan ini sangat dibutuhkan karena dianggap mampu bekerja sama dalam tim sehingga mudah dalam mencapai goal perusahaan.</p>
            </div>          
        </div>

        <div class="card card-defaul" style="margin-bottom: 20px;">
            <div class="card-heading" style="background-color:#FCECB8">
                <b>Manfaatkan situs lowongan kerja terpercaya</b>
            </div>
            <div class="card-body">
                <p>Meski terdapat beberapa industri yang harus stop operasi dan memberhentikan karyawannya saat pandemi, ada juga perusahaan maupun organisasi lain yang justru tengah mencari karyawan baru.

                Sektor yang tengah tinggi permintaan antara lain kesehatan, teknologi, keuangan, pendidikan online, makanan, dan ekspedisi atau layanan pengiriman.

                Coba cari peluang-peluang tersebut di situs lowongan kerja terpercaya yang banyak digunakan di Indonesia, seperti Jobstreet, Glints, UrbanHire, Karir, dan sebagainya. Manfaatkan situs tersebut semaksimal mungkin untuk mempercepat Anda mendapat pekerjaan baru.</p>
            </div>          
        </div>

        <div class="card card-defaul" style="margin-bottom: 20px;">
            <div class="card-heading" style="background-color:#FCECB8">
                <b>Merasa cocok dan nyaman</b>
            </div>
            <div class="card-body">
                <p>Hal ini menjadi penting sebab harus ada rasa nyaman setelah mengirimkan lamaran. Meski terdesak, namun jangan buru-buru dan tutup mata menyebarkan lamaran pada perusahaan yang lowong.

                Tetaplah selektif memilih pekerjaan, yakinkan diri bahwa perusahaan yang telah dipilih juga bisa memberikan keuntungan.

                Rasa nyaman dan percaya diri ini juga bisa memberikan semangat bagi calon pelamar, sehingga bila diterima kerja akan berdampak baik saat mulai bekerja.</p>
            </div>          
        </div>

        <div class="card card-defaul" style="margin-bottom: 20px;">
            <div class="card-heading" style="background-color:#FCECB8">
                <b>Menjaga reputasi pribadi di media sosial</b>
            </div>
            <div class="card-body">
                <p>Di era modern saat ini tidak sedikit perusahaan yang mempertimbangkan latar belakang calon pekerjanya melalui media sosial. Selain screening melalui CV dan melihat hasil interview atau tes, para perekrut juga 'diam-diam' memantau aktivitas pelamar di dunia maya.

                Banyak juga calon pelamar yang gagal alias tidak diterima kerja karena jejak digitalnya. Entah itu konten yang di-posting-nya di media sosial, berafiliasi pada kelompok tertentu, atau hal lain yang dianggap bertentangan dan tidak layak.

                Karenanya, gunakan dan manfaatkan media sosial dengan bijak dan positif agar tak menjadi batu sandunganmu dalam memulai karier, ya.</p>
            </div>          
        </div>

        <div class="card card-defaul" style="margin-bottom: 20px;">
            <div class="card-heading" style="background-color:#FCECB8">
                <b>Gali informasi dari orang yang berpengalaman</b>
            </div>
            <div class="card-body">
                <p>Pengalaman adalah guru yang terbaik, sebab dari situlah orang bisa memperbaiki kesalahan yang telah dibuat sebelumnya. Bahkan bisa meminimalisasi kesalahan serupa di kemudian hari.

                Tak ada salahnya meminta masukan, pandangan, atau mendengar cerita dari orang yang sudah berpengalaman. Selain bisa membagikan cerita pengalamannya, Anda bisa juga mendapat ilmu yang telah ia pelajari selama ini.

                Tidak hanya itu, manfaatkan relasi dengan orang yang telah berpengalaman atau senior tersebut.

                Bisa saja pada suatu waktu ia menjadi atasan, dan karena Anda memiliki kesan baik padanya di kemudian hari, Anda bisa diminta untuk bekerja sama dengannya atau mungkin direkomendasikan pada pencari kerja lainnya.</p>
            </div>          
        </div>
    </div>

    <footer style="height: 50px;">
        <div class="footer_line"></div>
        <p>NEED.ID 2021</p>
        
    </footer>

 	
 </body>
 </html>