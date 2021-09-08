

<!--<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categorias</div>

    <nav class="yamm megamenu-horizontal" role="navigation">
  
        <ul class="nav">
            <li class="dropdown menu-item">-->
                <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Categorías de Productos
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="sub-category.php">Frutas y Verduras</a></li>
    <li><a href="sub-category1.php">Carnes, Aves y Pescados</a></li>
    <li><a href="sub-category2.php">Desayuno</a></li>
    <li><a href="sub-category3.php">Abarrotes</a></li>
    <li><a href="sub-category4.php">Aguas y Bebidas</a></li>
 
              <?php $sql=mysqli_query($con,"select id,categoryName  from category");
while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="category.php?cid=<?php echo $row['id'];?>" class="dropdown-toggle"><i class="icon fa fa-desktop fa-fw"></i>
                <?php echo $row['categoryName'];?></a>
                <?php }?>
                        

</ul>
</li>

   <!-- </nav>-->
</div>