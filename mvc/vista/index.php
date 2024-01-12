<?php
require_once("layouts/header.php");
?>
<a href="index.php?m=nuevo" class="btn">nuevo</a>

<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>acciones</th>
    </tr>
    <tbody>
        <?php 
        if(!empty($dato)):
        foreach($dato as $key => $value)
        foreach($value as $v):?>
      
        <tr>
            <td> <?php echo $v['id']?></td>
            <td><?php echo $v['nombre']?></td>
            <td><?php echo $v['precio']?></td>
            <td>
                <a class="btn" href="index.php?m=editar&id=<?php echo $v ['id']?>">editar</a>
                <a class="btn"  href="index.php?m=eliminar&id=<?php echo $v ['id']?>"  onclick="return confirm('estas seguro');false"   > eliminar</a>
            </td>
        </tr>
        <?php endforeach;?>
        <?php else:?>
            <tr>
                <td colspan="3">no hay registro</td>
            </tr>
            <?php endif;?>
    </tbody>
</table>
<?php
require_once("layouts/footer.php");