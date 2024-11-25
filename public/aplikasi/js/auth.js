$(document).ready(function () {
    $("#login-form").submit(function (e) { 
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "https://rest1.cianjurwifi.com/api/v2/plg/login-pelanggan",
            data: formData,
            success: function (response) {
                if (response.status == true) {
                    console.log(response);
                    localStorage.setItem("user_token",response.token_type+" "+response.access_token);
                    localStorage.setItem("id",response.id);
                    localStorage.setItem("nomor",response.nomor);
                    localStorage.setItem("pelanggan",response.pelanggan);
                    localStorage.setItem("otp",response.otp);
                    window.open('/aplikasi-home','_self')
                    Swal.fire({
                        icon: "success",
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                        });
                } else {
                    Swal.fire({
                        icon: "danger",
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                        });
                }
            }
        });
    });
});