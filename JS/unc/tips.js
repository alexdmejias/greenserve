// JavaScript Document
			



$(document).ready(function(){
	

		$.get('data/tips.xml',function(data){
			$(data).find('tip').each(function(){
	
				var tip = $(this);
				var cat = tip.attr('cat');
				var title = tip.attr('title');
				var diff = tip.attr('diff');
				var desc = tip.find('description').text();
				var cost = tip.find('cost').text();
				var rank='';
				var links = tip.find('links');
				
				$('.tip_body').hide();
				//when i get hosting change this variable
				var url=encodeURIComponent('http://www.greenserve.org');
				var twitterAcct= 'Grnsrve';
				
				//email body
				var emailBody = encodeURIComponent(title+' - '+desc +'\n'+
				'To view more tips similar to this one, visit us at ')+ url;
				
				//find to which category the tip belongs to
/*water*/		if( cat =="water" && diff=="easy"){
					var html = '<div class="tip water easy">';
				} else if(cat=="water" && diff=="medium"){
					var html = '<div class="tip water medium">';
				} else if (cat=="water" && diff=="hard"){
					var html = '<div class="tip water hard">';
										
/*power*/       } else if(cat=="power" && diff=="easy"){
					var html = '<div class="tip power easy">';
				} else if (cat=="power" && diff=="medium"){
					var html = '<div class="tip power medium">';
				} else if(cat=="power" && diff=="hard"){
					var html = '<div class="tip power hard">';
					
/*paper*/       } else if(cat=="paper" && diff=="easy"){
					var html = '<div class="tip paper easy">';
				} else if (cat=="paper" && diff=="medium"){
					var html = '<div class="tip paper medium">';
				} else if(cat=="paper" && diff=="hard"){
					var html = '<div class="tip paper hard">';
				}

				if(diff=='easy'){
					rank='No-cost';
				} else if (diff=='medium'){
					rank='Low-Cost';
				} else if (diff=='hard'){
					rank='Investment';
				}

				
				//display the tip
				html+= '<div class="tip_whole">';
				
				//start tip_header
				html+= '<div class="tip_header">';
				
				html+= '<h5 class="tip_title"><b>' + title +'</b> - '+ rank +'</h5>';
				
				//start tip_social
				html+='<div class="tip_social">';
				
				//twitter link
				html+='<a target="_blank" href="http://twitter.com/share?text='+
				encodeURIComponent(title)+' '+encodeURIComponent('#grnsrve')+'&url='+url+'&via='+twitterAcct+'"><img src="IMG/media/twitter_16.png" alt="twiter link"/></a>';
	
				//facebook link
				html+='<a href="http://www.facebook.com/dialog/feed?app_id=219278884753677'+
				'&display=page&message='+encodeURIComponent(title)+'&link='+url+'&redirect_uri='+
				url+'" target="_blank"><img src="IMG/media/facebook_16.png" alt="facebook link"/></a>';
				
				//mailto link
				html+='<a alt="Email this tip" target="_blank" href="mailto:?subject=Simple Tip from '+
				url+'&body='+emailBody+'"><img src="IMG/media/email_16.png" alt="email link"/></a>';			

				//end tip_social
				html+='</div>';
				
				//end tip_header
				html+= '</div>';
				
				
				
				
				//starts the tip_body and adds the desc
				html+= '<div class="tip_body">';
				
				//start the left side of the tip				
				html+= '<div class="grid_20 alpha">';
				html+= '<p class="tip_desc">' + desc  + '</p>';
				
				//if there are links display them
				
				
				
							html += '<div class="tip_links">';
					 		html +='<h5>More information</h5>';
				
				
				
				if (links.length) {
					  links.find('link').each(function() {
							var linkTitle= $(this).attr('title');
							html += '<div class="tip_link"><a target="_blank" href="'+ $(this).text()+'">' + linkTitle + '</a></div>';
					  });
				}
				
				html+= '</div>';
				html+= '</div>';				
				//the chart code goes here				
				html+='<div class="grid_19 push_2 omega">';
				html+='<h2 class="tip_cost_title">Avg. Cost to Implement</h2>';
				html+='<h1 class="tip_cost">'+cost+'</h1>';
				html+='</div>';
				
/*				html+='<div class="graph"></div>';
				html+='</div>';
				
$('.graph').gchart({type: 'bar', 
    dataLabels: ['CFL', 'Incandesent', '2005', '2006'], legend: 'right', 
    series: [$.gchart.series('IE', [95.97, 91.80, 88.16, 86.64], 'red'), 
        $.gchart.series('Netscape', [3.39, 2.83, 1.61, 0.00], 'green'), 
        $.gchart.series('Firefox', [0.00, 4.06, 8.13, 9.95], 'blue')] 
}); */
				
				//close the 'tip_body' class
				html+= '</div>';
				//close the 'tip_whole' class
				html+= '</div>';
				
				//append all of the information to the tip container
				$('.tip_container').append($(html));
				
				
				//toggle the tip on or off
				$("h5.tip_title,h3.tip_title").toggle(function(){
						$(this).parent().next().slideDown();
						},function(){
						$(this).parent().next().slideUp();
						});


				$('#water').click(function(){
						$('.tip_body').slideUp();
						$('.power,.paper').slideUp();
						$('.water').slideDown();
					});
				$('#paper').click(function(){
						$('.tip_body').slideUp();
						$('.power,.water').slideUp();
						$('.paper').slideDown();
					});
				$('#power').click(function(){
					$('.tip_body').slideUp();
						$('.water,.paper').slideUp();
						$('.power').slideDown();
					});
				$('#easy').click(function(){
					$('.tip_body').slideUp();
						$('.medium,.hard').slideUp();
						$('.easy').slideDown();
					});
				$('#medium').click(function(){
					$('.tip_body').slideUp();
						$('.easy,.hard').slideUp();
						$('.medium').slideDown();
					});
				$('#hard').click(function(){
					$('.tip_body').slideUp();
						$('.easy,.medium').slideUp();
						$('.hard').slideDown();
					});
				
/*				$('#all').click(function(){
					$('.tip_body').slideUp();
					$('.tip').fadeIn();
					});	*/
				
				$("#all").toggle(function(){
						$('.tip_body').slideUp();
						$('.tip').slideDown();
					},function(){
						$('.tip_body, .power, .water, .paper').slideDown();
					});
				
			});
		});

});

