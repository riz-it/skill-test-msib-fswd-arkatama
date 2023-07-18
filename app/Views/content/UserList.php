<?= $this->include('_header'); ?>
<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">ARKATAMA</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Daftar</a></li>
                                <li class="breadcrumb-item active">User</li>
                            </ol>
                        </div>
                        <!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">Jan 11</span>
                                <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i data-feather="download" class="align-self-center icon-xs"></i>
                            </a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar User</h4>
                       
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-centered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th>Kota</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $key => $value) {?>
                                    <tr>
                                        <td><?= $key + 1?>
                                        </td>
                                        <td><?= $value['name'] ?></td>
                                        <td><?= $value['age'] ?> Tahun</td>
                                        <td><?= $value['city'] ?></td>
                                        
                                    </tr>
                                   <?php } ?>
                                </tbody>
                            </table><!--end /table-->
                        </div><!--end /tableresponsive-->
                    </div><!--end card-body-->
                </div>
            </div>
            <!--end col-->

        </div>
        <!--end row-->
        <hr class="mb-4">

    </div><!-- container -->

    <footer class="footer text-center text-sm-start">
        &copy; <script>
            document.write(new Date().getFullYear())
        </script> ARKATAMA
    </footer>
    <!--end footer-->
</div>
<!-- end page content -->
<?= $this->include('_footer'); ?>