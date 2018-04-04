<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Validación de datos con PHP</title>
    </head>
    <body>
        <?php
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        
            if($_GET["error"] == "si")
            {
                echo "<span style='color: #F00; font-size: 2em;' >VERIFICA TUS DATOS</span>";
            }
        ?> 
        
        <hgroup><h1>Formlario GET</h1></hgroup>
        
        <form name="valida_datos_get_frm" action="datos.php" method="get" enctype="application\x-www-form-urlencoded" >
            <br /><br />
            <label>Nombre:</label>
            <input type="text" name="nombre_txt" />
            <br /><br />
            <label>Contraseña:</label>
            <input type="password" name="password_txt" />
            <br /><br />
            <input type="radio" name="sexo_rdo" value="M" />Masculino&nbsp;
            <input type="radio" name="sexo_rdo" value="F" />Femenino&nbsp;
            <br /><br />
            <input type="hidden" name="enviar_hdn" value="get"/>
            <input type="button" id="enviar-get" name="enviar_btn" value="Enviar GET" />
        </form>
        
        <hgroup><h1>Formlario POST</h1></hgroup>
        
        <form name="valida_datos_post_frm" action="datos.php" method="post" enctype="application\x-www-form-urlencoded" >
            <br /><br />
            <label>Nombre:</label>
            <input type="text" name="nombre_txt" />
            <br /><br />
            <label>Contraseña:</label>
            <input type="password" name="password_txt" />
            <br /><br />
            <input type="radio" name="sexo_rdo" value="M" />Masculino&nbsp;
            <input type="radio" name="sexo_rdo" value="F" />Femenino&nbsp;
            <br /><br />
            <input type="hidden" name="enviar_hdn" value="post"/>
            <input type="button" id="enviar-post" name="enviar_btn" value="Enviar POST" />
        </form>
        
        <script src="js/validaciones.js" ></script>
    </body>
</html>
