setInterval(function(){daojishi()},1000);//刷新
function daojishi(){
	var z = new Date();
	var a = z.getFullYear();//年
	var b = z.getMonth() + 1;//月
	var c = z.getDate();//日
	var d = z.getHours();//时
	var e = z.getMinutes();//分
	var f = z.getSeconds();//秒
	var gaokaori = 31 + 28 + 31 + 30 + 31 + 7;//高考在6月7日,【可修改】
	var passed = hpassed();//一年过了多少天
	var shi = hshi();//剩余时
	var fen = hfen();//剩余分
	var miao = hmiao();//剩余秒
	var gaokao = hgaokao();
	var tian = htian();//剩余天
	var g = panduan();
	function hpassed(){
		if (a % 4 == 0){
			if (b == 1){passed = c}
			else if (b == 2){passed = 31 + c}
			else if (b == 3){passed = 59 + c + 1}
			else if (b == 4){passed = 90 + c + 1}
			else if (b == 5){passed = 120 + c + 1}
			else if (b == 6){passed = 151 + c + 1}
			else if (b == 7){passed = 181 + c + 1}
			else if (b == 8){passed = 212 + c + 1}
			else if (b == 9){passed = 243 + c + 1}
			else if (b == 10){passed = 273 + c + 1}
			else if (b == 11){passed = 304 + c + 1}
			else if (b == 12){passed = 334 + c + 1}
		}
		else {
			if (b == 1){passed = c}
			else if (b == 2){passed = 31 + c}
			else if (b == 3){passed = 59 + c}
			else if (b == 4){passed = 90 + c}
			else if (b == 5){passed = 120 + c}
			else if (b == 6){passed = 151 + c}
			else if (b == 7){passed = 181 + c}
			else if (b == 8){passed = 212 + c}
			else if (b == 9){passed = 243 + c}
			else if (b == 10){passed = 273 + c}
			else if (b == 11){passed = 304 + c}
			else if (b == 12){passed = 334 + c}
		}
		return passed;
	}
	function hgaokao(){
		if (( a + 1 ) % 4 ==0&& passed >= gaokaori){gaokao = gaokaori + 1}
		else if (a % 4 == 0 && passed <= gaokaori+1){gaokao = gaokaori + 1}
		else {gaokao = gaokaori}
		return gaokao;
	}
	function htian(){
		if (a % 4 == 0 && passed >= gaokao){tian = 366 - passed + gaokaori - 1}
		else if (a % 4 == 0 && passed < gaokao){tian = gaokao - passed - 1}
		else if (( a + 1 ) % 4 == 0 && passed >= gaokaori){tian = 365 - passed + gaokao - 1}
		else if (a % 4 != 0 && passed < gaokaori){tian = gaokaori - passed -1}
		else {tian = 365 - passed + gaokaori - 1}
		return tian;
	}
	tian = checktian(tian);
	function checktian(i){
		if (i < 100 && i > 9){i = "0" + i}
		if (i < 10){i = "00" + i}
		return i;
	}
	function hshi(){
		shi = 24 - 1 - d;
		return shi;
	}
	function hfen(){
		fen = 60 - 1 - e;
		return fen;
	}
	function hmiao(){
		miao = 60 - 1 - f;
		return miao;
	}
	shi = check(shi);
	fen = check(fen);
	miao = check(miao);
	b = check(b);
	c = check(c);
	d = check(d);
	e = check(e);
	f = check(f);
	function check(i){
		if (i < 10){i = "0" + i}
		return i;
	}
	function panduan(){
		if(passed > gaokaori+1){g=a+1}
		else {g=a}
		return g;
	}
	document.getElementById("ltian").innerHTML = tian;
	document.getElementById("lshi").innerHTML = shi;
	document.getElementById("lfen").innerHTML = fen;
	document.getElementById("lmiao").innerHTML = miao;
	document.getElementById("nnian").innerHTML = a;
	document.getElementById("nyue").innerHTML = b;
	document.getElementById("nri").innerHTML = c;
	document.getElementById("nshi").innerHTML = d;
	document.getElementById("nfen").innerHTML = e;
	document.getElementById("nmiao").innerHTML = f;
	document.getElementById("er").innerHTML = g;
}