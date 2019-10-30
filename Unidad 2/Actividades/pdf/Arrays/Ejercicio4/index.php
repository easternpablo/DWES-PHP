<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            $juegos["Accion"] = ["GTA 5", "Dishonored 2", "Call of Duty"];
            $juegos["Aventura"] = ["Assassins Creed", "Tomb Raider", "The Last of Us"];
            $juegos["Deporte"] = ["Fifa", "Pes", "Moto G"];
            
        ?>
        <table border="2px">
            <tr>
                <?php 
                    foreach($juegos as $key => $valor){
                        echo "<th colspan='3'> $key </th>";
                    }
                ?>
            </tr>
            <tr>
                <?php
                    foreach($juegos as $valor){
                        echo "<td> $valor </td>";
                    }
                ?>
            </tr>
        </table>
    </body>
</html>
