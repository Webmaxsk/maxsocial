<% require themedCSS(maxsocial, maxsocial) %>
<div class="icons">
	<% with SiteConfig %>
		<% if fbURL %>
			<a class="fb" href="$fbURL"><i class="icon-facebook-radius"></i></a>
		<% end_if %>
		<% if twitterURL %>
			<a class="twitter" href="$twitterURL"><i class="icon-twitter"></i></a>
		<% end_if %>
		<% if gPlusURL %>
			<a class="gplus" href="$gPlusURL"><i class="icon-gplus-radius"></i></a>
		<% end_if %>
		<% if youtubeURL %>
			<a class="youtube" href="$youtubeURL"><i class="icon-youtube-radius"></i></a>
		<% end_if %>
		<% if vimeoURL %>
			<a class="vimeo" href="$vimeoURL"><i class="icon-vimeo-radius"></i></a>
		<% end_if %>
		<% if linkedInURL %>
			<a class="linkedin" href="$linkedInURL"><i class="icon-linkedin-radius"></i></a>
		<% end_if %>
	<% end_with %>
</div>
