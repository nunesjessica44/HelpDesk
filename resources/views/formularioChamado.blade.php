<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

 <title>Formulario Chamado</title>
</head>

<style>
    h1 {
        color: #004ba8;
        font-style: bold;
    }

    body {
        justify-content: center;
        margin-left: 36%;
        margin-top: 2%;
        font-style: italic;
        background-image: url(https://images7.alphacoders.com/333/333950.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
    }

    .RM {
        font-size: large;
    }
</style>

<body>
    <div>
        <h1 class="cabecalho">Cadastro do Chamado</h1>
        <p class="cabecalho2"> Preencha os campos abaixo</p>
    </div>

    <section>
        <form action="{{ url('/enviarChamado') }}" method="post">
            {{ csrf_field() }}
            <div>

                <input required type="text" name="rm" placeholder="RM" class="form-control" style="margin-top: 11px;  height: 48px;  width: 300px;" />
            </div>

            <div>

                <input required type="email" name="email" placeholder="E-mail" class="form-control" style="margin-top: 11px;  height: 48px;  width: 300px;"  />
            </div>

            <div>

                <input required type="text" name="ocorrencias" placeholder="Ocorrências" class="form-control" style="margin-top: 11px;  height: 48px;  width: 300px;" />
            </div>

            <div>
       
                <input required type="text" name="turma" placeholder="Turma" class="form-control" style="margin-top: 11px;  height: 48px;  width: 300px;" />
            </div>

            <div>
       
                <input required type="text" name="catChamados" placeholder="Categoria do chamado" class="form-control" style="margin-top: 11px;  height: 48px;  width: 300px;"  />
            </div>

            <div>
                <input type="submit" value="Enviar"  class="btn btn-primary" style=" width: 300px; margin-top: 11px; " />
            </div>
        </form>
    </section>

    
</html>
