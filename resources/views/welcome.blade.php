<!-- 1 joao 2:6 "Aquele que diz que segue a Ele, deve andar como Ele andou" -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/css/welcome.css"/>
    <script type="text/javascript" src="/js/welcome.js"></script>
    <title>DEMED</title>
</head>
<body>
    <nav>
        <img class="list" id="list" data-bs-toggle="offcanvas" href="#botaolista" role="button" aria-controls="offcanvasExample" src="/assets/list_white_24dp.svg">
    </nav>

     <!-- <div class="logo_demed"> </div>  -->
     <video autoplay loop
      muted  id="ieademe" >
        <source src="/assets/WhatsApp Video 2021-06-02 at 17.51.11.mp4" type="video/mp4" alt="Girl in a jacket">
    </video>    
<!-- ................................................................................................................................................................................ -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="botaolista" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="person_black_24dp.svg"></h5>
      <P>Usuário</P>
    </div>
    <div class="offcanvas-body">
      <div class="dropdown.mt-3">
          <div class="lateral-items">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
          Oração
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a  class="dropdown-item"  href="#">Pedir oração</a></li>
          <li><a class="dropdown-item" href="#">Inceteder</a></li>
        </ul>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
           S.O.S
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="https://wa.me/5585989645461?text=Olá%20,meu nome é">Whatsapp</a></li>
          </ul>
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
           publicar bênção
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
            menu drop
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
      </div>
    </div>
    </div>
    <audio  controls autoplay src=" https://ssl.xcast.com.br:13322/stream?icy=http"></audio>
    <button onclick="logar()" class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">login</button>
  </div> 

<!-- .............................................................................................................................................. -->
    <div class="container-main" id="aparecer" style="display:none;">
        <div class="template-1">  <a><img id="a"  data-bs-toggle="modal" data-bs-target="#igreja" class="template" src="/assets/igreja.svg"></a> <p href="#a" class="template_p" >Igreja</p></div> 
        <div class="template-2"> <a href="#"><img id="b"  data-bs-toggle="modal" data-bs-target="#oração" class="template" src="/assets/oracao.svg"></a> <p href="#b" class="template_p" >Oração</p> </div>
        <div class="template-3">  <a href="#"><img  data-bs-toggle="modal" data-bs-target="#campoMissionário" class="template" src="/assets/missao.svg"></a> <p class="template_p" >Campo missionário</p></div>
        <div class="template-4">  <a href="#"><img data-bs-toggle="modal" data-bs-target="#galeria" class="template" src="/assets/galeria.svg"></a> <p class="template_p" >Galeria</p></div>
        <div class="template-5"> <a href="#"><img data-bs-toggle="modal" data-bs-target="#eventos" class="template" src="/assets/evento.svg"></a>  <p class="template_p">Eventos</p></div>
        <div class="template-6">  <a href="#"><img class="template" src="/assets/apoio-suporte.svg"></a> <p class="template_p" >Contribuição</p></div>
        <div class="template-7">  <a href="#"><img class="template" src="/assets/biblia-com-variante-do-simbolo-da-cruz.svg"></a> <p class="template_p" >Liturgia do dia</p></div>
        <div class="template-8">  <a href="#"><img class="template" src="/assets/vista-lateral-vazia-do-carrinho-de-compras.svg"></a> <p class="template_p" >Shopping</p></div>
        <div class="template-9">  <a href="#"><img class="template" src="/assets/video-chamada.svg"></a> <p class="template_p" >Videos</p></div>
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
                <div > <input type="text" placeholder="Nome" id="input-nome" style="display: none;"></div>
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
            <p>A ieademe é composta por x igrejas, cada qual 
                localizada em posições estratégicas para atrair mais almas ao Reino de nosso Senhor Jesus.
             </p>
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
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

<!-- ........................................................................................................................................ -->

</body>
</html>
