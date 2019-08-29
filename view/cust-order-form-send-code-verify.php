<script id="84720">
	$('.getproductinfo').click(getproducts);
    function getproducts(e)
    {
        e.preventDefault();
        $item_name = $('.item_name');
        if( $item_name.val() == 0){
            $item_name.focus();
            return false;
        }else
        {
            customerorderform({item:$item_name.val()},'products_list_result','productslists');
            $(".verify-code").attr("disabled","true");
            $(".verify-code-btn").attr("disabled","true");
        }
    }
	document.getElementById('84720').innerHTML="";
</script>
<script src="src/final-order.js"></script>
<?php
Sessions::session_auto_logoff();
if(isset($_POST['cd']) && ($_POST['cd'] == $_COOKIE['_get_c']) ):
    setcookie('_get_c','');
?>
    <form method="POST" accept-charset="UTF-8" >
        <div class="row">
            <div class="col-md-9">
                <input type="text" class="form-control item_name" placeholder="item name" name="item_name">			
            </div>
            <div class="col-md-3">
                <input type="submit" class="btn btn-default getproductinfo" value="get products list" style="border-radius: 0" name="getproductinfobtn">
            </div>
        </div>
    </form>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="POST" id="listitems">
                    <span id="products_list_result">
                    </span>
                </form>
            </div>
            <div class="col-md-6 my-5 p-0">
                <span>HI, <?php print $_SESSION['customer_name'] ?></span>
                <div>SUBMIT YOUR FINAL ORDER .</div>
                <form name="final_order_form" method="POST" class="final-order-form float-left" style="border: 0;border-left: 1px dotted #999;padding-left: 1em;">
                    <input item="cust-name" type="text" class="form-control cust-name item" name="final_order_cust_name" disabled value="<?php (empty($_SESSION['customer_name']))? "": print $_SESSION['customer_name'] ?> ">
                    <input item="cust-phone" type="tel" class="form-control cust-phone item" name="final_order_cust_phone"disabled value="<?php (empty($_SESSION['customer_phone']))? "": print$_SESSION['customer_phone'] ?> ">
                    <input item="order-name" type="text" class="form-control order-name item" name="final_order_form_name" placeholder="item name">
                    <input item="order-offer" type="text" class="form-control order-offer item" name="final_order_form_offer" placeholder="item offer">
                    <input item="order-dis" type="text" class="form-control order-dis item" name="final_order_form_dis" placeholder="item discount">
                    <input item="order-cost" type="text" class="form-control order-cost item" name="final_order_form_cost" placeholder="item cost">
                    <input item="order-qty" type="text" class="form-control order-qty item" name="final_order_form_qty" placeholder="item qty">
                    <input type="submit" name="final-order-form-btn" class="btn btn-default final-order-btn float-left bt-sm mt-1" value="submit my order">
                </form>
                <div class="col-md-2 float-left">
                    <span class="final-order-form-res"></span>
                </div>
            </div>
        </div>  
    </div>		
<?php
exit;
else:
    $msg = "<span class='text-danger mt-4 d-block'>code does not match!</span>";
    print $msg;
endif;
?>