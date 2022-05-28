<style type="text/css">
   .resgiter-summary-card{
      padding: 20px;
      padding-bottom: 10px;
      /*background-color: red;*/
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
      margin: 20px 0;
      background: #fff;
      border-radius: 10px;
   }
   .resgiter-summary-card h5{
      padding-bottom: 15px;
   }
   h5{
      font-family: sans-serif;
      font-size: 20px;
   }
   .underline { 
       position: relative; 
       /*border: 1px solid red;*/
       /*width: fit-content;*/
     }   

    .underline::after {
        position: absolute;
        content: '';
        height: 2px;
         /*margin: 0 auto;*/
        left: 10px;
        right: 0;
        width: 5%;
        top: 30px;
        background: green;
        
        /* optional animation */
        -o-transition:.5s;
        -ms-transition:.5s;
        -moz-transition:.5s;
        -webkit-transition:.5s;
        transition:.5s;
     }
       .underline:hover:after {
        width: 16%;
        background: orange;
    }

</style>

<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
      <!-- start page title -->
         <div class="row"></div>
      <!-- end page title -->
            <section id="print_dashboard">
               <div class="row project-wrapper">
            <div class="col-xxl-12">
               <div class="row">

                  <div class="box">
                     <div class="row resgiter-summary-card" style="background-color:#E8F6F3;">
                        <h5 class="underline"> Registration Summary</h5>
                           <div class="col-md-4">
                              <div class="summary-content">
                                 <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                       <span class="avatar-title bg-soft-primary" style="background-color: #A3E4D7; border-radius: 20px;">
                                          <i class="bx bx-briefcase-alt font-size-24"></i>
                                       </span>
                                    </div>
                                    <div class="flex-grow-1" style="margin-left: 60px;border-right: 1px dashed #777; ">
                                       <p class="text-uppercase fw-medium text-muted mb-2" style="font-size:15px">Total Register</p>
                                          <div class="d-flex align-items-center mb-2" >
                                             <h4 class="fs-4 flex-grow-1 mb-0" style="margin-left:32px"><span class="counter-value"
                                             data-target="<?php echo $total_sum; ?>"><?php echo $total_sum; ?></span></h4>
                                          </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                   <div class="col-md-4">
                     <div class="summary-content">
                        <div class="d-flex align-items-center">
                           <div class="avatar-sm flex-shrink-0">
                              <span
                                 class="avatar-title bg-soft-primary" style="background-color: #A3E4D7; border-radius: 20px;">
                              <i class="bx bxs-user-rectangle font-size-24"></i>
                              </span>
                           </div>
                           <div class="flex-grow-1" style="margin-left: 60px;
                                          border-right: 1px dashed #777;">
                              <p class="text-uppercase fw-medium text-muted mb-2" style="font-size:15px">Total Left</p>
                              <div class="d-flex align-items-center mb-2" >
                                 <h4 class="fs-4 flex-grow-1 mb-0" style="margin-left:32px;"><span class="counter-value"
                                    data-target="<?php echo $total_left; ?>"><?php echo $total_left ?></span></h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="summary-content">
                        <div class="d-flex align-items-center">
                           <div class="avatar-sm flex-shrink-0">
                              <span
                                 class="avatar-title bg-soft-primary" style="background-color: #A3E4D7; border-radius: 20px;">
                              <i class="bx bxs-user-rectangle font-size-24"></i>
                              </span>
                           </div>
                           <div class="flex-grow-1 " style="margin-left: 60px;">
                              <p class="text-uppercase fw-medium text-muted mb-2" style="font-size:15px">Total Right</p>
                              <div class="d-flex align-items-center mb-2" >
                                 <h4 class="fs-4 flex-grow-1 mb-0" style="margin-left:32px;"><span class="counter-value"
                                    data-target="<?php echo $total_right ?>"><?php echo $total_right ?></span><h4>
                              </div>
                           </div>
                        </div>

                     </div>
                     <a href="<?php echo base_url(''); ?>" class="btn btn-info waves-effect waves-light" style="float: right;"> View</a>
                  </div>
               </div>
            </div>           
               </div>
               <div class="row project-wrapper">
            <div class="col-xxl-12">
               <div class="row">

                  <div class="box">
                     <div class="row resgiter-summary-card" style="background-color:#F5F5F5;">
                        <h5 class="underline"> Activation Summary</h5>
                           <div class="col-md-4">
                              <div class="summary-content">
                                 <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                       <span class="avatar-title bg-soft-primary" style="background-color: #CACFD2; border-radius: 20px;">
                                          <i class="bx bx-data font-size-24"></i>
                                       </span>
                                    </div>
                                    <div class="flex-grow-1" style="margin-left: 60px; border-right: 1px dashed #777; ">
                                       <p class="text-uppercase fw-medium text-muted mb-2" style="font-size:15px">Total Activation</p>
                                          <div class="d-flex align-items-center mb-2" >
                                             <h4 class="fs-4 flex-grow-1 mb-0" style="margin-left:32px;"><span class="counter-value"
                                             data-target="<?php echo $total_activ ?>"><?php echo $total_activ ?></span></h4>
                                          </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                   <div class="col-md-4">
                     <div class="summary-content">
                        <div class="d-flex align-items-center">
                           <div class="avatar-sm flex-shrink-0">
                              <span
                                 class="avatar-title bg-soft-primary" style="background-color: #CACFD2; border-radius: 20px;">
                              <i class="bx bxs-user-rectangle font-size-24"></i>
                              </span>
                           </div>
                           <div class="flex-grow-1" style="margin-left: 60px;
                              border-right: 1px dashed #777;">
                              <p class="text-uppercase fw-medium text-muted mb-2" style="font-size:15px">Total Left</p>
                              <div class="d-flex align-items-center mb-2" >
                                 <h4 class="fs-4 flex-grow-1 mb-0" style="margin-left:32px;"><span class="counter-value"
                                    data-target="<?php echo $left_activ ?>"><?php echo $left_activ ?></span></h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="summary-content">
                        <div class="d-flex align-items-center">
                           <div class="avatar-sm flex-shrink-0">
                              <span
                                 class="avatar-title bg-soft-primary" style="background-color: #CACFD2; border-radius: 20px;">
                              <i class="bx bxs-user-rectangle font-size-24"></i>
                              </span>
                           </div>
                           <div class="flex-grow-1 " style="margin-left: 60px;">
                              <p class="text-uppercase fw-medium text-muted mb-2" style="font-size:15px">Total Right</p>
                              <div class="d-flex align-items-center mb-2" >
                                 <h4 class="fs-4 flex-grow-1 mb-0" style="margin-left:32px;"><span class="counter-value"
                                    data-target="<?php echo $right_activ ?>"><?php echo $right_activ ?></span></h4>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a href="<?php echo base_url(''); ?>" class="btn btn-info waves-effect waves-light" style="float: right;"> View</a>
                  </div>
               </div>
            </div>           
               </div>
               <div class="row project-wrapper">
            <div class="col-xxl-12">
               <div class="row">

                  <div class="box">
                     <div class="row resgiter-summary-card" style="background-color:#E8F6F3;">
                        <h5 class="underline"> Bussiness Summary</h5>
                           <div class="col-md-4">
                              <div class="summary-content">
                                 <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                       <span class="avatar-title bg-soft-primary" style="background-color: #A2D9CE; border-radius: 20px;">
                                          <i class="bx bx-rupee font-size-24"></i>
                                       </span>
                                    </div>
                                    <div class="flex-grow-1" style="margin-left: 60px; border-right: 1px dashed #777; ">
                                       <p class="text-uppercase fw-medium text-muted mb-3" style="font-size:15px">Total Bussiness</p>
                                          <div class="d-flex align-items-center mb-2" >
                                             <h4 class="fs-4 flex-grow-1 mb-0" style="margin-left:32px;"><span class="counter-value"
                                             data-target="<?php echo $total_bussiness; ?>"><?php echo $total_bussiness; ?></span></h4>
                                          </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                   <div class="col-md-4">
                     <div class="summary-content">
                        <div class="d-flex align-items-center">
                           <div class="avatar-sm flex-shrink-0">
                              <span
                                 class="avatar-title bg-soft-primary" style="background-color: #A2D9CE; border-radius: 20px;">
                              <i class="bx bxs-user-rectangle font-size-24"></i>
                              </span>
                           </div>
                           <div class="flex-grow-1" style="margin-left: 60px; border-right: 1px dashed #777;">
                              <p class="text-uppercase fw-medium text-muted mb-2" style="font-size:15px">Total Left</p>
                              <div class="d-flex align-items-center mb-3" >
                                 <h4 class="fs-4 flex-grow-1 mb-0" style="margin-left:32px;"><span class="counter-value"
                                    data-target="<?php echo $left_business; ?>"><?php echo $left_business; ?></span></h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="summary-content">
                        <div class="d-flex align-items-center">
                           <div class="avatar-sm flex-shrink-0">
                              <span
                                 class="avatar-title bg-soft-primary" style="background-color: #A2D9CE; border-radius: 20px;">
                              <i class="bx bxs-user-rectangle font-size-24"></i>
                              </span>
                           </div>
                           <div class="flex-grow-1 " style="margin-left: 60px;">
                              <p class="text-uppercase fw-medium text-muted mb-2" style="font-size:15px">Total Right</p>
                              <div class="d-flex align-items-center mb-3" >
                                 <h4 class="fs-4 flex-grow-1 mb-0" style="margin-left:32px;"><span class="counter-value"
                                    data-target="<?php echo $right_bussiness; ?>"><?php echo $right_bussiness; ?></span></h4>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a href="<?php echo base_url(''); ?>" class="btn btn-info waves-effect waves-light" style="float: right;"> View</a>
                  </div>
               </div>
            </div>           
               </div>
               <div class="row project-wrapper">
            <div class="col-xxl-12">
               <div class="row">

                  <div class="box">
                     <div class="row resgiter-summary-card" style="background-color:#F5EEF8;">
                        <h5 class="underline"> Distribution Summary</h5>
                           <div class="col-md-4">
                              <div class="summary-content">
                                 <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                       <span class="avatar-title bg-soft-primary" style="background-color: #BDC3C7; border-radius: 20px;">
                                          <i class="bx bx-rupee font-size-24"></i>
                                       </span>
                                    </div>
                                    <div class="flex-grow-1" style="margin-left: 60px; display: border-right: 1px dashed #777; ">
                                       <p class="text-uppercase fw-medium text-muted mb-2" style="font-size:15px">Total Sponsor</p>
                                          <div class="d-flex align-items-center mb-2" >
                                             <h4 class="fs-4 flex-grow-1 mb-0" style="margin-left:32px;"><span class="counter-value"
                                             data-target="<?php echo $sponsor_income ?>"><?php echo $sponsor_income ?></span></h4>
                                          </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                   <div class="col-md-4">
                     <div class="summary-content">
                        <div class="d-flex align-items-center">
                           <div class="avatar-sm flex-shrink-0">
                              <span
                                 class="avatar-title bg-soft-primary" style="background-color: #BDC3C7; border-radius: 20px;">
                              <i class="bx bxs-user-rectangle font-size-24"></i>
                              </span>
                           </div>
                           <div class="flex-grow-1" style="margin-left: 60px; display: flex;
                                          border-right: 1px dashed #777;">
                              <p class="text-uppercase fw-medium text-muted mb-3" style="font-size:15px">Total Matching</p>
                              <div class="d-flex align-items-center mb-3" >
                                 <!-- <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                    data-target="<?php echo $card_data['total_completed_projects']; ?>">0</span></h4> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="summary-content">
                        <div class="d-flex align-items-center">
                           <div class="avatar-sm flex-shrink-0">
                              <span
                                 class="avatar-title bg-soft-primary" style="background-color: #BDC3C7; border-radius: 20px;">
                              <i class="bx bxs-user-rectangle font-size-24"></i>
                              </span>
                           </div>
                           <div class="flex-grow-1 " style="margin-left: 60px;">
                              <h4 class="text-uppercase fw-medium text-muted mb-2" style="font-size:15px">Total Roi</h4>
                              <div class="d-flex align-items-center mb-2" >
                                 <h6 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                    data-target="<?php echo $total_roi ?>"><?php echo $total_roi ?></span></h6>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a href="<?php echo base_url(''); ?>" class="btn btn-info waves-effect waves-light" style="float: right;"> View</a>
                  </div>
               </div>
            </div>           
               </div>
            </section>
         </div>
   </div>
   <!-- container-fluid -->
</div>
<!-- End Page-content -->
