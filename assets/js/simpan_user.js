$(document).ready(function ($) {
    // Rank
     var rata1 = $('#rata1').val();
     var rata2 = $('#rata2').val();
     var rata3 = $('#rata3').val();
     var rata4 = $('#rata4').val();
     var rata5 = $('#rata5').val();

    //  C1
     var c11 = $('#c11').val();
     var c12 = $('#c12').val();
     var c13 = $('#c13').val();
     var c14 = $('#c14').val();
     var c15 = $('#c15').val();

    //  C2
    var c21 = $('#c21').val();
    var c22 = $('#c22').val();
    var c23 = $('#c23').val();
    var c24 = $('#c24').val();
    var c25 = $('#c25').val();

    // C3
    var c31 = $('#c31').val();
    var c32 = $('#c32').val();
    var c33 = $('#c33').val();
    var c34 = $('#c34').val();
    var c35 = $('#c35').val();

    // C4
    var c41 = $('#c41').val();
    var c42 = $('#c42').val();
    var c43 = $('#c43').val();
    var c44 = $('#c44').val();
    var c45 = $('#c45').val();

    // C5
    var c51 = $('#c51').val();
    var c52 = $('#c52').val();
    var c53 = $('#c53').val();
    var c54 = $('#c54').val();
    var c55 = $('#c55').val();

    // SAW
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
    var desa = $('#desa').val();
     if (rata1) {
         $.ajax({
             url: BASE_URL + "user/Perhitungan/simpan_data",
             method: "POST",
             data: { 
                 desa: desa,
                 user: user,
                 rata1: rata1, 
                 rata2: rata2, 
                 rata3: rata3, 
                 rata4: rata4, 
                 rata5: rata5,
                 c11: c11,
                 c12: c12,
                 c13: c13,
                 c14: c14,
                 c15: c15,
                 c21: c21,
                 c22: c22,
                 c23: c23,
                 c24: c24,
                 c25: c25,
                 c31: c31,
                 c32: c32,
                 c33: c33,
                 c34: c34,
                 c35: c35,
                 c41: c41,
                 c42: c42,
                 c43: c43,
                 c44: c44,
                 c45: c45,
                 c51: c51,
                 c52: c52,
                 c53: c53,
                 c54: c54,
                 c55: c55,
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