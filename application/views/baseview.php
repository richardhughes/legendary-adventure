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
    <div class="panel-default">
        <div class="panel-heading">
            Title
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar btn-primary"></span>
                    <span class="icon-bar btn-primary"></span>
                    <span class="icon-bar btn-primary"></span>
                </button>
            </div>
        </div>
        <div class="row">
            <?php

            if ($this->session->userdata('user')) :
                $this->load->view('left-panel');
            endif;

            if ($this->session->userdata('user')) :
            ?>
            <div class="col-lg-6">
                <div class="panel panel-default margin-top-10">
                    <div class="panel-heading"><?= isset($subTitle) ? $subTitle : ""; ?></div>
                    <div class="panel-body">
                        <?php endif;
                        foreach ($content as $pageContent) :
                            $this->load->view($pageContent);
                        endforeach;
                        if ($this->session->userdata('user')):
                        ?>
                    </div>
                </div>
            </div>
        <?php
        endif;
        if ($this->session->userdata('user')) :
            $this->load->view('right-panel');
        endif;

        ?>
        </div>
        <div class="panel-footer title footer">
            &COPY;
        </div>
    </div>
</div>
</body>
</html>
