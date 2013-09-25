<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Megacorp</title>
<!--         <link rel="stylesheet" href="/public/css/styles.css" />
        <link rel="stylesheet" href="public/css/styles.css" /> -->
        <link rel="stylesheet" href="/css/styles.css" />
<!--         <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="/styles.css" />
        <link rel="stylesheet" href="styles.css" /> -->
        <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
    </head>
    <body>
        <div class="mini-message">
            views/template/megacorp
            <div class="alert">
               <?= $message ?>
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