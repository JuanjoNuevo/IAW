<?php
echo "<h1 style=background-color:red>Juan José Gil Luna Práctica 2.2 IAW</h1>";
echo "<h3 style=background-color:blue>Coste de ordenador</h3>";
echo "<a href=https://www.pccomponentes.com/pccom-bronze-white-ryzen-3-3100-16gb-240gb-ssd-1tb-gtx1650>Ordenador</a>";
$cpu=629.96;
echo " = 629,96€<br>";
echo "<a href=https://www.pccomponentes.com/benq-gl2480e-24-led-fullhd>Monitor</a>";
echo " = 125,01€<br>";
$monitor=125.01;
echo "<a href=https://www.pccomponentes.com/mars-gaming-mk320-teclado-hibrido-rgb-negro>Teclado</a>";
echo " = 24,90€<br>";
$teclado=24.90;
echo "<a href=https://www.pccomponentes.com/tempest-ms-300-rgb-soldier-raton-gaming-4000dpi>Raton</a>";
echo " = 9,99€<br>";
$raton=9.99;
echo "<a href=https://www.pccomponentes.com/hp-officejet-pro-8210-impresora-color-wifi-duplex>Impresora</a>";
echo " = 96,98€<br>";
$impresora=96.98;
$iva=1.21;
$total1=($cpu+$monitor+$teclado+$raton+$impresora);
$total2=(($cpu+$monitor+$teclado+$raton+$impresora)*$iva);
echo "<h2 style=background-color:green>EL TOTAL DEL COMBO ES: $total1 €</h2>";
echo "<h2 style=background-color:green>EL TOTAL DEL COMBO (IVA DEL 21% INCLUIDO, PRECIO FINAL) ES: $total2 €</h2>";
?>
