$.fn.extend({Nnav:function(a){var c={_CategoryBtnClass:".topnav",_CategoryContentClass:".zongkuang",_Expansion:function(){},_Expansion2:function(){}};var b=$.extend(c,a);b.element=$(this);$(b._CategoryBtnClass).hover(function(){$(this).addClass("cur")},function(){$(this).removeClass("cur")})},focusMap:function(c){var m={_CarouselRimClass:".fmRim",_CarouselNavClass:".fmNav",_CarouselConClass:".fmCon",arrowStart_opacity:"0.2",arrowEnd_opacity:"0.6",fmNavLiStart_opacity:"0.9",fmNavLiEnd_opacity:"1",timing:"3000"};var z=$.extend(m,c);z.element=$(this);var e=0,A,f=800,u=$(z.element),p=u.find(z._CarouselRimClass),j=u.find(z._CarouselNavClass),d=u.find(z._CarouselConClass),s=d.find("li"),x=j.find("ul"),w=j.find("li"),b=w.innerWidth(),y=s.length,l="<a class='prev'>Prev</a><a class='next'>Next</a>";p.append(l);x.css({width:(b+8)*y,"padding-left":"9px"});var n=p.find(".prev,.next"),q=p.find(".prev"),r=p.find(".next");var a=p.width();w.css({opacity:z.fmNavLiStart_opacity}).click(function(){e=w.index(this);o(e)}).eq(0).trigger("click");var g=s.length;if(g==1){j.hide()}else{}u.hover(function(){if(g==1){}else{n.stop(true,false).show().animate({opacity:z.arrowStart_opacity},300);n.hover(function(){$(this).stop(true,false).animate({opacity:z.arrowEnd_opacity},300)},function(){$this=$(this);$(this).stop(true,false).animate({opacity:z.arrowStart_opacity},300)})}},function(){n.stop(true,false).hide()});q.click(function(){e-=1;if(e==-1){e=y-1}o(e)});r.click(function(){e+=1;if(e==y){e=0}o(e)});d.css("width",a*(y));p.hover(function(){clearInterval(A)},function(){A=setInterval(function(){o(e);e++;if(e==y){e=0}},z.timing)}).trigger("mouseleave");function o(B){if(z._zhuangtai==1){var C=-B*a;d.stop(true,false).animate({left:C},300)}if(z._zhuangtai==2){s.stop(true).hide().eq(B).show();u.attr("class","fmBg"+B)}if(z._zhuangtai==3){s.stop(true).hide().eq(B).show()}w.removeClass("current").eq(B).addClass("current").end().stop(true).eq(B).stop(true)}},hoverBoxShadow:function(a){var c={_CategoryBtnClass:".moud",_Expansion:function(){}};var b=$.extend(c,a);b.element=$(this);$(b._CategoryBtnClass+" > div").hover(function(){$(this).addClass("cur")},function(){$(this).removeClass("cur")});b._Expansion()},boxMask:function(a){var d={_opacity:"0.4",timing:"3000"};var c=$.extend(d,a);c.element=$(this);var b=$(c.element).children();b.hover(function(){var f=$(this).height();var g=$(this).children().last();var e=$(this).children().last().children().first();e.css("opacity",c._opacity);g.stop().slideDown().animate({marginTop:"-"+f,height:f},c.timing);$(this).addClass("cur")},function(){var e=$(this).children().last();$(this).removeClass("cur");e.stop().animate({marginTop:"0px",height:"0px"},c.timing,"easeOutBounce",function(){$(this).hide()})});return this},tabBox:function(a){var g=a._warpBox;var c=$(g+" > ul");var d=$(c).find("li");var b=$(g+" > div");var e=$(g+"> div > div.parent");d.click(function(){if(!$(this).hasClass("selected")){d.removeClass("selected");$(this).addClass("selected");$(e).hide();var j=$(d).index(this);recommendAutoIndex=j;$(e).eq(j).show();$climg=$(e).eq(j).find('img[class="clicklazyload"]');if($climg.length>0){$climg.each(function(){$(this).attr("class","clicklazyloaded").attr("src",$(this).attr("data-src"))})}}}).mouseover(function(){$(this).addClass("mouseover");$(this).removeClass("mouseout")}).mouseout(function(){$(this).addClass("mouseout");$(this).removeClass("mouseover")});var f=$(".category li");f.mouseover(function(){$(this).css("backgroundColor","#888")}).mouseout(function(){$(this).css("backgroundColor","#fff")})},aaa:function(){var c=$(this),e=c.find("input"),b=c.find("ul"),d=c.find("li"),a=$(".select_box");e.bind("click",function(){a.each(function(f){$(this).css("zIndex",f)});c.css("zIndex",a.length);if(b.css("display")=="none"){if(b.height()>200){b.css({height:"200px","overflow-y":"scroll"})}b.fadeIn("100");b.hover(function(){b.parent().find("input").addClass("hover_select")},function(){b.fadeOut("100");b.parent().find("input").removeClass("hover_select")})}else{b.fadeOut("fast")}}).hover(function(){$(this).addClass("hover_select")},function(){$(this).removeClass("hover_select")}).parent().mouseleave(function(){b.fadeOut()});d.click(function(){var f=$(this).attr("code");e.val($(this).text()).attr("code",f);b.fadeOut("100")}).hover(function(){$(this).addClass("hover_li")},function(){$(this).removeClass("hover_li")})},gotop:function(){var a=function(){h=$(window).height();t=$(document).scrollTop();if(t<20){$(".rightFunction,.leftExtension").hide()}else{$(".rightFunction,.leftExtension").show()}};a();$(".Ngotop").click(function(){$(document).scrollTop(0)});$(window).scroll(function(){a()})},timer:function(d){var l={};var u=$.extend(l,d);u.element=$(this);var m,o,z,e=new Date(u.endTime),x=new Date(u.starTime),f=24*60*60*1000,s=60*60*1000,w=60*1000,c=1000,a=new Array(":",":",":",".",""),b="";for(var r=-1,p=5;++r<p;){if(r==4){b+='<span class="appw t'+r+'">?</span><span class="cntSeparator">'+a[r]+"</span>"}else{b+='<span class="appw t'+r+'">??</span><span class="cntSeparator">'+a[r]+"</span>"}}$(u.element).append(b);var q=0;function A(){Diffms=e.getTime()-(x.getTime()+q);q=q+1000;if(Diffms>0){m=Math.floor(Diffms/f);Diffms-=m*f;o=Math.floor(Diffms/s);Diffms-=o*s;z=Math.floor(Diffms/w);Diffms-=z*w;var D=Math.floor(Diffms/c);if(m<10){m="0"+m}if(o<10){o="0"+o}if(z<10){z="0"+z}if(D<10){D="0"+D}var B=$(u.element).find(".t0"),E=$(u.element).find(".t1"),C=$(u.element).find(".t2"),n=$(u.element).find(".t3");B.html(m);E.html(o);C.html(z);n.html(D);if($(u.element).css("display")=="none"){$(u.element).show()}}else{clearInterval(j);var F="<p>活动已结束</p>";$(u.element).html(F);u.timerEnd()}}var j="InterValObj"+u.id;j=setInterval(function(){A()},1000);var g=$(u.element).find(".t4");var y=9;setInterval(function(){if(y<=0){y=9}else{y-=1}$(u.element).find(".t4").text(y)},100)}});$(document).ready(function(){$(this).Nnav({_CategoryBtnClass:".PubBtnHover",_CategoryContentClass:".PubConHover",_Expansion:function(){}});$(this).gotop();$(".rightFunction > div").hover(function(){$(this).find(".cur").stop(true,true).show().animate({left:"0px"},0);$(this).css({overflow:"visible"});$(this).find(".pop").stop(true,true).animate({left:"-150px",opacity:"toggle"},400)},function(){$(this).css({overflow:"hidden"});$(this).find(".cur").stop(true,true).show().animate({left:"65px"},100);$(this).next().show().stop(true,true).animate({left:"0px"},100);$(this).find(".pop").stop(true,true).animate({left:"-187px",opacity:"toggle"},0)});$(this).Nnav({_CategoryBtnClass:".indexCategory",_CategoryContentClass:".sCartCon",_Expansion:function(){}});logininfo();function b(){ajaxReq()}var d;$(".sCB").hover(function(){clearTimeout(d);$(this).addClass("cur");var e=$(".CFCon .left").height(),f=$(".CFCon .right").height();c(e,f)},function(){var e=$(this);d=setTimeout(function(f){$(".sCB").removeClass("cur")},300)});var c=function(e,f){if(e>f){$(".CFCon .right").height(e)}else{$(".CFCon .left").css({height:"auto"})}};$(".CateTitle li").hover(function(){var m=$(".CateTitle li"),f=m.index(this),g=$(".CateCon .tcate"),l=$(".CateCon .tcate").eq(f),j=$(".CateCon .tcate").eq(f).find(".ader");m.each(function(q,r){var p=$(this).find("img");p.attr("src",p.attr("img1"))});m.removeClass("current");$(this).addClass("current");var e=$(this).find("img").eq(0);if(e.attr("img2")!=""){e.attr("src",e.attr("img2"))}g.hide();l.show();if(j.length>0){l.css({width:"443px;"})}else{l.css({width:"663px"})}$(".CFCon .left,.CFCon .right").css({height:"auto"});var n=$(".CFCon .left").height(),o=$(".CFCon .right").height();c(n,o)});$(".Nsearch").mouseleave(function(){$(this).find(".lenovoWord").hide()});$(".Nsearch input.text").bind("click focus",function(){$(this).nextAll(".lenovoWord").show()});$("#searchButton").click(function(){var e=$(".Nsearch input.text");if($.trim(e.val())==""){return false}else{$(this).nextAll(".lenovoWord").hide();var f=$(this).parent().find("input.text");window.location.href="/search/s?k="+($.trim(f.val()))}});$(".Nsearch input.text").keydown(function(f){if(f.keyCode==13){if($.trim($(this).val())!=""){$(".button").trigger("click")}}});var a=function(){var e=$(this).text();$(".Nsearch input.text").val(e);$(this).parent().hide()};$(".Nsearch .lenovoWord a").bind({click:a})});function setcookie(b,c,a){document.cookie=b+"="+c+";path=/;domain=.miyabaobei.com;expires="+a+";"}function getcookie(b){var a=document.cookie.match(new RegExp("(^| )"+b+"=([^;]*)(;|$)"));if(a!=null){return unescape(a[2])}else{return""}}var str=location.href;var re=/from=([\w_\-\.\\\+\%]*)/i;var rs=str.match(re);var curUrl=window.location.href;var from=curUrl.indexOf("from");var sugs={},sugsArray=[];var parms=[];var addons="";var origin=curUrl;var nextUrl="";var curTime=Date.parse(new Date())/1000;var cTime;var cartCacheTime=10;var mouseenterflag=false;if(curUrl.indexOf("?")>0){if(curUrl.indexOf("#")>0){sugsArray=curUrl.split("?")[1].split("#")[0].split("&");addons="#"+curUrl.split("#")[1]}else{sugsArray=curUrl.split("?")[1].split("&")}for(var i=0;i<sugsArray.length;i++){if(sugsArray[i].indexOf("=")!=-1){var k=sugsArray[i].substr(0,sugsArray[i].indexOf("="));var v=sugsArray[i].substr(sugsArray[i].indexOf("=")+1);sugs[k]=v}}origin=curUrl.split("?")[0]}else{if(curUrl.indexOf("#")>0){addons="#"+curUrl.split("#")[1];origin=curUrl.split("#")[0]}}if(from!=-1){var date=new Date();if(rs&&sugs.from!=""){var from_type=sugs.from.substr(0,2);if(from_type=="2c"){var expireDays=14}else{var expireDays=1}date.setTime(date.getTime()+expireDays*24*3600*1000);setcookie("sitefrom",sugs.from,date.toGMTString())}delete sugs.from;for(i in sugs){nextUrl+="&"+i+"="+sugs[i]}if(nextUrl.length>0){nextUrl="?"+nextUrl.substr(1)}else{nextUrl=origin}if(addons!=""){nextUrl=nextUrl+addons}}$("#cart_num_box").live({mouseenter:function(){$(this).addClass("cur");cTime=Date.parse(new Date())/1000;if(cTime-curTime<cartCacheTime&&mouseenterflag){return false}mouseenterflag=true;ajaxReq()},mouseleave:function(){$(this).removeClass("cur")}});$(".nblock").live({mouseenter:function(){$(this).addClass("current")},mouseleave:function(){$(this).removeClass("current")}});$(".dele").live("click",function(){var a=$(this);$.ajax({url:"/instant/cart/removeCartItem",type:"POST",data:"row_id="+a.attr("row_id"),cache:false,dataType:"json",success:function(b){$(this).parent().parent(".nblock").remove();genHtml(b);if(b!=null&&typeof(b.row_id)!="undefined"){$("#cart_num").text(b.total_num);$("#rightFunctionCartNum").text(b.total_num)}else{$("#cart_num").text("0");$("#rightFunctionCartNum").text("0")}}})});function logininfo(){$.ajax({url:"/login/info",type:"POST",context:document.body,dataType:"json",success:function(a){if(a.cart_num>0){$("#cart_num").text(a.cart_num);$("#rightFunctionCartNum").text(a.cart_num)}var b=a.is_login;if(b==1){var c=a.username;if(c.length>8){c=c.substr(0,15)+".."}$("#logined_username").text(c);$("#loginedBox").show();$("#unloginBox").hide();if(a.cell_phone){numphone=a.cell_phone}if(a.synlogin){$("#loginedBox").append(a.synlogin)}}else{$("#unloginBox").show();$("#loginedBox").hide()}}})}ajaxReq=function(){$.ajax({url:"/instant/cart/getCartContents",type:"POST",dataType:"json",success:function(a){if(typeof(a.row_id)!="undefined"){genHtml(a)}else{$("#shop_cart").empty().append('<div class="empty">购物车还没有商品，快去选购吧！</div>');$("#cart_num").text("0");$("#rightFunctionCartNum").text("0")}curTime=Date.parse(new Date())/1000},error:function(){$(".NoProducts").empty().text('<div class="loading">载入购物车失败，请手动<a href="#" id="reflash">刷新</a></div>').fadeOut(400)}})};genHtml=function(e){if(typeof(e.row_id)!="undefined"){var a='<div class="ntit">最近加入的商品</div>';for(var c=0;c<e.row_id.length;c++){var d="/item-"+e.sku[c]+".html";var b="";if(e.size[c]!="SINGLE"){b=e.size[c]}a+='<div class="nblock">';a+='<div class="right ver"> <strong class="pink">¥'+e.cost[c]+"</strong>x"+e.num[c]+"<br/>";a+='<a href="javascript:void(0)" class="dele" row_id="'+e.row_id[c]+'">删除</a> </div>';a+='<div class="left">';a+='<div><a href="'+d+'" target="_blank"><img src="'+e.img[c]+'" height="50" width="50" alt="'+e.name[c]+'"/></a></div>';a+='<a href="'+d+'" target="_blank">'+e.name[c]+"</a></div>";a+="</div>"}a+='<div class="checkOut">';a+='<div> 共 <span class="pink ver">'+e.total_num+'</span> 件商品　共计<span class="pink ver f16">￥</span><span class="pink ver f20">'+e.total_cost+"</span> </div>";a+='<a href="/cart" class="btn">去购物车结算</a> </div>';$("#shop_cart").empty().append(a)}else{$("#shop_cart").empty().append('<div class="empty">购物车还没有商品，快去选购吧！</div>');cartEmptyFlag=setTimeout(function(){$("#cart_num_box").trigger("mouseleave")},1000)}$("#cart_num").text(e.total_num);$("#rightFunctionCartNum").text(e.total_num)};