$(document).ready(function(){
	//Mobile menu
	$(".mobile-menu__trigger").click(function(){
		$(".mobile-menu").toggleClass("active");
	});
	//Blog articles
	$(function () {
		var $content = $('.blog-feed');
		var data = {
			rss_url: 'https://medium.com/feed/rockchain-com'
		};
		$.get('https://api.rss2json.com/v1/api.json', data, function (response) {
			if (response.status == 'ok') {
				var output = '';
				$.each(response.items, function (k, item) {
					var t = item.pubDate.split(/[- :]/);
					var tmp_date = new Date(t[0], t[1]-1, t[2], t[3], t[4], t[5]);
					var formattedDate = new Date(tmp_date);
					var d = formattedDate.getDate();
					var m =  formattedDate.getMonth();
					m += 1;
					var y = formattedDate.getFullYear();
					var blogpost_date = d + "." + m + "." + y;
					var tagIndex = item.description.indexOf('<img');
					var srcIndex = item.description.substring(tagIndex).indexOf('src=') + tagIndex;
					var srcStart = srcIndex + 5;
					var srcEnd = item.description.substring(srcStart).indexOf('"') + srcStart;
					var src = item.description.substring(srcStart, srcEnd);
					var yourString = item.description.replace(/<img[^>]*>/g,"");
					var maxLength = 380;
					var trimmedString = yourString.substr(0, maxLength);
					trimmedString = trimmedString.substr(0, Math.min(trimmedString.length, trimmedString.lastIndexOf(" ")));
					output += '<div class="blog-feed__post">';					
					output += '<a href="' + item.link + '" class="blog-feed__thumbnail" style="background-image: url(' + src + ');"></a>';
					output += '<div class="blog-feed__text-wrapper"><h3 class="blog-feed__heading"><a class="blog-feed__heading-link" href="'+ item.link + '">' + item.title + '</a></h3>';
					output += '<div class="blog-feed__metadata">By ' + item.author + ' on ' + blogpost_date + '</div>';					
					output += '<div class="blog-feed__copy">' + trimmedString + '...</div>';
					output += '</div></div>';
					return k < 10;
				});
				$content.html(output);
			}
		});
	});
});