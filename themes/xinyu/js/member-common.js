/**
 * 会员中心 公用 css
 * @authors Your Name (you@example.org)
 * @date    2014-08-14 10:59:16
 * @version $Id$
 */
//左侧栏点击效果
// $(".menu-dt").toggle(
    // function(){
    //     $(this).siblings("dd").stop().slideUp();
    // },
    // function(){
    //     $(this).siblings("dd").stop().slideDown();
    // }
// );
$(document).on('click', '.menu-dt', function(){
	$(this).siblings("dd").slideToggle(100);
})