<script>
	window.addEventListener('load', function () {
		toastr.info('<?= $this->e($message) ?>', '<?= $this->e($title) ?>');
	});
</script>