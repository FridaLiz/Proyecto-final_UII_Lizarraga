<?php include("header.php"); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>InventarioPC</h1>
			</div>

			<div class="articulo">
				<article>
					<p>Inventario para Empleados</p>
					<br/>
                    <p>Dentro de nuestro inventario de capacitaciones para Empleados tenemos:</p>
					<br/>
					<p> •Asesoría y capacitación en el uso de equipo de cómputo y herramientas básicas de software (Windows, Office, antivirus). </p>
					<br/>
					<p>•Instalación y/o configuración de equipo de cómputo, periféricos y software.</p>
					<br/>
					<p>•Mantenimiento preventivo y correctivo a equipo de cómputo, preferentemente software, respecto al hardware se proporciona
           servicio de instalación y configuración, exclusivos del instituto.</p>
           <p> <div align="center">  <img  src="img/collage.jpg" width="400px"  alt="FalconMasters"> </div></p>
                   <br/>
                    <p>Si te interesa adquirur alguno de estas capacitaciones registrate</p>
				
				</article>
			
<div class="articulos">
            <article>
            <form method="post">
        <p>Nombre Completo</p>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu Nombre">
        <p>Capacitacion</p>
        <input type="text" id="can" name="can" placeholder="Ingresa la Capacitacion">
        <p>Correo</p>
        <input type="text" name="des" id="des" placeholder="Ingresa tu Correo">
        <input name="aviator" type="submit" value="REGISTRAR" id="adquirir">
        <br> <br>
    </form>
</div>
        <?php 
   
   if (isset($_POST["aviator"])){

       $nombre = trim($_POST["nombre"]);
       $correo = trim($_POST["can"]);
       $capacitacion = trim($_POST["des"]);
      
       echo "Registro completado! Revise y corrobore que la informacion sea correcta: <br>
        Nombre Completo: $nombre <br>
        Capacitacion de interes: $capacitacion <br>
        Correo de contacto: $correo";

     }
   

?>
<article></article>
            </div>
            <?php include("siderbar.php"); ?>
		</div>
	</section>
	<?php include("footer.php"); ?>
</body>
</html>