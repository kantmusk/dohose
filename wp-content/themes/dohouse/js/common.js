

jQuery(function($) {
    $(document).ready(function() {
        
        $("body").children().each(function() {
             document.body.innerHTML = document.body.innerHTML.replace(/\u2028/g, ' ');
        });

        //window.onload = function() { document.body.innerHTML = document.body.innerHTML.replace(/\u2028/g, '');}
        
        $(window).scroll(function() {
            if($(this).scrollTop() != 0) {
                $('.toTop').fadeIn();
            } else {
                $('.toTop').fadeOut();
            }
            
        });

        $('.home-slider').slick({ 
           slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
         
        });

        $('.fasad-type-slider').slick({ 
           slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
         
        });


        $('.big-slider').slick({ 
           slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          fade: true,
          asNavFor: '.small-slider'
           
        });

        $('.small-slider').slick({ 
            slidesToShow: 6,
            slidesToScroll: 1,
            asNavFor: '.big-slider',
            dots: false,
            //centerMode: true,
            focusOnSelect: true,
            vertical: true
           
        });

        $('.catalog-top-page__info-item').on("click", function(){
           $('.catalog-top-page__info-item').removeClass('active');
           $(this).addClass('active');
           $('.catalog-top-page__img').attr('style', $(this).attr('data-img'));
           
        });       

        $('.type-item-real').on("click", function(){
           $('.type-item-real').removeClass('active');
           $(this).addClass('active');

           $('.osobenosty').html($(this).find('.type-item__description').html());
           $('.calc-akcia__price-old').find('span').html($(this).find('.type-item__price').html());
           $('.calc-akcia__price').html($(this).find('.type-item__oldprice').html())

           $('.osob-block').html($(this).find('.type-item__add_chars').html())
           $('.char-list__content').html($(this).find('.type-item__complect').html())
        });   
       
        $('.pak-item').on("click", function(){
            $('.pak-item').removeClass('active');
            $(this).addClass('active');
            //$('.totalbox__price').html($(this).find('.pak-item__price').html());
        });   

        $('a[data-modal="modal"]').on("click", function(e){
            e.preventDefault();
            var  id = $(this).attr('href'),
            winW = $(window).width(),
            winH = $(window).height();
            $(id).css("left", winW/2-$(id).innerWidth()/2);
            $(id).css("top", winH/2-$(id).innerHeight()/2);
            $('body').append('<div class="mask"></div>');
            $(id).fadeIn();
        });

        $('a[data-modal="modal-complect"]').on("click", function(e){

            e.preventDefault();
            var  id = $(this).attr('href'),
            winW = $(window).width(),
            winH = $(window).height();
            $(id).css("left", winW/2-$(id).innerWidth()/2);
            $(id).css("top", 0);
            $('body').append('<div class="mask"></div>');
            $(id).fadeIn();
        });


        $('a[data-modal="modal-want"]').on("click", function(e){
            e.preventDefault();
            var  id = $(this).attr('href'),
            winW = $(window).width(),
            winH = $(window).height();
            $(id).css("left", winW/2-$(id).innerWidth()/2);
            $(id).css("top", winH/2-$(id).innerHeight()/2);
            $('body').append('<div class="mask"></div>');

            var mainimg = $(this).parents('.project-item').find('.project-item__img').html();
            var plosch = $(this).parents('.project-item').find('.projectF-item__ploschad').html();
            $('.wantimg').html(mainimg);
            $('.want-ploschad').html(plosch);
            $(id).fadeIn();
        });

        $('a[data-modal="modal-want-inner"]').on("click", function(e){
            e.preventDefault();
            var  id = $(this).attr('href'),
            winW = $(window).width(),
            winH = $(window).height();
            $(id).css("left", winW/2-$(id).innerWidth()/2);
            $(id).css("top", winH/2-$(id).innerHeight()/2);
            $('body').append('<div class="mask"></div>');

            var mainimg = $(this).parents('.catalog-page').find('.catalog-top-page__img').attr("style");
            mainimg = mainimg.replace('background-image:url(','');
            mainimg = mainimg.replace(')','');
            mainimg = '<img src="'+ mainimg  +'" alt="">'
            //var plosch = $(this).parents('.project-item').find('.projectF-item__ploschad').html();
            $('.wantimg').html(mainimg);
           // $('.want-ploschad').html(plosch);

            $(id).fadeIn();
        });


        $('a[data-modal="mobile-panel"]').on("click", function(e){
            e.preventDefault();
            var  id = $(this).attr('href'),
            winW = $(window).width(),
            winH = $(window).height();
            $(id).css("left", winW/2-$(id).innerWidth()/2);
            $(id).css("top", '0px');
            $(id).fadeIn();
        });       
        
        $('body').on("click", ".modal-close", function(e){
            e.preventDefault();
             $('.mask').remove();
            $('.modal-window').hide();
            $('.modal-window-mobile-panel').hide();
        });

        $('body').on("click", ".mask", function(e){
            e.preventDefault();
            $('.mask').remove();
            $('.modal-window').hide();
           
        });
        
        $('.toTop').click(function() {
            $('body,html').animate({scrollTop:0},800);
        });
        
        function cleanTnanks(){
            $('.mask').remove();
            $('.modal-window').hide();
            $('a[href="#thanks"]').trigger('click');
        };

        $(".call").submit(function(e) { 
              e.preventDefault();
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
                     cleanTnanks();
                }
            });
            return false;
        });

        $(".count").submit(function(e) { 
              e.preventDefault();
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
                     cleanTnanks();
                }

                 
            });
           
            return false;
        });
        
       $(".want").submit(function(e) { 
              e.preventDefault();
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
                     cleanTnanks();
                }

                 
            });
           
            return false;
        });
       
        $('input[type="phone"]').mask("+7 (999) 999-9999");
    });
});


