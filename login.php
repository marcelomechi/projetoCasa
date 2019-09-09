<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="<?php echo BASE_URL;?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="<?php echo BASE_URL;?>assets/MDB/css/mdb.min.css" rel="stylesheet">

	<title>Projeto Bootstrap 4</title>

</head>

<style>

/*
.container{

	background-color: orange;
	height: 100vh;

}

.container form{
		vertical-align: middle;
		background-color: red;
}


.row{
	height: 100vh;
}

.container-fluid{
	background-color: orange;

}

.col{
	background-color: red;
}
*/

.container-fluid{
  height: 100vh;
   background-image: url("assets/images/paisagem.jpg");
   background-size: cover;
}

.h300{
	height: 300px;
	width: 100%;
}

.cor{
	background-color: orange;
}

.foto{
    max-width: 180px;
    max-height: 120px;
}

.padding{
	padding: 10px 0px 10px 10px;
}


@media only screen and (max-device-width: 900px) {

             .responsivo-w100{
                width: 100% !important;
              }
}

</style>
<body>

<div class="container-fluid">
		  <div class="row justify-content-center align-items-center h-100">
		    <div class="col col-sm-8 col-md-8 col-lg-6 col-xl-4"> <!-- essas classes col-sm, col-md, col-lg, col-xl... é como ela deve se comportar dentro de cada tamanho de tela, sm = tela pequena, md = tela média,   lg = tela grande, xl = tela extra grande -->
		     			<!-- Material form login -->
		<div class="card h400">
						<section id="cardUsuario">   
							  <h5 class="card-header elegant-color white-text text-center py-4">			  	
							    <strong>WORKFORCE MANAGEMENT</strong>
							  </h5>
							  <div class="md-form text-center">
							  	<img src="assets/images/wfm.png" class="foto">
							  </div>
							  <div class="card-body">
							      <!-- Email -->
								<div class="md-form">
									<input type="text" id="inputIconEx2" class="form-control">
									<label for="inputIconEx2">Usuário</label>
								</div>
  							      <div class="d-flex justify-content-around">
							        <div>
							          <a id="recuperaSenha" href="#">Não me lembro</a>
							        </div>
							      </div>
							      <button id="proximo" class="btn btn-elegant  btn-block my-4 waves-effect z-depth-0">Próximo</button>
							  </div>
						</section>



						<section id="cardSenha" hidden> 
							 <div class="d-flex justify-content-start padding">                        
                      			  <span><i id="voltar" class="fas fa-arrow-left"></i></span>
                     		 </div>     
							  <div class="md-form text-center">						  	
							    <span style="font-size: 120px"><i class="fas fa-user-circle icon-large"></i></span>
							  </div>
							  <div class="card-body">
							      <!-- Email -->
								<div class="md-form">
									<input type="password" id="senha" class="form-control">
									<label for="senha">Senha</label>
								</div>
									<div class="d-flex justify-content-end custom-control custom-checkbox">
									  <input type="checkbox" class="custom-control-input" id="defaultIndeterminate2">
									  <label class="custom-control-label" for="defaultIndeterminate2">Mantenha-me Conectado</label>
									</div>
							      <button id="proximo" class="btn btn-elegant btn-block my-4 waves-effect z-depth-0">Próximo</button>
							  </div>
						</section>

						<section id="cardEsqueciSenha" hidden>
							  <h5 class="card-header elegant-color white-text text-center py-4">						  	
							    <strong>Recuperação de Acesso</strong>
							  </h5>						 
							  <div class="card-body">
							    <div class="md-form">
							    	<p class="text-center">Vamos ajudá-lo a redefinir sua conta, primeiro digite seu CPF, caso tenha e-mail, digite também.</p>
							    </div>
								<div class="md-form">
									<input type="text" id="cpf" class="form-control">
									<label for="cpf">CPF</label>
								</div>
								<div class="md-form">
									<input type="email" id="email" class="form-control">
									<label for="email">E-mail</label>
								</div>													      
							   <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right">						      
							      <button id="proximo" class="btn btn-danger my-4 waves-effect z-depth-0 responsivo-w100">
							      Cancelar</button>
							      <button id="proximoRedefinirSenha" class="btn btn-elegant my-4 waves-effect z-depth-0 responsivo-w100">Próximo</button>
							   </div>
							  </div>
						</section>

						 <section id="cardNovaSenha" class="esquerda" hidden>   
							  <h5 class="card-header elegant-color white-text text-center py-4">						  	
							    <strong>Recuperação de Acesso</strong>
							  </h5>						 
							  <div class="card-body">
							      <!-- Email -->
								<div class="md-form">
									<input type="password" id="asdf" class="form-control">
									<label for="asdf">Digite sua nova senha</label>
								</div>
								<div class="md-form">
									<input type="password" id="senha2" class="form-control">
									<label for="senha2">Digite novamente</label>
								</div>
								<div class="md-form">
									<input type="text" id="token" class="form-control">
									<label for="token">Digite o token recebido</label>
							  </div>							      
							   <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right">						      
							      <button id="proximo" class="btn btn-danger my-4 waves-effect z-depth-0 responsivo-w100">
							      Cancelar</button>
							      <button id="teste" data-toggle="modal" data-target="#fullHeightModalRight" class="btn btn-elegant my-4 waves-effect z-depth-0 responsivo-w100">Gravar alteração</button>
							   </div>
							  </div>
						 </section>   
		</div>
						
						
		    </div>
		  </div>



<!-- Full Height Modal Right -->

<div class="modal fade top" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="false">

  <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-full-height modal-top" role="document" data-backdrop="false">


    <div class="modal-content">
      <div class="modal-header success-color-dark">
        <h4 class="modal-title w-100 text-center white-text" id="myModalLabel">Sua Solicitação foi concluída</h4>
       </div>
      <div class="modal-body w-100 text-center">
        Acesse sua conta com os novos dados.
      </div>
      <div class="modal-footer justify-content-end">
        <button type="button" class="btn btn-danger waves-effect z-depth-0" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
</div>












</div>
<!-- JQuery -->
<script src="<?php echo BASE_URL;?>assets/js/jquery-3.4.1.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/jquery-ui-1.12.1/jquery-ui.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="assets/MDB/js/mdb.min.js"></script>
</body>
</html>



<script type="text/javascript">
	

	var dados = "";
  $("#proximo").click(function(){
    $('#proximo').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Aguarde...').addClass('disabled');
    
    $.ajax({
        url:'http://bootstrap4.test/ajaxLogin',
        type:'POST',
        async: false,
        data:{id_usuario: $("#usuario").val(), tipo: 1},
        success: function(r) {
              if(r == false){
                    $("#nLocalizado").removeAttr("hidden");
                    $("#loadUsuario").attr("hidden","hidden");
                    return false;
              }else{
                  $("#nLocalizado").attr("hidden","hidden");
                  $("#nomeUsuario").html(r);
                  $("#cardUsuario").hide("slide", { direction: "left" }, 200, function(){
                  $("#cardSenha").show("slide", {direction: "right"}, 200);
                 });



              }
              // dessa forma ele só vai chamar a próxima assim que terminar a primeira funciona como o async
  
        
        }


    })
});

  $("#logar").click(function(){
    //alert($("#usuario").val())

        $.ajax({
        url:'http://bootstrap4.test/ajaxLogin',
        type:'POST',
        async: false,
        data:{senha: $("#password").val(), tipo: 2, id_usuario: $("#usuario").val()},
        success: function(r) {
              if(r == false){
                alert("usuario ou senha invalidos");                
              }else{
                 $("#nomeUsuario").html(r);
              }
  
        
        }


    })

  });

    
      // dessa forma ele só vai chamar a próxima assim que terminar a primeira funciona como o async



  $("#voltar").click(function(){
       $("#cardSenha").hide("slide", { direction: "right" }, 200, function(){
           $("#cardUsuario").show("slide", {direction: "left"}, 200);
      });
  });

  $("#recuperaSenha").click(function(){
     
      $("#cardUsuario").hide(200, function(){
          $("#cardEsqueciSenha").removeAttr("hidden");
      });
  });

  $("#cancelaEsqueciSenha").click(function(){
      $("#cardEsqueciSenha").hide(200, function(){
          $("#cardUsuario").show(200);
      });
  });

    $("#proximoRedefinirSenha").click(function(){
      $("#cardEsqueciSenha").hide("slide", {direction: "left"}, 200, function(){
          $("#cardNovaSenha").show("slide", {direction: "right"}, 200);
      });
  });

  $("#fechaModalSenha").click(function(){
          $("#teste").hide(200, function(){
          window.location.reload();
      });
  });
		

	
</script>