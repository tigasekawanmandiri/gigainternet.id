$(document).ready(function () {
    
    $(".close").on('click',function (e) { 
        e.preventDefault();
        $('.popup-box-wa').hide();
    });

    $('.floating-wpp-button').hover(function () {
            // over
            $('.popup-box-wa').show();
        }
    );

   
});

function sendMessage(){
    let a;
        phone = "+628112113311";
        message = $('.messagefill').val();
        m = "null";
        a = "http://" + (m ? "api" : "web");
		a += ".whatsapp.com/send?phone=" + phone + "&text=" + encodeURI(message);
		window.open(a);
}

function cekDisini(){
    // sub = $('#subdistrict').val();
    message = "Halo Admin saya mau promo terbaru. Boleh minta informasinya ?";
    let a;
        phone = "+628112113311";
        m = "null";
        a = "http://" + (m ? "api" : "web");
		a += ".whatsapp.com/send?phone=" + phone + "&text=" + encodeURI(message);
		window.open(a);
}