<script>
	window.addEventListener('load', function () {
		toastr.error('<?= $this->e($message) ?>', '<?= $this->e($title) ?>');
	});
</script>