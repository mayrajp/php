<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div >
      <nav class="navbar navbar-light bg-light">
        <h3>Lord of Rings - Battle Royale - Resultado da Batalha</h3>
      </nav>
      <div class="container">
            <div class="row">
                  <div class="col-md-12 offset-md">
                    <div class="card" style="margin:50px 0">
                      <div class="card-header">Resultado:</div>
                  <h1>{{$r}}</h1>
                  <a style="margim-top: 50px" class="btn btn-light" href="{{ url ('/menu') }}" >Jogar Novamente</a>
                </div>
            </div>
          </div>
      </div>
    </div>
    </div>
  </body>
</html>
