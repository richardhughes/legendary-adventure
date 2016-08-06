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
    <div>
        <div class="title header">
            Title
        </div>
        <div class="row">
            <?php

            if ($this->session->userdata('user')):
                $this->load->view('left-panel');
            endif;

            foreach ($content as $pageContent) :
                $this->load->view($pageContent);
            endforeach;

            if ($this->session->userdata('user')):
                $this->load->view('right-panel');
            endif;

            ?>
        </div>
        <div class="title footer">
            &COPY;
        </div>
    </div>
</div>
</body>
</html>
