<?php 

  include 'daftar_rapat_proses.php';
  $z = 0;

  $id = $_GET['id'];
  
  $query = "SELECT *
      FROM detail_rapat
      WHERE id = $id";
  $result_ = mysqli_query($db, $query);
  $event = mysqli_fetch_assoc($result_);



?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Go Meeting</title>

  <!-- Custom fonts for this template-->
  <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" type="text/css" href="../../../css/sb-admin-2.min.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Go Meeting</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-calendar-times"></i>
          <span>Events</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="../events/tambah_event.php">Buat Event</a>
            <a class="collapse-item" href="../events/daftar_event.php">Daftar Event</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Handler</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="../handler/tambah_handler.php">Tambah Handler</a>
            <a class="collapse-item" href="../handler/daftar_handler.php">Daftar Handler</a>
          </div>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-file-archive"></i>
          <span>Rapat</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="../rapat/tambah_rapat.php">Buat Rapat</a>
            <a class="collapse-item" href="../rapat/daftar_rapat.php">Jadwal Rapat</a>
            <a class="collapse-item" href="../rapat/presensi.php">Presensi</a>
  
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesq" aria-expanded="true" aria-controls="collapsePagesq">
          <i class="fas fa-fw fa-users"></i>
          <span>Peserta Rapat</span>
        </a>
        <div id="collapsePagesq" class="collapse" aria-labelledby="headingPagesq" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="../peserta/tambah_peserta.php">Tambah Peserta</a>
            <a class="collapse-item" href="../peserta/daftar_peserta.php">Daftar Peserta</a>
  
          </div>
        </div>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
     
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-video"></i>
          <span>Live Streaming Rapat</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['admin']['nama']; ?></span>
                <img class="img-profile rounded-circle" src="../img/h.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <!-- Page Heading -->

        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header"></div>

                <div class="card-body">
                           
                  <div class="container">

                    <a class="btn btn-primary" href="presensi.php"> Kembali </a>
                    <a class="btn btn-primary right-child-button" href="cetak.php?id=<?php echo $id; ?>"> 
                      
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                          width="26" height="26"
                          viewBox="0 0 172 172"
                          style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M46.30769,0c-14.57452,0 -26.46154,11.88702 -26.46154,26.46154v119.07692c0,14.57452 11.88702,26.46154 26.46154,26.46154h79.38462c14.57452,0 26.46154,-11.88702 26.46154,-26.46154v-92.61538c0,-7.02885 -6.43449,-13.69591 -17.98558,-25.01442c-1.60216,-1.57632 -3.33353,-3.33353 -4.96154,-4.96154c-1.62801,-1.62801 -3.38522,-3.15264 -4.96154,-4.75481c-11.31851,-11.55108 -17.98558,-18.19231 -25.01442,-18.19231zM46.30769,13.23077h48.16827c4.78065,1.21454 4.75481,6.95132 4.75481,12.81731v20.25962c0,3.64363 2.97176,6.61538 6.61538,6.61538h19.84615c6.58954,0 13.23077,0.02584 13.23077,6.61538v86c0,7.3131 -5.91767,13.23077 -13.23077,13.23077h-79.38462c-7.3131,0 -13.23077,-5.91767 -13.23077,-13.23077v-119.07692c0,-7.3131 5.91767,-13.23077 13.23077,-13.23077zM81.03846,59.53846c-2.86839,0 -5.76262,1.55048 -7.02885,3.92788c-1.26622,2.3774 -1.36959,5.03906 -1.03365,7.85577c0.51683,4.36719 3.02344,9.71635 5.58173,14.88462c-1.34375,4.80649 -2.04147,9.12199 -4.13462,14.26442c-2.55829,6.30529 -5.65926,11.29267 -8.68269,16.53846c-3.97956,1.91226 -8.88942,3.61779 -11.78365,5.58173c-3.15264,2.14483 -5.71094,4.03125 -7.02885,6.82212c-0.64603,1.39544 -0.85276,3.28185 -0.20673,4.96154c0.64603,1.67969 2.01563,2.92007 3.51442,3.72115c3.04928,1.62801 6.43449,0.62019 9.09615,-1.24038c2.66166,-1.86058 5.19411,-4.67728 7.64904,-8.0625c1.29207,-1.80889 2.45493,-4.67728 3.72115,-6.82212c3.95372,-1.80889 6.66707,-3.77283 11.16346,-5.375c6.25361,-2.22235 11.93871,-3.04928 17.77885,-4.34135c4.72897,3.30769 9.66467,5.78846 15.09135,5.78846c3.10096,0 5.47837,-0.02584 7.64904,-1.24038c2.17067,-1.21454 3.30769,-4.00541 3.30769,-6.20192c0,-1.75721 -0.67187,-3.54026 -1.86058,-4.75481c-1.1887,-1.21454 -2.79087,-2.06731 -4.34135,-2.48077c-3.10096,-0.85276 -6.5637,-0.67187 -10.75,-0.20673c-2.14483,0.23257 -5.0649,1.39544 -7.44231,1.86058c-0.62019,-0.49099 -1.24038,-0.28426 -1.86058,-0.82692c-5.14243,-4.54808 -9.87139,-10.72416 -13.4375,-16.95192c-0.25841,-0.46514 -0.15504,-0.77524 -0.41346,-1.24038c0.87861,-3.41106 2.50661,-7.36478 2.89423,-10.33654c0.49099,-3.90204 0.49099,-7.36478 -0.41346,-10.33654c-0.4393,-1.47296 -1.00781,-3.02344 -2.27404,-4.13462c-1.26622,-1.11118 -3.07512,-1.65385 -4.75481,-1.65385zM80.21154,66.15385c0.10337,-0.05168 0.3101,0 0.82692,0c0.36178,0 0.15505,-0.05168 0.20673,0c0.05169,0.05169 0.41346,0.36178 0.62019,1.03365c0.41346,1.34375 0.4393,4.03125 0,7.44231c-0.02584,0.25842 -0.15504,0.7494 -0.20673,1.03365c-0.49099,-1.62801 -1.91226,-3.90204 -2.06731,-5.16827c-0.23257,-2.04147 0.15505,-3.46274 0.41346,-3.92788c0.12921,-0.23257 0.10337,-0.36178 0.20673,-0.41346zM83.10577,94.26923c2.97176,4.57392 6.46034,8.83774 10.33654,12.61058c-4.70312,1.24038 -9.07031,1.8089 -13.85096,3.51442c-1.55048,0.54267 -2.42908,1.29207 -3.92788,1.86058c1.60217,-3.30769 3.54026,-5.8143 4.96154,-9.30288c1.24038,-3.07512 1.44712,-5.63341 2.48077,-8.68269zM115.14904,109.56731c1.16286,-0.02584 2.06731,0.02584 2.6875,0.20673c0.80108,0.23257 1.16286,0.54267 1.24038,0.62019c0.07753,0.07753 0,-0.02584 0,0.20673c0,0.98197 0.15505,0.33594 0,0.41346c-0.15504,0.07753 -1.62801,0.41346 -4.34135,0.41346c-1.08533,0 -2.3774,-1.36959 -3.51442,-1.65385c1.34375,-0.07753 2.76503,-0.18089 3.92788,-0.20673zM59.53846,127.13942c-1.39543,1.62801 -2.86839,3.59195 -3.92788,4.34135c-1.60216,1.13702 -1.96394,0.98197 -2.27404,0.82692c-0.36178,-0.18089 -0.18089,-0.20673 -0.20673,-0.20673c0.38762,-0.64603 1.96394,-2.3774 4.54808,-4.13462c0.41346,-0.28426 1.39544,-0.54267 1.86058,-0.82692z"></path></g></g>
                    </svg>

                    Cetak 
                    
                    </a>

                    <br><br>
                    <h3>Event : <?php echo $event['nama'] ?></h3>
                    <h6><b> Rapat &emsp;&emsp;: <?php echo $event['tanggal'] ?></b></h6>
                    <br>
                    <table class="" width="100%">
                      <tr bgcolor="#FFF" align="center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                      </tr>
                      <?php foreach ($daftar_hadir as $hadir) : ?>
                        <?php if ($hadir['id_rapat'] == $id): ?>                       
                          <tr> 
                            <td>
                              <center><?php $z++; echo $z;  ?></center>
                            </td>
                            <td>
                              <?php echo $hadir['nama'] ?>
                            </td>
                            <td>
                              <?php echo $hadir['kehadiran'] ?>
                            </td>
                          </tr>
                        <?php endif ?>
                      <?php endforeach ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="row">

      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../../../index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../../js/demo/chart-area-demo.js"></script>
  <script src="../../../js/demo/chart-pie-demo.js"></script>

</body>

</html>
