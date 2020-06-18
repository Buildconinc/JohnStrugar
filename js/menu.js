var open = false;
function OpenClose(value){
	if (value) {
		open = false;
		console.log ('postoji', value);
	} else {
		open = !open;
		console.log ('ne postoji', value)
	}
	if (open === true) {
		$( ".ham" ).css( "display", "flex" );
		// $( "body" ).css( "overflow", "hidden" );
		$( "#open" ).css( "display", "none" );
		$( "#close" ).css( "display", "flex" );
	} else {
		$( ".ham" ).css( "display", "none" );
		// $( "body" ).css( "overflow", "auto" );
		$( "#open" ).css( "display", "flex" );
		$( "#close" ).css( "display", "none" );
		console.log ('postoji', open);
	}
}