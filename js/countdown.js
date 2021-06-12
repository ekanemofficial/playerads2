
function countdown(){

	var now = new Date();
	var  eventDate = new Date("2022, 10, 25");
	// this field can be collected from the form id...

	var currentTime = now.getTime();
	var eventTime = eventDate.getTime();

	var remTime = eventTime - currentTime;

	// cal for days. hours, minutes and sec9
	var s = Math.floor(remTime / 1000);
	var m = Math.floor(s / 60);
	var h = Math.floor(m / 60);
	var d = Math.floor(h / 24);

	h %= 24;
	m %= 60;
	s %= 60;

	h = (h < 10) ? "0" + h:h;
	m = (m < 10) ? "0" + m:m;
	s = (s < 10) ? "0" + s:s;


	var days = document.getElementById("day").innerHTML = d;
	var hours = document.getElementById("hour").innerHTML = h;
	var minutes = document.getElementById("minute").innerHTML = m;
	var seconds = document.getElementById("second").innerHTML = s;

	setTimeout(countdown, 1000);

	if(remTime < 0){

			clearInterval(countdown);
			var d = document.getElementById("day").innerHTML = 'EXP';
			var h = document.getElementById("hour").innerHTML = 'EXP';
			var m = document.getElementById("minute").innerHTML = 'EXP';
			var s = document.getElementById("second").innerHTML = 'EXP';

		}
}

countdown();


// 	var today = new Date();

	
// 	var month = today.getMonth();
// 	var year = today.getFullYear();
// 	var date = today.getDate();

// 	var currentTime = today.getTime();
// 	var eventTime = today.getTime();


// 	var s = Math.floor(currentTime / 1000);
// 	var m = Math.floor(s / 60);
// 	var h = Math.floor(m / 60);
// 	var d = Math.floor(h / 24);

// 	h = (h < 10) ? "0" + h:h;
// 	m = (m < 10) ? "0" + m:m;
// 	s = (s < 10) ? "0" + s:s;

// 	if(date < 10)
// 	{
// 		date='0'+date;
// 	}

// 	if(month < 10)
// 	{
// 		month='0'+month;
// 	}

// 	today = year+'-'+month+'-'+date+' : '+ h+'-'+m+'-'+s;
// 	document.getElementById('cDate').innerHTML= today;


// const t = new Date();
// const date = ('0' + t.getDate()).slice(-2);
// const month = ('0' + (t.getMonth() + 1)).slice(-2);
// const year = t.getFullYear();
// const hours = ('0' + t.getHours()).slice(-2);
// const minutes = ('0' + t.getMinutes()).slice(-2);
// const seconds = ('0' + t.getSeconds()).slice(-2);
// const time = `${date}/${month}/${year}, ${hours}:${minutes}:${seconds}`;


