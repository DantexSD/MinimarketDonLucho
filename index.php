<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>

    <?php include './inc/link.php'; ?>
     <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="assets/css2/bootstrap.min.css">
      <!-- Customizable CSS -->
      <link rel="stylesheet" href="assets2/css/main.css">
      <link rel="stylesheet" href="assets2/css/green.css">
      <link rel="stylesheet" href="assets2/css/owl.carousel.css">
    <link rel="stylesheet" href="assets2/css/owl.transitions.css">
    <link rel="stylesheet" href="assets2/css/owl.theme.css">
    <link href="assets2/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets2/css/animate.min.css">
    <link rel="stylesheet" href="assets2/css/rateit.css">
    <link rel="stylesheet" href="assets2/css/bootstrap-select.min.css">

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets2/css/config.css">

    <link href="assets2/css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="assets2/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets2/css/red.css" rel="alternate stylesheet" title="Red color">
    <link href="assets2/css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="assets2/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
    <link rel="stylesheet" href="assets2/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets2/images/favicon.ico">


</head>

<body id="container-page-index"  style=" color:#000000;">

    
    <?php include './inc/navbar.php'; ?>
    
    <section id="slider-store" class="carousel slide" data-ride="carousel" style="padding: 0;">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#slider-store" data-slide-to="0" class="active"></li>
            <li data-target="#slider-store" data-slide-to="1"></li>
            <li data-target="#slider-store" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="padding-top: 12%">
            <div class="item active">
                <center>
                <img src="./assets/img/slid.jpg" alt="slider1">
                </center>
                <div class="carousel-caption">
                    Text Slider 1
                </div>
            </div>
            <div class="item">
              <center>
                <img src="./assets/img/slider1.jpeg" alt="slider2">
                </center>
                <div class="carousel-caption">
                    Text Slider 2
                </div>
            </div>
            <div class="item">
             <center>
                <img src="./assets/img/slider3.jpeg" alt="slider3">
                </center> 
                <div class="carousel-caption">
                    Text Slider 3
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#slider-store" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#slider-store" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>
    

    <section id="new-prod-index"> 
    <center>
<div class="info-boxes wow fadeInUp">
  <div class="info-boxes-inner">
    <div class="row">
      <div class="col-md-6 col-sm-4 col-lg-4">
        <div class="info-box">
          <div class="row">
            <div class="col-xs-2">
                 <i class="icon fa fa-dollar"></i>
            </div>
            <div class="col-xs-10">
              <h4 class="info-box-heading green">Garantia</h4>
            </div>
          </div>  
          <h6 class="text">30 dias de garantía, programa de afiliados.</h6>
        </div>
      </div><!-- .col -->

      <div class="hidden-md col-sm-4 col-lg-4">
        <div class="info-box">
          <div class="row">
            <div class="col-xs-2">
              <i class="icon fa fa-truck"></i>
            </div>
            <div class="col-xs-10">
              <h4 class="info-box-heading orange">Envio gratis</h4>
            </div>
          </div>
          <h6 class="text">envio gratis en pedidos mayores a $.50.00</h6> 
        </div>
      </div><!-- .col -->

      <div class="col-md-6 col-sm-4 col-lg-4">
        <div class="info-box">
          <div class="row">
            <div class="col-xs-2">
              <i class="icon fa fa-gift"></i>
            </div>
            <div class="col-xs-10">
              <h4 class="info-box-heading red">Oferta Especial</h4>
            </div>
          </div>
          <h6 class="text">Todos los productos 20% de dscto </h6> 
        </div>
      </div><!-- .col -->
      

    </div><!-- /.row -->
  </div><!-- /.info-boxes-inner -->
  
</div><!-- /.info-boxes -->
</center>   
         <div class="container">
            <div class="page-header">
                <h1>Últimos <small>productos agregados</small></h1>
            </div>
            <div class="row">
              	<?php
                  include 'library/configServer.php';
                  include 'library/consulSQL.php';
                  $consulta= ejecutarSQL::consultar("SELECT * FROM producto WHERE Stock > 0 AND Estado='Activo' ORDER BY id DESC LIMIT 7");
                  $totalproductos = mysqli_num_rows($consulta);
                  if($totalproductos>0){
                      while($fila=mysqli_fetch_array($consulta, MYSQLI_ASSOC)){
                ?>
                <div class="col-xs-12 col-sm-6 col-md-4">
                     <div class="thumbnail">
                       <img class="img-product" src="assets/img-products/<?php if($fila['Imagen']!="" && is_file("./assets/img-products/".$fila['Imagen'])){ echo $fila['Imagen']; }else{ echo "default.png"; } ?>">
                       <div class="caption">
                       		<h3><?php echo $fila['Marca']; ?></h3>
                            <p><?php echo $fila['NombreProd']; ?></p>
                            <?php if($fila['Descuento']>0): ?>
                             <p>
                             <?php
                             $pref=number_format($fila['Precio']-($fila['Precio']*($fila['Descuento']/100)), 2, '.', '');
                             echo $fila['Descuento']."% descuento: $".$pref; 
                             ?>
                             </p>
                             <?php else: ?>
                              <p>$<?php echo $fila['Precio']; ?></p>
                             <?php endif; ?>
                        <p class="text-center">
                            <a href="infoProd.php?CodigoProd=<?php echo $fila['CodigoProd']; ?>" class="btn btn-primary btn-sm btn-raised btn-block"><i class="fa fa-plus"></i>&nbsp; Detalles</a>
                        </p>
                       </div>
                     </div>
                </div>     
                <?php
                     }   
                  }else{
                      echo '<h2>No hay productos registrados en la tienda</h2>';
                  }  
              	?>  
            </div>
         </div>
    </section>
    
    <section id="reg-info-index">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-center">
                   <article style="margin-top:5%;">
                        <p><i class="fa fa-users fa-4x"></i></p>
                        <h3>Registrate</h3>
                        <p>Registrate como cliente en nuestro<span class="tittles-pages-logo">E-COMMERCE</span> en un sencillo formulario para poder completar tus pedidos</p>
                        <p><a href="registration.php" class="btn btn-info btn-raised btn-block">Registrarse</a></p>   
                   </article>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <img src="assets/img/minimarket.png" alt="Smart-TV" class="img-responsive" style="width: 70%; display: block; margin: 0 auto;">
                </div>
                <?php include('includes/brands-slider.php');?>
            </div>
        </div>
          
    </section>


    <?php include './inc/footer.php'; ?>
    <script src="assets2/js/jquery-1.11.1.min.js"></script>
  
  <script src="assets2/js/bootstrap.min.js"></script>
  
  <script src="assets2/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="assets2/js/owl.carousel.min.js"></script>
  
  <script src="assets2/js/echo.min.js"></script>
  <script src="assets2/js/jquery.easing-1.3.min.js"></script>
  <script src="asset2s/js/bootstrap-slider.min.js"></script>
    <script src="assets2/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets2/js/bootstrap-select.min.js"></script>
    <script src="assets2/js/wow.min.js"></script>
  <script src="assets2/js/scripts.js"></script>

  <!-- For demo purposes – can be removed on production -->
  
  <script src="switchstylesheet/switchstylesheet.js"></script>
  
  <script>
    $(document).ready(function(){ 
      $(".changecolor").switchstylesheet( { seperator:"color"} );
      $('.show-theme-options').click(function(){
        $(this).parent().toggleClass('open');
        return false;
      });
    });

    $(window).bind("load", function() {
       $('.show-theme-options').delay(2000).trigger('click');
    });
  </script>
</body>
</html>