$(document).ready(function ($) {
    var ref1 = $('#ref1').val();
    var ref2 = $('#ref2').val();
    var ref3 = $('#ref3').val();
    var ref4 = $('#ref4').val();
    var ref5 = $('#ref5').val();
    var ref6 = $('#ref6').val();

    // jarak
    var jar0 = $('#jar0').val();
    var jar1 = $('#jar1').val();
    var jar2 = $('#jar2').val();
    var jar3 = $('#jar3').val();
    var jar4 = $('#jar4').val();
    var jar5 = $('#jar5').val();

    var user = $('#user').val();

    if (ref1) {
        $.ajax({
            url: BASE_URL + "admin/SAW/simpan_alt",
            method: "POST",
            data: { 
                user: user,
                ref1: ref1,
                ref2: ref2,
                ref3: ref3,
                ref4: ref4,
                ref5: ref5,
                ref6: ref6,

                jar0: jar0,
                jar1: jar1,
                jar2: jar2,
                jar3: jar3,
                jar4: jar4,
                jar5: jar5,
               },
            async: false,
            dataType: 'json',
            success: function (data) {
                alert('Data Beerhasil Disimpan');
            }
        });
    }
});