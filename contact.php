    <?php require "header.php"; ?>
    <style>
        .banner .img {
            width: 100%;
            height: 250px;
            background-image: url('assets/img/wbatik4.jpg');
            padding: 0px;
            margin: 0px;
        }

        .img .box {
            height: 250px;
            background-color: rgb(41, 41, 41, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
            padding-top: 70px;
        }

        .box a {
            color: #0066FF;
        }

        .box a:hover {
            text-decoration: none;
            color: rgb(6, 87, 209);
        }

        /* content */
        .row {
            margin-left: 0;
            margin-right: 0;
            margin-bottom: 6px;
        }

        .row>[class^="col"] {
            padding-left: 3px;
            padding-right: 3px;
        }

        textarea {
            width: 100%;
        }

        #googleMap {
            width: 100%;
            height: 350px;
        }
    </style>

    <div class="banner mb-3">
        <div class="container-fluid img">
            <div class="container-fluid box">
                <h3>CONTACT US</h3>
                <p>Home > <a href="#">Contact Us</a></p>
            </div>
        </div>
    </div>

    <div class="container bg-white rounded pt-4 pb-4">
        <div class="row">
            <div class="col-md-8 col-sm-12 pr-4">
                <form action="send_email.php" method="post">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nama Depan" name="first_name" required="required">
                            </div>
                        </div>
        
                    <div class="col-md-4 mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nama Belakang" name="last_name" required="required">
                        </div>
                    </div>
        
                    <div class="col-md-4 mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="E-mail" name="email" required="required">
                    </div>
                
                </div>
                </div>
                    
                <div class="form-row">
                    <div class="col">
                <div class="input-group">
                    <textarea class="form-control" placeholder="Masukkan Pesan Yang Ingin Di Kirimkan" name="message" rows="9" required="required"></textarea>
                </div>
                </div>
                </div>
                <div class="form-group mt-3">
                    <input type="submit" class="btn btn-primary btn-md" value="Kirim Pesan">
                </div>
            </form>
            </div>
            <div class="col-md-4 col-sm-12 text-left">
                <h5>Contact Info</h5>
                <p></p>
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
                    <br>
                <!-- Link Google Maps -->
                <a href="https://www.google.com/maps/place/Jl.+Abdul+Mukti,+Tawangrejeni,+Turen,+Malang/" target="_blank" style="color: white; text-decoration: none;">
                    <i class="fa fa-map-marker"></i> Jl. Abdul Mukti Rt.04 Rw.01 Tawangrejeni, Turen, Malang
                </a>
                <br>

            </div>
        </div>

        <div class="row mt-5">
            <h3 class="mb-2"><span class="text-primary"></span>LOCATION
            </h3>
            <div id="googleMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d493.59384710093684!2d112.68420667602001!3d-8.22779869353709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd61e93e5f8b7c5%3A0x56db43beee33586f!2sJl.%20Abdul%20Mukti%2C%20Lowokwaru%2C%20Tawangrejeni%2C%20Kec.%20Turen%2C%20Kabupaten%20Malang%2C%20Jawa%20Timur%2065175!5e0!3m2!1sid!2sid!4v1724379470287!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <script>
        // Initialize and add the map
        // function initMap() {

        //     var maps = {
        //         lat: -8.2277987,
        //         lng: 112.6842067
        //     };

        //     var map = new google.maps.Map(
        //         document.getElementById('googleMap'), {
        //             zoom: 17,
        //             center: maps
        //         });

        //     var marker = new google.maps.Marker({
        //         position: maps,
        //         map: map
        //     });
        // };

        function validate() {
            var var1 = document.getElementById("validationDefault01").value;
            var var2 = document.getElementById("validationDefault02").value;
            if (var1 == "" && var2 == "") {
                swal({
                    title: "Gagal",
                    text: "Silahkan Mengisi Form Data Terlebih Dahulu!",
                    icon: "warning"
                })
                return false;
            }
            if (var1 != "" || var2 != "") {
                swal({
                    title: "Sukses",
                    text: 'Pesan Anda Berhasil Di Kirimkan!',
                    icon: "success"
                }).then(okay => {
                    if (okay) {
                        window.location.href = "contact.php";
                    }
                });

            }

        }
    </script>

<script>
        // Fungsi untuk menampilkan pop-up
        function showAlert(status) {
            if (status === 'success') {
                alert('Pesan Anda telah dikirim!');
            } else if (status === 'error') {
                alert('Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.');
            }
        }

        // Fungsi yang dijalankan saat halaman dimuat
        window.onload = function() {
            // Ambil parameter status dari URL
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            if (status) {
                showAlert(status);
            }
        };
    </script>

    <?php require "footer.php"; ?>