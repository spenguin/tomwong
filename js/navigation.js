(function(){
    var burger = document.querySelector('.burger-container'),
        header = document.querySelector('.menu-mobile-container');
    
    burger.onclick = function() {
        header.classList.toggle('menu-opened');
    }
}());