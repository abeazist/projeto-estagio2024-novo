<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo de Pesquisa UTFPR-CM</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" type="text/css" href="wp-content/themes/teste/style.css">
    <link rel="stylesheet" href="template.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
    <header>
      <div class="menu-area">
      <span class="logotipo">
          <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#FFFFFF">
            <path d="M172-120q-41.78 0-59.39-39T124-230l248-280v-270h-52q-12.75 0-21.37-8.68-8.63-8.67-8.63-21.5 0-12.82 8.63-21.32 8.62-8.5 21.37-8.5h320q12.75 0 21.38 8.68 8.62 8.67 8.62 21.5 0 12.82-8.62 21.32-8.63 8.5-21.38 8.5h-52v270l248 280q29 32 11.39 71T788-120H172Zm-12-60h640L528-488v-292h-96v292L160-180Zm318-300Z"/>
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
          <a href="../conta/conta.html"><button class="buttonheader">Conta</button></a>
      </div>


      <div class="fundo">
        <section>
          <h1 class="titulo">
            Grupo de Pesquisa de Substâncias Bioativas<br />
            e Química de Materiais
          </h1>
          <br/>
          <strong>
            <p id="textinho-introducao">
              O Grupo de Pesquisa em Substâncias Bioativas e<br />
              Química dos Materiais (GPSBQM) conta com a participação<br />
              de estudantes e docentes da UTFPR de<br />
              Campo Mourão, acompanhe em seus<br />
              projetos em seus estudos ao longo do cruso.
            </p>
            <br />
          </strong>
          <button id="vermais">Ver mais!</button>
        </section>
      </div>

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
              src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/acidocinamico.jpg"
              alt=""
          /></a>
          <a href=""
            ><img class="img-projeto" id="dois" src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/3.png" alt=""
          /></a>
        </div>
        <div class="imagens-2">
          <a href=""
            ><img class="img-projeto" id="tres" src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/HIV.png" alt=""
          /></a>
          <a href=""
            ><img
              class="img-projeto"
              id="quatro"
              src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/verdeHomem.jpeg"
              alt=""
          /></a>
        </div>
      </div>
    </section>

    <div class="equipe">
    <section id="equipe">
    <div class="container-equipe">
    <div class="box-pessoas">
      <img class="foto-perfil" width="100px" src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/rafaelle-foto.png" alt="Foto de Rafaelle Romero">
      <h2>Rafaelle Romero</h2>
      <p class="descricao">Docente de Engenharia Química UTFPR</p>
      <div class="social-links">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
    <div class="box-pessoas">
      <img class="foto-perfil" src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/rafaelle-foto.png" alt="Foto de Adriano Lopes">
      <h2>Adriano Lopes</h2>
      <p class="descricao">Docente de Engenharia Química UTFPR</p>
      <div class="social-links">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
    <div class="box-pessoas">
      <img class="foto-perfil" src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/rafaelle-foto.png" alt="Foto de Patrick Aoyage">
      <h2>Patrick Aoyage</h2>
      <p class="descricao">Estudante de Engenharia UTFPR</p>
      <div class="social-links">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
    <div class="box-pessoas">
      <img class="foto-perfil" src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/rafaelle-foto.png" alt="Foto de Giovana Fernanda">
      <h2>Giovana Fernanda</h2>
      <p class="descricao">Estudante Técnico em Informática para Internet UTFPR</p>
      <div class="social-links">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
    <div class="box-pessoas">
      <img class="foto-perfil" src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/rafaelle-foto.png" alt="Foto de Beatriz Oliveira">
      <h2>Beatriz Oliveira</h2>
      <p class="descricao">Estudante Técnico em Informática para Internet UTFPR</p>
      <div class="social-links">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
    <div class="box-pessoas">
      <img class="foto-perfil" src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/rafaelle-foto.png" alt="Foto de Beatriz Oliveira">
      <h2>Beatriz Oliveira</h2>
      <p class="descricao">Estudante Técnico em Informática para Internet UTFPR</p>
      <div class="social-links">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
    <div class="box-pessoas">
      <img class="foto-perfil" src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/rafaelle-foto.png" alt="Foto de Beatriz Oliveira">
      <h2>Beatriz Oliveira</h2>
      <p class="descricao">Estudante Técnico em Informática para Internet UTFPR</p>
      <div class="social-links">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
    <div class="box-pessoas">
      <img class="foto-perfil" src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/rafaelle-foto.png" alt="Foto de Beatriz Oliveira">
      <h2>Beatriz Oliveira</h2>
      <p class="descricao">Estudante Técnico em Informática para Internet UTFPR</p>
      <div class="social-links">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </div>
    </section>
    </div>

    <div class="fundo-fotos">
      <section class="secao-fotos">
        <h1 class="h1-fotos">Fotos</h1>
        <div class="area">
          <div class="topico">
            <a href=""
              ><img width="400px" src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/5845210.jpg" alt=""
            /></a>
            <p class="p-fotos">Empreendeweek 2024</p>
          </div>
          <div class="topico">
            <a href=""
              ><img
                width="400px"
                src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/5845210.jpg"
                alt=""
            /></a>
  
            <p class="p-fotos">Bioativos</p>
          </div>
          <div class="topico">
            <a href=""
              ><img
                width="400px"
                src="http://localhost/projeto-estagio2024-novo/wp-content/uploads/2025/01/5845210.jpg"
                alt=""
            /></a>
            <p class="p-fotos">Laboratório</p>
          </div>
        </div>
      </section>
      
    </div>
    </header>
    
    