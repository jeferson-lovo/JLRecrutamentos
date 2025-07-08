<head>
    <style>
        body {
            background-color: #4169E1;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-login {
            display: flex;
            flex-direction: row;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
        }

        .img-box {
            flex: 1;
            background-color: #fff;
        }

        .img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .form-box {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-box h1 {
            text-align: center;
            color: #4169E1;
            margin-bottom: 30px;
        }

        .input-box {
            margin-bottom: 20px;
        }

        .input-box span {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-links {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .form-links a {
            color: #4169E1;
            text-decoration: none;
        }

        .form-links a:hover {
            text-decoration: underline;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #4169E1;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #27408B;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .register-link a {
            color: #4169E1;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container-login">
        <div class="img-box">
            <img src="{{ asset('img/Logo2.png') }}" alt="Logo JLRecrutamento">
        </div>
        <div class="form-box">
            <h1>Login</h1>
            <form>
                <div class="input-box">
                    <span>Usuário</span>
                    <input type="text" name="usuario" placeholder="Nome do usuário" class="form-control">
                </div>

                <div class="input-box">
                    <span>Senha</span>
                    <input type="password" name="senha" placeholder="Senha" class="form-control">
                </div>
                <div class="form-links">
                    <a href="#">Esqueci minha senha</a>
                </div>

                <input type="submit" value="Entrar" class="btn">

                <div class="register-link">
                    <span>Não tem conta? </span>
                    <a href="#">cadastre se</a>   
                </div>
                <div class="register-link">
                    <span>Entrar Com</span>
                    <a href="#"><img src="{{ asset('img/search.png') }}" alt="login com google" width="10px" height="10px"></a>
                </div>
            </form>
        </div>
    </div>

</body>
