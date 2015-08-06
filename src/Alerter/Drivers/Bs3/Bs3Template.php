<?php if (Session::has('alerter.message')): ?>
    <div class="alert alert-<?= Session::get('alerter.type') ?>">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php if (Session::has('alerter.title')): ?>
			<strong><?= Session::get('alerter.title') ?></strong>
		<?php endif; ?>
        <?= Session::get('alerter.message') ?>
    </div>
<?php endif; ?>