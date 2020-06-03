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



   if (is_integer($_GET['numero']))
   {
       echo "<p> <br> si es entero </p";
   }

   else
   {
       echo "<p> <br> no es entero </p>";
   }

   /*
   for ($i=1;$i<=$_GET;$i++)
   {
       if(primo($i)){
           echo "<p> El numero ".$i."es primo";
       }
       else
       {
           echo "<p> El numero ".$i."no es primo";
       }
   }
*/
   
   ?>

<form>
       Escriba un numero:
       <input name="numero" type="text" placeholder="Ingrese un numero">
       <input type="submit" value="registrar">
</form>



    </body>
</html>