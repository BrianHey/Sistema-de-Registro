<?php
		include 'registro.php';  
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

<div class="contenedor-formulario">
  <div class="wrap">
  <center><h1 style="color: steelblue;">Registro de Datos</h1><h4 style="color: darkblue">  Propietarios e inquilinos del conjunto residencial Lotería de Oriente </h4></center>

    <hr style="background: gray; padding: 1px; border-radius: 50%">

    <form action="envio.php" class="formulario" name="formulario_registro" method="POST">
      <div style="width: 80%; margin-left: 10%">
        <div class="input-group">
          
          <label class="label" for="nombre" style="font-size: 20PX">Apartamento:</label><br><br>

          <select style='margin-left:20px' name='NumeroApto'><?php

              for ($i=1; $i <=14; $i++) { 
                echo "<option> $i </option>";
              }

           ?></select>
           <select style='margin-left:20px' name="LetraApto">

              <option> A </option>
              <option> B </option>
              <option> C </option>
              <option> D </option>

           </select>

          
        </div>
        
        <div class="input-group">
          <input type="text" id="TelefonoFijo" name="TelefonoFijoApartamento">
          <label class="label" for="pass2" style="font-size: 20px">Teléfono fijo del apartamento: </label>
        </div>

        
<div style="border: solid 2px; border-color: darkblue; padding: 15px;"> 
        <div class="input-group">
          <input type="text" id="Propietario" name="Propietario" maxlength="30">
          <label class="label" for="correo" style="font-size: 20px">Propietario: </label>
        </div>
    <div style="margin-left: 70px;">
       <div class="input-group" >
          <br><br><input type="text" id="TelefonoCelular" name="TelefonoCelularPropietario">
            <h5 style=" color: #303F9F; margin-left: 20px"> Indique si su teléfono es inteligente </h5>
       
        <div style="margin-left: 30px; color: #303F9F;">

        <input type="radio" name="InteligenteTelefonoPropietario" value="Si" checked> Si
        <input type="radio" name="InteligenteTelefonoPropietario" value="No"> No

        </div>
          <label class="label" for="pass2">Teléfono celular del Propietario: </label>
        </div>
      
         <div class="input-group">
          <input type="text" id="Correo" name="CorreoPropietario">
          <label class="label" for="pass2">Correo del Propietario: </label>
        </div>
  </div>

</div>

<br>
<div style="border: solid 2px; border-color: darkblue; padding: 15px;"> 
         <div class="input-group">
          <input type="text" id="Inquilinos" name="Inquilino">
          <label class="label" for="correo" style="font-size: 20px">Inquilino: </label>
        </div>
 <div style="margin-left: 70px;">
        <div class="input-group" >
          <br><br><input type="text" id="TelefonoCelular" name="TelefonoCelularInquilino">
            <h5 style=" color: #303F9F; margin-left: 20px"> Indique si su teléfono es inteligente </h5>
        <div style="margin-left: 30px; color: #303F9F;">

        <input type="radio" name="InteligenteTelefonoInquilino" value="Si" checked> Si
        <input type="radio" name="InteligenteTelefonoInquilino" value="No"> No

        </div>
          <label class="label" for="pass2">Teléfono celular del Inquilino: </label>
        </div>

         <div class="input-group">
          <input type="text" id="Correo" name="CorreoInquilino">
          <label class="label" for="pass2">Correo del Inquilino: </label>
        </div>
     </div>   

</div>
<br>
         
    <br>

  
<div style="border: solid 2px; border-color: darkblue; padding: 15px;"> 

          <h3 style="color: darkblue; font-weight: bold; text-align: center;"> Codigos Llaves de Acceso </h3>
    <br>


        <table style="width: 100%" id="tablausuarios">
          
            <thead>
                <tr>
                      <th>Usuarios</th>
                      <th>Codigos</th>
                      <th>Serial</th>
                      <th>Observaciones</th>
                </tr>
            </thead>
            
            <tbody>
                    <tr>
                        <td><input type="" name="Usuario1"></td>
                        <td><input type="" name="CodigoUsuario1"></td>
                        <td><input type="" name="SerialUsuario1"></td>
                        <td><input type="" name="Observaciones"></td>
                    </tr>
                    
                      <tr>
                        <td><input type="" name="Usuario2"></td>
                        <td><input type="" name="CodigoUsuario2"></td>
                        <td><input type="" name="SerialUsuario2"></td>
                    </tr>
                      <tr>
                        <td><input type="" name="Usuario3"></td>
                        <td><input type="" name="CodigoUsuario3"></td>
                        <td><input type="" name="SerialUsuario3"></td>
                    </tr>
                      <tr>
                        <td><input type="" name="Usuario4"></td>
                        <td><input type="" name="CodigoUsuario4"></td>
                        <td><input type="" name="SerialUsuario4"></td>
                    </tr>
                      <tr>
                        <td><input type="" name="Usuario5"></td>
                        <td><input type="" name="CodigoUsuario5"></td>
                        <td><input type="" name="SerialUsuario5"></td>
                    </tr>
                      <tr>
                        <td><input type="" name="Usuario6"></td>
                        <td><input type="" name="CodigoUsuario6"></td>
                        <td><input type="" name="SerialUsuario6"></td>
                    </tr>
                      <tr>
                        <td><input type="" name="Usuario7"></td>
                        <td><input type="" name="CodigoUsuario7"></td>
                        <td><input type="" name="SerialUsuario7"></td>
                    </tr>
                      <tr>
                        <td><input type="" name="Usuario8"></td>
                        <td><input type="" name="CodigoUsuario8"></td>
                        <td><input type="" name="SerialUsuario8"></td>
                    </tr>
                      <tr>
                        <td><input type="" name="Usuario9"></td>
                        <td><input type="" name="CodigoUsuario9"></td>
                        <td><input type="" name="SerialUsuario9"></td>
                    </tr>
                     <tr>
                        <td><input type="" name="Usuario10"></td>
                        <td><input type="" name="CodigoUsuario10"></td>
                        <td><input type="" name="SerialUsuario10"></td>
                    </tr>
            </tbody>
        </table>

</div>


        
<!--

         <div class="input-group">
          <br><br><br><br><input placeholder="Ingrese Usuario 1" style="color: darkblue" name="Usuario1"><br>
          <label class="label" for="pass">Usuarios: </label>
        </div>
        
       
          
        <div class="input-group">
          <br><br>

          <select style='margin-left:20px'><?php

              for ($i=1; $i <=579; $i++) { 
                echo "<option value='CodigoLlave' name='CodigoLlave'> $i </option>";
              }

           ?></select>

          <label class="label" for="pass2">Códigos: </label>
        </div>
        <div class="input-group">
          <input type="text" id="Serial" name="Serial">
          <label class="label" for="pass2">Serial: </label>
        </div>
       
       <div class="input-group">
          <input type="text" id="Observaciones" name="Observaciones">
          <label class="label" for="pass2">Observaciones: </label>
        </div>
 -->  

    <br><br>
      

<div style="border: solid 2px; border-color: darkblue; padding: 15px;"> 
       <center> <h3 style="color: darkblue; font-weight: bold;"> Vehículo</h3></center>





        <table style="width: 100%" id="tablausuarios">
          
            <thead>
                <tr>
                      <th>Marca</th>
                      <th>Modelo</th>
                      <th>Placa</th>
                      <th>Color</th>
                </tr>
            </thead>
            
            <tbody>
                    <tr>
                        <td><input name="Marca1"></td>
                        <td><input name="Modelo1"></td>
                        <td><input name="Placa1"></td>
                        <td><input name="Color1"></td>
                    </tr>
                    
                      <tr>
                        <td><input name="Marca2"></td>
                        <td><input name="Modelo2"></td>
                        <td><input name="Placa2"></td>
                        <td><input name="Color2"></td>
                    </tr>
                      <tr>
                        <td><input name="Marca3"></td>
                        <td><input name="Modelo3"></td>
                        <td><input name="Placa3"></td>
                        <td><input name="Color3"></td>
                    </tr>
                      <tr>
                        <td><input name="Marca4"></td>
                        <td><input name="Modelo4"></td>
                        <td><input name="Placa4"></td>
                        <td><input name="Color4"></td>
                    </tr>
            </tbody>
        </table>



<!--

        <div class="input-group">
          <input type="text" id="MarcaVehiculo" name="MarcaVehiculo">
          <label class="label" for="pass2">Marca: </label>
        </div>
        <div class="input-group">
          <input type="text" id="ModeloVehiculo" name="ModeloVehiculo">
          <label class="label" for="pass2">Modelo: </label>
        </div>
        <div class="input-group">
          <input type="text" id="PlacaVehiculo" name="PlacaVehiculo">
          <label class="label" for="pass2">Placa: </label>
        </div>
        <div class="input-group">
          <input type="text" id="ColorVehiculo" name="ColorVehiculo">
          <label class="label" for="pass2">Color: </label>
        </div> 
-->

        <div class="input-group">
         
          <label class="label" for="pass2">Puesto en el Estacionamiento </label>
         <br><br> <select style='margin-left:20px' name="PuestoEstacionamientoNumero1">
                <option value=""> --- </option>

              <?php

              for ($i=1; $i <=14; $i++) { 
                echo "<option name='NumeroApto'> $i </option>";
              }

           ?></select>
           <select style='margin-left:20px' name="PuestoEstacionamientoLetra1">
                <option value=""> --- </option>
                <option> A </option>
                <option> B </option>
                <option> C </option>
                <option> D </option>

           </select>


           <br> <br>

           <select style='margin-left:20px' name="PuestoEstacionamientoNumero2">
                <option value=""> --- </option>

              <?php

              for ($i=1; $i <=14; $i++) { 
                echo "<option> $i </option>";
              }

           ?></select>
           <select style='margin-left:20px' name="PuestoEstacionamientoLetra2">
                <option value=""> --- </option>
                <option> A </option>
                <option> B </option>
                <option> C </option>
                <option> D </option>

           </select>

           <br> <br>

           <select style='margin-left:20px' name="PuestoEstacionamientoNumero3">
                <option value=""> --- </option>

              <?php

              for ($i=1; $i <=14; $i++) { 
                echo "<option name='NumeroApto'> $i </option>";
              }

           ?></select>
           <select style='margin-left:20px' name="PuestoEstacionamientoLetra3">
                <option value=""> --- </option>
                <option> A </option>
                <option> B </option>
                <option> C </option>
                <option> D </option>

           </select>

           <br> <br>

           <select style='margin-left:20px' name="PuestoEstacionamientoNumero4">
                <option value=""> --- </option>

              <?php

              for ($i=1; $i <=14; $i++) { 
                echo "<option name='NumeroApto'> $i </option>";
              }

           ?></select>
           <select style='margin-left:20px' name="PuestoEstacionamientoLetra4">
                <option value=""> --- </option>
                <option> A </option>
                <option> B </option>
                <option> C </option>
                <option> D </option>

           </select>
        </div>

    </div>
        <!-- <div class="input-group radio">
          <input type="radio" name="sexo" id="hombre" value="Hombre">
          <label for="hombre">Hombre</label>
          <input type="radio" name="sexo" id="mujer" value="Mujer">
          <label for="mujer">Mujer</label>
        </div>-->


        <input type="submit" id="btn-submit" value="Enviar">
      </div>
    </form>
  </div>
</div>

<style>
	
	#registro{
		margin: auto;
	}
	* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: #f2f2f2;
  font-family: "Roboto", Arial;
  border-top: 30px solid #303F9F;
}

.wrap {
  width: 90%;
  max-width: 1200px;
  padding: 40px;
  margin: auto;
  background: #fff;
  box-shadow: 0px 0px 3px grey;
}

.contenedor-formulario {
  width: 100%;
  color: #f2f2f2;
  padding: 50px;
}
.contenedor-formulario .formulario {
  width: 100%;
  margin: auto;
}
.contenedor-formulario .formulario .input-group {
  display: block; margin:  auto;
  margin-bottom: 32px;
}
.contenedor-formulario .formulario .input-group input[type="text"],
.contenedor-formulario .formulario .input-group input[type="email"],
.contenedor-formulario .formulario .input-group input[type="password"] {
  font-family: "Roboto", Arial;
  font-size: 16px;
  color: #303F9F;
  width: 100%;
  outline: none;
  padding: 15px;
  background: none;
  border: none;
  border-bottom: 2px solid #BBDEFB;
}
.contenedor-formulario .formulario .input-group input[type="text"]:focus, .contenedor-formulario .formulario .input-group input[type="text"]:active,
.contenedor-formulario .formulario .input-group input[type="email"]:focus,
.contenedor-formulario .formulario .input-group input[type="email"]:active,
.contenedor-formulario .formulario .input-group input[type="password"]:focus,
.contenedor-formulario .formulario .input-group input[type="password"]:active {
  outline: none;
  border-bottom: 2px solid #303F9F;
}
.contenedor-formulario .formulario .input-group input[type="text"].error,
.contenedor-formulario .formulario .input-group input[type="email"].error,
.contenedor-formulario .formulario .input-group input[type="password"].error {
  border-bottom: 2px solid #D32F2F;
}
.contenedor-formulario .formulario .input-group input[type="text"].error + label,
.contenedor-formulario .formulario .input-group input[type="email"].error + label,
.contenedor-formulario .formulario .input-group input[type="password"].error + label {
  color: #D32F2F;
}
.contenedor-formulario .formulario .input-group label {
  color: #303F9F;
}
.contenedor-formulario .formulario .input-group label.label {
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  margin-left: 15px;
  font-size: 16px;
  line-height: 16px;
  position: absolute;
  top: 16px;
  left: 0;
}
.contenedor-formulario .formulario .input-group label.label.active {
  top: -12px;
  font-size: 12px;
  line-height: 12px;
  color: #B6B6B6;
}
.contenedor-formulario .formulario .input-group.checkbox label, .contenedor-formulario .formulario .input-group.radio label {
  display: inline-block;
  cursor: pointer;
  color: #303F9F;
  position: relative;
  padding: 5px 15px 5px 51px;
  font-size: 1em;
  border-radius: 3px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.contenedor-formulario .formulario .input-group.checkbox label:hover, .contenedor-formulario .formulario .input-group.radio label:hover {
  background: #bbdefb;
}
.contenedor-formulario .formulario .input-group.checkbox label:before, .contenedor-formulario .formulario .input-group.radio label:before {
  content: "";
  display: inline-block;
  width: 17px;
  height: 17px;
  position: absolute;
  left: 15px;
  border-radius: 50%;
  background: none;
  border: 2px solid #303F9F;
}
.contenedor-formulario .formulario .input-group.error label {
  color: #D32F2F;
}
.contenedor-formulario .formulario .input-group.error label:hover {
  background: rgba(211, 47, 47, 0.2);
}
.contenedor-formulario .formulario .input-group.error label:before {
  border: 2px solid #D32F2F;
}
.contenedor-formulario .formulario .input-group.radio input[type="radio"] {
  display: none;
}
.contenedor-formulario .formulario .input-group.radio input[type="radio"]:checked + label:before {
  display: none;
}
.contenedor-formulario .formulario .input-group.radio input[type="radio"]:checked + label {
  padding: 5px 15px;
  background: #303F9F;
  border-radius: 2px;
  color: #f2f2f2;
}
.contenedor-formulario .formulario .input-group.checkbox label:before {
  border-radius: 3px;
}
.contenedor-formulario .formulario .input-group.checkbox input[type="checkbox"] {
  display: none;
}
.contenedor-formulario .formulario .input-group.checkbox input[type="checkbox"]:checked + label:before {
  display: none;
}
.contenedor-formulario .formulario .input-group.checkbox input[type="checkbox"]:checked + label {
  background: #303F9F;
  color: #f2f2f2;
  padding: 5px 15px;
}
.contenedor-formulario .formulario input[type="submit"] {
  background: #303F9F;
  border-radius: 1px;
  border: 2px solid #f2f2f2;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: "Roboto", Arial;
  font-size: 16px;
  padding: 15px;
  width: 100%;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.contenedor-formulario .formulario input[type="submit"]:hover {
  background: #1976D2;
}

select{
  display: inline-block; 
  margin: auto;
  color: darkblue;
  font-size: 20px;
}

textarea{
  color: darkblue;
  width: 200%;
}

@media (max-width: 768px){textarea{width: 100%;}}

#tablausuarios{color:darkblue;}

</style>
<script type="text/javascript">
	// Recorrer los elementos y hacer que onchange ejecute una funcion para comprobar el valor de ese input
(function() {

  var formulario = document.formulario_registro,
    elementos = formulario.elements;

  // Funcion que se ejecuta cuando el evento click es activado

 var validarInputs = function() {
   
      // Identificamos si el elemento es de tipo texto, email, password, radio o checkbox
      if (elementos[0].type == "text" || elementos[0].type == "email" || elementos[0].type == "password") {
        // Si es tipo texto, email o password vamos a comprobar que esten completados los input
        if (elementos[0].value.length == 0) {
          alert('El campo ' + elementos[0].name + ' esta incompleto');
          elementos[0].className = elementos[0].className + " error";
          return false;
        } else {
          elementos[0].className = elementos[0].className.replace(" error", "");
        }
      }
    

    // Comprobando que las contraseñas coincidan
    if (elementos.pass.value !== elementos.pass2.value) {
      elementos.pass.value = "";
      elementos.pass2.value = "";
      elementos.pass.className = elementos.pass.className + " error";
      elementos.pass2.className = elementos.pass2.className + " error";
    } else {
      elementos.pass.className = elementos.pass.className.replace(" error", "");
      elementos.pass2.className = elementos.pass2.className.replace(" error", "");
    }

    return true;
  };

  var validarRadios = function() {
    var opciones = document.getElementsByName('sexo'),
      resultado = false;

    for (var i = 0; i < elementos.length; i++) {
      if (elementos[i].type == "radio" && elementos[i].name == "sexo") {
        // Recorremos los radio button
        for (var o = 0; o < opciones.length; o++) {
          if (opciones[o].checked) {
            resultado = true;
            break;
          }
        }

        if (resultado == false) {
          elementos[i].parentNode.className = elementos[i].parentNode.className + " error";
          console.log('El campo sexo esta incompleto');
          return false;
        } else {
          // Eliminamos la clase Error del radio button
          elementos[i].parentNode.className = elementos[i].parentNode.className.replace(" error", "");
          return true;
        }
      }
    }
  };

  var validarCheckbox = function() {
    var opciones = document.getElementsByName('terminos'),
      resultado = false;

    for (var i = 0; i < elementos.length; i++) {
      if (elementos[i].type == "checkbox") {
        for (var o = 0; o < opciones.length; o++) {
          if (opciones[o].checked) {
            resultado = true;
            break;
          }
        }

        if (resultado == false) {
          elementos[i].parentNode.className = elementos[i].parentNode.className + " error";
          console.log('El campo checkbox esta incompleto');
          return false;
        } else {
          // Eliminamos la clase Error del checkbox
          elementos[i].parentNode.className = elementos[i].parentNode.className.replace(" error", "");
          return true;
        }
      }
    }
  };

  var enviar = function(e) {
    if (!validarInputs()) {
      console.log('Falto validar los Input');
      e.preventDefault();
    } else if (!validarRadios()) {
      console.log('Falto validar los Radio Button');
      e.preventDefault();
    } else if (!validarCheckbox()) {
      console.log('Falto validar Checkbox');
      e.preventDefault();
    } else {
      console.log('Envia');
      e.preventDefault();
    }
  };

  var focusInput = function() {
    this.parentElement.children[1].className = "label active";
    this.parentElement.children[0].className = this.parentElement.children[0].className.replace("error", "");
  };

  var blurInput = function() {
    if (this.value <= 0) {
      this.parentElement.children[1].className = "label";
      this.parentElement.children[0].className = this.parentElement.children[0].className + " error";
    }
  };

  // --- Eventos ---
  formulario.addEventListener("submit", enviar);

  for (var i = 0; i < elementos.length; i++) {
    if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password") {
      elementos[i].addEventListener("focus", focusInput);
      elementos[i].addEventListener("blur", blurInput);
    }
  }

}())
</script>
</body>
</html>