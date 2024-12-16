let boxBuscar = document.querySelector(".buscar-box");
let lupa = document.querySelector(".lupa-buscar");
let btnFechar = document.querySelector(".btn-fechar");

lupa.addEventListener("click", () => {
  boxBuscar.classList.add("ativar");
});
btnFechar.addEventListener("click", () => {
  boxBuscar.classList.remove("ativar");
});

// Header dinâmico

let navbar = document.querySelector('#header')
document.addEventListener("scroll", ()=>{
  let scrollTop = window.scrollY

  if (scrollTop >0){
    navbar.classList.add('rolar')
  } else {
    navbar.classList.remove('rolar')
  }

} )

// cart _________________________________-

let carrinhoCar = document.querySelector('.carrinhoCar');
let cart = document.querySelector('.cart');
let closeCart = document.querySelector('#close-cart');

carrinhoCar.onclick = () => {
  cart.classList.add("ativo");
};
closeCart.onclick = () => {
  cart.classList.remove("ativo");
};

// carro funcional --------------------------------------------

if (document.readyState == 'loading'){
  document.addEventListener("DOMContentLoaded",ready); 
} else {
  ready();
}

// making


function ready() {
  // Seleciona todos os botões com a classe 'cart-remove'
  var removeCartButtons = document.querySelectorAll('.cart-remove');
  
  // Adiciona o evento de clique a cada botão
  removeCartButtons.forEach(button => {
      button.addEventListener('click', removeCartItem);
  });
}

function removeCartItem(event) {
  var buttonClicked = event.target;

  // Remove o elemento pai (ajuste conforme a estrutura do HTML)
  buttonClicked.closest('.cart-box').remove();
}

ready();


// ===================================
