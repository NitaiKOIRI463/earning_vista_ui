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

                                <div class="row" style="padding-bottom: 20px;">
                                    <div class="col-md-12">
                                        <div class="form-group" style="text-align: center;">
                                            <button type="button" class="btn btn-md btn-primary" >
                                                <span>Member Id : <?php echo $this->session->userdata('user_id'); ?></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="efffect-details">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                               <table class="table table-responsive" style="border: 1px solid gray;text-align: center;">
                                                    <thead>
                                                        <tr>
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
                                                        </tr>
                                                    </thead>
                                                    <tbody id="bussinessTable">
                                                        
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
    getTeam_bussiness();
    function getTeam_bussiness()
    {
        $.ajax({
            url: '<?php echo base_url('Member/TeamBussiness/GetTeamBussinessList'); ?>',
            type: 'POST',
            data: {member_id: ses_member_id},
            success:function(res)
            {
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

            }
        });
    }
</script>