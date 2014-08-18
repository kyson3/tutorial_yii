<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'metainformation/prueba.php';

$this->breadcrumbs=array (
    'Prueba'
);

echo "<h1>Привет я создал свой первый взгляд</h1>";

?>

<script>
    $(function()){
        $("#mostrar").html("<h3>Jquery код</h3>");
    });

</script>
<a href="index.php?r=site/page&view=articulo-1">Articulo 1</a>

<div id="mostrar"></div>
