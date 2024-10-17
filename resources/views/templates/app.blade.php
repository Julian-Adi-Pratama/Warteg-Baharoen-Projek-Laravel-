<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Warteg Baharoen</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        @stack('style')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Londrina+Sketch&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
<style>
.namecompani {
  font-family: "Londrina Sketch", sans-serif;
  font-weight: 500;
  font-style: normal;
  margin-right: 10px;
  padding-right: 10px;
}
.homehome {
  font-family: "Londrina Sketch", sans-serif;
  font-weight: 1000;
  font-style: normal;
  font-size: 20px;
  padding-right: 10px;
}
.datadata {
  font-family: "Londrina Sketch", sans-serif;
  font-weight: 1000;
  font-style: normal;
  font-size: 20px;
  padding-right: 10px;
}
.akunakun {
  font-family: "Londrina Sketch", sans-serif;
  font-weight: 1000;
  font-style: normal;
  font-size: 20px;
  padding-right: 10px;
}

</style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <img style="width: 60px; margin-right: 10px;" src="data:image/jpeg;base64,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" alt="">
                <div class="namecompani">
                  <h1>BAHAROEN</h1>
                </div>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <div class="homehome">
                    <a class="nav-link active" aria-current="page" href="{{route('landing_page')}}">Halaman</a>
                  </div>
                  </li>
                  <li class="nav-item">
                    <div class="datadata">
                    <a class="nav-link active" aria-current="page" href="{{route('products')}}">Pesanan </a>
                  </div>
                  </li>
                  <li class="nav-item">
                    <div class="akunakun">
                    <a class="nav-link active" aria-current="page" href="{{route('users')}}">Daftar Member</a>
                  </div>
                  </li>
                </ul>
              </div>
            </div>
        </nav>

        <div class="container mt-5">
            @yield('content-dinamis')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        @stack('script')
    </body>
</html>
