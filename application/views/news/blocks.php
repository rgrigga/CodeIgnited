<?php foreach ($news as $news_item): ?>
<section>
	<div class="well">
		<h3><?php echo $news_item['title'] ?></h3>
	    <div id="main">
	        <?php echo $news_item['text'] ?>
	    </div>
	    <a class="btn btn-info" href="news/<?php echo $news_item['slug'] ?>">View article</a>
	</div>
</section>
<?php endforeach ?>