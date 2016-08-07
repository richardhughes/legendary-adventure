<div class="col-lg-12">
    <form method="POST" action="">
        <div class="form-group">
            <label>Username
                <input type="text" name="username" class="form-control" placeholder="Username">
            </label>
        </div>

        <div class="form-group">
            <label>Password
                <input type="password" name="password" class="form-control" placeholder="Password"></label>
        </div>
        <div class="form-group">
            <label>Verify Password
                <input type="password" name="verify-password" class="form-control" placeholder="Password"></label>
        </div>
        <div class="form-group">
            <label>Email
                <input type="email" name="email" class="form-control" placeholder="Email"></label>
        </div>

        <input type="submit" value="Register" class="btn btn-primary" onclick="return regObj.validateInputs();"/>
    </form>
</div>