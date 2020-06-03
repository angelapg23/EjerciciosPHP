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
       echo "<p> si es mayor a 1  <br> </p";
   }

   else
   {
       echo "<p> no es mayor a uno <br> </p>";
   }

   if ($_GET['numero']%$_GET['numero']==0)
   {
       echo "<p> si es entero </p";
   }

   else
   {
       echo "<p> no es entero </p>";
   }

   
   for($i=1;$i<=$_GET['numero'];$i++)
    {
        if (($_GET['numero']% $i)==0)
   {
       $i ++;
   }

    }

   if ($i<=2)
   {
       echo "<p> si es entero </p";
   }

   else
   {
       echo "<p> no es entero </p>";
   }




   
   ?>

<form>
       Escriba un numero:
       <input name="numero" type="text" placeholder="Ingrese un numero">
       <input type="submit" value="registrar">
</form>



    </body>
</html>