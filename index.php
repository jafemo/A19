<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta charset="utf-8">
    <title>Pagina principal game of thrones</title>
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

      if($tronesDB->getErrorConexion()==false){
        $resultado1=$tronesDB->titles();
        while($fila=$resultado1->fetch_assoc()){
          echo "Titulo: ".$fila["title"]."<br>".
          "Resumen: ".$fila["plot"]."<br>".
          "Creadores: ".$fila["creators"]."<br>".
          "Inicio: ".$fila["season_start"]."<br>".
          "Final: ".$fila["season_end"]."<br>".
          "Generos: ".$fila["generes"];
      }
      }else{
        echo "Esta mal";
      }
      ?>
      </tr>
    </table>
  </body>
</html>
