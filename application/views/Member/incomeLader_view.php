<style type="text/css">
    #dailyIncome_paginate{
        float: right;
    }
    #dailyIncome_previous{
        margin: 5px;
        cursor: pointer;
    }
    #dailyIncome_next{
        margin: 5px;
        cursor: pointer;
    }
    .paginate_button {
        padding: 0px 5px;
    }
</style>


<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Daily Income Ladger</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Daily Income > </a></li>
                                <li class="breadcrumb-item active">Ladger</li>
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
                                <!-- <div class="col-md-6">
                                    <h4 class="card-title">Daily Income Lagder</h4>
                                </div> -->
                            </div>

                            <div class="table-responsive">
                                <table  id="dailyIncome" class="table table-bordered" style="text-align: center;">
                                    <thead style="background-color: burlywood;">
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Member Id</th>
                                            <th>Closeing Date</th>
                                            <th>ROI Income</th>
                                            <th>Sponsor Income</th>
                                            <th>Matching Income</th>
                                            <th>Sub Total Amount</th>
                                            <th>Capping Amount</th>
                                            <th>Total Amount</th>
                                            <th>Lapse Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        if(!empty($incomeLader))
                                        {
                                            foreach ($incomeLader as $key => $list) 
                                            {
                                             ?>
                                                <tr>
                                                    <td><?php echo ($key+1); ?></td>
                                                    <td><?php echo $list['member_id']; ?></td>
                                                    <td><?php echo $list['closing_date_time']; ?></td>
                                                    <td><?php echo $list['roi_income']; ?></td>
                                                    <td><?php echo $list['sponser_income']; ?></td>
                                                    <td><?php echo $list['matching_income']; ?></td>
                                                    <td><?php echo $list['sub_total_amount']; ?></td>
                                                    <td><?php echo $list['caping_amount']; ?></td>
                                                    <td><?php echo $list['total_amount']; ?></td>
                                                    <td><?php echo $list['lapse_amount']; ?></td>
                                                </tr>
                                             <?php   
                                            }
                                        }else{
                                            ?>
                                            <tr><td colspan="10" style="text-align: center;">No Record Found !!</td></tr>
                                            <?php
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
        $('#dailyIncome').DataTable();
    });
</script>