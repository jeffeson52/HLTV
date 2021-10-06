<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>

        <title>Laravel</title>
        
    </head>
    <body>
        <div>
        <nav class="navbar navbar-dark bg-dark justify-content-center">
                <ul class="nav">
                    <li class="nav-item" >
                        <a class="nav-link nav-bar" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-bar" href="#">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-bar" href="#">Ranking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-bar" href="#">Campeonatos</a>
                    </li>
                </ul>
        </nav>
        </div>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------->

<div class="container">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10"></br>
        <h1>Campeonatos</h1></br>
            <div class="card">
                <h5 class="card-header">Major</h5>
                <div class="card-body">
                    <h5 class="card-title">StarLadder Major 2021</h5>
                    <p class="card-text p2">Descrição</p>
                    <a href="#" class="btn btn-primary">Ver Mais</a>
                </div>
            </div></br>

            <div class="card">
                <h5 class="card-header">Blast Premier Fall</h5>
                <div class="card-body">
                    <h5 class="card-title">BLAST Premier Fall Showdown 2021</h5>
                    <p class="card-text p2">Descrição</p>
                    <a href="#" class="btn btn-primary">Ver Mais</a>
                </div>
            </div></br>

            <div class="card">
                <h5 class="card-header">Dreamhack</h5>
                <div class="card-body">
                    <h5 class="card-title">DreamHack Open November 2021 Closed Qualifier</h5>
                    <p class="card-text p2">Descrição</p>
                    <a href="#" class="btn btn-primary">Ver Mais</a>
                </div>
            </div>
    </div>
    <div class="col-sm-1"></div>
  </div>

    </body>
</html>

<!------------------------------------------------------------------------------------------------------------------------------------------------------>

<style type="text/css">
    body {
        background-color: #363636;
    }

    p {
        color: white;
        text-align: justify;
    }

    h1 {
        text-align:center; 
        color: white;
    }

    .nav-bar {
        color: white; 
        font-size:20px;
    }

    .p2{
        color: black;
    }


</style>