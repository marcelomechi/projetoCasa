<!DOCTYPE html>
<html>
<head>

<style>

#img{
  height: 20px;
}

#main{
  width: 50px !important;
}

.w20{
  width: 20px !important;
  align: center !important;
  margin: 0 !important;
  padding: 0 !important;
}

.h{
  height: 110px !important;
  border-radius: 50% !important;
}

.h10{
  height: 30px !important;
  border-radius: 50% !important;
}

.item-linha-1{
  min-height: 200px !important;
}

.item-linha-2{
  min-height: 600px !important;
}


.w100{
  width: 100% !important;
}

#example_wrapper{
  width: 100% !important;
}


.asdffdas{
  height: 110px !important;
  width: 110px !important;
}

.heigh500{
  height: 500px !important;
}


</style>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
    

    <link rel="stylesheet" href="assets/js/jquery-ui-1.12.1/jquery-ui.min.css">
    <link href="assets/css/fontA/css/fontawesome.css" rel="stylesheet">
    <link href="assets/css/fontA/css/brands.css" rel="stylesheet">
    <link href="assets/css/fontA/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
      <!-- Corrige o erro 500 -->
    <link rel="icon" href="data:,">
</head>
<body>
  <nav>
    <div class="row">
      <div class="nav-wrapper indigo col s12 m12 l12">

        <div id="main" data-target="sidebar" class="sidenav-trigger"><i class="material-icons white-text"><i class="fas fa-bars"></i></i></div>
          <ul class="right">                   
            <li><a href="#"><i class="material-icons center-align"><img id="profile" class="responsive-img h10" src="assets/images/marcelo.jpg"></i></a></li>      
            <li><a href="#"><i class="fas fa-bell"></i></a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
              
  <div id="sidebar" class="sidenav">    
              <div class="user-view">
                <div class="background">
                  <img src="assets/images/computador.jpg">
                </div>
                
                  <a href="#!user"><img id="profile" class="responsive-img h" src="assets/images/marcelo.jpg"></a>

                <a href="#!name"><span class="white-text name">Marcelo Mechi</span></a>
                <a href="#!email"><span class="white-text email">marcelo.goncalves@brbpo.com.br</span></a>
              </div>

        <ul class="collapsible">
          <li>
              <a class="collapsible-header"><i class="material icons"><img id="img" class="circle" src="assets/images/trabalho-em-equipe.png"></i><i class="material icons small right"><i class="fas fa-angle-down"></i></i>DH</a>
              <div class="collapsible-body">
                        <ul>
                          <li><a href="#!">Avaliações</a></li>
                          <li><a href="#!">Banco de Curriculum</a></li>
                              <ul class="collapsible">
                                  <li>
                                  <a class="collapsible-header"><i class="material icons small right"><i class="fas fa-angle-down"></i></i>Relatórios</a>
                                  <div class="collapsible-body">
                                      <ul>
                                      <li><a href="#!">Desempenho</a></li>
                                      </ul>
                                  </div>
                                  </li>
                              </ul>
                              <li><a href="#!">Quadro de Funcionários</a></li>
                        </ul>
                </div>
          </li>
          <li>
                <a class="collapsible-header"><i class="material icons"><img id="img" class="circle" src="assets/images/inteligencia.png"></i>Planejamento<i class="material icons small right"><i class="fas fa-angle-down"></i></i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="#!">Dimensionamento</a></li>
                    <li><a href="#!">Atendimento de Demandas</a></li>
                  </ul>
                </div>
          </li>
          <li>
          <a class="collapsible-header"><i class="material icons"><img id="img" class="circle" src="assets/images/hospital.png"></i><i class="material icons small right"><i class="fas fa-angle-down"></i></i>Sesmt</a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">Atestados</a></li>
              </ul>
            </div>
          </li>

        </ul>
</div>   


<div style="margin: 10px auto;">

<div class="row">
    <div class="col s12 m6 l12 center-align">
        <img id="img-upload" src="assets/images/marcelo.jpg" class="circle responsive-img asdffdas">    
    </div>
    <div class="col s12 m6 l12 center-align">
      <h5>Marcelo Mechi</h5>
    </div>
    <div class="col s12 center-align">
      <h6>Analista de Tráfego - M.I.S.</h6>
    </div>
    <div class="col s12 center-align">
      <h6>Membro desde 2013</h6>
    </div> 
    <div class="col s12 center-align">
      <h5><h6>Administrador</h6></h5>
    </div>    
</div>



<div class="row">
  <div class="col s12 m12 l6">
    <div class="card heigh500">
      <div class="card-content teal white-text">
        <h5 class="card-title center-align">Dados de Acesso</h5>        
      </div>
      <div class="card-action">      
              <div class="input-field">
                <input id="mail" type="email" class="validate">
                <label for="mail">E-Mail</label>
              </div>
              <div class="input-field">
                <input id="senha" type="password" class="validate">
                <label for="senha">Senha Atual</label>
              </div> 
              <div class="input-field">
                <input id="senha" type="password" class="validate">
                <label for="senha">Nova Senha</label>
              </div>
              <div class="right-align">
                <button class="btn waves-effect">Gravar</button>
              </div>                  
     
      </div>


    </div>

  </div>
    <div class="col s12 m12 l6">
    <div class="card heigh500">
      <div class="card-content teal white-text">
        <h5 class="card-title center-align">Personalizar</h5>        
      </div>
      <div class="card-action">  
             <div class="input-field"><br>
              <label for="tema">Tema Escuro</label>
                 <div id="tema" class="switch"><br>
                    <label class="center-align">
                      <input type="checkbox">
                      Desligado<span class="lever"></span>Ligado
                    </label>
                 </div>                
             </div>  
             <div class="input-field"><br>
              <label for="tema">Exibir Aniversário?</label>
                 <div id="tema" class="switch"><br>
                    <label class="center-align">
                      <input type="checkbox">
                      Não<span class="lever"></span>Sim
                    </label>
                 </div>                
             </div>   
             <div class="input-field">
                <input id="apelido" type="text" class="validate">
                <label for="apelido">Como gostaria de ser chamado?</label>
              </div>      
  
              <form action="#">
                  <div class="file-field input-field">
                    <div class="btn">
                      <span>Editar foto do perfil <i class="fas fa-camera"></i></span>
                      <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Selecione uma foto...">
                    </div>
                  </div>
              </form>
              <div class="right-align">
                <button class="btn waves-effect">Gravar</button>
              </div>  

     
      </div>


    </div>

  </div>
</div>
</div>

dica de criar dark mode
https://www.guj.com.br/t/mudar-estilo-da-pagina-com-javascript/335981/2

    
<script src="assets/js/jquery-3.4.1.js"></script>
<script src="assets/js/jquery-ui-1.12.1/jquery-ui.js"></script>
<script src="assets/css/fontA/js/brands.js"></script>
<script src="assets/css/fontA/js/solid.js"></script>
<script src="assets/css/fontA/js/fontawesome.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<script src="assets/js/Chart.min.js"></script>


</body>
</html>

<script>
/* Definir a largura da barra lateral para 250px e a margem esquerda do conteúdo da página para 250px */

$(document).ready(function(){
 $('.collapsible').collapsible();
 $('.tap-target').tapTarget('open');
 
  /* inicia a sidenav */
   $(".sidenav").sidenav();



   // altera foto do perfil
    $(".btn").change(function(){
      $("#img-upload").attr('src',URL.createObjectURL(event.target.files[0]))
    });
  // altera fundo de tela
   
});

	</script>