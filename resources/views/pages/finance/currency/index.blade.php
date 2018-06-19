@extends('pages.main')
@section('content')
@section ('title' , 'Currency')
     <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Exchange Rate/ ຄິດໄລ່ອັດຕາການແລກປຽ່ນ.</h2>
        </div>
      <p>Updated 12/06/2018</p>
      <div class="currency">
      <table class="table100-head table100">
  <thead>
  <tr>
    <th>{{__('locales.currency_name')}}</th>
    <th>{{__('locales.buy')}}</th>
    <th>{{__('locales.sales')}}</th>
  </tr>
  </thead>
  <tbody>
    @foreach($ex as $exchanges)
  <tr>
    <td class="columncurrency_name">
    <span class="flag-icon flag-icon-{{$exchanges->flag}}"></span> {{$exchanges->currency}}
     </td> 
    <td>{{$exchanges->buy}}</td>
    <td>{{$exchanges->sale}}</td>
  </tr>
 @endforeach
  </tbody>
</table>
      </div>
      </div>
    </section><!-- #team -->

@endsection