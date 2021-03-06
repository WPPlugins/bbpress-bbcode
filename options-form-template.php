<div class="wrap">
	<div id="icon-options-general" class="icon32"><br /></div><h2>bbPress2 BBCode.</h2>

	<p>Enabling BBCode tags in your forums.</p>

	<?php if($whitelist_enabled) { 
		if($bbcodes_active) { ?>
	<div style="background: #cfc; border: 1px solid #3f3; padding: 10px; border-radius: 3px;"><p>BBCode is enabled and <a href="http://wordpress.org/extend/plugins/bbpress2-shortcode-whitelist/">bbPress shortcode whitelist</a> has been detected as activated.  You and your users should be able to use BBCode in your blogs, comments and forums.  All done!</p></div> 
		<?php } else { ?>
	<div style="background: #ffc; border: 1px solid #ff3; padding: 10px; border-radius: 3px;"><p>BBCode is installed and <a href="http://wordpress.org/extend/plugins/bbpress2-shortcode-whitelist/">bbPress shortcode whitelist</a> has been detected as activated.  However, it seems you might need to enable the BBCode plugin in your whitelist settings.  If you've includes some BBCodes in the manual whitelist they should work.</p></div> 
		<?php } ?>
	<?php } else { ?>
	<div style="background: #fcc; border: 1px solid #f33; padding: 10px; border-radius: 3px;"><p>BBCode is enabled and working in your forums, but 
	to be safe you should install the <a href="http://wordpress.org/extend/plugins/bbpress2-shortcode-whitelist/">bbPress shortcode whitelist</a> to stop unsafe shortcodes like [bbp-register] from being used.</p></div>  
	<?php } ?>

		<div style="margin-top: 100px;">
			<script type="text/javascript">
			/* <![CDATA[ */
			    (function() {
				var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
				s.type = 'text/javascript';
				s.async = true;
				s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
				t.parentNode.insertBefore(s, t);
			    })();
			/* ]]> */
			</script>
			<h3>To support this plugin you can:</h3>

			<p><a class="FlattrButton" style="display:none;" rev="flattr;button:compact;" href="http://bbpressbbcode.chantech.org/"></a>
<noscript><a href="http://flattr.com/thing/420074/bbPress-BBCode-plugin" target="_blank">
<img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a></noscript></p>

			<p><form action="https://www.paypal.com/cgi-bin/webscr" method="post">Donate GBP using PayPal:&nbsp;<input name="cmd" value="_donations" type="hidden"><input name="business" value="antonchanning@gmail.com" type="hidden"><input name="item_name" value="bbPress bbcode" type="hidden"><input name="item_number" value="bbPress-bbcode plugin donation" type="hidden"><input name="currency_code" value="GBP" type="hidden"><input src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" name="submit" alt="PayPal - The safer, easier way to pay online." type="image"><img alt="" src="https://www.paypal.com/en_US/i/scr/pixel.gif" height="1" width="1"></form></p>
			
			<p><form action="https://www.paypal.com/cgi-bin/webscr" method="post">Donate USD using PayPal:&nbsp;<input name="cmd" value="_donations" type="hidden"><input name="business" value="antonchanning@gmail.com" type="hidden"><input name="item_name" value="bbPress bbcode" type="hidden"><input name="item_number" value="bbPress-bbcode plugin donation" type="hidden"><input name="currency_code" value="USD" type="hidden"><input src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" name="submit" alt="PayPal - The safer, easier way to pay online." type="image"><img alt="" src="https://www.paypal.com/en_US/i/scr/pixel.gif" height="1" width="1"></form></p>
				
			<p><form action="https://www.paypal.com/cgi-bin/webscr" method="post">Donate EUR using PayPal:&nbsp;<input name="cmd" value="_donations" type="hidden"><input name="business" value="antonchanning@gmail.com" type="hidden"><input name="item_name" value="bbPress bbcode" type="hidden"><input name="item_number" value="bbPress-bbcode plugin donation" type="hidden"><input name="currency_code" value="EUR" type="hidden"><input src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" name="submit" alt="PayPal - The safer, easier way to pay online." type="image"><img alt="" src="https://www.paypal.com/en_US/i/scr/pixel.gif" height="1" width="1"></form></p>
				
			<p><form action="https://www.paypal.com/cgi-bin/webscr" method="post">Donate PLN using PayPal:&nbsp;<input name="cmd" value="_donations" type="hidden"><input name="business" value="antonchanning@gmail.com" type="hidden"><input name="item_name" value="bbPress bbcode" type="hidden"><input name="item_number" value="bbPress-bbcode plugin donation" type="hidden"><input name="currency_code" value="PLN" type="hidden"><input src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" name="submit" alt="PayPal - The safer, easier way to pay online." type="image"><img alt="" src="https://www.paypal.com/en_US/i/scr/pixel.gif" height="1" width="1"></form></p>
		</div>
</div>
