<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                <label>RM</label>
                <input type="text" name="rm" placeholder="rm" />
            </div>

            <div>
                <label>E-mail</label>
                <input type="email" name="email" placeholder="E-mail" />
            </div>

            <div>
                <label for="text">Ocorrencia</label>
                <input type="text" name="ocorrencias" placeholder="ocorrencias" />
            </div>

            <div>
                <label>Turma</label>
                <input type="text" name="turma" placeholder="turma" />
            </div>

            <div>
                <label>Categoria do Chamado</label>
                <input type="text" name="catChamados" placeholder="catChamados" />
            </div>

            <div>
                <input type="submit" value="Enviar" />
            </div>
        </form>
    </section>


</html>
