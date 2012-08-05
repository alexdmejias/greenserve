		(function(){

			var domain = encodeURIComponent('http://greenserve.org'),
				twitterAcct = 'Grnsrve',
				emailBody;

			$.ajax({
				url:'tips2.json',
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
					$('#list').append(temp)
				}

		})();