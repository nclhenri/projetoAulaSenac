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
    } else {
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
    let email = '*E-mail:* ' + document.querySelector('#email').value
    let fone = '*Telefone:* ' + document.querySelector('#fone').value
    let mens = '*Mensagem:* ' + document.querySelector('#mens').value

    let numeroWhats = '5511952752175'

    let quebraDeLinha = '%0A'

    window.open('https://api.whatsapp.com/send?phone=' + numeroWhats + '&text=' + assunto + quebraDeLinha + quebraDeLinha + nome + quebraDeLinha + email + quebraDeLinha + fone + quebraDeLinha + mens

    )
}

// var modal = document.getElementById('loginModal');
// var loginButton = document.getElementById('loginButton');

// loginButton.onclick = function() {
//     modal.style.display = 'block';
// }

// function closeModal() {
//     modal.style.display = 'none';
// }

// function carregarLogin() {
//     closeModal();
//     alert('Login bem-sucedido');
// }

var modal = document.getElementById('loginModal');
var loginButton = document.getElementById('loginButton');
var cloose = document.getElementById('cloose');


loginButton.onclick = function () {
    modal.style.display = 'block';
}

function closeModal() {
    modal.style.display = 'none';
}

function carregarLogin() {

    $('#loginForm').click(function () {
        // var email = document.getElementById('email').value;
        // var senha = document.getElementById('password').value;
        var formData = $("#loginForm").serialize();

        //Enviar a solicitação - class Login

        $.ajax({
            url: './admin/class/alunos.php',
            method: 'POST',
            data: formData,
            dataType: 'json',
            success: function (data) {

                if (data.success) {
                    // Login Bem Sucedido
                    $('#msgLogin').html('<div class = "msgSuccess">' + data.message + '</div>');
                    var idAluno = data.idAluno;
                    window.location.href = 'http://localhost/academia/admin/index.php?p=dashboard';
                } else {
                    $('#msgLogin').html('<div class = "msgInvalido">' + data.message + '</div>');
                }
            },
            error: function (xhr, status, error) {
                
                console.log(error);

            }
        })
    })
}


// Get the modal
var modal = document.getElementById("loginModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
document.getElementById('loginBtn').addEventListener('click', function () {
    modal.style.display = "block";
});

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

// Handle form submission
document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form from submitting

    // You can add your login logic here, like sending the form data to a server via AJAX
    // For now, let's just display the entered email and password
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    console.log("Email:", email);
    console.log("Password:", password);

    // Close the modal
    modal.style.display = "none";
});

