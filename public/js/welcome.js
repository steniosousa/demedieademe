setTimeout(function(){
    const mk = document.getElementById("list").style.display = "inline";
}, 1000);
setTimeout(function(){
    const stenio = document.getElementById("aparecer").style.display = "";
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

const oracao = document.getElementById("requisitarOracao");
                  oracao.addEventListener("submit",(e)=>{
                      e.preventDefault();
                  })  
                  
function logar(){
    window.location.href = "/login";

}