<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/Sem Título-1.png" type="image/x-icon"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/css/welcome.css"/>

    <title>DEMED</title>
</head>
<body id="body">
    <nav>
        <img class="list" id="list" data-bs-toggle="offcanvas" href="#botaolista" role="button" aria-controls="offcanvasExample" src="/assets/list_white_24dp.svg">
        <div onclick="escuro()" class="modo-escuro" id="escuro">  </div>
        <div onclick="claro()" class="modo-escuro" id="natural"  style="display: none"> </div>

    </nav>

     <!-- <div class="logo_demed"> </div>  -->
     <video autoplay loop
      muted  id="ieademe" >
        <source src="/assets/WhatsApp Video 2021-06-02 at 17.51.11.mp4" type="video/mp4" alt="Girl in a jacket">
    </video>
    <audio style="display: none;" id="radio" autoplay src="https://ssl.xcast.com.br:13322/stream?icy=http"></audio>
    <div id="players-radio"class="players-radio">
      <div>
        <img id="play" onclick="play()" style="text-align: center; display:none;" src="/assets/botao-play.svg">
        <img id="pause" onclick="pause()" style="text-align: center; " src="/assets/botao-de-pausa.svg">
      </div>
    </div>
<!-- ................................................................................................................................................................................ -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="botaolista" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="person_black_24dp.svg"></h5>
      @guest
        <P>Usuário</P>
      @endguest
      @auth
        <p>{{Auth::user()->name}}</p>
        <p>{{Auth::user()->data_nascimento}}</p>
      @endauth
    </div>
    <div class="offcanvas-body">
      <div class="dropdown.mt-3">
          <div class="lateral-items">
      </div>
    </div>
    </div>
    @guest
      <button onclick="logar()" class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">login</button>
    @endguest
    @auth
      <a id="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
        Logout
      </a>
      <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
    @endauth
  </div>

<!-- .............................................................................................................................................. -->
    <div class="container-main" id="aparecer" style="display:none;">
        <div class="template-1">  <a><img id="a"  data-bs-toggle="modal" data-bs-target="#igreja" class="template" src="/assets/igreja.svg"></a> <p href="#a" class="template_p">Igreja</p></div>
        <div class="template-2"> <a href="#"><img id="b"  data-bs-toggle="modal" data-bs-target="#oração" class="template" src="/assets/oracao.svg"></a> <p href="#b" class="template_p" >Oração</p> </div>
        <div class="template-3">  <a href="#"><img  data-bs-toggle="modal" data-bs-target="#campoMissionário" class="template" src="/assets/missao.svg"></a> <p class="template_p" >Campo missionário</p></div>
        <div class="template-4">  <a href="#"><img data-bs-toggle="modal" data-bs-target="#galeria" class="template" src="/assets/galeria.svg"></a> <p class="template_p" >Galeria</p></div>
        <div class="template-5"> <a href="#"><img data-bs-toggle="modal" data-bs-target="#eventos" class="template" src="/assets/evento.svg"></a>  <p class="template_p">Eventos</p></div>
        <div class="template-6">  <a href="#"><img data-bs-toggle="modal" data-bs-target="#contribuicao" class="template" src="/assets/apoio-suporte.svg"></a> <p class="template_p" >Contribuição</p></div>
        <div class="template-7">  <a href="#"><img data-bs-toggle="modal" data-bs-target="#liturgia"class="template" src="/assets/biblia-com-variante-do-simbolo-da-cruz.svg"></a> <p class="template_p" >Liturgia do dia</p></div>
        <div class="template-8">  <a href="#"><img data-bs-toggle="modal" data-bs-target="#shopping" class="template" src="/assets/vista-lateral-vazia-do-carrinho-de-compras.svg"></a> <p class="template_p" >Shopping</p></div>
        <div class="template-9">  <a href="#"><img data-bs-toggle="modal" data-bs-target="#videos" class="template" src="/assets/video-chamada.svg"></a> <p class="template_p" >Videos</p></div>
    </div>
</div>

<!-- ................................................................................................................................................................ -->
<div class="modal fade" id="oração" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="/assets/Sem Título-1.png">
            <div class="requisitar">
                <h3  onclick="mudançaDeConteúdo()">Orar</h3>
                <h3  onclick="Peticao()">Pedir oração</h3>
            </div>
            <h1 id="tudo"> </h1>
            <div id="o" class="dispor" style="display: none;">
                <div class="o"> <input type="checkbox" onclick="input()"  > Se identificar </div>
                <div > <input type="text" placeholder="Nome" id="input-nome" style="display: none;  background: rgb(64, 224, 208); width:80%;"></div>
            </div>
                <div  id="requisitarOracao" style="display: none;">
                    <form class="o" id="label-motivo-oracao">
                        <label>Nome</label>
                        <input type="text">
                        <label>Pelo que devemos orar?</label>
                        <textarea></textarea>
                        <button type="submit"> enviar</button>
                    </form>
                </div>

            <div id="Consagramos-todo-nosso-ser-a-ti">
            <h1 >1. Comece a orar</h1>
                <p>Antes de começar, encontre um lugar tranquilo onde você
                     se sinta confortável. Uma boa maneira de começar é se
                     dirigir nominalmente a Deus. Você pode dizer “Amado Deus”,
                     “Amado Pai Celestial”, “Nosso Pai que estás nos céus”, ou simplesmente “Deus”.</p>
                <h1>2. Converse com Deus</h1>
                <p>Compartilhe com Deus seus sentimentos sobre outras pessoas. Você pode orar pelas necessidades delas,
                 ou perguntar como pode amá-las e ajudá-las.</p>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
<!-- ............................................................................................................................................................................... -->
  <div class="modal fade" id="igreja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="/assets/Sem Título-1.png">
            <h1 style=" background-color: rgb(64, 224, 208);"> Assembléia De Deus  </h1>
            <p>{{$about ?? ''}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- ........................................................................................................................................... -->
  <div class="modal fade" id="campoMissionário" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header3">
            <div class="imagem"></div>
        </div>
        <div class="modal-body">
                <div style="display: flex;  background: rgb(64, 224, 208);">
                    <img class="foto-missionario" src="https://cultura.estadao.com.br/blogs/babel/wp-content/uploads/sites/110/2019/07/ESTEV%C3%83O.jpg">
                    <div class="missionário">
                        <h1>Stênio Sousa</h1>
                        <p>Nosso missionário, hoje hospedado em x local.</p>
                    </div>
                </div>
            <div style="display: flex; margin-top: 20px;  background: rgb(64, 224, 208);">
                <div class="missionário2">
                    <h1>Stênio Sousa</h1>
                    <p>Nosso missionário, hoje hospedado em x local.</p>
                </div>
                <img class="foto-missionario" src="https://blog.unyleya.edu.br/wp-content/uploads/2017/12/saiba-como-a-educacao-ajuda-voce-a-ser-uma-pessoa-melhor.jpeg">
            </div>
            <h3>Porque fazer missões?</h3>
            <p>A Igreja é conclamada por Jesus a ser sal e luz no “mundo”. Ela é desafiada
                a transformar não somente as pessoas, mas o meio em que a Igreja e cada pessoa está inserida.
                Participar da missão significa participar ao lado de Deus de sua
                intenção de promover e amar o ser humano.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- ......................................................................................................................................... -->
  <!-- Gallery -->
  <div class="modal fade" id="galeria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="fotos">
                <img src="https://www.inazareno.com.br/site/uploads/post/2018/07/12-1-1531664536mtuzmty2nduzng.jpg">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- ..................................................................................................................................................... -->
  <div class="modal fade" id="eventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h1>Informar data</h1>
           <input type="date">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- ...................................contribuicao.................................................................................................................. -->
  <div class="modal fade" id="contribuicao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- ...................................Liturgia.................................................................................................................. -->
  <div class="modal fade" id="liturgia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
          <a href="https://biblia.novageracao.org/nvi/AT_Gn"><img id="biblia" src="assets/book_black_24dp.svg"></a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
    <!-- ...................................Shopping.................................................................................................................. -->
    <div class="modal fade" id="shopping" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
<!-- ....................................VIDEOS.................................................................................................... -->
<div class="modal fade" id="videos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/gi0Z0Ef783E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- ........................................................................................................................................ -->
<script type="text/javascript" src="/js/welcome.js"></script>
</body>
</html>
