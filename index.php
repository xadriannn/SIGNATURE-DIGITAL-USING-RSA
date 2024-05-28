<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="htmlcss bootstrap, multi level menu, submenu, treeview nav menu examples" />
        <meta name="description" content="#" />
        <title>E-Sertifikat</title>
        <!-- bootstrap css -->
        <link href="assets/bootstrap5/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <!-- Bootstrap Font Icon CSS -->
        <link rel="stylesheet" href="assets/icons/font/bootstrap-icons.css">
        <!-- Datatable CSS -->
        <link rel="stylesheet" href="assets/datatable/jquery.dataTables.css">
        <!-- bootstrap js -->
        <script type="text/javascript" src="assets/bootstrap5/js/bootstrap.bundle.js"></script>
        <!--Sweetalert2 -->
        <script src="assets/sweetalert2/sweetalert2@11.js"></script>
        <!--Instascan -->
        <script src="assets/instascan/instascan.min.js"></script>
        <!-- Webcam -->
        <script type="text/javascript" src="assets/webcamjs/webcam.min.js"></script>
        <style type="text/css">
        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {

            .dropdown-menu li {
                position: relative;
            }

            .dropdown-menu .submenu {
                display: none;
                position: absolute;
                left: 100%;
                top: -7px;
            }

            .dropdown-menu .submenu-left {
                right: 100%;
                left: auto;
            }

            .dropdown-menu>li:hover {
                background-color: #f1f1f1
            }

            .dropdown-menu>li:hover>.submenu {
                display: block;
            }
        }

        /* ============ desktop view .end// ============ */

        /* ============ small devices ============ */
        @media (max-width: 991px) {

            .dropdown-menu .dropdown-menu {
                margin-left: 0.7rem;
                margin-right: 0.7rem;
                margin-bottom: .5rem;
            }

        }
        

        /* ============ small devices .end// ============ */

        </style>
        <!-- datatable js -->
        <!-- <script type="text/javascript" src="assets/datatable/jquery.dataTables.js"></script> -->
        <!-- Option Jquery -->
        <script src="assets/jquery6/jquery.js"></script>
        <script type="text/javascript" charset="utf8" src="assets/datatable/jquery.dataTables.js">
        </script>
        <script type="text/javascript">
        //	window.addEventListener("resize", function() {
        //		"use strict"; window.location.reload(); 
        //	});


        document.addEventListener("DOMContentLoaded", function() {


            /////// Prevent closing from click inside dropdown
            document.querySelectorAll('.dropdown-menu').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            })



            // make it as accordion for smaller screens
            if (window.innerWidth < 992) {

                // close all inner dropdowns when parent is closed
                document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
                    everydropdown.addEventListener('hidden.bs.dropdown', function() {
                        // after dropdown is hidden, then find all submenus
                        this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                            // hide every submenu as well
                            everysubmenu.style.display = 'none';
                        });
                    })
                });

                document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
                    element.addEventListener('click', function(e) {

                        let nextEl = this.nextElementSibling;
                        if (nextEl && nextEl.classList.contains('submenu')) {
                            // prevent opening link if link needs to open dropdown
                            e.preventDefault();
                            console.log(nextEl);
                            if (nextEl.style.display == 'block') {
                                nextEl.style.display = 'none';
                            } else {
                                nextEl.style.display = 'block';
                            }

                        }
                    });
                })
            }
            // end if innerWidth

        });
        // DOMContentLoaded  end
        </script>
        <style>
        /* CSS untuk elemen yang akan disembunyikan */
        .hidden {
            display: none;
        }
    </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
        <div class=" container-fluid">
            <a class="navbar-brand" href="#">E-Verification</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item active"> <a class="nav-link" href="index.php">Home </a> </li>
                    <li class="nav-item"><a class="nav-link" href="signature.php">Signature</a></li>
                    <li class="nav-item"><a class="nav-link" href="data.php">Data Excel</a></li>
                    <ul class="dropdown-menu">
                    </ul>
                </ul>
                <!--  <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><button class="btn btn-outline-success" type="submit">
                            Logout
                        </button></li>
                </ul> -->
            </div> <!-- navbar-collapse.// -->
            </div> <!-- container-fluid.// -->
        </nav>

<style>
body {
    background-color: rgba(255, 255, 255, 0.5);
}

video {
    /* override other styles to make responsive */
    width: 100% !important;
    height: auto !important;
}

</style>
<br>
<div class="container-fluid mt-1 mb-3">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <center>
                    <p style="color:red;font-weight:bold;margin-top:10px"><i class="fas fa-video"></i> Camera
                    </p>
                    <div class="card">
                        <div class="card-body">
                            <video id="my_camera" class="solid"></video>
                        </div>
                    </div>
                    <br>
                    <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
                        <label class="btn btn-primary active">
                            <input type="radio" name="options" value="1" autocomplete="off" checked> 1st Camera
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" value="2" autocomplete="off"> 2nd Camera
                        </label>
                    </div>
                </center>
            </div>
            <div class="col-md-6">
                <center>
                    <p style="color:green;font-weight:bold;margin-top:10px"><i class="fas fa-images"></i> Data
                    </p>
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-borderless" id="table_index">
                                    <tr>
                                        <td width=110px>No. Sertifikat</td>
                                        <td>:</td>
                                        <td id="no_sertifikat"></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Penduduk</td>
                                        <td>:</td>
                                        <td id="nama_peserta"></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td id="jenis_pelatihan"></td>
                                    </tr>
                                    <tr>
                                        <td>Pengesah</td>
                                        <td>:</td>
                                        <td id="pengesah"></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Penerbitan</td>
                                        <td>:</td>
                                        <td id="ttl"></td>
                                    </tr>
                                </table>
                                <hr>
                                <p style="color:green;font-weight:bold;margin-top:10px" class="hidden" id="benar"> Data Terbukti Benar</p>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div><!-- row selesai -->
    </div>
    <br>
</div><!-- container fluid selesai -->
<script type="text/javascript">
// Configure a few settings and attach camera

Webcam.set({
    width: 560,
    height: 340,
    image_format: 'jpeg',
    jpeg_quality: 100
});
Webcam.attach('#my_camera');

// preload shutter audio clip
var shutter = new Audio();
shutter.autoplay = true;
shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';


// SELESAI-----Configure a few settings and attach camera
//===========================================ajax
</script>
<script type="text/javascript">
$(document).ready(function() {
    let scanner = new Instascan.Scanner({
        video: document.getElementById('my_camera'),
        mirror: false
    });
    scanner.addListener('scan', function(content) {
        let data14 = content;
        $.ajax({
            type: 'POST',
            url: "decode.php",
            data: {
                qrcode: data14
            },
            success: function(response) {
                if (response != null && response != "") {
                    response = JSON.parse(response);
                    console.log(response)
                    //amibl data JSON
                    $('#no_sertifikat').html(response.no_sertifikat);
                    $('#nama_peserta').html(response.nama_peserta);
                    $('#jenis_pelatihan').html(response.jenis_pelatihan);
                    $('#pengesah').html(response.pengesah);
                    $('#ttl').html(response.tanggal);
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal
                                .resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'success',
                        title: 'Data di Temukan!'
                    })
                    var paragraph = document.getElementById("benar");
                    paragraph.classList.remove("hidden");

                    if (response == 1) {

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Data Tidak di Temukan!',
                        })

                    }

                }

            }

        });

    });

    Instascan.Camera.getCameras().then(function(cameras) {
        if (cameras.length > 0) {
            scanner.start(cameras[0]);

            //ini pakai vanilla js
            if (document.querySelector('input[name="options"]')) {
                document.querySelectorAll('input[name="options"]').forEach((element) => {
                    element.addEventListener("change", function(event) {
                        var item = event.target.value;
                        //console.log(item);
                        if (item == 1) {
                            if (cameras[0] != "") {
                                scanner.start(cameras[0]);
                            } else {
                                alert('No Front camera found!');
                            }
                        } else if (item == 2) {
                            if (cameras[1] != "") {
                                scanner.start(cameras[1]);
                            } else {
                                alert('No Back camera found!');
                            }
                        }
                    });
                });
            }

            //Ini kalau pakai JQUERY
            /* $('[name="options"]').on('change', function() {
                if ($(this).val() == 1) {
                    if (cameras[0] != "") {
                        scanner.start(cameras[0]);
                    } else {
                        alert('No Front camera found!');
                    }
                } else if ($(this).val() == 2) {
                    if (cameras[1] != "") {
                        scanner.start(cameras[1]);
                    } else {
                        alert('No Back camera found!');
                    }
                }
            }); */
        } else {
            console.error('No cameras found.');
            alert('No cameras found.');
        }
    }).catch(function(e) {
        console.error(e);
        alert(e);
    });

    //ini vanilla js
    const pdf_button = document.getElementById('id_data')
    pdf_button.addEventListener("click", function() {
        const pdf_value = document.getElementById('id_data').value
        if (pdf_value !== "") {
            location.href = 'data_dompdf_perorangan.php?id=' + pdf_value
        }

    })

    //ini jquery
    /*  $("#id_data").on("click", function() {
         const dataid = $("#id_data").val()
         location.href = 'data_dompdf_perorangan.php?id=' + dataid
     }) */

});
</script>
<?php include 'footer.php'; ?>
