<form method="POST" name="generateFunds" action="<?php echo base_url('Admin/Package/UpdatePackagedata'); ?>">
    <div class="content-area">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <input type="hidden" name="id" name="id" value="<?php echo $packagedata[0]['id']; ?>">
                    <div class="form-group">
                        <label> Package Name </label>
                        <input type="text" name="package_name" id="package_name" class="form-control" required value="<?php echo $packagedata[0]['package_name']; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label> Package Amount </label>
                        <input type="number" name="package_amount" id="package_amount" class="form-control" required value="<?php echo $packagedata[0]['package_amount']; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label> Profit (In %) </label>
                        <input type="number" name="profit" id="profit" class="form-control" required value="<?php echo $packagedata[0]['profit_perc']; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label> ROI (In %) </label>
                        <input type="number" name="roi" id="roi" class="form-control" required value="<?php echo $packagedata[0]['roi_perc']; ?>">
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div class="form-group">
                        <label> ROI Amount </label>
                        <input type="number" name="roi_amount" id="roi_amount" class="form-control" required value="<?php echo $packagedata[0]['roi_amount']; ?>">
                    </div>
                </div> -->
                <!-- <div class="col-md-4">
                    <div class="form-group">
                        <label> Total Return </label>
                        <input type="number" name="total_return" id="total_return" class="form-control" required value="<?php echo $packagedata[0]['total_return']; ?>">
                    </div>
                </div> -->
                <!-- <div class="col-md-4">
                    <div class="form-group">
                        <label> Days</label>
                        <input type="number" name="days" id="days" class="form-control" required value="<?php echo $packagedata[0]['days']; ?>">
                    </div>
                </div> -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label> Sponsor Income (In %)</label>
                        <input type="number" name="sponsor_income" id="sponsor_income" class="form-control" required value="<?php echo $packagedata[0]['sponsor_income_perc']; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label> Matching (In %)</label>
                        <input type="number" name="matching" id="matching" class="form-control" required value="<?php echo $packagedata[0]['matching_perc']; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label> Capping</label>
                        <input type="number" name="capping" id="capping" class="form-control" required value="<?php echo $packagedata[0]['capping']; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label> Effect From</label>
                        <input type="date" name="effect_from" id="effect_from" class="form-control" required value="<?php echo $packagedata[0]['effected_from']; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label> Effect To</label>
                        <input type="date" name="effect_to" id="effect_to" class="form-control" required value="<?php echo $packagedata[0]['effected_to']; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-area pt-3" style="float: right;">
            <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
        </div>
    </div>        
</form>