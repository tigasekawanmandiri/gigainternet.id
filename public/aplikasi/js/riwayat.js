// NUMBERFORMAT
const number_format = (number, decimals, dec_point, thousands_sep) => {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function (n, prec) {
        var k = Math.pow(10, prec);
        return '' + Math.round(n * k) / k;
    };
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}


$(document).ready(function () {

    var otp = localStorage.getItem('otp');
    var nomor = localStorage.getItem('nomor');
    $("#nomor_pelanggan").val(nomor);
    
    // SUBMIT
    $("#tes_tagihan").submit(function (e) { 
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "https://rest1.cianjurwifi.com/api/v2/plg/tagihan-byplg/"+otp,
            data: formData,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (response) {
                if (response) {
                   $(".list_tagihan").html('');
                   $.each(response, function (indexInArray, valueOfElement) { 
                    console.log(valueOfElement);
                     $(".list_tagihan").append(`
                        <div class="box-tagihan">
                            <div class="status"><p class="text-status">`+valueOfElement.sts_tagihan+`</p></div>
                            <div class="tempo"><p class="text-tempo">Tagihan Bulan ke-`+valueOfElement.bulan+`</p></div>
                            <div class="bils"><p class="text-bils">Rp. `+number_format(valueOfElement.total_price)+`</p></div>
                            <div class="paket"><p class="text-paket">`+valueOfElement.produk+`</p></div>
                        </div>
                        `);
                   });
                   
                } else {
                    alert('mohon maaf sedang dalam perbaikan');
                }
            }
        });
        
    });

});