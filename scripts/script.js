let burger = document.querySelectorAll('.burger');
burger.forEach(function (item) {
    item.addEventListener('click', function () {
        this.classList.toggle('active');
        document.getElementById('menu').classList.toggle('active');
    })
})

var minOffset = 50;
window.onscroll = function () {
    let has_class = document.body.classList.contains("is-scrolled");

    if (minOffset < document.documentElement.scrollTop) {
        if (!has_class) {
            document.body.classList.add("is-scrolled");
        }
    } else if (has_class) {
        document.body.classList.remove("is-scrolled")

    }
}

const swiper = new Swiper('#price-list', {
    slidesPerView: 1,
    allowTouchMove: false,
});

document.getElementById('material__gravel').addEventListener('click', (event) => {
    swiper.slideTo(0);
})
document.getElementById('material__granite').addEventListener('click', (event) => {
    swiper.slideTo(1);
})
document.getElementById('material__expanded-clay').addEventListener('click', (event) => {
    swiper.slideTo(2);
})
document.getElementById('material__RSG-solution').addEventListener('click', (event) => {
    swiper.slideTo(3);
})
