//2.获取节点
function get(elem){
	var method = elem.substr(0,1)==="."?"getElementsByClassName":"getElementById";
	return document[method](elem.substr(1));	
}


//4.随机数
function random(range){
	var max = Math.max(range[0],range[1]);
	var min = Math.min(range[0],range[1]);
	var diff = max - min;
	return Math.ceil(Math.random()*diff+min);
}

//5.随机位置
function range(){
	var range = {left : { x : [] , y : []} , right : { x : [] , y : []}}
	range.wrap = {
		w : get("#wrap").clientWidth,
		h : get("#wrap").clientHeight
	}
	range.photo = {
		w : get(".photo")[0].clientWidth,
		h : get(".photo")[0].clientHeight
	}
	range.left = {
		x : [0-range.photo.w,range.wrap.w/2-range.photo.w/2],
		y : [0-range.photo.h,range.wrap.h]
	}
	range.right = {
		x : [range.wrap.w/2,range.wrap.w],
		y : range.left.y
	}
	return range
}

//1.翻转	
function turn(elem){
	var className = elem.className;
	var n = elem.id.split("_")[1];
	if(!/photo_center/.test(className)){
		return rsort(n);
	}
	if(/photo_front/.test(className)){
		className = className.replace(/photo_front/,"photo_back");
		get("#nav_"+n).className += " btn_back"; 
	}else{
		className = className.replace(/photo_back/,"photo_front");
		get("#nav_"+n).className = get("#nav_"+n).className.replace(/btn_back/,""); 
	}
	var nav_btn = get(".nav-btn");
	for(var i = 0;i<nav_btn.length;i++){
		nav_btn[i].className = nav_btn[i].className.replace(/current/,"");
	}
	get("#nav_"+n).className+=" current";
	return elem.className = className
}

//3.渲染字符串
var data = data;

function addItem(){
	var template = get("#wrap").innerHTML;
	var html = [];
	var nav = [];
	for(s in data){
		var _html = template.replace("{{index}}",s)
							.replace("{{img}}",data[s].img)
							.replace("{{caption}}",data[s].caption)
							.replace("{{desc}}",data[s].desc);
		var _nav = ' <span class="nav-btn" id="nav_'+s+'" onclick="turn(get(\'#wrap_'+s+'\'))"><i class="iconfont icon-fenxiang1"></i></span> ';
		html.push(_html);
		nav.push(_nav);
	}
	get("#wrap").innerHTML=html.join('');
	get("#nav").innerHTML=nav.join('');
}
addItem();


//重新排序
var n = random([0,data.length]);
function rsort(n){
	//清除原有样式
	var photos = get(".photo");
	var photosArr = [];
	for(var i =0 ;i < photos.length ; i++){
		photos[i].className = photos[i].className.replace(/photo_center/,"");
		photos[i].className = photos[i].className.replace(/photo_back/,"");
		photos[i].className = photos[i].className.replace(/photo_front/,"");
		photos[i].style.left='';
		photos[i].style.top='';
		photos[i].style["transform"]='rotate(360deg) scale(1.3)';
		photos[i].style["-webkit-transform"]='rotate(360deg) scale(1.3)';
		photos[i].style["-moz-transform"]='rotate(360deg) scale(1.3)';
		photos[i].style["-ms-transform"]='rotate(360deg) scale(1.3)';
		photos[i].className+=" photo_front"
		photosArr.push(photos[i]);
	}
	get("#wrap_"+n).className+=" photo_center";

	//导航按钮样式
	var nav_btn = get(".nav-btn");
	for(var i = 0 ; i < nav_btn.length ; i++){
		nav_btn[i].className = nav_btn[i].className.replace(/current/,"");
	}
	get("#nav_"+n).className+=" current";


	//图片以当前中心图片分两组
	photosArr.splice(n,1);
	var leftPhotos = photosArr.splice(0,photosArr.length/2);
	var rightPhotos = photosArr;
	var ranges = range();

	for(s in leftPhotos){
		leftPhotos[s].style.left=random(ranges.left.x)+"px";
		leftPhotos[s].style.top=random(ranges.left.y)+"px";
		leftPhotos[s].style["transform"]="rotate("+random([-150,150])+"deg) scale(1)";
		leftPhotos[s].style["-webkit-transform"]="rotate("+random([-150,150])+"deg) scale(1)";
		leftPhotos[s].style["-moz-transform"]="rotate("+random([-150,150])+"deg) scale(1)";
		leftPhotos[s].style["-ms-transform"]="rotate("+random([-150,150])+"deg) scale(1)";
	}
	for(s in rightPhotos){
		rightPhotos[s].style.left=random(ranges.right.x)+"px";
		rightPhotos[s].style.top=random(ranges.right.y)+"px";
		rightPhotos[s].style["transform"]="rotate("+random([-150,150])+"deg) scale(1)";
		rightPhotos[s].style["-webkit-transform"]="rotate("+random([-150,150])+"deg) scale(1)";
		rightPhotos[s].style["-moz-transform"]="rotate("+random([-150,150])+"deg) scale(1)";
		rightPhotos[s].style["-ms-transform"]="rotate("+random([-150,150])+"deg) scale(1)";
	}
}
rsort(n);
