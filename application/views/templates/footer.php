<footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y') ?> <a href="<?= base_url() ?>">JalanTol</a>.</strong>
    All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<!-- <script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
<!-- Summernote -->
<!-- <script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script> -->
<!-- overlayScrollbars -->
<!-- <script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?= base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url(); ?>assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<!-- Datatables -->
<script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script type="text/javascript">
    function toast() {
        const flashData = $(".flash-data1").html();
        const errorData = $(".error-data1").html();

        const Toast = Swal.mixin({
            toast: true,
            position: "top-left",
            showConfirmButton: false,
            timer: 5000,
        });

        if (flashData == "Login" || flashData == "Logout") {
            Toast.fire({
                icon: "success",
                title: "Anda Berhasil " + flashData,
            });
        } else if (flashData) {
            Toast.fire({
                icon: "success",
                title: flashData,
            });
        } else if (errorData) {
            Toast.fire({
                icon: "error",
                title: errorData,
            });
        }
    }

    $(function() {
        $('#example').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });
        //Initialize Select2 Elements
        $('.select2biaya').select2();
        $('.select2').select2();
        $(".select2-tags").select2({
            tags: true,
        });

        $(".select2multiple-tags").select2({
            placeholder: "Jika tidak ada bisa di ketik saja",
            tags: true,
            tokenSeparators: [',', ' ']
        })

        $(".select2multiple").select2({
            placeholder: "Bisa pilih lebih dari satu",
            tokenSeparators: [',', ' ']
        })
    });

    function ubah_tanggal(tgl, ket) {
        var hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        var bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var tanggal = new Date(tgl).getDate();
        var xhari = new Date(tgl).getDay();
        var xbulan = new Date(tgl).getMonth();
        var xtahun = new Date(tgl).getYear();
        var jam = new Date(tgl).getHours().toString();
        var menit = new Date(tgl).getMinutes().toString();
        var detik = new Date(tgl).getSeconds().toString();

        if (jam.length == 1) {
            jam = "0" + jam;
        }

        if (menit.length == 1) {
            menit = "0" + menit;
        }

        if (detik.length == 1) {
            detik = "0" + detik;
        }

        var hari = hari[xhari];
        var bulan = bulan[xbulan];
        var tahun = (xtahun < 1000) ? xtahun + 1900 : xtahun;

        if (ket == "jam") {
            var hasil = hari + ', ' + tanggal + ' ' + bulan + ' ' + tahun + " " + jam + ":" + menit + ":" + detik;
        } else {
            var hasil = hari + ', ' + tanggal + ' ' + bulan + ' ' + tahun;
        }

        return hasil;
    }

    function capitalize(str) {
        str = str.toLowerCase();

        const arrOfWords = str.split(" ");

        const arrOfWordsCased = [];

        for (let i = 0; i < arrOfWords.length; i++) {
            const char = arrOfWords[i].split("");
            char[0] = char[0].toUpperCase();

            arrOfWordsCased.push(char.join(""));
        }
        return arrOfWordsCased.join(" ");
    }

    $(document).ready(function() {
        var pathparts = location.pathname.split('/');
        // if (location.host == '188.166.212.76') {
        if (location.host == 'localhost') {
            var base_url = location.origin + '/' + pathparts[1].trim('/'); // http://localhost/myproject/
        } else {
            var base_url = location.origin; //http://localhost/
        }

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

        $(".tombol-logout").on("click", function(e) {
            e.preventDefault();
            const href = $(this).attr("href");

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Keluar!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                }
            });
        });

        $('.click_tab').click(function() {
            let id = $(this).data('id');
            $.ajax({
                type: "post",
                url: base_url + "/jalantol/view_map",
                data: {
                    "id": id
                },
                success: function(response) {
                    $('#view_teknik').html("");
                    $('#view_teknik').html(response);
                }
            });
        })

        $('.click_tab_ramp').click(function() {
            let id = $(this).data('id');
            $.ajax({
                type: "post",
                url: base_url + "/ramp/view_map",
                data: {
                    "id": id
                },
                success: function(response) {
                    $('#view_teknik').html("");
                    $('#view_teknik').html(response);
                }
            });
        });

        $('.download_pdf').click(function() {
            var ruas = $('#ruas_km').val();
            if (ruas == "") {
                ruas = "0";
            }
            window.open("<?php echo base_url() ?>jalantol/pdf_datateknik/" + ruas);
        })

        $('.print_data').click(function() {
            var ruas = $('#ruas_km').val();
            if (ruas == "") {
                ruas = "0";
            }
            window.open("<?php echo base_url() ?>jalantol/print_datateknik/" + ruas);
        })

        $('.download_pdf_ramp').click(function() {
            var ruas = $('#ruas_km_ramp').val();
            if (ruas == "") {
                ruas = "0";
            }
            window.open("<?php echo base_url() ?>ramp/pdf_datateknik/" + ruas);
        })

        $('.print_data_ramp').click(function() {
            var ruas = $('#ruas_km_ramp').val();
            if (ruas == "") {
                ruas = "0";
            }
            window.open("<?php echo base_url() ?>ramp/print_datateknik/" + ruas);
        })

        $(".select2kelurahan").select2({
            placeholder: "Pilih Desa",
            // tags: true,
            ajax: {
                url: base_url + "/jalantol/get_json_kelurahan",
                type: "post",
                dataType: "json",
                delay: 100,
                data: function(params) {
                    return {
                        searchTerm: params.term, // search term
                        kecamatan: $('#kecamatan').val()
                    };
                },
                processResults: function(response) {
                    return {
                        results: response,
                    };
                },
                cache: true,
            },
        });

        $(".select2kecamatan").select2({
            placeholder: "Pilih Kecamatan",
            // tags: true,
            ajax: {
                url: base_url + "/jalantol/get_json_kecamatan",
                type: "post",
                dataType: "json",
                delay: 100,
                data: function(params) {
                    return {
                        searchTerm: params.term, // search term
                        kabupaten: $('#kabupaten').val()
                    };
                },
                processResults: function(response) {
                    return {
                        results: response,
                    };
                },
                cache: true,
            },
        });

        $(".select2kecamatan").on("select2:select", function(e) {
            var id = e.params.data.id;
            var text = e.params.data.text;

            $('#kelurahan').attr('disabled', false);
            $('#kelurahan').val("").trigger('change');
        });

        $(".select2kabupaten").select2({
            placeholder: "Pilih Kabupaten",
            // tags: true,
            ajax: {
                url: base_url + "/jalantol/get_json_kabupaten",
                type: "post",
                dataType: "json",
                delay: 100,
                data: function(params) {
                    return {
                        searchTerm: params.term, // search term
                        provinsi: $('#provinsi').val()
                    };
                },
                processResults: function(response) {
                    return {
                        results: response,
                    };
                },
                cache: true,
            },
        });

        $(".select2kabupaten").on("select2:select", function(e) {
            var id = e.params.data.id;
            var text = e.params.data.text;

            $('#kecamatan').attr('disabled', false);
            $('#kecamatan').val("").trigger('change');
            $('#kelurahan').val("").trigger('change');
        });

        $(".select2provinsi").select2({
            minimumInputLength: 3,
            placeholder: "Pilih Provinsi",
            // tags: true,
            ajax: {
                url: base_url + "/jalantol/get_json_provinsi",
                type: "post",
                dataType: "json",
                delay: 100,
                data: function(params) {
                    return {
                        searchTerm: params.term, // search term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response,
                    };
                },
                cache: true,
            },
        });

        $(".select2provinsi").on("select2:select", function(e) {
            var id = e.params.data.id;
            var text = e.params.data.text;

            $('#kabupaten').attr('disabled', false);
            $('#kabupaten').val("").trigger('change');
            $('#kecamatan').val("").trigger('change');
            $('#kelurahan').val("").trigger('change');
        });

        $("#addidentifikasi").submit(function(e) {
            e.preventDefault();
            let dataString = $('#addidentifikasi').serialize();

            $.ajax({
                url: "<?php echo base_url("jalantol/addidentifikasi") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#addidentifikasi')[0].reset();
                        $('#tahun').val("").trigger('change');
                        $('#provinsi').val("").trigger('change');
                        $('#kabupaten').val("").trigger('change');
                        $('#kecamatan').val("").trigger('change');
                        $('#kelurahan').val("").trigger('change');
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                        setTimeout(function() {
                            window.location.href = "<?php echo base_url() ?>dataumum/";
                        }, 1000);
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        });

        $("#addidentifikasi_ramp").submit(function(e) {
            e.preventDefault();
            let dataString = $('#addidentifikasi_ramp').serialize();

            $.ajax({
                url: "<?php echo base_url("ramp/addidentifikasi") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#addidentifikasi_ramp')[0].reset();
                        $('#tahun').val("").trigger('change');
                        $('#provinsi').val("").trigger('change');
                        $('#kabupaten').val("").trigger('change');
                        $('#kecamatan').val("").trigger('change');
                        $('#kelurahan').val("").trigger('change');
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                        setTimeout(function() {
                            window.location.href = "<?php echo base_url() ?>dataumum_ramp/";
                        }, 1000);
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        });

        data_lingkungan_ramp();

        function data_lingkungan_ramp(ruas_km = "") {
            var datatable = $('#rampmytabledatalingkungan').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('ramp/get_datalingkungan') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "terrain_kiri",
                        class: "text-center"
                    },
                    {
                        data: "terrain_kanan",
                        class: "text-center"
                    },
                    {
                        data: "tata_guna_lahan_kiri",
                        class: "text-center"
                    },
                    {
                        data: "tata_guna_lahan_kanan",
                        class: "text-center"
                    },
                    {
                        data: "underpass_km",
                        class: "text-center"
                    },
                    {
                        data: "underpass_x",
                        class: "text-center"
                    },
                    {
                        data: "underpass_y",
                        class: "text-center"
                    },
                    {
                        data: "overpass_km",
                        class: "text-center"
                    },
                    {
                        data: "overpass_x",
                        class: "text-center"
                    },
                    {
                        data: "overpass_y",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#rampmytabledatalingkungan').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_lingkungan_jalan";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#rampmytabledatalingkungan').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#rampmytabledatalingkungan').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_lingkungan_jalan"
                },
                success: function(data) {
                    $('#id_data_lingkungan_jalan').val(data.id_data_lingkungan_jalan);
                    $('#ruas_km_lingkungan').val(data.ruas_km);
                    $('#terrain_kiri').val(data.terrain_kiri);
                    $('#terrain_kanan').val(data.terrain_kanan);
                    $('#tata_guna_lahan_kiri').val(data.tata_guna_lahan_kiri);
                    $('#tata_guna_lahan_kanan').val(data.tata_guna_lahan_kanan);
                    $('#underpass_km').val(data.underpass_km);
                    $('#underpass_x').val(data.underpass_x);
                    $('#underpass_y').val(data.underpass_y);
                    $('#overpass_km').val(data.overpass_km);
                    $('#overpass_x').val(data.overpass_x);
                    $('#overpass_y').val(data.overpass_y);
                }
            });
            $('#modaleditdatalingkungan').modal('show');
        });

        data_lingkungan();

        function data_lingkungan(ruas_km = "") {
            var datatable = $('#mytabledatalingkungan').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('JalanTol/get_datalingkungan') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "terrain_kiri",
                        class: "text-center"
                    },
                    {
                        data: "terrain_kanan",
                        class: "text-center"
                    },
                    {
                        data: "tata_guna_lahan_kiri",
                        class: "text-center"
                    },
                    {
                        data: "tata_guna_lahan_kanan",
                        class: "text-center"
                    },
                    {
                        data: "underpass_km",
                        class: "text-center"
                    },
                    {
                        data: "underpass_x",
                        class: "text-center"
                    },
                    {
                        data: "underpass_y",
                        class: "text-center"
                    },
                    {
                        data: "overpass_km",
                        class: "text-center"
                    },
                    {
                        data: "overpass_x",
                        class: "text-center"
                    },
                    {
                        data: "overpass_y",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#mytabledatalingkungan').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_lingkungan_jalan";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytabledatalingkungan').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytabledatalingkungan').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_lingkungan_jalan"
                },
                success: function(data) {
                    $('#id_data_lingkungan_jalan').val(data.id_data_lingkungan_jalan);
                    $('#ruas_km_lingkungan').val(data.ruas_km);
                    $('#terrain_kiri').val(data.terrain_kiri);
                    $('#terrain_kanan').val(data.terrain_kanan);
                    $('#tata_guna_lahan_kiri').val(data.tata_guna_lahan_kiri);
                    $('#tata_guna_lahan_kanan').val(data.tata_guna_lahan_kanan);
                    $('#underpass_km').val(data.underpass_km);
                    $('#underpass_x').val(data.underpass_x);
                    $('#underpass_y').val(data.underpass_y);
                    $('#overpass_km').val(data.overpass_km);
                    $('#overpass_x').val(data.overpass_x);
                    $('#overpass_y').val(data.overpass_y);
                }
            });
            $('#modaleditdatalingkungan').modal('show');
        });

        $('#formeditdatalingkungan').submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditdatalingkungan').serialize();

            $.ajax({
                url: "<?php echo base_url("jalantol/editdatalingkungan") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditdatalingkungan')[0].reset();
                        $('#modaleditdatalingkungan').modal('hide');
                        $('#mytabledatalingkungan').DataTable().ajax.reload();
                        $('#rampmytabledatalingkungan').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        })

        data_geometrik_ramp();

        function data_geometrik_ramp(ruas_km = "") {
            var datatable = $('#rampmytabledatageometrik').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('ramp/get_datageometrik') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "lebar_rumija",
                        class: "text-center"
                    },
                    {
                        data: "gradien_kiri",
                        class: "text-center"
                    },
                    {
                        data: "gradien_kanan",
                        class: "text-center"
                    },
                    {
                        data: "cross_fall_kiri",
                        class: "text-center"
                    },
                    {
                        data: "cross_fall_kanan",
                        class: "text-center"
                    },
                    {
                        data: "superelevasi",
                        class: "text-center"
                    },
                    {
                        data: "radius",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#rampmytabledatageometrik').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "geometrik";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#rampmytabledatageometrik').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#rampmytabledatageometrik').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "geometrik"
                },
                success: function(data) {
                    $('#id_geometrik').val(data.id_geometrik);
                    $('#ruas_km_geometrik').val(data.ruas_km);
                    $('#lebar_rumija').val(data.lebar_rumija);
                    $('#gradien_kiri').val(data.gradien_kiri);
                    $('#gradien_kanan').val(data.gradien_kanan);
                    $('#cross_fall_kiri').val(data.cross_fall_kiri);
                    $('#cross_fall_kanan').val(data.cross_fall_kanan);
                    $('#superelevasi').val(data.superelevasi);
                    $('#radius').val(data.radius);
                }
            });
            $('#modaleditdatageometrik').modal('show');
        });

        data_geometrik();

        function data_geometrik(ruas_km = "") {
            var datatable = $('#mytabledatageometrik').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('JalanTol/get_datageometrik') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "lebar_rumija",
                        class: "text-center"
                    },
                    {
                        data: "gradien_kiri",
                        class: "text-center"
                    },
                    {
                        data: "gradien_kanan",
                        class: "text-center"
                    },
                    {
                        data: "cross_fall_kiri",
                        class: "text-center"
                    },
                    {
                        data: "cross_fall_kanan",
                        class: "text-center"
                    },
                    {
                        data: "superelevasi",
                        class: "text-center"
                    },
                    {
                        data: "radius",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#mytabledatageometrik').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "geometrik";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytabledatageometrik').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytabledatageometrik').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "geometrik"
                },
                success: function(data) {
                    $('#id_geometrik').val(data.id_geometrik);
                    $('#ruas_km_geometrik').val(data.ruas_km);
                    $('#lebar_rumija').val(data.lebar_rumija);
                    $('#gradien_kiri').val(data.gradien_kiri);
                    $('#gradien_kanan').val(data.gradien_kanan);
                    $('#cross_fall_kiri').val(data.cross_fall_kiri);
                    $('#cross_fall_kanan').val(data.cross_fall_kanan);
                    $('#superelevasi').val(data.superelevasi);
                    $('#radius').val(data.radius);
                }
            });
            $('#modaleditdatageometrik').modal('show');
        });

        $('#formeditdatageometrik').submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditdatageometrik').serialize();

            $.ajax({
                url: "<?php echo base_url("jalantol/editdatageometrik") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditdatageometrik')[0].reset();
                        $('#modaleditdatageometrik').modal('hide');
                        $('#mytabledatageometrik').DataTable().ajax.reload();
                        $('#rampmytabledatageometrik').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        })

        data_lintasan_ramp();

        function data_lintasan_ramp(ruas_km = "") {
            var datatable = $('#rampmytabledatalintasan').DataTable({
                "processing": true,
                "serverSide": true,
                // "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('ramp/get_datalintasan') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "lhr_ki_golongan_1",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ki_golongan_1",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ka_golongan_1",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ka_golongan_1",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ki_golongan_2",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ki_golongan_2",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ka_golongan_2",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ka_golongan_2",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ki_golongan_3",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ki_golongan_3",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ka_golongan_3",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ka_golongan_3",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ki_golongan_4",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ki_golongan_4",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ka_golongan_4",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ka_golongan_4",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ki_golongan_5",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ki_golongan_5",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ka_golongan_5",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ka_golongan_5",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ki_golongan_6",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ki_golongan_6",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ka_golongan_6",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ka_golongan_6",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#rampmytabledatalintasan').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "lhr";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#rampmytabledatalintasan').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#rampmytabledatalintasan').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "lhr"
                },
                success: function(data) {
                    $('#id_lhr').val(data.id_lhr);
                    $('#ruas_km_lhr').val(data.ruas_km);
                    $('#lhr_ki_golongan_1').val(data.lhr_ki_golongan_1);
                    $('#tarif_ki_golongan_1').val(data.tarif_ki_golongan_1);
                    $('#lhr_ka_golongan_1').val(data.lhr_ka_golongan_1);
                    $('#tarif_ka_golongan_1').val(data.tarif_ka_golongan_1);
                    $('#lhr_ki_golongan_2').val(data.lhr_ki_golongan_2);
                    $('#tarif_ki_golongan_2').val(data.tarif_ki_golongan_2);
                    $('#lhr_ka_golongan_2').val(data.lhr_ka_golongan_2);
                    $('#tarif_ka_golongan_2').val(data.tarif_ka_golongan_2);
                    $('#lhr_ki_golongan_3').val(data.lhr_ki_golongan_3);
                    $('#tarif_ki_golongan_3').val(data.tarif_ki_golongan_3);
                    $('#lhr_ka_golongan_3').val(data.lhr_ka_golongan_3);
                    $('#tarif_ka_golongan_3').val(data.tarif_ka_golongan_3);
                    $('#lhr_ki_golongan_4').val(data.lhr_ki_golongan_4);
                    $('#tarif_ki_golongan_4').val(data.tarif_ki_golongan_4);
                    $('#lhr_ka_golongan_4').val(data.lhr_ka_golongan_4);
                    $('#tarif_ka_golongan_4').val(data.tarif_ka_golongan_4);
                    $('#lhr_ki_golongan_5').val(data.lhr_ki_golongan_5);
                    $('#tarif_ki_golongan_5').val(data.tarif_ki_golongan_5);
                    $('#lhr_ka_golongan_5').val(data.lhr_ka_golongan_5);
                    $('#tarif_ka_golongan_5').val(data.tarif_ka_golongan_5);
                    $('#lhr_ki_golongan_6').val(data.lhr_ki_golongan_6);
                    $('#tarif_ki_golongan_6').val(data.tarif_ki_golongan_6);
                    $('#lhr_ka_golongan_6').val(data.lhr_ka_golongan_6);
                    $('#tarif_ka_golongan_6').val(data.tarif_ka_golongan_6);
                }
            });
            $('#modaleditdatalintasan').modal('show');
        });

        data_lintasan();

        function data_lintasan(ruas_km = "") {
            var datatable = $('#mytabledatalintasan').DataTable({
                "processing": true,
                "serverSide": true,
                // "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('JalanTol/get_datalintasan') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "lhr_ki_golongan_1",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ki_golongan_1",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ka_golongan_1",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ka_golongan_1",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ki_golongan_2",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ki_golongan_2",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ka_golongan_2",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ka_golongan_2",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ki_golongan_3",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ki_golongan_3",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ka_golongan_3",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ka_golongan_3",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ki_golongan_4",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ki_golongan_4",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ka_golongan_4",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ka_golongan_4",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ki_golongan_5",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ki_golongan_5",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ka_golongan_5",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ka_golongan_5",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ki_golongan_6",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ki_golongan_6",
                        class: "text-center"
                    },
                    {
                        data: "lhr_ka_golongan_6",
                        class: "text-center"
                    },
                    {
                        data: "tarif_ka_golongan_6",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#mytabledatalintasan').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "lhr";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytabledatalintasan').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytabledatalintasan').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "lhr"
                },
                success: function(data) {
                    $('#id_lhr').val(data.id_lhr);
                    $('#ruas_km_lhr').val(data.ruas_km);
                    $('#lhr_ki_golongan_1').val(data.lhr_ki_golongan_1);
                    $('#tarif_ki_golongan_1').val(data.tarif_ki_golongan_1);
                    $('#lhr_ka_golongan_1').val(data.lhr_ka_golongan_1);
                    $('#tarif_ka_golongan_1').val(data.tarif_ka_golongan_1);
                    $('#lhr_ki_golongan_2').val(data.lhr_ki_golongan_2);
                    $('#tarif_ki_golongan_2').val(data.tarif_ki_golongan_2);
                    $('#lhr_ka_golongan_2').val(data.lhr_ka_golongan_2);
                    $('#tarif_ka_golongan_2').val(data.tarif_ka_golongan_2);
                    $('#lhr_ki_golongan_3').val(data.lhr_ki_golongan_3);
                    $('#tarif_ki_golongan_3').val(data.tarif_ki_golongan_3);
                    $('#lhr_ka_golongan_3').val(data.lhr_ka_golongan_3);
                    $('#tarif_ka_golongan_3').val(data.tarif_ka_golongan_3);
                    $('#lhr_ki_golongan_4').val(data.lhr_ki_golongan_4);
                    $('#tarif_ki_golongan_4').val(data.tarif_ki_golongan_4);
                    $('#lhr_ka_golongan_4').val(data.lhr_ka_golongan_4);
                    $('#tarif_ka_golongan_4').val(data.tarif_ka_golongan_4);
                    $('#lhr_ki_golongan_5').val(data.lhr_ki_golongan_5);
                    $('#tarif_ki_golongan_5').val(data.tarif_ki_golongan_5);
                    $('#lhr_ka_golongan_5').val(data.lhr_ka_golongan_5);
                    $('#tarif_ka_golongan_5').val(data.tarif_ka_golongan_5);
                    $('#lhr_ki_golongan_6').val(data.lhr_ki_golongan_6);
                    $('#tarif_ki_golongan_6').val(data.tarif_ki_golongan_6);
                    $('#lhr_ka_golongan_6').val(data.lhr_ka_golongan_6);
                    $('#tarif_ka_golongan_6').val(data.tarif_ka_golongan_6);
                }
            });
            $('#modaleditdatalintasan').modal('show');
        });

        $('#formeditdatalintasan').submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditdatalintasan').serialize();

            $.ajax({
                url: "<?php echo base_url("jalantol/editlhr") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditdatalintasan')[0].reset();
                        $('#modaleditdatalintasan').modal('hide');
                        $('#mytabledatalintasan').DataTable().ajax.reload();
                        $('#rampmytabledatalintasan').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        })

        data_lainnya_ramp();

        function data_lainnya_ramp(ruas_km = "") {
            var datatable = $('#rampmytabledatalainnya').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('ramp/get_datalainnya') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "uraian",
                        class: "text-center"
                    },
                    {
                        data: "tanggal_pemanfaatan",
                        class: "text-center"
                    },
                    {
                        data: "nilai",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#rampmytabledatalainnya').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_lainnya";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#rampmytabledatalainnya').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#rampmytabledatalainnya').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_lainnya"
                },
                success: function(data) {
                    $('#id_data_lainnya').val(data.id_data_lainnya);
                    $('#ruas_km_lainnya').val(data.ruas_km);
                    $('#uraian_lainnya').val(data.uraian);
                    $('#tanggal_pemanfaatan').val(data.tanggal_pemanfaatan);
                    $('#nilai').val(data.nilai);
                }
            });
            $('#modaleditdatalainnya').modal('show');
        });

        data_lainnya();

        function data_lainnya(ruas_km = "") {
            var datatable = $('#mytabledatalainnya').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('JalanTol/get_datalainnya') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "uraian",
                        class: "text-center"
                    },
                    {
                        data: "tanggal_pemanfaatan",
                        class: "text-center"
                    },
                    {
                        data: "nilai",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#mytabledatalainnya').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_lainnya";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytabledatalainnya').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytabledatalainnya').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_lainnya"
                },
                success: function(data) {
                    $('#id_data_lainnya').val(data.id_data_lainnya);
                    $('#ruas_km_lainnya').val(data.ruas_km);
                    $('#uraian_lainnya').val(data.uraian);
                    $('#tanggal_pemanfaatan').val(data.tanggal_pemanfaatan);
                    $('#nilai').val(data.nilai);
                }
            });
            $('#modaleditdatalainnya').modal('show');
        });

        $('#formeditdatalainnya').submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditdatalainnya').serialize();

            $.ajax({
                url: "<?php echo base_url("jalantol/editdatalainnya") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditdatalainnya')[0].reset();
                        $('#modaleditdatalainnya').modal('hide');
                        $('#mytabledatalainnya').DataTable().ajax.reload();
                        $('#rampmytabledatalainnya').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        })

        data_teknik_5_ramp();

        function data_teknik_5_ramp(ruas_km = "") {
            var datatable = $('#rampmytabledatateknik5').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('ramp/get_datateknik5') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "jenis_utilitas_prasarana",
                        class: "text-center"
                    },
                    {
                        data: "ki_prasarana",
                        class: "text-center"
                    },
                    {
                        data: "mid_prasarana",
                        class: "text-center"
                    },
                    {
                        data: "ka_prasarana",
                        class: "text-center"
                    },
                    {
                        data: "jenis_utilitas_sarana",
                        class: "text-center"
                    },
                    {
                        data: "ki_sarana",
                        class: "text-center"
                    },
                    {
                        data: "mid_sarana",
                        class: "text-center"
                    },
                    {
                        data: "ka_sarana",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#rampmytabledatateknik5').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_teknik_5";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#rampmytabledatateknik5').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#rampmytabledatateknik5').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_teknik_5"
                },
                success: function(data) {
                    $('#id_data_teknik_5').val(data.id_data_teknik_5);
                    $('#ruas_km_5').val(data.ruas_km);
                    $('#jenis_utilitas_prasarana').val(data.jenis_utilitas_prasarana);
                    $('#ki_prasarana').val(data.ki_prasarana);
                    $('#mid_prasarana').val(data.mid_prasarana);
                    $('#ka_prasarana').val(data.ka_prasarana);
                    $('#jenis_utilitas_sarana').val(data.jenis_utilitas_sarana);
                    $('#ki_sarana').val(data.ki_sarana);
                    $('#mid_sarana').val(data.mid_sarana);
                    $('#ka_sarana').val(data.ka_sarana);
                }
            });
            $('#modaleditdatateknik5').modal('show');
        });

        data_teknik_5();

        function data_teknik_5(ruas_km = "") {
            var datatable = $('#mytabledatateknik5').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('JalanTol/get_datateknik5') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "jenis_utilitas_prasarana",
                        class: "text-center"
                    },
                    {
                        data: "ki_prasarana",
                        class: "text-center"
                    },
                    {
                        data: "mid_prasarana",
                        class: "text-center"
                    },
                    {
                        data: "ka_prasarana",
                        class: "text-center"
                    },
                    {
                        data: "jenis_utilitas_sarana",
                        class: "text-center"
                    },
                    {
                        data: "ki_sarana",
                        class: "text-center"
                    },
                    {
                        data: "mid_sarana",
                        class: "text-center"
                    },
                    {
                        data: "ka_sarana",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#mytabledatateknik5').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_teknik_5";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytabledatateknik5').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytabledatateknik5').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_teknik_5"
                },
                success: function(data) {
                    $('#id_data_teknik_5').val(data.id_data_teknik_5);
                    $('#ruas_km_5').val(data.ruas_km);
                    $('#jenis_utilitas_prasarana').val(data.jenis_utilitas_prasarana);
                    $('#ki_prasarana').val(data.ki_prasarana);
                    $('#mid_prasarana').val(data.mid_prasarana);
                    $('#ka_prasarana').val(data.ka_prasarana);
                    $('#jenis_utilitas_sarana').val(data.jenis_utilitas_sarana);
                    $('#ki_sarana').val(data.ki_sarana);
                    $('#mid_sarana').val(data.mid_sarana);
                    $('#ka_sarana').val(data.ka_sarana);
                }
            });
            $('#modaleditdatateknik5').modal('show');
        });

        $('#formeditdatateknik5').submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditdatateknik5').serialize();

            $.ajax({
                url: "<?php echo base_url("jalantol/editdatateknik5") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditdatateknik5')[0].reset();
                        $('#modaleditdatateknik5').modal('hide');
                        $('#mytabledatateknik5').DataTable().ajax.reload();
                        $('#rampmytabledatateknik5').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        })

        data_teknik_4_ramp();

        function data_teknik_4_ramp(ruas_km = "") {
            var datatable = $('#rampmytabledatateknik4').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('ramp/get_datateknik4') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "uraian",
                        class: "text-center"
                    },
                    {
                        data: "ki",
                        class: "text-center"
                    },
                    {
                        data: "mid",
                        class: "text-center"
                    },
                    {
                        data: "ka",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#rampmytabledatateknik4').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_teknik_4";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#rampmytabledatateknik4').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#rampmytabledatateknik4').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_teknik_4"
                },
                success: function(data) {
                    $('#id_data_teknik_4').val(data.id_data_teknik_4);
                    $('#ruas_km_4').val(data.ruas_km);
                    $('#uraian').val(data.uraian);
                    $('#ki').val(data.ki);
                    $('#mid').val(data.mid);
                    $('#ka').val(data.ka);
                }
            });
            $('#modaleditdatateknik4').modal('show');
        });

        data_teknik_4();

        function data_teknik_4(ruas_km = "") {
            var datatable = $('#mytabledatateknik4').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('JalanTol/get_datateknik4') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "uraian",
                        class: "text-center"
                    },
                    {
                        data: "ki",
                        class: "text-center"
                    },
                    {
                        data: "mid",
                        class: "text-center"
                    },
                    {
                        data: "ka",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#mytabledatateknik4').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_teknik_4";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytabledatateknik4').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytabledatateknik4').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_teknik_4"
                },
                success: function(data) {
                    $('#id_data_teknik_4').val(data.id_data_teknik_4);
                    $('#ruas_km_4').val(data.ruas_km);
                    $('#uraian').val(data.uraian);
                    $('#ki').val(data.ki);
                    $('#mid').val(data.mid);
                    $('#ka').val(data.ka);
                }
            });
            $('#modaleditdatateknik4').modal('show');
        });

        $('#formeditdatateknik4').submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditdatateknik4').serialize();

            $.ajax({
                url: "<?php echo base_url("jalantol/editdatateknik4") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditdatateknik4')[0].reset();
                        $('#modaleditdatateknik4').modal('hide');
                        $('#mytabledatateknik4').DataTable().ajax.reload();
                        $('#rampmytabledatateknik4').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        })

        data_teknik_3_ramp();

        function data_teknik_3_ramp(ruas_km = "") {
            var datatable = $('#rampmytabledatateknik3').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('ramp/get_datateknik3') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "gorong_jenis_material",
                        class: "text-center"
                    },
                    {
                        data: "gorong_ukuran_panjang",
                        class: "text-center"
                    },
                    {
                        data: "gorong_kondisi",
                        class: "text-center"
                    },
                    {
                        data: "saluran_jenis_material",
                        class: "text-center"
                    },
                    {
                        data: "saluran_ukuran_panjang",
                        class: "text-center"
                    },
                    {
                        data: "saluran_kondisi",
                        class: "text-center"
                    },
                    {
                        data: "manhole_jenis_material",
                        class: "text-center"
                    },
                    {
                        data: "manhole_ukuran_panjang",
                        class: "text-center"
                    },
                    {
                        data: "manhole_kondisi",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#rampmytabledatateknik3').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_teknik_3";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#rampmytabledatateknik3').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#rampmytabledatateknik3').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_teknik_3"
                },
                success: function(data) {
                    $('#id_data_teknik_3').val(data.id_data_teknik_3);
                    $('#ruas_km_3').val(data.ruas_km);
                    $('#gorong_jenis_material').val(data.gorong_jenis_material);
                    $('#gorong_ukuran_panjang').val(data.gorong_ukuran_panjang);
                    $('#gorong_kondisi').val(data.gorong_kondisi);
                    $('#saluran_jenis_material').val(data.saluran_jenis_material);
                    $('#saluran_ukuran_panjang').val(data.saluran_ukuran_panjang);
                    $('#saluran_kondisi').val(data.saluran_kondisi);
                    $('#manhole_jenis_material').val(data.manhole_jenis_material);
                    $('#manhole_ukuran_panjang').val(data.manhole_ukuran_panjang);
                    $('#manhole_kondisi').val(data.manhole_kondisi);
                }
            });
            $('#modaleditdatateknik3').modal('show');
        });

        data_teknik_3();

        function data_teknik_3(ruas_km = "") {
            var datatable = $('#mytabledatateknik3').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('JalanTol/get_datateknik3') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "gorong_jenis_material",
                        class: "text-center"
                    },
                    {
                        data: "gorong_ukuran_panjang",
                        class: "text-center"
                    },
                    {
                        data: "gorong_kondisi",
                        class: "text-center"
                    },
                    {
                        data: "saluran_jenis_material",
                        class: "text-center"
                    },
                    {
                        data: "saluran_ukuran_panjang",
                        class: "text-center"
                    },
                    {
                        data: "saluran_kondisi",
                        class: "text-center"
                    },
                    {
                        data: "manhole_jenis_material",
                        class: "text-center"
                    },
                    {
                        data: "manhole_ukuran_panjang",
                        class: "text-center"
                    },
                    {
                        data: "manhole_kondisi",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#mytabledatateknik3').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_teknik_3";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytabledatateknik3').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytabledatateknik3').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_teknik_3"
                },
                success: function(data) {
                    $('#id_data_teknik_3').val(data.id_data_teknik_3);
                    $('#ruas_km_3').val(data.ruas_km);
                    $('#gorong_jenis_material').val(data.gorong_jenis_material);
                    $('#gorong_ukuran_panjang').val(data.gorong_ukuran_panjang);
                    $('#gorong_kondisi').val(data.gorong_kondisi);
                    $('#saluran_jenis_material').val(data.saluran_jenis_material);
                    $('#saluran_ukuran_panjang').val(data.saluran_ukuran_panjang);
                    $('#saluran_kondisi').val(data.saluran_kondisi);
                    $('#manhole_jenis_material').val(data.manhole_jenis_material);
                    $('#manhole_ukuran_panjang').val(data.manhole_ukuran_panjang);
                    $('#manhole_kondisi').val(data.manhole_kondisi);
                }
            });
            $('#modaleditdatateknik3').modal('show');
        });

        $('#formeditdatateknik3').submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditdatateknik3').serialize();

            $.ajax({
                url: "<?php echo base_url("jalantol/editdatateknik3") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditdatateknik3')[0].reset();
                        $('#modaleditdatateknik3').modal('hide');
                        $('#mytabledatateknik3').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        })

        data_teknik_2_median_ramp();

        function data_teknik_2_median_ramp(ruas_km = "") {
            var datatable = $('#rampmytabledatateknik2median').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('ramp/get_datateknik2median') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "tebal_median",
                        class: "text-center"
                    },
                    {
                        data: "lebar_median",
                        class: "text-center"
                    },
                    {
                        data: "jenis_median",
                        class: "text-center"
                    },
                    {
                        data: "kondisi_median",
                        class: "text-center"
                    },
                    {
                        data: "lebar_luar_ki",
                        class: "text-center"
                    },
                    {
                        data: "lebar_dalam_ki",
                        class: "text-center"
                    },
                    {
                        data: "lebar_luar_ka",
                        class: "text-center"
                    },
                    {
                        data: "lebar_dalam_ka",
                        class: "text-center"
                    },
                    {
                        data: "tebal_luar_ki",
                        class: "text-center"
                    },
                    {
                        data: "tebal_dalam_ki",
                        class: "text-center"
                    },
                    {
                        data: "tebal_luar_ka",
                        class: "text-center"
                    },
                    {
                        data: "tebal_dalam_ka",
                        class: "text-center"
                    },
                    {
                        data: "jenis_luar_ki",
                        class: "text-center"
                    },
                    {
                        data: "jenis_dalam_ki",
                        class: "text-center"
                    },
                    {
                        data: "jenis_luar_ka",
                        class: "text-center"
                    },
                    {
                        data: "jenis_dalam_ka",
                        class: "text-center"
                    },
                    {
                        data: "posisi_luar_ki",
                        class: "text-center"
                    },
                    {
                        data: "posisi_dalam_ki",
                        class: "text-center"
                    },
                    {
                        data: "posisi_luar_ka",
                        class: "text-center"
                    },
                    {
                        data: "posisi_dalam_ka",
                        class: "text-center"
                    },
                    {
                        data: "kondisi_luar_ki",
                        class: "text-center"
                    },
                    {
                        data: "kondisi_dalam_ki",
                        class: "text-center"
                    },
                    {
                        data: "kondisi_luar_ka",
                        class: "text-center"
                    },
                    {
                        data: "kondisi_dalam_ka",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#rampmytabledatateknik2median').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_teknik_2_median";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#rampmytabledatateknik2median').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#rampmytabledatateknik2median').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_teknik_2_median"
                },
                success: function(data) {
                    console.log(data)
                    $('#id_data_teknik_2_median').val(data.id_data_teknik_2_median);
                    $('#ruas_km_2_median').val(data.ruas_km);
                    $('#tebal_median').val(data.tebal_median);
                    $('#lebar_median').val(data.lebar_median);
                    $('#jenis_median').val(data.jenis_median);
                    $('#kondisi_median').val(data.kondisi_median);
                    $('#lebar_luar_ki').val(data.lebar_luar_ki);
                    $('#lebar_dalam_ki').val(data.lebar_dalam_ki);
                    $('#lebar_luar_ka').val(data.lebar_luar_ka);
                    $('#lebar_dalam_ka').val(data.lebar_dalam_ka);
                    $('#tebal_luar_ki').val(data.tebal_luar_ki);
                    $('#tebal_dalam_ki').val(data.tebal_dalam_ki);
                    $('#tebal_luar_ka').val(data.tebal_luar_ka);
                    $('#tebal_dalam_ka').val(data.tebal_dalam_ka);
                    $('#jenis_luar_ki').val(data.jenis_luar_ki);
                    $('#jenis_dalam_ki').val(data.jenis_dalam_ki);
                    $('#jenis_luar_ka').val(data.jenis_luar_ka);
                    $('#jenis_dalam_ka').val(data.jenis_dalam_ka);
                    $('#posisi_luar_ki').val(data.posisi_luar_ki);
                    $('#posisi_dalam_ki').val(data.posisi_dalam_ki);
                    $('#posisi_luar_ka').val(data.posisi_luar_ka);
                    $('#posisi_dalam_ka').val(data.posisi_dalam_ka);
                    $('#kondisi_luar_ki').val(data.kondisi_luar_ki);
                    $('#kondisi_dalam_ki').val(data.kondisi_dalam_ki);
                    $('#kondisi_luar_ka').val(data.kondisi_luar_ka);
                    $('#kondisi_dalam_ka').val(data.kondisi_dalam_ka);
                }
            });
            $('#modaleditdatateknik2median').modal('show');
        });

        data_teknik_2_median();

        function data_teknik_2_median(ruas_km = "") {
            var datatable = $('#mytabledatateknik2median').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('JalanTol/get_datateknik2median') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "tebal_median",
                        class: "text-center"
                    },
                    {
                        data: "lebar_median",
                        class: "text-center"
                    },
                    {
                        data: "jenis_median",
                        class: "text-center"
                    },
                    {
                        data: "kondisi_median",
                        class: "text-center"
                    },
                    {
                        data: "lebar_luar_ki",
                        class: "text-center"
                    },
                    {
                        data: "lebar_dalam_ki",
                        class: "text-center"
                    },
                    {
                        data: "lebar_luar_ka",
                        class: "text-center"
                    },
                    {
                        data: "lebar_dalam_ka",
                        class: "text-center"
                    },
                    {
                        data: "tebal_luar_ki",
                        class: "text-center"
                    },
                    {
                        data: "tebal_dalam_ki",
                        class: "text-center"
                    },
                    {
                        data: "tebal_luar_ka",
                        class: "text-center"
                    },
                    {
                        data: "tebal_dalam_ka",
                        class: "text-center"
                    },
                    {
                        data: "jenis_luar_ki",
                        class: "text-center"
                    },
                    {
                        data: "jenis_dalam_ki",
                        class: "text-center"
                    },
                    {
                        data: "jenis_luar_ka",
                        class: "text-center"
                    },
                    {
                        data: "jenis_dalam_ka",
                        class: "text-center"
                    },
                    {
                        data: "posisi_luar_ki",
                        class: "text-center"
                    },
                    {
                        data: "posisi_dalam_ki",
                        class: "text-center"
                    },
                    {
                        data: "posisi_luar_ka",
                        class: "text-center"
                    },
                    {
                        data: "posisi_dalam_ka",
                        class: "text-center"
                    },
                    {
                        data: "kondisi_luar_ki",
                        class: "text-center"
                    },
                    {
                        data: "kondisi_dalam_ki",
                        class: "text-center"
                    },
                    {
                        data: "kondisi_luar_ka",
                        class: "text-center"
                    },
                    {
                        data: "kondisi_dalam_ka",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#mytabledatateknik2median').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_teknik_2_median";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytabledatateknik2median').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytabledatateknik2median').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_teknik_2_median"
                },
                success: function(data) {
                    console.log(data)
                    $('#id_data_teknik_2_median').val(data.id_data_teknik_2_median);
                    $('#ruas_km_2_median').val(data.ruas_km);
                    $('#tebal_median').val(data.tebal_median);
                    $('#lebar_median').val(data.lebar_median);
                    $('#jenis_median').val(data.jenis_median);
                    $('#kondisi_median').val(data.kondisi_median);
                    $('#lebar_luar_ki').val(data.lebar_luar_ki);
                    $('#lebar_dalam_ki').val(data.lebar_dalam_ki);
                    $('#lebar_luar_ka').val(data.lebar_luar_ka);
                    $('#lebar_dalam_ka').val(data.lebar_dalam_ka);
                    $('#tebal_luar_ki').val(data.tebal_luar_ki);
                    $('#tebal_dalam_ki').val(data.tebal_dalam_ki);
                    $('#tebal_luar_ka').val(data.tebal_luar_ka);
                    $('#tebal_dalam_ka').val(data.tebal_dalam_ka);
                    $('#jenis_luar_ki').val(data.jenis_luar_ki);
                    $('#jenis_dalam_ki').val(data.jenis_dalam_ki);
                    $('#jenis_luar_ka').val(data.jenis_luar_ka);
                    $('#jenis_dalam_ka').val(data.jenis_dalam_ka);
                    $('#posisi_luar_ki').val(data.posisi_luar_ki);
                    $('#posisi_dalam_ki').val(data.posisi_dalam_ki);
                    $('#posisi_luar_ka').val(data.posisi_luar_ka);
                    $('#posisi_dalam_ka').val(data.posisi_dalam_ka);
                    $('#kondisi_luar_ki').val(data.kondisi_luar_ki);
                    $('#kondisi_dalam_ki').val(data.kondisi_dalam_ki);
                    $('#kondisi_luar_ka').val(data.kondisi_luar_ka);
                    $('#kondisi_dalam_ka').val(data.kondisi_dalam_ka);
                }
            });
            $('#modaleditdatateknik2median').modal('show');
        });

        $('#formeditdatateknik2median').submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditdatateknik2median').serialize();

            $.ajax({
                url: "<?php echo base_url("jalantol/editdatateknik2median") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditdatateknik2median')[0].reset();
                        $('#modaleditdatateknik2median').modal('hide');
                        $('#mytabledatateknik2median').DataTable().ajax.reload();
                        $('#rampmytabledatateknik2median').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        })

        data_teknik_2_ramp();

        function data_teknik_2_ramp(ruas_km = "") {
            var datatable = $('#rampmytabledatateknik2').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('ramp/get_datateknik2') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "lebar_lajur_1_ki",
                        class: "text-center"
                    },
                    {
                        data: "tebal_lajur_1_ki",
                        class: "text-center"
                    },
                    {
                        data: "jenis_lajur_1_ki",
                        class: "text-center"
                    },
                    {
                        data: "iri_lajur_1_ki",
                        class: "text-center"
                    },
                    {
                        data: "lebar_lajur_2_ki",
                        class: "text-center"
                    },
                    {
                        data: "tebal_lajur_2_ki",
                        class: "text-center"
                    },
                    {
                        data: "jenis_lajur_2_ki",
                        class: "text-center"
                    },
                    {
                        data: "iri_lajur_2_ki",
                        class: "text-center"
                    },
                    {
                        data: "lebar_lajur_2_ka",
                        class: "text-center"
                    },
                    {
                        data: "tebal_lajur_2_ka",
                        class: "text-center"
                    },
                    {
                        data: "jenis_lajur_2_ka",
                        class: "text-center"
                    },
                    {
                        data: "iri_lajur_2_ka",
                        class: "text-center"
                    },
                    {
                        data: "lebar_lajur_1_ka",
                        class: "text-center"
                    },
                    {
                        data: "tebal_lajur_1_ka",
                        class: "text-center"
                    },
                    {
                        data: "jenis_lajur_1_ka",
                        class: "text-center"
                    },
                    {
                        data: "iri_lajur_1_ka",
                        class: "text-center"
                    },
                    {
                        data: "lebar_lpa",
                        class: "text-center"
                    },
                    {
                        data: "tebal_lpa",
                        class: "text-center"
                    },
                    {
                        data: "jenis_lpa",
                        class: "text-center"
                    },
                    {
                        data: "lebar_lpb",
                        class: "text-center"
                    },
                    {
                        data: "tebal_lpb",
                        class: "text-center"
                    },
                    {
                        data: "jenis_lpb",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#rampmytabledatateknik2').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_teknik_2";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#rampmytabledatateknik2').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#rampmytabledatateknik2').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_teknik_2"
                },
                success: function(data) {
                    console.log(data)
                    $('#id_data_teknik_2').val(data.id_data_teknik_2);
                    $('#ruas_km_2').val(data.ruas_km);
                    $('#lebar_lajur_1_ki').val(data.lebar_lajur_1_ki);
                    $('#tebal_lajur_1_ki').val(data.tebal_lajur_1_ki);
                    $('#jenis_lajur_1_ki').val(data.jenis_lajur_1_ki);
                    $('#iri_lajur_1_ki').val(data.iri_lajur_1_ki);
                    $('#lebar_lajur_2_ki').val(data.lebar_lajur_2_ki);
                    $('#tebal_lajur_2_ki').val(data.tebal_lajur_2_ki);
                    $('#jenis_lajur_2_ki').val(data.jenis_lajur_2_ki);
                    $('#iri_lajur_2_ki').val(data.iri_lajur_2_ki);
                    $('#lebar_lajur_2_ka').val(data.lebar_lajur_2_ka);
                    $('#tebal_lajur_2_ka').val(data.tebal_lajur_2_ka);
                    $('#jenis_lajur_2_ka').val(data.jenis_lajur_2_ka);
                    $('#iri_lajur_2_ka').val(data.iri_lajur_2_ka);
                    $('#lebar_lajur_1_ka').val(data.lebar_lajur_1_ka);
                    $('#tebal_lajur_1_ka').val(data.tebal_lajur_1_ka);
                    $('#jenis_lajur_1_ka').val(data.jenis_lajur_1_ka);
                    $('#iri_lajur_1_ka').val(data.iri_lajur_1_ka);
                    $('#lebar_lpa').val(data.lebar_lpa);
                    $('#tebal_lpa').val(data.tebal_lpa);
                    $('#jenis_lpa').val(data.jenis_lpa);
                    $('#lebar_lpb').val(data.lebar_lpb);
                    $('#tebal_lpb').val(data.tebal_lpb);
                    $('#jenis_lpb').val(data.jenis_lpb);
                }
            });
            $('#modaleditdatateknik2').modal('show');
        });

        data_teknik_2();

        function data_teknik_2(ruas_km = "") {
            var datatable = $('#mytabledatateknik2').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('JalanTol/get_datateknik2') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    },
                    {
                        data: "lebar_lajur_1_ki",
                        class: "text-center"
                    },
                    {
                        data: "tebal_lajur_1_ki",
                        class: "text-center"
                    },
                    {
                        data: "jenis_lajur_1_ki",
                        class: "text-center"
                    },
                    {
                        data: "iri_lajur_1_ki",
                        class: "text-center"
                    },
                    {
                        data: "lebar_lajur_2_ki",
                        class: "text-center"
                    },
                    {
                        data: "tebal_lajur_2_ki",
                        class: "text-center"
                    },
                    {
                        data: "jenis_lajur_2_ki",
                        class: "text-center"
                    },
                    {
                        data: "iri_lajur_2_ki",
                        class: "text-center"
                    },
                    {
                        data: "lebar_lajur_2_ka",
                        class: "text-center"
                    },
                    {
                        data: "tebal_lajur_2_ka",
                        class: "text-center"
                    },
                    {
                        data: "jenis_lajur_2_ka",
                        class: "text-center"
                    },
                    {
                        data: "iri_lajur_2_ka",
                        class: "text-center"
                    },
                    {
                        data: "lebar_lajur_1_ka",
                        class: "text-center"
                    },
                    {
                        data: "tebal_lajur_1_ka",
                        class: "text-center"
                    },
                    {
                        data: "jenis_lajur_1_ka",
                        class: "text-center"
                    },
                    {
                        data: "iri_lajur_1_ka",
                        class: "text-center"
                    },
                    {
                        data: "lebar_lpa",
                        class: "text-center"
                    },
                    {
                        data: "tebal_lpa",
                        class: "text-center"
                    },
                    {
                        data: "jenis_lpa",
                        class: "text-center"
                    },
                    {
                        data: "lebar_lpb",
                        class: "text-center"
                    },
                    {
                        data: "tebal_lpb",
                        class: "text-center"
                    },
                    {
                        data: "jenis_lpb",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#mytabledatateknik2').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_teknik_2";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytabledatateknik2').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytabledatateknik2').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_teknik_2"
                },
                success: function(data) {
                    console.log(data)
                    $('#id_data_teknik_2').val(data.id_data_teknik_2);
                    $('#ruas_km_2').val(data.ruas_km);
                    $('#lebar_lajur_1_ki').val(data.lebar_lajur_1_ki);
                    $('#tebal_lajur_1_ki').val(data.tebal_lajur_1_ki);
                    $('#jenis_lajur_1_ki').val(data.jenis_lajur_1_ki);
                    $('#iri_lajur_1_ki').val(data.iri_lajur_1_ki);
                    $('#lebar_lajur_2_ki').val(data.lebar_lajur_2_ki);
                    $('#tebal_lajur_2_ki').val(data.tebal_lajur_2_ki);
                    $('#jenis_lajur_2_ki').val(data.jenis_lajur_2_ki);
                    $('#iri_lajur_2_ki').val(data.iri_lajur_2_ki);
                    $('#lebar_lajur_2_ka').val(data.lebar_lajur_2_ka);
                    $('#tebal_lajur_2_ka').val(data.tebal_lajur_2_ka);
                    $('#jenis_lajur_2_ka').val(data.jenis_lajur_2_ka);
                    $('#iri_lajur_2_ka').val(data.iri_lajur_2_ka);
                    $('#lebar_lajur_1_ka').val(data.lebar_lajur_1_ka);
                    $('#tebal_lajur_1_ka').val(data.tebal_lajur_1_ka);
                    $('#jenis_lajur_1_ka').val(data.jenis_lajur_1_ka);
                    $('#iri_lajur_1_ka').val(data.iri_lajur_1_ka);
                    $('#lebar_lpa').val(data.lebar_lpa);
                    $('#tebal_lpa').val(data.tebal_lpa);
                    $('#jenis_lpa').val(data.jenis_lpa);
                    $('#lebar_lpb').val(data.lebar_lpb);
                    $('#tebal_lpb').val(data.tebal_lpb);
                    $('#jenis_lpb').val(data.jenis_lpb);
                }
            });
            $('#modaleditdatateknik2').modal('show');
        });

        $('#formeditdatateknik2').submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditdatateknik2').serialize();

            $.ajax({
                url: "<?php echo base_url("jalantol/editdatateknik2") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditdatateknik2')[0].reset();
                        $('#modaleditdatateknik2').modal('hide');
                        $('#mytabledatateknik2').DataTable().ajax.reload();
                        $('#rampmytabledatateknik2').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        })

        data_teknik_1_ramp();

        function data_teknik_1_ramp(ruas_km = "") {
            var datatable = $('#rampmytabledatateknik1').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('ramp/get_datateknik1') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    }, {
                        data: "luas_lr",
                        class: "text-center"
                    },
                    {
                        data: "data_lr",
                        class: "text-center"
                    },
                    {
                        data: "nilai_lr",
                        class: "text-center"
                    },
                    {
                        data: "luas_pj",
                        class: "text-center"
                    },
                    {
                        data: "data_pj",
                        class: "text-center"
                    },
                    {
                        data: "nilai_pj",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#rampmytabledatateknik1').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_teknik_1";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#rampmytabledatateknik1').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#rampmytabledatateknik1').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_teknik_1"
                },
                success: function(data) {
                    console.log(data)
                    $('#id_data_teknik_1').val(data.id_data_teknik_1);
                    $('#ruas_km_1').val(data.ruas_km);
                    $('#luas_lr').val(data.luas_lr);
                    $('#data_lr').val(data.data_lr);
                    $('#nilai_lr').val(data.nilai_lr);
                    $('#luas_pj').val(data.luas_pj);
                    $('#data_pj').val(data.data_pj);
                    $('#nilai_pj').val(data.nilai_pj);
                }
            });
            $('#modaleditdatateknik1').modal('show');
        });

        data_teknik_1();

        function data_teknik_1(ruas_km = "") {
            var datatable = $('#mytabledatateknik1').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('JalanTol/get_datateknik1') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                // scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas_km",
                        class: "text-center",
                    }, {
                        data: "luas_lr",
                        class: "text-center"
                    },
                    {
                        data: "data_lr",
                        class: "text-center"
                    },
                    {
                        data: "nilai_lr",
                        class: "text-center"
                    },
                    {
                        data: "luas_pj",
                        class: "text-center"
                    },
                    {
                        data: "data_pj",
                        class: "text-center"
                    },
                    {
                        data: "nilai_pj",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#mytabledatateknik1').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "data_teknik_1";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytabledatateknik1').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytabledatateknik1').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "data_teknik_1"
                },
                success: function(data) {
                    console.log(data)
                    $('#id_data_teknik_1').val(data.id_data_teknik_1);
                    $('#ruas_km_1').val(data.ruas_km);
                    $('#luas_lr').val(data.luas_lr);
                    $('#data_lr').val(data.data_lr);
                    $('#nilai_lr').val(data.nilai_lr);
                    $('#luas_pj').val(data.luas_pj);
                    $('#data_pj').val(data.data_pj);
                    $('#nilai_pj').val(data.nilai_pj);
                }
            });
            $('#modaleditdatateknik1').modal('show');
        });

        $('#formeditdatateknik1').submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditdatateknik1').serialize();

            $.ajax({
                url: "<?php echo base_url("jalantol/editdatateknik1") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditdatateknik1')[0].reset();
                        $('#modaleditdatateknik1').modal('hide');
                        $('#mytabledatateknik1').DataTable().ajax.reload();
                        $('#rampmytabledatateknik1').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        })

        table_lokasi();

        function table_lokasi(ruas_km = "") {
            var datatable = $('#mytablelokasi').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('JalanTol/get_identifikasi') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "tahun",
                        class: "text-center",
                    }, {
                        data: "provinsi",
                        class: "text-center"
                    },
                    {
                        data: "kabupaten",
                        class: "text-center"
                    },
                    {
                        data: "kecamatan",
                        class: "text-center"
                    },
                    {
                        data: "desa",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        table_identifikasi_ramp();

        function table_identifikasi_ramp(ruas_km = "") {
            var dataTable1 = $('#rampmytableidentifikasi').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('ramp/get_identifikasi') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas",
                        class: "text-center",
                    }, {
                        data: "seksi",
                        class: "text-center"
                    },
                    {
                        data: "sta_awal",
                        class: "text-center"
                    },
                    {
                        data: "sta_akhir",
                        class: "text-center"
                    },
                    {
                        data: "x_awal",
                        class: "text-center"
                    },
                    {
                        data: "y_awal",
                        class: "text-center"
                    },
                    {
                        data: "z_awal",
                        class: "text-center"
                    },
                    {
                        data: "deskripsi_awal",
                        class: "text-center"
                    },
                    {
                        data: "x_akhir",
                        class: "text-center"
                    },
                    {
                        data: "y_akhir",
                        class: "text-center"
                    },
                    {
                        data: "z_akhir",
                        class: "text-center"
                    },
                    {
                        data: "deskripsi_akhir",
                        class: "text-center"
                    },
                    {
                        data: "tahun",
                        class: "text-center",
                    }, {
                        data: "provinsi",
                        class: "text-center"
                    },
                    {
                        data: "kabupaten",
                        class: "text-center"
                    },
                    {
                        data: "kecamatan",
                        class: "text-center"
                    },
                    {
                        data: "desa",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#rampmytableidentifikasi').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "identifikasi";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#rampmytableidentifikasi').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#rampmytableidentifikasi').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "identifikasi"
                },
                success: function(data) {
                    $('#id_identifikasi').val(data.id_identifikasi);
                    $('#ruas').val(data.ruas);
                    $('#ruas_km_val').val(data.ruas_km);
                    $('#seksi_ruas').val(data.seksi);
                    $('#sta_awal').val(data.sta_awal);
                    $('#x_awal').val(data.x_awal);
                    $('#y_awal').val(data.y_awal);
                    $('#z_awal').val(data.z_awal);
                    $('#deskripsi_awal').val(data.deskripsi_awal);
                    $('#sta_akhir').val(data.sta_akhir);
                    $('#x_akhir').val(data.x_akhir);
                    $('#y_akhir').val(data.y_akhir);
                    $('#z_akhir').val(data.z_akhir);
                    $('#deskripsi_akhir').val(data.deskripsi_akhir);
                    $("#tahun").val(data.tahun).trigger('change');
                    var provinsi = "<option value='" + data.provinsi + "' selected>" + data.provinsi + "</option>";
                    $('#provinsi').html(provinsi)
                    var kabupaten = "<option value='" + data.kabupaten + "' selected>" + data.kabupaten + "</option>";
                    $('#kabupaten').html(kabupaten)
                    var kecamatan = "<option value='" + data.kecamatan + "' selected>" + data.kecamatan + "</option>";
                    $('#kecamatan').html(kecamatan)
                    var desa = "<option value='" + data.desa + "' selected>" + data.desa + "</option>";
                    $('#kelurahan').html(desa)
                }
            });
            $('#modaleditidentifikasi').modal('show');
        });

        table_identifikasi();

        function table_identifikasi(ruas_km = "") {
            var dataTable1 = $('#mytableidentifikasi').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('JalanTol/get_identifikasi') ?>",
                    type: 'post',
                    data: {
                        ruas_km: ruas_km
                    }
                },
                scrollX: true,
                scrollCollapse: true,
                "columns": [{
                        data: "ruas",
                        class: "text-center",
                    }, {
                        data: "seksi",
                        class: "text-center"
                    },
                    {
                        data: "sta_awal",
                        class: "text-center"
                    },
                    {
                        data: "sta_akhir",
                        class: "text-center"
                    },
                    {
                        data: "x_awal",
                        class: "text-center"
                    },
                    {
                        data: "y_awal",
                        class: "text-center"
                    },
                    {
                        data: "z_awal",
                        class: "text-center"
                    },
                    {
                        data: "deskripsi_awal",
                        class: "text-center"
                    },
                    {
                        data: "x_akhir",
                        class: "text-center"
                    },
                    {
                        data: "y_akhir",
                        class: "text-center"
                    },
                    {
                        data: "z_akhir",
                        class: "text-center"
                    },
                    {
                        data: "deskripsi_akhir",
                        class: "text-center"
                    },
                    {
                        data: "tahun",
                        class: "text-center",
                    }, {
                        data: "provinsi",
                        class: "text-center"
                    },
                    {
                        data: "kabupaten",
                        class: "text-center"
                    },
                    {
                        data: "kecamatan",
                        class: "text-center"
                    },
                    {
                        data: "desa",
                        class: "text-center"
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        orderable: false,
                    },
                ],
            });
        }

        $('#mytableidentifikasi').on('click', '.delete_record', function() {
            let id = $(this).data('id');
            var table = "identifikasi";

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("jalantol/delete_data") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id": id,
                            "table": table
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytableidentifikasi').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytableidentifikasi').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("jalantol/getdatabyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "table": "identifikasi"
                },
                success: function(data) {
                    $('#id_identifikasi').val(data.id_identifikasi);
                    $('#ruas').val(data.ruas);
                    $('#ruas_km_val').val(data.ruas_km);
                    $('#seksi_ruas').val(data.seksi);
                    $('#sta_awal').val(data.sta_awal);
                    $('#x_awal').val(data.x_awal);
                    $('#y_awal').val(data.y_awal);
                    $('#z_awal').val(data.z_awal);
                    $('#deskripsi_awal').val(data.deskripsi_awal);
                    $('#sta_akhir').val(data.sta_akhir);
                    $('#x_akhir').val(data.x_akhir);
                    $('#y_akhir').val(data.y_akhir);
                    $('#z_akhir').val(data.z_akhir);
                    $('#deskripsi_akhir').val(data.deskripsi_akhir);
                    $("#tahun").val(data.tahun).trigger('change');
                    var provinsi = "<option value='" + data.provinsi + "' selected>" + data.provinsi + "</option>";
                    $('#provinsi').html(provinsi)
                    var kabupaten = "<option value='" + data.kabupaten + "' selected>" + data.kabupaten + "</option>";
                    $('#kabupaten').html(kabupaten)
                    var kecamatan = "<option value='" + data.kecamatan + "' selected>" + data.kecamatan + "</option>";
                    $('#kecamatan').html(kecamatan)
                    var desa = "<option value='" + data.desa + "' selected>" + data.desa + "</option>";
                    $('#kelurahan').html(desa)
                }
            });
            $('#modaleditidentifikasi').modal('show');
        });

        $('#formeditidentifikasi').submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditidentifikasi').serialize();

            $.ajax({
                url: "<?php echo base_url("jalantol/editidentifikasi") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditidentifikasi')[0].reset();
                        $('#modaleditidentifikasi').modal('hide');
                        $('#mytableidentifikasi').DataTable().ajax.reload();
                        $('#rampmytableidentifikasi').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        })

        $('#ruas_km_ramp').change(function() {
            var ruas_km = $('#ruas_km_ramp').val();
            $('#rampmytableidentifikasi').DataTable().destroy();
            table_identifikasi_ramp(ruas_km);
            $('#rampmytabledatateknik1').DataTable().destroy();
            data_teknik_1_ramp(ruas_km);
            $('#rampmytabledatateknik2').DataTable().destroy();
            data_teknik_2_ramp(ruas_km);
            $('#rampmytabledatateknik2median').DataTable().destroy();
            data_teknik_2_median_ramp(ruas_km);
            $('#rampmytabledatateknik3').DataTable().destroy();
            data_teknik_3_ramp(ruas_km);
            $('#rampmytabledatateknik4').DataTable().destroy();
            data_teknik_4_ramp(ruas_km);
            $('#rampmytabledatateknik5').DataTable().destroy();
            data_teknik_5_ramp(ruas_km);
            $('#rampmytabledatalainnya').DataTable().destroy();
            data_lainnya_ramp(ruas_km);
            $('#rampmytabledatalintasan').DataTable().destroy();
            data_lintasan_ramp(ruas_km);
            $('#rampmytabledatageometrik').DataTable().destroy();
            data_geometrik_ramp(ruas_km);
            $('#rampmytabledatalingkungan').DataTable().destroy();
            data_lingkungan_ramp(ruas_km);
        })

        $('#ruas_km').change(function() {
            var ruas_km = $('#ruas_km').val();
            $('#mytableidentifikasi').DataTable().destroy();
            table_identifikasi(ruas_km);
            $('#mytablelokasi').DataTable().destroy();
            table_lokasi(ruas_km);
            $('#mytabledatateknik1').DataTable().destroy();
            data_teknik_1(ruas_km);
            $('#mytabledatateknik2').DataTable().destroy();
            data_teknik_2(ruas_km);
            $('#mytabledatateknik2median').DataTable().destroy();
            data_teknik_2_median(ruas_km);
            $('#mytabledatateknik3').DataTable().destroy();
            data_teknik_3(ruas_km);
            $('#mytabledatateknik4').DataTable().destroy();
            data_teknik_4(ruas_km);
            $('#mytabledatateknik5').DataTable().destroy();
            data_teknik_5(ruas_km);
            $('#mytabledatalainnya').DataTable().destroy();
            data_lainnya(ruas_km);
            $('#mytabledatalintasan').DataTable().destroy();
            data_lintasan(ruas_km);
            $('#mytabledatageometrik').DataTable().destroy();
            data_geometrik(ruas_km);
            $('#mytabledatalingkungan').DataTable().destroy();
            data_lingkungan(ruas_km);
        })

        $('#mytableJalanTol').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?php echo base_url('JalanTol/getJalanTol') ?>",
                type: 'post',
            },
            "columns": [{
                    data: "A",
                    class: "text-center",
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                }, {
                    data: "A",
                    class: "text-center"
                },
                {
                    data: "B",
                    class: "text-center"
                },
                {
                    data: "C",
                    class: "text-center"
                },
                {
                    data: "D",
                    class: "text-center"
                },
                {
                    data: "E",
                    class: "text-center"
                },
                {
                    data: "F",
                    class: "text-center"
                },
            ],
        });

        $('#mytableuser').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?php echo base_url('user/get_user') ?>",
                type: 'post',
            },
            "columns": [{
                    data: "user_id",
                    class: "text-center",
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "name",
                    class: "text-center"
                },
                {
                    data: "level",
                    class: "text-center",
                    render: function(data, type, row, meta) {
                        if (data == 1) {
                            return "Superadmin";
                        } else if (data == 2) {
                            return "Admin";
                        } else if (data == 3) {
                            return "Petugas";
                        } else {
                            return "User";
                        }
                    }
                },
                {
                    data: "aksi",
                    class: "text-center",
                    width: 150,
                    orderable: false
                }
            ],
        });

        $("#formadduser").submit(function(e) {
            e.preventDefault();
            let dataString = $('#formadduser').serialize();

            $.ajax({
                url: "<?php echo base_url("user/tambah_user") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formadduser')[0].reset();
                        $('#tambahDatauser').modal('hide');
                        $('#mytableuser').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        });

        $("#button_show_password").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("fa-eye-slash");
                $('#show_hide_password i').removeClass("fa-eye");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("fa-eye-slash");
                $('#show_hide_password i').addClass("fa-eye");
            }
        })

        $("#button_show_ulangi_password").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_ulangi_password input').attr("type") == "text") {
                $('#show_hide_ulangi_password input').attr('type', 'password');
                $('#show_hide_ulangi_password i').addClass("fa-eye-slash");
                $('#show_hide_ulangi_password i').removeClass("fa-eye");
            } else if ($('#show_hide_ulangi_password input').attr("type") == "password") {
                $('#show_hide_ulangi_password input').attr('type', 'text');
                $('#show_hide_ulangi_password i').removeClass("fa-eye-slash");
                $('#show_hide_ulangi_password i').addClass("fa-eye");
            }
        })

        $('#mytableuser').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("user/getuserbyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "user_id": id
                },
                success: function(data) {
                    $("#edit_user_id").val(data.user_id);
                    $("#edit_nama_user").val(data.name);
                    $("#edit_username").val(data.username);
                    $("#edit_level").val(data.level).trigger('change');
                }
            });
            $('#editDataUser').modal('show');
        });

        $("#edit_button_show_password").on('click', function(event) {
            event.preventDefault();
            if ($('#edit_show_hide_password input').attr("type") == "text") {
                $('#edit_show_hide_password input').attr('type', 'password');
                $('#edit_show_hide_password i').addClass("fa-eye-slash");
                $('#edit_show_hide_password i').removeClass("fa-eye");
            } else if ($('#edit_show_hide_password input').attr("type") == "password") {
                $('#edit_show_hide_password input').attr('type', 'text');
                $('#edit_show_hide_password i').removeClass("fa-eye-slash");
                $('#edit_show_hide_password i').addClass("fa-eye");
            }
        })

        $("#edit_button_show_ulangi_password").on('click', function(event) {
            event.preventDefault();
            if ($('#edit_show_hide_ulangi_password input').attr("type") == "text") {
                $('#edit_show_hide_ulangi_password input').attr('type', 'password');
                $('#edit_show_hide_ulangi_password i').addClass("fa-eye-slash");
                $('#edit_show_hide_ulangi_password i').removeClass("fa-eye");
            } else if ($('#edit_show_hide_ulangi_password input').attr("type") == "password") {
                $('#edit_show_hide_ulangi_password input').attr('type', 'text');
                $('#edit_show_hide_ulangi_password i').removeClass("fa-eye-slash");
                $('#edit_show_hide_ulangi_password i').addClass("fa-eye");
            }
        })

        $("#formedituser").submit(function(e) {
            e.preventDefault();
            let dataString = $('#formedituser').serialize();

            $.ajax({
                url: "<?php echo base_url("user/edit_user") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formedituser')[0].reset();
                        $('#editDataUser').modal('hide');
                        $('#mytableuser').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        });

        $('#mytableuser').on('click', '.delete_record', function() {
            let id = $(this).data('id');

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("user/delete_user") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "user_id": id
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytableuser').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytabledataspasial').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?php echo base_url('JalanTol/get_dataspasial') ?>",
                type: 'post',
                
            },
            "columns": [{
                    data: "id_atribut",
                    class: "text-center",
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "nama_atribut_batasan",
                    class: "text-center",
                    render: function(data, type, row, meta) {
                        return data.toUpperCase();
                    }
                },
                {
                    data: "geojson_atribut",
                    class: "text-center"
                },
                {
                    data: "nama_spasial",
                    class: "text-center",
                },
                {
                    data: "aksi",
                    class: "text-center",
                    width: 150,
                    orderable: false
                }
            ],
        });

        $("#formaddspasial").submit(function(e) {
            e.preventDefault();
            // let dataString = $('#formaddspasial').serialize();

            $.ajax({
                url: "<?php echo base_url("JalanTol/tambah_dataspasial") ?>",
                type: 'post',
                dataType: 'json',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formaddspasial')[0].reset();
                        $('#tambahDataSpasial').modal('hide');
                        $('#mytabledataspasial').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        });

        $('#mytabledataspasial').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("JalanTol/getspasialbyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id_atribut": id
                },
                success: function(data) {
                    console.log(data)
                    $("#id_atribut").val(data.id_atribut);
                    $("#nama_atribut").val(data.nama_atribut);
                    $("#nama_spasial").val(data.nama_spasial);
                }
            });
            $('#editDataSpasial').modal('show');
        });

        $("#formeditspasial").submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditspasial').serialize();

            $.ajax({
                url: "<?php echo base_url("JalanTol/edit_spasial") ?>",
                type: 'post',
                dataType: 'json',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditspasial')[0].reset();
                        $('#editDataSpasial').modal('hide');
                        $('#mytabledataspasial').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        });

        $('#mytabledataspasial').on('click', '.delete_record', function() {
            let id = $(this).data('id');

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("JalanTol/delete_spasial") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id_atribut": id
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytabledataspasial').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });
        $('#mytabledataspasial_ramp').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?php echo base_url('Ramp/get_dataspasial') ?>",
                type: 'post',
            },
            "columns": [{
                    data: "id_atribut",
                    class: "text-center",
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "nama_atribut_batasan",
                    class: "text-center",
                    render: function(data, type, row, meta) {
                        return data.toUpperCase();
                    }
                },
                {
                    data: "geojson_atribut",
                    class: "text-center"
                },
                {
                    data: "nama_spasial",
                    class: "text-center"
                },
                {
                    data: "aksi",
                    class: "text-center",
                    width: 150,
                    orderable: false
                }
            ],
        });

        $("#formaddspasial_ramp").submit(function(e) {
            e.preventDefault();
            // let dataString = $('#formaddspasial').serialize();

            $.ajax({
                url: "<?php echo base_url("ramp/tambah_dataspasial") ?>",
                type: 'post',
                dataType: 'json',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formaddspasial_ramp')[0].reset();
                        $('#tambahDataSpasial_ramp').modal('hide');
                        $('#mytabledataspasial_ramp').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        });

        $('#mytabledataspasial_ramp').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("ramp/getspasialbyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id_atribut": id
                },
                success: function(data) {
                    console.log(data)
                    $("#id_atribut").val(data.id_atribut);
                    $("#nama_atribut").val(data.nama_atribut);
                    $("#nama_spasial").val(data.nama_spasial);
                }
            });
            $('#editDataSpasial_ramp').modal('show');
        });

        $("#formeditspasial_ramp").submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditspasial_ramp').serialize();

            $.ajax({
                url: "<?php echo base_url("ramp/edit_spasial") ?>",
                type: 'post',
                dataType: 'json',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditspasial_ramp')[0].reset();
                        $('#editDataSpasial_ramp').modal('hide');
                        $('#mytabledataspasial_ramp').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        });

        $('#mytabledataspasial_ramp').on('click', '.delete_record', function() {
            let id = $(this).data('id');

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("ramp/delete_spasial") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "id_atribut": id
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytabledataspasial_ramp').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytablelayanan').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?php echo base_url('layanan/get_layanan') ?>",
                type: 'post',
            },
            "columns": [{
                    data: "kd_layanan",
                    class: "text-center",
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "nama_layanan",
                    class: "text-center"
                },
                {
                    data: "aksi",
                    class: "text-center",
                    width: 150,
                    orderable: false
                }
            ],
        });

        $("#formaddlayanan").submit(function(e) {
            e.preventDefault();
            let dataString = $('#formaddlayanan').serialize();

            $.ajax({
                url: "<?php echo base_url("layanan/tambah_layanan") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formaddlayanan')[0].reset();
                        $('#tambahDataLayanan').modal('hide');
                        $('#mytablelayanan').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        });

        $('#mytablelayanan').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("layanan/getlayananbyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "kd_layanan": id
                },
                success: function(data) {
                    $("#kd_layanan_edit").val(data.kd_layanan);
                    $("#nama_layanan_edit").val(data.nama_layanan);
                }
            });
            $('#editDataLayanan').modal('show');
        });

        $("#formeditlayanan").submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditlayanan').serialize();

            $.ajax({
                url: "<?php echo base_url("layanan/edit_layanan") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formeditlayanan')[0].reset();
                        $('#editDataLayanan').modal('hide');
                        $('#mytablelayanan').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        });

        $('#mytablelayanan').on('click', '.delete_record', function() {
            let id = $(this).data('id');

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("layanan/delete_layanan") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            "kd_layanan": id
                        },
                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytablelayanan').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });

        });

        $('#mytablelksDashboard').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?php echo base_url('datalks/get_lks_dashboard') ?>",
                type: 'post',
            },
            "columns": [{
                    data: "id_lks",
                    class: "text-center",
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "nama_lks",
                    class: "text-center"
                },
                {
                    data: "alamat_lks",
                    class: "text-center"
                },
                {
                    data: "nama_pimpinan",
                    class: "text-center"
                },
                {
                    data: "jenis_layanan",
                    class: "text-center"
                },
                {
                    data: "status",
                    class: "text-center",
                    render: function(data, type, row, meta) {
                        if (data == "Aktif") {
                            return '<label class="badge badge-success">Aktif</label>';
                        } else if (data == "Non Aktif") {
                            return '<label class="badge badge-danger">Non Aktif</label>';
                        } else {
                            return '<label class="badge badge-warning">No Selected</label>';
                        }
                    }
                },
                {
                    data: "aksi",
                    class: "text-center",
                    width: 150,
                    orderable: false
                }
            ],
        });

        $('#mytablelksDashboard').on('click', '.detail_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("datalks/getlksbyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id_lks": id
                },
                success: function(data) {
                    $("#txt_id_lks").html(": " + data.id_lks);
                    $("#txt_nama_lks").html(": " + data.nama_lks);
                    $("#txt_alamat_lks").html(": " + data.alamat_lks);
                    $("#txt_nama_pimpinan").html(": " + data.nama_pimpinan);
                    $("#txt_jenis_layanan").html(": " + data.jenis_layanan);
                    $("#txt_dalam_lks").html(": " + data.dalam_lks);
                    $("#txt_luar_lks").html(": " + data.luar_lks);
                    $("#txt_akta_notaris").html(": " + data.akta_notaris);
                    $("#txt_kabupaten").html(": " + data.kabupaten);
                    $("#txt_provinsi").html(": " + data.provinsi);
                    $("#txt_akreditasi").html(": " + data.akreditasi);
                    $("#txt_no_kontak").html(": " + data.no_kontak);
                    $("#txt_masadari").html(": " + data.masadari);
                    $("#txt_masahingga").html(": " + data.masahingga);
                    $("#txt_status").html(": " + data.status);
                }
            });
            $('#detaiModal').modal('show');
        });

        data_lks();

        function data_lks(kabupaten = "", status = "") {
            var dataTable = $('#mytablelks').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                fixedColumns: {
                    leftColumns: 2
                },
                scrollY: 400,
                scrollX: true,
                fixedColumns: true,
                "ajax": {
                    url: "<?php echo base_url('datalks/get_lks') ?>",
                    type: 'post',
                    type: "POST",
                    data: {
                        kabupaten: kabupaten,
                        status: status,
                    }
                },
                "columns": [{
                        data: "id_lks",
                        class: "text-center",
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: "nama_lks",
                        class: "text-center"
                    },
                    {
                        data: "alamat_lks",
                        class: "text-center"
                    },
                    {
                        data: "nama_pimpinan",
                        class: "text-center"
                    },
                    {
                        data: "jenis_layanan",
                        class: "text-center"
                    },
                    {
                        data: "dalam_lks",
                        class: "text-center"
                    },
                    {
                        data: "luar_lks",
                        class: "text-center"
                    },
                    {
                        data: "akta_notaris",
                        class: "text-center"
                    },
                    {
                        data: "kabupaten",
                        class: "text-center"
                    },
                    {
                        data: "provinsi",
                        class: "text-center"
                    },
                    {
                        data: "akreditasi",
                        class: "text-center"
                    },
                    {
                        data: "no_kontak",
                        class: "text-center"
                    },
                    {
                        data: "masadari",
                        class: "text-center",
                        render: function(data, type, row, meta) {
                            if (data != "") {
                                return ubah_tanggal(data);
                            } else {
                                return "";
                            }
                        }
                    },
                    {
                        data: "masahingga",
                        class: "text-center",
                        render: function(data, type, row, meta) {
                            if (data != "") {
                                return ubah_tanggal(data);
                            } else {
                                return "";
                            }
                        }
                    },
                    {
                        data: "status",
                        class: "text-center",
                        render: function(data, type, row, meta) {
                            if (data == "Aktif") {
                                return '<label class="badge badge-success">Aktif</label>';
                            } else if (data == "Non Aktif") {
                                return '<label class="badge badge-danger">Non Aktif</label>';
                            } else {
                                return '<label class="badge badge-warning">No Selected</label>';
                            }
                        }
                    },
                    {
                        data: "aksi",
                        class: "text-center",
                        width: 150,
                        orderable: false
                    }
                ],
            });
        }

        $('#pilihkabupaten').on('change', function() {
            var kabupaten = $('#pilihkabupaten').val();
            var status = $('#pilihstatus').val();
            $('#mytablelks').DataTable().destroy();
            data_lks(kabupaten, status);
        });

        $('#pilihstatus').on('change', function() {
            var kabupaten = $('#pilihkabupaten').val();
            var status = $('#pilihstatus').val();
            $('#mytablelks').DataTable().destroy();
            data_lks(kabupaten, status);
        });

        $('#buttonprint').on('click', function() {
            var kabupaten = $('#pilihkabupaten').val();
            if (kabupaten == "") {
                kabupaten = "0";
            }
            var status = $('#pilihstatus').val();
            if (status == "") {
                status = "0";
            }
            window.location.href = "<?php echo base_url() ?>datalks/print_lks/" + kabupaten + "/" + status;
        });

        $('#mytablelks').on('click', '.detail_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("datalks/getlksbyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id_lks": id
                },
                success: function(data) {
                    $("#txt_id_lks").html(": " + data.id_lks);
                    $("#txt_nama_lks").html(": " + data.nama_lks);
                    $("#txt_alamat_lks").html(": " + data.alamat_lks);
                    $("#txt_nama_pimpinan").html(": " + data.nama_pimpinan);
                    $("#txt_jenis_layanan").html(": " + data.jenis_layanan);
                    $("#txt_dalam_lks").html(": " + data.dalam_lks);
                    $("#txt_luar_lks").html(": " + data.luar_lks);
                    $("#txt_akta_notaris").html(": " + data.akta_notaris);
                    $("#txt_kabupaten").html(": " + data.kabupaten);
                    $("#txt_provinsi").html(": " + data.provinsi);
                    $("#txt_akreditasi").html(": " + data.akreditasi);
                    $("#txt_no_kontak").html(": " + data.no_kontak);
                    $("#txt_masadari").html(": " + data.masadari);
                    $("#txt_masahingga").html(": " + data.masahingga);
                    $("#txt_status").html(": " + data.status);
                }
            });
            $('#detaiModal').modal('show');
        });

        $('#mytablelks').on('click', '.edit_record', function() {
            let id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("datalks/getlksbyid") ?>",
                type: 'post',
                dataType: 'json',
                data: {
                    "id_lks": id
                },
                success: function(data) {
                    $("#edit_id_lks").val(data.id_lks);
                    $("#edit_nama_lks").val(data.nama_lks);
                    $("#edit_alamat_lks").val(data.alamat_lks);
                    $("#edit_nama_pimpinan").val(data.nama_pimpinan);
                    $("#edit_jenis_layanan").val(data.jenis_layanan);
                    $("#edit_dalam_lks").val(data.dalam_lks);
                    $("#edit_luar_lks").val(data.luar_lks);
                    $("#edit_akta_notaris").val(data.akta_notaris);
                    $("#edit_kabupaten").val(data.kabupaten);
                    $("#edit_provinsi").val(data.provinsi);
                    $("#edit_akreditasi").val(data.akreditasi);
                    $("#edit_no_kontak").val(data.no_kontak);
                    $("#edit_masadari").val(data.masadari);
                    $("#edit_masahingga").val(data.masahingga);
                    $("#edit_status").val(data.status).trigger('change');
                }
            });
            $('#editDataLksModal').modal('show');
        });

        $("#formaddlks").submit(function(e) {
            e.preventDefault();
            let dataString = $('#formaddlks').serialize();

            $.ajax({
                url: "<?php echo base_url("datalks/tambah_lks") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $('#formaddlks')[0].reset();
                        $('#tambahDataLksModal').modal('hide');
                        $('#mytablelks').DataTable().ajax.reload();
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                }
            });
        });

        $("#formeditlks").submit(function(e) {
            e.preventDefault();
            let dataString = $('#formeditlks').serialize();

            $.ajax({
                url: "<?php echo base_url("datalks/edit_lks") ?>",
                type: 'post',
                dataType: 'json',
                data: dataString,

                success: function(data) {
                    if (data.response == "success") {
                        $(".flash-data1").html(data.message);
                        $(".error-data1").html("");
                    } else {
                        $(".error-data1").html(data.message);
                        $(".flash-data1").html("");
                    }
                    toast();
                    $('#editDataLksModal').modal('hide');
                    $('#mytablelks').DataTable().ajax.reload();
                    $('#formeditlks')[0].reset();
                }
            });
        });

        $('#mytablelks').on('click', '.hapus_record', function() {
            let id = $(this).data('id');

            Swal.fire({
                title: "Apa Kamu Yakin?",
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus saja!",
                cancelButtonText: "Batal!",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "<?php echo base_url("datalks/hapus_lks") ?>",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            id_lks: id
                        },

                        success: function(data) {
                            if (data.response == "success") {
                                $('#mytablelks').DataTable().ajax.reload();
                                $(".flash-data1").html(data.message);
                                $(".error-data1").html("");
                            } else {
                                $(".error-data1").html(data.message);
                                $(".flash-data1").html("");
                            }
                            toast();
                        }
                    });
                }
            });
        });
    })
</script>

</body>

</html>