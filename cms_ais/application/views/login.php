<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= site_url('assets/atlantis'); ?>/assets/img/icon.ico" type="image/x-icon" />
    <?php require_once('admin/_css.php'); ?>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#tiny'
            plugins: [
                'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify |' +
                'bullist numlist checklist outdent indent | removeformat | code table help'
        })
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= site_url('assets/atlantis'); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= site_url('assets/atlantis'); ?>/assets/css/atlantis.css">
</head>

<body>
    <div class="d-flex animated fadeIn" style="width: 100vw; height: 100vh;">
        <div class="card p-3" style="width: 400px; height: 400px; margin: auto;">
            <h3 class="text-center mt-4">Login To Admin</h3>
            <form action="<?= base_url('auth/login'); ?>" method="post">
                <div class="login-form">
                    <div class="form-group">
                        <label for="username" class="placeholder"><b>Username</b></label>
                        <input id="username" name="username" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="placeholder"><b>Password</b></label>
                        <!-- <a href="#" class="link float-right">Forget Password ?</a> -->
                        <div class="position-relative">
                            <input id="password" name="password" type="password" class="form-control" required>
                            <div class="show-password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-action-d-flex mb-3">
                    </div>
                    <button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Login</button>
                    <a class="btn btn-dark col-md-5 float-left mt-3 mt-sm-0 fw-bold" href="<?= base_url()?>">Home</a>
                </div>
            </form>
        </div>
    </div>
    <div id="done" class="mt-5">
        <?= $this->session->flashdata('alert'); ?>
    </div>
    </form>
    </div>
    </div>

    <script src="<?= site_url('assets/atlantis'); ?>/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= site_url('assets/atlantis'); ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= site_url('assets/atlantis'); ?>/assets/js/core/popper.min.js"></script>
    <script src="<?= site_url('assets/atlantis'); ?>/assets/js/core/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?= site_url('assets/atlantis'); ?>/assets/js/atlantis.min.js"></script>
    <?php require_once('admin/_js.php'); ?>
</body>
<!-- no7 6.00 -->

</html>