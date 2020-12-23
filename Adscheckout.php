<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Advertisement Checkout Form-CommunityX.com</title>
    <link rel="stylesheet" href="adscheckout.css">
  </head>
  <body>
  <div class="full_page">
    <div class="header">
      <h1>        <img src="Schoolcrest.png" alt="">
CommunityX</h1>
      <h2>Advertisement Checkout Form</h2>
    </div>



    <div class="body_content">
      <form  action="index.html" method="post">
        <div class="Ads-info">
        <ul>
        <h1>Ads Information</h1>
          <li>
            <label >Package Type</label> <br/>
            <select id="Package-type" name="">
              <option value="Select a Package">Select a Package </option>
              <option value="Regular">Regular</option>
                <option value="Premium Paging">Premium Paging</option>
                </select>
          </li>
          <li>
          <i class="fas fa-user"></i><label >Ads Name</label><br/>
            <input type="text" name="" value="">
          </li>
          <li>
            <label >Ad category</label> <br/>
            <select id="category" >
              <option value="Select a Category">Select a Category</option>
              <option value="Technology">Technology</option>
                <option value="Media">Media</option>
              <option value="Others">Others</option>
            </select>
          </li>
          <li>
            <i class="fas fa-phone-square-alt"></i><label >Phone Number</label><br/>
            <input type="number" name="" value="">
          </li>
          <li>
            <label ><i class="fas fa-address-card"></i>Address</label><br/>
            <input type="text" name="" value="">
          </li>
          <li>
            <label >Location</label><br/>
            <input type="text" name="" value="">
          </li>
        </ul>
          </div>
          <div class="Payment-info">
            <ul>
              <h1>Payment</h1> <br/>

              <li>
                <label >Billing Cycle</label> <br/>
                <select id="Billing-duration" name="">
                  <option value="Duration">Duration</option>
                <option value="1 Month @ Ghc50">1 Month @ Ghc50</option>
                  <option value="12 Month @ Ghc600"/>12 Month @ Ghc600</option>
                  <option value="Custom"/>Custom</option>

                  </select>
                  <div class="Custom">

                  </div>
                </li>
              <!--  <li>
                  <img src="mtn.png" alt="">
                  <img src="voda.jpg" alt="">
                  <img src="bank.jpg" alt="">
                  <img src="bank1.jpg" alt="">
                </li> -->
                <li>
                  <input type="checkbox"  name="" onclick="document.getElementById('Mobilemoney').style.display='block'" ondblclick="document.getElementById('Mobilemoney').style.display='none'"/> Mobile Money
                  <input type="checkbox" id="Bank" name="" value="Bank"> Bank
                </li>
                <div id="Mobilemoney">
                  <input type="number" name="" placeholder="Enter Personal Phone Number"><br/><br/>

                    <select id="Payment-option">
                      <option value="Select Payment Network">Select Payment Network</option>
                    <option value="MTN Mobile Money (0249768142)">MTN Mobile Money (0249768142)</option>
                      <option value="Vodafone Cash (0502190339)">Vodafone Cash (0502190339)</option>
                    </select><br/><br/>
                    <input type="text" name="" placeholder="Transaction ID">
                </div>
                <div id="Bank">
<!--here i would put in the necessary bank details to pay to and a choose file for proof of payment-->
                </div>
                <li>
                  <label for="">Expiry Date</label> <br/>
                  <input type="date" name="" placeholder="Expiry Date">
                </li>
                <li>
                  <button type="button" name="button">Continue</button>
                </li>
            </ul>

          </div>
      </form>
    </div>

</div>
  </body>
</html>
