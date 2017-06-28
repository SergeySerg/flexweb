$(document).ready(function(){
/************hover effect on contact block in header************/
    $('.contact_item-wrap i').hover( function () {
        $('.contact_item-wrap i').removeClass('active');
        $(this).addClass('active');
        var dataContact = $(this).attr('data-contact');
        $('.contact-show > div').removeClass('active');
        $('.contact-show .' + dataContact).addClass('active');
    });
/*********END hover effect on contact block in header************/
    
/*********show menu on small gadjet************/
        $('.button-menu').click(function(){
        $('.icon').toggleClass('menu').toggleClass('close');
        $('.nav').toggleClass('active');
        $(this).toggleClass('active');
    });
/*********END show menu on small gadjet************/
    
/*********owl-carousel-settings************/
    $(".owl-carousel").owlCarousel({
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [980,1],
        itemsTablet: [768,1],
        itemsMobile : [479,1],
        navigation: true,
        navigationText : ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
        slideSpeed : 800,
        paginationSpeed : 800,
        autoPlay: true,
        loop: true,
    });
    $(".section_reviews .owl-carousel").owlCarousel({
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [980,1],
        itemsTablet: [768,1],
        itemsMobile : [479,1],
        dots: false,
        navigation: true,
        navigationText : ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
        slideSpeed : 1000,
        paginationSpeed : 1000,
        autoPlay: true,
        loop: true,
    });
    /*********END owl-carousel-settings************/

    /***********Portfolio tabs*************/
    $('.portfolio-type_item').click( function (e) {
        $('.portfolio-type_item').removeClass('active');
        $(this).addClass('active');
        var type_id = $(this).attr('data-portfolio-type');
        if(type_id == 'all'){
            $('.container').find('[data-category]').fadeIn(1000);
        } else {
            $('.portfolio_item').parent().fadeOut(0);
            $('.container').find('[data-category="' + type_id + '"]').fadeIn(1000);
        }
    });
    /***********END Portfolio tabs*************/
    /***********Services tabs*************/
    $('.service-item').fadeOut(0);
    $('.services_item__click').click( function (e) {
        var type_id = $(this).attr('data-service-id');
        $('.service-item').slideUp(600);
        $('.page-header').find('[data-service='+type_id+']').slideDown(600);
        $('html, body').animate({
            scrollTop: ($('.page-wrap').offset().top - 60)
        }, 600);
        e.preventDefault();
    });
    /***********END Portfolio tabs*************/

    /***********callback pop-up*************/
    $('.callback-popup').click(function(event){
        $('#overlay').fadeIn(400,
            function(){
                $('#callback')
                    .css('display', 'block')
                    .animate({opacity: 1, top: '45%'}, 200);
            });
        //Popup advice ClOSE
        $('#overlay, .close').click( function(){
            $('#callback')
                .animate({opacity: 0, top: '45%'}, 200,
                    function(){
                        $(this).css('display', 'none');
                        $('#overlay').fadeOut(400);
                    }
                );
        });
        event.preventDefault();
    });
    /***********END callback pop-up*************/

    /***********Open service on services page*************/
    var pageHash = window.location.hash.substr(1);
    if(pageHash.indexOf("service") + 1){
        window.location.hash = '';
    }
    if(pageHash){
        $('[data-service-id=' + pageHash + ']').trigger('click');
        console.info(pageHash);
    };
    /***********END open service on services page*************/

    /**********call-back**************/
    $('#send').on('click', function(event){
        $('#send').attr('disabled', true);
        var data = new FormData($('form#contact-callback')[0]);
        var url = $( "input[name$='url']" ).val();
        console.log(url);
        $.ajax({
            url: url,
            method: 'POST',
            processData: false,
            contentType: false,
            data: data,
            dataType : "json",
            success: function(data){
                //console.info('Server response: ', data);
                if(data.success){
                    swal(trans['base.success'], "", "success");
                    $("#contact-callback").trigger("reset");
                    $("#send").attr('disabled', false);

                }
                else{
                    swal(trans['base.error'], data.message, "error");
                    $("#send").attr('disabled', false);
                }
            },
            error:function(data){
                swal(trans['base.error']);
                $("#send").attr('disabled', false);
                //  jQuery("#resume-form").trigger("reset");
            }

        });
        event.preventDefault();
    });
    /**********END call-back**************/
    /**********call-back Popup**************/
    $('#submit-send').on('click', function(event){
        //$('#submit-send').attr('disabled', true);
        //alert('erew');
        var data =  new FormData($('form#callback-popup')[0]);
        /*console.info(data);*/
        $.ajax({
            url:'/ua/callback',
            method: 'POST',
            processData: false,
            contentType: false,
            data: data,
            dataType : "json",
            success: function(data){
                //console.info('Server response: ', data);
                if(data.success){
                    swal(trans['base.success'], "", "success");
                    $("#callback-popup").trigger("reset");
                    $('#callback,#overlay').hide();
                    $("#submit-send").attr('disabled', false);

                }
                else{
                    swal(trans['base.error'], data.message, "error");
                    $("#submit-send").attr('disabled', false);
                }
            },
            error:function(data){
                swal(trans['base.error']);
                $("#submit-send").attr('disabled', false);
                //  jQuery("#resume-form").trigger("reset");
            }

        });
        event.preventDefault();
    });
    /**********END call-back Popup**************/

});