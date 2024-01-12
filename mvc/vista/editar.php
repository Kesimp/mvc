<?php require "layouts/header.php" ?>

<h1 class="text-center">EDITAR</h1>
<form action="" method="get">
    <?php
foreach($dato as $key => $value)
        foreach($value as $v):
    ?>
	<input type="text" value="<?php echo $v ['nombre']?>" name="nombre"> <br>
    <input type="text" value="<?php echo $v ['precio']?>" name="precio"> <br>
    <input type="hidden" value="<?php echo $v ['id']?>" name="id"> <br>
	<input type="submit" name="btn" value="ACTUALIZAR">
	<input type="hidden" name="m" value="actualizar">
    <?php
    endforeach;

?>
</form>
<?php require "layouts/footer.php" ?>