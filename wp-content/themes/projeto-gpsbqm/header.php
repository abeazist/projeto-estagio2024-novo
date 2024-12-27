<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo de Pesquisa UTFPR-CM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" type="text/css" href="wp-content/themes/teste/style.css">
    <link rel="stylesheet" href="template.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header>
    <span class="logotipo">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="48px"
          viewBox="0 -960 960 960"
          width="48px"
          fill="#FFFFFF"
        >
          <path
            d="M172-120q-41.78 0-59.39-39T124-230l248-280v-270h-52q-12.75 0-21.37-8.68-8.63-8.67-8.63-21.5 0-12.82 8.63-21.32 8.62-8.5 21.37-8.5h320q12.75 0 21.38 8.68 8.62 8.67 8.62 21.5 0 12.82-8.62 21.32-8.63 8.5-21.38 8.5h-52v270l248 280q29 32 11.39 71T788-120H172Zm-12-60h640L528-488v-292h-96v292L160-180Zm318-300Z"
          />
        </svg>
        GPSBQM
      </span>
      <nav class="menu">
        <ul>
          <li><a href="inicio.html">Início</a></li>
          <li><a href="/projeto/projetos/projeto.html">Projetos</a></li>
          <li><a href="/projeto/equipe/equipe.html">Equipe</a></li>
          <li><a href="/projeto/fotos/fotos.html">Fotos</a></li>
        </ul>
      </nav>
      <a href="../conta/conta.html"
        ><button class="buttonheader">Conta</button></a
      >    
      <section id="projetos">
      <h1 class="titulo-projeto">Projetos</h1>
      <br />
      <div class="container">
        <div class="textos">
          <p id="textinho-introducao">
            Esses são alguns dos projetos trabalhados no laboratório da UTFPR de
            Campo Mourão, aqui temos projetos que foram apresentados em grandes
            eventos de pesquisa, tecnologia, inovação como o, SICITE, SEI,
            Congressos Nacionais e muito mais. Para conhecer mais projetos como
            esses, <a href="acessar-projetos/extensao-projetos.html">acesse</a>.
          </p>
        </div>
        <div class="imagens-1">
          <a href="detalhes-projetos/esferas.html"
            ><img
              class="img-projeto"
              id="um"
              src="<?php echo get_template_directory_uri(); ?>wp-content/themes/projeto-qpsbqm/imagens/acidocinamico.jpg
" 
              alt=""
          /></a>
          <a href=""
            ><img class="img-projeto" id="dois" src="<?php echo get_template_directory_uri(); ?>/img/3.png" alt=""
          /></a>
        </div>
        <div class="imagens-2">
          <a href=""
            ><img class="img-projeto" id="tres" src="<?php echo get_template_directory_uri(); ?>/img/HIV.png" alt=""
          /></a>
          <a href="">
            <img
              class="img-projeto"
              id="quatro"
              src="<?php echo get_template_directory_uri(); ?>/img/verdeHomem.jpeg" alt=""/>
          </a>
        </div>
      </div>
    </section>

    <!-- EQUIPE -->

    <section id="equipe">
      <div class="box-pessoas">
        <br>
        <img style="border-radius: 100%;" height="200px" width="200px" src="<?php echo get_template_directory_uri(); ?>/img/pessoa-2.jpg" alt="">
        <h2>Beatriz</h2>
        <p>Estudante do Técnico Integrado em Informática para Internet</p>
      </div>
      <div>
      <div class="box-pessoas">
        <br>
        <img style="border-radius: 100%;" height="200px" width="200px" src=" <?php echo get_template_directory_uri(); ?>/img/pessoa-1.jpg" alt="">
        <h2>Beatriz</h2>
        <p>Estudante do Técnico Integrado em Informática para Internet</p>
      </div>
      <div>
      <div class="box-pessoas">
        <br>
        <img style="border-radius: 100%;" height="200px" width="200px" src=" <?php echo get_template_directory_uri(); ?>/img/pessoa-3.jpg" alt="">
        <h2>Beatriz</h2>
        <p>Estudante do Técnico Integrado em Informática para Internet</p>
      </div>
      <div>
        
      </div>
    </section>

    <!-- FOTOS -->
    <div class="fundo-fotos">
      <section class="secao-fotos">
        <h1 class="h1-fotos">Fotos</h1>
        <div class="area">
          <div class="topico">
            <a href=""
              ><img width="400px" src="<?php echo get_template_directory_uri(); ?>/img/evento-científico.jpg" alt=""
            /></a>
            <p class="p-fotos">Empreendeweek 2024</p>
          </div>
          <div class="topico">
            <a href=""
              ><img
                width="400px"
                src="<?php echo get_template_directory_uri(); ?> /img/close-up-scientist-holding-petri-dish.jpg"
                alt=""
            /></a>
  
            <p class="p-fotos">Bioativos</p>
          </div>
          <div class="topico">
            <a href=""
              ><img
                width="400px"
                src="<?php echo get_template_directory_uri(); ?> /img/woman-working-laborator (1).jpg"
                alt=""
            /></a>
            <p class="p-fotos">Laboratório</p>
          </div>
        </div>
      </section>
    </div>
    </header>
    
    