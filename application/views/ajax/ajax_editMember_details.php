<form method="POST" name="generateFunds" action="<?php echo base_url('Member/MemberRegister/UpdateMember'); ?>">
    <div class="content-area">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4">
                    <input type="hidden" name="member_id" id="member_id" value="<?php echo $member_details[0]['member_id']; ?>">
                    <div class="form-group">
                        <strong>Name</strong>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="<?php echo $member_details[0]['name']; ?>">
                    </div>
                </div>
            
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Father/Husband Name</strong>
                        <input type="text" class="form-control" name="fatherHusband_name" id="fatherHusband_name" placeholder="Enter father/husband name" required="" value="<?php echo $member_details[0]['f_h_name']; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Phone</strong> <span id="phone-error"></span>
                        <input data-parsley-type="number" type="number" name="number" id="number" class="form-control" required="" placeholder="Enter only numbers" onblur="checkMobile(this.value);" value="<?php echo $member_details[0]['mobile_no']; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Gender</strong>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="">---select---</option>
                            <option <?php if($member_details[0]['gender'] == "M"){echo 'selected="selected"';} ?> value="M">Male</option>
                            <option <?php if($member_details[0]['gender'] == "F"){echo 'selected="selected"';} ?> value="F">Female</option>
                            <option <?php if($member_details[0]['gender'] == "O"){echo 'selected="selected"';} ?> value="O">Other</option>
                        </select>
                    </div>
                </div>
               <!--  <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Sponsor Id</strong> <span id="sponsor-error"></span>
                        <input type="text" class="form-control" name="sponsor_id" id="sponsor_id" placeholder="Sponsor id" required onblur="checkSponsorId(this.value);" value="<?php echo $member_details[0]['sponsor_id']; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Side</strong>
                        <select name="side" id="side" class="form-control" required>
                            <option value="">---select---</option>
                            <option <?php if($member_details[0]['side'] == "L"){echo 'selected="selected"';} ?> value="L">Left</option>
                            <option <?php if($member_details[0]['side'] == "R"){echo 'selected="selected"';} ?> value="R">Right</option>
                        </select>
                    </div>
                </div> -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Country</strong>
                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter country name" required="" value="<?php echo $member_details[0]['country']; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>State</strong>
                        <input type="text" class="form-control" name="state" id="state" placeholder="Enter state name" required="" value="<?php echo $member_details[0]['state']; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>City</strong>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter city name" required="" value="<?php echo $member_details[0]['city']; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Pincode</strong>
                        <input type="number" class="form-control" name="pincode" id="pincode" placeholder="Enter pincode" required="" value="<?php echo $member_details[0]['pin']; ?>">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <strong>Address</strong>
                        <textarea class="form-control" name="address" id="address" required rows="2"><?php echo $member_details[0]['address']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-area pt-3" style="float: right;">
            <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
        </div>
    </div>        
</form>