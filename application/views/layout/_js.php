<!-- ##### Footer Area End ##### -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="<?= base_url("assets/master") ?>/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="<?= base_url("assets/master") ?>/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="<?= base_url("assets/master") ?>/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="<?= base_url("assets/master") ?>/js/plugins.js"></script>
<!-- Active js -->
<script src="<?= base_url("assets/master") ?>/js/active.js"></script>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true
        });
    });
</script>
