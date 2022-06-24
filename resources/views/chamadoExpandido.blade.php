<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


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

<body style="background:#ffdde3">
    <h1>Chamados</h1>

    <form action="chamado" method="get">
        {{ csrf_field() }}
        <input type="submit" value="Novo chamado" class="btn btn-primary btnCadastro">
    </form>

    <table class="table table-striped table-hover mt-5">
        <tr style="text-transform: uppercase; font-weight: 700">
        
            <td>
                Categoria do chamado
            </td>
            <td>
               turma 
            </td>
            <td>
              status
            </td>
            <td>
              data hora
            </td>
            <td>
               
            </td>
        </tr>  
    @foreach ($chamados as $c)
    <tr>
       
        <td>
            @php  echo $c->catChamados @endphp
        </td>
        <td>
            @php  echo $c->turma @endphp
        </td>
        <td>
            @php  echo $c->status @endphp
        </td>
        <td>
            @php  echo $c->datahora @endphp
        </td>
        <td>
            <form action="deletarChamado/{{$c->idChamado}}" method="POST">
                {{csrf_field()}}
                <input type="text" value="teste" hidden>
                <input type="submit" value="Deletar chamado" class="btn btn-danger"/>
            </form>
        </td>
    </tr>

        
        
    @endforeach
    
        ...
      </table>
</body>

</html>
