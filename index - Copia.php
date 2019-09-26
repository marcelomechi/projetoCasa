<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="assets/MDB/css/mdb.min.css" rel="stylesheet">
<style type="text/css">

body {
    position: relative;
    overflow-x: hidden;
    /*background-color: #CFD8DC;*/
}
body,
html { height: 100vh;}
.nav .open > a, 
.nav .open > a:hover, 
.nav .open > a:focus {background-color: transparent;}

/*-------------------------------*/
/*           Wrappers            */
/*-------------------------------*/

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 220px;
}

#sidebar-wrapper {
    z-index: 1000;
    left: 220px;
    width: 0;
    height: 100%;
    margin-left: -220px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #1a1a1a;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#sidebar-wrapper::-webkit-scrollbar {
  display: none;
}

#wrapper.toggled #sidebar-wrapper {
    width: 220px;
}

#page-content-wrapper {
    width: 100%;
    padding-top: 70px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -220px;
}

/*-------------------------------*/
/*     Sidebar nav styles        */
/*-------------------------------*/
.navbar {
  padding: 0;
}

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 220px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    position: relative; 
    line-height: 20px;
    display: inline-block;
    width: 100%;
}

/*-------------------------------*/
/*       Hamburger-Cross         */
/*-------------------------------*/

.hamburger {
  position: fixed;
  top: 20px;  
  z-index: 999;
  display: block;
  width: 32px;
  height: 32px;
  margin-left: 15px;
  background: transparent;
  border: none;
}
.hamburger:hover,
.hamburger:focus,
.hamburger:active {
  outline: none;
}
.hamburger.is-closed:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0,0,0);
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px,0,0);
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom,
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  position: absolute;
  left: 0;
  height: 4px;
  width: 100%;
}
.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom {
  background-color: #1a1a1a;
}
.hamburger.is-closed .hamb-top { 
  top: 5px; 
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed .hamb-middle {
  top: 50%;
  margin-top: -2px;
}
.hamburger.is-closed .hamb-bottom {
  bottom: 5px;  
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed:hover .hamb-top {
  top: 0;
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover .hamb-bottom {
  bottom: 0;
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  background-color: #1a1a1a;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-bottom {
  top: 50%;
  margin-top: -2px;  
}
.hamburger.is-open .hamb-top { 
  -webkit-transform: rotate(45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open .hamb-middle { display: none; }
.hamburger.is-open .hamb-bottom {
  -webkit-transform: rotate(-45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0,0,0);
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px,0,0);
  -webkit-transition: all .35s ease-in-out;
}

/*-------------------------------*/
/*            Overlay            */
/*-------------------------------*/

.overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(250,250,250,.8);
    z-index: 1;
}


/* */

.config{
	list-style: none;
	margin: 0;
	padding: 0;
}

</style>

</head>
<body>
<div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav config accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
<li><a class="white-text" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">DH</a>
              <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                        <ul class="config">
                          <li class="white-text">Avaliações</li>
                          <li class="white-text">Banco de Curriculum</li>
                              <ul class="collapsible config">
                                  <li>
                                  <a class="collapsible-header white-text">Relatórios</a>
                                  <div class="collapsible-body">
                                      <ul class="config">
                                      <li><a href="#!" class="white-text">Desempenho </a></li>
                                      </ul>
                                  </div>
                                  </li>
                              </ul>
                              <li ><a href="#!" class="white-text">Quadro de Funcionários</a></li>
                        </ul>
                </div>
          </li>
          <li class="collapsed white-text" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">Planejamento
         
                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                  <ul class="config">
                    <li>Dimensionamento</li>
                    <li>Atendimento de Demandas</li>
                  </ul>
                </div>
          </li>
          <li class="collapsed white-text" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo3"
        aria-expanded="false" aria-controls="collapseTwo3">Sesmt
            <div id="collapseTwo3" class="collapse" role="tabpanel" aria-labelledby="headingTwo3" data-parent="#accordionEx">
              <ul class="config">
                <li>Atestados</li>
              </ul>
            </div>
          </li>
      </ul>
  </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
<div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container-fluid">
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
        	</div>
        <!-- /#page-content-wrapper -->

</div>
    <!-- /#wrapper -->


   			




            <ul hidden class="config accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
             <li><a class="white-text" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">DH</a>
              <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                        <ul class="config">
                          <li class="white-text">Avaliações</li>
                          <li class="white-text">Banco de Curriculum</li>
                              <ul class="collapsible config">
                                  <li class="danger-color-dark">
                                  <a class="collapsible-header white-text">Relatórios</a>
                                  <div class="collapsible-body">
                                      <ul class="config">
                                      <li><a href="#!" class="white-text">Desempenho </a></li>
                                      </ul>
                                  </div>
                                  </li>
                              </ul>
                              <li ><a href="#!" class="white-text">Quadro de Funcionários</a></li>
                        </ul>
                </div>
          </li>
          <li >
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">Planejamento</a>
                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                  <ul>
                    <li><a href="#!">Dimensionamento</a></li>
                    <li><a href="#!">Atendimento de Demandas</a></li>
                  </ul>
                </div>
          </li>
          <li>
          <a class="collapsible-header white-text"><i class="material icons">Sesmt</a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">Atestados</a></li>
              </ul>
            </div>
          </li>

            </ul>
      




<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- jquery ui  -->
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>

  <!-- MDB core JavaScript -->
<script type="text/javascript" src="assets/MDB/js/mdb.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>


<script type="text/javascript">

$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  }); 





});



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



</script>


</body>
</html>