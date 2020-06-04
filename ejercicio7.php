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

   $n = ($_GET['Numero']);
   $M = $n - 1;

   $primo= "si";

   for ($i=2;$i<=$M;$i++){
       $residuo = $n % $i;

       if($residuo ==0)
       {
        $primo="no";
       break;
       }
   }

   if ($primo == "si"){
       echo " $n  es un numero primo";

   }
   else{
       echo "$n no es un numero primo";
   
   
   ?>

<form>
       Escriba un numero:
       <input name="numero" type="text" placeholder="Ingrese un numero">
       <input type="submit" value="registrar">
</form>



    </body>
</html>