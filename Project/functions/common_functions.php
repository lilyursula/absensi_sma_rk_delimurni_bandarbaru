<?php
function open_page($title)
{
    echo ('<!DOCTYPE html>
    <html>

     <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>' . $title . ' | Rekap Absen IT Del</title>
        <!-- Favicon-->
        <link rel="icon" href="../template/favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
            type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="../template/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="../template/plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="../template/plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Morris Chart Css-->
        <link href="../template/plugins/morrisjs/morris.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="../template/css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../template/css/themes/all-themes.css" rel="stylesheet" />
    </head>');
}

function close_page()
{
    echo ('    <!-- Jquery Core Js -->
    <script src="../template/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../template/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../template/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../template/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../template/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../template/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="../template/plugins/raphael/raphael.min.js"></script>
    <script src="../template/plugins/morrisjs/morris.js"></script>

    <!-- Chart Plugins Js -->
    <script src="../template/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Custom Js -->
    <script src="../template/js/admin.js"></script>
    <script src="../template/js/pages/charts/morris.js"></script>
    <script src="../template/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="../template/js/demo.js"></script>
    </body>

    </html>');
}

//function menu_bar($title, $username)
function menu_bar($title)
{
    $dashboard_active = $title === 'Dashboard' ? 'active' : '';
    $risk_check_active = $title === 'Staff' ? 'active' : '';
    $bio_active = $title === 'Biodata' ? 'active' : '';
    $data_dosen_active = $title === 'Dosen' ? 'active' : '';
    $data_asisten_active = $title === 'Asisten Dosen' ? 'active' : '';
    $about_active = $title === 'About' ? 'active' : '';
    $data_active = $data_dosen_active . '' . $data_asisten_active;
    echo ('
    <body class="theme-red">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Top Bar -->
        <nav class="navbar" style="background-color: #03a9f4;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="index.php">Absensi IT Del</a>
                </div>
                
                

            </div>
        </nav>
        <!-- #Top Bar -->
        <section>


            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div style="text-align:center">
                        <div class="image" style="margin-right:unset">
                            <img src="../template/images/user1.png" width="80" height="80" alt="User" />
                        </div>
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white; font-size:17px">Selamat datang, Admin!</div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MENU UTAMA</li>
                        <li class="' . $dashboard_active . '">
                            <a href="index.php">
                                <i class="material-icons">home</i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="' . $data_active . '">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">people</i>
                                <span>Data Pengajar</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="' . $data_dosen_active . '">
                                    <a href="dosen.php">Dosen</a>
                                </li>
                                <li class="' . $data_asisten_active . '">
                                    <a href="asistendosen.php">Asisten Dosen</a>
                                </li>
                            </ul>
                        </li>
                        <li class="' . $risk_check_active . '">
                            <a href="staff.php">
                                <i class="material-icons">person</i>
                                <span>Staff</span>
                            </a>
                        </li>
                        
                        
                        <li class="header">LAINNYA</li>
                        <li class="' . $about_active . '">
                            <a href="about.php">
                                <i class="material-icons col-green">school</i>
                                <span>About</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2020 <a href="javascript:void(0);">Institut teknologi Del</a>
                    </div>
                    <div class="version">
                        Laguboti 
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
        </section>');
}

function redirect($_location)
{
    header('Location: ' . $_location);
}

function redirect_to($url = null)
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>document.location='" . $url . "'</SCRIPT>");
    die;
}



function parseDataValue($data)
{
    $body['total'] = '0';
    $body['hadir'] = '0';
    $body['terlambat'] = '0';
    $body['tdk_hadir'] = '0';
    while ($row = $data->fetch_assoc()) {
        $value_total = $row['total'];
        $value_hadir = $row['hadir'];
        $value_terlambat = $row['terlambat'];
        $value_tdk_hadir = $row['tdk_hadir'];

        if ($value_total === '0') {
            $value_total = '+0';
        }

        if ($value_hadir === '0') {
            $value_hadir = '+0';
        }

        if ($value_terlambat === '0') {
            $value_terlambat = '+0';
        }

        if ($value_tdk_hadir === '0') {
            $value_tdk_hadir = '+0';
        }

        $body['total'] .= $value_total;
        $body['hadir'] .= $value_hadir;
        $body['terlambat'] .= $value_terlambat;
        $body['tdk_hadir'] .= $value_tdk_hadir;
    }
    return $body;
}

// function parseDataValueToJson($data)
// {
//     $body = [];
//     while ($row = $data->fetch_assoc()) {
//         $date = $row['date'];
//         $value_total = preg_replace("/[^0-9]/", "", $row['total']);
//         $value_hadir = preg_replace("/[^0-9]/", "", $row['hadir']);
//         $value_terlambat = preg_replace("/[^0-9]/", "", $row['terlambat']);
//         $value_tdk_hadir = preg_replace("/[^0-9]/", "", $row['tdk_hadir']);

//         array_push($body, ["date" => $date, "value_total" => $value_total, "value_hadir" => $value_hadir, "value_terlambat" => $value_terlambat, "value_tdk_hadir" => $value_tdk_hadir]);
//     }
//     return $body;
// }

function tanggal_indonesia($tanggal)
{
    $dt = new DateTime($tanggal);
    $date = date_format($dt, 'Y-m-d');

    $bulan = array(
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember',
    );
    
    $pecahkan = explode('-', $date);

    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}

function getOnlyTime($datetime){
    $time = date("H:i:s",strtotime($datetime));
    return $time;
}
