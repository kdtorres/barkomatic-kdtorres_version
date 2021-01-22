
<?php 
$num = 0;
$num_six = 0;
include 'config/dbconnection.php';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $qty = trim($_POST['qty']);
        while($num < $qty) {
            $six_digit_random_number = mt_rand(100000, 999999);
            $num_six = $six_digit_random_number;
            echo $num_six + '</br>';
            $num++;
        }
    }
?>
<style type="text/css">
    .form-style-2{
        margin: auto;
        max-width: 500px;
        padding: 20px 12px 10px 20px;
        font: 13px Arial, Helvetica, sans-serif;
    }
    .form-style-2-heading{
        letter-spacing: 0;
        font-weight: bold;
        /* border-bottom: 2px solid #ddd; */
        margin-bottom: 20px;
        font-size: 15px;
        padding-bottom: 3px;
    }
    .form-style-2 label{
        display: block;
        margin: 0px 0px 15px 0px;
    }
    .form-style-2 label > span{
        width: 100px;
        font-weight: 600;
        float: left;
        padding-top: 8px;
        padding-right: 5px;
    }
    .form-style-2 span.required{
        color:red;
    }
    .form-style-2 .tel-number-field{
        width: 40px;
        text-align: center;
    }
    .form-style-2 input.input-field, .form-style-2 .select-field{
        width: 48%;	
    }
    .form-style-2 input.input-field, 
    .form-style-2 .tel-number-field, 
    .form-style-2 .textarea-field, 
    .form-style-2 .select-field{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        border: 1px solid #C2C2C2;
        box-shadow: 1px 1px 4px #EBEBEB;
        -moz-box-shadow: 1px 1px 4px #EBEBEB;
        -webkit-box-shadow: 1px 1px 4px #EBEBEB;
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        padding: 7px;
        outline: none;
    }
    .form-style-2 .input-field:focus, 
    .form-style-2 .tel-number-field:focus, 
    .form-style-2 .textarea-field:focus,  
    .form-style-2 .select-field:focus{
        border: 1px solid #0C0;
    }
    .form-style-2 .textarea-field{
        height:100px;
        width: 55%;
    }
    .form-style-2 input[type=submit],
    .form-style-2 input[type=button]{
        border: none;
        padding: 8px 15px 8px 15px;
        background: #FF8500;
        color: #fff;
        box-shadow: 1px 1px 4px #DADADA;
        -moz-box-shadow: 1px 1px 4px #DADADA;
        -webkit-box-shadow: 1px 1px 4px #DADADA;
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
    }
    .form-style-2 input[type=submit]:hover,
    .form-style-2 input[type=button]:hover{
        background: #EA7B00;
        color: #fff;
    }
</style>
<div class="form-style-2">
    <div class="form-style-2-heading">Modify Information?</div>
    </hr>
    <form action="" method="post">
        <label for="field1">
            <span>Quantity<span class="required">*</span></span>
            <input type="text" class="input-field" name="qty" value="" />
        </label>
        <label>
            <span></span>
            <input type="submit" value="Submit" />
        </label>
    </form>
    <div>
    </div>
</div>