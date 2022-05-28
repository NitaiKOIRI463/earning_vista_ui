
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Activate Member</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Member > </a></li>
                                <li class="breadcrumb-item active">Activate Member</li>
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
                                    <h4 class="card-title">Requested List</h4>
                                </div>
                            </div>

                            <div class="widget-content">
                           <div class="panel-body" style="padding-top: 0px; padding-left: 0px; padding-right: 0px; margin: 0px;padding-right: 10px;width: 100%;overflow-x: scroll;background: white;padding: 10px;">
                            <div class="row">
                                <div class="col-md-4">
                                    <strong>Member Id</strong>
                                    <input onkeyup="getData();" type="text" class="form-control" id="member_id" name="member_id">
                                </div>
                                <div class="col-md-4">
                                    <strong>Current Status</strong>
                                    <select id="current_status" onchange="getData();" class="form-control" name="">
                                        <option value="requested">Requested</option>
                                        <option value="active">Active</option>
                                        <option value="">All</option>
                                    </select>
                                </div>

                            </div>
                            <hr>
                                 <table  border="1" class="table-bordered" style="width: 100%;font-size: 12px;text-align: center;">
                                   <thead style="background-color:black;color: white;">
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Package Id</th>
                                            <th>Member Id</th>
                                            <th>Req. Date</th>
                                            <th>Pakg. Amt.</th>
                                            <th>Req. BTC</th>
                                            <th>Req. USD</th>
                                            <th>Screenshot</th>
                                            <th>Hash Id</th>
                                            <th>Review Date</th>
                                            <th>Current Status</th>
                                            <th>Remarks</th>
                                            <th style="text-align:center;" colspan="2">Action</button></th>
                                            
                                       </tr>
                                   </thead>
                                   <tbody id="data_table">
                                   
                                   </tbody>
                                 </table>
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

<div id="myModal2" class="modal">
 <span style="color:white!important;" onclick="closeRejectBox()" class="close">X</span>
 <div class="modal-content" class="card card-body">
    <form  method="post" action="<?php echo base_url(); ?>Admin/ActivationRequest/reject_package_data">
       <div  class="row">
          <div class="col-md-11">
             <strong style="margin:10px;">Remarks</strong>
             <input type="hidden" id="update_id" name="update_id">
             <textarea id="reject_remarks" style="margin:10px;" name="reject_remarks" class="form-control"></textarea>
          </div>
          <div style="padding: 10px;text-align: center;" class="col-md-12">
             <button type="submit" name="cancelSubmit" class="btn btn-md btn-danger">Confirm</button>
             <button onclick="closeRejectBox()" type="button" class="btn btn-md btn-warning">Cancel</button>
          </div>
       </div>
    </form>
 </div>
</div>

<div id="myModal3" class="modal">
 <span style="color:white!important;" onclick="closeActivetBox()" class="close">X</span>
 <div class="modal-content" class="card card-body">
    <form id="commission_form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/ActivationRequest/saveCommission">
       <div  class="row">
          <div class="col-md-12">
             <table style="border: 1px solid gray;text-align: center;width: 100%;">
                <thead>
                    <tr>
                        <th colspan="6" style="background-color: aliceblue;">
                           <h5 style="text-align: center;"> <span id="leave_span"></span>Sponsor Commision</h5>
                        </th>
                    </tr>
                    <tr>
                        <th style="border: 1px solid gray;">Sr. No.</th>
                        <th style="border: 1px solid gray;">Sponsor Id</th>
                        <th style="border: 1px solid gray;">Sponsor Name</th>
                        <th style="border: 1px solid gray;">Package Total</th>
                        <th style="border: 1px solid gray;">Com. %</th>
                        <th style="border: 1px solid gray;">Commision</th>
                    </tr>
                </thead>
                <tbody id="sponser_data">
                    
                </tbody>
                </table>

                <table style="border: 1px solid gray;text-align: center;width: 100%;">
                <thead>
                    <tr>
                        <th colspan="11" style="background-color: aliceblue;">
                           <h5 style="text-align: center;"> <span id="leave_span"></span>ROI Details</h5>
                        </th>
                    </tr>
                    <tr>
                        <th style="border: 1px solid gray;">Sr. No.</th>
                        <th style="border: 1px solid gray;">Package Id</th>
                        <th style="border: 1px solid gray;">Member Id</th>
                        <th style="border: 1px solid gray;">Member Name</th>
                        <th style="border: 1px solid gray;">Package Amt.</th>
                        <th style="border: 1px solid gray;">ROI %</th>
                        <th style="border: 1px solid gray;">ROI Amt.</th>
                        <th style="border: 1px solid gray;">Days</th>
                        <th style="border: 1px solid gray;">Total</th>
                        <th style="border: 1px solid gray;">Activate On</th>
                        <th style="border: 1px solid gray;">Expire On</th>
                    </tr>
                </thead>
                <tbody id="roi_data">

                        <th style="border: 1px solid gray;">Days</th>                    
                </tbody>
                </table>

                <table style="border: 1px solid gray;text-align: center;width: 100%;">
                <thead>
                    <tr>
                        <th colspan="9" style="background-color: aliceblue;">
                           <h5 style="text-align: center;"> <span id="leave_span"></span>Matching Commossion</h5>
                        </th>
                    </tr>
                    <tr>
                        <th style="border: 1px solid gray;">Sr. No.</th>
                        <th style="border: 1px solid gray;">Member Id</th>
                        <th style="border: 1px solid gray;">Member Name</th>
                        <th style="border: 1px solid gray;">Level</th>
                        <th style="border: 1px solid gray;">Match. Amt.</th>
                        <th style="border: 1px solid gray;">Com. %</th>
                        <th style="border: 1px solid gray;">Total Commission</th>
                        <th style="border: 1px solid gray;">Status</th>
                        <th style="border: 1px solid gray;">Remarks</th>
                    </tr>
                </thead>
                <tbody id="matching_data">
                    
                </tbody>
            </table> 
          </div>
          <div style="padding: 10px;text-align: center;" class="col-md-12">
             <button type="button" name="commission_form" onclick="commission()" class="btn btn-md btn-danger">Confirm</button>
             <button onclick="closeRejectBox()" type="button" class="btn btn-md btn-warning">Cancel</button>
          </div>
       </div>
    </form>
 </div>
</div>


<div id="myModal" class="modal">
     <span style="color:white!important;" onclick="closeImageBox()" class="close">X</span>
     <img class="modal-content" id="img01">
     <div id="caption"></div>
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
        
<style type="text/css">
   input{
      color: black!important;
   }
   body {font-family: Arial, Helvetica, sans-serif;}
   #myImg {
   border-radius: 5px;
   cursor: pointer;
   transition: 0.3s;
   }
   #myImg:hover {opacity: 0.7;}
   /* The Modal (background) */
   .modal {
   display: none; /* Hidden by default */
   position: fixed; /* Stay in place */
   z-index: 1; /* Sit on top */
   padding-top: 100px; /* Location of the box */
   left: 0;
   top: 0;
   width: 100%; /* Full width */
   height: 100%; /* Full height */
   overflow: auto; /* Enable scroll if needed */
   background-color: rgb(0,0,0); /* Fallback color */
   background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
   }
   /* Modal Content (image) */
   .modal-content {
   margin: auto;
   display: block;
   width: 80%;
   max-width: 700px;
   }
   /* Caption of Modal Image */
   #caption {
   margin: auto;
   display: block;
   width: 80%;
   max-width: 700px;
   text-align: center;
   color: #ccc;
   padding: 10px 0;
   height: 150px;
   }
   /* Add Animation */
   .modal-content, #caption {  
   -webkit-animation-name: zoom;
   -webkit-animation-duration: 0.6s;
   animation-name: zoom;
   animation-duration: 0.6s;
   }
   @-webkit-keyframes zoom {
   from {-webkit-transform:scale(0)} 
   to {-webkit-transform:scale(1)}
   }
   @keyframes zoom {
   from {transform:scale(0)} 
   to {transform:scale(1)}
   }
   /* The Close Button */
   .close {
   position: absolute;
   top: 73px;
   right: 25px;
   color: #f1f1f1;
   font-size: 40px;
   font-weight: bold;
   transition: 0.3s;
   }
   .close:hover,
   .close:focus {
   color: #bbb;
   text-decoration: none;
   cursor: pointer;
   }
   /* 100% Image Width on Smaller Screens */
   @media only screen and (max-width: 700px){
   .modal-content {
   width: 100%;
   }
   }
</style>
<script type="text/javascript">
    getData();
    function getData()
    {
        $('#data_table').html('<tr><td colspan="13">Proccessing Please Wait..</td></tr>');
        let member_id = $('#member_id').val();
        let current_status = $('#current_status').val();
        $.ajax({
            type:'POST',
            url:'<?php echo base_url(); ?>Admin/ActivationRequest/get_request_data',
            data:{current_status: current_status,member_id: member_id},
            success:function(res)
            {
                res = JSON.parse(res);
                if(res.data.length>0)
                {   
                    $('#data_table').html('');
                    $.each(res.data,function(i,v){
                        
                        let activation_date = v.activation_date==null?"":v.activation_date;
                        $('#data_table').append('<tr>'+
                            '<td>'+(i+1)+'</td>'+
                            '<td>'+v.package_id+'</td>'+
                            '<td>'+v.member_id+'</td>'+
                            '<td>'+v.c_date+'</td>'+
                            '<td>'+v.package_amount+'</td>'+
                            '<td>'+v.required_btc+'</td>'+
                            '<td>'+v.package_amount+'</td>'+
                            '<input type="hidden" id="transaction_hash_'+i+'" value="'+v.transaction_no+'" name="">'+
                            '<td><button class="btn btn-sm btn-info" id="'+v.screenshot+'" onclick="openPopupImageBox(this.id)" >View</button></td>'+
                            '<td>'+v.transaction_no.substr(0,50)+'.. <i class="bx bx-copy" id="copy_'+i+'" onclick="copyNow('+i+')" style="cursor: pointer;"></i></td>'+
                            '<td>'+activation_date+'</td>'+
                            '<td>'+v.current_status+'</td>'+
                            '<td>'+v.remarks+'</td>'+
                            '<td><button class="btn btn-sm btn-success" onclick="sumbitForm('+v.id+')">Activate</button></td>'+
                            '<td><button onclick="openRejectBox('+v.id+')" class="btn btn-sm btn-danger">Reject</button></td>'+
                            '</tr>');
                    });
                }else
                {
                    $('#data_table').html('<tr><td colspan="13">No Record</td></tr>');
                }
                console.log(res);
            }
        });

    }

    function commission()
   {

        swal({
          title: "Are you sure?",
          text: "",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
           document.getElementById('commission_form').submit();
          }
        });
   }
   var modal = document.getElementById("myModal");
   var modal2 = document.getElementById("myModal2");
   var modal3 = document.getElementById("myModal3");
   
   // Get the image and insert it inside the modal - use its "alt" text as a caption
   var modalImg = document.getElementById("img01");
   var captionText = document.getElementById("caption");
   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("close")[0];
   var span2 = document.getElementsByClassName("close")[1];
    function openRejectBox(id)
   {
      
      document.getElementById('update_id').value = id;
      modal2.style.display = "block";
   }

   function closeRejectBox()
   {
      document.getElementById('reject_remarks').value = '';
      document.getElementById('update_id').value = '';
      modal2.style.display = "none";
   }

   function openPopupImageBox(src)
   {
     modal.style.display = "block";
     modalImg.src = src;
     //captionText.innerHTML = tittle;
   }
   // When the user clicks on <span> (x), close the modal
   function closeImageBox()
   {
        document.getElementById("myModal").style.display = "none";
   }

   function closeActivetBox()
   {
        document.getElementById("myModal3").style.display = "none";
   }
   
   
   function copyNow(id)
   {
      let text = $('#transaction_hash_'+id).val();
      navigator.clipboard.writeText(text);
      $('#copy_'+id).css('color','green');
      $('#copy_'+id).html(' Copied');
   }


  

   function sumbitForm(id)
   {
      swal({
          title: "Are you sure?",
          text: "",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
                type:'POST',
                url:'<?php echo base_url(); ?>Admin/ActivationRequest/get_activate_commission_data',
                data:{user_request_id: id},
                success:function(res)
                {
                    res = JSON.parse(res);
                    if(res.response_code==200)
                    {
                        
                        if(res.data.sponser_income.sponser_member_id!=undefined)
                        {   
                            $('#sponser_data').html('');
                           $('#sponser_data').append('<tr>'+
                                '<td style="border: 1px solid gray;"><input checked="checked" type="checkbox" value="'+res.data.sponser_income.sponser_member_id+'" name="sponserParent">'+
                                '<input type="hidden" value="'+res.data.sponser_income.sponser_member_id+'|'+res.data.roi.member_id+'|'+res.data.sponser_income.total_commisson+'|'+res.data.roi.package_amount+'|'+res.data.sponser_income.sponser_income_perc+'" name="sponser">'+
                                '</td>'+
                                '<td style="border: 1px solid gray;">'+res.data.sponser_income.sponser_member_id+'</td>'+
                                '<td style="border: 1px solid gray;">'+res.data.sponser_income.sponser_name+'</td>'+
                                '<td style="border: 1px solid gray;">'+res.data.sponser_income.pkg_amount+'</td>'+
                                '<td style="border: 1px solid gray;">'+res.data.sponser_income.sponser_perc+'%</td>'+
                                '<td style="border: 1px solid gray;">'+res.data.sponser_income.total_commisson+'</td>'+
                            '</tr>');
                        }else
                        {
                            $('#sponser_data').append('<tr><td colspan="6">No Record Found</td></tr>');
                        }

                        if(res.data.roi!=null)
                        {   
                           $('#roi_data').html('');
                           $('#roi_data').append('<tr>'+
                                    '<td style="border: 1px solid gray;">1'+
                                    '<input type="hidden" name="reg_id" value="'+res.data.roi.reg_id+'" >'+
                                    '<input type="hidden" name="package_amount" value="'+res.data.roi.package_amount+'" >'+
                                    '<input type="hidden" name="activate_date" value="'+res.data.roi.activate_date+'" >'+
                                    '<input type="hidden" name="expiry_date" value="'+res.data.roi.expiry_date+'" >'+
                                    '</td>'+
                                    '<td style="border: 1px solid gray;">'+res.data.roi.package_id+'</td>'+
                                    '<td style="border: 1px solid gray;">'+res.data.roi.member_id+'</td>'+
                                    '<td style="border: 1px solid gray;">'+res.data.roi.name+'</td>'+
                                    '<td style="border: 1px solid gray;">'+res.data.roi.package_amount+'</td>'+
                                    '<td style="border: 1px solid gray;">'+res.data.roi.roi_perc+'%</td>'+
                                    '<td style="border: 1px solid gray;">'+res.data.roi.roi_amount+'</td>'+
                                    '<td style="border: 1px solid gray;">'+res.data.roi.roi_days+'</td>'+
                                    '<td style="border: 1px solid gray;">'+res.data.roi.total_return+'</td>'+
                                    '<td style="border: 1px solid gray;">'+res.data.roi.activate_date+'</td>'+
                                    '<td style="border: 1px solid gray;">'+res.data.roi.expiry_date+'</td>'+
                                '</tr>');
                        }else
                        {
                            $('#roi_data').append('<tr><td colspan="6">No Record Found</td></tr>');
                        }
                        
                        console.log(res.data.matching_income);
                        if(res.data.matching_income.length>0)
                        {   
                            $('#matching_data').html('');
                            $.each(res.data.matching_income,function(i,v){

                                $('#matching_data').append('<tr>'+
                                    '<td style="border: 1px solid gray;"><input checked="checked" type="checkbox" value="'+v.parent_id+'" name="machingParent[]">'+
                                    '<input type="hidden" value="'+v.parent_id+'|'+v.parent_level+'|'+v.matching_amount+'|'+v.matching_perc+'|'+v.commission+'|'+v.maching_status+'|'+v.remarks+'|'+res.data.roi.member_id+'|'+v.side+'" name="maching[]">'+
                                    '</td>'+
                                    '<td style="border: 1px solid gray;">'+v.parent_id+'</td>'+
                                    '<td style="border: 1px solid gray;">'+v.parent_name+'</td>'+
                                    '<td style="border: 1px solid gray;">'+v.parent_level+'</td>'+
                                    '<td style="border: 1px solid gray;">'+v.matching_amount+'</td>'+
                                    '<td style="border: 1px solid gray;">'+v.matching_perc+'</td>'+
                                    '<td style="border: 1px solid gray;">'+v.commission+'</td>'+
                                    '<td style="border: 1px solid gray;">'+v.maching_status+'</td>'+
                                    '<td style="border: 1px solid gray;">'+v.remarks+'</td>'+
                                '</tr>');

                            });
                           
                        }else
                        {
                            $('#matching_data').append('<tr><td colspan="7">No Record Found</td></tr>');
                        }




                    }else
                    {
                        swal('error',res.msg,'error');
                    }
                    
                    }
                });
            modal3.style.display = "block";
           // document.getElementById('approve_'+id).submit();
          }
        });
      
   }

</script>