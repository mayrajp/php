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
        <h3>Lord of Rings - Battle Royale- Escolha de Armas</h3>
      </nav>

      <div class="container">
            <div class="row">
            	    <div class="col-md-6 offset-md-3">
                    <div class="card" style="margin:50px 0">
                      <div class="card-header">Escolha uma arma para cada personagem:</div>
                        <form  action="/menu/inimigos" method="post">
                          {{ csrf_field() }}
                          <?php foreach (array_combine($personagens, $pontosPersonagens) as $personagem => $ponto): ?>
                            <h5 style="margin-left: 50px">{{$personagem}} lutará com:  </h5>
                            <input type="hidden" name="personagens[]" value="{{$personagem}}">
                            <input type="hidden" name="pontos[]" value="{{$ponto}}">
                            <select style="width: 400px; margin-left: 50px" class="form-control" name="armaSelecionada[]">
                              <?php if ($personagem == 'Frodo'): ?>
                                  <option name="armaSelecionada[]" value="300">Um Anel</option>
                              <?php endif; ?>
                              <?php if ($personagem == 'Sam'): ?>
                                  <option name="armaSelecionada[]" value="7">Espada Curta</option>
                                  <option name="armaSelecionada[]" value="8">Espada curta Mágica</option>
                              <?php endif; ?>
                              <?php if ($personagem == 'Merry'): ?>
                                  <option name="armaSelecionada[]" value="7">Espada Curta</option>
                                  <option name="armaSelecionada[]" value="8">Espada curta Mágica</option>
                              <?php endif; ?>
                              <?php if ($personagem == 'Pippin'): ?>
                                  <option name="armaSelecionada[]" value="7">Espada Curta</option>
                                  <option name="armaSelecionada[]" value="8">Espada curta Mágica</option>
                              <?php endif; ?>
                              <?php if ($personagem == 'Aragorn'): ?>
                                  <option name="armaSelecionada[]" value="7">Espada Curta</option>
                                  <option name="armaSelecionada[]" value="8">Espada curta Mágica</option>
                                  <option name="armaSelecionada[]" value="7">Espada Longa</option>
                                  <option name="armaSelecionada[]" value="7">Arco Curto</option>
                                  <option name="armaSelecionada[]" value="9">Machado</option>
                                  <option name="armaSelecionada[]" value="50">Chamar Arwen</option>
                              <?php endif; ?>
                              <?php if ($personagem == 'Boromir'): ?>
                                <option name="armaSelecionada[]" value="7">Espada Curta</option>
                                <option name="armaSelecionada[]" value="8">Espada curta Mágica</option>
                                <option name="armaSelecionada[]" value="7">Espada Longa</option>
                                <option name="armaSelecionada[]" value="7">Arco Curto</option>
                                <option name="armaSelecionada[]" value="9">Machado</option>
                                <option name="armaSelecionada[]" value="10">Machado Duplo</option>
                              <?php endif; ?>
                              <?php if ($personagem == 'Legolas'): ?>
                                <option name="armaSelecionada[]" value="7">Espada Curta</option>
                                <option name="armaSelecionada[]" value="8">Espada curta Mágica</option>
                                <option name="armaSelecionada[]" value="7">Espada Longa</option>
                                <option name="armaSelecionada[]" value="7">Arco Curto</option>
                                <option name="armaSelecionada[]" value="11">Arco Longo</option>
                                <option name="armaSelecionada[]" value="9">Machado</option>
                              <?php endif; ?>
                              <?php if ($personagem == 'Gimli'): ?>
                                <option name="armaSelecionada[]" value="7">Espada Curta</option>
                                <option name="armaSelecionada[]" value="8">Espada curta Mágica</option>
                                <option name="armaSelecionada[]" value="7">Espada Longa</option>
                                <option name="armaSelecionada[]" value="10">Machado Duplo</option>
                                <option name="armaSelecionada[]" value="9">Machado</option>
                              <?php endif; ?>
                              <?php if ($personagem == 'Gandalf'): ?>
                                <option name="armaSelecionada[]" value="7">Espada Curta</option>
                                <option name="armaSelecionada[]" value="8">Espada curta Mágica</option>
                                <option name="armaSelecionada[]" value="7">Arco Curto</option>
                                <option name="armaSelecionada[]" value="11">Cajado</option>
                              <?php endif; ?>
                            </select></br>
                          <?php endforeach; ?>
                          <button style="margin-left: 150px" class="btn btn-danger">Ir para o campo de batalha</button>
                        </form>
        </div>
      </div>

  </div>
</div>
  </body>
</html>
