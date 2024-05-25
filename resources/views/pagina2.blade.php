<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <div class="titleListAlum">Lista de alumnos</div>

        <table class="table">

            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Edad</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
                
                <tr>
                    <th scope="row">1</th>
                    <td>Cristopher</td>
                    <td>Martinez</td>
                    <td>23</td>
                    <td>actions</td>
                </tr>
            </tbody>
       
        </table>


    <a href="{{ url('/')}}">Regresar a página principal</a>
    
</body>
</html>


<style>
    .titleListAlum{
        font-weight: bold;
        margin: 10px;
    }

</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>