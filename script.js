// validate form filling
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}

//open new window button
function openWin1() {
	window.open("https://www.forbes.com/sites/ilyapozin/2012/03/27/top-7-web-design-mistakes-small-businesses-make/#458ba41b6858")
}

function openWin2() {
	window.open("https://www.upwork.com/blog/2014/03/5-phases-build-website/")
}

//timing clock h/m/s
function startTime() {
	var today = new Date();
	var h = today.getHours();
	var m = today.getMinutes();
	var s = today.getSeconds();
	m = checkTime(m);
	s = checkTime(s);
	document.getElementById('time').innerHTML = 
	h + ":" + m + ":" + s;
	var t = setTimeout(startTime, 500);
}
function checkTime(i) {
	if (i < 10) {i = "0" + i}; //add zero in front of number <10
	return i;
}

//print about page
function printPage() {
	window.print();
}




