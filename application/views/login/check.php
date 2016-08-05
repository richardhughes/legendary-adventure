<div>
    <p>
        <?= $message ?>
    </p>

    <?php if ($loggedin) : ?>
        <p>Please click <a href="/update">here </a> to continue...</p>
    <?php endif; ?>
</div>