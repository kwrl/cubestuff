<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="{$TEXT_DIRECTION}" lang="{$HTML_LANG}">
<head>
	<link href="/styles/fonts/fonts.css" rel="stylesheet" type="text/css" />
	<link rel="canonical" href="{$CANONICAL}" />
	<link rel="shortcut icon" href="{$STORE_URL}/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="{$STORE_URL}/skins/{$SKIN_FOLDER}/styles/common.css" media="screen" /> 
	<!-- Use this if you plan to have subskins!
	<link rel="stylesheet" type="text/css" href="{$STORE_URL}/skins/{$SKIN_FOLDER}/styles/{$SKIN_SUBSET}/layout.css" media="screen" />
	-->
	<link rel="stylesheet" type="text/css" href="{$STORE_URL}/js/styles/styles.php" media="screen" />
	{if isset($CSS)}
	{foreach from=$CSS key=css_keys item=css_files}
	<link rel="stylesheet" type="text/css" href="{$STORE_URL}/{$css_files}" media="screen" />
	{/foreach}
	{/if}
	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="{$STORE_URL}/skins/{$SKIN_FOLDER}/styles/ie7.css" media="screen" /><![endif]-->
	<meta http-equiv="Content-Type" content="text/html;charset={$CHARACTER_SET}" />
	<meta name="description" content="{$META_DESCRIPTION}" />
	<meta name="keywords" content="{$META_KEYWORDS}" />
	<meta name="robots" content="index, follow" />
	<meta name="generator" content="cubecart" />
	{if $FBOG}
	<meta property="og:image" content="{$PRODUCT.thumbnail}">
	<meta property="og:url" content="{$VAL_SELF}">
	{/if}
	{if $ANALYTICS}
	{literal}<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', '{/literal}{$ANALYTICS}{literal}', 'auto');  // Replace with your property ID.
	ga('send', 'pageview');
	</script>{/literal}
	{/if}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<a href="/index.html"><img id="logo" class="img-responsive" src="/images/logos/MYLOGOFORweb.gif" /></a> 
			</div>
			<div id="bag" class="col-md-4">
				<a href="index.php?_a=basket"><img id="cartimg" class="img-respinsive" src="/images/logos/cart.png" /></a>
				<p id="bagtxt"> my bag</p>
			</div>
			<div id="cartlangcurr" class="col-md-4">
				{$LANGUAGE}
				{$CURRENCY}
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<ul class="menu col-md-12" >
			<li class="me"><a class="ml" href="/index.html">home</a></li>
			<li class="me"><a class="ml" href="/shop/index.php">shop</a>
			<ul>
			<li><a class="subl" href="/pageone.html">New Arrivals</a></li>
			<li><a class="subl" href="/dresses.html">Dresses</a></li>
			<li><a class="subl" href="/tops.html">Tops</a></li>
			<li><a class="subl" href="/bottoms.html">Bottoms</a></li>
			<li><a class="subl" href="/accessories.html">Accessories</a></li>
			<li><a class="subl" href="/sale.html">Sale</a></li>
			<li><a class="subl" href="/vouchers.html">Gift Vouchers</a></li>
			</ul>
			</li>
			<li class="me"><a class="ml" href="/about.html">about</a></li>
			<li class="me"><a class="ml" href="/contact.html">contact</a></li>
			<li class="me"><a class="ml" href="/info.html">info</a></li>
			<li class="me"><a class="ml" href="/blog.html">Blog</a></li>
			</ul>
		</div>
	</div>
	<div class="container">
	<div class="{$SECTION_NAME}_wrapper">
	<div class="sidebar" id="sidebar_left">

	{$CATEGORIES}
	{$SALE_ITEMS}
	{if isset($POPULAR_PRODUCTS)}{$POPULAR_PRODUCTS}{/if}

	</div>

	<div id="page_content">
	<div id="header">

	</div>
	<div id="breadcrumb">
	<ul>

	{foreach from=$CRUMBS item=crumb}
	<li><a href="{$crumb.url}">{$crumb.title}</a></li>
	{/foreach}
	</ul>
	</div>
	{include file='templates/box.errors.php'}
	{if isset($CHECKOUT_PROGRESS)}{$CHECKOUT_PROGRESS}{/if}
	{$PAGE_CONTENT}
	<p style="clear: both; height: 1px;">&nbsp;</p>

	</div>
	</div>


	{$COPYRIGHT}



	{if isset($DEBUG_INFO)}{$DEBUG_INFO}{/if}

	{include file='js/common.html'}

	{if isset($JANRAIN)}{$JANRAIN}{/if}

	{if isset($LIVE_HELP)}{$LIVE_HELP}{/if}

	{foreach from=$JS_SCRIPTS key=k item=script}
	<script type="text/javascript" src="{$STORE_URL}/{$script|replace:'\\':'/'}"></script>
	{/foreach}

	{if $COOKIE_DIALOGUE}
	<form action="{$VAL_SELF}" class="cookies-notify" method="POST">
	<p>{$LANG.notification.cookie_dialogue|replace:'%s':{$CONFIG.store_name}}</p>
	<p{if $COOKIE_DIALOGUE_FAIL} class="retry"{/if}><input type="checkbox" name="accept_cookies" value="1" /> {$LANG.notification.cookie_dialogue_declaration} <input type="submit" name="accept_cookies_submit" value="{$LANG.common.continue}" /></p>
	</form>
	{/if}


	<table class="footer">
	<tbody>
	<tr>
	<td class="fe"><a class="fl" href="index.html">Hjem/Home</a></td>
	<td class="fe"><a class="fl" href="/shop/index.php">Shop</a></td>
	<td class="fe"><a class="fl" href="www.facebook/christinapell">Facebook</a></td>
	</tr>
	<tr>
	<td class="fe"><a class="fl" href="about.html">Historien/About</a></td>
	<td class="fe"><a class="fl" href="info.html">Frakt og retur/Shipping and return</a></td>
	<td class="fe"><a class="fl" href="www.instagram/christinapell">Instagram</a></td>
	</tr>
	<tr>
	<td class="fe"><a class="fl" href="contact.html">Kontakt/Contact</a></td>
	<td class="fe"><a class="fl" href="policy.html">Personvern/Privacy Policy</a></td>
	<td class="fe"><a class="fl" href="payment.html">Betaling/Payment</a></td>
	</tr>
	</tbody>
	</table>
	</div>
	</body>
</html>


<!--Redundant functions that may be implemented

{$SEARCH_FORM}
{$SESSION}
{$MAIL_LIST}
{$RANDOM_PROD}
<p class="logo"><a href="{$STORE_URL}"><img src="{$STORE_LOGO}" alt="{$META_TITLE}" /></a></p>
<li><a href="{$STORE_URL}">{$LANG.common.home}</a></li>
{if !$CONFIG.disable_mobile_skin}<p id="mobile_switch"><a href="{$STORE_URL}/index.php?display_mobile=1">{$LANG.common.mobile_site}</a></p>{/if}
<div id="documents">{if isset($SKIN_SELECT)}{$SKIN_SELECT}{/if} {$SITE_DOCS}</div>
-->
