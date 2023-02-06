<?php
    $username = $_POST['name'] ; 
    $mail = $_POST['mail'];
    $tel_no = $_POST['tel'] ; 
    
    $amount_rs = $_POST['amount'] ;
    $apikey = "rzp_test_QSr93L64cmhgYC" ;
    
    
    ?>


<form action="sucess.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key= "rzp_test_QSr93L64cmhgYC" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount= "<?php echo $amount_rs * 100 ?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
   
    data-buttontext="Pay with Razorpay"
    data-name="Adarsh Payment"
    data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name=<?php echo $username ?>
    data-prefill.email=<?php echo $mail ?>
    data-prefill.contact=<?php echo $tel_no ?>
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden"/>
</form>