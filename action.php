<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="design.css">
    <title>Tip Calculator</title>
  </head>
  <body>
    <?php
      $Bill = $_POST['bill'];
      $Tip = $_POST['tip'];
      $number_error = !is_numeric ($Bill) || $Bill < "10";
      $tip_error = $Tip == NULL;
      $clean = $Bill == NULL && $tip == NULL;

      if($clean){
        echo '<section>';
      }elseif($tip_error || $number_error){
        echo '<section class=error>';
      }else{
        echo '<section class=success>';
      }

      ?>
      <h2>Tip Calculator</h2>
      <form action="action.php" method="post">
        Bill Subtotal $:
        <input type="text" name="bill" value="">
        <br>
        Tip Percentage:
        <br>
        <?php
          for ($i=10; $i <=20 ; $i=$i+5) {
            echo "<input type=radio name=tip value=.$i.>$i% </input>" ;
          }
         ?>
        <br>
        <input id="button" type="submit" >
      </form>
      <?php
        if($number_error){
          echo '<p>Must enter a number Greater than 10</p>';
        }elseif($tip_error){
          echo '<p>Must select a tip percentage</p>';
        }else{
          echo "Tip is $";
          echo money_format('%i', $Bill * $Tip) . "<br>";
          echo "Total Cost is $";
          echo money_format('%i', $Bill + ($Bill * $Tip));
        }
       ?>
    </section>
  </body>
</html>
