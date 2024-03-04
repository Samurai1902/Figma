
// бургер
var count = 0
document.querySelector('.burger-nav').addEventListener('click', function(){
  var header = document.querySelector('.header');
  this.classList.toggle('active');
  document.querySelector('.nav').classList.toggle('open');
  document.querySelector('.right-nav').classList.toggle('open');
  if(count === 0){
    count = 1
    header.style.backgroundColor = 'rgba(255, 255, 255, 1)';
  }else if(window.scrollY > 0){
    count = 0
  }else{
  count = 0
  header.style.backgroundColor = 'transparent';
}
})


// шапка
window.addEventListener('scroll', function() {
  var header = document.querySelector('.header');
  if(window.scrollY === 0 && count === 0){
    header.style.backgroundColor = 'transparent';
  }else if (window.scrollY > 0) {
    header.style.backgroundColor = 'rgba(255, 255, 255, 1)';
  }
});


// всплывающее окно
document.querySelector('.app__select-rate').addEventListener('click', function(){
  this.classList.toggle('open');
  var subnav_wrapper = document.querySelector('.app__subnav-rate-wrapper');
  if(subnav_wrapper.style.visibility === 'hidden'){
    subnav_wrapper.style.visibility = "visible";
    subnav_wrapper.style.opacity = 1;
  }else{
    subnav_wrapper.style.visibility = "hidden";
    subnav_wrapper.style.opacity = 0;
  }
  document.querySelector('.app__select-arrow').classList.toggle('arrow-active');
});



function TarifRate(element){
  var rate = document.getElementById(element).innerText;
  var rate_wrapper = document.querySelector('.app__subnav-rate-wrapper');
  document.querySelector('.app__select-arrow').classList.toggle('arrow-active');
  rate_wrapper.style.visibility = "hidden";
  rate_wrapper.style.opacity = 0;
  document.getElementById('app__select-rate-text').innerText = rate;
};

// Открытие\Закрытие окна (кнопки)
function closePopUp() {
  document.querySelector('.app').classList.toggle('called')
  document.querySelector('.header').classList.toggle('hide')
}
function openPopUp() {
  document.querySelector('.app').classList.toggle('called')
  document.querySelector('.header').classList.toggle('hide')
}

// Открытие окна благодарности(робит но не полностью)
function openThx() {
  document.querySelector('.app-thx').classList.toggle('called')
  document.querySelector('.app').classList.toggle('hide')
  document.querySelector('.header').classList.toggle('hide')
}
function closeThxPopUp() {
  document.querySelector('.app-thx').classList.toggle('hide')
  document.querySelector('.app').classList.toggle('called')
  document.querySelector('.header').classList.toggle('called')
}

