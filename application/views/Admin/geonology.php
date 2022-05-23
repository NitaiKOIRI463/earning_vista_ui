

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Geonology</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Geonology > </a></li>
                                <li class="breadcrumb-item active">Geonology Details</li>
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
                            <table class="table table-responsive" style="text-align: center;">
                                        <tr>
                                           
                                           <th style="text-align: center;" colspan="8">
                                            <div class="cron-member-shape"></div>
                                            <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="start_node">Node Blank</p>
                                           </th>
                                       </tr>
                                       <tr>
                                           
                                           <th  style="text-align: center;" colspan="4">
                                               <div onclick="getData(this.id)" id="" class="member-shape l_1"></div>
                                               <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="l_1">Node Blank</p>
                                            </th>
                                           <th style="text-align: center;" colspan="4">
                                                <div onclick="getData(this.id)" id="" class="member-shape r_1"></div>
                                                <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="r_1">Node Blank</p>
                                            </th>
                                           
                                       </tr>
                                       <tr>
                                           <th colspan="2">
                                                <div onclick="getData(this.id)" id="" class="member-shape l_2_1"></div>
                                                <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="l_2_1">Node Blank</p>
                                            </th>
                                           <th colspan="2">
                                                <div onclick="getData(this.id)" id="" class="member-shape l_2_2"></div>
                                                <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="l_2_2">Node Blank</p>
                                            </th>
                                           <th colspan="2">
                                                <div onclick="getData(this.id)" id="" class="member-shape r_2_1"></div>
                                                <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="r_2_1">Node Blank</p>
                                            </th>
                                           <th colspan="2">
                                                <div onclick="getData(this.id)" id="" class="member-shape r_2_2"></div>
                                                <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="r_2_2">Node Blank</p>
                                            </th>
                                       </tr>
                                       <tr>
                                           <th>
                                                <div onclick="getData(this.id)" id="" class="member-shape l_3_1"></div>
                                                <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="l_3_1">Node Blank</p>
                                            </th>
                                           <th>
                                                <div onclick="getData(this.id)" id="" class="member-shape l_3_2"></div>
                                                <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="l_3_2">Node Blank</p>
                                            </th>
                                           <th>
                                                <div onclick="getData(this.id)" id="" class="member-shape l_3_3"></div>
                                                <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="l_3_3">Node Blank</p>
                                            </th>
                                           <th>
                                                <div onclick="getData(this.id)" id="" class="member-shape l_3_4"></div>
                                                <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="l_3_4">Node Blank</p>
                                            </th>
                                           <th>
                                                <div onclick="getData(this.id)" id="" class="member-shape r_3_1"></div>
                                                <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="r_3_1">Node Blank</p>
                                            </th>
                                           <th>
                                                <div onclick="getData(this.id)" id="" class="member-shape r_3_2"></div>
                                                <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="r_3_2">Node Blank</p>
                                            </th>
                                           <th>
                                                <div onclick="getData(this.id)" id="" class="member-shape r_3_3"></div>
                                                <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="r_3_3">Node Blank</p>
                                            </th>
                                           <th>
                                                <div onclick="getData(this.id)" id="" class="member-shape r_3_4"></div>
                                                <p style="width:50%;border-bottom:1px solid;margin: 0px auto;" id="r_3_4">Node Blank</p>
                                            </th>
                                       </tr>
                            </table> 
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<style type="text/css">
    .member-shape{
        width: 50px;
        height: 50px;
        background-color: grey;
        border-radius: 25px;
        margin: 2px auto;
        background-image: url('<?php echo base_url(); ?>assets/user.jpg');
        background-size: cover;
        cursor: pointer;
    }
    .cron-member-shape{
        width: 80px;
        height: 80px;
        border-radius: 25px;
        margin: 2px auto;
        background-image: url('<?php echo base_url(); ?>assets/gold.png');
        background-size: cover;
    }

</style>

<script type="text/javascript">
    getData('<?php echo $this->session->userdata('user_id'); ?>');
    function getData(parent_id)
    {
        $('#start_node').html(parent_id);
        $.ajax({type:'POST',url:'<?php echo base_url(); ?>Admin/Geonology/getGenologyData',data:{parent_id: parent_id},success:function(res){
            res = JSON.parse(res);
            if(res.data.length>0)
            {
                let members = {};
                let max_level = 0;
                $.each(res.data,function(i,v){

                    if(v.m_level==1)
                    {
                        if(v.side=='L')
                        {
                            $('.l_1').attr('id',v.member_id);
                            $('#l_1').html(v.member_id+'<p>'+v.name+'</p>');
                        }else if(v.side=='R')
                        {
                            $('.r_1').attr('id',v.member_id);
                            $('#r_1').html(v.member_id+'<p>'+v.name+'</p>');
                            
                        }
                    }else if(v.m_level==2)
                    {
                        if(v.side=='L' && v.p_side == 'L' && $('.l_1').attr('id')==v.parent_id)
                        {
                            $('.l_2_1').attr('id',v.member_id);
                            $('#l_2_1').html(v.member_id+'<p>'+v.name+'</p>');
                        }if(v.side=='L' && v.p_side == 'R' && $('.l_1').attr('id')==v.parent_id)
                        {
                            $('.l_2_2').attr('id',v.member_id);
                            $('#l_2_2').html(v.member_id+'<p>'+v.name+'</p>');
                        }if(v.side=='R' && v.p_side == 'L' && $('.r_1').attr('id')==v.parent_id)
                        {
                            $('.r_2_1').attr('id',v.member_id);
                            $('#r_2_1').html(v.member_id+'<p>'+v.name+'</p>');
                        }if(v.side=='R' && v.p_side == 'R' && $('.r_1').attr('id')==v.parent_id)
                        {
                            $('.r_2_2').attr('id',v.member_id);
                            $('#r_2_2').html(v.member_id+'<p>'+v.name+'</p>');
                        }
                    }else if(v.m_level==3)
                    {
                        if(v.side=='L' && v.p_side == 'L' && $('.l_2_1').attr('id')==v.parent_id)
                        {
                            $('.l_3_1').attr('id',v.member_id);
                            $('#l_3_1').html(v.member_id+'<p>'+v.name+'</p>');
                        }if(v.side=='L' && v.p_side == 'R' && $('.l_2_1').attr('id')==v.parent_id)
                        {
                            $('.l_3_2').attr('id',v.member_id);
                            $('#l_3_2').html(v.member_id+'<p>'+v.name+'</p>');
                        }if(v.side=='L' && v.p_side == 'L' && $('.l_2_2').attr('id')==v.parent_id)
                        {
                            $('.l_3_3').attr('id',v.member_id);
                            $('#l_3_3').html(v.member_id+'<p>'+v.name+'</p>');
                        }if(v.side=='L' && v.p_side == 'R' && $('.l_2_2').attr('id')==v.parent_id)
                        {
                            $('.l_3_4').attr('id',v.member_id);
                            $('#l_3_4').html(v.member_id+'<p>'+v.name+'</p>');
                        }if(v.side=='R' && v.p_side == 'L' && $('.r_2_1').attr('id')==v.parent_id)
                        {
                            $('.r_3_1').attr('id',v.member_id);
                            $('#r_3_1').html(v.member_id+'<p>'+v.name+'</p>');
                        }if(v.side=='R' && v.p_side == 'R' && $('.r_2_1').attr('id')==v.parent_id)
                        {
                            $('.r_3_2').attr('id',v.member_id);
                            $('#r_3_2').html(v.member_id+'<p>'+v.name+'</p>');
                        }if(v.side=='R' && v.p_side == 'L' && $('.r_2_2').attr('id')==v.parent_id)
                        {
                            $('.r_3_3').attr('id',v.member_id);
                            $('#r_3_3').html(v.member_id+'<p>'+v.name+'</p>');
                        }if(v.side=='R' && v.p_side == 'R' && $('.r_2_2').attr('id')==v.parent_id)
                        {
                            $('.r_3_4').attr('id',v.member_id);
                            $('#r_3_4').html(v.member_id+'<p>'+v.name+'</p>');
                        }
                    }
                    max_level = v.m_level;
                });
                if(max_level==1)
                {
                    $('.l_2_1').attr('id','NA');
                    $('#l_2_1').html('');
                    $('.l_2_2').attr('id','NA');
                    $('#l_2_2').html('');
                    $('.r_2_1').attr('id','NA');
                    $('#r_2_1').html('');
                    $('.r_2_2').attr('id','NA');
                    $('#r_2_2').html('');
                    
                }else if(max_level==2)
                {
                    $('.l_3_1').attr('id','NA');
                    $('#l_3_1').html('');
                    $('.l_3_2').attr('id','NA');
                    $('#l_3_2').html('');
                    $('.l_3_3').attr('id','NA');
                    $('#l_3_3').html('');
                    $('.l_3_4').attr('id','NA');
                    $('#l_3_4').html('');
                    $('.r_3_1').attr('id','NA');
                    $('#r_3_1').html('');
                    $('.r_3_2').attr('id','NA');
                    $('#r_3_2').html('');
                    $('.r_3_3').attr('id','NA');
                    $('#r_3_3').html('');
                    $('.r_3_4').attr('id','NA');
                    $('#r_3_4').html('');
                }
            }else
            {
                $('#l_1').html('NA');
                $('.l_1').attr('id','');
                $('#r_1').html('NA');
                $('.r_1').attr('id','');
                $('.l_2_1').attr('id','NA');
                $('#l_2_1').html('');
                $('.l_2_2').attr('id','NA');
                $('#l_2_2').html('');
                $('.r_2_1').attr('id','NA');
                $('#r_2_1').html('');
                $('.r_2_2').attr('id','NA');
                $('#r_2_2').html('');
                $('.l_3_1').attr('id','NA');
                $('#l_3_1').html('');
                $('.l_3_2').attr('id','NA');
                $('#l_3_2').html('');
                $('.l_3_3').attr('id','NA');
                $('#l_3_3').html('');
                $('.l_3_4').attr('id','NA');
                $('#l_3_4').html('');
                $('.r_3_1').attr('id','NA');
                $('#r_3_1').html('');
                $('.r_3_2').attr('id','NA');
                $('#r_3_2').html('');
                $('.r_3_3').attr('id','NA');
                $('#r_3_3').html('');
                $('.r_3_4').attr('id','NA');
                $('#r_3_4').html('');
                
            }
        }})
    }
</script>