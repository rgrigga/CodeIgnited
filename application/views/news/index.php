
<div id="infoMessage"><?php echo $message;?></div>

<p>This is the news demo - it's what you create following the tutorial from the codeignited docs.</p>

<h1>What's Happening:</h1>
<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div id="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>