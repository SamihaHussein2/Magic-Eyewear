<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
    <link rel="stylesheet" href="<?=ASSETS?>css/cart.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/bootstrap.min.css">
<link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/mdb-pro.min.css">
<link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/mdb.ecommerce.min.css">
  </head>
  <body class="skin-light">
    <!--Section: Block Content-->
  <section>

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-8">

        <!-- Card -->
        <div class="mb-2">
          <div class="pt-4 wish-list">

            <h5 class="mb-4">Cart (<span>2</span> items)</h5>

            <div class="row mb-4">
              <div class="col-md-5 col-lg-3 col-xl-3">
                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                  <img class="img-fluid w-100"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                  <a href="#!">
                    <div class="mask">
                      <img class="img-fluid w-100"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg">
                      <div class="mask rgba-black-slight"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-7 col-lg-9 col-xl-9">
                <div>
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5>Blue denim shirt</h5>
                      <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
                      <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
                      <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                    </div>
                    <div>
                      <div class="def-number-input number-input safari_only mb-0 w-100">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                          class="minus decrease"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                          class="plus increase"></button>
                      </div>
                      <small id="passwordHelpBlock" class="form-text text-muted text-center">
                        (Note, 1 piece)
                      </small>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                          class="fas fa-trash-alt mr-1"></i> Remove item </a>
                      <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                          class="fas fa-heart mr-1"></i> Move to wish list </a>
                    </div>
                    <p class="mb-0"><span><strong id="summary">$17.99</strong></span></p class="mb-0">
                  </div>
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="row mb-4">
              <div class="col-md-5 col-lg-3 col-xl-3">
                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                  <img class="img-fluid w-100"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" alt="Sample">
                  <a href="#!">
                    <div class="mask">
                      <img class="img-fluid w-100"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg">
                      <div class="mask rgba-black-slight"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-7 col-lg-9 col-xl-9">
                <div>
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5>Red hoodie</h5>
                      <p class="mb-3 text-muted text-uppercase small">Shirt - red</p>
                      <p class="mb-2 text-muted text-uppercase small">Color: red</p>
                      <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                    </div>
                    <div>
                      <div class="def-number-input number-input safari_only mb-0 w-100">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                          class="minus"></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                          class="plus"></button>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                          class="fas fa-trash-alt mr-1"></i> Remove item </a>
                      <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                          class="fas fa-heart mr-1"></i> Move to wish list </a>
                    </div>
                    <p class="mb-0"><span><strong>$35.99</strong></span></p class="mb-0">
                  </div>
                </div>
              </div>
            </div>
            <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
              items to your cart does not mean booking them.</p>

          </div>
        </div>
        <!-- Card -->

        

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4">

        <!-- Card -->
        <div class="mb-3">
          <div class="pt-4">

            <h5 class="mb-3">The total amount of</h5>

            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Temporary amount
                <span>$25.98</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Gratis</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>The total amount of</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong>$53.98</strong></span>
              </li>
            </ul>

            <button type="button" class="btn btn-primary btn-block">go to checkout</button>

          </div>
        </div>
        <!-- Card -->

        
      </div>
      <!--Grid column-->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Block Content-->
</body>
</html>
