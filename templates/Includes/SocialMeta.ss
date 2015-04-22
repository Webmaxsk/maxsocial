        <link rel="canonical" href="$absoluteLink" />
		<% if $SiteConfig.Publisher %>
			<link rel="publisher" href="$SiteConfig.Publisher" />
		<% end_if %>

        <% if $SiteConfig.fbAdmins %>
        	<meta property="fb:admins" content="$SiteConfig.fbAdmins" />
        <% end_if %>
        <% if $SiteConfig.useOpenGraph %>
			<meta property="og:title" content="<% if $MetaTitle %>$MetaTitle.XML<% else %>$Title.XML<% end_if %>" />
			<meta property="og:site_name" content="<% if $SiteConfig.ogSiteName %>$SiteConfig.ogSiteName.XML<% else %>$SiteConfig.Title.XML<% end_if %>" />
			<% if $MetaDescription %>
				<meta property="og:description" content="$MetaDescription.XML" />
			<% end_if %>
			<meta property="og:type" content="company" />
			<meta property="og:url" content="$absoluteLink" />
			<% if $SiteConfig.ogImageID %><meta property="og:image" content="$SiteConfig.ogImage.AbsoluteURL" /><% end_if %> 
		<% end_if %>
