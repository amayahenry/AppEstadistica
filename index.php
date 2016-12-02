<?php 
	
	include_once "../funciones.php";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Calculador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    
  </head>
  
  <body>

   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">APP</a>
          <div class="nav-collapse collapse">
            
          </div>
        </div>
      </div>
    </div>
	
    <div align="center">
        <table width="90%">
          <tr>
            <td>
            
            	<table class="table table-bordered">
                  <tr class="info">
                    <td>
                    	<div class="row-fluid">
                        	<div class="span6">
                            	<h2 class="text-info">
                                    <img src="img/Calculator-icon.png" width="80" height="80">
                                    Calculador de Probabilidad
                                </h2>
                          </div>
                        	<div class="span6">
                           		<form name="form1" method="post" action="">
                                	<div class="input-append">
                                	
                                    </div>
                          	    </form>
                                
                                
                                <div id="binomial" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                	<form name="form2" method="post" action="">
                                	<div class="modal-header">
                                		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                		<h3 id="myModalLabel">Calculo Binomial</h3>
                                	</div>
                                	<div class="modal-body">
                                		<div class="row-fluid">
                                            <div class="span6">
                                            	<strong>Probabilidad:</strong><br>
                                                <input type="text" name="p" value="" autocomplete="off" required class="form-control"><br>
                                                <strong>Poblacion:</strong><br>
                                                <input type="text" name="n" value="" autocomplete="off" class="form-control" required><br>
                                                <strong>Numeros Casos</strong><br>
                                                <input type="text" name="x" value="" autocomplete="off" required><br>
                                                
                                            </div>
                                            <div class="span6">

	                                           <input type="text" name="n" value="" autocomplete="off" class="form-control" required><br>
                                            </div>
                                        </div>
                                    
                                	</div>
                                	<div class="modal-footer">
                                        <button class="btn" data-dismiss="modal" aria-hidden="true"><strong><i class="icon-remove"></i> Cerrar</strong></button>
                                        <button type="submit" class="btn btn-succefull"><strong><i class="icon-ok"></i> Calcular</strong></button>
                                         <button type="reset" ><strong><i class="icon-remove"></i> Limpiar</strong></button>
	                                </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>



                        
                                
                            </div>
                        </div>
                    </td>
                  </tr>
                </table>
                
                <table class="table table-bordered table table-hover">
                  <tr class="info">
                    <td><strong class="text-info">Binomial</strong></td>
                    <tr>
                        <td>
                            <a href="#binomial" role="button" class="btn" data-toggle="modal">
                                    <strong><i class="icon-plus"></i> Calcular</strong>
                                </a>
                        </td>
                    </tr>
                   <tr>
                         <td><strong class="text-info">Hipergeometrica</strong></td>
                    <tr>
                        <td>
                            <a href="#hipo" role="button" class="btn" data-toggle="modal">
                                    <strong><i class="icon-plus"></i> Calcular</strong>
                                </a>
                        </td>
                    </tr>
                    <td><strong class="text-info">Multinomial</strong></td>
                    <tr>
                        <td>
                            <a href="#multi" role="button" class="btn" data-toggle="modal">
                                    <strong><i class="icon-plus"></i> Calcular</strong>
                                </a>
                        </td>
                    </tr>
                    <td><strong class="text-info">Poison</strong></td>
                    <tr>
                        <td>
                            <a href="#poison" role="button" class="btn" data-toggle="modal">
                                    <strong><i class="icon-plus"></i> Calcular</strong>
                                </a>
                        </td>
                    </tr>
                  </tr>
                  
                  
                    	
                        
                        
                        
                        
                        
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap-transition.js"></script>
    <script src="../../js/bootstrap-alert.js"></script>
    <script src="../../js/bootstrap-modal.js"></script>
    <script src="../../js/bootstrap-dropdown.js"></script>
    <script src="../../js/bootstrap-scrollspy.js"></script>
    <script src="../../js/bootstrap-tab.js"></script>
    <script src="../../js/bootstrap-tooltip.js"></script>
    <script src="../../js/bootstrap-popover.js"></script>
    <script src="../../js/bootstrap-button.js"></script>
    <script src="../../js/bootstrap-collapse.js"></script>
    <script src="../../js/bootstrap-carousel.js"></script>
    <script src="../../js/bootstrap-typeahead.js"></script>
	<script type="text/javascript" src="jss/jquery.min.js"></script>
    <script type="text/javascript" src="jss/prototype.js"></script>
    <script type="text/javascript" src="jss/eventos.js"></script>
  </body>
</html>
