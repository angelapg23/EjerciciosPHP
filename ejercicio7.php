<!DOCTYPE html>
<html>
    <body>

    <h1> Ejercicio 7 </h1>
    <?php


    header ("Content-type: text/html;charset=\"utf-8\"");
    echo "<h1>".$_GET['numero']."</h1>";

    if (is_numeric($_GET['numero']))
   {
    echo "<p> si es un valor numerico </p>";
   }
   else
   {
       echo "<p>no es numerico </p>";
   }

   if ($_GET['numero'] >=1)
   {
       echo "<p> si es mayor a 1 </p";
   }

   else
   {
       echo "<p> no es mayor a uno </p>";
   }


   
   ?>

<form>
       Escriba un numero:
       <input name="numero" type="text" placeholder="Ingrese un numero">
       <input type="submit" value="registrar">
</form>



    </body>
</html>