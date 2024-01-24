$(document).ready(function () {
    $('.banner').slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
    });
});
// GALERIA
$('.galeria').slick({
    centerMode: true,
    centerPadding: '5%',
    slidesToShow: 7,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 5
            }
        },
        {
            breakpoint: 1094,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 5
            }
        },
        {
            breakpoint: 600,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});

// WOWJS
new WOW().init();

// MENU FIXO

window.onscroll = function () {
    let top = window.scrollY;

    if (top > 1200) {
        document.getElementById("menufixo").classList.add("menufixo");
    }else{
        document.getElementById("menufixo").classList.remove("menufixo");
    }
    
}

// MENU MOBILE

// queryselector seleciona QUALQUER elemento. (seja ele, class, target, id ou outros)
document.querySelector(".abrirMenu").onclick = function () {
    document.documentElement.classList.add("menuMobile");
}
document.querySelector(".fecharMenu").onclick = function () {
    document.documentElement.classList.remove("menuMobile");
}

// ENVIAR DADOS DO FORM POR WHATSAPP

function EnviarWhats() {
    let assunto = '*Site - Viva Bem Academia*';
    let nome = '*Nome:* ' + document.querySelector('#nome').value;
    let email= '*E-mail:* ' + document.querySelector('#email').value
    let fone = '*Telefone:* ' + document.querySelector('#fone').value
    let mens = '*Mensagem:* ' + document.querySelector('#mens').value

    let numeroWhats = '5511952752175'

    let quebraDeLinha = '%0A'

    window.open('https://api.whatsapp.com/send?phone=' + numeroWhats + '&text=' + assunto + quebraDeLinha + quebraDeLinha + nome + quebraDeLinha +email+quebraDeLinha+fone+quebraDeLinha+mens
    
    )
}

