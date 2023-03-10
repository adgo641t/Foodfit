<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Foodfit-Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body class="bg-light">
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="logo.png" alt="" width="130" height="57">
      <h2>Checkout form</h2>
    </div>
    <div class="row g-5">
      @if (Session::has('coupon'))
      <div class="col-md-5 col-lg-4 order-md-last">
        <ul class="list-group mb-3">
          @foreach (\Cart::getContent() as $item)
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Nombre del Producto:</h6>
              <small class="text-muted">{{$item->name}}</small>
            </div>
            <span class="text-muted">{{$item->price}}???</span>
            @endforeach
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>IVA 21%</span>
          </li>
        </ul>
        <form class="card p-2 mb-5" action="{{route('coupon.store')}}" method="POST">
          @csrf
          <div class="input-group">
           <input type="text" class="coupon_code" id="coupon_code" name="coupon_code" placeholder="Promo code">
           <button type="submit" class="btn btn-secondary">Aplicar Cupon</button>
         </div>
         <li class="list-group-item d-flex justify-content-between">
          <span>Total (EUR)</span>
          <strong>???{{round(Cart::getTotal()*1.21-Session::get('coupon')['amount'],2, PHP_ROUND_HALF_EVEN)}}</strong>
        </li>
         @if (Session::has('danger'))
         <div class="p-4 mb-3 bg-green-400 rounded" x-data="{show: true}" x-init="setTimeout(()=> show = false, 3000)" x-show="show">
             <p class="text-danger">{{Session::get('danger')}}</p>
         </div>    
         @endif
         @if (Session::has('success_message'))
         <div class="p-4 mb-3 bg-green-400 rounded" x-data="{show: true}" x-init="setTimeout(()=> show = false, 3000)" x-show="show">
         <p class="text-success">{{Session::get('success_message')}}</p>
         </div>
         @endif
        </form>
        @endif
      </div>

      @if (!Session::has('coupon'))
      <div class="col-md-5 col-lg-4 order-md-last">
        <ul class="list-group mb-3">
          @foreach (\Cart::getContent() as $item)
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Nombre del Producto:</h6>
              <small class="text-muted">{{$item->name}}</small>
            </div>
            <span class="text-muted">{{$item->price}}???</span>
            @endforeach
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>IVA 21%</span>
          </li>
        </ul>
        <form class="card p-2 mb-5" action="{{route('coupon.store')}}" method="POST">
          @csrf
          <div class="input-group">
           <input type="text" class="coupon_code" id="coupon_code" name="coupon_code" placeholder="Promo code">
           <button type="submit" class="btn btn-secondary">Aplicar Cupon</button>
         </div>
         <li class="list-group-item d-flex justify-content-between">
          <span>Total (EUR)</span>
          <strong>???{{round(Cart::getTotal()*1.21,2, PHP_ROUND_HALF_EVEN)}}</strong>
        </li>
        </form>
        @endif
      </div>

      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Facturaci??n</h4>
        <form action="/pago" method="POST">
          @csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
              @error('nombre')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellidos</label>
              <input type="text" class="form-control" name="apellidos">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
              @error('apellidos')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
              @error('email')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" name="adresa">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
              @error('adresa')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" name="zip">
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
            @error('zip')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Tarjeta de cr??dito</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Tarjeta de d??bito</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">Stripe</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nombre en la tarjeta</label>
              <input type="text" class="form-control" name="tarjeta">
              <div class="invalid-feedback">
                Name on card is required
              </div>
              @error('tarjeta')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Numero de la tarjeta</label>
              <input type="text" class="form-control" name="tarjetaNumero">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
              @error('tarjetaNumero')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" name="cvv">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
            @error('cvv')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Completar Pago</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017???2023 FoodFit</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
  </body>
</html>
