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
		console.log($(this));

		$(this).toggle(function(){
			$(this).children('.tip_body').slideDown();
		},function(){
			$(this).children('.tip_body').slideUp();
		})
	});


	Handlebars.registerHelper("addCat", function() {
		return this.cat == 'water' ? 'water' : this.cat== 'power' ? 'power' : 'paper';
	});

	Handlebars.registerHelper("addDiff", function(){
		return this.diff == 'Investment' ? 'hard' : this.diff == 'Low-Cost' ? 'medium' : 'easy';
	});


})();