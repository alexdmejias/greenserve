(function(){

	var domain = encodeURIComponent('http://greenserve.org'),
		twitterAcct = 'Grnsrve',
		emailBody;

	var social=[
		{
			"url":"http://twitter.com/share?text="+encodeURIComponent(this.title)+" "+encodeURIComponent('#grnsrve')+"&url="+domain+"&via="+twitterAcct,
			"image":"IMG/media/twitter_16.png",
			"alt":"twitter link"
		},
		{
			"url":"http://www.facebook.com/dialog/feed?app_id=219278884753677"+"&display=page&message="+encodeURIComponent(title)+"&link="+url+"&redirect_uri="+url,
			"image":"IMG/media/facebook_16.png",
			"alt":"facebook share link"
		},
		{
			"url":"mailto:?subject=Simple Tip from "+url+"&body="+emailBody,
			"image":"IMG/media/email_16.png",
			"alt":"email link"
		}
	];

	// var social_partial = '<a href="{{url}}" alt="{{alt}}"><img src="{{image}}"/></a>';

	$.ajax({
		url:'data/tips.json',
		dataType:'json',
		success:function(data){
			// console.log(data);
			template(data);

		},
		error:function(a,b,c){
			console.log(a+b+c)
		}
	});
	function template(data){
		var template= Handlebars.compile($('#template').html());
		var temp = template(data);
		$('.tip_container').append(temp);
	}


	$('#all').on('click',function(){
		$('.tip_whole').slideDown();
	});

	$('#subnav li:not(#all)').on('click',function(){
		var ex = '.'+$(this).attr('id');
		// console.log(ex);
		$('.tip_whole').not(ex).slideUp(function(){
			$(ex).slideDown();
		});
	})


	//individual
	$('.tip_container').on('click','.tip_whole',function(){
		$(this).toggle(function(){
			$(this).children('.tip_body').slideUp();
		},function(){
			$(this).children('.tip_body').slideDown();
		})
	});


	Handlebars.registerHelper("addCat", function() {
		return this.cat == 'water' ? 'water' : this.cat== 'power' ? 'power' : 'paper';
	});

	Handlebars.registerHelper("addDiff", function(){
		return this.diff == 'Investment' ? 'hard' : this.diff == 'Low-Cost' ? 'medium' : 'easy';
	});


	Handlebars.registerPartial('addSocial',function(){
		var html = '';
		for(var i= 0;i<social.length;i++){
			html+= '<a href="'+social[i].url+'"><img src="'+social[i].image+'"/></a>'
		}
		return html
	});
	// Handlebars.registerPartial('addSocial',social_partial);

})();

/*
Handlebars.registerHelper("stripes", function(array, even, odd, fn, elseFn) {
  if (array && array.length > 0) {
    var buffer = "";
    for (var i = 0, j = array.length; i < j; i++) {
      var item = array[i];
 
      // we'll just put the appropriate stripe class name onto the item for now
      item.stripeClass = (i % 2 == 0 ? even : odd);
 
      // show the inside of the block
      buffer += fn(item);
    }
 
    // return the finished buffer
    return buffer;
  }
  else {
    return elseFn();
  }
});*/