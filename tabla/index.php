<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="jquery.js"</script>></script>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>


<div id="demo">
  <h1 style="text-shadow: 1px 1px 1px steelblue;">Tabla de Información de los Residentes en del Edificio Conjunto Residencial Lotería de Oriente</h1>
  
  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
  <div class="table-responsive-vertical shadow-z-1">
  <!-- Table starts here -->
  <table id="table" class="table table-hover table-mc-light-blue">
      <thead style="background: steelblue;">
        <tr>
          <th style="color: white; font-weight: bold;">Apartamento</th>
          <th style="color: white; font-weight: bold;">Propietario</th>
          <th style="color: white; font-weight: bold;">Telf Propietario</th>
          <th style="color: white; font-weight: bold;">Telf Inteligente</th>
          <th style="color: white; font-weight: bold;">Correo del Propietario</th>
          <th style="color: white; font-weight: bold;">Inquilino</th>
          <th style="color: white; font-weight: bold;">Telf Inquilino</th>
          <th style="color: white; font-weight: bold;">Telf Inteligente</th>
          <th style="color: white; font-weight: bold;">Correo del Inquilino</th>
          <th style="color: white; font-weight: bold;">Telf fijo</th>
          <th style="color: white; font-weight: bold;" id="users">Usuarios</th>
          <th style="color: white; font-weight: bold;">Codigos</th>
          <th style="color: white; font-weight: bold;">Serial</th>
          <th style="color: white; font-weight: bold;">Observaciones</th>
          <th style="color: white; font-weight: bold;">Marca</th>
          <th style="color: white; font-weight: bold;">Modelo</th>
          <th style="color: white; font-weight: bold;">Placa</th>
          <th style="color: white; font-weight: bold;">Color</th>
          <th style="color: white; font-weight: bold;">Puestos</th>
        </tr>
      </thead>
      <tbody> 


      <?php 

          require '../conexion.php';

          $query = "SELECT * FROM Condominio"; 
          $result =mysql_query($query);

          if (!$result) {
            echo "error locoooo";
          }

          while($row=mysql_fetch_row($result)){

      ?>
        <tr>
          <td data-title="Apartamento"><?php echo $row['0']; ?></td>
          <td data-title="Propietario"><?php echo $row['1']; ?></td>
          <td data-title="Celular del Propietario"><?php echo $row['2']; ?></td>
          <td data-title="Telf Inteligente"><?php echo $row['3']; ?></td>
          <td data-title="Correo del Propietario"><?php echo $row['4']; ?></td>
          <td data-title="Inquilino"><?php echo $row['5']; ?></td>
          <td data-title="Telf del Inquilino"><?php echo $row['6']; ?></td>
          <td data-title="Telf Inteligente"><?php echo $row['7']; ?></td>
          <td data-title="Correo del Inquilino"><?php echo $row['8']; ?></td>
          <td data-title="Telf Fijo"><?php echo $row['9']; ?></td>
          <!--<td data-title="Usuarios"><?php echo $row['10']; ?></td>
          <td data-title="Codigos"><?php echo $row['11']; ?></td>
          <td data-title="Serial"><?php echo $row['12']; ?></td>
          <td data-title="Observaciones"><?php echo $row['13']; ?></td>
          <td data-title="Marca"><?php echo $row['14']; ?></td>
          <td data-title="Modelo"><?php echo $row['15']; ?></td>
          <td data-title="Placa"><?php echo $row['16']; ?></td>
          <td data-title="Color"><?php echo $row['17']; ?></td>
          <td data-title="Puestos"><?php echo $row['18']; ?></td>-->
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  
  <!-- Table Constructor change table classes, you don't need it in your project -->
  <div style="width: 50%; display:block; vertical-align: top;">
  <h2 style="font-weight: bold; text-align: left;">Personalizar tabla</h2>
  <p>
    <label for="table-bordered">Bordes inferiores:</label>
    <select id="table-bordered" name="table-bordered">
      <option selected value="">No</option>
      <option value="table-bordered">Yes</option>
    </select>
  </p>
  <p>
    <label for="table-striped">Color intercalado:</label>
    <select id="table-striped" name="table-striped">
      <option selected value="">No</option>
      <option value="table-striped">Yes</option>
    </select>
  </p>
  <p>
    <label for="table-hover">Efecto de mouse:</label>
    <select id="table-hover" name="table-hover">
      <option value="">No</option>
      <option selected value="table-hover">Yes</option>
    </select>
  </p>
  <p>
    <label for="table-color">Color de la tabla:</label>
    <select id="table-color" name="table-color">
      <option value="">Predeterminado</option>
      <option value="table-mc-red">Rojo</option>
      <option value="table-mc-pink">Rosado</option>
      <option value="table-mc-purple">Morado</option>
      <option value="table-mc-deep-purple">Morado profundo</option>
      <option value="table-mc-indigo">Indigo</option>
      <option value="table-mc-blue">Azul</option>
      <option selected value="table-mc-light-blue">Azul claro</option>
      <option value="table-mc-cyan">Ciánico</option>
      <option value="table-mc-teal">Trullo</option>
      <option value="table-mc-green">Verde</option>
      <option value="table-mc-light-green">Verde claro</option>
      <option value="table-mc-lime">Lima</option>
      <option value="table-mc-yellow">Amarillo</option>
      <option value="table-mc-amber">Ámbar</option>
      <option value="table-mc-orange">Naranja</option>
      <option value="table-mc-deep-orange">Naranja profundo</option>
    </select>
  </p>  
  </div>
  
</div>

<style>
  
/* -- import Roboto Font ---------------------------- */
@import "https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic";
/* -- You can use this tables in Bootstrap (v3) projects. -- */
/* -- Box model ------------------------------- */
*,
*:after,
*:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
/* -- Demo style ------------------------------- */
html,
body {
  position: relative;
  min-height: 100%;
  height: 100%;
}
html {
  position: relative;
  overflow-x: hidden;
  margin: 16px;
  padding: 0;
  min-height: 100%;
  font-size: 62.5%;
}
body {
  font-family: 'RobotoDraft', 'Roboto', 'Helvetica Neue, Helvetica, Arial', sans-serif;
  font-style: normal;
  font-weight: 300;
  font-size: 1.4rem;
  line-height: 2rem;
  letter-spacing: 0.01rem;
  color: #212121;
  background-color: #f5f5f5;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
}
#demo {
  margin: 20px auto;

}
#demo h1 {
  font-size: 2.4rem;
  line-height: 3.2rem;
  letter-spacing: 0;
  font-weight: 300;
  color: #212121;
  text-transform: inherit;
  margin-bottom: 1rem;
  text-align: center;
}
#demo h2 {
  font-size: 1.5rem;
  line-height: 2.8rem;
  letter-spacing: 0.01rem;
  font-weight: 400;
  color: #212121;
  text-align: center;
}
.shadow-z-1 {
  -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
  -moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
}
/* -- Material Design Table style -------------- */

.table-responsive-vertical{ }

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 2rem;
  background-color: #fff;
}
.table > thead > tr,
.table > tbody > tr,
.table > tfoot > tr {
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  text-align: center;
  padding: 0.5rem;
  vertical-align: top;
  border-top: 0;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.table > thead > tr > th {
  font-weight: 400;
  color: #757575;
  vertical-align: bottom;
  border-bottom: 1px solid rgba(0, 0, 0, 0.12);
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 1px solid rgba(0, 0, 0, 0.12);
}
.table .table {
  background-color: #fff;
}
.table .no-border {
  border: 0;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 0.8rem;
}
.table-bordered {
  border: 0;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 0;
  border-bottom: 1px solid #e0e0e0;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: rgba(0, 0, 0, 0.12);
}


@media screen and (max-width: 768px) {

.table {
  margin-left: 0%;
}

  .table-responsive-vertical > .table {
    margin-bottom: 0;
    background-color: transparent;
  }
  .table-responsive-vertical > .table > thead,
  .table-responsive-vertical > .table > tfoot {
    display: none;
  }
  .table-responsive-vertical > .table > tbody {
    display: block;
  }
  .table-responsive-vertical > .table > tbody > tr {
    display: block;
    border: 1px solid #e0e0e0;
    border-radius: 2px;
    margin-bottom: 1.6rem;
  }
  .table-responsive-vertical > .table > tbody > tr > td {
    background-color: #fff;
    display: block;
    vertical-align: middle;
    text-align: right;
  }
  .table-responsive-vertical > .table > tbody > tr > td[data-title]:before {
    content: attr(data-title);
    float: left;
    font-size: inherit;
    font-weight: 400;
    color: #757575;
  }
  .table-responsive-vertical.shadow-z-1 {
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
  }
  .table-responsive-vertical.shadow-z-1 > .table > tbody > tr {
    border: none;
    -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
    -moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
  }
  .table-responsive-vertical > .table-bordered {
    border: 0;
  }
  .table-responsive-vertical > .table-bordered > tbody > tr > td {
    border: 0;
    border-bottom: 1px solid #e0e0e0;
  }
  .table-responsive-vertical > .table-bordered > tbody > tr > td:last-child {
    border-bottom: 0;
  }
  .table-responsive-vertical > .table-striped > tbody > tr > td,
  .table-responsive-vertical > .table-striped > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical > .table-striped > tbody > tr > td:nth-child(odd) {
    background-color: #f5f5f5;
  }
  .table-responsive-vertical > .table-hover > tbody > tr:hover > td,
  .table-responsive-vertical > .table-hover > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical > .table-hover > tbody > tr > td:hover {
    background-color: rgba(0, 0, 0, 0.12);
  }
}
.table-striped.table-mc-red > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-red > tbody > tr:nth-child(odd) > th {
  background-color: #fde0dc;
}
.table-hover.table-mc-red > tbody > tr:hover > td,
.table-hover.table-mc-red > tbody > tr:hover > th {
  background-color: #f9bdbb;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-red > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-red > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-red > tbody > tr > td:nth-child(odd) {
    background-color: #fde0dc;
  }
  .table-responsive-vertical .table-hover.table-mc-red > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-red > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-red > tbody > tr > td:hover {
    background-color: #f9bdbb;
  }
}
.table-striped.table-mc-pink > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-pink > tbody > tr:nth-child(odd) > th {
  background-color: #fce4ec;
}
.table-hover.table-mc-pink > tbody > tr:hover > td,
.table-hover.table-mc-pink > tbody > tr:hover > th {
  background-color: #f8bbd0;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-pink > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-pink > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-pink > tbody > tr > td:nth-child(odd) {
    background-color: #fce4ec;
  }
  .table-responsive-vertical .table-hover.table-mc-pink > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-pink > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-pink > tbody > tr > td:hover {
    background-color: #f8bbd0;
  }
}
.table-striped.table-mc-purple > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-purple > tbody > tr:nth-child(odd) > th {
  background-color: #f3e5f5;
}
.table-hover.table-mc-purple > tbody > tr:hover > td,
.table-hover.table-mc-purple > tbody > tr:hover > th {
  background-color: #e1bee7;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-purple > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-purple > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-purple > tbody > tr > td:nth-child(odd) {
    background-color: #f3e5f5;
  }
  .table-responsive-vertical .table-hover.table-mc-purple > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-purple > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-purple > tbody > tr > td:hover {
    background-color: #e1bee7;
  }
}
.table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) > th {
  background-color: #ede7f6;
}
.table-hover.table-mc-deep-purple > tbody > tr:hover > td,
.table-hover.table-mc-deep-purple > tbody > tr:hover > th {
  background-color: #d1c4e9;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr > td:nth-child(odd) {
    background-color: #ede7f6;
  }
  .table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr > td:hover {
    background-color: #d1c4e9;
  }
}
.table-striped.table-mc-indigo > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-indigo > tbody > tr:nth-child(odd) > th {
  background-color: #e8eaf6;
}
.table-hover.table-mc-indigo > tbody > tr:hover > td,
.table-hover.table-mc-indigo > tbody > tr:hover > th {
  background-color: #c5cae9;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr > td:nth-child(odd) {
    background-color: #e8eaf6;
  }
  .table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr > td:hover {
    background-color: #c5cae9;
  }
}
.table-striped.table-mc-blue > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-blue > tbody > tr:nth-child(odd) > th {
  background-color: #e7e9fd;
}
.table-hover.table-mc-blue > tbody > tr:hover > td,
.table-hover.table-mc-blue > tbody > tr:hover > th {
  background-color: #d0d9ff;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-blue > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-blue > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-blue > tbody > tr > td:nth-child(odd) {
    background-color: #e7e9fd;
  }
  .table-responsive-vertical .table-hover.table-mc-blue > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-blue > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-blue > tbody > tr > td:hover {
    background-color: #d0d9ff;
  }
}
.table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) > th {
  background-color: #e1f5fe;
}
.table-hover.table-mc-light-blue > tbody > tr:hover > td,
.table-hover.table-mc-light-blue > tbody > tr:hover > th {
  background-color: #b3e5fc;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr > td:nth-child(odd) {
    background-color: #e1f5fe;
  }
  .table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr > td:hover {
    background-color: #b3e5fc;
  }
}
.table-striped.table-mc-cyan > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-cyan > tbody > tr:nth-child(odd) > th {
  background-color: #e0f7fa;
}
.table-hover.table-mc-cyan > tbody > tr:hover > td,
.table-hover.table-mc-cyan > tbody > tr:hover > th {
  background-color: #b2ebf2;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr > td:nth-child(odd) {
    background-color: #e0f7fa;
  }
  .table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr > td:hover {
    background-color: #b2ebf2;
  }
}
.table-striped.table-mc-teal > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-teal > tbody > tr:nth-child(odd) > th {
  background-color: #e0f2f1;
}
.table-hover.table-mc-teal > tbody > tr:hover > td,
.table-hover.table-mc-teal > tbody > tr:hover > th {
  background-color: #b2dfdb;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-teal > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-teal > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-teal > tbody > tr > td:nth-child(odd) {
    background-color: #e0f2f1;
  }
  .table-responsive-vertical .table-hover.table-mc-teal > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-teal > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-teal > tbody > tr > td:hover {
    background-color: #b2dfdb;
  }
}
.table-striped.table-mc-green > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-green > tbody > tr:nth-child(odd) > th {
  background-color: #d0f8ce;
}
.table-hover.table-mc-green > tbody > tr:hover > td,
.table-hover.table-mc-green > tbody > tr:hover > th {
  background-color: #a3e9a4;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-green > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-green > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-green > tbody > tr > td:nth-child(odd) {
    background-color: #d0f8ce;
  }
  .table-responsive-vertical .table-hover.table-mc-green > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-green > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-green > tbody > tr > td:hover {
    background-color: #a3e9a4;
  }
}
.table-striped.table-mc-light-green > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-light-green > tbody > tr:nth-child(odd) > th {
  background-color: #f1f8e9;
}
.table-hover.table-mc-light-green > tbody > tr:hover > td,
.table-hover.table-mc-light-green > tbody > tr:hover > th {
  background-color: #dcedc8;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr > td:nth-child(odd) {
    background-color: #f1f8e9;
  }
  .table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr > td:hover {
    background-color: #dcedc8;
  }
}
.table-striped.table-mc-lime > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-lime > tbody > tr:nth-child(odd) > th {
  background-color: #f9fbe7;
}
.table-hover.table-mc-lime > tbody > tr:hover > td,
.table-hover.table-mc-lime > tbody > tr:hover > th {
  background-color: #f0f4c3;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-lime > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-lime > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-lime > tbody > tr > td:nth-child(odd) {
    background-color: #f9fbe7;
  }
  .table-responsive-vertical .table-hover.table-mc-lime > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-lime > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-lime > tbody > tr > td:hover {
    background-color: #f0f4c3;
  }
}
.table-striped.table-mc-yellow > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-yellow > tbody > tr:nth-child(odd) > th {
  background-color: #fffde7;
}
.table-hover.table-mc-yellow > tbody > tr:hover > td,
.table-hover.table-mc-yellow > tbody > tr:hover > th {
  background-color: #fff9c4;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr > td:nth-child(odd) {
    background-color: #fffde7;
  }
  .table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr > td:hover {
    background-color: #fff9c4;
  }
}
.table-striped.table-mc-amber > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-amber > tbody > tr:nth-child(odd) > th {
  background-color: #fff8e1;
}
.table-hover.table-mc-amber > tbody > tr:hover > td,
.table-hover.table-mc-amber > tbody > tr:hover > th {
  background-color: #ffecb3;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-amber > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-amber > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-amber > tbody > tr > td:nth-child(odd) {
    background-color: #fff8e1;
  }
  .table-responsive-vertical .table-hover.table-mc-amber > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-amber > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-amber > tbody > tr > td:hover {
    background-color: #ffecb3;
  }
}
.table-striped.table-mc-orange > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-orange > tbody > tr:nth-child(odd) > th {
  background-color: #fff3e0;
}
.table-hover.table-mc-orange > tbody > tr:hover > td,
.table-hover.table-mc-orange > tbody > tr:hover > th {
  background-color: #ffe0b2;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-orange > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-orange > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-orange > tbody > tr > td:nth-child(odd) {
    background-color: #fff3e0;
  }
  .table-responsive-vertical .table-hover.table-mc-orange > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-orange > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-orange > tbody > tr > td:hover {
    background-color: #ffe0b2;
  }
}
.table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) > td,
.table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) > th {
  background-color: #fbe9e7;
}
.table-hover.table-mc-deep-orange > tbody > tr:hover > td,
.table-hover.table-mc-deep-orange > tbody > tr:hover > th {
  background-color: #ffccbc;
}
@media screen and (max-width: 767px) {
  .table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr > td,
  .table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) {
    background-color: #fff;
  }
  .table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr > td:nth-child(odd) {
    background-color: #fbe9e7;
  }
  .table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr:hover > td,
  .table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr:hover {
    background-color: #fff;
  }
  .table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr > td:hover {
    background-color: #ffccbc;
  }
}

#users{
  width: 10%;
}



</style>


<script>
  
/**
 * Created by Kupletsky Sergey on 05.11.14.
 *
 * Material Design Responsive Table
 * Tested on Win8.1 with browsers: Chrome 37, Firefox 32, Opera 25, IE 11, Safari 5.1.7
 * You can use this table in Bootstrap (v3) projects. Material Design Responsive Table CSS-style will override basic bootstrap style.
 * JS used only for table constructor: you don't need it in your project
 */

$(document).ready(function() {

    var table = $('#table');

    // Table bordered
    $('#table-bordered').change(function() {
        var value = $( this ).val();
        table.removeClass('table-bordered').addClass(value);
    });

    // Table striped
    $('#table-striped').change(function() {
        var value = $( this ).val();
        table.removeClass('table-striped').addClass(value);
    });
  
    // Table hover
    $('#table-hover').change(function() {
        var value = $( this ).val();
        table.removeClass('table-hover').addClass(value);
    });

    // Table color
    $('#table-color').change(function() {
        var value = $(this).val();
        table.removeClass(/^table-mc-/).addClass(value);
    });
});

// jQuery’s hasClass and removeClass on steroids
// by Nikita Vasilyev
// https://github.com/NV/jquery-regexp-classes
(function(removeClass) {

  jQuery.fn.removeClass = function( value ) {
    if ( value && typeof value.test === "function" ) {
      for ( var i = 0, l = this.length; i < l; i++ ) {
        var elem = this[i];
        if ( elem.nodeType === 1 && elem.className ) {
          var classNames = elem.className.split( /\s+/ );

          for ( var n = classNames.length; n--; ) {
            if ( value.test(classNames[n]) ) {
              classNames.splice(n, 1);
            }
          }
          elem.className = jQuery.trim( classNames.join(" ") );
        }
      }
    } else {
      removeClass.call(this, value);
    }
    return this;
  }

})(jQuery.fn.removeClass);

</script>

<!-- <script>

var actualizar = function(){

    $.post("index.php", function(datos){
            $("body").html(datos);

        });                  
  };
                 setInterval( actualizar , 15000);
  </script> -->
</script>
<footer style="background: steelblue; padding: 10px; width:100%">
  <center><h4 style="color: white; font-size: 20px; letter-spacing: 2px" >Sistema elaborado por BRIAN HABIB</h4><p style="color: white;">Todos los derechos reservados 2017</p></center> 
</footer>
</body>
</html>