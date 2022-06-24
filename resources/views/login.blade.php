<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


  <title>Document</title>

    <style>
        body{
    background: rgb(25,123,189);
    background: linear-gradient(90deg, rgba(25,123,189,1) 0%, rgba(255,255,255,1) 51%, rgba(32,75,87,1) 100%);
}

.login{
    text-align: center;
    font-family: cursive;
    font-size: 40px;
}

.email{
    text-align: center;
    height: 40px;
}

.senha{
    text-align: center;
    height: 55px;
}

.logar{
    text-align: center;
}

.btnCadastro{
    background-color: #FFB400;
    color: #000000;
    font-weight: bold;
    border-style: double;
    border-width: 6px;
    font-size: 20px;
}

.campos{
    padding-top: 241px;
}

.link{
    text-align: center;

}

a{
    text-decoration: none;
    color: rgb(255, 0, 0);
}
.porco{
    font-family: fantasy;
    font-size: 20px;
    text-align: center;
    font-weight: bold;
    color: #5b05fa;
    background-color: antiquewhite;
}

.campoEmail{
    width:300px;
    height: 25px;
    
}

.campoSenha{
    width:300px;
    height: 25px;
}

.titulo{
    letter-spacing: 25px;
}
    </style>

</head>
<body>
    <div class="porco">
        <h1 class="titulo">BEM VINDO AO HELPDESK</h1>
    </div>

    
    <div class="campos">
        <h1 class="login">Login</h1>

      <form action="{{url('/logar')}}" method="post">
        {{csrf_field()}}
        <div class="email">
            <input class="form-control campoEmail" style="margin-left: 43%;;     height: 48px;" type="text" placeholder="E-mail">
        </div>

        <div class="senha">
            <input class="form-control campoSenha" style="margin-left: 43%;;     height: 48px;" type="password" name="" id="" placeholder="Senha">
        </div>

        <div class="logar">
            <input type="submit" value="Logar" class="btnCadastro btn" style="    margin-top: 11px;">
        </div>
      </form>
        
        <div class="link">
            <p>Esqueceu sua Senha? <a href="">Clique aqui.</p></a>
            <p>Caso não tenha, crie uma conta! <a href="">Clique aqui</p></a>
        </div>
    </div>
</body>
</html>