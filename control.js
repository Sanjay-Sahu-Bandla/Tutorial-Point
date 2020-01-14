var time = setInterval(function() {

for (var i = 0; i < 30; i++) {

	var thisTime = $('span#time').eq(i).attr('data-attribute');
	var uploadedDate = new Date(thisTime);
	var now = new Date().getTime();

	var distance = now - uploadedDate;

	var years = Math.floor(distance / (1000 * 60 * 60 * 24 * 28 * 12));
	var months = Math.floor(distance / (1000 * 60 * 60 * 24 * 28));
	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	days = days==0 ? 'Today posted' : (days>28 ? '' :  (days+' Days ago'));
	months = ((months>0)&&(months<12)) ? (months+' Months ago') : '';
	years = years>0 ? (years+' Years ago') : '' ;

	$('span#time').eq(i).html(days+months+years);
}

},1000);