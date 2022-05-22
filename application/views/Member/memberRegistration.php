<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 08:26:41 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Earning Vista :: Register Member</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url() ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <style type="text/css">
            .form-group{
                padding-bottom: 8px;
            }

            /*#backgroundImage{
                z-index: 1;
            }

            #backgroundImage: before{
                background-image: url('assets/images/bacground11.jpg');
            }*/
        </style>

    </head>

    <body style="background-image: url('../assets/images/bacground11.jpg');">
        
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-10 col-xl-10">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row" style="max-height: 100px;">
                                    <div class="col-12">
                                        <div class="text-primary p-4" style="text-align: center;">
                                            <h5 class="text-primary"> Earn Vista Register </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="col-md-12">
                                    <a href="<?php echo base_url('Member/MemberLogin'); ?>" class="btn btn-sm btn-info" style="float: right;margin-top: 10px;">Go To Login</a>
                                </div>
                                <div>
                                    <a href="javascript::void()">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?php echo base_url() ?>assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="p-2">
                                    <form id="formember" name="member_registration" method="POST" action="<?php echo base_url('Member/MemberRegister/registerMember'); ?>" enctype="multipart/form-data">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <strong>Sponsor Id</strong> <span id="sponsor-error"></span>
                                                        <input type="text" class="form-control" name="sponsor_id" id="sponsor_id" placeholder="Sponsor id" required onblur="checkSponsorId(this.value);">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <strong>Side</strong>
                                                        <select name="side" id="side" class="form-control" required>
                                                            <option value="">---select---</option>
                                                            <option value="L">Left</option>
                                                            <option value="R">Right</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Name</strong>
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Father/Husband Name</strong>
                                                        <input type="text" class="form-control" name="fatherHusband_name" id="fatherHusband_name" placeholder="Enter father/husband name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Email Id</strong> <span id="email-error"></span>
                                                        <input type="email" class="form-control" name="email" id="email" required="" parsley-type="email" placeholder="Enter a valid e-mail" onblur="checkEmail(this.value);">
                                                    </div>

                                                </div>

                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <strong>Country Code </strong>
                                                        <select class="form-control" name="country_code" id="country_code" required>
                                                            <option value="">-Select-</option>
                                                            <option value="1">ABW (297)</option>
                                                            <option value="2">AFG (93)</option>
                                                            <option value="3">AGO (244)</option>
                                                            <option value="4">ALB (355)</option>
                                                            <option value="5">AND (376)</option>
                                                            <option value="6">ANT (599)</option>
                                                            <option value="7">ARE (971)</option>
                                                            <option value="8">ARG (54)</option>
                                                            <option value="9">ARM (374)</option>
                                                            <option value="10">ATA (672)</option>
                                                            <option value="11">AUS (61)</option>
                                                            <option value="12">AUT (43)</option>
                                                            <option value="13">AZE (994)</option>
                                                            <option value="14">BDI (257)</option>
                                                            <option value="15">BEL (32)</option>
                                                            <option value="16">BEN (229)</option>
                                                            <option value="17">BFA (226)</option>
                                                            <option value="18">BGD (880)</option>
                                                            <option value="19">BGR (359)</option>
                                                            <option value="20">BHR (973)</option>
                                                            <option value="21">BIH (387)</option>
                                                            <option value="22">BLR (375)</option>
                                                            <option value="23">BLZ (501)</option>
                                                            <option value="24">BOL (591)</option>
                                                            <option value="25">BRA (55)</option>
                                                            <option value="26">BRN (673)</option>
                                                            <option value="27">BTN (975)</option>
                                                            <option value="28">BWA (267)</option>
                                                            <option value="29">CAF (236)</option>
                                                            <option value="30">CAN (1)</option>
                                                            <option value="31">CCK (672)</option>
                                                            <option value="32">CHE (41)</option>
                                                            <option value="33">CHL (56)</option>
                                                            <option value="34">CHN (86)</option>
                                                            <option value="35">CIV (225)</option>
                                                            <option value="36">CMR (237)</option>
                                                            <option value="37">COG (242)</option>
                                                            <option value="38">COK (682)</option>
                                                            <option value="39">COL (57)</option>
                                                            <option value="40">COM (269)</option>
                                                            <option value="41">CPV (238)</option>
                                                            <option value="42">CRI (506)</option>
                                                            <option value="43">CUB (53)</option>
                                                            <option value="44">CXR (61)</option>
                                                            <option value="45">CYP (357)</option>
                                                            <option value="46">CZE (420)</option>
                                                            <option value="47">DEU (49)</option>
                                                            <option value="48">DJI (253)</option>
                                                            <option value="49">DNK (45)</option>
                                                            <option value="50">DZA (213)</option>
                                                            <option value="51">ECU (593)</option>
                                                            <option value="52">EGY (20)</option>
                                                            <option value="53">ERI (291)</option>
                                                            <option value="54">ESH (212)</option>
                                                            <option value="55">ESP (34)</option>
                                                            <option value="56">EST (372)</option>
                                                            <option value="57">ETH (251)</option>
                                                            <option value="58">FIN (358)</option>
                                                            <option value="59">FJI (679)</option>
                                                            <option value="60">FLK (500)</option>
                                                            <option value="61">FRA (33)</option>
                                                            <option value="62">FRO (298)</option>
                                                            <option value="63">GAB (241)</option>
                                                            <option value="64">GBR (44)</option>
                                                            <option value="65">GEO (995)</option>
                                                            <option value="66">GHA (233)</option>
                                                            <option value="67">GIB (350)</option>
                                                            <option value="68">GIN (224)</option>
                                                            <option value="69">GLP (590)</option>
                                                            <option value="70">GMB (220)</option>
                                                            <option value="71">GNB (245)</option>
                                                            <option value="72">GNQ (240)</option>
                                                            <option value="73">GRC (30)</option>
                                                            <option value="74">GRL (299)</option>
                                                            <option value="75">GTM (502)</option>
                                                            <option value="76">GUF (594)</option>
                                                            <option value="77">GUY (592)</option>
                                                            <option value="78">HKG (852)</option>
                                                            <option value="79">HND (504)</option>
                                                            <option value="80">HRV (385)</option>
                                                            <option value="81">HTI (509)</option>
                                                            <option value="82">HUN (36)</option>
                                                            <option value="83">IDN (62)</option>
                                                            <option value="84">IND (91)</option>
                                                            <option value="85">IOT (246)</option>
                                                            <option value="86">IRL (353)</option>
                                                            <option value="87">IRN (98)</option>
                                                            <option value="88">IRQ (964)</option>
                                                            <option value="89">ISL (354)</option>
                                                            <option value="90">ISR (972)</option>
                                                            <option value="91">ITA (39)</option>
                                                            <option value="92">JOR (962)</option>
                                                            <option value="93">JPN (81)</option>
                                                            <option value="94">KAZ (7)</option>
                                                            <option value="95">KEN (254)</option>
                                                            <option value="96">KGZ (996)</option>
                                                            <option value="97">KHM (855)</option>
                                                            <option value="98">KIR (686)</option>
                                                            <option value="99">KOR (82)</option>
                                                            <option value="100">KWT (965)</option>
                                                            <option value="101">LBN (961)</option>
                                                            <option value="102">LBR (231)</option>
                                                            <option value="103">LBY (218)</option>
                                                            <option value="104">LIE (423)</option>
                                                            <option value="105">LKA (94)</option>
                                                            <option value="106">LSO (266)</option>
                                                            <option value="107">LTU (370)</option>
                                                            <option value="108">LUX (352)</option>
                                                            <option value="109">LVA (371)</option>
                                                            <option value="110">MAC (853)</option>
                                                            <option value="111">MAR (212)</option>
                                                            <option value="112">MCO (377)</option>
                                                            <option value="113">MDG (261)</option>
                                                            <option value="114">MDV (960)</option>
                                                            <option value="115">MEX (52)</option>
                                                            <option value="116">MHL (692)</option>
                                                            <option value="117">MKD (389)</option>
                                                            <option value="118">MLI (223)</option>
                                                            <option value="119">MLT (356)</option>
                                                            <option value="120">MMR (95)</option>
                                                            <option value="121">MNE (382)</option>
                                                            <option value="122">MNG (976)</option>
                                                            <option value="123">MOZ (258)</option>
                                                            <option value="124">MRT (222)</option>
                                                            <option value="125">MTQ (596)</option>
                                                            <option value="126">MUS (230)</option>
                                                            <option value="127">MWI (265)</option>
                                                            <option value="128">MYS (60)</option>
                                                            <option value="129">MYT (269)</option>
                                                            <option value="130">NAM (264)</option>
                                                            <option value="131">NCL (687)</option>
                                                            <option value="132">NER (227)</option>
                                                            <option value="133">NGA (234)</option>
                                                            <option value="134">NIC (505)</option>
                                                            <option value="135">NIU (683)</option>
                                                            <option value="136">NLD (31)</option>
                                                            <option value="137">NOR (47)</option>
                                                            <option value="138">NPL (977)</option>
                                                            <option value="139">NRU (674)</option>
                                                            <option value="140">NZL (64)</option>
                                                            <option value="141">OMN (968)</option>
                                                            <option value="142">PAK (92)</option>
                                                            <option value="143">PAN (507)</option>
                                                            <option value="144">PCN (64)</option>
                                                            <option value="145">PER (51)</option>
                                                            <option value="146">PHL (63)</option>
                                                            <option value="147">PLW (680)</option>
                                                            <option value="148">PNG (675)</option>
                                                            <option value="149">POL (48)</option>
                                                            <option value="150">PRT (351)</option>
                                                            <option value="151">PRY (595)</option>
                                                            <option value="152">PYF (689)</option>
                                                            <option value="153">QAT (974)</option>
                                                            <option value="154">REU (262)</option>
                                                            <option value="155">ROM (40)</option>
                                                            <option value="156">RUS (7)</option>
                                                            <option value="157">RWA (250)</option>
                                                            <option value="158">SAU (966)</option>
                                                            <option value="159">SDN (249)</option>
                                                            <option value="160">SEN (221)</option>
                                                            <option value="161">SGP (65)</option>
                                                            <option value="162">SHN (290)</option>
                                                            <option value="163">SJM (47)</option>
                                                            <option value="164">SLB (677)</option>
                                                            <option value="165">SLE (232)</option>
                                                            <option value="166">SLV (503)</option>
                                                            <option value="167">SMR (378)</option>
                                                            <option value="168">SOM (252)</option>
                                                            <option value="169">SPM (508)</option>
                                                            <option value="170">SRB (381)</option>
                                                            <option value="171">STP (239)</option>
                                                            <option value="172">SUR (597)</option>
                                                            <option value="173">SVK (421)</option>
                                                            <option value="174">SVN (386)</option>
                                                            <option value="175">SWE (46)</option>
                                                            <option value="176">SWZ (268)</option>
                                                            <option value="177">SYC (248)</option>
                                                            <option value="178">SYR (963)</option>
                                                            <option value="179">TCD (235)</option>
                                                            <option value="180">TGO (228)</option>
                                                            <option value="181">THA (66)</option>
                                                            <option value="182">TJK (992)</option>
                                                            <option value="183">TKL (690)</option>
                                                            <option value="184">TKM (993)</option>
                                                            <option value="185">TLS (670)</option>
                                                            <option value="186">TON (676)</option>
                                                            <option value="187">TUN (216)</option>
                                                            <option value="188">TUR (90)</option>
                                                            <option value="189">TUV (688)</option>
                                                            <option value="190">TWN (886)</option>
                                                            <option value="191">TZA (255)</option>
                                                            <option value="192">UGA (256)</option>
                                                            <option value="193">UKR (380)</option>
                                                            <option value="194">URY (598)</option>
                                                            <option value="195">USA (1)</option>
                                                            <option value="196">UZB (998)</option>
                                                            <option value="197">VEN (58)</option>
                                                            <option value="198">VNM (84)</option>
                                                            <option value="199">VUT (678)</option>
                                                            <option value="200">WLF (681)</option>
                                                            <option value="201">WSM (684)</option>
                                                            <option value="202">XKX (383)</option>
                                                            <option value="203">YEM (967)</option>
                                                            <option value="204">ZAF (27)</option>
                                                            <option value="205">ZMB (260)</option>
                                                            <option value="206">ZWE (263)</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <strong>Country</strong>
                                                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter country name" required="">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <strong>Phone</strong> <span id="phone-error"></span>
                                                        <input data-parsley-type="number" type="number" name="number" id="number" class="form-control" required="" placeholder="Enter only numbers" onblur="checkMobile(this.value);">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Gender</strong>
                                                        <select name="gender" id="gender" class="form-control" required>
                                                            <option value="">---select---</option>
                                                            <option value="M">Male</option>
                                                            <option value="F">Female</option>
                                                            <option value="O">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>State</strong>
                                                        <input type="text" class="form-control" name="state" id="state" placeholder="Enter state name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>City</strong>
                                                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter city name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Pincode</strong>
                                                        <input type="number" class="form-control" name="pincode" id="pincode" placeholder="Enter pincode" required="">
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <strong>Photo</strong>
                                                        <input class="form-control" type="file" id="photo" name="photo" required>
                                                    </div>
                                                </div> -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <strong>Address</strong>
                                                        <textarea class="form-control" name="address" id="address" required rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4" style="float: right;">
                                            <button id="submitcheck" onclick="checkSubmit()" class="btn btn-primary waves-effect waves-light" type="button">Submit</button>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <div>
                                <p style="color: white;">© <script>document.write(new Date().getFullYear())</script> Developed by Iotas Solutios Pvt. Ltd.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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

        <script type="text/javascript">
            let emailVerify = false;
            let phoneVerify = false;
            let sponsorVerify = false;
            // checkSubmit();
            function checkSubmit()
            {
                if($('#name').val() == '')
                {
                    swal("Name Required !", {
                          icon: "error",
                        });
                }else if($('#email').val() == '')
                {
                    swal("Email Required !", {
                          icon: "error",
                        });
                }else if($('#fatherHusband_name').val() == '')
                {
                    swal("Father/Husband Name Required !", {
                          icon: "error",
                        });
                }else if($('#number').val() == '')
                {
                    swal("Mobile Number !", {
                          icon: "error",
                        });
                }else if($('#gender').val() == '')
                {
                    swal("Gender Required !", {
                          icon: "error",
                        });
                }else if($('#sponsor_id').val() == '')
                {
                    swal("Sponsor Id Required !", {
                          icon: "error",
                        });
                }else if($('#side').val() == '')
                {
                    swal("side Required !", {
                          icon: "error",
                        });
                }else if($('#country').val() == '')
                {
                    swal("Country Required !", {
                          icon: "error",
                        });
                }else if($('#state').val() == '')
                {
                    swal("State Required !", {
                          icon: "error",
                        });
                }else if($('#city').val() == '')
                {
                    swal("City Required !", {
                          icon: "error",
                        });
                }else if($('#pincode').val() == '')
                {
                    swal("Pincode Required !", {
                          icon: "error",
                        });
                }else if($('#file').attr('src') == '')
                {
                    swal("Profile Image Required !", {
                          icon: "error",
                        });
                }else if($('#address').val() == ''){
                    swal("Address Required !", {
                          icon: "error",
                        });
                }else if($('#country_code').val() == ''){
                    swal("Country Code Required !", {
                          icon: "error",
                        });
                }else{
                    if(emailVerify == true && phoneVerify == true && sponsorVerify == true)
                    {
                        // $("#submitcheck").prop('disabled',false);
                        $("#formember").submit();
                    }else{
                        swal("Email or Phone or Sponsor Id Invalid !!", {
                              icon: "error",
                            });
                    }
                }
            }

            function checkEmail()
            {
                var email = $("#email").val();
                $.ajax({
                        url: '<?php echo base_url() ?>Member/MemberRegister/verifyEmail',
                        type: 'POST',
                        data: {email: email},
                        success:function(res)
                        {
                            console.log(res);
                            if(res=='200'){
                                emailVerify = true;
                                // checkSubmit();
                                $("#email-error").html('<span style="color:green;">Available</span>');
                              }else{
                                emailVerify = false;
                                // checkSubmit();
                                $("#email-error").html('<span style="color:red;">Not Available</span>');
                              }
                        }
                });
            }

            function checkMobile()
            {
                var mobile = $("#number").val();
                $.ajax({
                        url: '<?php echo base_url() ?>Member/MemberRegister/verifymobile',
                        type: 'POST',
                        data: {mobile: mobile},
                        success:function(res)
                        {
                            console.log(res);
                            if(res=='200'){
                                phoneVerify = true;
                                // checkSubmit();
                                $("#phone-error").html('<span style="color:green;">Available</span>');
                              }else{
                                phoneVerify = false;
                                // checkSubmit();
                                $("#phone-error").html('<span style="color:red;">Not Available</span>');
                              }
                        }
                });
            }

            function checkSponsorId()
            {
                var sponsor_id = $("#sponsor_id").val();
                $.ajax({
                        url: '<?php echo base_url() ?>Member/MemberRegister/verify_sponsor',
                        type: 'POST',
                        data: {sponsor_id: sponsor_id},
                        success:function(res)
                        {
                            console.log(res);
                            if(res=='200'){
                                sponsorVerify = true;
                                // checkSubmit();
                                $("#sponsor-error").html('<span style="color:green;">Available</span>');
                              }else{
                                sponsorVerify = false;
                                // checkSubmit();
                                $("#sponsor-error").html('<span style="color:red;">Not Available</span>');
                              }
                        }
                });
            }
        </script>

        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url() ?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url() ?>assets/libs/node-waves/waves.min.js"></script>

        <!-- validation init -->
        <script src="<?php echo base_url() ?>assets/js/pages/validation.init.js"></script>
        
        <!-- App js -->
        <script src="<?php echo base_url() ?>assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 08:26:41 GMT -->
</html>
