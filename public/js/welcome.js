setTimeout(function(){
    const mk = document.getElementById("list").style.display = "inline";
}, 1000);
setTimeout(function(){
    const stenio = document.getElementById("aparecer").style.display = "";
}, 1000);
setTimeout(function(){
    const stenio2 = document.getElementById("players-radio").style.display = "block";
}, 1000);

function mudançaDeConteúdo() {
const a = document.getElementById("Consagramos-todo-nosso-ser-a-ti").style.display = "none";
var s = document.getElementById("o").innerHTML;
document.getElementById("tudo").innerHTML = s;
}

function Peticao() {
const mateus = document.getElementById("Consagramos-todo-nosso-ser-a-ti").style.display = "none";
const marcos = document.getElementById("o").style.display = "none";
var lucas = document.getElementById("requisitarOracao").innerHTML;
document.getElementById("tudo").innerHTML = lucas;
}

function input(){
  const m = document.getElementById("input-nome").style.display = "";
}

function pause(){
    var limonadadadada = document.getElementById("radio").src = "";
    var limaoaa = document.getElementById("play").style.display="";
    var asja = document.getElementById("pause").style.display="none";
}
function play(){
    var limonadadadada = document.getElementById("radio").src = "https://ssl.xcast.com.br:13322/stream?icy=http";
    var limaoaa = document.getElementById("pause").style.display="";
    var asja = document.getElementById("play").style.display="none";


}

  






const oracao = document.getElementById("requisitarOracao");
                  oracao.addEventListener("submit",(e)=>{
                      e.preventDefault();
                  })  
                  
function logar(){
    window.location.href = "/login";
}
function escuro(){
    var b = document.getElementById("body").style.background="grey";
    var c = document.getElementById("escuro").style.display="none";
    var d = document.getElementById("natural").style.display="block"
  }
  function claro(){
    var b = document.getElementById("body").style.background="";
    var c = document.getElementById("natural").style.display="none"
    var d = document.getElementById("escuro").style.display="block";
  }
