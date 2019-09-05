<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">



	
/* O menu da barra lateral */
.sidebar {
  height: 100%; /* 100% altura */
  width: 50px !important; /* 0 largura - altere isso com JavaScript */
  position: fixed; /* Fique no lugar */
  z-index: 1; /* Fique no topo */
  top: 0;
  left: 0;
  /*background-color: #111; /* Black*/
  overflow-x: hidden; /* Desativar rolagem horizontal */
  padding-top: 60px; /* Coloque o conteúdo de 60px a partir do topo */
  transition: 0.5s; /* Efeito de transição de 0,5 segundo para deslizar na barra lateral */
}


#mySidebar{
  width: 50px;
}

/* Os links da barra lateral 
.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}*/

/* Quando você passa o mouse sobre os links de navegação, muda sua cor */
.sidebar a:hover {
 /* color: #f1f1f1;*/
}

/* Aprenda a pronunciar
Posicione e estilize o botão Fechar (canto superior direito) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* O botão usado para abrir a barra lateral */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  /*background-color: #444;*/
}

/* Conteúdo da página de estilo - use isso se você quiser enviar o conteúdo da página para a direita quando abrir a navegação lateral */
#main {
  transition: margin-left .5s; /* Se você quiser um efeito de transição */
  padding: 20px;
  margin-left: 50px;
}

/* Em telas menores, nas quais a altura é menor que 450 px, altere o estilo do sidenav (menos preenchimento e um tamanho de fonte menor) 
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
*/

  header, main, footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }

</style>

     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body>
<nav>
    <div class="nav-wrapper indigo">
    <div id="main" data-activates="sidebar" class="button-collapse container left"><i class="material-icons white-text">menu</i></div>
      <ul class="right hide-on-med-and-down">
        <li><a href="#"><i class="material-icons">notifications_none</i></a></li>        
      </ul>
    </div>
  </nav>
  
              
<div id="sidebar" class="side-nav">    
            <div class="user-view">
              <div class="background">
                
              </div>
              <a href="#!user"></a>
              <a href="#!name"><span class="white-text name">Marcelo Mechi</span></a>
              <a href="#!email"><span class="white-text email">marcelo.goncalves@brbpo.com.br</span></a>
            </div>

      <ul class="collapsible">
        <li>
            <a class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Point</a>
            <div class="collapsible-body">
                      <ul>
                        <li><a href="#!">Apontamentos</a></li>
                        <li><a href="#!">Gerencial</a></li>
                            <ul class="collapsible">
                                <li>
                                <a class="collapsible-header">Menu com submenu</a>
                                <div class="collapsible-body">
                                    <ul>
                                    <li><a href="#!">asdf</a></li>
                                    <li><a href="#!">asdf</a></li>
                                    <li><a href="#!">asdf</a></li>
                                    </ul>
                                </div>
                                </li>
                            </ul>
                            <li><a href="#!">Teste</a></li>
                      </ul>
              </div>
        </li>
        <li>
              <a class="collapsible-header">Quadro<i class="material-icons">arrow_drop_down</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#!">Gerenciar</a></li>
                  <li><a href="#!">Dados Funcionários</a></li>
                  <li><a href="#!">Parametrizar</a></li>
                </ul>
              </div>
        </li>
        <li>
        <a class="collapsible-header"><i class="material-icons">arrow_drop_down</i>Demandas</a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#!">Atendimento</a></li>
              <li><a href="#!">Nova Demanda</a></li>
              <li><a href="#!">Minhas Demandas</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a class="collapsible-header">Planejamento<i class="material-icons">arrow_drop_down</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#!">Faturamento</a></li>
              <li><a href="#!">Dimensionamento</a></li>
              <li><a href="#!">Escala de Pausa</a></li>
            </ul>
          </div>
        </li>
      </ul>
</div> 




<div class="row" id="graficosxxx">
      <div class="col s12 m12 l4">
          <div class="card hoverables center-align">
            <div class="card-content">
              <span class="card-title">PMSP</span>
                <div>
                    <canvas id="grafico"></canvas>
                </div>
            </div>
            <div class="card-action">
              <a href="#">Relatório</a>
              <a href="#">Relatório</a>
            </div>
          </div>
     </div>
    <div class="col s12 m12 l4">
          <div class="card hoverables center-align">
            <div class="card-content">
              <span class="card-title">DEFENSORIA</span>
                <div>
                    <canvas id="grafico1"></canvas>
                </div>
            </div>
            <div class="card-action">
              <a href="#">Relatório</a>
              <a href="#">Relatório</a>
            </div>
          </div>
     </div>
     <div class="col s12 m12 l4">
          <div class="card hoverables center-align">
            <div class="card-content">
              <span class="card-title">CDHU</span>
                <div>
                    <canvas id="grafico2"></canvas>
                </div>
            </div>
            <div class="card-action">
              <a href="#">Relatório</a>
              <a href="#">Relatório</a>
            </div>
          </div>
     </div>






    </div>


</div>

<div class="row red">
  <div class="col s12">      
        <a id="menu" class="waves-effect waves-light btn btn-floating right" ><i class="material-icons">menu</i></a>
        <div class="tap-target blue" data-activates="menu">
          <div class="tap-target-content">
            <h5>Bem vindo ao Workforce Menagement!</h5>
            <p>Uma das novas funcioanlidades é a personalização, acesse e veja!</p>
          </div>
        </div>       
    </div>
</div>

<script src="js/jquery-3.4.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
   <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="chart.min.js"></script>
</body>
</html>

<script>




// grafico pizza //

window.chartColors = {
      red: 'rgb(255, 99, 132)',
      orange: 'rgb(255, 159, 64)',
      yellow: 'rgb(255, 205, 86)',
      green: 'rgb(75, 192, 192)',
      blue: 'rgb(54, 162, 235)',
      purple: 'rgb(153, 102, 255)',
      grey: 'rgb(201, 203, 207)'
    };


    var randomScalingFactor = function() {
      return Math.round(Math.random() * 100);
    };

    var config = {
      type: 'pie',
      data: {
        datasets: [{
          data: [
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
          ],
          backgroundColor: [
            window.chartColors.red,
            window.chartColors.orange,
            window.chartColors.green,
            window.chartColors.grey,
            window.chartColors.purple,
          ],
          label: 'Dataset 1'
        }],
        labels: [
          'Red',
          'Orange',
          'Yellow',
          'Green',
          'Blue'
        ]
      },
      options: {
        responsive: true
      }
    };






// graficos linha //

      var contexto = document.getElementById("grafico1").getContext("2d");

      var grafico = new Chart(contexto, {
        type:'line',
        data: {
            labels: ['janeiro','fevereiro','março','abril','Maio'],
            datasets: [{ 
                label:'Vendas',
                backgroundColor:'#FF0000',
                borderColor: '#FF0000',
                data: [1,2,3,4], // faço um implode separando por , para ficar no padrão do data eu consigo misturar o php com javascrip de forma muito simples, bem mais que o asp, por exemplo sem necessidade de ficar criando ajax ?>],      

                fill: false
              },     { 
                  label: 'Custos',
                  backgroundColor: '#00FF00',
                  borderColor: '#00FF00',
                  data: [
                   30,
                   5,
                   8,
                   10,
                   22
                  ],
                  fill: false
              }]
          },
      options: {
        responsive: true
      }

      });



    function createConfig(pointStyle) {
      return {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
          datasets: [{
            label: 'My First dataset',
            backgroundColor: window.chartColors.red,
            borderColor: window.chartColors.red,
            data: [10, 23, 5, 99, 67, 43, 0],
            fill: false,
            pointRadius: 10,
            pointHoverRadius: 15,
            showLine: false // no line shown
          }]
        },
        options: {
          responsive: true,
          title: {
            display: true,
            text: 'Point Style: ' + pointStyle
          },
          legend: {
            display: false
          },
          elements: {
            point: {
              pointStyle: 'circle'
            }
          }
        }
      };
    }

    function carrega() {
      var container = document.querySelector('.container');
      [
        'circle',
        'triangle',
        'rect',
        'rectRounded',
        'rectRot',
        'cross',
        'crossRot',
        'star',
        'line',
        'dash'
      ].forEach(function(pointStyle) {
        
        var ctx1 = document.getElementById('grafico2').getContext('2d');
        var config = createConfig(pointStyle);
        new Chart(ctx1, config);
      });
    };
  



    window.onload = function() {
      var ctx = document.getElementById('grafico').getContext('2d');
      window.myPie = new Chart(ctx, config);
      var contexto = document.getElementById("grafico1").getContext("2d");
      carrega();
    };
     
   
  




























$(document).ready(function(){
 $('.collapsible').collapsible();
 $('.tap-target').tapTarget('open');
 
  /* inicia a sidenav */
   $(".button-collapse").sideNav({
    onOpen: function(){
      document.getElementById("main").style.marginLeft = "310px";
      document.getElementById("main").style.transition = "0.1s";
      document.getElementById("graficosxxx").style.marginLeft = "310px";
      document.getElementById("graficosxxx").style.transition = "0.1s";
    },
    onClose: function(){
      document.getElementById("main").style.marginLeft = "auto";
      document.getElementById("main").style.transition = "0.1s";
      document.getElementById("graficosxxx").style.marginLeft = "auto";
      document.getElementById("graficosxxx").style.transition = "0.1s";      
    }
   });
  })
function openNav() {
  //document.getElementById("mySidebar").style.width = "250px";
  //document.getElementById("mySidebar").style.transition = "1s";
  document.getElementById("main").style.marginLeft = "310px";
  document.getElementById("main").style.transition = "0.1s";
  //collapseAll()
}
/* Defina a largura da barra lateral como 0 e a margem esquerda do conteúdo da página como 0 */
function closeNav() {
 // document.getElementById("mySidebar").style.width = "50px";
  //document.getElementById("mySidebar").style.transition = "1s";
  document.getElementById("main").style.marginLeft = "0px";
  document.getElementById("main").style.transition = "0.2s";
 // collapseAll()
}


	</script>