function move(time) {
	$('#b').css('background-color', 'white').css('border-color', 'lightgrey');
	var opts = {top: (Math.random() * 450), left: (Math.random() * 550)};
	$('#b').animate(opts, time, function() {
		$('#b').css('background-color', 'red').css('border-color', 'darkgrey');
	});
}

var c = 0, intv = setInterval(move, 1000, 500);
$('#b').click(function() {
	if ($(this).css('background-color') !== 'rgb(255, 255, 255)') {
		$('span').css('background-color', 'white').text(++c);
		if (c % 5 === 0) {
			clearInterval(intv);
			intv = setInterval(move, 1000 - c * 10, 500 - c * 5);
			move(500 - c * 5);
		}
	}
});
