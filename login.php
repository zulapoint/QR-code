<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
	 <style>
        body {
            font-family: Arial;
            margin: 0;
            background-color: #DCDCDC;
        }

        .header {
            padding: 30px;
            text-align: center;
            background: forestgreen;
            color: white;
            font-size: 30px;
        }
        hr {
            width: 100%;
            background-color: tomato;
            height: 5px;
            border-style: none;
        }

        fieldset {
            width: 35%;
        }

        .footer {
            padding: 10px;
            text-align: center;
            background: forestgreen;
            color: white;
            font-size: 15px;
        }

        .button {
            background-color: tomato;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>EEEP-Marwin</h1>
    </div>
<hr>
 <center>
        <h1>Login</h1>
		<form>
            <label>CPF:</label>
			<input type="text" size="30" placeholder="Digite seu CPF"><br><br>
            <label>Senha:</label> 
			<input type="password" size="30" placeholder="Digite sua senha"><br><br>
		    <a href="">Esqueceu a senha</a><br><br>
            <input type="submit" value="Entrar">
			<input type="submit" value="Registrar">
        </form>
    <br>
<hr>
<div class="footer">
        <h1>Desenvolvido por ZulaPoint</h1>
    </div>
</body>


</html>