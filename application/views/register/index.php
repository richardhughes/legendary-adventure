<div>
    <form method="POST" action="">
        <label for="username">Username: </label>
        <input
            type="text"
            name="username"
            id="username">
        <label for="password">Password: </label>
        <input
            type="password"
            id="password"
            name="password">
        <label for="verify-password">Verify Password:</label>
        <input
            type="password"
            name="verify-password"
            id="verify-password"
            onblur="regObj.validateEqualInput(this)">
        <span id="password-warning" class="hidden warning">Sorry, the password you've entered is incorrect</span>
        <label for="email">Email:</label>
        <input
            type="email"
            name="email"
            id="email">
        <label for="verify-email">Verify Email:</label>
        <input
            type="email"
            name="verify-email"
            id="verify-email"
            onblur="regObj.validateEqualInput(this)">
        <span id="email-warning" class="hidden warning">Sorry, the email you've entered is incorrect</span>
        <label for="referral">Referral ID:</label>
        <input
            type="text"
            name="referral"
            id="referral"
            readonly="readonly"
            value="<?= $this->input->get('ref'); ?>">
        <input type="submit" value="Register" onclick="return regObj.validateInputs();"/>
    </form>
</div>