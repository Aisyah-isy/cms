<link rel="icon" href="<?= site_url('assets/atlantis'); ?>/assets/img/icon.ico" type="image/x-icon" />

<!-- Fonts and icons -->
<script src="<?= site_url('assets/atlantis'); ?>/assets/js/plugin/webfont/webfont.min.js"></script>
<script>
	WebFont.load({
		google: {
			"families": ["Lato:300,400,700,900"]
		},
		custom: {
			"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
			urls: ['<?= site_url('assets/atlantis'); ?>/assets/css/fonts.min.css']
		},
		active: function() {
			sessionStorage.fonts = true;
		}
	});
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="<?= site_url('assets/atlantis'); ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= site_url('assets/atlantis'); ?>/assets/css/atlantis.min.css">

<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="<?= site_url('assets/atlantis'); ?>/assets/css/demo.css">