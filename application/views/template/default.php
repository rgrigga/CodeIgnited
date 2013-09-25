<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Blank Project</title>
        <link rel="shortcut icon" href="<?= base_url() ?>/img/thinker/favicon.png">
        <link rel="stylesheet" href="/css/styles.css" />
        <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
    </head>
    <body>
        <div class="mini-message">
            This is the default template
            <div class="alert">Message: <?= $message ?></div>
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
        <div class="content_wrapper">

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
    </body>
</html>