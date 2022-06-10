<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

.cadastrar{
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

        <div class="email">
            <input class="campoEmail" type="text" placeholder="E-mail">
        </div>

        <div class="senha">
            <input class="campoSenha" type="password" name="" id="" placeholder="Senha">
        </div>

        <div class="cadastrar">
            <input type="submit" value="Cadastrar" class="btnCadastro">
        </div>
        
        <div class="link">
            <p>Esqueceu sua Senha? <a href="">Clique aqui.</p></a>
            <p>Caso não tenha, crie uma conta! <a href="">Clique aqui</p></a>
        </div>
    </div>
</body>
</html>