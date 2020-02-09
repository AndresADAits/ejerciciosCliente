<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <title>Ejemplo Ajax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Incluimos librería Bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">


    <!-- Incluimos las librerís JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="ejemplo.js" defer></script>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<form id="formulario" method="POST"  onsubmit="validarFormulario(event)">
<div class="d-flex justify-content-center">
<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"> 

<label for="id"><h2>Id usuario  [ <span class="badge badge-pill badge-success">1</span><span class="badge badge-pill badge-success">2</span><span class="badge badge-pill badge-success">3</span> ]</h2></label><br>
</div>
<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"> 
<input type="text" class="id" id="id" required><br>
</div>
</div>
<div class="d-flex justify-content-center">
<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center"> 
        <label for="nombre"><h2>Nombre actualizado  [ <span class="badge badge-pill badge-success">en mayúsculas y >5</span> ]</h2></label>
        </div>
        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center"> 
        <input type="text" class="nombre" id="nombre" onchange="validacionNombre()">
        </div>
</div>

        <div class="error bg-danger"></div>
        <br>
        <div class="d-flex justify-content-center">
<button class="btn btn-info">UPDATE</button>
</div>
<div id="resultado"></div>


    </form>
    <div class="modal fade" id="modal" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLabel">ESPERE UN MOMENTO</h2>
                        </div>
                            <div class="modal-body">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

</body>
</html>