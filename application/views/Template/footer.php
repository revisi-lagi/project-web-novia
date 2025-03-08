</body>

</html>

<script>
	const sidebar = document.getElementById('sidebar');
	const toggleBtn = document.getElementById('toggleSidebar');

	toggleBtn.addEventListener('click', () => {
		sidebar.classList.toggle('-translate-x-full');
	});
</script>