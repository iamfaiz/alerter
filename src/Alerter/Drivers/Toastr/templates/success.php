<script>
	window.addEventListener('load', function () {
		toastr.success('<?= $this->e($message) ?>', '<?= $this->e($title) ?>');
	});
</script>