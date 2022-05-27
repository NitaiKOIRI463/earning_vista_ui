<style type="text/css">
    #pakageTable_paginate{
        float: right;
    }
    #pakageTable_previous{
        margin: 5px;
        cursor: pointer;
    }
    #pakageTable_next{
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
                        <h4 class="mb-sm-0 font-size-18">Package</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Package > </a></li>
                                <li class="breadcrumb-item active">Package List</li>
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
                                    <h4 class="card-title">Package List</h4>
                                </div>
                                <div class="addbtn col-md-6">

                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#add_package" style="float: right;margin-left: 5px;"> <i class="fas fa-plus-square"></i> Add Package</button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table  id="pakageTable" class="table table-bordered" style="text-align: center;">
                                    <thead style="background-color: burlywood;">
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Package Name</th>
                                            <th>Package ID</th>
                                            <th>Package Amount</th>
                                            <th>Profit %</th>
                                            <th>ROI %</th>
                                            <th>ROI Amount</th>
                                            <th>Total Return</th>
                                            <th>Days</th>
                                            <th>Sponsor Income %</th>
                                            <th>Matching %</th>
                                            <th>Capping</th>
                                            <th>Effect From</th>
                                            <th>Effect To</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        if(!empty($pakage_list))
                                        {
                                            foreach ($pakage_list as $key => $p_list) 
                                            {
                                             ?>
                                                <tr>
                                                    <td><?php echo ($key+1); ?></td>
                                                    <td><?php echo $p_list['package_name']; ?></td>
                                                    <td><?php echo $p_list['package_id']; ?></td>
                                                    <td><?php echo $p_list['package_amount']; ?> $</td>
                                                    <td><?php echo $p_list['profit_perc']; ?> %</td>
                                                    <td><?php echo $p_list['roi_perc']; ?> %</td>
                                                    <td><?php echo $p_list['roi_amount']; ?> $</td>
                                                    <td><?php echo $p_list['total_return']; ?> $</td>
                                                    <td><?php echo $p_list['days']; ?></td>
                                                    <td><?php echo $p_list['sponsor_income_perc']; ?> %</td>
                                                    <td><?php echo $p_list['matching_perc']; ?> %</td>
                                                    <td><?php echo $p_list['capping']; ?></td>
                                                    <td><?php echo $p_list['effected_from']; ?></td>
                                                    <td><?php echo $p_list['effected_to']; ?></td>

                                                    <td id="<?php echo $p_list['package_id']; ?>" onclick="editPackage(this.id);" style="padding: 1px;padding-top: 2%;">
                                                        <a class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm" style="padding: 0px 5px;font-size: 13px;"> <i class="fas fa-pen-square"></i>
                                                                </a>

                                                        <a id="<?php echo $p_list['id']; ?>" onclick="deletePackage(this.id);" class="btn btn-danger waves-effect waves-light"style="padding: 0px 5px;font-size: 13px;"> <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                             <?php   
                                            }
                                        }
                                        else{
                                            ?>
                                                <tr><td style="text-align: center;" colspan="15">No Record Found!</td></tr>
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


<div class="modal fade bs-example-modal-sm" id="add_package" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel"> Add Package</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content">
                    <form method="POST" name="generateFunds" action="#">
                        <div class="content-area">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label> Package Name </label>
                                            <input type="text" name="package_name" id="package_name" class="form-control" required placeholder="Enter package name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label> Package Amount </label>
                                            <input type="number" name="package_amount" id="package_amount" class="form-control" required placeholder="Enter package amount">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label> Profit (In %) </label>
                                            <input type="number" name="profit" id="profit" class="form-control" required placeholder="Enter profit %">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label> ROI (In %) </label>
                                            <input type="number" name="roi" id="roi" class="form-control" required placeholder="Enter roi %">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label> Sponsor Income (In %)</label>
                                            <input type="number" name="sponsor_income" id="sponsor_income" class="form-control" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label> Matching (In %)</label>
                                            <input type="number" name="matching" id="matching" class="form-control" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label> Capping</label>
                                            <input type="number" name="capping" id="capping" class="form-control" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label> Effect From</label>
                                            <input type="date" name="effect_from" id="effect_from" class="form-control" required >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label> Effect To</label>
                                            <input type="date" name="effect_to" id="effect_to" class="form-control" required >
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
            </div>
        </div>
    </div>
</div>


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel"> Edit Pakage Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="pakageDetails">
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">
    function editPackage(package_id)
    {
        $.ajax({
            url: '<?php echo base_url(); ?>Admin/Package/edit_package_details',
            type: 'POST',
            data: {package_id: package_id},
            success:function(res)
            {
                $("#pakageDetails").html(res);
            }
        });
    }
</script>

<script type="text/javascript">
    function deletePackage(id)
   {  
      swal({
        title: "Are you sure?",
        text: "You want to delete this package!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) =>{
        if (willDelete) {
          $.ajax({
            type: 'POST',
            url: '<?php echo base_url();?>Admin/Package/deletepackage',
            data:{id:id,},
            success:function(data)
            {
              if(data=='200'){
                  swal("Successfully Deleted!!", {
                  icon: "success",
                });
                location.reload();
              }else{
                swal("Something Went Wrong !!", {
                icon: "error",
                });
                location.reload();
              }
            }
    
          });
        } 
    });
   }
</script>

<script>
    $(document).ready(function () {
        $('#pakageTable').DataTable();
    });
</script>