<h1>Beta</h1>
<p>Let's try to add some prettified code:</p>
<?php $str= htmlentities('	<script src="/js/jquery.v1.8.3.min.js"></script>
	<script>
	    $("pre").addClass("prettyprint");
	</script>
	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?skin=desert"></script>');?>
<pre><code lang="html"><?php echo $str; ?></code></pre>
