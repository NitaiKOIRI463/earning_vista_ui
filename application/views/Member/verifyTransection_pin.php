<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Request Withdrawal</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Withdrawal Request > </a></li>
                                <!-- <li class="breadcrumb-item active">Transection Pin</li> -->
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row" style="padding-bottom: 10px;">
                                <div class="col-md-6">
                                    <h4 class="card-title">Request For Withdrawal</h4>
                                </div>
                                <div class="addbtn col-md-6">
                                    <!-- <button type="button" class="btn btn-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm" style="float: right;margin-left: 5px;"> <i class="fas fa-dollar-sign"></i> Request For Withdraw</button> -->
                                </div>
                            </div>

                            <div class="table-responsive">
                                <div class="modal-body">
                                    <form method="POST" name="generateFunds" action="#">
                                        <div class="content-area">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label> Fund </label>
                                                            <input type="number" name="fund" id="fund" class="form-control" required placeholder="Enter withdrawal fund">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-area pt-3" style="text-align: center;">
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                                            </div>
                                        </div>        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
