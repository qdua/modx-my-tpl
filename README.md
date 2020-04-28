# MODX Revo My Design

### Header ```header``` (chunk)
```html
<!DOCTYPE html>
<html class="lang_[[!++cultureKey]]" lang="[[!++cultureKey]]" prefix="og: http://ogp.me/ns#">
  <head>
    <base href="[[!++site_url]]" />
    <title>[[*longtitle:notempty=`[[*longtitle]]`:default=`[[*pagetitle]]`]]</title>
    [[$meta?]] 
    <link rel="stylesheet" href="assets/templates/qd/css/template.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/templates/qd/js/qd.js"></script>
    <link href="//fonts.googleapis.com/css?family=Ubuntu+Mono:400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>	
```

### Meta ```meta``` (chunk)
```html
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0"> 
	<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE">  
	<meta name="image" content="[[!++site_url]][[*image?]]">
	<meta name="author" content="QD"> 
	<meta name="google" content="notranslate"> 
	<meta name="application-name" content="QD">
	<meta name="theme-color" content="#fe015b"> 
	<meta name="msapplication-navbutton-color" content="#fe015b"> 
	<meta name="apple-mobile-web-app-status-bar-style" content="#fe015b">
	<link rel="shortcut icon" href="assets/templates/qd/images/favicon.png" type="image/x-icon">
	[[*image:!empty=`<link rel="image_src" href="[[*image?]]">`]] 
	<link rel="icon" type="image/vnd.microsoft.icon" href="assets/templates/qd/images/ti/apple-touch-icon-76x76.png">
	<link rel="apple-touch-startup-image" href="assets/templates/qd/images/ti/apple-touch-icon-76x76.png">   
	<link rel="apple-touch-icon" href="assets/templates/qd/images/ti/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/templates/qd/images/ti/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/templates/qd/images/ti/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/templates/qd/images/ti/apple-touch-icon-152x152.png">  
	<meta property="og:type" content="article">
	<meta property="og:site_name" content="[[++site_name]]">
	<meta property="og:title" content="[[*longtitle:notempty=`[[*longtitle]]`:default=`[[*pagetitle]]`]]">
	[[*description:!empty=`<meta property="og:description" content="[[*description]]">`]]
	<meta property="og:url" content="[[!++site_url]][[*uri]]">
	<meta property="og:locale" content="uk_UA">
	<meta property="og:image" content="[[!++site_url]][[*image?]]">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630"> 
	<meta itemprop="name" content="[[*longtitle:notempty=`[[*longtitle]]`:default=`[[*pagetitle]]`]]">
	[[*description:!empty=`<meta itemprop="description" content="[[*description]]">`]] 
	<meta itemprop="image" content="[[!++site_url]][[*image?]]">  
	<meta name="twitter:title" content="[[*longtitle:notempty=`[[*longtitle]]`:default=`[[*pagetitle]]`]]">
	[[*description:!empty=`<meta name="twitter:description" content="[[*description]]">`]] 
	<meta name="twitter:image" content="[[!++site_url]][[*image?]]">
	<meta name="twitter:card" content="summary_large_image">
```

### Main ```main``` (template)
```html
[[$header]]
	<main> 
	    <div class="content">
		<h1 class="heading">[[*longtitle:default=`[[*pagetitle]]`]]</h1> 
		[[*content]]
	    </div>
	</main>
[[$footer]]
``` 

### Footer ```footer``` (chunk)
```html
        <footer>
            <div  class="copy">&copy; [[!+nowdate:default=`now`:strtotime:date=`%Y`]] Coded by <a rel="author" href="//qd.ua/" target="_blank">qd.ua</a></div>
        </footer> 
    </div>
</body>
</html>
```

### Post ```post``` (template)
```html
[[$header]]
<main>
    <div class=content>
        <h1>[[*longtitle:default=`[[*pagetitle]]`]]</h1>
        <div class=post>
            [[pdoResources?
            	&parents=`[[*id]]`
            	&tpl=`postRow`
            	&limit=`0`
            	&includeTVs=`image`
            	
            ]]
        </div>
    </div>
</main> 
[[$footer]]
```

### Post Row ```postRow``` (chunk)
```html
<div>
    <article> 
        <a href="[[~[[+id]]]]" title="[[!fix?input=`[[+pagetitle]]`]]"> 
            [[+tv.image:is=``:then=`<img src="assets/uploads/images/noimage.gif">`:else=`<img src="[[+tv.image:phpthumbof=`w=600&h=315&zc=1`]]" alt="[[!fix?input=`[[+pagetitle]]`]]">`]]
            <div class=details> 
                <h4>[[+pagetitle]]</h4>
                <time>[[+publishedon:date=`%d %b %Y`]]</time>
            </div>
        </a>
    </article> 
</div>
```
