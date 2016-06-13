<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Parque San Antonio Interactive Carparking Floorplan</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="css/jasny-bootstrap.min.css" rel="stylesheet">-->
    <link href="css/navmenu-push.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>-->
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/raphael-min.js"></script>
    <!--<script type="text/javascript" src="js/sotano1.js"></script>-->
    <?php if( !isset($_GET['idS']) ) {?>
      <?php require_once('sotano1.php'); ?>
    <?php }else if($_GET['idS']=="2"){ ?>
      <?php require_once('sotano2.php'); ?>
    <?php } ?>
  </head>

  <body >

    <div id="clickme">
      <i class="fa fa-bars"></i>
    </div>

    <script>
      $(document).ready(function () {
        window.setTimeout(function () {
          $('#animationShow').animate({marginLeft: "-100%" }, {queue: false, duration: 500})
        }, 4500 );
        $('#progress').animate({width: "100%" }, {queue: false, duration: 3500});

      });
    </script>

    <!--<div style="background-image: url('img/bgpsa.png');background-size:cover;background-repear:no-repeat;z-index:10000;top:0;left0;width:100%;height:100%;position:fixed;" id="animationShow">
      <div class="container-fluid" style="margin-top:80px;">
        <div class="row">
          <div class="col-md-4 col-md-offset-1">
            <img src="img/logoreside.png" class="img-responsive">
          </div>
          <div class="col-md-6 text-center" style="padding-top:150px;">
            <h3 style="color:white;">Parque San Antonio <small>Estacionamientos v1.0</small></h3>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100" id="progress" style="width:0%;">
                <span class="sr-only">70% Complete</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->

    <div id="slideout" style="overflow: scroll;">
      <div id="slidecontent" style="width:100%;">
          <div class="container-fluid">

            <?php if( !isset($_GET['idS']) ) { ?>
              <?php for($i=1;$i<429;$i++){ ?>

                  <?php if($i==41 || $i==42 || $i==349 || $i==67 || $i==68 || $i==69 || $i==227 || $i==228 || $i==229 || $i==376 || $i==377 || $i==378){?>

                    <?php if($i==41){ ?>

                      <div class="row duenos_cp" id="C41" onclick="showInfoModal(41,'Hector Fernandez Ovalle')">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                          <div style="border-radius:50%;background-color:#A316AB;color:white;height: 40px;width: 40px;text-align:center;font-size:20px;padding-top:.1em;margin-top:.5em;">41</div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9" style="padding-left:5px;margin-top:1.1em;">
                          <p style="line-height:16px;">
                            <strong style="font-size:18px;color:#6E6E6E;">Hugo Cruz</strong><br>
                            <span style="font-size:12px;font-weight:400;color:#BEBEBE;margin-bottom:-20px;">Depto: A410</span>
                          </p>
                        </div>
                      </div>
                      <!--Gris: #D7D7D7 -->

                    <?php } ?>

                    <?php if($i==42){ ?>

                      <div class="row duenos_cp" id="C42" onclick="showInfoModal(42,'Hugo Cruz')">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                          <div style="border-radius:50%;background-color:#A316AB;color:white;height: 40px;width: 40px;text-align:center;font-size:20px;padding-top:.1em;margin-top:.5em;">42</div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9" style="padding-left:5px;margin-top:1.1em;">
                          <p style="line-height:16px;">
                            <strong style="font-size:18px;#6E6E6E">Hugo Cruz</strong><br>
                            <span style="font-size:12px;font-weight:400;color:#BEBEBE;margin-bottom:-20px;">Depto: A410</span>
                          </p>
                        </div>
                      </div>

                    <?php } ?>

                    <?php if($i==349){ ?>

                    <div class="row duenos_cp" id="C349" onclick="showInfoModal(349,'Hilda Henestrosa')">
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <div style="border-radius:50%;background-color:#A316AB;color:white;height: 40px;width: 40px;text-align:center;font-size:20px;padding-top:.1em;margin-top:.5em;">349</div>
                      </div>
                      <div class="col-md-9 col-sm-9 col-xs-9" style="padding-left:5px;margin-top:1.1em;">
                        <p style="line-height:16px;">
                          <strong style="font-size:18px;color:#6E6E6E;">Omar Martinez</strong><br>
                          <span style="font-size:12px;font-weight:400;color:#BEBEBE;margin-bottom:-20px;">Depto: B505</span>
                        </p>
                      </div>
                    </div>

                    <?php } ?>


                  <?php }else{ ?>

                  <div class="row duenos_cp" id="C<?php echo $i; ?>" onclick="showInfoModal(<?php echo $i; ?>,'Sin informacion')">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div style="border-radius:50%;background-color:#A316AB;color:white;height: 40px;width: 40px;text-align:center;font-size:20px;padding-top:.1em;margin-top:.5em;"><?php echo $i; ?></div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9" style="padding-left:5px;margin-top:1.1em;">
                      <p style="line-height:16px;">
                        <strong style="font-size:18px;#6E6E6E">Sin información</strong><br>
                        <span style="font-size:12px;font-weight:400;color:#BEBEBE;margin-bottom:-20px;">Sin información</span>
                      </p>
                    </div>
                  </div>

                  <?php } ?>
              <?php } ?>
            <?php }else{ ?>
              <?php for($i=430;$i<870;$i++){ ?>
                  <div class="row duenos_cp" id="C<?php echo $i; ?>" onclick="showInfoModal(<?php echo $i; ?>,'Sin informacion')">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <div style="border-radius:50%;background-color:#A316AB;color:white;height: 40px;width: 40px;text-align:center;font-size:20px;padding-top:.1em;margin-top:.5em;"><?php echo $i; ?></div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9" style="padding-left:5px;margin-top:1.1em;">
                      <p style="line-height:16px;">
                        <strong style="font-size:18px;#6E6E6E">Sin información</strong><br>
                        <span style="font-size:12px;font-weight:400;color:#BEBEBE;margin-bottom:-20px;">Sin información</span>
                      </p>
                    </div>
                  </div>
              <?php } ?>
            <?php } ?>

          </div>
      </div>
    </div>

    <div style="background-color:#FFF;height:100%;overflow: scroll;padding:1em;margin-left:250px;" id="mapa">
      <div id="rsr" style="<?php if( !isset($_GET['idS']) ) { ?> margin-left:3em;margin-top:2em; <?php }else{ ?> margin-left:30px;margin-top:-170px;zoom:1.4; <?php } ?>">
      </div>
    </div>


    <div style="position:fixed;top:0;z-index:900;right:0;margin:1em;">
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
          <div class="row">
            <div class="col-md-8 hidden-sm hidden-xs" style="margin-top:5px;line-height:16px;">
              <span class="text-right" style="color: #A316AB;text-align:right;"><?php echo $_SESSION["userName"]; ?> </span> <br>
              <span class="text-right" style="font-size:11px;font-weight:400;color:#727272;margin-bottom:-20px;text-transform: lowercase;"><?php echo $_SESSION["userEmail"]; ?> </span>
            </div>
            <div class="col-md-4">
              <img src="img/default-user-image.png" width="36px" class="img-circle" />
            </div>
          </div>
        </button>
        <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1" style="z-index:1000000;">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Editar Perfil</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cerrar Sesión</a></li>
        </ul>
      </div>
    </div>

    <div style="position:fixed;bottom:45px;z-index:1000;right:0;margin:1em;">
      <button id="btn_ZoomIn" class="btn btn-default" style="margin:5px;"><i class="fa fa-search-plus" ></i></button><br>
      <button id="btn_ZoomOut" class="btn btn-default"  style="margin:5px;"><i class="fa fa-search-minus"></i></button>
    </div>

    <div style="position:fixed;bottom:0px;z-index:1000;right:0px;margin:0.7em 1em;" id="selectSotano">
      <ul class="pagination pagination-sm">
        <?php if( !isset($_GET['idS']) ) {?>
          <li class="active"><a href="#">Sótano 1</a></li>
          <li><a href="index2.php?idS=2">Sótano 2</a></li>
        <?php }else if($_GET['idS']=="2"){ ?>
          <li><a href="index2.php">Sótano 1</a></li>
          <li  class="active"><a href="#">Sótano 2</a></li>
        <?php } ?>

      </ul>
    </div>

    <div style="position:fixed;top:0;z-index:1000;left:250px;margin:1.4em 1em;width:390px;background-color:#FFFFFF;" id="searcher">
      <div class="dropdown" id="dropdownPanel" style="background-color:#FFFFFF;">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" style="padding:0;background-color:#FFFFFF;">
          <div class="container-fluid" style="padding:0;">
            <div class="row">
              <div class="col-md-12" style="line-height:16px;">
                <div class="input-group">
                  <span class="input-group-addon" id="buttonSearch" style="background-color:#A316AB;color:white;"><i class="fa fa-search"></i></span>
                  <input autocomplete="off" type="text" class="form-control" placeholder="Buscar en el mapa: ej. 42, 39, 228, Hugo Cruz, ..."style="-webkit-box-shadow: none;font-size:14px;padding:10px;;width:100%;" id="inputSearch">
                </div>
              </div>
            </div>
          </div>
        </button>
        <ul id="dropdownUL" class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1" style="width: 352px;opacity:0.95;margin-top:7px;z-index:1000;">
          <li role="presentation" id="searchResultSet1" data-park="CP_2" onclick="showInfoModal(2,'Hector Fernandez Ovalle')">
            <a role="menuitem" tabindex="-5" href="#">Hector Fernandez Ovalle <small style="color:#BEBEBE;font-size:12px;">Dueño</small><span class="badge pull-right">2</span></a>
          </li>
          <li role="presentation" id="searchResultSet2" data-park="CP_7" onclick="showInfoModal(7,'Hugo Cruz')">
            <a role="menuitem" tabindex="-4" href="#">Hugo Cruz <small style="color:#BEBEBE;font-size:12px;">Dueño</small><span class="badge pull-right">7</span></a>
          </li>
          <li role="presentation" id="searchResultSet3" data-park="CP_14" onclick="showInfoModal(14,'Hilda Gutierrez')">
            <a role="menuitem" tabindex="-3" href="#">Hilda Gutierrez <small style="color:#BEBEBE;font-size:12px;">Arrendado</small><span class="badge pull-right">14</span></a>
          </li>
          <!--<li role="presentation" id="searchResultSet4" data-park="CP_39" onclick="showInfoModal(39)">
            <a role="menuitem" tabindex="-2" href="#">Henestrosa Leticia <span class="badge pull-right">39</span></a>
          </li>
          <li role="presentation" id="searchResultSet5" data-park="CP_41" onclick="showInfoModal(41)">
            <a role="menuitem" tabindex="-1" href="#">Hugo Cruz <span class="badge pull-right">41</span></a>
          </li>
          <li role="presentation" id="searchResultSetEmpty">
            <a role="menuitem" tabindex="-2" href="#">Upss, no hay resultados para mostrar.</a>
          </li>-->
          <script type="text/javascript">
            $("#searchResultSet1").hover(function(eIn) {
                var idPark = $(this).data("park");
                $("#rsr").find($('#' + idPark)).attr( "fill", "#A316AB" );
                $("#rsr").find($('#' + idPark)).tooltip('show');
            },
            function(eOut) {
                var idPark = $(this).data("park");
                $("#rsr").find($('#' + idPark)).attr( "fill", "none" );
                $("#rsr").find($('#' + idPark)).tooltip('hide');
            });

            $("#searchResultSet2").hover(function(eIn) {
                var idPark = $(this).data("park");
                $("#rsr").find($('#' + idPark)).attr( "fill", "#A316AB" );
                $("#rsr").find($('#' + idPark)).tooltip('show');
            },
            function(eOut) {
                var idPark = $(this).data("park");
                $("#rsr").find($('#' + idPark)).attr( "fill", "none" );
                $("#rsr").find($('#' + idPark)).tooltip('hide');
            });

            $("#searchResultSet3").hover(function(eIn) {
                var idPark = $(this).data("park");
                $("#rsr").find($('#' + idPark)).attr( "fill", "#A316AB" );
                $("#rsr").find($('#' + idPark)).tooltip('show');
            },
            function(eOut) {
                var idPark = $(this).data("park");
                $("#rsr").find($('#' + idPark)).attr( "fill", "none" );
                $("#rsr").find($('#' + idPark)).tooltip('hide');
            });

            /*$("#searchResultSet4").hover(function(eIn) {
                var idPark = $(this).data("park");
                $("#rsr").find($('#' + idPark)).attr( "fill", "#A316AB" );
                $("#rsr").find($('#' + idPark)).tooltip('show');
            },
            function(eOut) {
                var idPark = $(this).data("park");
                $("#rsr").find($('#' + idPark)).attr( "fill", "none" );
                $("#rsr").find($('#' + idPark)).tooltip('hide');
            });

            $("#searchResultSet5").hover(function(eIn) {
                var idPark = $(this).data("park");
                $("#rsr").find($('#' + idPark)).attr( "fill", "#A316AB" );
                $("#rsr").find($('#' + idPark)).tooltip('show');
            },
            function(eOut) {
                var idPark = $(this).data("park");
                $("#rsr").find($('#' + idPark)).attr( "fill", "none" );
                $("#rsr").find($('#' + idPark)).tooltip('hide');
            });*/
          </script>
          <!--<li role="presentation" id="searchResultSet0">
            <a role="menuitem" tabindex="-1" href="#">Upss, sin resultados para mostrar.</a>
          </li>-->
        </ul>
      </div>
    </div>

    <div style="position:fixed;top:50px;z-index:1200;left:288px;margin:1em;width:352px;opacity:0.95;height:0px !important;" id="typeModal">
      <div class="panel panel-default">
        <div class="panel-heading" style="font-weight:500;">Cajón 42</div>
        <div class="panel-body">
          <!--<p>
            Edificio: A<br>
            Sótano: 1<br>
            Elevador: No<br>
          </p>
          <hr>-->
          <h6>Hector Fernandez Ovalle <small>Dueño</small></h6>
          <p>
            06 de Enero de 1984 <br>
            <!--Departamento 1516 <br>-->
            hector.fdezovalle@gmail.com<br>
            (+52) 6795 7574<br>
            <!--<a href="#">Ver carros registrados</a>-->
          </p>
          <hr>
          <h6>Sergio Israel Fonseca <small>Arrendado</small></h6>
          <p style="margin-bottom:0;">
            26 de Julio de 1995 <br>
            sifonsecac@hotmail.com<br>
            (+52) 5518 511887<br>
          </p>
          <div class="container-fluid" id="autosRegistrados">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6  text-center">
                <img src="img/Negro-Universo.jpg" width="100px" /><br>
                SEAT León DSG Style 1.4T 2015 c/seguro
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                <img src="img/camaro2014.jpg" width="100px" /><br>
                CHEVROLET Camaro Coupé 2014 s/seguro
              </div>
            </div>
          </div>
          <div class="row" style="margin-top:1em;">
            <div class="col-md-12 text-right">
              <a href="#" id="toogleCars"><i class="fa fa-angle-double-down"></i> Mostrar autos registrados</a>
            </div>
          </div>
          <script>
            $('#autosRegistrados').hide();
            $('#toogleCars').click(function(){
              if(!$("#autosRegistrados").is(":visible")){
                $("#toogleCars").html("<i class='fa fa-angle-double-up'></i> Ocultar");
                $("#autosRegistrados").slideDown(300);
              }else{
                $("#toogleCars").html("<i class='fa fa-angle-double-down'></i> Mostrar autos registrados");
                $("#autosRegistrados").slideUp(300);
              }
            });
          </script>
        </div>
      </div>
    </div>



    <script>
      // <!-- Eventos para hacer que se oculte el panel de la izquierda
      $( "#clickme" ).click(function() {
        if($("#slideout").css('left') == "0px"){
          $("#slideout").animate({left:'-250px'}, {queue: false, duration: 300});
          $("#clickme").animate({left:'0px'}, {queue: false, duration: 300});
          $("#mapa").animate({marginLeft: "0px"}, {queue: false, duration: 300});
          //$("#selectSotano").animate({left: "0px"}, {queue: false, duration: 300});
          $("#searcher").animate({left: "0px"}, {queue: false, duration: 300});
          $("#typeModal").animate({left: "38px"}, {queue: false, duration: 300});
          <?php if( !isset($_GET['idS']) ) { ?>
          $("#rsr").animate({marginLeft: "180px"}, {queue: false, duration: 300});
          <?php }else{ ?>
          $("#rsr").animate({marginLeft: "150px"}, {queue: false, duration: 300});
          <? } ?>
        }else if($("#slideout").css('left') == "-250px"){
          $("#slideout").animate({left:'0px'}, {queue: false, duration: 300});
          $("#clickme").animate({left:'250px'}, {queue: false, duration: 300});
          $("#mapa").animate({marginLeft: "250px"}, {queue: false, duration: 300});
          //$("#selectSotano").animate({left: "250px"}, {queue: false, duration: 300});
          $("#searcher").animate({left: "250px"}, {queue: false, duration: 300});
          $("#typeModal").animate({left: "288px"}, {queue: false, duration: 300});
          <?php if( !isset($_GET['idS']) ) { ?>
          $("#rsr").animate({marginLeft: "3em"}, {queue: false, duration: 300});
          <?php }else{ ?>
          $("#rsr").animate({marginLeft: "30px"}, {queue: false, duration: 300});
          <?php } ?>
        }
        if($("#typeModal").is(":visible") && $('#inputSearch').val()!=""){
          //$("#typeModal").animate({top: "50px" }, {queue: false, duration: 300});
          if($("#typeModal").css('top') != "50px"){
            $("#typeModal").animate({top: "50px" }, {queue: false, duration: 300});
          }
        }
      });
      // -->

      //<!-- Funciones del buscador
      $( "#typeModal" ).hide();

      $( "#inputSearch" ).keyup(function( event ) {

        if($('#inputSearch').val()!=""){
          $( "#dropdownPanel" ).addClass( "open" ); //Muestra el autocompletar

          // if que verifica si hay un modal visible y de ser asi, hacer una animacion para que se posicione debajo del autocompletar
          if($("#typeModal").is(":visible")){
            $("#typeModal").animate({top: $( "#dropdownUL").height()+65 }, {queue: false, duration: 300});
          }
        }else{

          $("#dropdownPanel").removeClass('open');
          if(!$("#autosRegistrados").is(":visible")){
            $("#toogleCars").html("<i class='fa fa-angle-double-up'></i> Ocultar");
            $("#autosRegistrados").slideDown(300);
          }else{
            $("#toogleCars").html("<i class='fa fa-angle-double-down'></i> Mostrar autos registrados");
            $("#autosRegistrados").slideUp(300);
          }
          $("#typeModal").slideUp(300);
        }
      });

      /* Evento que muestra el typeModal si es que hay uno al enfocar en el input */
      $( "#inputSearch" ).focus(function() {
        if($('#inputSearch').val()!="" && !$("#typeModal").is(":visible")){
          $( "#typeModal" ).slideDown(300);
        }
      });

      $('#dropdownPanel').click(function(e) {
        e.stopPropagation();
      });

      $( "#rsr" ).click(function() {
        if($("#typeModal").is(":visible") && $('#inputSearch').val()!=""){
          //$("#typeModal").animate({top: "50px" }, {queue: false, duration: 300});
          if($("#typeModal").css('top') != "50px"){
            $("#typeModal").animate({top: "50px" }, {queue: false, duration: 300});
          }
          $( "#typeModal" ).slideUp(300);
        }
      });
      // Funciones del buscador -->

      $('#typeModal').click(function(e) {
        if($("#typeModal").is(":visible") && $('#inputSearch').val()!=""){
          //$("#typeModal").animate({top: "50px" }, {queue: false, duration: 300});
          if($("#typeModal").css('top') != "50px"){
            $("#typeModal").animate({top: "50px" }, {queue: false, duration: 300});
          }
        }
      });

      // <!-- Funcion para mostrar el typeModal
      function showInfoModal(numCajon,valBusqueda){
        /*if que verifica si esta abierto el panel de la izquierda al mostrar la información del cajón
        si esta abierto el panel de la izquierda, lo oculta. */
        if($("#slideout").css('left') == "0px"){
          $("#slideout").animate({left:'-250px'}, {queue: false, duration: 300});
          $("#clickme").animate({left:'0px'}, {queue: false, duration: 300});
          $("#mapa").animate({marginLeft: "0px"}, {queue: false, duration: 300});
          //$("#selectSotano").animate({left: "0px"}, {queue: false, duration: 300});
          $("#searcher").animate({left: "0px"}, {queue: false, duration: 300});
          $("#typeModal").animate({left: "38px"}, {queue: false, duration: 300});
          <?php if( !isset($_GET['idS']) ) { ?>
          $("#rsr").animate({marginLeft: "250px"}, {queue: false, duration: 300});
          <?php }else{ ?>
          $("#rsr").animate({marginLeft: "170px"}, {queue: false, duration: 300});
          <?php } ?>
        }


        console.log(numCajon);

        /* if que verifica si esta abierto el autocompletar de la busqueda
        si es asi, entonces lo oculta */
        if($( "#dropdownPanel" ).hasClass('open')){
          $( "#dropdownPanel" ).removeClass('open');
        }

        $('#inputSearch').val(valBusqueda); //Asigna el nombre del dueño al input
        $( "#inputSearch" ).focus(); //Enfoca el input

        //$("#rsr").find($('#CP_' + numCajon)).attr( "fill", "#A316AB" ); Esto hace que busque en el mapa el cajon que se seleccionó y lo ilumine.


        $( "#typeModal" ).slideDown(300); //Muestra el typeModal con una animación.

        /*Verifica si el typemodal se ecnuentra en la posicion inicial si no es asi, hace una animación para subirlo.*/
        if($("#typeModal").css('top') != "50px"){
          $("#typeModal").animate({top: "50px" }, {queue: false, duration: 300});
        }
      }
      // -->

      // <!-- Eventos para hacer zoom al mapa
      <?php if( !isset($_GET['idS']) ) { ?>
        var currentZoom = 1.0;
        $(document).ready(function () {
            $( '#btn_ZoomOut' ).prop( "disabled", true);

            $('#btn_ZoomIn').click(
                function () {
                    $('#rsr').animate({ 'zoom': currentZoom += .5 }, 'slow');
                    if(currentZoom>1){
                      $( '#btn_ZoomOut' ).prop( "disabled", false );
                    }
                })
            $('#btn_ZoomOut').click(
                function () {
                    $('#rsr').animate({ 'zoom': currentZoom -= .5 }, 'slow');
                    if(currentZoom==1){
                      $( '#btn_ZoomOut' ).prop( "disabled", true );
                    }
                })
            $('#btn_ZoomReset').click(
                function () {
                    currentZoom = 1.0
                    $('#rsr').animate({ 'zoom': 1 }, 'slow');
                    $( '#btn_ZoomOut' ).prop( "disabled", true );
                })

            if(currentZoom==1){
              $( '#btn_ZoomOut' ).prop( "disabled", true );
            }
        });
      <?php }else{ ?>
        var currentZoom = 1.4;
        $(document).ready(function () {

          $( '#btn_ZoomOut' ).prop( "disabled", true);

          $('#btn_ZoomIn').click(
              function () {
                  $('#rsr').animate({ 'zoom': currentZoom += .5 }, 'slow');
                  if(currentZoom>1.4){
                    $( '#btn_ZoomOut' ).prop( "disabled", false );
                  }
              })
          $('#btn_ZoomOut').click(
              function () {
                  $('#rsr').animate({ 'zoom': currentZoom -= .5 }, 'slow');
                  if(currentZoom==1.4){
                    $( '#btn_ZoomOut' ).prop( "disabled", true );
                  }
              })

          if(currentZoom==1.4){
            $( '#btn_ZoomOut' ).prop( "disabled", true );
          }
        });
      <?php } ?>
      // -->
    </script>

  </body>
</html>
