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
      <h2>{{ __('Checkout form') }}</h2><br><br>
    </div>
    <section style="align-content: center;">
    <div class="row g-5">
      @if (Session::has('coupon'))
      <div class="col-md-5 col-lg-4 order-md-last">
        <ul class="list-group mb-3">
          @foreach (\Cart::getContent() as $item)
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">{{ __('bill1') }}</h6>
              <small class="text-muted">{{$item->name}}</small>
            </div>
            <span class="text-muted">{{$item->price}}€</span>
            @endforeach
          </li>
          <!--<li class="list-group-item d-flex justify-content-between">
            <span>{{ __('bill2') }}</span>
          </li>-->
        </ul>
        <form class="card p-2 mb-5" action="{{route('coupon.store')}}" method="POST">
          @csrf
          <div class="input-group">
           <input type="text" class="coupon_code" id="coupon_code" name="coupon_code" placeholder="Promo code">
           <button type="submit" class="btn btn-secondary">{{ __('bill3') }}</button>
         </div>
         <li class="list-group-item d-flex justify-content-between">
          <span>{{ __('bill4') }}</span>
          <strong>€{{round(Cart::getTotal()*1.21-Session::get('coupon')['amount'],2, PHP_ROUND_HALF_EVEN)}}</strong>
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
              <h6 class="my-0">{{ __('bill1') }}</h6>
              <small class="text-muted">{{$item->name}}</small>
            </div>
            <span class="text-muted">{{$item->price}}€</span>
          </li>
          <!--<li class="list-group-item d-flex justify-content-between">
            <span>{{ __('bill2') }}</span>-->
            @endforeach
          <!--</li>-->
        </ul>
        <form class="card p-2 mb-5" action="{{route('coupon.store')}}" method="POST" style="background-color: #e6f9ff;">
          @csrf
          <div class="input-group">
           <input type="text" class="coupon_code" id="coupon_code" name="coupon_code" placeholder="Promo code">
           <button type="submit" class="btn btn-secondary">{{ __('bill3') }}</button>
         </div>
         <li class="list-group-item d-flex justify-content-between">
          <span>{{ __('bill4') }}</span>
          <strong>€{{round(Cart::getTotal()*1.21,2, PHP_ROUND_HALF_EVEN)}}</strong>
        </li>
        @if (Cart::getTotal()*1.21 > 40)
        <p class="text-success">Tienes un cupon disponible - <b>EATWELL</b></p>
       @endif
        </form>
        @endif
      </div>

      <div class="col-md-7 col-lg-8" style="background-color: #e6f9ff; ">
        
        <form action="pago" method="POST" class="mx-1 mx-md-4">
          <div style="margin:20px;">
          <br><h4 class="mb-3">{{ __('bill5') }}</h4>
          @csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">{{ __('Name') }}</label>
              <input type="text" class="form-control" name="nombre">
              <div class="invalid-feedback">
                {{ __('bill6') }}
              </div>
              @error('nombre')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">{{ __('Lastnames') }}</label>
              <input type="text" class="form-control" name="apellidos">
              <div class="invalid-feedback">
                {{ __('bill7') }}
              </div>
              @error('apellidos')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-12">
              <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
              <input type="email" class="form-control" name="email">
              <div class="invalid-feedback">
                {{ __('bill8') }}
              </div>
              @error('email')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-12">
              <label for="address" class="form-label">{{ __('Address') }}</label>
              <input type="text" class="form-control" id="adresa" name="adresa">
              <div class="invalid-feedback">
                {{ __('bill9') }}
              </div>
              @error('adresa')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">{{ __('Zip code') }}</label>
              <input type="text" class="form-control" name="zip">
              <div class="invalid-feedback">
                {{ __('bill10') }}
              </div>
            </div>
            @error('zip')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <hr class="my-4">

          <h4 class="mb-3">{{ __('Payment Method') }}</h4>
          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">{{ __('Cardholder') }}</label>
              <input type="text" class="form-control" name="tarjeta">
              <div class="invalid-feedback">
                {{ __('bill11') }}
              </div>
              @error('tarjeta')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">{{ __('Card number') }}</label>
              <input type="text" class="form-control" name="tarjetaNumero">
              <div class="invalid-feedback">
                {{ __('bill12') }}
              </div>
              @error('tarjetaNumero')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">{{ __('CVV') }}</label>
              <input type="text" class="form-control" name="cvv">
              <div class="invalid-feedback">
                {{ __('bill13') }}
              </div>
            </div>
            @error('cvv')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <hr class="my-4">

          <div style="margin-bottom:10px; text-align:center;">
          <button type="submit" class="btn btn-outline-primary" >{{ __('Complete payment') }}</button><br><br>
          </div>
          </div>
        </form>
        
      </div>
    </div>
  </main>
  </section>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2023 FoodFit</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">{{ __('Privacy') }}</a></li>
      <li class="list-inline-item"><a href="#">{{ __('Terms') }}</a></li>
      <li class="list-inline-item"><a href="#">{{ __('Support') }}</a></li>
    </ul>
  </footer>
</div>
  </body>
</html>
