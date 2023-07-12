<html>
    <head>
        <title>
            Resultado 
        </title>
    </head>
    <body>
        <h1>Pedido</h1>
        <?php
        //ejercicio prueba 
        $nombre = $_GET ['nombretxt'];
        $pizzaqueso = $_GET ['queso'];
        $pizzapeperoni = $_GET ['peperoni'];
        $pizzaespecial = $_GET ['especial'];

        $p_queso = $pizzaqueso * 100;
        $p_peperoni = $pizzapeperoni * 150;
        $p_especial = $pizzaespecial * 200;


        $precio_total = $p_especial+$p_peperoni+$p_queso;

        echo "El pedido de ", $nombre," fue de: <br>";

        echo "Fueron en total ", $pizzaqueso, " pizzas de queso", " y fueron un total de ", $p_queso, "<br>";
        
        echo "Fueron en total ", $pizzapeperoni, " pizzas de peperoni", " y fueron un total de ", $p_peperoni, "<br>";
        echo "Fueron en total ", $pizzaespecial, " pizzas de queso", " y fueron un total de ", $p_especial, "<br>"; 
        echo "Con un total de $", $precio_total;
        ?>
    </body>
</html> 