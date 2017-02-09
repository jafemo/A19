<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de actores</title>
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
        $resultado1=$tronesDB->actores();
        while($fila=$resultado1->fetch_assoc()){
          echo "Nombre actor: ".$fila["full_desc"]."<br>";

      }
    }
      ?>
      </tr>
    </table>
  </body>
</html>
