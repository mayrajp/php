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
        <h3>Lord of Rings - Battle Royale - Escolha de Personagens</h3>
      </nav>
      <div style="margin-left: 600px; margin-top: 100px" class="row">
      <form class="form-inline" action="/menu/armas" method="post">
        {{ csrf_field() }}
        <?php foreach (array_combine($personagens, $somaHabilidades) as $personagem => $habilidade): ?>
          <div class="col-lg-12">
            <input type="checkbox"  onclick="habilitaCheckbox(this, this.value)" class="form-check-input" name="personagemSelecionado[]" value="{{$personagem}}"/>{{$personagem}}
            <input type="checkbox" id="{{$personagem}}" class="checkboxEscondido" name="ponto[]" style="display:none"   value="{{$habilidade}}"  />
          </div>
       <?php endforeach; ?>
       <div class="col-lg-12">
          <button id="botaoProsseguir" style="display:none; margin-bottom : 10px" class="btn btn-success">Pode Prosseguir</button>
       </div>
      </form>
      <div class="col-lg-12">
      <button class="btn btn-warning" id="verifica" onclick="verificarTropa()">Verificar Tropa</button></br>
    </div>
  </div>
  </div>
  <script type="text/javascript">
  //verifica quantidade de tropas escolhidas
  function verificarTropa(){
    let contador = 0;
    var check = document.getElementsByClassName('form-check-input')
    for (var i = 0; i < check.length; i++) {
      if(check[i].checked == true){
       contador++;
      }
    }
    if (contador < 5){
      alert("É preciso escolher pelo menos 5 personagens.")
    } else if (contador > 5){
        alert("Não se pode escolher mais de 5 personagens.")
    } else if (contador == 5){
      for (var i = 0; i < check.length; i++) {
        if(check[i].checked){
          if(check[i].value == 'Frodo' || check[i].value == 'Sam' || check[i].value == 'Merry' || check[i].value == 'Pippin' ){
             document.querySelector('#botaoProsseguir').style.display = "block"
             document.querySelector('#verifica').style.display = "none"
             break;
          }else {
            alert("É preciso escolher ao menos um Hobbit.")
            break;
          }
        }
    }
  }
}
  //funcao para habilitar e desabilitar pontos de acrodo
  //com personagem escolhido
  function habilitaCheckbox(checkbox, nome){
   var lista = document.getElementsByClassName("checkboxEscondido");
   var i;
   for (i = 0; i < lista.length; i++) {
     if(lista[i].id === nome){
       if(checkbox.checked == true){
         lista[i].checked = true;
       } else if (checkbox.checked == false) {
         lista[i].checked = false;
       }
     }
   }
  }
  </script>
  </body>
</html>
