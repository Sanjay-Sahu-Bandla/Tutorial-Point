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

	days = days==0 ? 'Posted Today' : (days>28 ? '' :  (days+' Days ago'));
	months = ((months>0)&&(months<12)) ? (months+' Months ago') : '';
	years = years>0 ? (years+' Years ago') : '' ;

	$('span#time').eq(i).html(days+months+years);
}

},1000);

$('#searchbtn').click(function(){

    var similarCode = $('#similarCode').val();

    $('#similar option').each(function() {

        if($(this).val() == similarCode) {

            window.location = $(this).attr('id');

        }
    });
});

  // Add smooth scrolling to all links

$(document).ready(function(){

  $(".nav-link").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});