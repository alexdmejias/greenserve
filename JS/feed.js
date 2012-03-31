google.load("feeds","1");function feedLoaded(result){if(!result.error){for(var i=0;i<result.feed.entries.length;i++){var ttt="this is a test string";var entry=result.feed.entries[i];var title=entry.title;var link=entry.link;var date=new Date(entry.publishedDate)
var d=date.getDate();var m=date.getMonth()+1;var y=date.getFullYear();var yy=y.toString();var yyy=yy.slice(2);if(m<10){m='0'+m;}
if(d<10){d='0'+d;}
var dispDate=m+'.'+d+'.'+yyy;if(title.length>17){title=title.slice(0,16)+'...';}
var html='<div class="entry">';html+='<li><a href="'+link+'">'+dispDate+' - '+title+'</a></li>';$('#footer_news').append($(html));}}}
function OnLoad(){var feed=new google.feeds.Feed("https://greenserve.wordpress.com/feed/");feed.setNumEntries(3);feed.load(feedLoaded);}
google.setOnLoadCallback(OnLoad);