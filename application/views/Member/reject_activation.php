<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Activation Request</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Request</a></li>
                                <li class="breadcrumb-item active">Activation Request</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Package Activation Request</h4>
                            
                            <?php

                                if(empty($prevData))
                                {
                                    ?>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <strong>package</strong>
                                                <select onchange="getPackagedata();get_bitcoin_price();" class="form-control" name="package_id" id="package_id"  required="">
                                                    <option value="">Select Package</option>
                                                    <?php 

                                                        if(!empty($package_list))
                                                        {
                                                            foreach($package_list as $key=>$value)
                                                            {
                                                                ?>

                                                                <option value="<?php echo $value['package_id'].'|'.$value['package_name'].'|'.$value['package_amount'].'|'.$value['profit_perc'].'|'.$value['roi_perc'].'|'.$value['roi_amount'].'|'.$value['total_return'].'|'.intval($value['days']).'|'.$value['sponsor_income_perc'].'|'.$value['matching_perc'].'|'.$value['capping'].'|'.$value['effected_from'].'|'.$value['effected_to']; ?>"><?php echo $value['package_id'].'['.$value['package_name'].'][Amt::'.$value['package_amount'].'$][RTN::'.$value['total_return'].'$][DAYS::'.intval($value['days']).']'; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                     ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <hr>
                                                <table id="package_details" style="width: 100%;font-size: 12px;display: none;" border="5" class="">
                                                    <tr style="background-color: black;color: white;">
                                                        <th><strong>Package Id</strong></th>
                                                        <th colspan="2"><strong>Package Name</strong></th>
                                                        <th><strong>package_amount</strong></th>
                                                        <th><strong>profit_perc</strong></th>
                                                        <th><strong>roi_perc</strong></th>
                                                        <th><strong>roi_amount</strong></th>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <th><span id="lbl_package_id"></span></th>
                                                        <th colspan="2"><span id="lbl_package_name"></span></th>
                                                        <th><span id="lbl_package_amount"></span></th>
                                                        <th><span id="lbl_profit_perc"></span></th>
                                                        <th><span id="lbl_roi_perc"></span></th>
                                                        <th><span id="lbl_roi_amount"></span></th>
                                                    </tr>
                                                    <tr style="background-color: black;color: white;">
                                                        <th><strong>total_return</strong></th>
                                                        <th><strong>days</strong></th>
                                                        
                                                        <th><strong>sponsor_income_perc</strong></th>
                                                        <th><strong>matching_perc</strong></th>
                                                        <th><strong>capping</strong></th>
                                                        <th><strong>effected_from</strong></th>
                                                        <th><strong>effected_to</strong></th>
                                                    </tr>
                                                    <tr>
                                                        <th><span id="lbl_total_return"></span></th>
                                                        <th><span id="lbl_days"></span></th>
                                                        <th><span id="lbl_sponsor_income_perc"></span></th>
                                                        <th><span id="lbl_matching_perc"></span></th>
                                                        <th><span id="lbl_capping"></span></th>
                                                        <th><span id="lbl_effected_from"></span></th>
                                                        <th><span id="lbl_effected_to"></span></th>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="required_btc_buy" style="text-align: center;" class="col-lg-12">
                                            <div class="form-group">
                                                <hr>
                                                <p><strong>Required BTC</strong></p>
                                               <input type="text" name="btc_required" id="btc_required">
                                            </div>
                                        </div>
                                        <div id="btn_buy" style="text-align: center;display: none;" class="col-lg-12">
                                            <div class="form-group">
                                                <hr>
                                                <button type="button" onclick="generateAddress()" class="btn btn-md btn-info">Buy Package</button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }else
                                {
                                    ?>
                                    <div style="text-align: center;" class="col-lg-12">
                                         <section style="display: block;" id="qr_section">
                                           <h1 style="text-align:center;">Remaing <span id="remain_seconds">30:00</span> Seconds(Approx <span id="remain_minutes"></span>Minutes)</h1>
                                           <div id="output"></div>
                                           <p id="show_generate_address"><?php echo $bitcoin_address; ?><i class="icon-copy" onclick="copyNow(this)" style="cursor: pointer;"></i></p>
                                           <p>You can send Only Bitcoin to the above address.</p>
                                         </section>
                                     </div>
                                     <div style="" class="col-lg-12">
                                        
                                           <!--  <input type="hidden" required="required" value="" name="update_id"> -->
                                            <div id="required_btc_pay" style="text-align: center;" class="col-lg-12">
                                                <div class="form-group">
                                                    <hr>
                                                    <p><strong>Required BTC</strong></p>
                                                   <input type="text" name="btc_required_pay" id="btc_required_pay">
                                                </div>
                                            </div>
                                            <input type="hidden" value="update_address_form" name="update_address_form">
                                            <div class="row">
                                               
                                               <div style="margin: 10px;" class="col-md-8">
                                                  <strong>Transaction Hash</strong>
                                                  <textarea required="required" class="form-control" name="transaction_hash" id="transaction_hash"></textarea>
                                               </div>

                                               <div style="margin: 10px;" class="col-md-8">
                                                   <strong style="font-size:18px;">Screenshot</strong>
                                                   <br>
                                                   <button onclick="openFile()" type="button" class="btn btn-info btn-md">Upload Photo</button>
                                                   <input style="display:none;" required="required" id="file_system" type="file" onchange="onFileSelected(event)" name="screenshot">
                                                   <input style="display:none;" required="required" id="file_screenshot" type="hidden" name="screenshot">
                                                   <img id="prev_screenshot" style="width:100%;height:200px;border: 1px solid black;margin-top: 10px;display: none;" src="">
                                               </div>
                                               
                                               <div style="margin: 10px;" class="col-md-12">
                                                  <button onclick="updatepackageTransactionData()" type="button" class="btn btn-md btn-warning">Update Details</button>
                                               </div>
                                            </div>
                                       
                                     </div>
                                     <script type="text/javascript">
                                         $('#btc_required_pay').val('<?php echo $prevData[0]['required_btc']; ?>');
                                         $('#btc_required_pay').prop('disabled',true);
                                     </script>

                                    <?php
                                }

                             ?>

                            

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
</div>
<style type="text/css">
    table, th, td {
  border: 1px solid black;
}
</style>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/phpqrcode/jquery.qrcode.min.js"></script>



<?php 
    
    if(!empty($prevData))
    {
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
              setInterval(function(){
                 var t1 = new Date('<?php  if(isset($prevData[0]['c_date'])){echo $prevData[0]['c_date'];}else{echo date('Y-m-d H:i:s');}; ?>');
                 var t2 = new Date();
                 var dif = ( t2.getTime() - t1.getTime() ) / 1000;
                 // console.log(dif)
                 if((1800-Math.abs(dif).toFixed(0))<=0)
                 {
                    $.ajax({
                        type:'POST',
                        url:'<?php echo base_url(); ?>Member/ActivatioRequest/purchaseExpiredPackage',
                        data:{id:'<?php echo $prevData[0]['id']; ?>'},
                        success:function(res)
                        {
                            res = JSON.parse(res);
                            if(res.response_code==200)
                            {
                              swal('success',res.msg,'success');
                              setTimeout(()=>{window.location.href="<?php echo base_url(); ?>Member/ActivatioRequest"},1000)
                           }else
                           {
                                swal('warning',res.msg,'warning');
                           }
                            
                        }
                    })
                 }
                 $('#remain_seconds').html((1800-Math.abs(dif).toFixed(0)));
                 $('#remain_minutes').html(Math.abs((1800-Math.abs(dif).toFixed(0))/60).toFixed(0));
              },1000);
           });

        function updatepackageTransactionData()
        {
          swal({
               title: "Are you sure?",
               text: "Please check all the details correctly before its submission",
               icon: "warning",
               buttons: true,
               dangerMode: true,
             })
             .then((willDelete) => {
               if (willDelete) {
                
                $.ajax({
                    type:'POST',
                    url:'<?php echo base_url(); ?>Member/ActivatioRequest/purchasePayemntPackage',
                    data:{id:'<?php echo $prevData[0]['id'];  ?>',hash_code:$('#transaction_hash').val(),screenshot: $('#file_screenshot').val().split("base64,")[1]},
                    success:function(res)
                    {
                        res = JSON.parse(res);
                        if(res.response_code==200)
                        {
                          swal('success',res.msg,'success');
                          console.log($('#file_screenshot').val().split('base64,')[1]);
                          setTimeout(()=>{window.location.href="<?php echo base_url(); ?>Member/ActivatioRequest"},1000);
                       }else
                       {
                            swal('warning',res.msg,'warning');
                       }
                        
                    }
                })

               }
             });
        }
        </script>
        <?php
    }

 ?>
<script type="text/javascript">


function get_bitcoin_price()
{
    $.ajax({
            type:'GET',
            url:'https://bitpay.com/api/rates',
            data:{},
            success:function(res)
            {
                let package_price = $('#package_id').val().split("|")[2];
                $.each(res,(i,v)=>{
                    if(v.code=='USD')
                    {
    
                        let btcActual = parseFloat(package_price)/parseFloat(v.rate);
                        console.log(btcActual);
                        let btc10PercTotal = btcActual + (10/100)*btcActual;
                        btc10PercTotal = Math.abs(btc10PercTotal.toFixed(8));
                        $('#btc_required').val(btc10PercTotal);

                    }
                });
                
            }
        })

}
genearteQR();
function genearteQR()
{
    jQuery('#output').qrcode('<?php echo $bitcoin_address; ?>');
}

function openFile()
{
  $('#file_system').click();
}
function onFileSelected(event) {
    var selectedFile = event.target.files[0];
    var reader = new FileReader();
    var imgtag = document.getElementById("prev_screenshot");
    imgtag.title = selectedFile.name;

    reader.onload = function(event) {
      imgtag.src = event.target.result;
      document.getElementById("file_screenshot").value = event.target.result;
      // console.log(event.target.result);
    };
    $('#prev_screenshot').css('display','block');
    reader.readAsDataURL(selectedFile);
}



function generateAddress()
{
  swal({
       title: "Are you sure?",
       text: "Generated address will be valid for only 30 minutes.",
       icon: "warning",
       buttons: true,
       dangerMode: true,
     })
     .then((willDelete) => {
       if (willDelete) {
        
        $.ajax({
            type:'POST',
            url:'<?php echo base_url(); ?>Member/ActivatioRequest/purchasePackage',
            data:{package_id:$('#package_id').val().split("|")[0],btc_required:$('#btc_required').val()},
            success:function(res)
            {
                res = JSON.parse(res);
                if(res.response_code==200)
                {
                  swal('success',res.msg,'success');
                  setTimeout(()=>{window.location.href="<?php echo base_url(); ?>Member/ActivatioRequest"},1000)
               }else
               {
                    swal('warning',res.msg,'warning');
               }
                
            }
        })

       }
     });
}





function getPackagedata()
{
    let package_id = $('#package_id').val();
    let packagedata = package_id.split("|");
    $('#lbl_package_id').html(packagedata[0]);
    $('#lbl_package_name').html(packagedata[1]);
    $('#lbl_package_amount').html(packagedata[2]);
    $('#lbl_profit_perc').html(packagedata[3]);
    $('#lbl_roi_perc').html(packagedata[4]);
    $('#lbl_roi_amount').html(packagedata[5]);
    $('#lbl_total_return').html(packagedata[6]);
    $('#lbl_days').html(packagedata[7]);
    $('#lbl_sponsor_income_perc').html(packagedata[8]);
    $('#lbl_matching_perc').html(packagedata[9]);
    $('#lbl_capping').html(packagedata[10]);
    $('#lbl_effected_from').html(packagedata[11]);
    $('#lbl_effected_to').html(packagedata[12]);
    $('#package_details').show();
    $('#btn_buy').show();
    $('#option_type').show();
    $('#btc_required').prop('disabled',true);

}
</script>