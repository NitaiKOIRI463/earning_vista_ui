<style type="text/css">
    #withdrawTable_paginate{
        float: right;
    }
    #withdrawTable_previous{
        margin: 5px;
        cursor: pointer;
    }
    #withdrawTable_next{
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
                        <h4 class="mb-sm-0 font-size-18">Withdrawal Request</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Withdrawal > </a></li>
                                <li class="breadcrumb-item active">Fund Withdrawal Request</li>
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
                            <div class="row" style="padding-bottom: 20px;">
                                <!-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Member Id</label>
                                        <input type="text" name="member_id" id="member_id" required placeholder="enter member id" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group" style="padding-top: 28px;">
                                        <button class="btn btn-md btn-success" type="button">Show</button>
                                    </div>
                                </div> -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-select" name="current_status" id="current_status" onchange="getRequest_lists(this.value);">
                                            <option value="requested">Requested</option>
                                            <option value="approved">Approved</option>
                                            <option value="rejected">Rejected</option>
                                        </select>
                                    </div>
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
                                            <th style="width: 110px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="requestedList_withdrw">
                                        
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

<script type="text/javascript">
    getRequest_lists();
    function getRequest_lists()
    {
        // debugger
        var current_status = $("#current_status").val();
        $.ajax({
            url: '<?php echo base_url('Admin/WithdrawalRequest/RequestList'); ?>',
            type: 'POST',
            data: {current_status: current_status},
            success:function(res)
            {
                var response = JSON.parse(res);
                console.log(response);
                if(response.data.length > 0)
                {
                    $("#requestedList_withdrw").html('');
                    var status = '';
                    $.each(response.data,function(i,v){
                        if(v.current_status == 'requested')
                        {
                            status = '<span class="badge badge-pill badge-soft-warning font-size-11">Requested</span>';
                        }
                        if(v.current_status == 'approved')
                        {
                            status = '<span class="badge badge-pill badge-soft-success font-size-11">Approved</span>';

                        }
                        if(v.current_status == 'rejected')
                        {
                            status = '<span class="badge badge-pill badge-soft-danger font-size-11">Rejected</span>';
                        }
                        $("#requestedList_withdrw").append('<tr>'+
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+v.member_id+'</td>'+
                                    '<td>'+v.fund+'</td>'+
                                    '<td>'+status+'</td>'+
                                    '<td>'+
                                        '<a id="'+v.withdraw_id+'|'+v.fund+'|'+v.member_id+'" onclick="approveReq(this.id);" class="btn btn-success waves-effect waves-light" style="padding: 0px 4px;font-size: 10px;">Approve</a>'+
                                        '<a id="'+v.withdraw_id+'|'+v.member_id+'" onclick="rejectReq(this.id);" class="btn btn-danger waves-effect waves-light" style="padding: 0px 4px;margin-left: 2px;font-size: 10px;">Reject<a/>'+
                                    '</td>'+
                                '</tr>');
                    });
                }
                else
                {
<<<<<<< Updated upstream
                     $("#requestedList_withdrw").html('<tr><td colspan="5"> No Record Found !!</td></tr>')
=======
                    $("#requestedList_withdrw").html('<tr><td colspan="5" style="text-align:center;"> No Record Found !!</td></tr>')
>>>>>>> Stashed changes
                }
            }
        });
    }
</script>

<script type="text/javascript">
    function approveReq(data)
    {
        var array = data;
        var details = array.split("|");
        var witdrawal_id = details[0];
        var fund = details[1];
        var member_id = details[2];

        swal("Enter Transection Pin",{
            content: "input",
            buttons: true,
            // title: "Are you sure?",
            // text: "You want to approve!",
            // icon: "warning",
            // buttons: true,
            // dangerMode: true,
          })
          .then((value) =>{
            if (value) {
              $.ajax({
                type: 'POST',
                url: '<?php echo base_url();?>Member/Withdrawal/approveRequest',
                data:{member_id: member_id,fund: fund,withdraw_id: witdrawal_id,transection_pin: value},
                success:function(data)
                {
                    // console.log(data);
                  if(data=='200'){
                      swal("Successfully Approved!!", {
                      icon: "success",
                    });
                    setTimeout(function(){
                           location.reload();
                      }, 1000);
                  }else if(data ==400){
                    swal("Transection pin not matched !!", {
                    icon: "error",
                    });
                    setTimeout(function(){
                           location.reload();
                      }, 1000);    
                  }else{
                    swal("Something Went Wrong !!", {
                    icon: "error",
                    });
                    setTimeout(function(){
                           location.reload();
                      }, 1000);
                  }
                }
              });
            } 
        });
    }
</script>

<script type="text/javascript">
    function rejectReq(data)
    {
        var array = data;
        var details = array.split("|");
        var witdrawal_id = details[0];
        var member_id = details[1];

        swal({
            title: "Are you sure?",
            text: "You want to Reject!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) =>{
            if (willDelete) {
              $.ajax({
                type: 'POST',
                url: '<?php echo base_url();?>Member/Withdrawal/rejectRequest',
                data:{member_id: member_id,withdraw_id: witdrawal_id},
                success:function(data)
                {
                    console.log(data);
                  if(data=='200'){
                    swal("Successfully Rejected!!", {
                      icon: "success",
                    });
                    setTimeout(function(){
                           location.reload();
                      }, 1000);
                  }else{
                    swal("Something Went Wrong !!", {
                    icon: "error",
                    });
                    setTimeout(function(){
                           location.reload();
                      }, 1000);
                  }
                }
        
              });
            } 
        });
    } 
</script>

<script>
    $(document).ready(function () {
        $('#withdrawTable').DataTable();
    });
</script>