 $(function(){

    $('.codeLink .codePage .Content ol').on("mouseover", touchStart);
    $('.codeLink .codePage .Content ol').on("mouseout", touchEnd);

    $('.codeLink .codePage .Content ol').on('touchstart', touchStart);
    $('.codeLink .codePage .Content ol').on('touchend', touchEnd);


    function touchStart(e) {
        $(this).addClass("touchbgcolor");
      }

    function touchEnd(e) {
        $(this).removeClass("touchbgcolor");
    }

    $(".codeLink .scrollbtn span").click(function(){
        //點點變色
        $('.codeLink .scrollbtn span').css('background','rgb(168, 163, 163)');
        $(this).css('background','rgb(17, 221, 160)');

        $(".skillcard2").animate({left:'0px'},'5s',function(){
            $(".skillcard2").css("display","block");
        });
        
        $(".skillcard1").animate({left:'-100%'},"5s",function(){
            $(this).css("display","none");
        });

    });

    $(".codeLink .scrollbtn span:nth-child(2)").click(function(){
        $(".skillcard2").animate({left:'0px'},'slow',function(){
            $(".skillcard2").css("display","block");
        });
        
        $(".skillcard1").animate({left:'-100%'},"slow",function(){
            $(this).css("display","none");
        });

    });

    $(".codeLink .scrollbtn span:nth-child(1)").click(function(){
        $(".skillcard1").animate({left:'0px'},'slow',function(){
            $(".skillcard1").css("display","block");
        });
        
        $(".skillcard2").animate({left:'-100%'},"slow",function(){
            $(this).css("display","none");
        });

    });

 });
