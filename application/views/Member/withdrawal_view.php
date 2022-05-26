<style type="text/css">
    #withdrawTable_paginate{
        float: right;
    }
    #fundTable_previous{
        margin: 5px;
        cursor: pointer;
    }
    #fundTable_next{
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
                        <h4 class="mb-sm-0 font-size-18">Withdrawal</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Withdrawal > </a></li>
                                <li class="breadcrumb-item active">Fund Withdrawal</li>
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
                                    <h4 class="card-title">Fund Withdrawal List</h4>
                                </div>
                                <div class="addbtn col-md-6">

                                    <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm" style="float: right;margin-left: 5px;"> <i class="fas fa-dollar-sign"></i> Withdraw</button>

                                    <a href="javascript::void();" class="btn btn-primary waves-effect waves-light" style="float: right;"> Available Fund <span class="badge badge-pill badge-soft font-size-11" id="user_total_fund"></span><span>$</span></a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table  id="withdrawTable" class="table table-bordered" style="text-align: center;">
                                    <thead style="background-color: burlywood;">
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Member Id</th>
                                            <th>Requested Fund</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            if(!empty($reqList))
                                            {
                                                foreach ($reqList as $key => $requested) 
                                                {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo ($key+1); ?></td>
                                                            <td><?php echo $requested['member_id'] ?></td>
                                                            <td><?php echo $requested['fund'] ?></td>
                                                            <td>
                                                                <?php 
                                                                if($requested['current_status'] == 'approved')
                                                                {
                                                                    ?>
                                                                        <span class="badge badge-pill badge-soft-success font-size-11">Approved</span>
                                                                    <?php
                                                                }else if($requested['current_status'] == 'requested')
                                                                {
                                                                    ?>
                                                                        <span class="badge badge-pill badge-soft-warning font-size-11">Requested</span>
                                                                    <?php
                                                                }else if($requested['current_status'] == 'rejected')
                                                                {
                                                                   ?>
                                                                        <span class="badge badge-pill badge-soft-danger font-size-11">Rejected</span>
                                                                    <?php 
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                }
                                            }
                                            else{

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

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel"> Withdraw Fund</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" name="generateFunds" action="<?php echo base_url('Member/Withdrawal/RequestWithdrawal'); ?>">
                    <div class="content-area">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> Fund </label>
                                        <input type="number" name="withdrawfund" id="withdrawfund" class="form-control" required placeholder="Enter withdrawal fund">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-area pt-3" style="float: right;">
                            <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                        </div>
                    </div>        
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<?php 
    if($this->session->flashdata('success')!=null)
    {
        ?>
        <script type="text/javascript">
            swal('success','<?php echo $this->session->flashdata("success") ?>','success');
        </script>
        <?php
        $this->session->set_flashdata('success',null);
    }
    if($this->session->flashdata('error')!=null)
    {
        ?>
        <script type="text/javascript">
            swal('error','<?php echo $this->session->flashdata("error") ?>','error');
        </script>
        <?php
        $this->session->set_flashdata('error',null);
    }
?>

<script type="text/javascript">
    var member_id = '<?php echo $this->session->userdata('user_id',true); ?>';
    getTotalFund();
    function getTotalFund()
    {
        $.ajax({
            url: '<?php echo base_url() ?>Member/Withdrawal/get_Usertotal_fund',
            type: 'POST',
            data: {member_id: member_id},
            success:function(res)
            {
                // console.log(res);
                $("#user_total_fund").html(res,);
            }
        });
    }
</script>

<script>
    $(document).ready(function () {
        $('#withdrawTable').DataTable();
    });
</script>