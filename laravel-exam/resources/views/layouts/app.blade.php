<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css") }}">                          
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>


    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg custom-nav">
        <div class="container-fluid">
          <a class="nav-title-custom" href="{{ route('index') }}">THE BOOKS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse link-nav-custom" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('create') }}">Ajouter un livre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('show-all') }}">Voir la liste</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        @yield('content')

    <footer class="container-expended" role="footer">

        <footer class="text-center custom-footer">
          <div class="custom-div-btn-footer">
            <form action="https://github.com/FGONCALVESF">
                <button type="submit" class="btn custom-btn-color btn-lg btn-floating">
                    <i class="fa-brands fa-github-square"></i>
                    <span>Visit my github here</span>
                </button>
            </form>
          </div>
      
          <div class="custom-div-copyright-footer">
            © 2022 Copyright:
            <a class="text-white text-decoration-none">Fabien Gonçalves Fonseca</a>
          </div>
    
        </footer>
        
    </footer>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/712f34a028.js" crossorigin="anonymous"></script>
  </body>
</html>