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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Kelola</a></li>
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
                <form action="<?= base_url('save'); ?>" id="biodata">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kelola Data</h4>
                        <p class="text-muted mb-0">masukan biodata anda</p>
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="form-material">
                            <label class="mb-3">Biodata</label>
                            <input required type="text" onkeyup="validasiKoma(this.value)" name="userData" class="form-control" placeholder="CUT MINI 28 BANDA ACEH" id="userData" >

                        </div>
                    </div><!--end card-body-->
                    <div class="card-footer">
                    <button type="submit" id="submit" class="btn btn-secondary">Simpan</button>
                    </div>
                </div>
                </form>
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