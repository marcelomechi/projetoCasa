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





/*****************************/

.gridDash{
  display: grid;
}


.gridDash-template-Desktop {
  grid-template:
    "estado contrato contrato tml tma abs nr he" 200px
    "valoresFaturamento valoresFaturamento valoresEntrantesAbandonadas semana semana mes mes semanaMes" 200px
    "graficoFaturamento graficoFaturamento graficoFaturamento graficoFaturamento graficoFaturamento graficoFaturamento graficoFaturamento graficosEntrantesAtendidasAbandonadas" 500px
    "graficoTML graficoTML graficoTML graficoTML graficoTML graficoTML graficoTML tabelaHoraExtra" 500px
    "graficoABS graficoABS graficoABS graficoABS graficoABS graficoABS graficoABS tabelaHoraExtra" 500px
    "graficoTMA graficoTMA graficoTMA graficoTMA graficoNR graficoNR graficoNR graficoNR" 500px
    / 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;


}

.estado {
  grid-area: estado;
}

.contrato{
  grid-area: contrato;
}

.tml{
  grid-area: tml;
}

.tma{
  grid-area: tma;
}

.abs{
  grid-area: abs
}

.nr{
  grid-area: nr;
}

.he{
  grid-area: he;
}

.valoresFaturamento{
  grid-area: valoresFaturamento;
}

.valoresEntrantesAbandonadas{
  grid-area: valoresEntrantesAbandonadas;
}

.semana{
  grid-area: semana;
}

.mes{
  grid-area: mes;
}

.semanaMes{
  grid-area: semanaMes;
}

.graficoFaturamento{
  grid-area: graficoFaturamento;
}

.graficosEntrantesAtendidasAbandonadas{
  grid-area: graficosEntrantesAtendidasAbandonadas;
}

.graficoTML{
  grid-area: graficoTML;
}

.tabelaHoraExtra{
  grid-area: tabelaHoraExtra;
}

.graficoABS{
  grid-area: graficoABS;
}

.graficoTMA{
  grid-area: graficoTMA;
}

.graficoNR{
  grid-area: graficoNR;
}



.item {
  margin: 5px;
  background: tomato;
  text-align: center;
  font-size: 1.5em;
}


#grafico {
    height: 100% !important;
    width: 100%;
}




@media only screen and (max-width : 767px) {
      header, main, footer {
        padding-left: 0;
      }

      .gridDash-template-Desktop {
          grid-template:
            "estado" 200px
            "contrato" 200px
            "tml" 200px
            "tma" 200px
            "abs" 200px
            "nr" 200px
            "he" 200px
            "valoresFaturamento" 200px
            "valoresEntrantesAbandonadas" 200px
            "semana" 200px
            "mes" 200px
            "semanaMes" 200px
            "graficoFaturamento" 600px
            "graficosEntrantesAtendidasAbandonadas" 500px
            "graficoTML" 500px
            "tabelaHoraExtra" 500px
            "graficoABS" 500px
            "graficoTMA" 500px
            "graficoNR" 500px
            / 1fr;


          }


}


</style>

     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
   <link rel="stylesheet" href="apexcharts-bundle/dist/apexcharts.css">
</head>
<body>
<nav class="red">
    <div class="nav-wrapper">
      <ul class="hide-on-med-and-down">
          <li>asdfasdfasdf</li>>
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


<div class="gridDash gridDash-template-Desktop">
  <div class="item estado">Estado</div>
  <div class="item contrato">Contrato</div>
  <div class="item tml">TML</div>
  <div class="item tma">TMA</div>
  <div class="item abs">ABS</div>
  <div class="item nr">NR</div>
  <div class="item he">HE</div>

  <div class="item valoresFaturamento">Valores</div>
  <div class="item valoresEntrantesAbandonadas">Valores Entrantes Abandonadas</div>
  <div class="item semana">Semana</div>
  <div class="item mes">Mes</div>
  <div class="item semanaMes">SemanaMes</div>

  <div class="item graficoFaturamento">Grafico Faturamento<div id="grafico"></div></div>
  <div class="item graficosEntrantesAtendidasAbandonadas">Grafico Entrantes Abandonadas</div>
  
  <div class="item graficoTML">Grafico TML</div>
  <div class="item tabelaHoraExtra">Tabela Hora Extra</div>
  <div class="item graficoABS">Grafico ABS</div>
  
  <div class="item graficoTMA">graficoTMA</div>
  <div class="item graficoNR">graficoNR</div>

</div>
</div>



<script src="js/jquery-3.4.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
   <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="chart.min.js"></script>
  <script type="text/javascript" src="apexcharts-bundle/dist/apexcharts.js"></script>
</body>
</html>

<script>
/*
// sempre colocar para funcionar as cores do grafico 
  window.chartColors = {
      red: 'rgb(255, 99, 132)',
      orange: 'rgb(255, 159, 64)',
      yellow: 'rgb(255, 205, 86)',
      green: 'rgb(75, 192, 192)',
      blue: 'rgb(54, 162, 235)',
      purple: 'rgb(153, 102, 255)',
      grey: 'rgb(201, 203, 207)'
    };


   
    
    var MONTHS = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    var color = Chart.helpers.color;
    var barChartData = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        label: 'Dados 1',
        backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
        borderColor: window.chartColors.blue,
        borderWidth: 1,
        data: [
         80,
          300,
          100,
          300,
          400,
          30,
          700
        ]
      }, {
        label: 'Dados 2',
        backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
        borderColor: window.chartColors.red,
        borderWidth: 1,
        data: [
          -90,
         -30,
          -22,
          -336,
          -1,
          900,
          1
        ]
      }]

    };

    window.onload = function() {
      var ctx = document.getElementById('grafico').getContext('2d');
      window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
          responsive: false,
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: 'Chart.js Bar Chart'
          }
        }
      });

    };


*/

/*
var options = {
  chart: {
    type: 'bar'
  },
  series: [{
    name: 'sales',
    data: [30,40,45,50,49,60,70,91,125]
  }],
  xaxis: {
    categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
  }
}

var chart = new ApexCharts(document.querySelector("#grafico"), options);

chart.render();
    
  */



























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
