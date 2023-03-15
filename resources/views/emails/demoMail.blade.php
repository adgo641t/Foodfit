@component('mail::message')
# {{ $mailData['title'] }}

@foreach (\Cart::getContent() as $item)

|Plato |Cantidad  | Precio|
|:--- | ---: | :---:|
|{{ $item->name }}| {{ $item->quantity }}|{{ $item->quantity }}|

@endforeach
               
# Iva 21%
# Total: ${{round(Cart::getTotal()*1.21 ,2, PHP_ROUND_HALF_EVEN)}}
  
@component('mail::button', ['url' => $mailData['url']])
Visit Our Website
@endcomponent
  
Thanks,

{{ config('app.name') }}
@endcomponent