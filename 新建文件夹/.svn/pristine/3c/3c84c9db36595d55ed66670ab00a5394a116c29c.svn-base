$(function(){
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


	var index=0
	$(".shen2>div").eq(index).css("zIndex",1)
	$(".shen3200").eq(index).css("border","1px solid #E8AB08")
	function aa(){
			index=$(this).index()
			$(".shen2>div").css("zIndex",0)
			$(".shen2>div").eq(index).css("zIndex",1)
			$(".shen320>div").children().css("border","1px solid white")
			$(this).children().eq(0).css("border","1px solid #E8AB08")
	}
	$(".shen320>div").on("click",aa)
	$(".shen33").on("click",function(){
		index++
		console.log(index)
		$(".shen2>div").css("zIndex",0)
		$(".shen320>div").children().css("border","1px solid white")
		$(".shen2>div").eq(index).css("zIndex",1)
		$(".shen3200").eq(index).css("border","1px solid #E8AB08")
		if(index>5){
			index--
			console.log(index)
			$(".shen320").append($(".shen320>div:eq(0)")[0])
			$(".shen2").append($(".shen2>div:eq(0)")[0])
		}
	})
	$(".shen31").on("click",function(){
		index--
		console.log(index)
		$(".shen2>div").css("zIndex",0)
		$(".shen320>div").children().css("border","1px solid white")
		$(".shen2>div").eq(index).css("zIndex",1)
		$(".shen3200").eq(index).css("border","1px solid #E8AB08")
		if(index<0){
			index++
			console.log(index)
			$(".shen320").prepend($(".shen320>div:last")[0])
			$(".shen2").prepend($(".shen2>div:last")[0])
		}
	})


	
})