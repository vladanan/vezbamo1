<?php
//echo "novi zadatak";
  $a = rand(0, 10);
  $op1 = rand(0, 1);
  $b = rand(0, 10);

  if ($op1 == 0) {
    if ($a < $b) {
      $tmp = $a;
      $a = $b;
      $b = $tmp;
    }
  } else {
    while ($a+$b > 10) {
      $a = rand(0, 10);
      $b = rand(0, 10);
    }
  }
  
  $op2;
  
  if ($op1 == 0) {
    $op2 = "-";
  } else {
    $op2 = "+";
  }

echo "
<img width='525' src='res/brojevna-prava2.png'>
<tr>
    <td>$a</td>
    <td>$op2</td>
    <td>$b</td>
    <td>=</td>
    <td><input type='text' style='font-size:26px' id='r' name='r' value=''></td>
</tr>";


echo "<table>";
echo "<tr><td style='border: 0px solid black'>";
echo "<button class='button button2' onclick='resenje(".$a.","."\"".$op2."\"".",".$b.")'>Решење:</button>";
echo "</td>";
echo "<td id='rez' style='border: 0px solid black'></td></tr></table>";

?>

<!--

<button class='button button2' onclick='resenje(<?php echo $a; ?>, "<?php echo $op2; ?>", <?php echo $b; ?>)'>Решење?</button>

type='button' onclick="resenje()" 
-->