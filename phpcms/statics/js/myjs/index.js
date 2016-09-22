$(function(){

    var banner=$(".banner1")
    var btns=$(".btn")
    var btn=$(".btn div")
    var now=1
    banner.eq(0).css("opacity",1)
    btn.eq(0).css("background","#999")
    var t=setInterval(lunbo,3000)
    function lunbo(){
        for (var i = 0; i < banner.length; i++) {
            banner.eq(i).animate({opacity:0})
            btn.eq(i).css("background","#ccc")
        }
        banner.eq(now).animate({opacity:1}).finish()
        btn.eq(now).css("background","#999")
        now++
        if(now==4){
            now=0
        }
    }
    var datu=btns.parent()
    datu.hover(function(){
        clearInterval(t)
    },function(){
        t=setInterval(lunbo,3000)
    })

    var banner2=$(".banner2")
    var shang=$(".shang")
    console.log(banner2.length)
    for (var i = 0; i < banner2.length; i++) {
        banner2.eq(i).attr("index",i)
        banner2.eq(i).hover(function(){
            shang.eq($(this).attr("index")).css("display","block")
            shang.eq($(this).attr("index")).animate({opacity:1})
        },function(){
            that=$(this)
            shang.eq($(this).attr("index")).animate({opacity:0},function(){shang.eq(that.attr("index")).css("display","none")})
        })
    }

    for (var i = 0; i < btn.length; i++) {
        btn.eq(i).attr("index",i)
        btn.eq(i).on("click",function(){
            for (var i = 0; i < banner.length; i++) {
                banner.eq(i).animate({opacity:0})
                btn.eq(i).css("background","#ccc")
            }
            banner.eq($(this).attr("index")).animate({opacity:1})
            $(this).css("background","#999")
            now=$(this).attr("index")
        })
    };

    banner2.eq(0).find("div").eq(0).addClass("banner12")
    banner2.eq(1).find("div").eq(0).addClass("banner13")
    banner2.eq(2).find("div").eq(0).addClass("banner14")
    banner2.eq(3).find("div").eq(0).addClass("banner15")
    banner2.eq(4).find("div").eq(0).addClass("banner16")
    banner2.eq(0).find("div").eq(1).addClass("shang1")
    banner2.eq(1).find("div").eq(1).addClass("shang2")
    banner2.eq(2).find("div").eq(1).addClass("shang3")
    banner2.eq(3).find("div").eq(1).addClass("shang4")
    banner2.eq(4).find("div").eq(1).addClass("shang5")

})