<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
       <title>Application</title>

       
    </head>
    <body>
        <div id="app" class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link active">Create CPAT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Tech Items</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Descriptions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Model</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Manufactures</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Locations</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Categories</a>
                  </li>
                </ul>
                
              </div>
            </nav>


            <hr>
            <router-view></router-view>
        </div>
    </body>

    <script type="text/javascript" src="/js/app.js"></script>
</html>
