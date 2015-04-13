<?php
function font_awesome_icon_list($name) { 
	global $post;
	?>
	<select name="<?php echo $name; ?>">
		<option value="icon-adjust" <?php if(get_post_meta($post->ID, $name, true) == 'icon-adjust') echo 'selected="selected"'; ?>>icon-adjust</option> 
		<option value="icon-asterisk" <?php if(get_post_meta($post->ID, $name, true) == 'icon-asterisk') echo 'selected="selected"'; ?>>icon-asterisk</option> 
		<option value="icon-ban-circle" <?php if(get_post_meta($post->ID, $name, true) == 'icon-ban-circle') echo 'selected="selected"'; ?>>icon-ban-circle</option> 
		<option value="icon-bar-chart" <?php if(get_post_meta($post->ID, $name, true) == 'icon-bar-chart') echo 'selected="selected"'; ?>>icon-bar-chart</option> 
		<option value="icon-barcode" <?php if(get_post_meta($post->ID, $name, true) == 'icon-barcode') echo 'selected="selected"'; ?>>icon-barcode</option> 
		<option value="icon-beaker" <?php if(get_post_meta($post->ID, $name, true) == 'icon-beaker') echo 'selected="selected"'; ?>>icon-beaker</option> 
		<option value="icon-beer" <?php if(get_post_meta($post->ID, $name, true) == 'icon-beer') echo 'selected="selected"'; ?>>icon-beer</option> 
		<option value="icon-bell" <?php if(get_post_meta($post->ID, $name, true) == 'icon-bell') echo 'selected="selected"'; ?>>icon-bell</option> 
		<option value="icon-bell-alt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-bell-alt') echo 'selected="selected"'; ?>>icon-bell-alt</option> 
		<option value="icon-bolt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-bolt') echo 'selected="selected"'; ?>>icon-bolt</option> 
		<option value="icon-book" <?php if(get_post_meta($post->ID, $name, true) == 'icon-book') echo 'selected="selected"'; ?>>icon-book</option> 
		<option value="icon-bookmark" <?php if(get_post_meta($post->ID, $name, true) == 'icon-bookmark') echo 'selected="selected"'; ?>>icon-bookmark</option> 
		<option value="icon-bookmark-empty" <?php if(get_post_meta($post->ID, $name, true) == 'icon-bookmark-empty') echo 'selected="selected"'; ?>>icon-bookmark-empty</option> 
		<option value="icon-briefcase" <?php if(get_post_meta($post->ID, $name, true) == 'icon-briefcase') echo 'selected="selected"'; ?>>icon-briefcase</option> 
		<option value="icon-bullhorn" <?php if(get_post_meta($post->ID, $name, true) == 'icon-bullhorn') echo 'selected="selected"'; ?>>icon-bullhorn</option> 
		<option value="icon-calendar" <?php if(get_post_meta($post->ID, $name, true) == 'icon-calendar') echo 'selected="selected"'; ?>>icon-calendar</option> 
		<option value="icon-camera" <?php if(get_post_meta($post->ID, $name, true) == 'icon-camera') echo 'selected="selected"'; ?>>icon-camera</option> 
		<option value="icon-camera-retro" <?php if(get_post_meta($post->ID, $name, true) == 'icon-camera-retro') echo 'selected="selected"'; ?>>icon-camera-retro</option> 
		<option value="icon-certificate" <?php if(get_post_meta($post->ID, $name, true) == 'icon-certificate') echo 'selected="selected"'; ?>>icon-certificate</option> 
		<option value="icon-check" <?php if(get_post_meta($post->ID, $name, true) == 'icon-check') echo 'selected="selected"'; ?>>icon-check</option> 
		<option value="icon-check-empty" <?php if(get_post_meta($post->ID, $name, true) == 'icon-check-empty') echo 'selected="selected"'; ?>>icon-check-empty</option> 
		<option value="icon-circle" <?php if(get_post_meta($post->ID, $name, true) == 'icon-circle') echo 'selected="selected"'; ?>>icon-circle</option> 
		<option value="icon-circle-blank" <?php if(get_post_meta($post->ID, $name, true) == 'icon-circle-blank') echo 'selected="selected"'; ?>>icon-circle-blank</option> 
		<option value="icon-cloud" <?php if(get_post_meta($post->ID, $name, true) == 'icon-cloud') echo 'selected="selected"'; ?>>icon-cloud</option> 
		<option value="icon-cloud-download" <?php if(get_post_meta($post->ID, $name, true) == 'icon-cloud-download') echo 'selected="selected"'; ?>>icon-cloud-download</option> 
		<option value="icon-cloud-upload" <?php if(get_post_meta($post->ID, $name, true) == 'icon-cloud-upload') echo 'selected="selected"'; ?>>icon-cloud-upload</option> 
		<option value="icon-coffee" <?php if(get_post_meta($post->ID, $name, true) == 'icon-coffee') echo 'selected="selected"'; ?>>icon-coffee</option> 
		<option value="icon-cog" <?php if(get_post_meta($post->ID, $name, true) == 'icon-cog') echo 'selected="selected"'; ?>>icon-cog</option> 
		<option value="icon-cogs" <?php if(get_post_meta($post->ID, $name, true) == 'icon-cogs') echo 'selected="selected"'; ?>>icon-cogs</option> 
		<option value="icon-comment" <?php if(get_post_meta($post->ID, $name, true) == 'icon-comment') echo 'selected="selected"'; ?>>icon-comment</option> 
		<option value="icon-comment-alt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-comment-alt') echo 'selected="selected"'; ?>>icon-comment-alt</option> 
		<option value="icon-comments" <?php if(get_post_meta($post->ID, $name, true) == 'icon-comments') echo 'selected="selected"'; ?>>icon-comments</option> 
		<option value="icon-comments-alt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-comments-alt') echo 'selected="selected"'; ?>>icon-comments-alt</option> 
		<option value="icon-credit-card" <?php if(get_post_meta($post->ID, $name, true) == 'icon-credit-card') echo 'selected="selected"'; ?>>icon-credit-card</option> 
		<option value="icon-css3" <?php if(get_post_meta($post->ID, $name, true) == 'icon-css3') echo 'selected="selected"'; ?>>icon-css3</option> 
		<option value="icon-dashboard" <?php if(get_post_meta($post->ID, $name, true) == 'icon-dashboard') echo 'selected="selected"'; ?>>icon-dashboard</option> 
		<option value="icon-desktop" <?php if(get_post_meta($post->ID, $name, true) == 'icon-desktop') echo 'selected="selected"'; ?>>icon-desktop</option> 
		<option value="icon-download" <?php if(get_post_meta($post->ID, $name, true) == 'icon-download') echo 'selected="selected"'; ?>>icon-download</option> 
		<option value="icon-download-alt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-download-alt') echo 'selected="selected"'; ?>>icon-download-alt</option> 
		<option value="icon-edit" <?php if(get_post_meta($post->ID, $name, true) == 'icon-edit') echo 'selected="selected"'; ?>>icon-edit</option> 
		<option value="icon-envelope" <?php if(get_post_meta($post->ID, $name, true) == 'icon-envelope') echo 'selected="selected"'; ?>>icon-envelope</option> 
		<option value="icon-envelope-alt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-envelope-alt') echo 'selected="selected"'; ?>>icon-envelope-alt</option> 
		<option value="icon-exchange" <?php if(get_post_meta($post->ID, $name, true) == 'icon-exchange') echo 'selected="selected"'; ?>>icon-exchange</option> 
		<option value="icon-exclamation-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-exclamation-sign') echo 'selected="selected"'; ?>>icon-exclamation-sign</option> 
		<option value="icon-external-link" <?php if(get_post_meta($post->ID, $name, true) == 'icon-external-link') echo 'selected="selected"'; ?>>icon-external-link</option> 
		<option value="icon-eye-close" <?php if(get_post_meta($post->ID, $name, true) == 'icon-eye-close') echo 'selected="selected"'; ?>>icon-eye-close</option> 
		<option value="icon-eye-open" <?php if(get_post_meta($post->ID, $name, true) == 'icon-eye-open') echo 'selected="selected"'; ?>>icon-eye-open</option> 
		<option value="icon-facetime-video" <?php if(get_post_meta($post->ID, $name, true) == 'icon-facetime-video') echo 'selected="selected"'; ?>>icon-facetime-video</option> 
		<option value="icon-fighter-jet" <?php if(get_post_meta($post->ID, $name, true) == 'icon-fighter-jet') echo 'selected="selected"'; ?>>icon-fighter-jet</option> 
		<option value="icon-film" <?php if(get_post_meta($post->ID, $name, true) == 'icon-film') echo 'selected="selected"'; ?>>icon-film</option> 
		<option value="icon-filter" <?php if(get_post_meta($post->ID, $name, true) == 'icon-filter') echo 'selected="selected"'; ?>>icon-filter</option> 
		<option value="icon-fire" <?php if(get_post_meta($post->ID, $name, true) == 'icon-fire') echo 'selected="selected"'; ?>>icon-fire</option> 
		<option value="icon-flag" <?php if(get_post_meta($post->ID, $name, true) == 'icon-flag') echo 'selected="selected"'; ?>>icon-flag</option> 
		<option value="icon-folder-close" <?php if(get_post_meta($post->ID, $name, true) == 'icon-folder-close') echo 'selected="selected"'; ?>>icon-folder-close</option> 
		<option value="icon-folder-open" <?php if(get_post_meta($post->ID, $name, true) == 'icon-folder-open') echo 'selected="selected"'; ?>>icon-folder-open</option> 
		<option value="icon-folder-close-alt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-folder-close-alt') echo 'selected="selected"'; ?>>icon-folder-close-alt</option> 
		<option value="icon-folder-open-alt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-folder-open-alt') echo 'selected="selected"'; ?>>icon-folder-open-alt</option> 
		<option value="icon-food" <?php if(get_post_meta($post->ID, $name, true) == 'icon-food') echo 'selected="selected"'; ?>>icon-food</option> 
		<option value="icon-gift" <?php if(get_post_meta($post->ID, $name, true) == 'icon-gift') echo 'selected="selected"'; ?>>icon-gift</option> 
		<option value="icon-glass" <?php if(get_post_meta($post->ID, $name, true) == 'icon-glass') echo 'selected="selected"'; ?>>icon-glass</option> 
		<option value="icon-globe" <?php if(get_post_meta($post->ID, $name, true) == 'icon-globe') echo 'selected="selected"'; ?>>icon-globe</option> 
		<option value="icon-group" <?php if(get_post_meta($post->ID, $name, true) == 'icon-group') echo 'selected="selected"'; ?>>icon-group</option> 
		<option value="icon-hdd" <?php if(get_post_meta($post->ID, $name, true) == 'icon-hdd') echo 'selected="selected"'; ?>>icon-hdd</option> 
		<option value="icon-headphones" <?php if(get_post_meta($post->ID, $name, true) == 'icon-headphones') echo 'selected="selected"'; ?>>icon-headphones</option> 
		<option value="icon-heart" <?php if(get_post_meta($post->ID, $name, true) == 'icon-heart') echo 'selected="selected"'; ?>>icon-heart</option> 
		<option value="icon-heart-empty" <?php if(get_post_meta($post->ID, $name, true) == 'icon-heart-empty') echo 'selected="selected"'; ?>>icon-heart-empty</option> 
		<option value="icon-html5" <?php if(get_post_meta($post->ID, $name, true) == 'icon-html5') echo 'selected="selected"'; ?>>icon-html5</option> 
		<option value="icon-home" <?php if(get_post_meta($post->ID, $name, true) == 'icon-home') echo 'selected="selected"'; ?>>icon-home</option> 
		<option value="icon-inbox" <?php if(get_post_meta($post->ID, $name, true) == 'icon-inbox') echo 'selected="selected"'; ?>>icon-inbox</option> 
		<option value="icon-info-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-info-sign') echo 'selected="selected"'; ?>>icon-info-sign</option> 
		<option value="icon-key" <?php if(get_post_meta($post->ID, $name, true) == 'icon-key') echo 'selected="selected"'; ?>>icon-key</option> 
		<option value="icon-leaf" <?php if(get_post_meta($post->ID, $name, true) == 'icon-leaf') echo 'selected="selected"'; ?>>icon-leaf</option> 
		<option value="icon-laptop" <?php if(get_post_meta($post->ID, $name, true) == 'icon-laptop') echo 'selected="selected"'; ?>>icon-laptop</option> 
		<option value="icon-legal" <?php if(get_post_meta($post->ID, $name, true) == 'icon-legal') echo 'selected="selected"'; ?>>icon-legal</option> 
		<option value="icon-lemon" <?php if(get_post_meta($post->ID, $name, true) == 'icon-lemon') echo 'selected="selected"'; ?>>icon-lemon</option> 
		<option value="icon-lightbulb" <?php if(get_post_meta($post->ID, $name, true) == 'icon-lightbulb') echo 'selected="selected"'; ?>>icon-lightbulb</option> 
		<option value="icon-lock" <?php if(get_post_meta($post->ID, $name, true) == 'icon-lock') echo 'selected="selected"'; ?>>icon-lock</option> 
		<option value="icon-unlock" <?php if(get_post_meta($post->ID, $name, true) == 'icon-unlock') echo 'selected="selected"'; ?>>icon-unlock</option> 
		<option value="icon-magic" <?php if(get_post_meta($post->ID, $name, true) == 'icon-magic') echo 'selected="selected"'; ?>>icon-magic</option> 
		<option value="icon-magnet" <?php if(get_post_meta($post->ID, $name, true) == 'icon-magnet') echo 'selected="selected"'; ?>>icon-magnet</option> 
		<option value="icon-map-marker" <?php if(get_post_meta($post->ID, $name, true) == 'icon-map-marker') echo 'selected="selected"'; ?>>icon-map-marker</option> 
		<option value="icon-minus" <?php if(get_post_meta($post->ID, $name, true) == 'icon-minus') echo 'selected="selected"'; ?>>icon-minus</option> 
		<option value="icon-minus-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-minus-sign') echo 'selected="selected"'; ?>>icon-minus-sign</option> 
		<option value="icon-mobile-phone" <?php if(get_post_meta($post->ID, $name, true) == 'icon-mobile-phone') echo 'selected="selected"'; ?>>icon-mobile-phone</option> 
		<option value="icon-money" <?php if(get_post_meta($post->ID, $name, true) == 'icon-money') echo 'selected="selected"'; ?>>icon-money</option> 
		<option value="icon-move" <?php if(get_post_meta($post->ID, $name, true) == 'icon-move') echo 'selected="selected"'; ?>>icon-move</option> 
		<option value="icon-music" <?php if(get_post_meta($post->ID, $name, true) == 'icon-music') echo 'selected="selected"'; ?>>icon-music</option> 
		<option value="icon-off" <?php if(get_post_meta($post->ID, $name, true) == 'icon-off') echo 'selected="selected"'; ?>>icon-off</option> 
		<option value="icon-ok" <?php if(get_post_meta($post->ID, $name, true) == 'icon-ok') echo 'selected="selected"'; ?>>icon-ok</option> 
		<option value="icon-ok-circle" <?php if(get_post_meta($post->ID, $name, true) == 'icon-ok-circle') echo 'selected="selected"'; ?>>icon-ok-circle</option> 
		<option value="icon-ok-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-ok-sign') echo 'selected="selected"'; ?>>icon-ok-sign</option> 
		<option value="icon-pencil" <?php if(get_post_meta($post->ID, $name, true) == 'icon-pencil') echo 'selected="selected"'; ?>>icon-pencil</option> 
		<option value="icon-picture" <?php if(get_post_meta($post->ID, $name, true) == 'icon-picture') echo 'selected="selected"'; ?>>icon-picture</option> 
		<option value="icon-plane" <?php if(get_post_meta($post->ID, $name, true) == 'icon-plane') echo 'selected="selected"'; ?>>icon-plane</option> 
		<option value="icon-plus" <?php if(get_post_meta($post->ID, $name, true) == 'icon-plus') echo 'selected="selected"'; ?>>icon-plus</option> 
		<option value="icon-plus-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-plus-sign') echo 'selected="selected"'; ?>>icon-plus-sign</option> 
		<option value="icon-print" <?php if(get_post_meta($post->ID, $name, true) == 'icon-print') echo 'selected="selected"'; ?>>icon-print</option> 
		<option value="icon-pushpin" <?php if(get_post_meta($post->ID, $name, true) == 'icon-pushpin') echo 'selected="selected"'; ?>>icon-pushpin</option> 
		<option value="icon-qrcode" <?php if(get_post_meta($post->ID, $name, true) == 'icon-qrcode') echo 'selected="selected"'; ?>>icon-qrcode</option> 
		<option value="icon-question-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-question-sign') echo 'selected="selected"'; ?>>icon-question-sign</option> 
		<option value="icon-quote-left" <?php if(get_post_meta($post->ID, $name, true) == 'icon-quote-left') echo 'selected="selected"'; ?>>icon-quote-left</option> 
		<option value="icon-quote-right" <?php if(get_post_meta($post->ID, $name, true) == 'icon-quote-right') echo 'selected="selected"'; ?>>icon-quote-right</option> 
		<option value="icon-random" <?php if(get_post_meta($post->ID, $name, true) == 'icon-random') echo 'selected="selected"'; ?>>icon-random</option> 
		<option value="icon-refresh" <?php if(get_post_meta($post->ID, $name, true) == 'icon-refresh') echo 'selected="selected"'; ?>>icon-refresh</option> 
		<option value="icon-remove" <?php if(get_post_meta($post->ID, $name, true) == 'icon-remove') echo 'selected="selected"'; ?>>icon-remove</option> 
		<option value="icon-remove-circle" <?php if(get_post_meta($post->ID, $name, true) == 'icon-remove-circle') echo 'selected="selected"'; ?>>icon-remove-circle</option> 
		<option value="icon-remove-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-remove-sign') echo 'selected="selected"'; ?>>icon-remove-sign</option> 
		<option value="icon-reorder" <?php if(get_post_meta($post->ID, $name, true) == 'icon-reorder') echo 'selected="selected"'; ?>>icon-reorder</option> 
		<option value="icon-reply" <?php if(get_post_meta($post->ID, $name, true) == 'icon-reply') echo 'selected="selected"'; ?>>icon-reply</option> 
		<option value="icon-resize-horizontal" <?php if(get_post_meta($post->ID, $name, true) == 'icon-resize-horizontal') echo 'selected="selected"'; ?>>icon-resize-horizontal</option> 
		<option value="icon-resize-small" <?php if(get_post_meta($post->ID, $name, true) == 'icon-resize-horizontal') echo 'selected="selected"'; ?>>icon-resize-small</option> 
		<option value="icon-resize-vertical" <?php if(get_post_meta($post->ID, $name, true) == 'icon-resize-vertical') echo 'selected="selected"'; ?>>icon-resize-vertical</option> 
		<option value="icon-retweet" <?php if(get_post_meta($post->ID, $name, true) == 'icon-retweet') echo 'selected="selected"'; ?>>icon-retweet</option> 
		<option value="icon-road" <?php if(get_post_meta($post->ID, $name, true) == 'icon-road') echo 'selected="selected"'; ?>>icon-road</option> 
		<option value="icon-rss" <?php if(get_post_meta($post->ID, $name, true) == 'icon-rss') echo 'selected="selected"'; ?>>icon-rss</option> 
		<option value="icon-screenshot" <?php if(get_post_meta($post->ID, $name, true) == 'icon-screenshot') echo 'selected="selected"'; ?>>icon-screenshot</option> 
		<option value="icon-search" <?php if(get_post_meta($post->ID, $name, true) == 'icon-search') echo 'selected="selected"'; ?>>icon-search</option> 
		<option value="icon-share" <?php if(get_post_meta($post->ID, $name, true) == 'icon-share') echo 'selected="selected"'; ?>>icon-share</option> 
		<option value="icon-share-alt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-share-alt') echo 'selected="selected"'; ?>>icon-share-alt</option> 
		<option value="icon-shopping-cart" <?php if(get_post_meta($post->ID, $name, true) == 'icon-shopping-cart') echo 'selected="selected"'; ?>>icon-shopping-cart</option> 
		<option value="icon-signal" <?php if(get_post_meta($post->ID, $name, true) == 'icon-signal') echo 'selected="selected"'; ?>>icon-signal</option> 
		<option value="icon-signin" <?php if(get_post_meta($post->ID, $name, true) == 'icon-signin') echo 'selected="selected"'; ?>>icon-signin</option> 
		<option value="icon-signout" <?php if(get_post_meta($post->ID, $name, true) == 'icon-signout') echo 'selected="selected"'; ?>>icon-signout</option> 
		<option value="icon-sitemap" <?php if(get_post_meta($post->ID, $name, true) == 'icon-sitemap') echo 'selected="selected"'; ?>>icon-sitemap</option> 
		<option value="icon-sort" <?php if(get_post_meta($post->ID, $name, true) == 'icon-sort') echo 'selected="selected"'; ?>>icon-sort</option> 
		<option value="icon-sort-down" <?php if(get_post_meta($post->ID, $name, true) == 'icon-sort-down') echo 'selected="selected"'; ?>>icon-sort-down</option> 
		<option value="icon-sort-up" <?php if(get_post_meta($post->ID, $name, true) == 'icon-sort-up') echo 'selected="selected"'; ?>>icon-sort-up</option> 
		<option value="icon-spinner" <?php if(get_post_meta($post->ID, $name, true) == 'icon-spinner') echo 'selected="selected"'; ?>>icon-spinner</option> 
		<option value="icon-star" <?php if(get_post_meta($post->ID, $name, true) == 'icon-star') echo 'selected="selected"'; ?>>icon-star</option> 
		<option value="icon-star-empty" <?php if(get_post_meta($post->ID, $name, true) == 'icon-star-empty') echo 'selected="selected"'; ?>>icon-star-empty</option> 
		<option value="icon-star-half" <?php if(get_post_meta($post->ID, $name, true) == 'icon-star-half') echo 'selected="selected"'; ?>>icon-star-half</option> 
		<option value="icon-tablet" <?php if(get_post_meta($post->ID, $name, true) == 'icon-tablet') echo 'selected="selected"'; ?>>icon-tablet</option> 
		<option value="icon-tag" <?php if(get_post_meta($post->ID, $name, true) == 'icon-tag') echo 'selected="selected"'; ?>>icon-tag</option> 
		<option value="icon-tags" <?php if(get_post_meta($post->ID, $name, true) == 'icon-tags') echo 'selected="selected"'; ?>>icon-tags</option> 
		<option value="icon-tasks" <?php if(get_post_meta($post->ID, $name, true) == 'icon-tasks') echo 'selected="selected"'; ?>>icon-tasks</option> 
		<option value="icon-thumbs-down" <?php if(get_post_meta($post->ID, $name, true) == 'icon-thumbs-down') echo 'selected="selected"'; ?>>icon-thumbs-down</option> 
		<option value="icon-thumbs-up" <?php if(get_post_meta($post->ID, $name, true) == 'icon-thumbs-up') echo 'selected="selected"'; ?>>icon-thumbs-up</option> 
		<option value="icon-time" <?php if(get_post_meta($post->ID, $name, true) == 'icon-time') echo 'selected="selected"'; ?>>icon-time</option> 
		<option value="icon-tint" <?php if(get_post_meta($post->ID, $name, true) == 'icon-tint') echo 'selected="selected"'; ?>>icon-tint</option> 
		<option value="icon-trash" <?php if(get_post_meta($post->ID, $name, true) == 'icon-trash') echo 'selected="selected"'; ?>>icon-trash</option> 
		<option value="icon-trophy" <?php if(get_post_meta($post->ID, $name, true) == 'icon-trophy') echo 'selected="selected"'; ?>>icon-trophy</option> 
		<option value="icon-truck" <?php if(get_post_meta($post->ID, $name, true) == 'icon-truck') echo 'selected="selected"'; ?>>icon-truck</option> 
		<option value="icon-umbrella" <?php if(get_post_meta($post->ID, $name, true) == 'icon-umbrella') echo 'selected="selected"'; ?>>icon-umbrella</option> 
		<option value="icon-upload" <?php if(get_post_meta($post->ID, $name, true) == 'icon-upload') echo 'selected="selected"'; ?>>icon-upload</option> 
		<option value="icon-upload-alt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-upload-alt') echo 'selected="selected"'; ?>>icon-upload-alt</option> 
		<option value="icon-user" <?php if(get_post_meta($post->ID, $name, true) == 'icon-user') echo 'selected="selected"'; ?>>icon-user</option> 
		<option value="icon-user-md" <?php if(get_post_meta($post->ID, $name, true) == 'icon-user-md') echo 'selected="selected"'; ?>>icon-user-md</option> 
		<option value="icon-volume-off" <?php if(get_post_meta($post->ID, $name, true) == 'icon-volume-off') echo 'selected="selected"'; ?>>icon-volume-off</option> 
		<option value="icon-volume-down" <?php if(get_post_meta($post->ID, $name, true) == 'icon-volume-down') echo 'selected="selected"'; ?>>icon-volume-down</option> 
		<option value="icon-volume-up" <?php if(get_post_meta($post->ID, $name, true) == 'icon-volume-up') echo 'selected="selected"'; ?>>icon-volume-up</option> 
		<option value="icon-warning-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-warning-sign') echo 'selected="selected"'; ?>>icon-warning-sign</option> 
		<option value="icon-wrench" <?php if(get_post_meta($post->ID, $name, true) == 'icon-wrench') echo 'selected="selected"'; ?>>icon-wrench</option> 
		<option value="icon-zoom-in" <?php if(get_post_meta($post->ID, $name, true) == 'icon-zoom-in') echo 'selected="selected"'; ?>>icon-zoom-in</option> 
		<option value="icon-zoom-out" <?php if(get_post_meta($post->ID, $name, true) == 'icon-zoom-out') echo 'selected="selected"'; ?>>icon-zoom-out</option> 
		<option value="icon-file" <?php if(get_post_meta($post->ID, $name, true) == 'icon-file') echo 'selected="selected"'; ?>>icon-file</option> 
		<option value="icon-file-alt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-file-alt') echo 'selected="selected"'; ?>>icon-file-alt</option> 
		<option value="icon-cut" <?php if(get_post_meta($post->ID, $name, true) == 'icon-cut') echo 'selected="selected"'; ?>>icon-cut</option> 
		<option value="icon-copy" <?php if(get_post_meta($post->ID, $name, true) == 'icon-copy') echo 'selected="selected"'; ?>>icon-copy</option> 
		<option value="icon-paste" <?php if(get_post_meta($post->ID, $name, true) == 'icon-paste') echo 'selected="selected"'; ?>>icon-paste</option> 
		<option value="icon-save" <?php if(get_post_meta($post->ID, $name, true) == 'icon-save') echo 'selected="selected"'; ?>>icon-save</option> 
		<option value="icon-undo" <?php if(get_post_meta($post->ID, $name, true) == 'icon-undo') echo 'selected="selected"'; ?>>icon-undo</option> 
		<option value="icon-repeat" <?php if(get_post_meta($post->ID, $name, true) == 'icon-repeat') echo 'selected="selected"'; ?>>icon-repeat</option> 
		<option value="icon-text-height" <?php if(get_post_meta($post->ID, $name, true) == 'icon-text-height') echo 'selected="selected"'; ?>>icon-text-height</option> 
		<option value="icon-text-width" <?php if(get_post_meta($post->ID, $name, true) == 'icon-text-width') echo 'selected="selected"'; ?>>icon-text-width</option> 
		<option value="icon-align-left" <?php if(get_post_meta($post->ID, $name, true) == 'icon-align-left') echo 'selected="selected"'; ?>>icon-align-left</option> 
		<option value="icon-align-center" <?php if(get_post_meta($post->ID, $name, true) == 'icon-align-center') echo 'selected="selected"'; ?>>icon-align-center</option> 
		<option value="icon-align-right" <?php if(get_post_meta($post->ID, $name, true) == 'icon-align-right') echo 'selected="selected"'; ?>>icon-align-right</option> 
		<option value="icon-align-justify" <?php if(get_post_meta($post->ID, $name, true) == 'icon-align-justify') echo 'selected="selected"'; ?>>icon-align-justify</option> 
		<option value="icon-indent-left" <?php if(get_post_meta($post->ID, $name, true) == 'icon-indent-left') echo 'selected="selected"'; ?>>icon-indent-left</option> 
		<option value="icon-indent-right" <?php if(get_post_meta($post->ID, $name, true) == 'icon-indent-right') echo 'selected="selected"'; ?>>icon-indent-right</option> 
		<option value="icon-font" <?php if(get_post_meta($post->ID, $name, true) == 'icon-font') echo 'selected="selected"'; ?>>icon-font</option> 
		<option value="icon-bold" <?php if(get_post_meta($post->ID, $name, true) == 'icon-bold') echo 'selected="selected"'; ?>>icon-bold</option> 
		<option value="icon-italic" <?php if(get_post_meta($post->ID, $name, true) == 'icon-italic') echo 'selected="selected"'; ?>>icon-italic</option> 
		<option value="icon-strikethrough" <?php if(get_post_meta($post->ID, $name, true) == 'icon-strikethrough') echo 'selected="selected"'; ?>>icon-strikethrough</option> 
		<option value="icon-underline" <?php if(get_post_meta($post->ID, $name, true) == 'icon-underline') echo 'selected="selected"'; ?>>icon-underline</option> 
		<option value="icon-link" <?php if(get_post_meta($post->ID, $name, true) == 'icon-link') echo 'selected="selected"'; ?>>icon-link</option> 
		<option value="icon-paper-clip" <?php if(get_post_meta($post->ID, $name, true) == 'icon-paper-clip') echo 'selected="selected"'; ?>>icon-paper-clip</option> 
		<option value="icon-columns" <?php if(get_post_meta($post->ID, $name, true) == 'icon-columns') echo 'selected="selected"'; ?>>icon-columns</option> 
		<option value="icon-table" <?php if(get_post_meta($post->ID, $name, true) == 'icon-table') echo 'selected="selected"'; ?>>icon-table</option> 
		<option value="icon-th-large" <?php if(get_post_meta($post->ID, $name, true) == 'icon-th-large') echo 'selected="selected"'; ?>>icon-th-large</option> 
		<option value="icon-th" <?php if(get_post_meta($post->ID, $name, true) == 'icon-th') echo 'selected="selected"'; ?>>icon-th</option> 
		<option value="icon-th-list" <?php if(get_post_meta($post->ID, $name, true) == 'icon-th-list') echo 'selected="selected"'; ?>>icon-th-list</option> 
		<option value="icon-list" <?php if(get_post_meta($post->ID, $name, true) == 'icon-list') echo 'selected="selected"'; ?>>icon-list</option> 
		<option value="icon-list-ol" <?php if(get_post_meta($post->ID, $name, true) == 'icon-list-ol') echo 'selected="selected"'; ?>>icon-list-ol</option> 
		<option value="icon-list-ul" <?php if(get_post_meta($post->ID, $name, true) == 'icon-list-ul') echo 'selected="selected"'; ?>>icon-list-ul</option> 
		<option value="icon-list-alt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-list-alt') echo 'selected="selected"'; ?>>icon-list-alt</option> 
		<option value="icon-angle-left" <?php if(get_post_meta($post->ID, $name, true) == 'icon-angle-left') echo 'selected="selected"'; ?>>icon-angle-left</option> 
		<option value="icon-angle-right" <?php if(get_post_meta($post->ID, $name, true) == 'icon-angle-right') echo 'selected="selected"'; ?>>icon-angle-right</option> 
		<option value="icon-angle-up" <?php if(get_post_meta($post->ID, $name, true) == 'icon-angle-up') echo 'selected="selected"'; ?>>icon-angle-up</option> 
		<option value="icon-angle-down" <?php if(get_post_meta($post->ID, $name, true) == 'icon-angle-down') echo 'selected="selected"'; ?>>icon-angle-down</option> 
		<option value="icon-arrow-down" <?php if(get_post_meta($post->ID, $name, true) == 'icon-arrow-down') echo 'selected="selected"'; ?>>icon-arrow-down</option> 
		<option value="icon-arrow-left" <?php if(get_post_meta($post->ID, $name, true) == 'icon-arrow-left') echo 'selected="selected"'; ?>>icon-arrow-left</option> 
		<option value="icon-arrow-right" <?php if(get_post_meta($post->ID, $name, true) == 'icon-arrow-right') echo 'selected="selected"'; ?>>icon-arrow-right</option> 
		<option value="icon-arrow-up" <?php if(get_post_meta($post->ID, $name, true) == 'icon-arrow-up') echo 'selected="selected"'; ?>>icon-arrow-up</option> 
		<option value="icon-caret-down" <?php if(get_post_meta($post->ID, $name, true) == 'icon-caret-down') echo 'selected="selected"'; ?>>icon-caret-down</option> 
		<option value="icon-caret-left" <?php if(get_post_meta($post->ID, $name, true) == 'icon-caret-left') echo 'selected="selected"'; ?>>icon-caret-left</option> 
		<option value="icon-caret-right" <?php if(get_post_meta($post->ID, $name, true) == 'icon-caret-right') echo 'selected="selected"'; ?>>icon-caret-right</option> 
		<option value="icon-caret-up" <?php if(get_post_meta($post->ID, $name, true) == 'icon-caret-up') echo 'selected="selected"'; ?>>icon-caret-up</option> 
		<option value="icon-chevron-down" <?php if(get_post_meta($post->ID, $name, true) == 'icon-chevron-down') echo 'selected="selected"'; ?>>icon-chevron-down</option> 
		<option value="icon-chevron-left" <?php if(get_post_meta($post->ID, $name, true) == 'icon-chevron-left') echo 'selected="selected"'; ?>>icon-chevron-left</option> 
		<option value="icon-chevron-right" <?php if(get_post_meta($post->ID, $name, true) == 'icon-chevron-right') echo 'selected="selected"'; ?>>icon-chevron-right</option> 
		<option value="icon-chevron-up" <?php if(get_post_meta($post->ID, $name, true) == 'icon-chevron-up') echo 'selected="selected"'; ?>>icon-chevron-up</option> 
		<option value="icon-circle-arrow-down" <?php if(get_post_meta($post->ID, $name, true) == 'icon-circle-arrow-down') echo 'selected="selected"'; ?>>icon-circle-arrow-down</option> 
		<option value="icon-circle-arrow-left" <?php if(get_post_meta($post->ID, $name, true) == 'icon-circle-arrow-left') echo 'selected="selected"'; ?>>icon-circle-arrow-left</option> 
		<option value="icon-circle-arrow-right" <?php if(get_post_meta($post->ID, $name, true) == 'icon-circle-arrow-right') echo 'selected="selected"'; ?>>icon-circle-arrow-right</option> 
		<option value="icon-circle-arrow-up" <?php if(get_post_meta($post->ID, $name, true) == 'icon-circle-arrow-up') echo 'selected="selected"'; ?>>icon-circle-arrow-up</option> 
		<option value="icon-double-angle-left" <?php if(get_post_meta($post->ID, $name, true) == 'icon-double-angle-left') echo 'selected="selected"'; ?>>icon-double-angle-left</option> 
		<option value="icon-double-angle-right" <?php if(get_post_meta($post->ID, $name, true) == 'icon-double-angle-right') echo 'selected="selected"'; ?>>icon-double-angle-right</option> 
		<option value="icon-double-angle-up" <?php if(get_post_meta($post->ID, $name, true) == 'icon-double-angle-up') echo 'selected="selected"'; ?>>icon-double-angle-up</option> 
		<option value="icon-double-angle-down" <?php if(get_post_meta($post->ID, $name, true) == 'icon-double-angle-down') echo 'selected="selected"'; ?>>icon-double-angle-down</option> 
		<option value="icon-hand-down" <?php if(get_post_meta($post->ID, $name, true) == 'icon-hand-down') echo 'selected="selected"'; ?>>icon-hand-down</option> 
		<option value="icon-hand-left" <?php if(get_post_meta($post->ID, $name, true) == 'icon-hand-left') echo 'selected="selected"'; ?>>icon-hand-left</option> 
		<option value="icon-hand-right" <?php if(get_post_meta($post->ID, $name, true) == 'icon-hand-right') echo 'selected="selected"'; ?>>icon-hand-right</option> 
		<option value="icon-hand-up" <?php if(get_post_meta($post->ID, $name, true) == 'icon-hand-up') echo 'selected="selected"'; ?>>icon-hand-up</option> 
		<option value="icon-circle" <?php if(get_post_meta($post->ID, $name, true) == 'icon-circle') echo 'selected="selected"'; ?>>icon-circle</option> 
		<option value="icon-circle-blank" <?php if(get_post_meta($post->ID, $name, true) == 'icon-circle-blank') echo 'selected="selected"'; ?>>icon-circle-blank</option> 
		<option value="icon-play-circle" <?php if(get_post_meta($post->ID, $name, true) == 'icon-play-circle') echo 'selected="selected"'; ?>>icon-play-circle</option> 
		<option value="icon-play" <?php if(get_post_meta($post->ID, $name, true) == 'icon-play') echo 'selected="selected"'; ?>>icon-play</option> 
		<option value="icon-pause" <?php if(get_post_meta($post->ID, $name, true) == 'icon-pause') echo 'selected="selected"'; ?>>icon-pause</option> 
		<option value="icon-stop" <?php if(get_post_meta($post->ID, $name, true) == 'icon-stop') echo 'selected="selected"'; ?>>icon-stop</option> 
		<option value="icon-step-backward" <?php if(get_post_meta($post->ID, $name, true) == 'icon-step-backward') echo 'selected="selected"'; ?>>icon-step-backward</option> 
		<option value="icon-fast-backward" <?php if(get_post_meta($post->ID, $name, true) == 'icon-fast-backward') echo 'selected="selected"'; ?>>icon-fast-backward</option> 
		<option value="icon-backward" <?php if(get_post_meta($post->ID, $name, true) == 'icon-backward') echo 'selected="selected"'; ?>>icon-backward</option> 
		<option value="icon-forward" <?php if(get_post_meta($post->ID, $name, true) == 'icon-forward') echo 'selected="selected"'; ?>>icon-forward</option> 
		<option value="icon-fast-forward" <?php if(get_post_meta($post->ID, $name, true) == 'icon-fast-forward') echo 'selected="selected"'; ?>>icon-fast-forward</option> 
		<option value="icon-step-forward" <?php if(get_post_meta($post->ID, $name, true) == 'icon-step-forward') echo 'selected="selected"'; ?>>icon-step-forward</option> 
		<option value="icon-eject" <?php if(get_post_meta($post->ID, $name, true) == 'icon-eject') echo 'selected="selected"'; ?>>icon-eject</option> 
		<option value="icon-fullscreen" <?php if(get_post_meta($post->ID, $name, true) == 'icon-fullscreen') echo 'selected="selected"'; ?>>icon-fullscreen</option> 
		<option value="icon-resize-full" <?php if(get_post_meta($post->ID, $name, true) == 'icon-resize-full') echo 'selected="selected"'; ?>>icon-resize-full</option> 
		<option value="icon-resize-small" <?php if(get_post_meta($post->ID, $name, true) == 'icon-resize-small') echo 'selected="selected"'; ?>>icon-resize-small</option> 
		<option value="icon-phone" <?php if(get_post_meta($post->ID, $name, true) == 'icon-phone') echo 'selected="selected"'; ?>>icon-phone</option> 
		<option value="icon-phone-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-phone-sign') echo 'selected="selected"'; ?>>icon-phone-sign</option> 
		<option value="icon-facebook" <?php if(get_post_meta($post->ID, $name, true) == 'icon-facebook') echo 'selected="selected"'; ?>>icon-facebook</option> 
		<option value="icon-facebook-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-facebook-sign') echo 'selected="selected"'; ?>>icon-facebook-sign</option> 
		<option value="icon-twitter" <?php if(get_post_meta($post->ID, $name, true) == 'icon-twitter') echo 'selected="selected"'; ?>>icon-twitter</option> 
		<option value="icon-twitter-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-twitter-sign') echo 'selected="selected"'; ?>>icon-twitter-sign</option> 
		<option value="icon-github" <?php if(get_post_meta($post->ID, $name, true) == 'icon-github') echo 'selected="selected"'; ?>>icon-github</option> 
		<option value="icon-github-alt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-github-alt') echo 'selected="selected"'; ?>>icon-github-alt</option> 
		<option value="icon-github-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-github-sign') echo 'selected="selected"'; ?>>icon-github-sign</option> 
		<option value="icon-linkedin" <?php if(get_post_meta($post->ID, $name, true) == 'icon-linkedin') echo 'selected="selected"'; ?>>icon-linkedin</option> 
		<option value="icon-linkedin-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-linkedin-sign') echo 'selected="selected"'; ?>>icon-linkedin-sign</option> 
		<option value="icon-pinterest" <?php if(get_post_meta($post->ID, $name, true) == 'icon-pinterest') echo 'selected="selected"'; ?>>icon-pinterest</option> 
		<option value="icon-pinterest-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-pinterest-sign') echo 'selected="selected"'; ?>>icon-pinterest-sign</option> 
		<option value="icon-google-plus" <?php if(get_post_meta($post->ID, $name, true) == 'icon-google-plus') echo 'selected="selected"'; ?>>icon-google-plus</option> 
		<option value="icon-google-plus-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-google-plus-sign') echo 'selected="selected"'; ?>>icon-google-plus-sign</option> 
		<option value="icon-sign-blank" <?php if(get_post_meta($post->ID, $name, true) == 'icon-sign-blank') echo 'selected="selected"'; ?>>icon-sign-blank</option> 
		<option value="icon-ambulance" <?php if(get_post_meta($post->ID, $name, true) == 'icon-ambulance') echo 'selected="selected"'; ?>>icon-ambulance</option> 
		<option value="icon-beaker" <?php if(get_post_meta($post->ID, $name, true) == 'icon-beaker') echo 'selected="selected"'; ?>>icon-beaker</option> 
		<option value="icon-h-sign" <?php if(get_post_meta($post->ID, $name, true) == 'icon-h-sign') echo 'selected="selected"'; ?>>icon-h-sign</option> 
		<option value="icon-hospital" <?php if(get_post_meta($post->ID, $name, true) == 'icon-hospital') echo 'selected="selected"'; ?>>icon-hospital</option> 
		<option value="icon-medkit" <?php if(get_post_meta($post->ID, $name, true) == 'icon-medkit') echo 'selected="selected"'; ?>>icon-medkit</option> 
		<option value="icon-plus-sign-alt" <?php if(get_post_meta($post->ID, $name, true) == 'icon-plus-sign-alt') echo 'selected="selected"'; ?>>icon-plus-sign-alt</option> 
		<option value="icon-stethoscope" <?php if(get_post_meta($post->ID, $name, true) == 'icon-stethoscope') echo 'selected="selected"'; ?>>icon-stethoscope</option> 
		<option value="icon-user-md" <?php if(get_post_meta($post->ID, $name, true) == 'icon-user-md') echo 'selected="selected"'; ?>>icon-user-md</option> 
	</select>
<?php
}
function font_awesome_icon_list_option($name) { 
	global $post;
	?>
	<select name="<?php echo $name; ?>">
		<option value="none">none</option>
		<option value="icon-adjust" <?php if(get_option($name) == 'icon-adjust') echo 'selected="selected"'; ?>>icon-adjust</option> 
		<option value="icon-asterisk" <?php if(get_option($name) == 'icon-asterisk') echo 'selected="selected"'; ?>>icon-asterisk</option> 
		<option value="icon-ban-circle" <?php if(get_option($name) == 'icon-ban-circle') echo 'selected="selected"'; ?>>icon-ban-circle</option> 
		<option value="icon-bar-chart" <?php if(get_option($name) == 'icon-bar-chart') echo 'selected="selected"'; ?>>icon-bar-chart</option> 
		<option value="icon-barcode" <?php if(get_option($name) == 'icon-barcode') echo 'selected="selected"'; ?>>icon-barcode</option> 
		<option value="icon-beaker" <?php if(get_option($name) == 'icon-beaker') echo 'selected="selected"'; ?>>icon-beaker</option> 
		<option value="icon-beer" <?php if(get_option($name) == 'icon-beer') echo 'selected="selected"'; ?>>icon-beer</option> 
		<option value="icon-bell" <?php if(get_option($name) == 'icon-bell') echo 'selected="selected"'; ?>>icon-bell</option> 
		<option value="icon-bell-alt" <?php if(get_option($name) == 'icon-bell-alt') echo 'selected="selected"'; ?>>icon-bell-alt</option> 
		<option value="icon-bolt" <?php if(get_option($name) == 'icon-bolt') echo 'selected="selected"'; ?>>icon-bolt</option> 
		<option value="icon-book" <?php if(get_option($name) == 'icon-book') echo 'selected="selected"'; ?>>icon-book</option> 
		<option value="icon-bookmark" <?php if(get_option($name) == 'icon-bookmark') echo 'selected="selected"'; ?>>icon-bookmark</option> 
		<option value="icon-bookmark-empty" <?php if(get_option($name) == 'icon-bookmark-empty') echo 'selected="selected"'; ?>>icon-bookmark-empty</option> 
		<option value="icon-briefcase" <?php if(get_option($name) == 'icon-briefcase') echo 'selected="selected"'; ?>>icon-briefcase</option> 
		<option value="icon-bullhorn" <?php if(get_option($name) == 'icon-bullhorn') echo 'selected="selected"'; ?>>icon-bullhorn</option> 
		<option value="icon-calendar" <?php if(get_option($name) == 'icon-calendar') echo 'selected="selected"'; ?>>icon-calendar</option> 
		<option value="icon-camera" <?php if(get_option($name) == 'icon-camera') echo 'selected="selected"'; ?>>icon-camera</option> 
		<option value="icon-camera-retro" <?php if(get_option($name) == 'icon-camera-retro') echo 'selected="selected"'; ?>>icon-camera-retro</option> 
		<option value="icon-certificate" <?php if(get_option($name) == 'icon-certificate') echo 'selected="selected"'; ?>>icon-certificate</option> 
		<option value="icon-check" <?php if(get_option($name) == 'icon-check') echo 'selected="selected"'; ?>>icon-check</option> 
		<option value="icon-check-empty" <?php if(get_option($name) == 'icon-check-empty') echo 'selected="selected"'; ?>>icon-check-empty</option> 
		<option value="icon-circle" <?php if(get_option($name) == 'icon-circle') echo 'selected="selected"'; ?>>icon-circle</option> 
		<option value="icon-circle-blank" <?php if(get_option($name) == 'icon-circle-blank') echo 'selected="selected"'; ?>>icon-circle-blank</option> 
		<option value="icon-cloud" <?php if(get_option($name) == 'icon-cloud') echo 'selected="selected"'; ?>>icon-cloud</option> 
		<option value="icon-cloud-download" <?php if(get_option($name) == 'icon-cloud-download') echo 'selected="selected"'; ?>>icon-cloud-download</option> 
		<option value="icon-cloud-upload" <?php if(get_option($name) == 'icon-cloud-upload') echo 'selected="selected"'; ?>>icon-cloud-upload</option> 
		<option value="icon-coffee" <?php if(get_option($name) == 'icon-coffee') echo 'selected="selected"'; ?>>icon-coffee</option> 
		<option value="icon-cog" <?php if(get_option($name) == 'icon-cog') echo 'selected="selected"'; ?>>icon-cog</option> 
		<option value="icon-cogs" <?php if(get_option($name) == 'icon-cogs') echo 'selected="selected"'; ?>>icon-cogs</option> 
		<option value="icon-comment" <?php if(get_option($name) == 'icon-comment') echo 'selected="selected"'; ?>>icon-comment</option> 
		<option value="icon-comment-alt" <?php if(get_option($name) == 'icon-comment-alt') echo 'selected="selected"'; ?>>icon-comment-alt</option> 
		<option value="icon-comments" <?php if(get_option($name) == 'icon-comments') echo 'selected="selected"'; ?>>icon-comments</option> 
		<option value="icon-comments-alt" <?php if(get_option($name) == 'icon-comments-alt') echo 'selected="selected"'; ?>>icon-comments-alt</option> 
		<option value="icon-credit-card" <?php if(get_option($name) == 'icon-credit-card') echo 'selected="selected"'; ?>>icon-credit-card</option> 
		<option value="icon-css3" <?php if(get_option($name) == 'icon-css3') echo 'selected="selected"'; ?>>icon-css3</option> 
		<option value="icon-dashboard" <?php if(get_option($name) == 'icon-dashboard') echo 'selected="selected"'; ?>>icon-dashboard</option> 
		<option value="icon-desktop" <?php if(get_option($name) == 'icon-desktop') echo 'selected="selected"'; ?>>icon-desktop</option> 
		<option value="icon-download" <?php if(get_option($name) == 'icon-download') echo 'selected="selected"'; ?>>icon-download</option> 
		<option value="icon-download-alt" <?php if(get_option($name) == 'icon-download-alt') echo 'selected="selected"'; ?>>icon-download-alt</option> 
		<option value="icon-edit" <?php if(get_option($name) == 'icon-edit') echo 'selected="selected"'; ?>>icon-edit</option> 
		<option value="icon-envelope" <?php if(get_option($name) == 'icon-envelope') echo 'selected="selected"'; ?>>icon-envelope</option> 
		<option value="icon-envelope-alt" <?php if(get_option($name) == 'icon-envelope-alt') echo 'selected="selected"'; ?>>icon-envelope-alt</option> 
		<option value="icon-exchange" <?php if(get_option($name) == 'icon-exchange') echo 'selected="selected"'; ?>>icon-exchange</option> 
		<option value="icon-exclamation-sign" <?php if(get_option($name) == 'icon-exclamation-sign') echo 'selected="selected"'; ?>>icon-exclamation-sign</option> 
		<option value="icon-external-link" <?php if(get_option($name) == 'icon-external-link') echo 'selected="selected"'; ?>>icon-external-link</option> 
		<option value="icon-eye-close" <?php if(get_option($name) == 'icon-eye-close') echo 'selected="selected"'; ?>>icon-eye-close</option> 
		<option value="icon-eye-open" <?php if(get_option($name) == 'icon-eye-open') echo 'selected="selected"'; ?>>icon-eye-open</option> 
		<option value="icon-facetime-video" <?php if(get_option($name) == 'icon-facetime-video') echo 'selected="selected"'; ?>>icon-facetime-video</option> 
		<option value="icon-fighter-jet" <?php if(get_option($name) == 'icon-fighter-jet') echo 'selected="selected"'; ?>>icon-fighter-jet</option> 
		<option value="icon-film" <?php if(get_option($name) == 'icon-film') echo 'selected="selected"'; ?>>icon-film</option> 
		<option value="icon-filter" <?php if(get_option($name) == 'icon-filter') echo 'selected="selected"'; ?>>icon-filter</option> 
		<option value="icon-fire" <?php if(get_option($name) == 'icon-fire') echo 'selected="selected"'; ?>>icon-fire</option> 
		<option value="icon-flag" <?php if(get_option($name) == 'icon-flag') echo 'selected="selected"'; ?>>icon-flag</option> 
		<option value="icon-folder-close" <?php if(get_option($name) == 'icon-folder-close') echo 'selected="selected"'; ?>>icon-folder-close</option> 
		<option value="icon-folder-open" <?php if(get_option($name) == 'icon-folder-open') echo 'selected="selected"'; ?>>icon-folder-open</option> 
		<option value="icon-folder-close-alt" <?php if(get_option($name) == 'icon-folder-close-alt') echo 'selected="selected"'; ?>>icon-folder-close-alt</option> 
		<option value="icon-folder-open-alt" <?php if(get_option($name) == 'icon-folder-open-alt') echo 'selected="selected"'; ?>>icon-folder-open-alt</option> 
		<option value="icon-food" <?php if(get_option($name) == 'icon-food') echo 'selected="selected"'; ?>>icon-food</option> 
		<option value="icon-gift" <?php if(get_option($name) == 'icon-gift') echo 'selected="selected"'; ?>>icon-gift</option> 
		<option value="icon-glass" <?php if(get_option($name) == 'icon-glass') echo 'selected="selected"'; ?>>icon-glass</option> 
		<option value="icon-globe" <?php if(get_option($name) == 'icon-globe') echo 'selected="selected"'; ?>>icon-globe</option> 
		<option value="icon-group" <?php if(get_option($name) == 'icon-group') echo 'selected="selected"'; ?>>icon-group</option> 
		<option value="icon-hdd" <?php if(get_option($name) == 'icon-hdd') echo 'selected="selected"'; ?>>icon-hdd</option> 
		<option value="icon-headphones" <?php if(get_option($name) == 'icon-headphones') echo 'selected="selected"'; ?>>icon-headphones</option> 
		<option value="icon-heart" <?php if(get_option($name) == 'icon-heart') echo 'selected="selected"'; ?>>icon-heart</option> 
		<option value="icon-heart-empty" <?php if(get_option($name) == 'icon-heart-empty') echo 'selected="selected"'; ?>>icon-heart-empty</option> 
		<option value="icon-html5" <?php if(get_option($name) == 'icon-html5') echo 'selected="selected"'; ?>>icon-html5</option> 
		<option value="icon-home" <?php if(get_option($name) == 'icon-home') echo 'selected="selected"'; ?>>icon-home</option> 
		<option value="icon-inbox" <?php if(get_option($name) == 'icon-inbox') echo 'selected="selected"'; ?>>icon-inbox</option> 
		<option value="icon-info-sign" <?php if(get_option($name) == 'icon-info-sign') echo 'selected="selected"'; ?>>icon-info-sign</option> 
		<option value="icon-key" <?php if(get_option($name) == 'icon-key') echo 'selected="selected"'; ?>>icon-key</option> 
		<option value="icon-leaf" <?php if(get_option($name) == 'icon-leaf') echo 'selected="selected"'; ?>>icon-leaf</option> 
		<option value="icon-laptop" <?php if(get_option($name) == 'icon-laptop') echo 'selected="selected"'; ?>>icon-laptop</option> 
		<option value="icon-legal" <?php if(get_option($name) == 'icon-legal') echo 'selected="selected"'; ?>>icon-legal</option> 
		<option value="icon-lemon" <?php if(get_option($name) == 'icon-lemon') echo 'selected="selected"'; ?>>icon-lemon</option> 
		<option value="icon-lightbulb" <?php if(get_option($name) == 'icon-lightbulb') echo 'selected="selected"'; ?>>icon-lightbulb</option> 
		<option value="icon-lock" <?php if(get_option($name) == 'icon-lock') echo 'selected="selected"'; ?>>icon-lock</option> 
		<option value="icon-unlock" <?php if(get_option($name) == 'icon-unlock') echo 'selected="selected"'; ?>>icon-unlock</option> 
		<option value="icon-magic" <?php if(get_option($name) == 'icon-magic') echo 'selected="selected"'; ?>>icon-magic</option> 
		<option value="icon-magnet" <?php if(get_option($name) == 'icon-magnet') echo 'selected="selected"'; ?>>icon-magnet</option> 
		<option value="icon-map-marker" <?php if(get_option($name) == 'icon-map-marker') echo 'selected="selected"'; ?>>icon-map-marker</option> 
		<option value="icon-minus" <?php if(get_option($name) == 'icon-minus') echo 'selected="selected"'; ?>>icon-minus</option> 
		<option value="icon-minus-sign" <?php if(get_option($name) == 'icon-minus-sign') echo 'selected="selected"'; ?>>icon-minus-sign</option> 
		<option value="icon-mobile-phone" <?php if(get_option($name) == 'icon-mobile-phone') echo 'selected="selected"'; ?>>icon-mobile-phone</option> 
		<option value="icon-money" <?php if(get_option($name) == 'icon-money') echo 'selected="selected"'; ?>>icon-money</option> 
		<option value="icon-move" <?php if(get_option($name) == 'icon-move') echo 'selected="selected"'; ?>>icon-move</option> 
		<option value="icon-music" <?php if(get_option($name) == 'icon-music') echo 'selected="selected"'; ?>>icon-music</option> 
		<option value="icon-off" <?php if(get_option($name) == 'icon-off') echo 'selected="selected"'; ?>>icon-off</option> 
		<option value="icon-ok" <?php if(get_option($name) == 'icon-ok') echo 'selected="selected"'; ?>>icon-ok</option> 
		<option value="icon-ok-circle" <?php if(get_option($name) == 'icon-ok-circle') echo 'selected="selected"'; ?>>icon-ok-circle</option> 
		<option value="icon-ok-sign" <?php if(get_option($name) == 'icon-ok-sign') echo 'selected="selected"'; ?>>icon-ok-sign</option> 
		<option value="icon-pencil" <?php if(get_option($name) == 'icon-pencil') echo 'selected="selected"'; ?>>icon-pencil</option> 
		<option value="icon-picture" <?php if(get_option($name) == 'icon-picture') echo 'selected="selected"'; ?>>icon-picture</option> 
		<option value="icon-plane" <?php if(get_option($name) == 'icon-plane') echo 'selected="selected"'; ?>>icon-plane</option> 
		<option value="icon-plus" <?php if(get_option($name) == 'icon-plus') echo 'selected="selected"'; ?>>icon-plus</option> 
		<option value="icon-plus-sign" <?php if(get_option($name) == 'icon-plus-sign') echo 'selected="selected"'; ?>>icon-plus-sign</option> 
		<option value="icon-print" <?php if(get_option($name) == 'icon-print') echo 'selected="selected"'; ?>>icon-print</option> 
		<option value="icon-pushpin" <?php if(get_option($name) == 'icon-pushpin') echo 'selected="selected"'; ?>>icon-pushpin</option> 
		<option value="icon-qrcode" <?php if(get_option($name) == 'icon-qrcode') echo 'selected="selected"'; ?>>icon-qrcode</option> 
		<option value="icon-question-sign" <?php if(get_option($name) == 'icon-question-sign') echo 'selected="selected"'; ?>>icon-question-sign</option> 
		<option value="icon-quote-left" <?php if(get_option($name) == 'icon-quote-left') echo 'selected="selected"'; ?>>icon-quote-left</option> 
		<option value="icon-quote-right" <?php if(get_option($name) == 'icon-quote-right') echo 'selected="selected"'; ?>>icon-quote-right</option> 
		<option value="icon-random" <?php if(get_option($name) == 'icon-random') echo 'selected="selected"'; ?>>icon-random</option> 
		<option value="icon-refresh" <?php if(get_option($name) == 'icon-refresh') echo 'selected="selected"'; ?>>icon-refresh</option> 
		<option value="icon-remove" <?php if(get_option($name) == 'icon-remove') echo 'selected="selected"'; ?>>icon-remove</option> 
		<option value="icon-remove-circle" <?php if(get_option($name) == 'icon-remove-circle') echo 'selected="selected"'; ?>>icon-remove-circle</option> 
		<option value="icon-remove-sign" <?php if(get_option($name) == 'icon-remove-sign') echo 'selected="selected"'; ?>>icon-remove-sign</option> 
		<option value="icon-reorder" <?php if(get_option($name) == 'icon-reorder') echo 'selected="selected"'; ?>>icon-reorder</option> 
		<option value="icon-reply" <?php if(get_option($name) == 'icon-reply') echo 'selected="selected"'; ?>>icon-reply</option> 
		<option value="icon-resize-horizontal" <?php if(get_option($name) == 'icon-resize-horizontal') echo 'selected="selected"'; ?>>icon-resize-horizontal</option> 
		<option value="icon-resize-vertical" <?php if(get_option($name) == 'icon-resize-vertical') echo 'selected="selected"'; ?>>icon-resize-vertical</option> 
		<option value="icon-retweet" <?php if(get_option($name) == 'icon-retweet') echo 'selected="selected"'; ?>>icon-retweet</option> 
		<option value="icon-road" <?php if(get_option($name) == 'icon-road') echo 'selected="selected"'; ?>>icon-road</option> 
		<option value="icon-rss" <?php if(get_option($name) == 'icon-rss') echo 'selected="selected"'; ?>>icon-rss</option> 
		<option value="icon-screenshot" <?php if(get_option($name) == 'icon-screenshot') echo 'selected="selected"'; ?>>icon-screenshot</option> 
		<option value="icon-search" <?php if(get_option($name) == 'icon-search') echo 'selected="selected"'; ?>>icon-search</option> 
		<option value="icon-share" <?php if(get_option($name) == 'icon-share') echo 'selected="selected"'; ?>>icon-share</option> 
		<option value="icon-share-alt" <?php if(get_option($name) == 'icon-share-alt') echo 'selected="selected"'; ?>>icon-share-alt</option> 
		<option value="icon-shopping-cart" <?php if(get_option($name) == 'icon-shopping-cart') echo 'selected="selected"'; ?>>icon-shopping-cart</option> 
		<option value="icon-signal" <?php if(get_option($name) == 'icon-signal') echo 'selected="selected"'; ?>>icon-signal</option> 
		<option value="icon-signin" <?php if(get_option($name) == 'icon-signin') echo 'selected="selected"'; ?>>icon-signin</option> 
		<option value="icon-signout" <?php if(get_option($name) == 'icon-signout') echo 'selected="selected"'; ?>>icon-signout</option> 
		<option value="icon-sitemap" <?php if(get_option($name) == 'icon-sitemap') echo 'selected="selected"'; ?>>icon-sitemap</option> 
		<option value="icon-sort" <?php if(get_option($name) == 'icon-sort') echo 'selected="selected"'; ?>>icon-sort</option> 
		<option value="icon-sort-down" <?php if(get_option($name) == 'icon-sort-down') echo 'selected="selected"'; ?>>icon-sort-down</option> 
		<option value="icon-sort-up" <?php if(get_option($name) == 'icon-sort-up') echo 'selected="selected"'; ?>>icon-sort-up</option> 
		<option value="icon-spinner" <?php if(get_option($name) == 'icon-spinner') echo 'selected="selected"'; ?>>icon-spinner</option> 
		<option value="icon-star" <?php if(get_option($name) == 'icon-star') echo 'selected="selected"'; ?>>icon-star</option> 
		<option value="icon-star-empty" <?php if(get_option($name) == 'icon-star-empty') echo 'selected="selected"'; ?>>icon-star-empty</option> 
		<option value="icon-star-half" <?php if(get_option($name) == 'icon-star-half') echo 'selected="selected"'; ?>>icon-star-half</option> 
		<option value="icon-tablet" <?php if(get_option($name) == 'icon-tablet') echo 'selected="selected"'; ?>>icon-tablet</option> 
		<option value="icon-tag" <?php if(get_option($name) == 'icon-tag') echo 'selected="selected"'; ?>>icon-tag</option> 
		<option value="icon-tags" <?php if(get_option($name) == 'icon-tags') echo 'selected="selected"'; ?>>icon-tags</option> 
		<option value="icon-tasks" <?php if(get_option($name) == 'icon-tasks') echo 'selected="selected"'; ?>>icon-tasks</option> 
		<option value="icon-thumbs-down" <?php if(get_option($name) == 'icon-thumbs-down') echo 'selected="selected"'; ?>>icon-thumbs-down</option> 
		<option value="icon-thumbs-up" <?php if(get_option($name) == 'icon-thumbs-up') echo 'selected="selected"'; ?>>icon-thumbs-up</option> 
		<option value="icon-time" <?php if(get_option($name) == 'icon-time') echo 'selected="selected"'; ?>>icon-time</option> 
		<option value="icon-tint" <?php if(get_option($name) == 'icon-tint') echo 'selected="selected"'; ?>>icon-tint</option> 
		<option value="icon-trash" <?php if(get_option($name) == 'icon-trash') echo 'selected="selected"'; ?>>icon-trash</option> 
		<option value="icon-trophy" <?php if(get_option($name) == 'icon-trophy') echo 'selected="selected"'; ?>>icon-trophy</option> 
		<option value="icon-truck" <?php if(get_option($name) == 'icon-truck') echo 'selected="selected"'; ?>>icon-truck</option> 
		<option value="icon-umbrella" <?php if(get_option($name) == 'icon-umbrella') echo 'selected="selected"'; ?>>icon-umbrella</option> 
		<option value="icon-upload" <?php if(get_option($name) == 'icon-upload') echo 'selected="selected"'; ?>>icon-upload</option> 
		<option value="icon-upload-alt" <?php if(get_option($name) == 'icon-upload-alt') echo 'selected="selected"'; ?>>icon-upload-alt</option> 
		<option value="icon-user" <?php if(get_option($name) == 'icon-user') echo 'selected="selected"'; ?>>icon-user</option> 
		<option value="icon-user-md" <?php if(get_option($name) == 'icon-user-md') echo 'selected="selected"'; ?>>icon-user-md</option> 
		<option value="icon-volume-off" <?php if(get_option($name) == 'icon-volume-off') echo 'selected="selected"'; ?>>icon-volume-off</option> 
		<option value="icon-volume-down" <?php if(get_option($name) == 'icon-volume-down') echo 'selected="selected"'; ?>>icon-volume-down</option> 
		<option value="icon-volume-up" <?php if(get_option($name) == 'icon-volume-up') echo 'selected="selected"'; ?>>icon-volume-up</option> 
		<option value="icon-warning-sign" <?php if(get_option($name) == 'icon-warning-sign') echo 'selected="selected"'; ?>>icon-warning-sign</option> 
		<option value="icon-wrench" <?php if(get_option($name) == 'icon-wrench') echo 'selected="selected"'; ?>>icon-wrench</option> 
		<option value="icon-zoom-in" <?php if(get_option($name) == 'icon-zoom-in') echo 'selected="selected"'; ?>>icon-zoom-in</option> 
		<option value="icon-zoom-out" <?php if(get_option($name) == 'icon-zoom-out') echo 'selected="selected"'; ?>>icon-zoom-out</option> 
		<option value="icon-file" <?php if(get_option($name) == 'icon-file') echo 'selected="selected"'; ?>>icon-file</option> 
		<option value="icon-file-alt" <?php if(get_option($name) == 'icon-file-alt') echo 'selected="selected"'; ?>>icon-file-alt</option> 
		<option value="icon-cut" <?php if(get_option($name) == 'icon-cut') echo 'selected="selected"'; ?>>icon-cut</option> 
		<option value="icon-copy" <?php if(get_option($name) == 'icon-copy') echo 'selected="selected"'; ?>>icon-copy</option> 
		<option value="icon-paste" <?php if(get_option($name) == 'icon-paste') echo 'selected="selected"'; ?>>icon-paste</option> 
		<option value="icon-save" <?php if(get_option($name) == 'icon-save') echo 'selected="selected"'; ?>>icon-save</option> 
		<option value="icon-undo" <?php if(get_option($name) == 'icon-undo') echo 'selected="selected"'; ?>>icon-undo</option> 
		<option value="icon-repeat" <?php if(get_option($name) == 'icon-repeat') echo 'selected="selected"'; ?>>icon-repeat</option> 
		<option value="icon-text-height" <?php if(get_option($name) == 'icon-text-height') echo 'selected="selected"'; ?>>icon-text-height</option> 
		<option value="icon-text-width" <?php if(get_option($name) == 'icon-text-width') echo 'selected="selected"'; ?>>icon-text-width</option> 
		<option value="icon-align-left" <?php if(get_option($name) == 'icon-align-left') echo 'selected="selected"'; ?>>icon-align-left</option> 
		<option value="icon-align-center" <?php if(get_option($name) == 'icon-align-center') echo 'selected="selected"'; ?>>icon-align-center</option> 
		<option value="icon-align-right" <?php if(get_option($name) == 'icon-align-right') echo 'selected="selected"'; ?>>icon-align-right</option> 
		<option value="icon-align-justify" <?php if(get_option($name) == 'icon-align-justify') echo 'selected="selected"'; ?>>icon-align-justify</option> 
		<option value="icon-indent-left" <?php if(get_option($name) == 'icon-indent-left') echo 'selected="selected"'; ?>>icon-indent-left</option> 
		<option value="icon-indent-right" <?php if(get_option($name) == 'icon-indent-right') echo 'selected="selected"'; ?>>icon-indent-right</option> 
		<option value="icon-font" <?php if(get_option($name) == 'icon-font') echo 'selected="selected"'; ?>>icon-font</option> 
		<option value="icon-bold" <?php if(get_option($name) == 'icon-bold') echo 'selected="selected"'; ?>>icon-bold</option> 
		<option value="icon-italic" <?php if(get_option($name) == 'icon-italic') echo 'selected="selected"'; ?>>icon-italic</option> 
		<option value="icon-strikethrough" <?php if(get_option($name) == 'icon-strikethrough') echo 'selected="selected"'; ?>>icon-strikethrough</option> 
		<option value="icon-underline" <?php if(get_option($name) == 'icon-underline') echo 'selected="selected"'; ?>>icon-underline</option> 
		<option value="icon-link" <?php if(get_option($name) == 'icon-link') echo 'selected="selected"'; ?>>icon-link</option> 
		<option value="icon-paper-clip" <?php if(get_option($name) == 'icon-paper-clip') echo 'selected="selected"'; ?>>icon-paper-clip</option> 
		<option value="icon-columns" <?php if(get_option($name) == 'icon-columns') echo 'selected="selected"'; ?>>icon-columns</option> 
		<option value="icon-table" <?php if(get_option($name) == 'icon-table') echo 'selected="selected"'; ?>>icon-table</option> 
		<option value="icon-th-large" <?php if(get_option($name) == 'icon-th-large') echo 'selected="selected"'; ?>>icon-th-large</option> 
		<option value="icon-th" <?php if(get_option($name) == 'icon-th') echo 'selected="selected"'; ?>>icon-th</option> 
		<option value="icon-th-list" <?php if(get_option($name) == 'icon-th-list') echo 'selected="selected"'; ?>>icon-th-list</option> 
		<option value="icon-list" <?php if(get_option($name) == 'icon-list') echo 'selected="selected"'; ?>>icon-list</option> 
		<option value="icon-list-ol" <?php if(get_option($name) == 'icon-list-ol') echo 'selected="selected"'; ?>>icon-list-ol</option> 
		<option value="icon-list-ul" <?php if(get_option($name) == 'icon-list-ul') echo 'selected="selected"'; ?>>icon-list-ul</option> 
		<option value="icon-list-alt" <?php if(get_option($name) == 'icon-list-alt') echo 'selected="selected"'; ?>>icon-list-alt</option> 
		<option value="icon-angle-left" <?php if(get_option($name) == 'icon-angle-left') echo 'selected="selected"'; ?>>icon-angle-left</option> 
		<option value="icon-angle-right" <?php if(get_option($name) == 'icon-angle-right') echo 'selected="selected"'; ?>>icon-angle-right</option> 
		<option value="icon-angle-up" <?php if(get_option($name) == 'icon-angle-up') echo 'selected="selected"'; ?>>icon-angle-up</option> 
		<option value="icon-angle-down" <?php if(get_option($name) == 'icon-angle-down') echo 'selected="selected"'; ?>>icon-angle-down</option> 
		<option value="icon-arrow-down" <?php if(get_option($name) == 'icon-arrow-down') echo 'selected="selected"'; ?>>icon-arrow-down</option> 
		<option value="icon-arrow-left" <?php if(get_option($name) == 'icon-arrow-left') echo 'selected="selected"'; ?>>icon-arrow-left</option> 
		<option value="icon-arrow-right" <?php if(get_option($name) == 'icon-arrow-right') echo 'selected="selected"'; ?>>icon-arrow-right</option> 
		<option value="icon-arrow-up" <?php if(get_option($name) == 'icon-arrow-up') echo 'selected="selected"'; ?>>icon-arrow-up</option> 
		<option value="icon-caret-down" <?php if(get_option($name) == 'icon-caret-down') echo 'selected="selected"'; ?>>icon-caret-down</option> 
		<option value="icon-caret-left" <?php if(get_option($name) == 'icon-caret-left') echo 'selected="selected"'; ?>>icon-caret-left</option> 
		<option value="icon-caret-right" <?php if(get_option($name) == 'icon-caret-right') echo 'selected="selected"'; ?>>icon-caret-right</option> 
		<option value="icon-caret-up" <?php if(get_option($name) == 'icon-caret-up') echo 'selected="selected"'; ?>>icon-caret-up</option> 
		<option value="icon-chevron-down" <?php if(get_option($name) == 'icon-chevron-down') echo 'selected="selected"'; ?>>icon-chevron-down</option> 
		<option value="icon-chevron-left" <?php if(get_option($name) == 'icon-chevron-left') echo 'selected="selected"'; ?>>icon-chevron-left</option> 
		<option value="icon-chevron-right" <?php if(get_option($name) == 'icon-chevron-right') echo 'selected="selected"'; ?>>icon-chevron-right</option> 
		<option value="icon-chevron-up" <?php if(get_option($name) == 'icon-chevron-up') echo 'selected="selected"'; ?>>icon-chevron-up</option> 
		<option value="icon-circle-arrow-down" <?php if(get_option($name) == 'icon-circle-arrow-down') echo 'selected="selected"'; ?>>icon-circle-arrow-down</option> 
		<option value="icon-circle-arrow-left" <?php if(get_option($name) == 'icon-circle-arrow-left') echo 'selected="selected"'; ?>>icon-circle-arrow-left</option> 
		<option value="icon-circle-arrow-right" <?php if(get_option($name) == 'icon-circle-arrow-right') echo 'selected="selected"'; ?>>icon-circle-arrow-right</option> 
		<option value="icon-circle-arrow-up" <?php if(get_option($name) == 'icon-circle-arrow-up') echo 'selected="selected"'; ?>>icon-circle-arrow-up</option> 
		<option value="icon-double-angle-left" <?php if(get_option($name) == 'icon-double-angle-left') echo 'selected="selected"'; ?>>icon-double-angle-left</option> 
		<option value="icon-double-angle-right" <?php if(get_option($name) == 'icon-double-angle-right') echo 'selected="selected"'; ?>>icon-double-angle-right</option> 
		<option value="icon-double-angle-up" <?php if(get_option($name) == 'icon-double-angle-up') echo 'selected="selected"'; ?>>icon-double-angle-up</option> 
		<option value="icon-double-angle-down" <?php if(get_option($name) == 'icon-double-angle-down') echo 'selected="selected"'; ?>>icon-double-angle-down</option> 
		<option value="icon-hand-down" <?php if(get_option($name) == 'icon-hand-down') echo 'selected="selected"'; ?>>icon-hand-down</option> 
		<option value="icon-hand-left" <?php if(get_option($name) == 'icon-hand-left') echo 'selected="selected"'; ?>>icon-hand-left</option> 
		<option value="icon-hand-right" <?php if(get_option($name) == 'icon-hand-right') echo 'selected="selected"'; ?>>icon-hand-right</option> 
		<option value="icon-hand-up" <?php if(get_option($name) == 'icon-hand-up') echo 'selected="selected"'; ?>>icon-hand-up</option> 
		<option value="icon-circle" <?php if(get_option($name) == 'icon-circle') echo 'selected="selected"'; ?>>icon-circle</option> 
		<option value="icon-circle-blank" <?php if(get_option($name) == 'icon-circle-blank') echo 'selected="selected"'; ?>>icon-circle-blank</option> 
		<option value="icon-play-circle" <?php if(get_option($name) == 'icon-play-circle') echo 'selected="selected"'; ?>>icon-play-circle</option> 
		<option value="icon-play" <?php if(get_option($name) == 'icon-play') echo 'selected="selected"'; ?>>icon-play</option> 
		<option value="icon-pause" <?php if(get_option($name) == 'icon-pause') echo 'selected="selected"'; ?>>icon-pause</option> 
		<option value="icon-stop" <?php if(get_option($name) == 'icon-stop') echo 'selected="selected"'; ?>>icon-stop</option> 
		<option value="icon-step-backward" <?php if(get_option($name) == 'icon-step-backward') echo 'selected="selected"'; ?>>icon-step-backward</option> 
		<option value="icon-fast-backward" <?php if(get_option($name) == 'icon-fast-backward') echo 'selected="selected"'; ?>>icon-fast-backward</option> 
		<option value="icon-backward" <?php if(get_option($name) == 'icon-backward') echo 'selected="selected"'; ?>>icon-backward</option> 
		<option value="icon-forward" <?php if(get_option($name) == 'icon-forward') echo 'selected="selected"'; ?>>icon-forward</option> 
		<option value="icon-fast-forward" <?php if(get_option($name) == 'icon-fast-forward') echo 'selected="selected"'; ?>>icon-fast-forward</option> 
		<option value="icon-step-forward" <?php if(get_option($name) == 'icon-step-forward') echo 'selected="selected"'; ?>>icon-step-forward</option> 
		<option value="icon-eject" <?php if(get_option($name) == 'icon-eject') echo 'selected="selected"'; ?>>icon-eject</option> 
		<option value="icon-fullscreen" <?php if(get_option($name) == 'icon-fullscreen') echo 'selected="selected"'; ?>>icon-fullscreen</option> 
		<option value="icon-resize-full" <?php if(get_option($name) == 'icon-resize-full') echo 'selected="selected"'; ?>>icon-resize-full</option> 
		<option value="icon-resize-small" <?php if(get_option($name) == 'icon-resize-small') echo 'selected="selected"'; ?>>icon-resize-small</option> 
		<option value="icon-phone" <?php if(get_option($name) == 'icon-phone') echo 'selected="selected"'; ?>>icon-phone</option> 
		<option value="icon-phone-sign" <?php if(get_option($name) == 'icon-phone-sign') echo 'selected="selected"'; ?>>icon-phone-sign</option> 
		<option value="icon-facebook" <?php if(get_option($name) == 'icon-facebook') echo 'selected="selected"'; ?>>icon-facebook</option> 
		<option value="icon-facebook-sign" <?php if(get_option($name) == 'icon-facebook-sign') echo 'selected="selected"'; ?>>icon-facebook-sign</option> 
		<option value="icon-twitter" <?php if(get_option($name) == 'icon-twitter') echo 'selected="selected"'; ?>>icon-twitter</option> 
		<option value="icon-twitter-sign" <?php if(get_option($name) == 'icon-twitter-sign') echo 'selected="selected"'; ?>>icon-twitter-sign</option> 
		<option value="icon-github" <?php if(get_option($name) == 'icon-github') echo 'selected="selected"'; ?>>icon-github</option> 
		<option value="icon-github-alt" <?php if(get_option($name) == 'icon-github-alt') echo 'selected="selected"'; ?>>icon-github-alt</option> 
		<option value="icon-github-sign" <?php if(get_option($name) == 'icon-github-sign') echo 'selected="selected"'; ?>>icon-github-sign</option> 
		<option value="icon-linkedin" <?php if(get_option($name) == 'icon-linkedin') echo 'selected="selected"'; ?>>icon-linkedin</option> 
		<option value="icon-linkedin-sign" <?php if(get_option($name) == 'icon-linkedin-sign') echo 'selected="selected"'; ?>>icon-linkedin-sign</option> 
		<option value="icon-pinterest" <?php if(get_option($name) == 'icon-pinterest') echo 'selected="selected"'; ?>>icon-pinterest</option> 
		<option value="icon-pinterest-sign" <?php if(get_option($name) == 'icon-pinterest-sign') echo 'selected="selected"'; ?>>icon-pinterest-sign</option> 
		<option value="icon-google-plus" <?php if(get_option($name) == 'icon-google-plus') echo 'selected="selected"'; ?>>icon-google-plus</option> 
		<option value="icon-google-plus-sign" <?php if(get_option($name) == 'icon-google-plus-sign') echo 'selected="selected"'; ?>>icon-google-plus-sign</option> 
		<option value="icon-sign-blank" <?php if(get_option($name) == 'icon-sign-blank') echo 'selected="selected"'; ?>>icon-sign-blank</option> 
		<option value="icon-ambulance" <?php if(get_option($name) == 'icon-ambulance') echo 'selected="selected"'; ?>>icon-ambulance</option> 
		<option value="icon-beaker" <?php if(get_option($name) == 'icon-beaker') echo 'selected="selected"'; ?>>icon-beaker</option> 
		<option value="icon-h-sign" <?php if(get_option($name) == 'icon-h-sign') echo 'selected="selected"'; ?>>icon-h-sign</option> 
		<option value="icon-hospital" <?php if(get_option($name) == 'icon-hospital') echo 'selected="selected"'; ?>>icon-hospital</option> 
		<option value="icon-medkit" <?php if(get_option($name) == 'icon-medkit') echo 'selected="selected"'; ?>>icon-medkit</option> 
		<option value="icon-plus-sign-alt" <?php if(get_option($name) == 'icon-plus-sign-alt') echo 'selected="selected"'; ?>>icon-plus-sign-alt</option> 
		<option value="icon-stethoscope" <?php if(get_option($name) == 'icon-stethoscope') echo 'selected="selected"'; ?>>icon-stethoscope</option> 
		<option value="icon-user-md" <?php if(get_option($name) == 'icon-user-md') echo 'selected="selected"'; ?>>icon-user-md</option> 
	</select>
<?php
}
?>