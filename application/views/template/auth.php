<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Blank Project</title>
        <link rel="stylesheet" href="/css/styles.css" />
        <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="/javascripts/main.js"></script>
    </head>
    <body>
        <div class="top">
            <div class="content_wrapper">
                <section>
                    <p>This is the auth template.</p>
                </section>
            </div>
        </div>

        <div class="nav">
            <?= $nav; ?>
            <ul>
                <li><a href="/">Home</a></li>
            </ul>
        </div>
        <!-- end header -->
        <div class="content_wrapper">
            <?= $content; ?>
        </div>
        <div class="footer">
            
        </div>
    </body>
</html>