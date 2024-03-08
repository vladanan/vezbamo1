<html lang="en">

  <head>
  <title>do10</title>
    <link rel="stylesheet" href="..\..\zadatak.css">
  </head>

  <body>

    <h1>do 10</h1>

    <button id="dugme_za_zadatak1" class="button button1" onclick="noviZadatak()">Нови задатак!</button>
      
    <table id="zadatak"></table>

    <!--
    form action="resenje.php"
    onsubmit="resenje()"
    -->

    <p id="resenje"></p>

    <form hidden id="dugme_za_zadatak2" action="do10.php" method="get">
      <input class="button button1" type="submit" name="dugme" value="Нови задатак?" />
    </form>
    
    <script>
      function noviZadatak() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
          document.getElementById("zadatak").innerHTML = xhttp.responseText;
          //document.getElementById("dugme_za_zadatak1").style.color = "#4CAF50";
          document.getElementById("dugme_za_zadatak1").style.display = "none";
        }
        xhttp.open("GET", "novi_zadatak.php", true);
        xhttp.send();
      }

      function resenje(a, op, b) {
        var r = document.getElementById("r").value;
        //alert("uneto rešenje:" + r);
        var rr = "";
        var tacno = 0;
        if (op == '-') {
          var rr = a - b;
        } else {
          var rr = a + b;
        }
        document.getElementById("rez").innerHTML = rr;
        document.getElementById("rez").style.border = "1px solid black";
        if (rr == r) {
          tacno = 1;
        } else {
          tacno = 0;
        }
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
          document.getElementById("resenje").innerHTML = xhttp.responseText;
          document.getElementById("dugme_za_zadatak2").removeAttribute("hidden");
        }
        xhttp.open("GET", "resenje.php?rr=" + rr + "&rez=" + tacno, true);
        xhttp.send();
      }
    </script>

  </body>
</html>
