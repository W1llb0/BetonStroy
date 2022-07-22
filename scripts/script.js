let burger = document.querySelectorAll('.burger');
burger.forEach(function(item){
    item.addEventListener('click', function(){
        this.classList.toggle('active');
        document.getElementById('menu').classList.toggle('active');
    })
})