<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Blank Project</title>
        <link rel="stylesheet" href="/css/styles.css" />
        <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
    </head>
    <body>
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

            <?= $content; ?>
            <?= $this->load->view($secondary); ?>
        </div>
        <div class="footer">
            <?= $this->load->view($footer); ?>
        </div>
    </body>
</html>