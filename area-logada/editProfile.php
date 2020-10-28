<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/backend/databasePdo.php';
    session_start();

    if(!isset($_SESSION['logado'])) {
        header("Location: /auth/login.php");
        die("Proibido acesso, faça login!");
    }

    $user = DB::run("SELECT * FROM users WHERE user_id=?", [$_SESSION['usuario']])->fetch();
    $arrayBirthday = explode('-', $user['user_birthday']);
    // var_dump($arrayBirthday);
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
    <link rel="stylesheet" href="/css/style-logado.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/hero-logado.css">
    <link rel="stylesheet" href="/css/content-logado.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/authenticate.css">

    <title>Editar Perfil - ORBO</title>
    <link rel="icon" href="/imagens/favicon.png">
</head>
<body>
    
    <!-- inicio cabecalho -->
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
            <div class="container">

                <a href="https://site.orbo.com.br/" class="navbar-brand" rel="home" itemprop="url"
                    style="width: 150px; height: 57px;"> <svg class="navbar-logo-svg" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 131.06 41.48">
                        <title>Orbo Software Jurídico</title>
                        <g class="main-layer">
                            <path class="navbar-logo-style-1"
                                d="M13.89,38.59A13.89,13.89,0,1,1,27.77,24.7,13.9,13.9,0,0,1,13.89,38.59ZM5.56,24.71a8.33,8.33,0,1,0,8.32-8.34A8.3,8.3,0,0,0,5.56,24.71Z"
                                fill="#fff"></path>
                            <path class="navbar-logo-style-1"
                                d="M93.4,25.62l.23.19a8.5,8.5,0,0,1,3.2,4.89,8.21,8.21,0,0,1-.87,6,9.07,9.07,0,0,1-5.54,4.49,7.87,7.87,0,0,1-2.32.31H82.59c-.07-.19-.09-4.46,0-4.92a.76.76,0,0,1,.16,0h.18c1.78,0,3.56,0,5.34,0a4,4,0,0,0,3.82-2.94,4.16,4.16,0,0,0-.14-2.63,3.17,3.17,0,0,0-1.85-1.84,4.48,4.48,0,0,0-1.73-.37c-1.8,0-3.61,0-5.41,0h-.35c-.06-.25-.06-4.21,0-4.49h4a4,4,0,0,0,.64-7.9,3.6,3.6,0,0,0-.66-.06c-2,0-4.08,0-6.12,0a7.78,7.78,0,0,0-2.7.46,4.17,4.17,0,0,0-2.88,3.73c0,.34,0,.67,0,1v15H69.36c0-.11,0-.22,0-.33V25.71c0-1.78,0-3.56,0-5.34a8.43,8.43,0,0,1,5.17-7.93,12.59,12.59,0,0,1,3.56-1,23.1,23.1,0,0,1,3.22-.19c1.7,0,3.4,0,5.11,0a9.11,9.11,0,0,1,8.81,7.13,8.12,8.12,0,0,1-1.61,7Z"
                                fill="#fff"></path>
                            <path class="navbar-logo-style-1"
                                d="M131.06,24.7a13.88,13.88,0,1,1-13.89-13.88A13.91,13.91,0,0,1,131.06,24.7Zm-5.54,0A8.34,8.34,0,1,0,117.29,33,8.36,8.36,0,0,0,125.52,24.7Z"
                                fill="#fff"></path>
                            <path class="navbar-logo-style-1"
                                d="M40.47,36.6H35c0-.12,0-.24,0-.36V27.45c0-2.2,0-4.39,0-6.58a9.54,9.54,0,0,1,.45-3.1,8.33,8.33,0,0,1,4.21-4.9,12.17,12.17,0,0,1,3.63-1.18,20.79,20.79,0,0,1,3.34-.26c2.43,0,4.85,0,7.28,0A8.38,8.38,0,0,1,59,13.1a9,9,0,0,1,3.67,5.68,8,8,0,0,1-1.51,6.58,8.83,8.83,0,0,1-5.51,3.45l-.24.06,0,0v0s0,0,0,0,0,0,0,.05l0,.06,5.25,7.47a.13.13,0,0,0,0,0l-.16,0h-6a.38.38,0,0,1-.34-.22c-1.18-1.75-2.36-3.51-3.55-5.26-.61-.91-1.22-1.83-1.84-2.74a.73.73,0,0,1-.14-.45v-3.6h.78c1.58,0,3.17.05,4.75,0a3.9,3.9,0,0,0,3.63-2.77,4,4,0,0,0-3.24-5.13,5.46,5.46,0,0,0-.57,0H46.13a8,8,0,0,0-2.9.52,4.13,4.13,0,0,0-2.68,3.45,8.79,8.79,0,0,0-.08,1.26v15Z"
                                fill="#fff"></path>
                            <g class="dot">
                                <circle class="navbar-logo-style-2" cx="25.64" cy="3.96" r="3.96" fill="#fff"></circle>
                            </g>
                        </g>
                    </svg> 
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <i class="fas fa-bars text-white"></i>
                </button>

                <div class="collapse navbar-collapse" id="nav-principal">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="vimeo/vimeo.php" class="nav-link">VIMEO</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="pages/ajuda.html" class="nav-link">Ajuda</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/baixar.html" class="nav-link">Baixar</a>
                        </li> -->
                        <li class="nav-item divisor"></li>
                        <li class="nav-item">
                            <a href="editProfile.php" class="nav-link">Editar</a>
                        </li>
                        <li class="nav-item ml-2">
                            <a href="/backend/logout.php" class="nav-link">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- fim cabecalho -->

    <!-- inicio seção home -->
    <section id="hero-logado" class="d-flex">
      <div class="container align-self-center content-hero">
          <div class="row">
              <div class="col-md-6">
                <h2>Olá <?=$user['user_nome']?>, seja bem vindo!</h2>
                <p class="hero-text">
                  Quer editar seu perfil? Encontrar uma playlist antiga? Descansar um pouco do trabalho? Você pode fazer tudo isso aqui.
                </p>
              </div>

              <div class="hero-img">
                <img src="/imagens/iphone-spotify.png" alt="">
              </div>
          </div>
      </div>
    </section>
    <!-- fim seção home -->

    <!-- inicio seção home -->
    <section id="content" class="d-flex">
      <div class="container align-self-center">

        <div class="row">

          <div class="col-md-12">

                  <h1>Visão geral da conta</h1>

          </div>

          <article class="col-md-12 data-perfil">

                  <h3>Perfil</h3>

                  <section class="user-data">
                    <form method="post" action="/backend/update.php" id="updateForm">
                      <table class="table-user">

                        <colgroup>
                          <col class="">
                          <col class="">
                        </colgroup>

                        <tbody>

                          <tr class="table-row">
                            <td class="">Nome do usuário:</td>
                            <td data-hj-suppress="true" class="" id="dataUser">
                              <input id="displayname" name="displayname" placeholder="Insira um nome de perfil" type="text" value="<?= $user['user_nome'] ?>" class="">
                            </td>
                          </tr>

                          <tr class="table-row">
                            <td class="">E-mail:</td>
                            <td data-hj-suppress="true" class="" id="dataEmail">
                              <input id="email" name="email" placeholder="Insira seu e-mail." type="text" value="<?= $user['user_email'] ?>" class="">
                            </td>
                          </tr>
                          
                          <tr class="table-row">
                            <td class="">Data de nascimento:</td>
                            <td data-hj-suppress="true" class="" id="dataBirthday">
                              <div class="parent-group d-flex">
                                <div class="day">
                                    <div class="">

                                        <div class="">
                                            <label for="day" class="">Dia</label>
                                        </div>

                                        <input id="day" maxlength="2" min="1" max="31" name="day" pattern="((0?[1-9])|([12][0-9])|(3[01]))" placeholder="DD" type="number" value="<?= $arrayBirthday[2] ?>" class="">

                                        <div class="error" id="dayErr"></div>
                                    </div>
                                </div>
                                
                                <div class="month">
                                    <div class="">
                                        <div class="">
                                            <label for="month" class="">Mês</label>
                                        </div>
                                        <div class="">
                                            <select id="month" name="month" value="<?= $arrayBirthday[1] ?>"  class="">
                                                <option disabled="" value="">Mês</option>
                                                <option value="01">janeiro</option>
                                                <option value="02">fevereiro</option>
                                                <option value="03">março</option>
                                                <option value="04">abril</option>
                                                <option value="05">maio</option>
                                                <option value="06">junho</option>
                                                <option value="07">julho</option>
                                                <option value="08">agosto</option>
                                                <option value="09">setembro</option>
                                                <option value="10">outubro</option>
                                                <option value="11">novembro</option>
                                                <option value="12">dezembro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="year">
                                    <div class="">
                                        <div class="">
                                            <label for="year" class="">Ano</label>
                                        </div>

                                        <input id="year" maxlength="4" name="year" min="1950" max="2050" pattern="(19[0-9]{2})|(200)[0-4]" placeholder="AAAA"  type="number" value="<?= $arrayBirthday[0] ?>" class="">

                                        <div class="error" id="yearErr"></div>
                                    </div>
                                </div>

                              </div>
                              Atual: <?= $user['user_birthday'] ?>
                            </td>
                          </tr>
                          
                          <tr class="table-row">
                            <td class="">Sexo:</td>
                            <td data-hj-suppress="true" class="" id="dataCountry">
                                <div class="parent-group d-flex">

                                    <label class="">

                                        <input type="radio" name="gender" id="gender"  value="masculino" class="">
                                        <span class="">Masculino</span>

                                    </label>

                                    <label class="">

                                        <input type="radio" name="gender"  value="feminino" class="">
                                        <span class="">Feminino</span>

                                    </label>

                                    <label class="">
                                        
                                        <input type="radio" name="gender"  value="neutro" class="">
                                        <span class="">Prefiro não informar</span>

                                    </label>

                                </div>
                                Atual: <?= $user['user_gender'] ?>
                            </td>
                          </tr>

                          <tr class="table-row">
                            <td class="">Receber e-mails sobre nossos produtos e serviços:</td>
                            <td data-hj-suppress="true" class="" id="dataCountry">
                                <input type="checkbox" name="shareData" class="share_data check-terms">
                                <span class="">
                                    <span class="">
                                        Compartilhar meus dados cadastrais
                                    </span>
                                </span>
                                <br>
                                Atual: <?= $user['user_marketing'] == 1 ? "aceito" : "não aceito" ?>
                            </td>
                          </tr>

                        </tbody>

                      </table>
                    </form>
                  </section>

          </article>

          <div class="col-md-12">
            <a class="cta-edit" onclick="submitForm()" href="javascript:;">Atualizar</a>
            <a class="cta-edit danger" href="/backend/delete.php" style="margin: 0 0 0 1rem;">Deletar Conta</a>
          </div>

        </div>

      </div>

      </div>
    </section>
    <!-- fim seção home -->
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="https://site.orbo.com.br/" class="navbar-brand" rel="home" itemprop="url" style="width: 150px; height: 57px;"> <svg class="navbar-logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 131.06 41.48"><title>Orbo Software Jurídico</title> <g class="main-layer"> <path class="navbar-logo-style-1" d="M13.89,38.59A13.89,13.89,0,1,1,27.77,24.7,13.9,13.9,0,0,1,13.89,38.59ZM5.56,24.71a8.33,8.33,0,1,0,8.32-8.34A8.3,8.3,0,0,0,5.56,24.71Z" fill="#fff"></path> <path class="navbar-logo-style-1" d="M93.4,25.62l.23.19a8.5,8.5,0,0,1,3.2,4.89,8.21,8.21,0,0,1-.87,6,9.07,9.07,0,0,1-5.54,4.49,7.87,7.87,0,0,1-2.32.31H82.59c-.07-.19-.09-4.46,0-4.92a.76.76,0,0,1,.16,0h.18c1.78,0,3.56,0,5.34,0a4,4,0,0,0,3.82-2.94,4.16,4.16,0,0,0-.14-2.63,3.17,3.17,0,0,0-1.85-1.84,4.48,4.48,0,0,0-1.73-.37c-1.8,0-3.61,0-5.41,0h-.35c-.06-.25-.06-4.21,0-4.49h4a4,4,0,0,0,.64-7.9,3.6,3.6,0,0,0-.66-.06c-2,0-4.08,0-6.12,0a7.78,7.78,0,0,0-2.7.46,4.17,4.17,0,0,0-2.88,3.73c0,.34,0,.67,0,1v15H69.36c0-.11,0-.22,0-.33V25.71c0-1.78,0-3.56,0-5.34a8.43,8.43,0,0,1,5.17-7.93,12.59,12.59,0,0,1,3.56-1,23.1,23.1,0,0,1,3.22-.19c1.7,0,3.4,0,5.11,0a9.11,9.11,0,0,1,8.81,7.13,8.12,8.12,0,0,1-1.61,7Z" fill="#fff"></path> <path class="navbar-logo-style-1" d="M131.06,24.7a13.88,13.88,0,1,1-13.89-13.88A13.91,13.91,0,0,1,131.06,24.7Zm-5.54,0A8.34,8.34,0,1,0,117.29,33,8.36,8.36,0,0,0,125.52,24.7Z" fill="#fff"></path> <path class="navbar-logo-style-1" d="M40.47,36.6H35c0-.12,0-.24,0-.36V27.45c0-2.2,0-4.39,0-6.58a9.54,9.54,0,0,1,.45-3.1,8.33,8.33,0,0,1,4.21-4.9,12.17,12.17,0,0,1,3.63-1.18,20.79,20.79,0,0,1,3.34-.26c2.43,0,4.85,0,7.28,0A8.38,8.38,0,0,1,59,13.1a9,9,0,0,1,3.67,5.68,8,8,0,0,1-1.51,6.58,8.83,8.83,0,0,1-5.51,3.45l-.24.06,0,0v0s0,0,0,0,0,0,0,.05l0,.06,5.25,7.47a.13.13,0,0,0,0,0l-.16,0h-6a.38.38,0,0,1-.34-.22c-1.18-1.75-2.36-3.51-3.55-5.26-.61-.91-1.22-1.83-1.84-2.74a.73.73,0,0,1-.14-.45v-3.6h.78c1.58,0,3.17.05,4.75,0a3.9,3.9,0,0,0,3.63-2.77,4,4,0,0,0-3.24-5.13,5.46,5.46,0,0,0-.57,0H46.13a8,8,0,0,0-2.9.52,4.13,4.13,0,0,0-2.68,3.45,8.79,8.79,0,0,0-.08,1.26v15Z" fill="#fff"></path> <g class="dot"> <circle class="navbar-logo-style-2" cx="25.64" cy="3.96" r="3.96" fill="#fff"></circle> </g> </g> </svg> </a>
                </div>

                <div class="col-md-2">
                    <h4>company</h4>
                    <ul class="navbar-nav">
                        <li><a href="#">Teste</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h4>comunidades</h4>
                    <ul class="navbar-nav">
                        <li><a href="#">Teste</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <h4>links uteis</h4>
                    <ul class="navbar-nav">
                        <li><a href="#">Teste</a></li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="/imagens/facebook.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/imagens/twitter.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/imagens/instagram.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="/js/validation-form.js"></script>
    <script>
        function submitForm() {
            document.getElementById("updateForm").submit()
        }
    </script>
    
</body>
</html>