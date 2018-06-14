$(document).ready(function() {
    
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("bnt_top").style.display = "block";
        } else {
            document.getElementById("bnt_top").style.display = "none";
        }
    }

    $('#bnt_top').click(function() {
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});
