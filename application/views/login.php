<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= "Jalan Tol | " . $judul ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/logo.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login/css/main.css">
    <!--===============================================================================================-->
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/toastr/toastr.min.css">
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<?php
if ($this->session->userdata('level')) {
    $this->session->set_flashdata('error', 'Logout Terlebih Dahulu.!');
    redirect(base_url('main/dashboard'));
} else {
}
?>

<body>
    <div class="flash-data1" data-flashdata="<?= $this->session->flashdata('flash'); ?>" style="display:none"></div>
    <div class="error-data1" data-error="<?= $this->session->flashdata('error'); ?>" style="display:none"></div>
    <div style="display: none;" class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div style="display: none;" class="error-data" data-error="<?= $this->session->flashdata('error'); ?>"></div>
    <div class="limiter">
        <div class="container-login100" style="background: cornflowerblue;">
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine" class="wrap-login100 p-t-50 p-b-90" style="padding: 15px;">
                <center>
                    <img data-aos="fade-up" data-aos-duration="1100" data-aos-easing="ease-in-sine" src="<?= base_url() ?>assets/logo.png" style="width: 30%;" alt="">
                </center>
                <br>
                <form id="login" class="login100-form validate-form flex-sb flex-w" autocomplete="off">
                    <span data-aos="fade-up" data-aos-duration="1300" data-aos-easing="ease-in-sine" class="login100-form-title p-b-51 text-center">
                        <h5>Sistem Informasi Kartu Legar Jalan Tol
                        </h5>
                    </span>


                    <div data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease-in-sine" class="wrap-input100 validate-input m-b-16" data-validate="Username wajib diisi">
                        <input class="input100" type="text" name="username" id="username" placeholder="Username">
                        <span class="focus-input100"></span>
                    </div>


                    <div data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease-in-sine" class="wrap-input100 validate-input m-b-16" data-validate="Password wajib diisi">
                        <input class="input100" type="password" name="password" id="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-24">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="lihat_password" type="checkbox">
                            <label class="label-checkbox100" for="lihat_password">
                                Show Password
                            </label>
                        </div>

                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login/js/main.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url(); ?>assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- Toastr -->
    <script src="<?= base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            const successalert = $(".flash-data").data("flashdata");
            const erroralert = $(".error-data").data("error");

            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 5000,
            });

            if (successalert == "Login" || successalert == "Logout") {
                Toast.fire({
                    icon: "success",
                    title: "Anda Berhasil " + successalert,
                });
            } else if (successalert) {
                Toast.fire({
                    icon: "success",
                    title: successalert,
                });
            } else if (erroralert) {
                Toast.fire({
                    icon: "error",
                    title: erroralert,
                });
            }

            $('#lihat_password').click(function() {
                var x = document.getElementById("password");
                if ($(this).prop("checked") == false) {
                    x.type = "password";
                } else if ($(this).prop("checked") == true) {
                    x.type = "text";
                }
            });

            $("#login").submit(function(e) {
                e.preventDefault();
                let dataString = $('#login').serialize();

                $.ajax({
                    url: "<?php echo base_url("Main/cekLogin") ?>",
                    type: 'post',
                    dataType: 'json',
                    data: dataString,

                    success: function(data) {
                        if (data.toast.response == "success") {
                            $(".flash-data1").html(data.toast.message);
                            $(".error-data1").html("");
                        } else {
                            $(".error-data1").html(data.toast.message);
                            $(".flash-data1").html("");
                        }
                        toast();

                        setTimeout(function() {
                            if (data.level != null) {
                                if (data.toast.response == "success" && data.level == "1") {
                                    window.location.href = "<?php echo base_url() ?>main/dashboard";
                                } else {
                                    window.location.href = "<?php echo base_url() ?>main/dashboard";
                                }
                            }
                        }, 1000);

                    }
                });
            })

            function toast() {
                const flashData = $(".flash-data1").html();
                const errorData = $(".error-data1").html();

                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 5000,
                });

                if (flashData == "Login" || flashData == "Logout" && errorData == "") {
                    Toast.fire({
                        icon: "success",
                        title: "Anda Berhasil " + flashData,
                    });
                } else if (flashData && errorData == "") {
                    Toast.fire({
                        icon: "success",
                        title: flashData,
                    });
                } else if (errorData && flashData == "") {
                    Toast.fire({
                        icon: "error",
                        title: errorData,
                    });
                }
            }
        });
    </script>

</body>

</html>