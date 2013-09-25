<h1>Alpha Page</h1>

<p>This is page "Alpha".  It lives at views/pages/alpha.php.</p>
<p>These lines are key for the mobile user:</p>
<?php $str= htmlentities('
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url() ?>/img/thinker/favicon.png">');?>
<pre><?php echo $str; ?></pre>