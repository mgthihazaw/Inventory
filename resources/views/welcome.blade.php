<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
       <title>Application</title>

       
    </head>
    <body>
        <div id="app" class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav">
                  <li class="nav-item">
                    <router-link class="nav-link active" to="/products/create">Create CPAT</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/products">Tech Items</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/descriptions">Descriptions</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/brands">Model</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/manufactures">Manufactures</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/locations">Locations</router-link>
                  </li>
                  <li class="nav-item" >
                    <router-link class="nav-link" to="/categories">Categories</router-link>
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
