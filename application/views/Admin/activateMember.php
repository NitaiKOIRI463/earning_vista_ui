
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
    <form  method="post" action="wallet_refill_request.php">
       <div  class="row">
          <div class="col-md-11">
             <strong style="margin:10px;">Remarks</strong>
             <input type="hidden" id="member_id" name="member_id">
             <input type="hidden" id="update_id" name="update_id">
             <textarea id="reject_remarks" style="margin:10px;" name="reject_remarks" class="form-control"></textarea>
             <strong style="margin:10px;">Email Remarks</strong>
             <textarea id="reject_mail_remarks" style="margin:10px;" name="reject_mail_remarks"  class="form-control"></textarea>
          </div>
          <div style="padding: 10px;text-align: center;" class="col-md-12">
             <button type="submit" name="cancelSubmit" class="btn btn-md btn-danger">Confirm</button>
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
                            '<td><button class="btn btn-sm btn-success" onclick="sumbitForm('+v.id+')">Activate</button></td>'+
                            '<td><button onclick="openRejectBox(\''+v.member_id+'\','+v.id+')" class="btn btn-sm btn-danger">Reject</button></td>'+
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


   var modal = document.getElementById("myModal");
   var modal2 = document.getElementById("myModal2");
   
   // Get the image and insert it inside the modal - use its "alt" text as a caption
   var modalImg = document.getElementById("img01");
   var captionText = document.getElementById("caption");
   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("close")[0];
   var span2 = document.getElementsByClassName("close")[1];
    function openRejectBox(member_id,id)
   {
      document.getElementById('member_id').value = member_id;
      document.getElementById('update_id').value = id;
      console.log(member_id+''+id);
      modal2.style.display = "block";
   }

   function closeRejectBox()
   {
      document.getElementById('reject_remarks').value = '';
      document.getElementById('member_id').value = '';
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
           document.getElementById('approve_'+id).submit();
          }
        });
      
   }

</script>