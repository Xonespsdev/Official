@extends('admins.main')
@section('content')
@section('title', 'Currency')
@section('secondtitle', 'Add your Exchange rate.')
<div class="panel-body">
<form action="{{route('currency.store')}}" method="POST">
  {{ csrf_field() }}
               <label>Flags's name. la (Laos), sg (Singapore), us (United States), gb (United Kingdom), th (Thailand), vn (Vietnam), cn (China), ch (Switzerland), au (Australia), hk (Hong Kong), no (Norway), se (Sweden), jp (Japan).</label>
              <div class="form-group">
                            <label>Flag</label>
                <input type="text" name="flag" class="form-control" id="name" placeholder="Flag" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>

              </div>
           
              
              <div class="form-group">
                <label>Currency Name</label>
                <input type="text" name="currency_name" class="form-control" id="name" placeholder="Currency" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
             <div class="form-group">
                <label>Buy</label>
                <input type="text" class="form-control" name="buy" placeholder="Buy" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>     
              <div class="form-group">
                <label>Sales</label>
                <input type="text" class="form-control" name="sale" placeholder="Sales" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>                    
               <button type="submit" class="btn btn-primary btn-block mt-3 save-button">Save</button>
</form>
    <br>
     <h2>Exchange Rate/ ຄິດໄລ່ອັດຕາການແລກປຽ່ນ.</h2>
     <br>
      <div class="currency">
      <table class="table100-head table100">
  <thead>
  <tr>
    <th class="columncurrency_name">Exchange Name</th>
    <th>Buy</th>
    <th>Sales</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
    @foreach($currency as $exchanges)
  <tr>
    <td class="columncurrency_name">
    <span class="flag-icon flag-icon-{{$exchanges->flag}}"></span>
    {{$exchanges->currency }}
     </td>
   
    <td>{{$exchanges->buy}}</td>
    <td>{{$exchanges->sale}}</td>
      <td>
        <div class="btn-group">
           <a class="btn btn-success" href="{{route ('admin.edit_currency', $exchanges->id)}}" ><i class="fa fa-edit"></i></a>
                 <form action="{{route('admin.delete_currency',$exchanges->id)}}" method="POST">
             {{ csrf_field() }} 
             <input type="hidden" name="_method" value="delete">
               <button  type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </form>
        </div>
          </td>
  </tr>
 @endforeach
  </tbody>
</table>
      </div>
</div>
@endsection