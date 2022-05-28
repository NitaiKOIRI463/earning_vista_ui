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
<<<<<<< Updated upstream
                            
                            <div class="card-body pt-2" style="border: 1px solid gray;">

                                <div class="row" style="padding-bottom: 20px;">
                                    <div class="col-md-12">
                                        <div class="form-group" style="text-align: center;">
                                            <button type="button" class="btn btn-md btn-primary" >
                                                <span>Member Id : <?php echo $this->session->userdata('user_id'); ?></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

=======
                            <div class="card-body pt-2" style="border: 1px solid gray;">
>>>>>>> Stashed changes
                                <div class="efffect-details">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                               <table class="table table-responsive" style="border: 1px solid gray;text-align: center;">
                                                    <thead>
                                                        <tr>
<<<<<<< Updated upstream
                                                            <th colspan="6" style="background-color: burlywood;">
                                                                <h5>Team Bussiness</h5>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th style="border: 1px solid gray;">Sl No</th>
                                                            <th style="border: 1px solid gray;">Member Id</th>
                                                            <th style="border: 1px solid gray;">Name</th>
                                                            <th style="border: 1px solid gray;">Member Id</th>
                                                            <th style="border: 1px solid gray;">Name</th>
=======
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
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                                                    <tbody id="bussinessTable">
=======
                                                    <tbody id="tableData">
>>>>>>> Stashed changes
                                                        
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
<<<<<<< Updated upstream
    getTeam_bussiness();
    function getTeam_bussiness()
    {
=======
    var role_type = '<?php echo $this->session->userdata('role_type'); ?>';
    getteamBussiness();
    function getteamBussiness()
    {
        var member_id = $('#member_id').val();
        member_id = member_id==''?ses_member_id:member_id;
                
>>>>>>> Stashed changes
        $.ajax({
            url: '<?php echo base_url('Member/TeamBussiness/GetTeamBussinessList'); ?>',
            type: 'POST',
            data: {member_id: ses_member_id},
            success:function(res)
            {
<<<<<<< Updated upstream
                var response = JSON.parse(res);
                console.log(response);
                if(response.data.count_L_R.length > 0)
                {
                    var totalLeft = response.data.count_L_R[0]['total'];
                    var totalRight = response.data.count_L_R[1]['total'];
                    console.log(totalLeft);
                    console.log(totalRight);

                    if(response.data.data.length > 0)
                    {
                        $.each(response.data.data,function(ind,val){
                            if(val.side == "L" || val.side == "R") 
                            {
                                $('#bussinessTable').append('<tr>'+
                                                '<td style="border: 1px solid gray;">'+(ind+1)+'</td>'+
                                                '<td style="border: 1px solid gray;">'+val.member_id+'</td>'+
                                                '<td style="border: 1px solid gray;">'+val.name+'</td>'+
                                                '<td style="border: 1px solid gray;">'+val.member_id+'</td>'+
                                                '<td style="border: 1px solid gray;">'+val.name+'</td>'+
                                            '</tr>');
                            }
                            // if(val.side == "R")
                            // {
                            //     $('#bussinessTable').append('<tr>'+
                            //                     // '<td style="border: 1px solid gray;">'+(ind+1)+'</td>'+
                            //                     '<td style="border: 1px solid gray;">'+val.member_id+'</td>'+
                            //                     '<td style="border: 1px solid gray;">'+val.name+'</td>'+
                            //                     // '<td style="border: 1px solid gray;"></td>'+
                            //                     // '<td style="border: 1px solid gray;"></td>'+
                            //                 '</tr>');
                            // }
                        });
                    }else{
                        $('#bussinessTable').html('<tr colspan="5"><td style="text-align: center;"> No Record Found !!</td></tr>');        
                    }

                    
                }else{
                    $('#bussinessTable').html('<tr colspan="5"><td style="text-align: center;"> No Record Found !!</td></tr>');
                }

=======
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
                
                
                
>>>>>>> Stashed changes
            }
        });
    }
</script>