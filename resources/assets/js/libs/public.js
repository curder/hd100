$(function () {
    $("#toptop").hover(function () {
        $("#hd").removeClass("slideUp").addClass('slideDown')
    })
    // 头部
    $('#hd').headroom({
        offset: 205,
        tolerance: 5,
        classes: {
            initial: 'ani',
            pinned: 'slideDown',
            unpinned: 'slideUp'
        }
    });
    // banner
    $('#banner').slick({
        dots: true,
        autoplay: true,
        customPaging: function () {
            return '';
        },
        prevArrow: '<a href="javascript:;" class="btn btn-prev"></a>',
        nextArrow: '<a href="javascript:;" class="btn btn-next"></a>'
    });
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
