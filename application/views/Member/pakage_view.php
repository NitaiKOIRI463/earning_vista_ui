<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Fund Generate</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Fund > </a></li>
                                <li class="breadcrumb-item active">Generate Fund</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row" style="padding-bottom: 10px;">
                                <div class="col-md-6">
                                    <h4 class="card-title">Fund History</h4>
                                </div>
                                <div class="addbtn col-md-6">

                                    <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm" style="float: right;margin-left: 5px;"> <i class="fas fa-plus-square"></i> Add</button>

                                    <a href="<?php echo base_url('Admin/Master/FundGenerate/fund_historyList'); ?>" class="btn btn-primary waves-effect waves-light" style="float: right;"> Available Balance <span class="badge badge-pill badge-soft font-size-11" id="total_fund"></span><span>$</span></a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table  id="fundTable" class="table table-bordered" style="text-align: center;">
                                    <thead style="background-color: burlywood;">
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Fund</th>
                                            <th>Transection Type</th>
                                            <th>Refrence No.</th>
                                            <th>Genration Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <?php  
                                        if(!empty($history))
                                        {
                                            foreach ($history as $key => $h_list) 
                                            {
                                             ?>
                                                <tr>
                                                    <td><?php echo ($key+1); ?></td>
                                                    <td><?php echo $h_list['fund']; ?></td>
                                                    <td><?php echo $h_list['transaction_type']; ?></td>
                                                    <td><?php echo $h_list['ref_no']; ?></td>
                                                    <td><?php echo $h_list['gen_date']; ?></td>
                                                </tr>
                                             <?php   
                                            }
                                        }
                                        ?> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>