<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selfwork Rotte Paremetriche</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body class="bg-secondary">

    <!-- Navbar -->

    <nav id="navbar" class="navbar navbar-expand-lg bg-dark">
        <div id="collapse" class="container-fluid bg-dark">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="{{route('homepage')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('indice')}}">Indice</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- fine Navbar -->


    <!-- Header -->

    <header class="container-fluid">
        <div class="row header">
            <div class="col-12">
                <h1 class="display-1 text-center text-white">Dettaglio articolo</h1>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-4">
                <img src="https://picsum.photos/30{{$article['id']}}" alt="immagine casuale">
                </div>

                <div class="col-12 col-md-4">
                    <h3>Servizio di: {{$article['subject']}}</h3>
                    <p class="lead">{{$article['surname'] . ' ' . $article['name']}}</p>

                    <p class="mt-3">
                        {{$article['article']}}
                    </p>

                </div>
            </div>
        </div>
        






    </header>

    <!-- Fine Header -->




    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>