<div class="col-md-3">
    <div class="collapse navbar-collapse" id="myNavbar">

        <!-- User Details -->
        <div class="panel panel-default margin-top-10">
            <div class="panel-heading">Statistics</div>
            <div class="panel-body">
                <p>
                    <?= $this->session->userdata('user')->username; ?>
                </p>



            </div>
        </div>

        <!-- Navigation -->
        <div class="panel panel-default margin-top-10">
            <div class="panel-heading">Navigation</div>
            <div class="panel-body">
                <!-- Navigation -->
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation"><a href="#">Home</a></li>
                    <li role="presentation"><a href="#">Profile</a></li>
                    <li role="presentation"><a href="#">Messages</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>