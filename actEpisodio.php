<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actores por episodio</title>
  </head>
  <body>
    <!-- MENU -->
    <table border="2">
      <tr>
        <th>GAME OF THRONES</th>
        <th><a href="index.php">Inicio</a></th>
        <th><a href="actores.php">Actores</a></th>
        <th><a href="actEpisodio.php">Actores por episodio</a></th>
      </tr>
    </table>
    <!-- MENU -->
    <table>
      <tr>
        <?php
        include "dbGoT.php";
        $tronesDB= new dbGoT();

        if ($tronesDB->getErrorConexion()==false){
          $resultado2=$tronesDB->actEpisodio();
          while ($fila=$resultado2->fetch_assoc()) {
            echo "Nombre: ".$fila["name"]."<br>".
            "Nombre en la serie: ".$fila["serie_name"]."<br>".
            "Episodio: ".$fila["episode"]."<br>".
            "Temporada: ".$fila["season"]."<br>".
            "Titulo: ".$fila["title"]. "<br><br>";
          }
        }

        ?>
      </tr>
    </table>
  </body>
</html>
