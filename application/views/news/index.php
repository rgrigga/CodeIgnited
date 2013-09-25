
<div class="alert"><?php echo $message;?></div>

<p>This is the news index: The "news" system is what you'll create if you follow the tutorial from the codeigniter docs. <em>There are many like it, but this one is mine.</em></p>

<h1>What's Happening:</h1>
<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div id="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>