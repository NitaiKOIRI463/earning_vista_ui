<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Member</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Member > </a></li>
                                <li class="breadcrumb-item active">Member List</li>
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
                                    <h4 class="card-title">Member List</h4>
                                </div>
                                <div class="addbtn col-md-6" >
                                    <a href="<?php echo base_url('Member/MemberRegister/addMember'); ?>" class="btn btn-info waves-effect waves-light" style="float: right;"> Go to Add Member</a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table  id="memberTable" class="table table-bordered" style="text-align: center;">
                                    <thead style="background-color: burlywood;">
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Name</th>
                                            <th>Father/Husband Name</th>
                                            <th>Member Id</th>
                                            <th>Parent Id</th>
                                            <th>Sponsor Id</th>
                                            <th>Transection Pin</th>
                                            <th>Password</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Side</th>
                                            <th>Registration Date</th>
                                            <th>Country</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Block Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size: 11px;">
                                        <?php 
                                            if(!empty($memberList))
                                            {
                                                foreach ($memberList as $key => $list) 
                                                {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo ($key+1); ?></td>
                                                            <td><?php echo $list['name']; ?></td>
                                                            <td><?php echo $list['f_h_name']; ?></td>
                                                            <td><?php echo $list['member_id']; ?></td>
                                                            <td><?php echo $list['parent_id']; ?></td>
                                                            <td><?php echo $list['sponsor_id']; ?></td>
                                                            <td><?php echo $list['transaction_pin']; ?></td>
                                                            <td><?php echo $list['password']; ?></td>
                                                            <td><?php echo $list['mobile_no']; ?></td>
                                                            <td><?php echo $list['email_id']; ?></td>
                                                            <td><?php echo $list['side']; ?></td>
                                                            <td><?php echo $list['registration_date']; ?></td>
                                                            <td><?php echo $list['country']; ?></td>
                                                            <td><?php echo $list['state']; ?></td>
                                                            <td><?php echo $list['city']; ?></td>
                                                            <?php 
                                                            if($list['block_status'] == 1)
                                                            {
                                                                ?>
                                                                <td>
                                                                    <span class="badge badge-pill badge-soft-success font-size-11">Active</span>
                                                                </td>
                                                                <?php
                                                            }else if($list['block_status'] == 0)
                                                            {
                                                                ?>
                                                                <td>
                                                                    <span class="badge badge-pill badge-soft-danger font-size-11">Blocked</span>
                                                                </td>
                                                                <?php
                                                            }
                                                            ?>
                                                            
                                                            <td>
                                                                <a id="<?php echo $list['member_id']; ?>" onclick="editMember(this.id);" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm" style="padding: 0px 5px;font-size: 15px;"> <i class="fas fa-pen-square"></i>
                                                                </a>

                                                                <a id="<?php echo $list['member_id']; ?>" onclick="deleteMember(this.id);" class="btn btn-danger waves-effect waves-light"style="padding: 0px 5px;font-size: 15px;"> <i class="fas fa-trash"></i>
                                                                </a>

                                                                <?php 
                                                                    if($list['block_status'] == 0)
                                                                    {
                                                                        ?>
                                                                        <a id="<?php echo $list['member_id']; ?>" onclick="unblockMember(this.id);" class="btn btn-warning waves-effect waves-light"style="padding: 0px 5px;font-size: 15px;"> <i class="fas fa-ban"></i>
                                                                        </a>
                                                                        <?php
                                                                    }else if($list['block_status'] == 1)
                                                                    {
                                                                        ?>
                                                                        <a id="<?php echo $list['member_id']; ?>" onclick="blockMember(this.id);" class="btn btn-success waves-effect waves-light"style="padding: 0px 5px;font-size: 15px;"> <i class="fas fa-ban"></i>
                                                                        </a>
                                                                        <?php
                                                                    }
                                                                 ?>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                }
                                            }
                                            else
                                            {
                                                ?>
                                                    <tr><td colspan="15" style="text-align: center;"> No Record Found </td></tr>
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

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel"> Edit Member Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="member_details">
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">
    function editMember(member_id)
    {
        $.ajax({
            url: '<?php echo base_url(); ?>Member/MemberRegister/editMember',
            type: 'POST',
            data: {member_id: member_id},
            success:function(res)
            {
                $("#member_details").html(res);
            }
        });
    }
</script>

<script type="text/javascript">
    function deleteMember(id)
   {  
      swal({
        title: "Are you sure?",
        text: "You want to delete this file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) =>{
        if (willDelete) {
          $.ajax({
            type: 'POST',
            url: '<?php echo base_url();?>Member/MemberRegister/deleteMember',
            data:{member_id:id,},
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

<script type="text/javascript">
    function unblockMember(id)
   {  
      swal({
        title: "Are you sure?",
        text: "You want to unblock this member !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) =>{
        if (willDelete) {
          $.ajax({
            type: 'POST',
            url: '<?php echo base_url();?>Member/MemberRegister/unblock_member',
            data:{member_id:id,},
            success:function(data)
            {
                // console.log(data);
              if(data=='200'){
                  swal("Successfully Unblocked!!", {
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

   function blockMember(id)
   {  
      swal({
        title: "Are you sure?",
        text: "You want to block this member !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) =>{
        if (willDelete) {
          $.ajax({
            type: 'POST',
            url: '<?php echo base_url();?>Member/MemberRegister/block_member',
            data:{member_id:id,},
            success:function(data)
            {
                // console.log(data);
              if(data=='200'){
                  swal("Successfully Unblocked!!", {
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
        $('#memberTable').DataTable();
    });
</script>