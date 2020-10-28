<?php
    session_start();

    if(isset($_SESSION['logado'])) {
        header("Location: /area-logada/index.php");
        die();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Meta tags obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- estilo customizado -->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/authenticate.css">

    <title>Login - ORBO</title>
    <link rel="icon" href="/imagens/favicon.png">
</head>
<body class="auth">
    
    <main>
        <div class="authenticate-form">

            <!-- begin::header form -->
            <div class="header-form">
                
                <a href="https://site.ORBO.com.br/" class="navbar-brand" rel="home" itemprop="url"
                    style="width: 150px; height: 57px;"> <svg class="navbar-logo-svg" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 131.06 41.48">
                        <title>ORBO Software Jurídico</title>
                        <g class="main-layer">
                            <path class="navbar-logo-style-1"
                                d="M13.89,38.59A13.89,13.89,0,1,1,27.77,24.7,13.9,13.9,0,0,1,13.89,38.59ZM5.56,24.71a8.33,8.33,0,1,0,8.32-8.34A8.3,8.3,0,0,0,5.56,24.71Z"
                                fill="#000"></path>
                            <path class="navbar-logo-style-1"
                                d="M93.4,25.62l.23.19a8.5,8.5,0,0,1,3.2,4.89,8.21,8.21,0,0,1-.87,6,9.07,9.07,0,0,1-5.54,4.49,7.87,7.87,0,0,1-2.32.31H82.59c-.07-.19-.09-4.46,0-4.92a.76.76,0,0,1,.16,0h.18c1.78,0,3.56,0,5.34,0a4,4,0,0,0,3.82-2.94,4.16,4.16,0,0,0-.14-2.63,3.17,3.17,0,0,0-1.85-1.84,4.48,4.48,0,0,0-1.73-.37c-1.8,0-3.61,0-5.41,0h-.35c-.06-.25-.06-4.21,0-4.49h4a4,4,0,0,0,.64-7.9,3.6,3.6,0,0,0-.66-.06c-2,0-4.08,0-6.12,0a7.78,7.78,0,0,0-2.7.46,4.17,4.17,0,0,0-2.88,3.73c0,.34,0,.67,0,1v15H69.36c0-.11,0-.22,0-.33V25.71c0-1.78,0-3.56,0-5.34a8.43,8.43,0,0,1,5.17-7.93,12.59,12.59,0,0,1,3.56-1,23.1,23.1,0,0,1,3.22-.19c1.7,0,3.4,0,5.11,0a9.11,9.11,0,0,1,8.81,7.13,8.12,8.12,0,0,1-1.61,7Z"
                                fill="#000"></path>
                            <path class="navbar-logo-style-1"
                                d="M131.06,24.7a13.88,13.88,0,1,1-13.89-13.88A13.91,13.91,0,0,1,131.06,24.7Zm-5.54,0A8.34,8.34,0,1,0,117.29,33,8.36,8.36,0,0,0,125.52,24.7Z"
                                fill="#000"></path>
                            <path class="navbar-logo-style-1"
                                d="M40.47,36.6H35c0-.12,0-.24,0-.36V27.45c0-2.2,0-4.39,0-6.58a9.54,9.54,0,0,1,.45-3.1,8.33,8.33,0,0,1,4.21-4.9,12.17,12.17,0,0,1,3.63-1.18,20.79,20.79,0,0,1,3.34-.26c2.43,0,4.85,0,7.28,0A8.38,8.38,0,0,1,59,13.1a9,9,0,0,1,3.67,5.68,8,8,0,0,1-1.51,6.58,8.83,8.83,0,0,1-5.51,3.45l-.24.06,0,0v0s0,0,0,0,0,0,0,.05l0,.06,5.25,7.47a.13.13,0,0,0,0,0l-.16,0h-6a.38.38,0,0,1-.34-.22c-1.18-1.75-2.36-3.51-3.55-5.26-.61-.91-1.22-1.83-1.84-2.74a.73.73,0,0,1-.14-.45v-3.6h.78c1.58,0,3.17.05,4.75,0a3.9,3.9,0,0,0,3.63-2.77,4,4,0,0,0-3.24-5.13,5.46,5.46,0,0,0-.57,0H46.13a8,8,0,0,0-2.9.52,4.13,4.13,0,0,0-2.68,3.45,8.79,8.79,0,0,0-.08,1.26v15Z"
                                fill="#000"></path>
                            <g class="dot">
                                <circle class="navbar-logo-style-2" cx="25.64" cy="3.96" r="3.96" fill="#000"></circle>
                            </g>
                        </g>
                    </svg> 
                </a>

                <h3>
                    Para continuar, faça login no ORBO.
                </h3>

            </div>
            <!-- end::header form -->

            <!-- begin::facebook btn -->
            <div class="login-facebook">

                <a href="#facebook" class="btn-facebook">
                    CONTINUAR COM O FACEBOOK
                </a>

            </div>
            <!-- end::facebook btn -->

            <span class="line-divisor">ou</span>

            <div id="feedback" style="background-color: rgba(255,0,0,0.5);"></div>

            <!-- begin::form -->
            <form name="login" onsubmit="return validateFormLogin()" method="post" class="login">

                <div class="form-group">

                    <input id="email" name="email" placeholder="Endereço de e-mail ou nome de usuário." type="text" value="" class="">

                    <div class="error" id="emailErr"></div>

                </div>

                <div class="form-group">

                    <input id="senha" name="senha" placeholder="Senha." type="password" value="" class="">

                    <div class="error" id="senhaErr"></div>

                </div>

                <div class="form-group form-btn">

                    <div class="col-md-6">
                        <label class="lembrar">
                            <input type="checkbox" name="lembrar" class="lembrar check-terms">
                            <span class="">
                                <span class="">
                                    lembrar de mim.
                                </span>
                            </span>
                        </label>
                    </div>

                    <div class="col-md-6">

                        <input type="submit" class="btn-login" value="Login">
                        
                    </div>

                    <p class="">
                        <span class="remember"><a href="#remember">Esqueceu sua senha?</a>.
                        </span>
                    </p>

                </div>

            </form>
            <!-- end::form -->

        </div>
    </main>
    
    <script src="/js/validation-form.js"></script>
    <script src="/js/authAjax.js"></script>
</body>
</html>