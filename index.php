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


<div class="row">
     <div class="col s12 m6 l2">
         
       <div class="valign-wrapper item-linha-1">
           <div class="input-field w100">
                      <select multiple>
                        <option value="999">Todos</option>
                        <option value="1">Brasília</option>
                        <option value="2">São Paulo</option>
                      </select>
                    <label>Selecione a Filial</label>
                </div>
       </div>

          
    </div>
    <div class="col s12 m6 l2">
            <div class="valign-wrapper item-linha-1">
           <div class="input-field w100">
                      <select multiple>
                        <option value="999">Todos</option>
                        <option value="1">PMSP</option>
                        <option value="2">MEC</option>
                      </select>
                    <label>Selecione o Contrato</label>
                </div>
       </div>
    </div>
   <div class="col s6 m4 l1">
     <div class="valign-wrapper item-linha-1">
          <span class="text-darken-4">TML</span>              
            <span>05:59:59</span>
    </div>
    </div>
       <div class="col s6 m4 l1">
   
       <div class="valign-wrapper item-linha-1">
        <span>TMA</span>              
            <span>00:02:35</span>
      </div>
     </div>

   <div class="col s6 m4 l2 item-linha-1">
       <div class="valign-wrapper item-linha-1">
        <span>Absenteísmo</span>              
            <span>3,31%</span>
      </div>
  </div>
       <div class="col s6 m6 l2">
       <div class="valign-wrapper item-linha-1">
        <span>NR-17 + WC</span>              
            <span>00:53:00</span>
      </div>
    </div>
           <div class="col s12 m6 l2">

       <div class="valign-wrapper item-linha-1">
        <span>Hora Extra</span>              
            <span>9848:43:28</span>
      </div>
    </div>
</div>

<div class="row">
  <div class="col s12 m6 l3">
  <div class="valign-wrapper item-linha-1">
    <ul class="collection w100">
      <li class="collection-item">Valor Projetado<span class="secondary-content black-text">R$ xxx</span></li>
      <li class="collection-item">Valor Faturado <span class="secondary-content black-text">R$ xxx</span></li>
      <li class="collection-item">Desvio <span class="secondary-content black-text">R$ xxx</span></li>
    </ul>
  </div>
  </div>

  <div class="col s12 m6 l3">
  <div class="valign-wrapper item-linha-1">
    <ul class="collection w100">
      <li class="collection-item">Entrantes<span class="secondary-content black-text">10.520</span></li>
      <li class="collection-item">Atendidas<span class="secondary-content black-text">10.480</span></li>
      <li class="collection-item">Abandonadas<span class="secondary-content black-text">400</span></li>
    </ul>
  </div>
  </div>

    <div class="col s6 m6 l3">
       <div class="valign-wrapper item-linha-1">
           <div class="input-field w100">
                      <select multiple>
                        <option value="999">Todos</option>
                        <option value="1">Domingo</option>
                        <option value="2">Segunda-Feira</option>
                        <option value="2">Terça-Feira</option>
                        <option value="2">Quarta-Feira</option>
                        <option value="2">Quinta-Feira</option>
                        <option value="2">Sexta-Feira</option>
                        <option value="2">Sábado</option>
                      </select>
                    <label>Dia da Semana</label>
                </div>
       </div>
  </div>

      <div class="col s6 m6 l3">
       <div class="valign-wrapper item-linha-1">
           <div class="input-field w100">
                      <select multiple>
                        <option value="999">Todos</option>
                        <option value="1">1º Semana de Setembro</option>
                        <option value="2">2º Semana de Setembro</option>
                        <option value="2">3º Semana de Setembro</option>
                        <option value="2">4º Semana de Setembro</option>
                        <option value="2">5º Semana de Setembro</option>
                      </select>
                    <label>Semana Mês</label>
                </div>
       </div>
  </div>
</div>











<div class="row">
  <div class="col s12 m12 l7"> 
      <div class="valign-wrapper item-linha-2">
        <canvas class="item-linha-2" id="faturamento"></canvas>
      </div>
  </div>
  <div class="col s12 m12 l5 item">
    <div class="valign-wrapper item-linha-2">
      <canvas id="entrantesAbandonadas"></canvas>
    </div>
  </div>
</div>





<div class="row">
  <div class="col s12 m12 l7">
    <div class="valign-wrapper item-linha-2">
      <canvas class="item-linha-2" id="tml"></canvas>
    </div>
  </div>


  <div class="col s12 m12 l5">
    <div class="valign-wrapper item-linha-2">

      <table id="example" class="mdl-data-table">
        <thead>
            <tr>
                <th class="center-align">Contrato</th>
                <th class="center-align">Total</th>
                <th class="center-align">Representatividade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="center-align">PMSP</td>
                <td class="center-align">308:53:00</td>
                <td class="center-align">19,26%</td>
            </tr>
            <tr>
                <td class="center-align">MEC</td>
                <td class="center-align">300:11:00</td>
                <td class="center-align">31,18%</td>
            </tr>
            <tr>
                <td class="center-align">MTE</td>
                <td class="center-align">200:11:00</td>
                <td class="center-align">16,25%</td>
            </tr>
            <tr>
                <td class="center-align">SOCICAM</td>
                <td class="center-align">45:11:00</td>
                <td class="center-align">28,15%</td>
            </tr>
            <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
                        <tr>
                <td class="center-align">DEFENSORIA</td>
                <td class="center-align">150:47:33</td>
                <td class="center-align">46,25%</td>
            </tr>
           
        </tbody>
        <tfoot>
            <tr>
                <th class="center-align">Contrato</th>
                <th class="center-align">Total</th>
                <th class="center-align">Representatividade</th>
            </tr>
        </tfoot>
    </table>

    </div>

  </div>


  <div class="row">
  <div class="col s12 m12 l12 item-linha-2">
    <div class="valign-wrapper item-linha-2">
      <canvas class="item-linha-2" id="abs"></canvas>
    </div>
  </div>
    <div class="row">
  <div class="col s12 m12 l6 item-linha-2">
    <div class="valign-wrapper item-linha-2">
      <canvas class="item-linha-2" id="tma"></canvas>
    </div>
  </div>
    <div class="row">
  <div class="col s12 m12 l6 item-linha-2">
    <div class="valign-wrapper item-linha-2">
      <canvas class="item-linha-2" id="pausas"></canvas>
    </div>
  </div>


</div>
         



    
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
   $('select').formSelect();


/*
    // $('select').val([1]);
    $('select.todos').siblings('ul').prepend('<li id=999><span>Selecionar Todos</span></li>');
    $('li#999').on('click', function () {
      var jq_elem = $(this), 
          jq_elem_span = jq_elem.find('span'),
          todos = jq_elem_span.text() == 'Selecionar Todos',
          set_text = todos ? 'Desmarcar Todos' : 'Selecionar Todos';
      jq_elem_span.text(set_text);
      jq_elem.siblings('li').filter(function() {
        return $(this).find('input').prop('checked') != todos;
      }).click();
    });

*/


   $('#example').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    } );





  })


    var randomScalingFactor = function() {
      return Math.round(Math.random() * 100);
    };

// grafico barra //

window.chartColors = {
      red: 'rgb(255, 99, 132)',
      orange: 'rgb(255, 159, 64)',
      yellow: 'rgb(255, 205, 86)',
      green: 'rgb(75, 192, 192)',
      blue: 'rgb(54, 162, 235)',
      purple: 'rgb(153, 102, 255)',
      grey: 'rgb(201, 203, 207)'
    };

    
    var Contratos = ['PMSP', 'MEC', 'DEFENSORIA', 'SEPM', 'MTE', 'CIMA', 'SEA', 'GRUPO SANTA', 'ARSESP', 'SOCICAM', 'CEUMA', 'CDHU'];
    var color = Chart.helpers.color;
    var barChartData = {
      labels: ['PMSP', 'MEC', 'DEFENSORIA', 'SEPM', 'MTE', 'CIMA', 'SEA', 'GRUPO SANTA', 'ARSESP', 'SOCICAM', 'CEUMA', 'CDHU'],
      datasets: [{
        label: 'Previsto',
        backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
        borderColor: window.chartColors.red,
        borderWidth: 1,
        data: [
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor()
        ]
      }, {
        label: 'Faturado',
        backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
        borderColor: window.chartColors.blue,
        borderWidth: 1,
        data: [
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor()
        ]
      }]

    };

   
    


// grafico pizza //


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
            window.chartColors.yellow,
            window.chartColors.green,
            window.chartColors.blue,
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


//


  
    var barChartData33 = {
      labels: ['PMSP', 'MEC', 'DEFENSORIA', 'SEPM', 'MTE', 'CIMA', 'SEA', 'GRUPO SANTA', 'ARSESP', 'SOCICAM', 'CEUMA', 'CDHU'],
      datasets: [{
        label: 'TML',
        backgroundColor: window.chartColors.red,
        data: [
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor()
        ]
      }, {
        label: 'TML-META',
        backgroundColor: window.chartColors.blue,
        data: [
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor()
        ]
      }]

    };




//


    var chartData = {
      labels: ['PMSP', 'DEFENSORIA', 'SEPM', 'MTE', 'MEC', 'CDHU', 'SOCICAM'],
      datasets: [{
        type: 'line',
        label: 'ABS-META',
        borderColor: window.chartColors.blue,
        borderWidth: 2,
        fill: false,
        data: [
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor()
        ]
      }, {
        type: 'bar',
        label: 'ABS',
        backgroundColor: window.chartColors.red,
        data: [
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor()
        ],
        borderColor: 'white',
        borderWidth: 2
      }]

    };


    var chartData2 = {
      labels: ['PMSP', 'DEFENSORIA', 'SEPM', 'MTE', 'MEC', 'CDHU', 'SOCICAM'],
      datasets: [{
        type: 'line',
        label: 'TMA-META',
        borderColor: window.chartColors.blue,
        borderWidth: 2,
        fill: false,
        data: [
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor()
        ]
      }, {
        type: 'bar',
        label: 'TMA',
        backgroundColor: window.chartColors.red,
        data: [
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor(),
          randomScalingFactor()
        ],
        borderColor: 'white',
        borderWidth: 2
      }]

    };





    var config5 = {
      type: 'line',
      data: {
        labels: ['PMSP', 'DEFENSORIA', 'SEPM', 'MTE', 'MEC', 'CDHU', 'SOCICAM'],
        datasets: [{
          label: 'NR-17 + WC',
          backgroundColor: window.chartColors.blue,
          borderColor: window.chartColors.blue,
          data: [
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor()
          ],
          fill: false,
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        title: {
          display: true,
          text: 'NR-17 + WC'
        },
        tooltips: {
          mode: 'index',
          intersect: false,
        },
        hover: {
          mode: 'nearest',
          intersect: true
        },
        scales: {
          xAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Month'
            }
          }],
          yAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Value'
            }
          }]
        }
      }
    };

    function carregaUltimoGrafico() {
      var ctx = document.getElementById('pausas').getContext('2d');
      window.myLine = new Chart(ctx, config5);
    };






















     function carragaOutroGrafico3(){
      var ctx = document.getElementById('tma').getContext('2d');
      window.myMixedChart = new Chart(ctx, {
        type: 'bar',
        data: chartData2,
        options: {
          responsive: true,
          maintainAspectRatio: false,
          title: {
            display: true,
            text: 'TMA'
          },
          tooltips: {
            mode: 'index',
            intersect: true
          }
        }
      });
    }



    function carragaOutroGrafico(){
      var ctx = document.getElementById('abs').getContext('2d');
      window.myMixedChart = new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: {
          responsive: true,
          maintainAspectRatio: false,
          title: {
            display: true,
            text: 'Absenteísmo'
          },
          tooltips: {
            mode: 'index',
            intersect: true
          }
        }
      });
    }























    function grafico5(){


      var ctx = document.getElementById('tml').getContext('2d');
      window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData33,
        options: {
          title: {
            display: true,
            text: 'TML'
          },
          tooltips: {
            mode: 'index',
            intersect: false
          },
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            xAxes: [{
              stacked: true,
            }],
            yAxes: [{
              stacked: true
            }]
          }
        }
      });

    }
  






















    function carregaEssaPorra() {
      var ctx2 = document.getElementById('entrantesAbandonadas').getContext('2d');
      window.myPie = new Chart(ctx2, config);
    };













    
  

    

    function grafico3(){
      var ctx = document.getElementById('faturamento').getContext('2d');
      window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: 'FATURAMENTO'
          }
        }
      });
    }


  
    window.onload = function() {
     // var ctx = document.getElementById('grafico').getContext('2d');
     // window.myPie = new Chart(ctx, config);
     // var contexto = document.getElementById("grafico1").getContext("2d");
     // carrega();
     grafico3();
      carregaEssaPorra();
     grafico5()
     carragaOutroGrafico()
     carragaOutroGrafico3()
     carregaUltimoGrafico()

    };
























function openNav() {
  //document.getElementById("mySidebar").style.width = "250px";
  //document.getElementById("mySidebar").style.transition = "1s";
  document.getElementById("main").style.marginLeft = "300px";
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