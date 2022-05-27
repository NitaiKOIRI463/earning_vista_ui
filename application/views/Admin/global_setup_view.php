<style type="text/css">
    #global_setupTable_paginate{
        float: right;
    }
    #global_setupTable_previous{
        margin: 5px;
        cursor: pointer;
    }
    #global_setupTable_next{
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
                        <h4 class="mb-sm-0 font-size-18">Global Setup</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Global Setup </a></li>
                                <li class="breadcrumb-item active">Global Setup</li>
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
                                    <h4 class="card-title">Package List</h4>
                                </div>
                                <div class="addbtn col-md-6">

                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#add_package" style="float: right;margin-left: 5px;"> <i class="fas fa-plus-square"></i> Add Package</button>
                                </div> -->
                            </div>

                            <div class="table-responsive">
                                <table  id="global_setupTable" class="table table-bordered" style="text-align: center;">
                                    <thead style="background-color: burlywood;">
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Key</th>
                                            <th>Value</th>
                                            <th>Effect From</th>
                                            <th>Effect To</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        if(!empty($G_setup))
                                        {
                                            foreach ($G_setup as $key => $GS_list) 
                                            {
                                             ?>
                                                <tr>
                                                    <td><?php echo ($key+1); ?></td>
                                                    <td><?php echo $GS_list['key']; ?></td>
                                                    <td><?php echo $GS_list['value']; ?></td>
                                                    <td><?php echo date("d-m-Y H:i:s",strtotime($GS_list['effect_from'])); ?></td>
                                                    <td><?php echo date("d-m-Y H:i:s",strtotime($GS_list['effect_to'])); ?></td>

                                                    <td id="<?php echo $GS_list['id']; ?>" onclick="editsetUp(this.id);" style="padding: 1px;padding-top: 2%;">
                                                        <a class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editsetUp" style="padding: 0px 5px;font-size: 13px;"> <i class="fas fa-pen-square"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                             <?php   
                                            }
                                        }
                                        else{
                                            ?>
                                                <tr><td style="text-align: center;" colspan="6">No Record Found!</td></tr>
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


<div class="modal fade bs-example-modal-sm" id="editsetUp" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel"> Edit Global Setup Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="setupDetails">
                        
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">
    function editsetUp(id)
    {
        $.ajax({
            url: '<?php echo base_url(); ?>Admin/GlobalSetup/editSet_Up',
            type: 'POST',
            data: {id: id},
            success:function(res)
            {
                $("#setupDetails").html(res);
            }
        });
    }
</script>


<script>
    $(document).ready(function () {
        $('#global_setupTable').DataTable();
    });
</script>