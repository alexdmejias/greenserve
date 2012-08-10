(function(){
	var domain = encodeURIComponent('http://greenserve.org'),
		twitterAcct = 'Grnsrve',
		social=[
			{
				"image":"IMG/media/twitter_16.png",
				"alt":"twitter link"
			},
			{
				"image":"IMG/media/facebook_16.png",
				"alt":"facebook share link"
			},
			{
				"image":"IMG/media/email_16.png",
				"alt":"email link"
			}
		];


	$.ajax({
		url:'data/tips.json',
		dataType:'json',
		success:function(data){
			template(data);
			addSocial(data);
		},
		error:function(a,b,c){
			console.log(a+b+c)
		}
	});


	function template(data){
		var template= Handlebars.compile($('#template').html()),
			temp = template(data);
		$('.tip_container').append(temp);

	};

	function addSocial(data){

		$('.tip_social').each(function(index,value){
			var append='';
			for(var i = 0, soc = social.length;i<soc;i++){
				var title = $(value).parent().first().find('b').text(),
					urls = ["http://twitter.com/share?text="+encodeURIComponent(title)+" "+encodeURIComponent('#grnsrve')+"&url="+domain+"&via="+twitterAcct,
							"http://www.facebook.com/dialog/feed?app_id=219278884753677"+"&display=page&caption="+encodeURIComponent(title)+"&link="+domain+"&redirect_uri="+domain,
							"mailto:?subject=Simple Tip from "+domain+"&body="+title];
				append+='<a href="'+urls[i]+'" alt="'+social[i].alt+'"><img src="'+social[i].image+'"/></a>';
			}
			$(this).append(append);
		});
	}

	Handlebars.registerHelper("addCat", function() {
		return this.cat == 'water' ? 'water' : this.cat== 'power' ? 'power' : 'paper';
	});

	Handlebars.registerHelper("addDiff", function(){
		return this.diff == 'Investment' ? 'hard' : this.diff == 'Low-Cost' ? 'medium' : 'easy';
	});


	//all button
	$('#all').on('click',function(e){
		e.preventDefault();
		$('.tip_whole').slideDown();
	});

	//subnav buttons
	$('#subnav li:not(#all)').on('click',function(e){
		e.preventDefault();
		var ex = '.'+$(this).attr('id');
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

})();

