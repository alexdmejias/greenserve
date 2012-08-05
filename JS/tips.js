(function(){

	var domain = encodeURIComponent('http://greenserve.org'),
		twitterAcct = 'Grnsrve',
		emailBody;

	$.ajax({
		url:'data/tips.json',
		dataType:'json',
		success:function(data){
			console.log(data);
			template(data);

		},
		error:function(a,b,c){
			console.log(a+b+c)
		}


	});
		function template(data){
			var template= Handlebars.compile($('#template').html());
			var temp = template(data)
			$('.tip_container').append(temp)
		}

})();