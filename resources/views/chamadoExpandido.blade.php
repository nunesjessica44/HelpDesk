<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Chamados</title>
    <link rel="icon" href="">

</head>

<body>
    <h1>Chamados</h1>

    <form action="chamado" method="get">
        <input type="submit" value="Novo chamado" class="btnCadastro">
    </form>

    @foreach ($chamados as $c)

       @php
        echo "idChamado ". $c->idChamado . "<br />";
        echo "catChamados ".$c->catChamados . "<br />";
        echo "turma ".$c->turma . "<br />";
        echo "status ".$c->status . "<br />";
        echo "datahora ".$c->datahora . "<br />";  
       @endphp

        <form action="deletarChamado/{{$c->idChamado}}" method="POST">
            {{csrf_field()}}
            <input type="text" value="teste" hidden>
            <input type="submit" value="Deletar chamado" />
        </form>
        
    @endforeach

</body>

</html>
