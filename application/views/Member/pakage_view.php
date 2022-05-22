<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Pakage</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pakage > </a></li>
                                <li class="breadcrumb-item active">Pakage List</li>
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
                                    <h4 class="card-title">Pakage List</h4>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table  id="pakageTable" class="table table-bordered" style="text-align: center;">
                                    <thead style="background-color: burlywood;">
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Pakage Id</th>
                                            <th>Pakage Amount</th>
                                            <th>Return Amount</th>
                                            <th>Remaining Amount</th>
                                            <th>Status</th>
                                            <th>Days</th>
                                            <th>Activation Date</th>
                                            <th>Expiry Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        if(!empty($pakage))
                                        {
                                            foreach ($pakage as $key => $list) 
                                            {
                                             ?>
                                                <tr>
                                                    <td><?php echo ($key+1); ?></td>
                                                    <td><?php echo $list['package_id']; ?></td>
                                                    <td><?php echo $list['package_amount']; ?></td>
                                                    <td><?php echo $list['total_return']; ?></td>
                                                    <td><?php echo $list['remaining_amount']; ?></td>
                                                    <td>
                                                        <?php 
                                                        if($list['current_status'] == 'requested')
                                                        {
                                                            ?>
                                                            <span class="badge badge-pill badge-soft-warning font-size-11">Requested</span>
                                                            <?php
                                                        }else if($list['current_status'] == 'pending')
                                                        {
                                                            ?>
                                                            <span class="badge badge-pill badge-soft-danger font-size-11">Pending</span>    
                                                            <?php
                                                        }else if($list['current_status'] == 'active')
                                                        {
                                                            ?>
                                                                 <span class="badge badge-pill badge-soft-success font-size-11">Pending</span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $list['days']; ?></td>
                                                    <td><?php echo $list['activation_date']; ?></td>
                                                    <td><?php echo $list['expiry_date']; ?></td>
                                                </tr>
                                             <?php   
                                            }
                                        }
                                        ?>
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

<script>
    $(document).ready(function () {
        $('#pakageTable').DataTable();
    });
</script>