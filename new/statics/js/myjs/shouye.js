$(function(){
	var sousuo=$("input")[0]
	sousuo.onfocus=function(){
		if (sousuo.value=="站内搜索") {
			sousuo.value=""
		}
	}
	sousuo.onblur=function(){
	    if (sousuo.value=="") {
	    	sousuo.value="站内搜索"
	    }
	}
	
	var nav1=$(".nav1")
	var jieshao=$(".jieshao")
	var xiala1=$(".xiala1")
	var xiala2=$(".xiala2")
	var xiala3=$(".xiala3")
	for (var i = 0; i < nav1.length; i++) {
		a(nav1[i],jieshao[i],xiala1[i],xiala2[i],xiala3[i])
	};
	
	function a(nav1,jieshao,xiala1,xiala2,xiala3){
	hover(nav1,function(){
		jieshao.style.cssText="background:#CB7131;"
		xiala1.style.cssText="display:block;"
		xiala2.style.cssText="display:block;"
		animate(xiala1,{opacity:0.6},400)
		animate(xiala2,{opacity:1},400)
	},function(){
		jieshao.style.cssText=""
		animate(xiala1,{display:"none",opacity:0},400)
		animate(xiala2,{display:"none",opacity:0},400)
	})

	
	var biank=$(".biank",xiala3)
	var about=$(".about",xiala2)
	for (var i = 0; i < about.length; i++) {
		about[i].index=i
		hover(about[i],function(){
			biank[this.index].style.cssText="display:block;"
			this.style.cssText="background:url(img/menu01.png);color:#FC932C;"
		},function(){
			biank[this.index].style.cssText=""
			this.style.cssText=""
		})
	};
	}

	
	var tupian=$(".tupian")
	var btn=$(".btn")
	var zIndex=1
	var num=0
	setInterval(aa,5000)
		function aa(){
		num++
		for (var i = 0; i < tupian.length; i++) {
			tupian[i].style.zIndex=1
			tupian[i].style.opacity=0.2
			btn[i].style.cssText="background:url(img/dot1.jpg)"
		};
		if (num==4) {
			num=0
		}
		tupian[num].style.zIndex=++zIndex
		animate(tupian[num],{zIndex:++zIndex,opacity:1},1000)
		btn[num].style.cssText="background:url(img/dot2.jpg)"
	}

	for (var i = 0; i < btn.length; i++) {
		btn[i].index=i
		btn[i].onclick=function(){
			for (var i = 0; i < tupian.length; i++) {
				tupian[i].style.zIndex=1
			    tupian[i].style.opacity=0.2
			    btn[i].style.cssText="background:url(img/dot1.jpg)"
			};
			tupian[this.index].style.zIndex=++zIndex
		    animate(tupian[this.index],{zIndex:++zIndex,opacity:1},1000)
		    this.style.cssText="background:url(img/dot2.jpg)"
		    num=this.index
		}
	};


})