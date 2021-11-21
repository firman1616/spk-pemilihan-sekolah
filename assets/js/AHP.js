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
     var rank1 = $('#rank1').val();
     var rank2 = $('#rank2').val();
     var rank3 = $('#rank3').val();
     var rank4 = $('#rank4').val();
     var rank5 = $('#rank5').val();
     if (rank1) {
         $.ajax({
             url: base_url + "admin/perhitungan/simpan_rank",
             method: "POST",
             data: { rank1: rank1, rank2: rank2, rank3: rank3, rank4: rank4, rank5: rank5 },
             async: false,
             dataType: 'json',
             success: function (data) {
                 alert('Data Perangkingan Berhasil Di simpan');
             }
         });
     }
 });