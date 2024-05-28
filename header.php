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
                    <li class="nav-item"><a class="nav-link" href="data.php">Input Data</a></li>
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
