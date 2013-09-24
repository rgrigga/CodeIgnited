<?php
function e($str){ 
	$str=htmlentities($str);
	echo $str;
}
?>

<h1>Demo index</h1>
<p>This is the demo index page.  It's a sandbox!</p>
<h2>Commandments</h2>
<ol>
	<li>Whenever possible, I pledge to seperate my concerns.</li>
</ol>

<h2>What we're demonstrating</h2>

<p>Please note we're demonstrating a number of techniques here:</p>
<ul>
	<li>Demo Template</li>
	<li>Demo Controller</li>
	<li>Demo Partials</li>
	<li>An automatic directory</li>
	<li>An API</li>
</ul>
<p>What I mean by the "automatic directory" is that by simply creating a page in the "view/demo/pages" folder, it will automatically be included in the navigation menu, and will automatically render when the user navigates to the logical URL. For example:</p>
<p>Let's say we create a page with some very simple HTML content (no styling) in the views/demo/pages directory, like this:</p>

<?php $str=file_get_contents(APPPATH."views/demo/pages/mypage.php"); ?>
<pre><?php e($str); ?></pre>

<p>Now, you'll clearly notice the link "mypage" appears in the navigation menu.  Clicking the link leads the program to load this page for you.  You could also visit the page by manually typing this into your browser:</p>

<blockquote><?php echo base_url().'demo/mypage'; ?></blockquote>