<!doctype html>
<% include HtmlTag %>
<head>
	<% base_tag %>
	$MetaTags(false)
	<% include SocialMeta %>
	<title><% if MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> | $SiteConfig.Title</title>
	...
</head>