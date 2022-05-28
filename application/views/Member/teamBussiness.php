<style type="text/css">
    #leftTbalepage_paginate{
        float: right;
    }
    #leftTbalepage_paginate{
        float: right;
    }
    #leftTbalepage_previous{
        margin: 5px;
        cursor: pointer;
    }
    #leftTbalepage_next{
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
                        <h4 class="mb-sm-0 font-size-18">Team Bussiness</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Team > </a></li>
                                <li class="breadcrumb-item active">Team Bussiness</li>
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
                            <div class="card-body pt-2" style="border: 1px solid gray;">
                                <div class="efffect-details">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                               <table class="table table-responsive" style="border: 1px solid gray;text-align: center;">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="7">
                                                                <input type="text" class="form-control" id="member_id" name="member_id">
                                                            </th>
                                                            <th>
                                                                <button type="button" onclick="getteamBussiness()" class="btn btn-md btn-info">
                                                                    Search
                                                                </button>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="4">Left 
                                                                <span id="left-span" class="btn btn-sm btn-info">0</span>
                                                                 <span id="left-span-business" class="btn btn-sm btn-success">0</span>
                                                            </th>
                                                            <th colspan="4">Right <span id="right-span" class="btn btn-sm btn-info">0</span>
                                                            <span id="right-span-business" class="btn btn-sm btn-success">0</span>
                                                            </th>
                                                        </tr>
                                                       <tr>
                                                           <th>Member ID</th>
                                                           <th>Name</th>
                                                           <th>Status</th>
                                                           <th>Package</th>
                                                           <th>Member ID</th>
                                                           <th>Name</th>
                                                           <th>Status</th>
                                                           <th>Package</th>
                                                           
                                                       </tr>
                                                    </thead>
                                                    <tbody id="tableData">
                                                        
                                                    </tbody>
                                                </table>  
                                            </div>

                                        </div>
                                    </div>      
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

<script type="text/javascript">
    var ses_member_id = '<?php echo $this->session->userdata('user_id'); ?>';
    var role_type = '<?php echo $this->session->userdata('role_type'); ?>';
    getteamBussiness();
    function getteamBussiness()
    {
        var member_id = $('#member_id').val();
        member_id = member_id==''?ses_member_id:member_id;
                
        $.ajax({
            url: '<?php echo base_url('Member/TeamBussiness/GetTeamBussinessList'); ?>',
            type: 'POST',
            data: {member_id: member_id},
            success:function(res)
            {
                response = JSON.parse(res);
                // console.log();
                let left = response.data.left.length;
                let right = response.data.right.length;
                let length = 0;
                if(left>=right)
                {
                    length = left;
                }else if(right>=left)
                {
                    length = right;
                }
                let lf = 0;
                let rf = 0;
                let lb = 0;
                let rb = 0;
                $('#left-span').html(left);
                $('#right-span').html(right);
                if(length>0)
                {
                    $('#tableData').html('');
                    for(let i=0;i<length;i++)
                    {

                        let content = '<tr>';
                        if(lf<left)
                        {
                            let st = '<span style="color:red;">Inactive</span>';
                            if(response.data.left[i].activation_status==1)
                            {
                                st = '<span style="color:green;">Active</span>';
                            }

                            content += '<td>'+response.data.left[i].member_id+'</td>'+
                                    '<td>'+response.data.left[i].name+'</td>'+
                                    '<td>'+st+'</td>'+
                                    '<td>'+response.data.left[i].total_package+'</td>';
                            lb += parseFloat(response.data.left[i].total_package);
                            lf++;
                        }else
                        {
                            content += '<td>-</td>'+
                                    '<td>-</td>'+
                                    '<td>-</td>'+
                                    '<td>-</td>';
                        }
                        if(rf<right)
                        {
                            let st = '<span style="color:red;">Inactive</span>';
                            if(response.data.right[i].activation_status==1)
                            {
                                st = '<span style="color:green;">Active</span>';
                            }

                            content += '<td>'+response.data.right[i].member_id+'</td>'+
                                    '<td>'+response.data.right[i].name+'</td>'+
                                    '<td>'+st+'</td>'+
                                    '<td>'+response.data.right[i].total_package+'</td>';
                            rb += parseFloat(response.data.right[i].total_package);
                            rf++;
                        }else
                        {
                            content += '<td>-</td>'+
                                    '<td>-</td>'+
                                    '<td>-</td>'+
                                    '<td>-</td>';
                        }
                        content += '</tr>';
                        // alert(content);
                        $('#tableData').append(content);
                    }


                    $('#left-span-business').html(lb);
                    $('#right-span-business').html(rb);
                    
                }else
                {
                    $('#tableData').html('<tr>'+
                                        '<td colspan="4">No Record Found</td>'+
                                        '<td colspan="4">No Record Found</td>'+
                                         '</tr>');
                }
                
                
                
            }
        });
    }
</script>