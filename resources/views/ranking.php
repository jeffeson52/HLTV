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
        <h1>Ranking</h1></br>
    
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Colocação</th>
                <th scope="col">Time</th>
                <th scope="col">Jogadores</th>
                
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                    <td>Team Liquid</td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/BVGgD5hJMifm1iVGXFwbws.png?ixlib=java-2.1.0&w=400&s=2963f9e90b71342b6b00f401c7c4acff" class="imagemRank"></td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/BVGgD5hJMifm1iVGXFwbws.png?ixlib=java-2.1.0&w=400&s=2963f9e90b71342b6b00f401c7c4acff" class="imagemRank"></td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/BVGgD5hJMifm1iVGXFwbws.png?ixlib=java-2.1.0&w=400&s=2963f9e90b71342b6b00f401c7c4acff" class="imagemRank"></td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/BVGgD5hJMifm1iVGXFwbws.png?ixlib=java-2.1.0&w=400&s=2963f9e90b71342b6b00f401c7c4acff" class="imagemRank"></td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/BVGgD5hJMifm1iVGXFwbws.png?ixlib=java-2.1.0&w=400&s=2963f9e90b71342b6b00f401c7c4acff" class="imagemRank"></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                    <td>Natus Vincere</td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/RGemStZHTfFk8AAjkJrbTR.png?ixlib=java-2.1.0&w=400&s=59b0a61f6f217bc6c1dd54bd4e0aa837" class="imagemRank"></td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/RGemStZHTfFk8AAjkJrbTR.png?ixlib=java-2.1.0&w=400&s=59b0a61f6f217bc6c1dd54bd4e0aa837" class="imagemRank"></td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/RGemStZHTfFk8AAjkJrbTR.png?ixlib=java-2.1.0&w=400&s=59b0a61f6f217bc6c1dd54bd4e0aa837" class="imagemRank"></td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/RGemStZHTfFk8AAjkJrbTR.png?ixlib=java-2.1.0&w=400&s=59b0a61f6f217bc6c1dd54bd4e0aa837" class="imagemRank"></td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/RGemStZHTfFk8AAjkJrbTR.png?ixlib=java-2.1.0&w=400&s=59b0a61f6f217bc6c1dd54bd4e0aa837" class="imagemRank"></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                    <td>Gambit</td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/nfk2J6cJ_0Fq1tjerx_u_4.png?ixlib=java-2.1.0&w=400&s=c6071374cfeb9361d04bbd36ffa484bf" class="imagemRank"></td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/nfk2J6cJ_0Fq1tjerx_u_4.png?ixlib=java-2.1.0&w=400&s=c6071374cfeb9361d04bbd36ffa484bf" class="imagemRank"></td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/nfk2J6cJ_0Fq1tjerx_u_4.png?ixlib=java-2.1.0&w=400&s=c6071374cfeb9361d04bbd36ffa484bf" class="imagemRank"></td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/nfk2J6cJ_0Fq1tjerx_u_4.png?ixlib=java-2.1.0&w=400&s=c6071374cfeb9361d04bbd36ffa484bf" class="imagemRank"></td>
                    <td><img src="https://img-cdn.hltv.org/playerbodyshot/nfk2J6cJ_0Fq1tjerx_u_4.png?ixlib=java-2.1.0&w=400&s=c6071374cfeb9361d04bbd36ffa484bf" class="imagemRank"></td>
                </tr>
            </tbody>
            </table>

    </div>
    <div class="col-sm-1"></div>
  </div>

    </body>
</html>

<!------------------------------------------------------------------------------------------------------------------------------------------------------>

<style type="text/css">
    body {
        background-image: url("https://1.bp.blogspot.com/-GDb1dVVt_cg/YOtCLMshoeI/AAAAAAABDds/o0fl8_fOM0YcM-hbOAtSEhuD_xKZwWtGwCLcBGAsYHQ/s1920/csgo_13-wallpaper-1920x1080.jpg");
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

    tr {
        text-align: center;
        color: white;
    }

    .imagemRank {
        width: 40px;
        height: 40px;
    }
</style>