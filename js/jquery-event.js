$(document).ready(function() {


$("#msg-icon").click(function() {
$("#fb").animate({"right":"0px"}, "slow").removeClass('visible');
$("#msg-icon").fadeOut(200);

/* $("body").css("overflow", "hidden"); */
});

$("#cancel").click(function() {
$("#fb").animate({"right":"-1000px"}, "slow").removeClass('visible');
$("#msg-icon").fadeIn(800);
/* $("body").css("overflow", "auto"); */
});

});