<?php 
    session_start(); 
    error_reporting(E_PARSE);
?>
<nav id="navbar-auto-hidden">
        <div class="row hidden-xs">
            <div class="col-xs-8">
              <div class="contenedor-tabla pull-right">
                <div class="contenedor-tr">

                  <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Busque aqui..."name="product">
      </div>
      <button class="btn btn-success" type="submit"name="search">Buscar</button>
    </form>
                  
                </div>
              </div>
            </div>
        </div>

    <?php  endif;?>