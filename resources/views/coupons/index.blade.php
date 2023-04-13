<header>
    @extends('layouts.menu')
</header>

<body>@section('content')
    <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
          <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
              <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                <h3 class="font-semibold text-base text-blueGray-700">{{ __('Coupons list') }}</h3>
              </div>
            </div>
          </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- new -->
    <div class="block w-full overflow-x-auto">
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible">
                <table class="items-center bg-transparent w-full border-collapse text-center">
                    <thead class="bg-gray-50 text-gray-900">
                        <tr class="focus:outline-none h-16 border border-gray-100 rounded">
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">{{ __('ID') }}</th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">{{ __('Name') }}</th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">{{ __('Discount') }}</th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">{{ __('Description') }}</th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">{{ __('Enable/Disable') }}</th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($coupons as $coupon)
                        <tr class="bg-gray-50">
                            <td class="pl-5">
                                {{ $coupon->id }}
                            </td>
                            <td class="pl-5">
                                {{ $coupon->code }}
                            </td>
                            <td class="pl-5 font-bold">
                                {{ $coupon->amount }}€
                            </td>
                            <td class="pl-5">
                                {{$coupon->description}}
                            </td>
                            <td class="pl-5">
                                {{$coupon->habilitado}}
                            </td>
                            <td class="pl-5">
                                <a href="{{ route('coupons.edit',$coupon->id) }}" class="px-1">
                                    <button type="submit">
                                        <i class="fa-solid fa-pen-to-square text-green-400"></i>
                                    </button>
                                </a>
                                <form action="{{ route('coupons.destroy',$coupon->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('{{ __('Are you sure to delete') }} {{$coupon->code}}?')" class="px-1">
                                        <i class="fa-solid fa-trash-can text-red-400"></i>
                                      </button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                {!! $coupons->links() !!}
                <br>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ url('/home') }}"> {{ __('Back') }}</a>
                    <a class="btn btn-success" href="{{ route('coupons.create') }}"> {{ __('Create new coupon') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>




