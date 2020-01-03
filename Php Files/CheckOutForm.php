<!--Checkout Form-->
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fullname" placeholder="Full Name">
            <label for="email"><i class="fa fa-envelope"></i> E-mail</label>
            <input type="text" id="email" name="email" placeholder="E-mail">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="City">

            <div class="row">
              <div class="col-50">
                <label for="state">Region</label>
                <input type="text" id="state" name="region" placeholder="Region">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="ZIP" placeholder="ZIP">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
      <hr>
      <p>Total <span class="price" style="color:black"><b></b></span></p>
    </div>
  </div>
</div>