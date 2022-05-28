<style type="text/css">
    #memberTable_paginate{
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
                        <h4 class="mb-sm-0 font-size-18">Direct Member</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Member > </a></li>
                                <li class="breadcrumb-item active">Direct Member List</li>
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
                                    <h4 class="card-title">Direct Member List</h4>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table  id="memberTable" class="table table-bordered" style="text-align: center;">
                                    <thead style="background-color: burlywood;">
                                        <tr>
                                            <th>Left : <?php echo $left; ?></th>
                                            <th>Right : <?php echo $right; ?></th>
                                            <th colspan="6"></th>
                                        </tr>
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Member Id</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Side</th>
                                            <th>Total Package</th>
                                            <th>Active Status</th>
                                        </tr>

                                    </thead>
                                    <tbody style="font-size: 11px;">
                                        <?php 
                                            if(!empty($result))
                                            {
                                                foreach ($result as $key => $list) 
                                                {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo ($key+1); ?></td>
                                                            <td><?php echo $list['member_id']; ?></td>
                                                            <td><?php echo $list['name']; ?></td>
                                                            <td><?php echo $list['mobile_no']; ?></td>
                                                            <td><?php echo $list['email_id']; ?></td>
                                                            <td><?php echo $list['side']; ?></td>
                                                            <td><?php echo $list['total_package']; ?></td>
                                                            <td><?php if($list['activation_status']==1){echo '<span style="color:green;">Active</span>';}else{echo '<span style="color:red;">Inactive</span>';} ?></td>
                                                            
                                                        </tr>
                                                    <?php
                                                }
                                            }
                                            else
                                            {
                                                ?>
                                                    <tr><td colspan="6" style="text-align: center;"> No Record Found </td></tr>
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



<script>
    $(document).ready(function () {
        $('#memberTable').DataTable();
    });
</script>