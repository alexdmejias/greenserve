(function(){

	var domain = encodeURIComponent('http://greenserve.org'),
		twitterAcct = 'Grnsrve',
		emailBody;

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



		$("#all").toggle(function(){
			$('.tip_body, .power, .water, .paper').slideDown();
		},function(){
			$('.tip_body').slideUp();
			$('.tip').slideDown();
		});

		$('.tip_title').click(function(){
			$(this).parent().next('div').slideDown();
		});
		$('.tip_title').on('click',function(){

		});

		Handlebars.registerHelper("addCat", function() {
			return this.cat == 'water' ? 'water' : this.cat== 'power' ? 'power' : 'paper';
		});

		Handlebars.registerHelper("addDiff", function(){
			return this.diff == 'Invesment' ? 'hard' : this.diff == 'Low-Cost' ? 'medium' : 'easy';
		});

})();