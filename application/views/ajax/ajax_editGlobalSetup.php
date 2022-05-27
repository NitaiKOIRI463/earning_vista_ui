<form method="POST" name="generateFunds" action="<?php echo base_url('Admin/GlobalSetup/updateSetUpData'); ?>">
    <div class="content-area">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="id" id="id" value="<?php echo $G_setupDetails[0]['id']; ?>">
                    <div class="form-group">
                        <label> Value </label>
                        <input type="text" name="value" id="value" class="form-control" required value="<?php echo $G_setupDetails[0]['value']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Key</label>
                        <input type="text" name="key" id="key" class="form-control" required value="<?php echo $G_setupDetails[0]['key']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Effect From</label>
                        <input type="date" name="effect_from" id="effect_from" class="form-control" required value="<?php echo date("Y-m-d", strtotime($G_setupDetails[0]['effect_from'])); ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Effect To</label>
                        <input type="date" name="effect_to" id="effect_to" class="form-control" required value="<?php echo date("Y-m-d", strtotime($G_setupDetails[0]['effect_to'])) ; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-area pt-3" style="float: right;">
            <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
        </div>
    </div>        
</form>