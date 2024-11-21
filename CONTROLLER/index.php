<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        body {
            background-image: url('/gestaosemear/IMG/campoagro.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #2e4d23;
        }
        h4 {
            font-family: 'Roboto';
            font-weight: 700;
        }
        .margin {
            justify-content: center; align-items: center; text-align: center;
            max-width: 400px; width: 100%;
            padding: 40px 30px; margin: 40px 10px;
            border-radius: 5px;
            background-color: #f5f1e3;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .nav-wrapper { background-color: #2e4d23; }
        .btn { background-color: #2e4d23 !important; color: #f5f1e3 !important; }
        .input-field i.material-icons.active { color: #795548 !important; }
    </style>
    <meta charset="utf-8">
    <link rel="icon" href="../IMG/ikon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <title>Login</title>
</head>
<body>
    <nav class="nav-wrapper z-depth-0">
        <div class="container">
            <a href="/gestaosemear/VIEW/menu.php" class="brand-logo left">SEMEAR</a>
        </div>
    </nav>

    <div class="had-container">
        <div class="row"><br>
            <div class="col m8 s8 offset-m4 center"><br><br>
                <div class="row login">
                    <div class="grey lighten-3 brown-text col s12 margin">
                        <h4>Login</h4>
                        <form method="POST" action="login.php" class="col s12">
                            <div class="row">
                                <div class="input-field col m12 s12">
                                    <i class="material-icons iconis prefix">account_box</i>
                                    <input id="icon_prefix" type="text" name="usuario" class="validate">
                                    <label for="icon_prefix">Usuário</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col m12 s12">
                                    <i class="material-icons iconis prefix">enhanced_encryption</i>
                                    <input id="password" type="password" name="senha" class="validate">
                                    <label for="password">Senha</label>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Acessar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"><?php include_once 'footer.php' ?></div>
</body>
</html>