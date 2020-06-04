<!DOCTYPE html>
<html>
    <body>

    <h1> Ejercicio 7 </h1>
    <?php


    header ("Content-type: text/html;charset=\"utf-8\"");
    echo "<h1>".$_GET['numero']."</h1>";


    if (is_numeric($_GET['numero']))
   {
    echo "<p> Es un valor numerico </p>";
   }
   else
   {
       echo "<p>No es un valor numerico </p>";
   }




   if ($_GET['numero'] >=1)
   {
       echo "<p> Es mayor a 1 <br> </p";
   }

   else
   {
       echo "<p> No es mayor a uno <br> </p>";
   }



   if (ctype_digit($_GET['numero'])==true)
   {
       echo "<p> <br> Es un numero entero </p";
   }

   else
   {
       echo "<p>  No es un numero entero <br> </p>";
   }

   
   $x = 0;
   for ($i=1;$i<=$_GET['numero'];$i++)
   {
       if(($_GET['numero'] % $i) == 0)
       {
           $x++;

       }
   }

   if($x ==2)
   {
       echo "<p> El numero es primo <br> </p> ";
      
   }

   else
   {
    echo "<p> El numero no es primo <br> </p> ";
   }





   ?>

<form>
       Escriba un numero:
       <input name="numero" type="text" placeholder="Ingrese un numero">
       <input type="submit" value="registrar">
</form>



    </body>
</html>