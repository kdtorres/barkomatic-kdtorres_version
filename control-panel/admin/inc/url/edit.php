<?php include 'function/edit_func.php'; ?>
<style type="text/css">
    .form-style-2{margin:auto;max-width:500px;padding:20px 12px 10px 20px;font:13px Arial, Helvetica, sans-serif;}
    .form-style-2-heading{letter-spacing:0;font-weight:bold;margin-bottom:20px;font-size:15px;padding-bottom:3px;}
    .form-style-2 label{display:block;margin:0px 0px 15px 0px;}
    .form-style-2 label > span{width:100px;font-weight:600;float:left;padding-top:8px;padding-right:5px;}
    .form-style-2 span.required{color:red;}
    .form-style-2 .tel-number-field{width:40px;text-align:center;}
    .form-style-2 input.input-field, .form-style-2 .select-field{width:48%}
    .form-style-2 input.input-field, 
    .form-style-2 .select-field{box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;border:1px solid #C2C2C2;box-shadow:1px 1px 4px #EBEBEB;-moz-box-shadow:1px 1px 4px #EBEBEB;-webkit-box-shadow:1px 1px 4px #EBEBEB;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;padding:7px;outline:none;font-size:0.719rem;color:#C2C2C2;}
    .form-style-2 .input-field:focus, 
    .form-style-2 .select-field:focus{border:1px solid #0C0;}
    .form-style-2 input[type=submit],
    .form-style-2 input[type=button]{border:none;padding:8px 15px 8px 15px;background:#FF8500;color:#fff;box-shadow:1px 1px 4px #DADADA;-moz-box-shadow:1px 1px 4px #DADADA;-webkit-box-shadow:1px 1px 4px #DADADA;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;}
    .form-style-2 input[type=submit]:hover,
    .form-style-2 input[type=button]:hover{background:#EA7B00;color:#fff;}
</style>
<div class="form-style-2">
    <div class="form-style-2-heading">Modify information of <?php echo $rtype; ?>?</div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="field1" style="display: none !important;">
            <span>ID<span class="required">*</span></span>
            <input type="number" class="input-field" name="id" value="<?php echo $param_id; ?>"/>
        </label>
        <label for="field1">
            <span>Firstname<span class="required">*</span></span>
            <input type="text" class="input-field" name="fname" value="<?php echo $fname; ?>" required/>
        </label>
        <label for="field2">
            <span>Lastname<span class="required">*</span></span>
            <input type="text" class="input-field" name="lname" value="<?php echo $lname; ?>" required/>
        </label>
        <label for="field2">
            <span>Middlename<span class="required">*</span></span>
            <input type="text" class="input-field" name="mname" value="<?php echo $mname; ?>" required/>
        </label>
        <label for="field4">
            <span>Role Type<span class="required">*</span></span>
            <select name="rtype" class="select-field" required>
                <option value="<?php echo $rtype; ?>" style="display:none;">
                    <?php echo $rtype; ?>
                </option>
                <option value="Admin">Admin</option>
                <option value="Ticket-In-Charge">Ticket-In-Charge</option>
            </select>
        </label>
        <label for="field1">
            <span>Description<span class="required">*</span></span>
            <input type="text" class="input-field" name="rdescription" value="<?php echo $rdesc; ?>" required/>
        </label>
        <label for="field1">
            <span>Username<span class="required">*</span></span>
            <input type="text" class="input-field" name="uname" value="<?php echo $uname; ?>" required/>
        </label>
        <label for="field1">
            <span>Password<span class="required">*</span></span>
            <input type="password" class="input-field" name="password" value="<?php echo $psswd; ?>" required/>
        </label>
        <label>
            <span></span>
            <input type="submit" value="Submit" />
        </label>
    </form>
    <a href="../../assign.php">Back -></a>
</div>