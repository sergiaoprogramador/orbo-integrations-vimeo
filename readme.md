# Teste de Integrações e Uso do Vimeo

### Introduction
Do desafio proposto:

- Criar e Integrar o Front-end do Vimeo SDK
    - Chat de Bate-Papo
    - Ferramentas de Enquetes

- Criar uma Classe PHP  para usar e testar os métodos HTTP de utilização do Vimeo no Backend
    - CRUD Videos files
    - CRUD Livestream
    - Dados RMTP

### Installation
<!-- O Laravel possui um conjunto de requisitos para funcionar perfeitamente em ambientes específicos. 
Esta seção específica - [requisítos do laravel](https://laravel.com/docs/7.x#server-requirements) - Laravel Documentação.

Para compilar o projeto é necessário ter instalado o [Composer](https://getcomposer.org/) e [Node](https://nodejs.org/) em sua máquina.

Assumindo que sua máquina possua os requisitos listdos - Vamos processar a instalação e compilar o projeto para ser executado.

1. Abra no cmd ou aplicativo de terminal e navegue até esta pasta
2. Execute os seguintes comandos

```bash
composer install
```

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

```bash
npm install
```

```bash
npm run dev
```

```bash
php artisan serve
``` -->

<!-- E navegue até o link do servidor gerado (http://127.0.0.1:8000) -->

### Copyright

Sergio Ramos - [sergiaoprogramador.github.io](https://sergiaoprogramador.github.io)


# Documentation

## Indíce
1. [Player SDK - ORBO Integration](#orboSdk)
    1. [Criar e Integrar o Front-end do Vimeo SDK](#orboFrontSdk)
        1. [Chat de Bate-Papo](#orboFrontChat)
        2. [Ferramentas de Enquetes](#orboFrontEnquete)
2. [API - ORBO Integration](#orboApi)
    1. [Classe PHP para gerenciamneto de integrações com Vimeo](#orboPhpClassIntegration)
        1. [CRUD Videos files](#orboCrudVideos)
        2. [CRUD Livestream](#orboCrudLivestream)
        3. [Dados RMTP](#orboLinkRmtp)
3. [Outros](#outros)

## Player SDK - ORBO Integration <a name="orboSdk"></a>

Antes de qualquer coisa devemos importar a SDK 
ˋˋˋ
<script src="https://player.vimeo.com/api/player.js"></script>
ˋˋˋ

Podemos usar o Player embed dentro de nossa página através de um Iframe ou podemos criar o Player dentro de uma <div> referenciada pelo ID. Vejamos ambos os casos a seguir: 

1 Player embedado Iframe
ˋˋˋ
<body>

  <iframe src="https://player.vimeo.com/video/{video_id}" width="{video_width}" height="{video_height}" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

</body>
ˋˋˋ

2 Player dentro da <div>
ˋˋˋ
<body>

  <div id="playerOrbo"></div>

</body>
ˋˋˋ

ˋˋˋ
<script>
  var optionsPlayer1 = {
    id: idVideo,
    width: larguraVideo
  }
  var videoPlayer1 = new Vimeo.Player('#idTagDiv', optionsPlayer1)
  videoPlayer1.setVolume(.5)
  videoPlayer1.on('play', function() {
    console.log('Played the first video')
  })
</script>
ˋˋˋ

### Criar e Integrar o Front-end do Vimeo SDK <a name="orboFrontSdk"></a>
This is a sub paragraph, formatted in heading 3 style

#### Chat de Bate-Papo <a name="orboFrontChat"></a>
This is a sub paragraph, formatted in heading 4 style

#### Ferramentas de Enquetes <a name="orboFrontEnquete"></a>
This is a sub paragraph, formatted in heading 4 style

## API - ORBO Integration <a name="orboApi"></a>
Some introduction text, formatted in heading 2 style

### Classe PHP para gerenciamneto de integrações com Vimeo <a name="orboPhpClassIntegration"></a>
This is a sub paragraph, formatted in heading 3 style

#### CRUD Videos files <a name="orboCrudVideos"></a>
This is a sub paragraph, formatted in heading 4 style

#### CRUD Livestream <a name="orboCrudLivestream"></a>
This is a sub paragraph, formatted in heading 4 style

#### Dados RMTP <a name="orboLinkRmtp"></a>
This is a sub paragraph, formatted in heading 4 style

## Outros paragraph <a name="outros"></a>
The second paragraph text
