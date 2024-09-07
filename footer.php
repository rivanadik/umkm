<style>
    .list-unstyled li a {
        color: white;
        text-decoration: none;
    }

    .list-unstyled li a:hover {
        color: rgb(163, 211, 255);
        text-decoration: none;
    }

    input.btn.i {
        border: 2px solid white;
        width: 75%;
        padding: 7px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    button.btn.o {
        border: 2px solid white;
        padding: 7px;
        font-weight: bold;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    ::placeholder {
        color: white;
    }

    footer {
        left: 0;
        bottom: 0;
        width: 100%;
    }

    .footer-container {
        padding: 20px 0;
    }

    .footer-title {
        margin-bottom: 15px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .footer-section {
        padding-bottom: 20px;
    }

    .social-icons a {
        color: white;
        margin-right: 10px;
    }

    .social-icons a:hover {
        color: rgb(163, 211, 255);
    }

    .contact-info {
        margin-top: 10px;
    }

    .contact-info a {
        display: block;
        color: white;
        text-decoration: none;
        margin-bottom: 10px;
    }
</style>

<!-- Menambahkan CSS FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<footer class="bg-primary text-white">
    <div class="container footer-container">
        <div class="row">
            <!-- ABOUT US -->
            <div class="col-md-6 footer-section">
                <h5 class="footer-title">About Us</h5>
                <p>Website ini dibuat oleh kelompok 1A PPG Prajabatan Gelombang 1 2024 Prodi PGSD UNIKAMA untuk memenuhi tugas mata kuliah Project Kepemimpinan yang diampu oleh Dr. I Ketut Suastika, M.Pd.</p>
            </div>

            <!-- CONTACT US -->
            <div class="col-md-6 footer-section">
                <h5 class="footer-title">Contact Us</h5>
                <div class="social-icons">
                    <!-- Ikon Facebook -->
                    <a href="https://www.facebook.com/share/u71Yg8aZgGKvxnQz/?mibextid=qi2Omg" target="_blank">
                        <i class="fab fa-facebook"></i> erikorohman
                    </a>
                    <br>
                    <!-- Ikon Gmail -->
                    <a href="mailto:erikorohman3@gmail.com" target="_blank">
                        <i class="fas fa-envelope"></i> erikorohman3@gmail.com
                    </a>
                    <br>
                    <!-- Ikon WhatsApp -->
                    <a href="https://wa.me/6282230243095" target="_blank">
                        <i class="fab fa-whatsapp"></i> 0822-3024-3095
                    </a>
                    <br>
                    <!-- Ikon Instagram -->
                    <a href="https://www.instagram.com/erikorohman?igsh=MWZxczRxd3pmYXNqcg==" target="_blank">
                        <i class="fab fa-instagram"></i> erikorohman
                    </a>
                </div>
                <div class="contact-info">
                    <!-- Link Google Maps -->
                    <a href="https://www.google.com/maps/place/Jl.+Abdul+Mukti,+Tawangrejeni,+Turen,+Malang/" target="_blank" style="color: white; text-decoration: none;">
                        <i class="fa fa-map-marker"></i> Jl. Abdul Mukti Rt.04 Rw.01 Tawangrejeni, Turen, Malang
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Copyright -->
    <div class="text-center bg-dark text-white py-3">
        ©2024 Copyright: <a href="index.php" class="text-white">koperasibatiksurya.great-site.net</a>
    </div>
</footer>

<!-- Js Dasar -->
<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Popper -->
<script src="assets/js/popper/popper.min.js"></script>
<!-- Owl Carausel -->
<script src="assets/js/owl/owl.carousel.js"></script>
<!-- Sweetalert -->
<script src="assets/js/sweetalert/sweetalert.min.js"></script>
<!-- Plugins js -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="plugins/bootstrap-maxlength/bootstrap-maxlength.js"></script>
<script src="plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
<!-- Plugins Init js -->
<script src="admin/assets/pages/form-advanced.js"></script>
<!-- Datatable js -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script src="plugins/datatables/dataTables.responsive.min.js"></script>
<script src="plugins/datatables/responsive.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>
