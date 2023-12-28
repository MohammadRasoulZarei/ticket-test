<div class="col-lg-7 col-md-7 col-sm-7 pt-15 text-left float-left dir-left " >
    <form method="post" action="<?=site_url('users/addWallet') ?>">
        <div class="form-group ">
            <label for=" ">name:</label>
            <input name="name" type="text" class="form-control" >
        </div>
        <div class="form-group ">
            <label for=" ">private key:</label>
            <input name="prk" type="text" class="form-control" >
        </div>
        <div class="form-group ">
            <label for=" ">public key:</label>
            <input name="pbk" type="text" class="form-control" >
        </div>
        <div class="amount">
            <div class="form-group col-lg-6 col-md-6"  style="padding-right:0" >
                <label for=" ">added amount:</label>
                <input name="aa" type="number" value="0" class="form-control" >
            </div>
        <div class="form-group col-lg-6 col-md-6"  style="padding-left:0">
            <label for=" ">earnd amount:</label>
            <input name="ea" type="number" class="form-control" >
        </div>
        </div>
        <div class="clear"></div>
        <div class="form-group text-center" >
            <button class="btn btn-primary" type="submit"> اضافه کردن</button>

        </div>
      <!--  <div class="form-group ">
            <label for=" ">key:</label>
            <input name="key" type="text" class="form-control" >
        </div>-->

        
    </form>
    
    
    
    
</div>
