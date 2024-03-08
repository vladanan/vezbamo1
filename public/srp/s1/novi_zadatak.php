<?php
//echo "novi zadatak";
//$svi_elementi = rand(0, 1);
//$bitan_raspored = rand(0, 1);
//$ponavljanje = rand(0, 1);

$kombi = rand(1, 3);
$c;
$ponavljanje;

//$svi = rand(0, 1) == 0 ? "prvih " . rand($cifara, 9) : "svih";
$raspored = rand(0, 1) == 0 ? "nije bitan" : "jeste bitan";
//$ponavljanje = rand(0, 1) == 0 ? "ne ponavljaju" : "ponavljaju";

$rez;
$pzpn;

// echo "svi: " . $svi_elementi . ", raspored: ". $bitan_raspored . ", ponavljanje: " . $ponavljanje . "<br>";
// print_r($e);

switch ($kombi) {

  case 1: //permutacije
    $broj_elemenata = rand(5, 9);
    $cifara = $broj_elemenata;

    if (rand(0, 1) == 0) { //rand brojevi sa ponavljanjem
      $c1 = array( //cifre
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9)
      );
      $c = array_rand($c1, $broj_elemenata);
      $da_se_kopira = rand(0, sizeof($c)-1);
      for ($i = 0; $i < rand(1, 3); $i++) { $c[$i] = $c[$da_se_kopira]; }
      $ponavljanje = "ponavljaju";
    } else {
      $c2 = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
      shuffle($c2);
      $c = array_rand($c2, $broj_elemenata);
      $ponavljanje = "ne ponavljaju";
    }

    $deljivih = "";
    $pzpn = "";
    $tip = rand(1, 2);

    switch ($tip) {

      case 1: //  prvi, zadnji, parni, neparni, deljivi
        
        $deljivih = rand(0, 1);
        if ($deljivih == 0) { // prva/zadnja n parna/neparna
          $deljivih = "";
          $pzpn = rand(0, 1) == 0 ? "ako su prva " . rand(2, 4) : "ako su zadnja " . rand(2, 4);
          $pzpn .= rand(0, 1) == 0 ? " broja parna i " : " broja neparna i ";
        }
        else { // n cifreni deljivi sa n 
          $deljivih = "deljivih sa " . rand(2, 5) . " ";
        }

        echo "<br>";
        echo "Koliko " . $cifara . " cifrenih brojeva ";
        echo $deljivih;
        echo "može da se dobije od cifara<br>";
        echo "<table><tr>";
        for ($i = 0; $i < sizeof($c); $i++) { echo "<td>".$c[$i]."</td>"; }
        echo "</tr></table>";
        echo $pzpn;
        echo "ako se cifre " . $ponavljanje . "?";
        echo "<table>";
        echo "<br><br>";

        echo "<img src='res/permutacije.gif'>";
        echo "<audio controls autoplay>
        <source src='res/Kenndog - Beethoven (Lyrics) if you see the homies with the guap.mp3' type='audio/mpeg'>
        </audio>";
        
        break;

      case 2: // tekstualni
        $t1 = array("Na polici ", "U šupi", "U sobi", "U korpi", "U frižideru");
        $t2 = array("knjige", "mačke", "sveće", "jabuke", "veštice");
        $t11 = $t1[rand(0, 4)];
        $t22 = $t2[rand(0, 4)];

        $t3 = array("vatrene: ", "žute: ", "grozne: ", "plave: ", "glupe: ", "crvene: " , "divne: ", "zelene: ");
        $t33 = "";
          $b1 = rand(0, 7);
          $b2 = rand(0, 7);
          if ($b1 == $b2) {
            if ($b1 < 4) {
              $b2 = $b1 + 1;
            } else {
              $b2 = $b1 - 1;
            }
          }
          $t31 = $t3[$b1];
          $t32 = $t3[$b2];
          $b3 = rand(0, 7);
          if ($b3 == $b1 or $b3 == $b2) {
            for ($i = 0; $i < 20; $i = $i + rand(1, 2)) {
              $treci = rand(0, 5);
              if ($t3[$treci] != $t31 and $t3[$treci] != $t31) {
                $t33 = $t3[$treci];
              }
            }
          } else {
            $t33 = $t3[$b3];
          }

        echo "<br>";
        echo $t11 . " se nalaze " . $t22 . " sledećih boja:<br>";
        echo $t31 . rand(1, 5) . ", ";
        echo $t32 . rand(1, 5) . " i ";
        echo $t33 . rand(1, 5) . ".<br>";
        echo "Na koliko načina se one mogu rasporediti tako da " . $t22 . " iste boje budu jedna do druge?";
        echo "<br><br>";

        echo "<img src='res/patke.webp'>";
        echo "<audio controls autoplay>
        <source src='res/Rokeri s Moravu - Krkenzi kikiriki evri dej.mp3' type='audio/mpeg'>
        </audio>";
        break;

      default:
          break;
    }

    break;

  case 2:
    //echo "varijacije";
    $broj_elemenata = rand(0, 9);
    $cifara = rand(3, 9);

    if (rand(0, 1) == 0) { //rand brojevi sa ponavljanjem
      $c1 = array( //cifre
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9),
        rand(0, 9)
      );
      $c = array_rand($c1, sizeof($c1));
      $da_se_kopira = rand(0, sizeof($c)-1); //radi dupliranja nekih random elemenata
      for ($i = 0; $i < rand(1, 3); $i++) { $c[$i] = $c[$da_se_kopira]; }
      $ponavljanje = "ponavljaju";
    } else {
      $c2 = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
      shuffle($c2);
      $c = array_rand($c2, sizeof($c2));
      $ponavljanje = "ne ponavljaju";
    }

    $pn = "";
    $pzpn = "";

    if (rand(1, 2) == 1) { //samo parni/neparni ili prvih/zadnjih parnih/neparnih
      $pn = rand(0, 1) == 0 ? " parnih" : " neparnih";
    } else {
      $pzpn = rand(0, 1) == 0 ? "ako su prva " . rand(2, 4) : "ako su zadnja " . rand(2, 4);
      $pzpn .= rand(0, 1) == 0 ? " broja parna i " : " broja neparna i ";
    }
        
    echo "<br>";
    echo "Koliko " . $cifara . " cifrenih" . $pn . " brojeva ";
    echo "može da se dobije od cifara<br>";
    echo "<table><tr>";
    for ($i = 0; $i < sizeof($c); $i++) { echo "<td>".$c[$i]."</td>"; }
    echo "</tr></table>";
    echo $pzpn;
    echo "ako se cifre " . $ponavljanje . "?";
    echo "<table>";
    echo "<br><br>";

    echo "<img src='res/varijacije.gif'>";
    echo "<audio controls autoplay>
        <source src='res/Sammy K - Fatal Attraction (Lyrics) hell naw better believe i aint that one.mp3' type='audio/mpeg'>
        </audio>";
    
    break;

  case 3;
    echo "čekamo kombinacije :)<br><br>";
    echo "<img src='res/kombinacije.gif'>";
    break;

  default;
    break;
}

// echo "<tr><td style='border: 0px solid black'>";
// echo "<button class='button button2' onclick='resenje(". $rez .")'>Решење:</button>";
// echo "</td>";
// echo "<td id='rez' style='border: 0px solid black'></td></tr></table>";

/*echo "
<img width='525' src='res/brojevna-prava2.png'>
<tr>
    <td>$a</td>
    <td>$op2</td>
    <td>$b</td>
    <td>=</td>
    <td><input type='text' style='font-size:26px' id='r' name='r' value=''></td>
</tr>";*/




?>

<!--

<button class='button button2' onclick='resenje(<?php echo $a; ?>, "<?php echo $op2; ?>", <?php echo $b; ?>)'>Решење?</button>

type='button' onclick="resenje()" 
-->