@extends('layouts.app')

@section('content')
           
              <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                    Lagos Eyo Print Tee Shirt
                    ₦ 2,950
                </div>
            </p>
            <input type="hidden" name="email" value="damilareanjorin1@gmail.com"> {{-- required --}}
            <input type="hidden" name="orderID" value="555555">
            <input type="hidden" name="fullname" value="Damilare Anjorin">
            <input type="hidden" name="phone" value="08106420637">
            <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="3">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


            <p>
              <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
              <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
              </button>
            </p>
          </div>
        </div>
</form>
    @endsection