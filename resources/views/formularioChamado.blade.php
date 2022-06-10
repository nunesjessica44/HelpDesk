<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulario Chamado</title>
    </head>
    <body>
    <h1>Formulario Chamado</h1>

    section>
    <form action="{{url('/contato/inserir')}}" method="post">
        {{csrf_field()}}
        <div>
            <input type="text" name="txNome" placeholder="Nome" value="nome teste" />
        </div>

        <div>
            <input type="text" name="txEmail" placeholder="E-mail" value="teste email" />
        </div>

        <div>
            <input type="text" name="txFone" placeholder="Telefone" value="fone teste" />
        </div>

        <div>
            <input type="text" name="txAssunto" placeholder="Assunto" value="assunto teste" />
        </div>

        <div>
            <input type="text" name="txMensagem" placeholder="Mensagem" value="msg teste" />
        </div>

        <div>
            <input type="submit" value="Enviar" />
        </div>
    </form>

</html>
