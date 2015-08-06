<?php if (isset($message)): ?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php if (isset($title)): ?>
			<strong><?= $title ?></strong>
		<?php endif; ?>
        <?= $message ?>
    </div>
<?php endif; ?>