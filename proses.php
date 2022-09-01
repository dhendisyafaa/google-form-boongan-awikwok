<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style_proses.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="bg"></div>
        <main>
            <div class="hasil">
                <h1>Data Siswa</h1>
                <h6>Tanggapan Anda telah direkam</h6>
                <a href="#">Kirim tanggapan lain</a>
            </div>
        </main>

        <div class="">
            <?php

            echo "Nama: " . $_POST["nama"] . "<br>";
            echo "Tempat lahir: " . $_POST["tempat-lahir"] . "<br>";
            echo "Tanggal lahir: " . $_POST["tanggal-lahir"] . "<br>";
            echo "Gender: " . $_POST["gender"] . "<br>";
            echo "Agama: " . $_POST["agama"] . "<br>";
            echo "Alamat: " . $_POST["alamat"] . "<br>";

            ?>
        </div>
    </div>

    <footer>
        <p>Jangan pernah mengirimkan kata sandi melalui Dhendi Formulir</p>
        
        <h6>Konten ini dibuat atau di dukung oleh GuluGulu. <a href="">Laporkan Penyalahgunaan</a> - <a href="">Persyaratan Layanan</a> - <a href="">Kebijakan Privasi</a></h6>

        <div class="badge">
            <p class="dhen">Dhendi</pv>
            <p>Formulir</p>
        </div>
    </footer>

</body>
</html>



