$(function () {
    // 资质荣誉
    jQuery(".picMarquee-left").slide({
        mainCell: ".bd ul",
        autoPlay: true,
        effect: "leftMarquee",
        vis: 4,
        interTime: 50
    });

    /*** 成功案例 ***/
    $('.serviceSlid').find('li').eq(0).show();
    $('.serviceList').find('li').each(function (index, element) {
        $(this).hover(function () {
            $(this).addClass('cur').siblings().removeClass('cur');
            $('.serviceSlid').find('li').eq(index).fadeIn().siblings().fadeOut();
        }, function () {
            /*$(this).removeClass('cur');*/
        })
    });
});
