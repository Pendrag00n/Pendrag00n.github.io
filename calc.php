<!DOCTYPE html>
<html>

<head>
   <style media="all">
      body {
         background-color: pink;
      }

      .body {
         font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
         border: 8px solid darkblue;
         color: black;
         margin: 50px;
         margin-left: 100px;
         margin-right: 100px;
         border-radius: 25px;
         text-transform: uppercase;
      }

      h1 {
         color: darkred;
         text-align: center;
      }

      p {
         color: red;
         text-align: center;
         font-size: x-large;
      }

      .form {
         color: red;
         text-align: center;
         font-size: x-large;
      }
      .out{
         border: 8px solid darkblue;
         color: black;
         margin: 50px;
         margin-left: 200px;
         margin-right: 200px;
         border-radius: 25px;
      }
   </style>
</head>

<body>
   <div class="body">
      <div class="form">
      <br>
         <form action="index.php" method="post">
            A <input type="number" name="no1" value="0"/><br />
            B <input type="number" name="no2" value="0"/><br />
            <input type="submit" name="submit" value="CALCULAR!" />
         </form>
      </div>
      <div class="out">
      <?php
$n1="0";$n2="0";$r1="0";$r2="0";$r3="0";$r4="0";
if(isset($_POST['submit'])){
	$n1=$_POST['no1'];
	$n2=$_POST['no2'];
	$oprnd=$_POST['submit'];

      // $n1 = $_GET 'no1';
      // $n2 = $_GET 'no2';

      $r1 = $n1 + $n2;
      $r2 = $n1 - $n2;
      $r3 = $n1 * $n2;
      $r4 = $n1 / $n2;
   }
   
      echo "<h1>El primer número es $n1 y el segundo número es $n2</h1><br><br>";
      echo "<p>$n1 más $n2 es igual a $r1</p>";
      echo "<p>$n1 menos $n2 es igual a $r2</p>";
      echo "<p>$n1 por $n2 es igual a $r3</p>";
      echo "<p>$n1 entre $n2 es igual a $r4</p><br><br>";

      ?>
      </div>
   </div>

</body>
</html>