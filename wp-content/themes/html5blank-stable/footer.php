<!-- 			</div>
	/wrapper -->

	<!-- footer -->
	<footer role="contentinfo">
		<div class="footer-line"></div>

		<div class="wrapper cf footer-cobalt">
			<h3>Contact</h3>
			<ul>
				<li>
					<p>Chisinau, Moldova</p>
				</li>
				<li>
					<p>str. Alexei Mateevici 58</p>
				</li>
				<li>
					<p>Tel: (+373) 22 242 686</p>
				</li>
				<li>
					<p>GSM: (+373) 69 112 351</p>
				</li>
				<li>
					<p>e-mail: office@urbanconsulting.md</p>
				</li>
			</ul>
                    <a href="http://positronbohemia.com/" target="_blank" class="positron">positron bohemia</a>
		</div>

				<!-- copyright
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				/copyright -->

			</footer>
			<script src="/wp-content/themes/html5blank-stable/js/headers.js"></script>
			<script src="/js/main.js"></script>

			<!-- /footer -->

			<?php wp_footer(); ?>

			<!-- analytics -->
			<script>
				(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
					(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
					l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
				ga('send', 'pageview');
			</script>
			<script type="text/javascript">
  function extractLastUrlPart(url) {
    var array = url.split('/');
    return array[array.length - 2];
  }

	try{
		var el=document.getElementById('itemActive').getElementsByTagName('a');
		var url=document.location.href;
		for(var i=0;i<el.length; i++){
			if ( extractLastUrlPart(url) === extractLastUrlPart(el[i].href) ){
				el[i].className += 'act';
			};
		};
	}catch(e){}
</script>

		</body>
		</html>
