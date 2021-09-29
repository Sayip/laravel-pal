<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- Bootstrap CSS End -->

    <!-- Font link -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet" />

    <!-- Font link End -->

    <!-- ThreeJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.module.js"></script>
    <!-- ThreeJS END -->

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- <script>
        function guest() {
            var person = prompt('Masukkan nama anda ', '');
            if (person != null) {
                alert("Selamat datang, '" + person + "' Anda adalah pengunjung ke- " + parseInt(7 * 3 + 2) + ' Pada situs kami');
            }
        }
    </script> -->

    <title>PT. PAL Indonesia (Persero)</title>
    <link rel="shortcut icon" href="PT_PAL_Indonesia.png" />
</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5 bg-body rounded fixed-top">
        <div class="container">
            <a style="font-family: Montserrat" class="navbar-brand fw-bolder" href="#">PT. PAL Indonesia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div style="font-family: Montserrat" class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url ("monitor") }}">Monitoring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url ("divisi") }}">Divisi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://pal.co.id/" target="blank">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Jumbotron -->
    <div style="padding-top: 3rem" class="jumbotron text-center">
        <img src="{{ asset("front/assets/img/PT_PAL_Indonesia.png")}}" alt="foto" width="400" />
        <p class="lead">Selamat Datang di</p>
        <h1 style="font-family: Montserrat" class="display-4 mt-3 fs-2">PT. PAL Indonesia (Persero)</h1>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#000f45"
          fill-opacity="1"
          d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </div>
    <!-- Jumbotron End -->

    <!-- Footer -->
    <!-- <footer>
        <p class="text-center">
            Created with Love by
            <a href="https://www.instagram.com/nikoandrianto_/" target="_blank" class="fw-bold btnfooter">Niko Andrianto</a>
        </p>
    </footer> -->
    <!-- Footer End -->
</body>

</html>