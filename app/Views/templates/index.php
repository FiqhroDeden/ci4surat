<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/components.css">
    <link href="<?= base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style type="text/css">
        .dropdown:hover>.dropdown-menu {
            display: block;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <?= $this->include('templates/topbar'); ?>
            <?= $this->include('templates/sidebar'); ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">


                    <?= $this->renderSection('page-content'); ?>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <?= date('Y'); ?>
                    <a href="https://web.facebook.com/marthin.salakory.9"> M4S </a>
                    <div class="bullet"></div>
                </div>
                <div class="footer-right">
                    1.0.0
                </div>
            </footer>
        </div>
    </div>

    <!-- Modal -->
    <style>
        .fileUpload {
            position: relative;
            overflow: hidden;
            margin: 10px;
        }

        .fileUpload input.upload {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
    </style>
    <form class="needs-validation" action="/dashboard/save" method="POST" novalidate="" enctype="multipart/form-data">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="">
                        <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Buat Postingan</h5>
                        <hr>
                    </div>
                    <div class="modal-body">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="/img/atin.JPG" width="50" height="50" style="border-radius: 50%;" />
                            </div>
                            <div class="col-md-10 card-body">
                                <h5><?= user()->nama_lengkap; ?></h5>
                            </div>
                        </div>
                        <?php $nama = explode(' ', user()->nama_lengkap); ?>
                        <textarea placeholder="Apa yang anda pikirkan, <?= $nama[0]; ?>?" name="news" id="" cols="61" rows="5"></textarea>
                        <div style="text-align: center;">
                            <div class="fileUpload btn btn-primary">
                                <span><i class="fas fa-film"></i></span>
                                <input name="media" type="file" class="upload">
                            </div>
                        </div>
                    </div>
                    <div style="text-align: center;" class="">
                        <button type="submit" name="submit" style="width: 470px;" type="button" class="btn btn-primary">Kirim</button>
                    </div><br>
                </div>
            </div>
        </div>
    </form>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url(); ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>/assets/js/demo/datatables-demo.js"></script>
    <!-- Template JS File -->
    <script src="<?= base_url(); ?>/assets/js/scripts.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>