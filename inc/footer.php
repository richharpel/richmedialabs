    <!-- Footer
    ================================================== -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="span2">	
					<h3><i class="icon-sitemap"></i> Navigate To</h3>
					<ul class="unstyled">
						<li><a href="home">Home</a></li>
						<li><a href="about">About</a></li>
						<li><a href="work">Work</a></li>
						<li><a href="services">Services</a></li>
						<li><a href="contact">Contact</a></li>
					</ul>
				</div>
				
				<div class="span2">
					<h3><i class="icon-cog"></i> Powered By</h3>
					<ul class="unstyled">
						<li><a href="witter.github.io/bootstrap">Bootstrap</a></li>
						<li><a href="https://richmedialabs.freshbooks.com/refer/www">FreshBooks</a></li>
						<li><a href="http://www.webfaction.com/?affiliate=richmedia">Web Faction</a></li>
						<li><a href="http://db.tt/T3oKWYwN">DropBox</a></li>
						<li><a href="http://www.surrealcms.com">Surreal CMS</a></li>
					</ul>
				</div>

				<div class="span2">
					<h3><i class="icon-user"></i> Be Social</h3>			
					<ul class="unstyled">
						<li><a href="https://twitter.com/richmedialabs"><i class="icon-twitter-sign"></i> Twitter</a></li>
						<li><a href="https://www.facebook.com/pages/RichMediaLabs/194109170601811"><i class="icon-facebook-sign"></i> Facebook</a></li>
						<li><a href="http://www.linkedin.com/pub/rich-harpel/1/703/5a0"><i class="icon-linkedin-sign"></i> LinkedIn</a></li>
						<li><a href="http://www.flickr.com/photos/95711232@N07/"><i class="icon-camera"></i> Flickr</a></li>
					</ul>
				</div>
				
				<div class="span6">
					<h3><i class="icon-twitter"></i> Recent Tweets</h3>
					<div id="tweet" class="well well-dark">
						<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/richmedialabs" data-widget-id="352121251013218304" data-chrome="noheader nofooter transparent" data-tweet-limit="2">Tweets by @richmedialabs</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</div>
	
			</div>
			<div class="row">
				<div class="span12 copyright">
					<p>Copyright &copy; 2003–<?php echo date('Y') ?> Rich Media Labs, LLC. ALL RIGHTS RESERVED. | <a href="terms">Terms</a></p>
				</div>
			</div>
		</div>
	</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://platform.twitter.com/widgets.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.colorbox-min.js"></script>
    <script src="js/filterable.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.jigowatt.js"></script>
    <script src="js/jquery.lazyload.min.js"></script>
	<script >
	  $(function() {
	      $("img.lazy").lazyload({
	          effect : "fadeIn"
	      });
	  });
	</script>
    
    <script src="js/twitter.min.js"></script>
	<script type="text/javascript">
	getTwitters('tweet', { 
	  id: 'RichMediaLabs', 
	  count: 3, 
	  enableLinks: true, 
	  ignoreReplies: true, 
	  clearContents: true,
	  template: '%text% <a href="//twitter.com/%user_screen_name%/statuses/%id_str%/">%time%</a>'
	});
	</script>

    <!-- Analytics
    ================================================== -->
    <script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-19581852-2']);
		_gaq.push(['_setDomainName', 'richmedialabs.com']);
		_gaq.push(['_trackPageview']);
		
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
  
  </body>
</html>