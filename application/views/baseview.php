<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $title; ?></title>
        <?php foreach ($css as $style) : ?>
            <link rel="stylesheet" type="text/css" href="<?= $style; ?>">
        <?php endforeach; ?>

        <?php foreach ($js as $script) : ?>
            <script src="<?= $script; ?>"></script>
        <?php endforeach; ?>
    </head>
    <body>
        <div class="container">
            <div class="flex-center">
                <div class="title header">
                    Title
                </div>
                <?php
                foreach ($content as $pageContent) :
                    require_once $pageContent;
                endforeach;
                ?>
                <div class="title footer">
                    &COPY;
                </div>
            </div>
        </div>
    </body>
</html>
