$(document).ready(function () {
// loop for distance
$(document).on("click", ".add", function() {
    var loop = $(".loop").eq(0).clone().show();
    $(".elements-wrapper").append(loop);    
});
});