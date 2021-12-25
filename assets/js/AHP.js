$(document).ready(function ($) {
    //C21
     $("#C12").on("change", function () {
         let C11 = $("#C11").val();
         let C12 = $("#C12 option:selected").val();
         let C21 = C11 / C12;
         $("#C21").val(C21);
     });

    //C31
    $("#C13").on("change", function () {
        let C11 = $("#C11").val();
        let C13 = $("#C13 option:selected").val();
        let C31 = C11 / C13;
        $("#C31").val(C31);
    });

    // C41
    $("#C14").on("change", function () {
        let C11 = $("#C11").val();
        let C14 = $("#C14 option:selected").val();
        let C41 = C11 / C14;
        $("#C41").val(C41);
    });

    // C51
    $("#C15").on("change", function () {
        let C11 = $("#C11").val();
        let C15 = $("#C15 option:selected").val();
        let C51 = C11 / C15;
        $("#C51").val(C51);
    });

    // C32
    $("#C23").on("change", function () {
        let C22 = $("#C22").val();
        let C23 = $("#C23 option:selected").val();
        let C32 = C22 / C23;
        $("#C32").val(C32);
    });

    // C42
    $("#C24").on("change", function () {
        let C22 = $("#C22").val();
        let C24 = $("#C24 option:selected").val();
        let C42 = C22 / C24;
        $("#C42").val(C42);
    });

    // C52
    $("#C25").on("change", function () {
        let C22 = $("#C22").val();
        let C25 = $("#C25 option:selected").val();
        let C52 = C22 / C25;
        $("#C52").val(C52);
    });

    // C43
    $("#C34").on("change", function () {
        let C33 = $("#C33").val();
        let C34 = $("#C34 option:selected").val();
        let C43 = C33 / C34;
        $("#C43").val(C43);
    });

    // 53
    $("#C35").on("change", function () {
        let C33 = $("#C33").val();
        let C35 = $("#C35 option:selected").val();
        let C53 = C33 / C35;
        $("#C53").val(C53);
    });

    // C54

    $("#C45").on("change", function () {
        let C44 = $("#C44").val();
        let C45 = $("#C45 option:selected").val();
        let C54 = C44 / C45;
        $("#C54").val(C54);
    });
 
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

    var user = $('#user').val();
     if (rata1) {
         $.ajax({
             url: BASE_URL + "admin/AHP/simpan_bobot",
             method: "POST",
             data: { 
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
                },
             async: false,
             dataType: 'json',
             success: function (data) {
                 alert('Data Bobot Kriteria Beerhasil Disimpan');
             }
         });
     }
 });