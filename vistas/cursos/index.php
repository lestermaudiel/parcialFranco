<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>CURSO DE INFORMATICA Y CIBERDEFENSA</title>
</head>
<style>
        h1 {
            color: red;
        }
    </style>
<body>
    <header class="bg-red text-white text-center p-4">
    <h1 class="display-9">CURSO DE INFORMATICA Y CIBERDEFENSA</h1>
  </header>
    <div class="container bg-gray">
        <h1 class="text-center">CURSOS</h1>
        <div class="row justify-content-center">
            <form action="/parcialFranco/controladores/cursos/guardar.php" method="POST" class="col-lg-8 border bg-gray p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="curso_nombre">Nombre del Curso</label>
                        <input type="text" name="curso_nombre" id="curso_nombre" class="form-control" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="curso_periodos">Cantidad de Periodos</label>
                        <input type="number" name="curso_periodos" id="curso_periodos" class="form-control" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="curso_fase">Fase en la que se imparte el curso</label>
                        <input type="text" name="curso_fase" id="curso_fase" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="curso_instructor">Nombre del Instructor</label>
                        <input type="text" name="curso_instructor" id="curso_instructor" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="curso_creditos">Créditos conrrespondientes al curso</label>
                        <input type="number" name="curso_creditos" id="curso_creditos" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>