<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous">
<title>Pay Page</title>
</head>

<body>

<div class="container"> 
<h2 class="my-4 text-center">Intro to React Course [$50]</h2>
<form action="./charge.php" method="post" id="payment-form">
  <div class="form-row">
  <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty"
  placeholder="First name">
  <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty"
  placeholder="Last name">
  <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty"
  placeholder="Email Address">
    <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button >Submit Payment</button>
</form>
</div>
<script src="https:/ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"> </script>
</body>
</html>