@extends('layouts.menu')
  </head>
  @section('content')
  <body class="bg-light" style="height: 100vh;">

<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="logo.png" alt="" width="130" height="57">
      <h2>{{ __('Checkout form') }}</h2><br><br>
    </div>
    <section style="align-items: center;">
    <div class="row g-5">
    @if (Session::has('coupon'))
      <div class="col-lg-4 order-md-last">
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
           <input type="text" class="coupon_code border border-secondary border-2 rounded-start" id="coupon_code" name="coupon_code" placeholder="Promo code" >
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
      </div>
      @endif
    </div>
      @if (!Session::has('coupon'))
      <div class="row g-5">
      <div class="col-lg-4 order-md-last">
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
        <form class="card p-2 mb-5" action="{{route('coupon.store')}}" method="POST">
          @csrf
          <div class="input-group">
           <input type="text" class="coupon_code border border-secondary border-2 rounded-start" id="coupon_code" name="coupon_code" placeholder="Promo code" >
           <button type="submit" class="btn btn-secondary">{{ __('bill3') }}</button>
         </div>
         <li class="list-group-item d-flex justify-content-between">
          <span>{{ __('bill4') }}</span>
          <strong>€{{round(Cart::getTotal()*1.21,2, PHP_ROUND_HALF_EVEN)}}</strong>
        </li>
        @if (Session::has('danger'))
        <div class="p-4 mb-3 bg-red-400 rounded" x-data="{show: true}" x-init="setTimeout(()=> show = false, 3000)" x-show="show">
            <p class="text-danger">{{Session::get('danger')}}</p>
        </div>
        @endif
      </form>
        @endif
      </div>

      <div class="col-lg-8">

        <form action="pago" method="POST" class="mx-1 mx-md-4">
          <div style="margin:20px;">
          <br><h4 class="mb-3">{{ __('bill5') }}</h4>
          @csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">{{ __('Name') }}</label>
              <input value="{{old('nombre')}}" type="text" class="form-control" name="nombre">
              <div class="invalid-feedback">
                {{ __('bill6') }}
              </div>
              @error('nombre')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">{{ __('Lastnames') }}</label>
              <input value="{{old('apellidos')}}" type="text" class="form-control" name="apellidos">
              <div class="invalid-feedback">
                {{ __('bill7') }}
              </div>
              @error('apellidos')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-12">
              <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
              <input value="{{old('email')}}" type="email" class="form-control" name="email">
              <div class="invalid-feedback">
                {{ __('bill8') }}
              </div>
              @error('email')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" name="adresa">
              <div class="invalid-feedback">
                {{ __('bill9') }}
              </div>
              @error('adresa')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">{{ __('Zip code') }}</label>
              <input value="{{old('zip')}}" type="text" class="form-control" name="zip">
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
              <input value="{{old('tarjeta')}}" type="text" class="form-control" name="tarjeta">
              <div class="invalid-feedback">
                {{ __('bill11') }}
              </div>
              @error('tarjeta')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">{{ __('Card number') }}</label>
              <input value="{{old('tarjetaNumero')}}" type="text" class="form-control" name="tarjetaNumero">
              <div class="invalid-feedback">
                {{ __('bill12') }}
              </div>
              @error('tarjetaNumero')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">{{ __('CVV') }}</label>
              <input value="{{old('cvv')}}" type="text" class="form-control" name="cvv">
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
      <!-- @if (!Session::has('coupon'))
      <div class="row g-5">
      <div class="col-lg-4 order-md-last">
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
           <!-- @endforeach-->
          <!--</li>-->
        <!-- </ul>
        <form class="card p-2 mb-5" action="{{route('coupon.store')}}" method="POST">
          @csrf
          <div class="input-group">
           <input type="text" class="coupon_code" id="coupon_code" name="coupon_code" placeholder="Promo code" >
           <button type="submit" class="btn btn-secondary">{{ __('bill3') }}</button>
         </div>
         <li class="list-group-item d-flex justify-content-between">
          <span>{{ __('bill4') }}</span>
          <strong>€{{round(Cart::getTotal()*1.21,2, PHP_ROUND_HALF_EVEN)}}</strong>
        </li>
        @if (Session::has('danger'))
        <div class="p-4 mb-3 bg-red-400 rounded" x-data="{show: true}" x-init="setTimeout(()=> show = false, 3000)" x-show="show">
            <p class="text-danger">{{Session::get('danger')}}</p>
        </div>
        @endif
      </form>
        @endif --> 
      </div>
        </section>
      <div>
    </div>
  </main>
</div>
  </body>
@endsection