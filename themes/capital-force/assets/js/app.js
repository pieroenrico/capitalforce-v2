console.log('Capital Force. V1.0');

function checkEmail(email) {
    return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(email);
}
function clearForm() {
    $('#input-name').val('');
    $('#input-email').val('');
    $('#input-message').val('');
}
function modeScrolled() {
    $(".social, .instructions").addClass('hidden')
    $('.topbar.scrollable').removeClass('inverted')
    $('.back-to-top').fadeIn()
}
function modeTop() {
    $(".social, .instructions").removeClass('hidden')
    $('.topbar.scrollable').addClass('inverted')
    $('.back-to-top').hide()
}
function checkScroll() {
    if($(window).scrollTop() > $('header.scrollable').height()) {
        modeScrolled()
    } else {
        modeTop()
    }
}
$(document).ready(function(){
    //$('.paroller').paroller();

    checkScroll()


    $(document).on('click', 'a.notifications', function(e){
        e.preventDefault();
        $('#blog').addClass('reveal')
    });

    $(document).on('click', 'a.navigator', function(e){
        e.preventDefault();
        $('html,body').animate({scrollTop: $('section' + $(this).attr('href')).offset().top - 80 }, 1000)
        if( $('header.mobile').hasClass('active') ) {
            $('header.mobile').removeClass('active');
        }
    });
    $(document).on('click', '#treasury .bt', function(e){
        e.preventDefault();
        $('#treasury .bt').removeClass('active');
        $('#treasury .copy').removeClass('active');
        $(this).addClass('active');
        $('#treasury .copy#' + $(this).data('target')).hide().addClass('active').fadeIn(1000);
    });
    $(document).on('click', '#ai .bt', function(e){
        e.preventDefault();
        $('#ai .bt').removeClass('active');
        $('#ai .copy').removeClass('active');
        $(this).addClass('active');
        $('#ai .copy#' + $(this).data('target')).hide().addClass('active').fadeIn(1000);
    });

    $(window).scroll(function() {
        checkScroll()
    });

    $(document).on('click', 'header.mobile .opener', function(e){
        e.preventDefault();
        if( $('header.mobile').hasClass('active') ) {
            $('header.mobile').removeClass('active');
        } else {
            $('header.mobile').addClass('active');
        }
    })
});