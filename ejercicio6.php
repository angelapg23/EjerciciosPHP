<!DOCTYPE html>
<html>
    <body>

    <h1> Ejercicio 6 </h1>
    <?php

   header ("Content-type: text/html;charset=\"utf-8\"");

   echo "<h1>".$_GET['clase']."</h1>";
   echo "<h2>".$_GET['periodo']."</h2>";

   echo "<h1>".$_GET['nombre']."</h1>";
   echo "<h2>".$_GET['apellido']."</h2>";

   if (is_numeric($_GET['edad'])&& $_GET['edad'] >=1)
   {
       echo "<p>Bienvenido ".$_GET['nombre']."".$_GET['apellido']."<p>";
   }
   else
   {
       echo "<p>no es una edad valida. <p>";
   }



   ?>

   <form>
       Escribe tu nombre completo:
       <input name="nombre" type="text" placeholder="escribe nombres">
       <input name="apellido" type="text" placeholder="escribe apellidos">
       <input name="edad" type="text" placeholder="escribe edad">
       <input type="submit" value="registrar">
</form>


    </body>
</html>