<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CRUD LARAVEL</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- <link rel="stylesheet" src="../css/app.css" type="text/css"></link> -->
    </head>
    
    <body class="mprincipal">
        <div class="container">
            <div class="titleColor">
                <h1>{{ $title }}</h1>
                <h1>CRUD con LARAVEL,PHP y Bootstrap</h1>
            </div>

            <!--Form to add a new Student-->
            <form action="{{route('crud.create')}}"  method="post">
                @csrf
                <input class="form-control" type="text" placeholder="Nombre" aria-label="default input example" name="txtName">
                <br>
                <input class="form-control" type="text" placeholder="Apellidos" aria-label="default input example" name="txtLastname">
                <br>
                <input class="form-control" type="number" placeholder="Edad" aria-label="default input example" min="15" max="80" name="txtAge">
                <br>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>

            <br>

            <!--Show message-->



            <br>
            <a href="{{ url('/pagina2') }}" class="linkRegistros">Registros</a>


        </div>




       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>

</html>

<style>
    .mprincipal{
        margin-top: 10px;
    }
    .titleColor{
        color: green;
    }
    .linkRegistros{
        /* text-decoration: none; */
        color: blue;
        font-size: 20px;
        font-weight: bold;
    }
</style>

