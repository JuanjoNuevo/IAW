<?php
echo <h1>"Juan José Gil Luna Práctica 2.2 IAW"</h1>
echo <h3>"Coste de ordenador"</h3>
echo <a href="https://www.pccomponentes.com/pccom-bronze-white-ryzen-3-3100-16gb-240gb-ssd-1tb-gtx1650">Ordenador</a>
$cpu=629,96
echo <a href="https://www.pccomponentes.com/benq-gl2480e-24-led-fullhd">Monitor</a>
$monitor=125,01
echo <a href="https://www.pccomponentes.com/mars-gaming-mk320-teclado-hibrido-rgb-negro">Teclado</a>
$teclado=24,90
echo <a href="https://www.pccomponentes.com/tempest-ms-300-rgb-soldier-raton-gaming-4000dpi">Raton</a>
$raton=9,99
echo <a href="https://www.pccomponentes.com/hp-officejet-pro-8210-impresora-color-wifi-duplex">Impresora</a>
$impresora=96,98
$iva=1,21
$total=($cpu+$monitor+$teclado+$raton+$impresora)*$iva
echo <h2>"EL TOTAL DEL COMBO ES: "$total</h2>
?>