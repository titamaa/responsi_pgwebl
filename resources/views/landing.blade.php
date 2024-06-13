<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Tambahkan Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fcfaf8;
        }
        .jumbotron {
            background-image: url('storage/images/bck.png'); /* Ganti dengan path gambar yang sesuai */
            background-size: cover;
            background-position: center;
            color: #332f1f;
            text-align: center;
            padding: 100px 25px;
            margin-bottom: 0;
        }
        .features {
            padding: 50px 0;
        }
        .feature {
            text-align: center;
        }
        .feature img {
            width: 100%;
            max-width: 200px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .feature h3 {
            color: #333;
        }
        .feature p {
            color: #666;
        }

        .btn {
        margin-top: 10px; /* Adjust the margin-top to create space between paragraph and button */
    }
    </style>

    </head>
    <body>
        <div class="jumbotron">
            <!-- Tambahkan ikon Font Awesome -->
            <h1>SEYEGAN DALAM SENTUHAN DIGITAL</h1>
            <p>Temukan keindahan dan detail administratif Kecamatan Seyegan melalui peta administrasi kami. <br>
                Dengan peta ini, Anda dapat menjelajahi kantor pemerintahan Kecamatan Seyegan.</p>
                <a href="dashboard" class="btn btn-secondary btn-lg">Akses Peta Administrasi</a>
        </div>
    </body>


    <div class="container features" id="packages">
        <div class="row">
            <div class="col-md-4">
                <div class="feature">
                    <img src="storage/images/sejarah.png" alt="Package 1">
                    <h3>Sejarah</h3>
                    <p>Jelajahi perjalanan sejarah Seyegan yang kaya akan cerita dan budaya </p>
                    <a href="https://seyegan.slemankab.go.id/sejarah/" class="btn btn-outline-primary">Klik</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <img src="storage/images/web.png" alt="Package 2">
                    <h3>Website</h3>
                    <p>Akses laman resmi Kecamatan Seyegan dan dapatkan informasi terpercaya</p>
                    <a href="https://seyegan.slemankab.go.id/" class="btn btn-outline-primary">Klik</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature">
                    <img src="storage/images/budaya.jpg" alt="Package 3">
                    <h3>Budaya</h3>
                    <p>Jelajahi tradisi dalam kehidupan sehari-hari Seyegan yang begitu unik dan mempesona</p>
                    <a href="https://budaya.jogjaprov.go.id/artikel/detail/507-potensi-budaya-di-kecamatan-seyegan-kabupaten-sleman" class="btn btn-outline-primary">Klik</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
