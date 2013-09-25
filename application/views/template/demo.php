<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="/img/thinker/favicon.png">
        <title>Demo</title>

        <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/styles.css" />
<script src="/js/jquery.v1.8.3.min.js"></script>
<script>
    $('pre').addClass('prettyprint');
</script>
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?skin=desert"></script>

<!-- I could not get these to work :( -->
<!--
<link href="/css/prettify.css" type="text/css" rel="stylesheet" />
<script src="/js/prettify/prettify.js"></script>
 -->       
    </head>
    <body>
        <div class="mini-message">
            views/template/demo
            <div class="alert alert-info">
               Notifications: <?= $message ?>
            </div>
        </div>
        <div class="top">
            <div class="content_wrapper">
            <?= $this->load->view($header); ?>
            </div>
        </div>

        <div class="nav">
            <?= $this->load->view($nav); ?>
        </div>
        <!-- end header -->
        <div class="content_wrapper container">

            <div class="content-primary">
                <?= $content; ?>
            </div>
            <div class="content-secondary">
                <?= $this->load->view($secondary); ?>
            </div>
        </div>
        <div class="footer">
            <?= $this->load->view($footer); ?>
        </div>

    
    <!-- // <script src="/js/jquery.v1.8.3.min.js"></script> -->
    <script src="/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    </body>
</html>