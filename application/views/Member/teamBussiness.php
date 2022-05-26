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
                            <div class="row" style="padding-bottom: 20px;">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Member Id</label>
                                        <input type="text" name="member_id" id="member_id" required placeholder="enter member id" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="padding-top: 28px;">
                                        <button class="btn btn-md btn-success" type="button" onclick="getteamBussiness();">Show</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-2" style="border: 1px solid gray;">
                                <div class="efffect-details">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                               <table id="leftTbalepage" class="table table-responsive" style="border: 1px solid gray;text-align: center;">
                                                    <thead>
                                                        <tr style="background-color: aliceblue;">
                                                            <th colspan="4" style="padding: 5px;">
                                                                <h4>Left Side</h4>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th style="border: 1px solid gray;">Sl. No.</th>
                                                            <th style="border: 1px solid gray;">Member Id</th>
                                                            <th style="border: 1px solid gray;">Side</th>
                                                            <th style="border: 1px solid gray;">Bussiness</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tableLeft">
                                                        
                                                    </tbody>
                                                </table>  
                                            </div>

                                            <div class="col-md-6">
                                               <table id="rightSide_table" class="table table-responsive" style="border: 1px solid gray;text-align: center;">
                                                    <thead>
                                                        <tr style="background-color: aliceblue;">
                                                            <th colspan="4" style="padding: 5px;">
                                                                <h4>Right Side</h4>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th style="border: 1px solid gray;">Sl. No.</th>
                                                            <th style="border: 1px solid gray;">Member Id</th>
                                                            <th style="border: 1px solid gray;">Side</th>
                                                            <th style="border: 1px solid gray;">Bussiness</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tableRight">

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
    getteamBussiness();
    function getteamBussiness()
    {
        var memberId = $('#member_id').val();
        member_id = memberId==''?ses_member_id:memberId;
                
        $.ajax({
            url: '<?php echo base_url('Member/TeamBussiness/GetTeamBussinessList'); ?>',
            type: 'POST',
            data: {member_id: member_id},
            success:function(res)
            {
                response = JSON.parse(res);
                console.log(response);
                if(response.data.length > 0)
                {
                    let li = 1;
                    let ri = 1;
                    $('#tableLeft').html('');
                    $('#tableRight').html('');
                    $.each(response.data,function(i,v){
                        if(v.side == 'L')
                        {
                            $('#tableLeft').append('<tr>'+
                                        '<td style="border: 1px solid gray;">'+(li++)+'</td>'+
                                        '<td style="border: 1px solid gray;">'+v.member_id+'</td>'+
                                        '<td style="border: 1px solid gray;">'+v.side+'</td>'+
                                        '<td style="border: 1px solid gray;">0</td>'+
                                        '</tr>');        
                        }
                        else if(v.side == 'R')
                        {
                            $('#tableRight').append('<tr>'+
                                        '<td style="border: 1px solid gray;">'+(ri++)+'</td>'+
                                        '<td style="border: 1px solid gray;">'+v.member_id+'</td>'+
                                        '<td style="border: 1px solid gray;">'+v.side+'</td>'+
                                        '<td style="border: 1px solid gray;">0</td>'+
                                    '</tr>');
                        }

                        
                    });
                }
                else{
                     $('#tableLeft').html('<tr colspan="4"><td style="text-align: center;"> No Record Found !!</td></tr>');
                     $('#tableRight').html('<tr colspan="4"><td style="text-align: center;"> No Record Found !!</td></tr>');
                }
            }
        });
    }
</script>

<script>
    $(document).ready(function () {
        $('#leftTbalepage').DataTable();
    });

    $(document).ready(function () {
        $('#rightSide_table').DataTable();
    });
</script>