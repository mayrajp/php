<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div>
      <nav class="navbar navbar-light bg-light">
        <h3>Lord of Rings - Battle Royale - Campo de Batalha</h3>
      </nav>
      <div class="container">
            <div class="row">
                  <div class="col-md-12 offset-md">
                    <div class="card" style="margin:50px 0">
                      <div class="card-header">Inimigos que surgiram no campo de batalha:</div>
      <form class="col-lg-12" action="/menu/batalha" method="post">
      <div class="row">
        {{ csrf_field() }}
        <div style="margim-left:100px" class="col-lg-6">
          <h3>Seus personagens:</h3>
         <?php foreach ($personagens as $i => $personagem): ?>
           <h5>{{$personagem}} - Total de Poder: {{$armasPersonagem[$i] + $pontosPersonagens[$i]}} </h5>
           <input type="hidden" name="pontosPersonagem[]" value="{{$armasPersonagem[$i] + $pontosPersonagens[$i]}}">
         <?php endforeach; ?>
       </div>
       <div class="col-lg-6">
         <h3>Inimigos que surgiram:</h3>
         <?php foreach ($inimigos  as $i => $inimigo): ?>
           <?php if ($inimigo->nome == "Olho de Sauron"): ?>
              <h5>{{$inimigo->nome}} - Total de poder : {{$inimigo->poder}}</h5>
              <input type="hidden" name="pontosInimigo[]" value="{{$inimigo->poder}}">
           <?php else: ?>
              <h5>{{$inimigo->nome}} - {{$armasInimigas[$i]->nome}} - Total de poder : {{$armasInimigas[$i]->poder + $inimigo->poder}}</h5>
              <input type="hidden" name="pontosInimigo[]" value="{{$armasInimigas[$i]->poder + $inimigo->poder}}">
           <?php endif; ?>

         <?php endforeach; ?>
      </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div style="margin-top: 20px; margin-left: 300px" class="btn-group" role="group" aria-label="Basic example">
      <a style="margim-top: 50px" class="btn btn-secondary" href="{{ url ('/menu') }}" > Não ir para essa batalha</a>
      <button class="btn btn-success">Marchar contra Sauron!</button>
    </div>
   </div>
  </div>
</form>
</div>

  </div>
</div>
</div>
  </body>
</html>
