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
           <h1 class="page-header">Formulario con validacion Ajax</h1>
           <form id="formulario" method="POST" action="procesa4.php">
               <div class="form-group">
                   <label>Nombre</label>
                   <input type="text" name="nombre" class="form-control">
                   <span data-key="nombre" class="label label-danger"></span>
               </div>
               <div class="form-group">
                   <label>Correo</label>
                   <input type="text" name="correo" class="form-control">
                   <span data-key="correo" class="label label-danger"></span>
               </div>
               <div class="form-group">
                   <label>Mi fecha de nacimiento (dd/mm/yyyy)</label>
                   <input type="text" name="fecha" class="form-control">
                   <span data-key="fecha" class="label label-danger"></span>
               </div>
               <div class="form-group">
                   <label>Mi pagina web</label>
                   <input type="text" name="web" class="form-control">
                   <span data-key="web" class="label label-danger"></span>
               </div>
               <div class="form-group">
                   <div class="checkbox">
                       <label>
                           <input type="checkbox" name="acepto" value="1">
                           Acepto las condiciones de registro
                       </label>
                   </div>
                   <span data-key="acepto" class="label label-danger"></span>
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
            var form = $('#formulario');
            form.submit(function(){
                form.find('.label-danger').text('');
                $.ajax({
                    url: 'procesa4.php',
                    method: 'POST',
                    data: form.serialize(),
                    success: function(r){
                        if(!r.response) {
                          for(var k in r.errors) {
                            $('span[data-key="'+ k +'"]').text(r.errors[k])
                          }
                        };
                    },
                    dataType: 'json'
                });
                return false;
            });
          });         
      </script>
    </body>
</html>
