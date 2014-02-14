<div class="icons">
	<% with SiteConfig %>
		<% if fbURL %>
			<a class="f" href="$fbURL"></a>
		<% end_if %>
		<% if twitterURL %>
			<a class="t" href="$twitterURL"></a>
		<% end_if %>
		<% if gPlusURL %>
			<a class="g" href="$gPlusURL"></a>
		<% end_if %>
		<% if youtubeURL %>
			<a class="y" href="$youtubeURL"></a>
		<% end_if %>
		<% if vimeoURL %>
			<a class="v" href="$vimeoURL"></a>
		<% end_if %>
	<% end_with %>
</div>