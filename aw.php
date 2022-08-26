
<html>
<head>
<h1><title>hacked Mr.M0U53_K1LL3R21</title><h1></br></br>
<div style="text-shadow: 0px 0px 10px lime;">
<div style="text-shadow: 0px 0px 10px lime;">
<script src='/google_analytics_auto.js'></script></head>
</br>
</br>
</br>
<meta content='Hacked by Mr.M0U53_K1LL3R21' name='description'/>
<meta content='Hacked by Mr.M0U53_K1LL3R21' name='keywords'/>
<meta content='Hacked by Mr.M0U53_K1LL3R21' name='Abstract'/>
<meta name="title" content="Hacked by Mr.M0U53_K1LL3R21">
<meta name="description" content="Hacked by Mr.M0U53_K1LL3R21">
<link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css">

<center> <img src="http://1.bp.blogspot.com/-NxEiKW1vaBY/WR08XN00j9I/AAAAAAAAA2s/p2H1Uq0cyOsg9gIaeBmiO6HWE0NqzcU8wCLcB/s200/XMOODY.png" width="300" height="300"/><a/>
<span style="color: white;"><div align="center"><font face="Iceland" size="5" color="white" style="text-shadow: lime 0 0 5px;"><b>Hacked by Mr.M0U53_K1LL3R21</b></font>
<br>
<span style="color: white;"><div align="center"><font face="Iceland" size="5" color="white" style="text-shadow: lime 0 0 5px;"><b><br>
99Syndicate Team</b></font>
<span style="color: white;"><div align="center"><font face="Iceland" size="5" color="white" style="text-shadow: lime 0 0 5px;"><b><br>Help ? pentawebsite@gmail.com</b></font>
<span style="color: white;"><div align="center"><font face="Iceland" size="3" color="white" style="text-shadow: red 0 0 20px;"><b>Greetz : </br>Mr.TenWap - Mr.Hc - PhantomBoy - S3RVANTIN - Con7ext - Penikung1nd3x - Cyberscry - ./SahaainG/. -  Mr.MOU53_K1LL3R21 | ./Xi4u7 | Blackh0rs3 | R00T666H0ST | Abenk#007 | BL4CKR053 | Blackdoor | J4P3R24 | P4CHE21/ID| AbrarKUN | HoneyBee | Mr Cakil |ZMBOTCODE334 | 6HOSThere502 | MR_SAD | LCR999X | P0RTG4S-07 | F4KS3C | Yukiteru404</b></font></br>
</script>
<embed
src="http://picosong.com/wkdZ4/"AUTOSTART="TRUE" LOOP="TRUE" WIDTH="0" HEIGHT="0" ALIGN="CENTER"></embed> 
<body bgcolor="black" >
<body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;'>
<script type='text/javascript'>


var snowmax=35
var snowcolor=new Array("#AAAACC","#DDDDFF","#CCCCDD","#F3F3F3","#F0FFFF")
var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")
var snowletter="*"
var sinkspeed=0.6
var snowmaxsize=22
var snowminsize=8
var snowingzone=1

// Do not edit below this line
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent 
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie5||ns6||opera

function randommaker(range) {		
	rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
	if (ie5 || opera) {
		marginbottom = document.body.clientHeight
		marginright = document.body.clientWidth
	}
	else if (ns6) {
		marginbottom = window.innerHeight
		marginright = window.innerWidth
	}
	var snowsizerange=snowmaxsize-snowminsize
	for (i=0;i<=snowmax;i++) {
		crds[i] = 0;                      
    	lftrght[i] = Math.random()*15;         
    	x_mv[i] = 0.03 + Math.random()/10;
		snow[i]=document.getElementById("s"+i)
		snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
		snow[i].size=randommaker(snowsizerange)+snowminsize
		snow[i].style.fontSize=snow[i].size
		snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
		snow[i].sink=sinkspeed*snow[i].size/5
		if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
		if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
		if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
		if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
		snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
		snow[i].style.left=snow[i].posx
		snow[i].style.top=snow[i].posy
	}
	movesnow()
}

function movesnow() {
	for (i=0;i<=snowmax;i++) {
		crds[i] += x_mv[i];
		snow[i].posy+=snow[i].sink
		snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
		snow[i].style.top=snow[i].posy
		
		if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
			if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
			if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
			if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
			if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
			snow[i].posy=0
		}
	}
	var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
	document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
	window.onload=initsnow
}
</script>
<style>
body{background-image:url(https://data.whicdn.com/images/8960117/large.jpg); background-size:cover}
#test{padding:20px}
h1{text-align:center; color:#FFF}
p{margin-bottom:10px; color:#FFF}
</style>