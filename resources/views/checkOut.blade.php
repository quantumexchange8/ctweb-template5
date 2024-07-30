@extends('layout.master')

@section('content')

<div class="sf-contener clearfix second-bg ">
    <nav class="nav-wrap container_9">
      <ul class="sf-menu clearfix  ">
        <li class="item"><a class="parent" href="/home">Home</a> </li>
        <li class="item"><a class="parent" href="/home">Products</a>
          <ul>
            <li><a href="/productList">Product list</a></li>
            <li><a href="/productGrid">Product grid</a></li>
          </ul>
        </li>
        <li class="item"><a class="parent" href="/productDetails">Single Product</a> </li>
        <li class="item"><a class="parent"  href="/shoppingCart">Shopping Cart</a></li>
        <li  class="item"><a class="parent"  href="/checkOut">Checkout</a></li>
        <li class="item"><a class="parent" href="/blog">Blog</a>
        <li class="item"><a class="parent" href="/single_Post">Single Post</a></li>
        </li>
      </ul>
    </nav>
  </div>
  <div class="category-full-image"> 
    

    <ul class="category-slider">
      <li> <img src="media/page-title-bg.jpg" ></li>
    </ul>
  </div>
  <div class="container_9 title-container">
    <div class="page-title first-bg"> Shopping Cart </div>
    <div class="breadcrumb"> <a title="return to Home" href="/">Home</a> <span class="navigation-pipe">/</span> <span class="navigation_page">Shopping Cart</span> </div>
  </div>
  <section  id="columns" class="container_9 clearfix col1"> 
    
    <!-- Center -->
    <article id="center_column" class=" grid_5">
      <ol id="checkoutSteps" class="opc">
        <li class="section allow active" id="opc-login">
          <div class="step-title"> <span class="number">STEP  1</span>
            <h2>Checkout Method</h2>
            <a href="#">Edit</a> </div>
          <div style="" class="step a-item" id="checkout-step-login">
            <div class="col2-set">
              <div class="col-1">
                <h3>New Customer ?</h3>
                <div class="wrap-login">
                  <ul class="form-list">
                    <li class="control">
                      <input type="radio" class="radio" value="guest" id="login:guest" name="checkout_method">
                      <label for="login:guest">Checkout as Guest</label>
                    </li>
                    <li class="control">
                      <input type="radio" class="radio" value="register" id="login:register" name="checkout_method">
                      <label for="login:register">Register</label>
                    </li>
                  </ul>
                  <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                  <div class="buttons-set">
                    <button onclick="checkout.setMethod();" class="button" type="button" id="onepage-guest-register-button"><span><span>Continue</span></span></button>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <h3>Registered Customer ?</h3>
                <div class="wrap-login">
                  <form method="post" action="/customer/account/loginPost/" id="login-form">
                    <fieldset>
                      <ul class="form-list">
                        <li>
                          <label class="required" for="login-email"><em>*</em>Email Address</label>
                          <div class="input-box">
                            <input type="text" value="" name="login[username]" id="login-email" class="input-text required-entry validate-email">
                          </div>
                        </li>
                        <li>
                          <label class="required" for="login-password"><em>*</em>Password</label>
                          <div class="input-box">
                            <input type="password" name="login[password]" id="login-password" class="input-text required-entry">
                          </div>
                        </li>
                      </ul>
                      <input type="hidden" value="checkout" name="context">
                    </fieldset>
                  </form>
                  <div class="buttons-set">
                    <button onclick="checkout.setMethod();" class="button" type="button" id="onepage-guest-register-button"><span><span>Login</span></span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="section" id="opc-billing">
          <div class="step-title"> <span class="number">STEP  2</span>
            <h2>Billing Information</h2>
            <a href="#">Edit</a> </div>
          <div style="display:none;" class="step a-item" id="checkout-step-billing">
            <form action="" id="co-billing-form">
              <fieldset>
                <ul class="form-list">
                  <li id="billing-new-address-form">
                    <fieldset>
                      <input type="hidden" id="billing:address_id" value="" name="billing[address_id]">
                      <ul>
                        <li class="fields">
                          <div class="customer-name">
                            <div class="field name-firstname">
                              <label class="required" for="billing:firstname"><em>*</em>First Name</label>
                              <div class="input-box">
                                <input type="text" class="input-text required-entry" maxlength="255" title="First Name" value="" name="billing[firstname]" id="billing:firstname">
                              </div>
                            </div>
                            <div class="field name-lastname">
                              <label class="required" for="billing:lastname"><em>*</em>Last Name</label>
                              <div class="input-box">
                                <input type="text" class="input-text required-entry" maxlength="255" title="Last Name" value="" name="billing[lastname]" id="billing:lastname">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="fields">
                          <div class="field">
                            <label for="billing:company">Company</label>
                            <div class="input-box">
                              <input type="text" class="input-text " title="Company" value="" name="billing[company]" id="billing:company">
                            </div>
                          </div>
                          <div class="field">
                            <label class="required" for="billing:email"><em>*</em>Email Address</label>
                            <div class="input-box">
                              <input type="text" class="input-text validate-email required-entry" title="Email Address" value="" id="billing:email" name="billing[email]">
                            </div>
                          </div>
                        </li>
                        <li class="wide">
                          <label class="required" for="billing:street1"><em>*</em>Address</label>
                          <div class="input-box">
                            <input type="text" class="input-text  required-entry" value="" id="billing:street1" name="billing[street][]" title="Street Address">
                          </div>
                        </li>
                        <li class="wide">
                          <div class="input-box">
                            <input type="text" class="input-text " value="" id="billing:street2" name="billing[street][]" title="Street Address 2">
                          </div>
                        </li>
                        <li class="fields">
                          <div class="field">
                            <label class="required" for="billing:city"><em>*</em>City</label>
                            <div class="input-box">
                              <input type="text" id="billing:city" class="input-text  required-entry" value="" name="billing[city]" title="City">
                            </div>
                          </div>
                          <div class="field">
                            <label class="required" for="billing:region_id"><em>*</em>State/Province</label>
                            <div class="input-box">
                              <select style="" class="validate-select required-entry" title="State/Province" name="billing[region_id]" id="billing:region_id" defaultvalue="">
                                <option value="">Please select region, state or province</option>
                                <option value="1" title="Alabama">Alabama</option>
                                <option value="2" title="Alaska">Alaska</option>
                                <option value="3" title="American Samoa">American Samoa</option>
                                <option value="4" title="Arizona">Arizona</option>
                                <option value="5" title="Arkansas">Arkansas</option>
                                <option value="6" title="Armed Forces Africa">Armed Forces Africa</option>
                                <option value="7" title="Armed Forces Americas">Armed Forces Americas</option>
                                <option value="8" title="Armed Forces Canada">Armed Forces Canada</option>
                                <option value="9" title="Armed Forces Europe">Armed Forces Europe</option>
                                <option value="10" title="Armed Forces Middle East">Armed Forces Middle East</option>
                                <option value="11" title="Armed Forces Pacific">Armed Forces Pacific</option>
                                <option value="12" title="California">California</option>
                                <option value="13" title="Colorado">Colorado</option>
                                <option value="14" title="Connecticut">Connecticut</option>
                                <option value="15" title="Delaware">Delaware</option>
                                <option value="16" title="District of Columbia">District of Columbia</option>
                                <option value="17" title="Federated States Of Micronesia">Federated States Of Micronesia</option>
                                <option value="18" title="Florida">Florida</option>
                                <option value="19" title="Georgia">Georgia</option>
                                <option value="20" title="Guam">Guam</option>
                                <option value="21" title="Hawaii">Hawaii</option>
                                <option value="22" title="Idaho">Idaho</option>
                                <option value="23" title="Illinois">Illinois</option>
                                <option value="24" title="Indiana">Indiana</option>
                                <option value="25" title="Iowa">Iowa</option>
                                <option value="26" title="Kansas">Kansas</option>
                                <option value="63" title="West Virginia">West Virginia</option>
                                <option value="64" title="Wisconsin">Wisconsin</option>
                                <option value="65" title="Wyoming">Wyoming</option>
                              </select>
                              <input type="text" style="display:none;" class="input-text regions required-entry" title="State/Province" value="" name="billing[region]" id="billing:region">
                            </div>
                          </div>
                        </li>
                        <li class="fields">
                          <div class="field">
                            <label class="required" for="billing:postcode"><em>*</em>Zip/Postal Code</label>
                            <div class="input-box">
                              <input type="text" class="input-text validate-zip-international  required-entry" value="" id="billing:postcode" name="billing[postcode]" title="Zip/Postal Code">
                            </div>
                          </div>
                          <div class="field">
                            <label class="required" for="billing:country_id"><em>*</em>Country</label>
                            <div class="input-box">
                              <select title="Country" class="validate-select" id="billing:country_id" name="billing[country_id]">
                                <option value=""> </option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="VA">Vatican City</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                                <option value="AX">Åland Islands</option>
                              </select>
                            </div>
                          </div>
                        </li>
                        <li class="fields">
                          <div class="field">
                            <label class="required" for="billing:telephone"><em>*</em>Telephone</label>
                            <div class="input-box">
                              <input type="text" id="billing:telephone" class="input-text  required-entry" title="Telephone" value="" name="billing[telephone]">
                            </div>
                          </div>
                          <div class="field">
                            <label for="billing:fax">Fax</label>
                            <div class="input-box">
                              <input type="text" id="billing:fax" class="input-text " title="Fax" value="" name="billing[fax]">
                            </div>
                          </div>
                        </li>
                        <li id="register-customer-password" class="fields">
                          <div class="field">
                            <label class="required" for="billing:customer_password"><em>*</em>Password</label>
                            <div class="input-box">
                              <input type="password" class="input-text required-entry validate-password" title="Password" id="billing:customer_password" name="billing[customer_password]">
                            </div>
                          </div>
                          <div class="field">
                            <label class="required" for="billing:confirm_password"><em>*</em>Confirm Password</label>
                            <div class="input-box">
                              <input type="password" class="input-text required-entry validate-cpassword" id="billing:confirm_password" title="Confirm Password" name="billing[confirm_password]">
                            </div>
                          </div>
                        </li>
                        <li class="no-display">
                          <input type="hidden" value="1" name="billing[save_in_address_book]">
                        </li>
                      </ul>
                    </fieldset>
                  </li>
                  <li class="control">
                    <input type="radio" class="radio" onclick="$('shipping:same_as_billing').checked = true;" title="Ship to this address" checked="checked" value="1" id="billing:use_for_shipping_yes" name="billing[use_for_shipping]">
                    <label for="billing:use_for_shipping_yes">Ship to this address</label>
                  </li>
                  <li class="control">
                    <input type="radio" class="radio" onclick="$('shipping:same_as_billing').checked = false;" title="Ship to different address" value="0" id="billing:use_for_shipping_no" name="billing[use_for_shipping]">
                    <label for="billing:use_for_shipping_no">Ship to different address</label>
                  </li>
                </ul>
                <div id="billing-buttons-container" class="buttons-set">
                  <p class="required">* Required Fields</p>
                  <button onclick="billing.save()" class="button" title="Continue" type="button"><span><span>Continue</span></span></button>
                </div>
              </fieldset>
            </form>
          </div>
        </li>
        <li class="section" id="opc-shipping">
          <div class="step-title"> <span class="number">STEP   3</span>
            <h2>Shipping Information</h2>
            <a href="#">Edit</a> </div>
        </li>
        <li class="section" id="opc-shipping_method">
          <div class="step-title"> <span class="number">STEP  4</span>
            <h2>Shipping Method</h2>
            <a href="#">Edit</a> </div>
        </li>
        <li class="section" id="opc-payment">
          <div class="step-title"> <span class="number">STEP  5</span>
            <h2>Payment Information</h2>
            <a href="#">Edit</a> </div>
          <div style="display:none;" class="step a-item" id="checkout-step-payment">
            <form id="co-payment-form" action="">
              <fieldset>
                <dl id="checkout-payment-method-load" class="sp-methods">
                  <dt>
                    <input type="radio" class="radio" onclick="payment.switchMethod('checkmo')" title="Check / Money order" name="payment[method]" value="checkmo" id="p_method_checkmo" autocomplete="off">
                    <label for="p_method_checkmo">Check / Money order </label>
                  </dt>
                  <dt>
                    <input type="radio" class="radio" onclick="payment.switchMethod('ccsave')" title="Credit Card (saved)" name="payment[method]" value="ccsave" id="p_method_ccsave" autocomplete="off">
                    <label for="p_method_ccsave">Credit Card (saved) </label>
                  </dt>
                  <dd> </dd>
                </dl>
              </fieldset>
            </form>
            <div id="payment-buttons-container" class="buttons-set">
              <p class="required">* Required Fields</p>
              <p class="back-link"><a onclick="checkout.back(); return false;" href="#"><small>« </small>Back</a></p>
              <button onclick="payment.save()" class="button" type="button"><span><span>Continue</span></span></button>
            </div>
          </div>
        </li>
        <li class="section" id="opc-review">
          <div class="step-title"> <span class="number">STEP  6</span>
            <h2>Order Review</h2>
            <a href="#">Edit</a> </div>
        </li>
      </ol>
    </article>
  </section>
  <div class="footer-info first-bg">
    <div class="container_9 clearfix">
      <p><a href="/"><img src="media/footer-banner.png" alt=""></a></p>
    </div>
  </div>
    
@endsection