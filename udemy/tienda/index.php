<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ejemplo de formulario</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <style>
            body {padding-top: 50px;padding-bottom: 20px;}
        </style>        
    </head>
    <body>
        <div class="container">
            <h1 class="page-header">Mi primer formulario y envio de archivos</h1>
            <!-- FORMULARIO PARA ENVIO DE ARCHIVOS -->
            <form method="POST" action="procesa2.php" id="formularioArchivo" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre01" class="form-control">
                </div>
                <?php for ($i=1; $i <= 5 ; $i++) { ?>
                <div class="form-group">
                    <label>Archivo <?php echo $i; ?></label>
                    <input type="file" name="archivo[]" class="form-control">
                </div>                    
                <?php } ?>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
            <hr>
            <!-- FORMULARIO PARA ENVIO DE DATOS CON AJAX -->
            <form method="POST" action="procesa.php" id="formulario">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>
                <div class="form-group">
                    <label>Ocupacion</label>
                    <select class="form-control" name="ocupacion">
                        <option value="ingeniero-sistema">Ingeniero de sistema</option>
                        <option value="medico">Medico</option>
                        <option value="abogado">Abogado</option>
                        <option value="arquitecto">Arquitecto</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Sexo</label>
                    <div class="radio">
                        <label><input type="radio" name="sexo" value="hombre">Hombre</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="sexo" value="mujer">Mujer</label>
                    </div>
                </div>
                <div class="well well-sm">
                    <h4>Ingrese los datos de sus hijos</h4>
                    <?php for($i = 0; $i <= 4; $i++) { ?>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Nombre Hijo # <?php echo $i+1; ?></label>
                                <input type="text" name="hijo[<?php echo $i; ?>][nombre]" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Edad</label>
                                <input type="text" name="hijo[<?php echo $i; ?>][edad]" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                    <?php }; ?>
                </div>
                <div class="form-group">
                    <label>Acerca de mi</label>
                    <textarea class="form-control" name="acerca_de_mi"></textarea>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label><input type="checkbox" name="acepto" value="1"> Acepto los terminos y condiciones</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>


      <script src="js/jquery-2.2.4.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>

      <script>
          $(document).ready(function(){
            /* ESTE METODO ES CUANDO SE REQUIERE IDENTIFICAR INDIVIDUALMENTE CADA PARAMETRO
            $('#formulario').submit(function(){
                $.ajax({
                    url: 'procesa.php',
                    method: 'POST',
                    data: {
                        nombre: $('input[name="nombre"]').val(),
                        ocupacion: $('select[name="ocupacion"]').val(),
                        sexo: $('input[name="sexo"]').val(),
                        acerca_de_mi: $('textarea[name="acerca_de_mi"]').val()
                    },
                    success: function(r){
                        alert(r.response)
                    },
                    dataType: 'json'
                });
                return false;
                */

            // ESTE METODO ES CUANDO SE REQUIERE IDENTIFICAR TODOS LOS VALORES
            var form = $('#formulario');
            form.submit(function(){
                $.ajax({
                    url: 'procesa.php',
                    method: 'POST',
                    data: form.serialize(),
                    success: function(r){
                        alert(r.response);
                    },
                    dataType: 'json'
                });
                return false;
            });
          });
      </script>
    </body>
</html>
