<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulario Chamado</title>
    </head>
    <body>
    <h1>Formulario Chamado</h1>

    <section>
        <form action="{{url('/enviarChamado')}}" method="post">
            {{csrf_field()}}
            <div>
                <input type="text" name="rm" placeholder="rm" />
            </div>
    
            <div>
                <input type="text" name="email" placeholder="E-mail" />
            </div>
    
            <div>
                <input type="text" name="ocorrencias" placeholder="ocorrencias" />
            </div>
    
            <div>
                <input type="text" name="turma" placeholder="turma" />
            </div>
    
            <div>
                <input type="text" name="catChamados" placeholder="catChamados" />
            </div>
    
            <div>
                <input type="submit" value="Enviar" />
            </div>
        </form>
    </section>


</html>
