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
  <center><h1 style="color: steelblue;">Registro de datos</h1><h4 style="color: darkblue"> Junta de condominio </h4></center>
    <form action="egistro.php" class="formulario" name="formulario_registro" method="get">
      <div>
        <div class="input-group">
          <input type="text" id="nombre" name="nombre">
          <label class="label" for="nombre">Nombre:</label>
        </div>
        <div class="input-group">
          <input type="email" id="correo" name="correo">
          <label class="label" for="correo">Correo:</label>
        </div>
        <div class="input-group">
          <input type="password" id="pass" name="pass">
          <label class="label" for="pass">Contraseña:</label>
        </div>
        <div class="input-group">
          <input type="password" id="pass2" name="pass2">
          <label class="label" for="pass2">Repetir Contraseña:</label>
        </div>
        <div class="input-group radio">
          <input type="radio" name="sexo" id="hombre" value="Hombre">
          <label for="hombre">Hombre</label>
          <input type="radio" name="sexo" id="mujer" value="Mujer">
          <label for="mujer">Mujer</label>
        </div>
        <div class="input-group checkbox">
          <input type="checkbox" name="terminos" id="terminos" value="true">
          <label for="terminos">Acepto los Terminos y Condiciones</label>
        </div>

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
  max-width: 500px;
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
  position: relative;
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

</style>
<script type="text/javascript">
	// Recorrer los elementos y hacer que onchange ejecute una funcion para comprobar el valor de ese input
(function() {

  var formulario = document.formulario_registro,
    elementos = formulario.elements;

  // Funcion que se ejecuta cuando el evento click es activado

  var validarInputs = function() {
    for (var i = 0; i < elementos.length; i++) {
      // Identificamos si el elemento es de tipo texto, email, password, radio o checkbox
      if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password") {
        // Si es tipo texto, email o password vamos a comprobar que esten completados los input
        if (elementos[i].value.length == 0) {
          console.log('El campo ' + elementos[i].name + ' esta incompleto');
          elementos[i].className = elementos[i].className + " error";
          return false;
        } else {
          elementos[i].className = elementos[i].className.replace(" error", "");
        }
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