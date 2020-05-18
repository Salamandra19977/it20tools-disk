$(function(){
    $('.header-nav-arrow').click(function() {
        $('.main-content').toggleClass('main-content-collapsed');
        $(this).toggleClass('arrow-active')
    });
    $('.fade-block').click(function() {
        $('.main-content').toggleClass('main-content-collapsed');
        $('.header-nav-arrow').toggleClass('arrow-active')
    })


    $(".nav__item").click(function() {
        $(".nav__item").removeClass("nav__item-active");
        $(this).addClass("nav__item-active");
        $(".nav__item-inner").removeClass("active");
    })
    $(".nav__item-inner").click(function() {
        $(".nav__item-inner").removeClass("active").eq($(this).index()).addClass("active");
        $(".nav__item").removeClass("nav__item-active");
    })
    //modal switcher
    $('.modal-switcher').click(function() {
        $(this).toggleClass('switch-on')
        if ($(this).hasClass('switch-on')) {
            $(this).trigger('on.switch');
        } else {
            $(this).trigger('off.switch');
        }
    })
    //end of modal switcher
    // invoke modals in dropdown menus
    $('.delete-return').click(function() {
        $('#option-return-modal').modal();
    })
    $('.delete-delete').click(function() {
        $('#option-delete-modal').modal();
    })
    // $('.delete-rm').click(function() {
    //     $('#option-rm-modal').modal();
    // })
    $('.delete-mkcopy').click(function() {
        $('#option-mkcopy-modal').modal();
    })
    $('.delete-rename').click(function() {
        $('#option-rename-modal').modal();
    })
    $('.option-delete__rename').click(function() {
        $('#option-rename-modal').modal();
    })

    $('.add-folder').click(function() {
        $('#option-create-modal').modal();
    })
    $('.delete-star').click(function() {
        $('#option-star-modal').modal();
    })
    $('.delete-share').click(function() {
        $('#option-access-modal').modal();
    })
    $('.option-delete__link').click(function() {
        $('#option-copylink-modal').modal();
    })
    $('.delete-link').click(function() {
        $('#option-copylink-modal').modal();
    })
    $('.delete-move').click(function() {
        $('#option-move-modal').modal();
    })
});