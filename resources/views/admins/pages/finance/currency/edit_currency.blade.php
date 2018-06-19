@extends('admins.main')
@section('content')
@section('title', 'Currency')
@section('secondtitle', 'Update Exchange rate')
<div class="panel-body">
<form action="{{route('admin.update_currency', $currency->id)}}" method="POST">
	{{ csrf_field() }}
              <label>Flags's name . la (Laos), sg (Singapore), us (United States), gb (United Kingdom), th (Thailand), vn (Vietnam), cn (China), ch (Switzerland), au (Australia), hk (Hong Kong), no (Norway), se (Sweden), jp (Japan).</label>
              <div class="form-group">
              		       	  <lable>Flag</lable>
                <input type="text" name="flag" class="form-control" id="name" value="{{$currency->flag}}"/>              
              </div>           	
              <div class="form-group">
              	<label>Currency Name</label>
                <input type="text" name="currency_name" class="form-control" id="name" value="{{$currency->currency}}"/>
              </div>

               <div class="form-group">
                <lable>Buy</lable>
                <input type="text" class="form-control" name="buy" value="{{$currency->buy}}"></div>
              </div>                  	
              <div class="form-group">
              	<label>Sales</label>
                <input type="text" class="form-control" name="sale" value="{{$currency->sale}}" />
                <div class="validation"></div>
              </div>
<button atype="submit" class="btn btn-primary btn-block mt-3 save-button">Update</button>
</form>
</div>
@endsection
