<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chamado Expandido</title>
    </head>
    <body >
        <h1>Chamado Expandido</h1>


        @foreach($chamados as $c){
            echo "idChamado ". $c->idChamado . "<br />";            
            echo "catChamados ".$c->catChamados . "<br />"; 
            echo "turma ".$c->turma . "<br />"; 
            echo "status ".$c->status . "<br />"; 
            echo "datahora ".$c->datahora . "<br />"; 
        }
        
    </body>
</html>
