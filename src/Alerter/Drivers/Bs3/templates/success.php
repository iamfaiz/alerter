<?php if (isset($message)): ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php if (isset($title)): ?>
			<strong><?= $this->e($title) ?></strong>
		<?php endif; ?>
        <?= $this->e($message) ?>
    </div>
<?php endif; ?>