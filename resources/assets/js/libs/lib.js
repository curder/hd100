$(document).ready(function($) {
    // PC导航
    $('#nav li').hover(function() {
        /* Stuff to do when the mouse enters the element */
        var l = $(this).find('.sub').length;
        if(l){
            $(this).addClass('on');
        }
    }, function() {
        /* Stuff to do when the mouse leaves the element */
        var l = $(this).find('.sub').length;
        if(l){
            $(this).removeClass('on');
        }
    });
    // mobile导航
	$('.menuBtn').click(function(e) {
        if($(this).hasClass('on')){
            $(this).removeClass('on');
            $('#aside').removeClass('open');
            e.stopPropagation();
        }else{
            $(this).addClass('on');
            $('#aside').addClass('open');
            e.stopPropagation();
        }
    });
    $('#aside').click(function(e) {
        e.stopPropagation();
    });
    $(document).on('click',function(){
        $('#aside').removeClass('open');
        $('.menuBtn').removeClass('on');
    });

    $('.menu .v1').click(function(){
        if( $(this).next('div').length ){
            $(this).toggleClass('on').next('div').stop().slideToggle();
            $(this).parent('li').siblings('li').find('.v1').removeClass('on').next('div').slideUp();
            return false;
        }
    });
    // 选项卡 鼠标点击
    $(".TAB_CLICK li").click(function(){
      var tab=$(this).parent(".TAB_CLICK");
      var con=tab.attr("id");
      var on=tab.find("li").index(this);
      $(this).addClass('on').siblings(tab.find("li")).removeClass('on');
      $(con).eq(on).show().siblings(con).hide();
    });
    $('.TAB_CLICK').each(function(index, el) {
        $(this).find('li').filter(':first').trigger('click');
    });

    //10项选择图片切换效果
    $('.Failure ul li dl').hover(function(){
        var Src = $(this).find('img').attr('data-name');
        $(this).addClass('on');
        $(this).find('img').attr('src',Src);
    },function(){
        var Src = $(this).find('img').attr('data-name-s');
        $(this).removeClass('on');
        $(this).find('img').attr('src',Src);
    })

    $('.Failure ol li dl').hover(function(){
        var Src = $(this).find('img').attr('data-name');
        $(this).addClass('on');
        $(this).find('img').attr('src',Src);
    },function(){
        var Src = $(this).find('img').attr('data-name-s');
        $(this).removeClass('on');
        $(this).find('img').attr('src',Src);
    })

    // 动画实例
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: false,
        live: true
    });
    wow.init();
})