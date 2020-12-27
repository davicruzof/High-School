const containerLogin = document.querySelector('div#login');
const containerHome = document.querySelector('div#home');

function login() {
  document.querySelector('div#login').classList.remove('disable');
  document.querySelector('div#home').classList.add('disable');
  document.querySelector('div#password').classList.add('disable');
}

function voltar() {
  document.querySelector('div#login').classList.add('disable');
  document.querySelector('div#home').classList.remove('disable');
  document.querySelector('div#password').classList.add('disable');
}

function recovery() {
  document.querySelector('div#login').classList.add('disable');
  document.querySelector('div#home').classList.add('disable');
  document.querySelector('div#password').classList.remove('disable');
}
