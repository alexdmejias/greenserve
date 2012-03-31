 $(document).ready( function(){	
		var buttons = { previous:$('#lofslidecontent45 .lof-previous') ,
						next:$('#lofslidecontent45 .lof-next') };
						
		$obj = $('#lofslidecontent45').lofJSidernews( { interval : 6500,
												direction		: 'opacitys',	
											 	easing			: 'easeInOutCubic',
												duration		: 1200,
												auto		 	: true,
												maxItemDisplay  : 4,
												navPosition     : 'horizontal', // horizontal
												navigatorHeight : 20,
												navigatorWidth  : 20,
												mainWidth:880,
												buttons			: buttons} );	
	});