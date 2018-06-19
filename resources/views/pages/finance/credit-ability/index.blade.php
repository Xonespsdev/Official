@extends('pages.main')
@section('content')
@section ('title' , 'Credit and Ability')
      <div class="container">
           <div class="section-header">
           <h2 >ຄິດໄລ່ເງິນກູ້ຢືມ.</h2>
          </div>
          <form action="#" method="POST">
               <label></label>
              <div class="form-group">
                            <label>ຈຳນວນເງິນກູ້ຢືມ</label>
                <input type="text" name="flag" class="form-control" id="name" placeholder="Amount money" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>            
              <div class="form-group">
                <label>ສະກຸນເງິນ</label>
                <input type="text" name="currency_name" class="form-control" id="name" placeholder="Currency Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
             <div class="form-group">
                <label>ໄລຍະກູ້ຢືມ</label>
                <input type="text" class="form-control" name="buy" placeholder="Time" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>     
              <div class="form-group">
                <label>ອັດຕາດອກເບ້ຍ</label>
                <input type="text" class="form-control" name="sale" placeholder="Interest" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>                    
               <button type="submit" class="btn btn-primary btn-block mt-3 save-button">Calulate</button>
</form>          
       <div class="section-header">
          <h2>ຄວາມສາມາດໃນການກູ້ຢືມ.</h2>
        </div>
<img class="img-fluid" src="{{url('/')}}/img/staff.jpg" alt="">
<h5 class="description">   ຂໍ້ກຳນົດ ແລະ ເງື່ອນໄຂ
ເປັນເງິນກູ້ພິເສດ ສຳລັບພະນັກງານລັດຖະກອນ ທີ່ບໍ່ຕ້ອງໃຊ້ຫຼັກຊັບ, ໃຊ້ພຽງແຕ່ບຸກຄົນຮັກແພງຄໍ້າປະກັນຂະ
ໜາດວົງເງິນກູ້ຕໍ່າສຸດ 5.000.000 ກີບ ສູງສຸດບໍ່ເກີນ 50.000.000 ກີບ ຫຼື ບໍ່ເກີນ 15 ເທົ່າ ຂອງລາຍຮັບ ຫຼືເງິນເດືອນ. ອັດຕາດອກເບ້ຍ ແລະ ຄ່າທຳນຽມ ຂຶ້ນກັບເງິນເດືອນ ຫຼື ດອກເບ້ຍບໍ່ເກີນ 34.68% ຕໍ່ປີ, ດອກເບ້ຍ ແລະ ຄ່າທຳນຽມ ລວມແລ້ວບໍ່ເກີນ 36.18% ຕໍ່ປີ. <br>
<li>ໝາຍເຫດ</li>
ເພື່ອຄວາມວອງໄວໃນການພິຈາລະນາອະນຸມັດເງິນກູ້ສະຖາບັນການເງິນ ພອລ (PMI) ກະລຸນາຕື່ມຂໍ້ມູນໃຫ້ຄົບ
ຕາມແບບຟອມລຸ່ມນີ້:
1.  ໃບສະເໜີກູ້ຢືມ
2.  ສັນຍາກູ້ຢືມ
3.  ໃບມອບສິດ
ພ້ອມທັງຂັດຕິດເອກະສານກ່ຽວຂ້ອງອື່ນໆ ຕື່ມໃຫ້ຄົບຖ້ວນ ແລະ ຖືກຕ້ອງທຸກສະບັບ ໃນມື້ພະນັກງານລົງມາ ສະຖາບັນຈະອະນຸມັດເງິນກູ້ໃນມື້ຕໍ່ມາ ໃຊ້ເວລາບໍ່ເກີນ 3 ວັນ.
</h5>    
    <h2>ຕາຕະລາງສົມທຽບຕໍ່ເງິນອະນຸມັດໄດ້ .</h2>
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100">
          <table id ="idtable">
            <thead>
              <tr class="table100-head">
                <th class="column1">ລຳດັບ</th>
                <th class="column2">ລາຍຮັບສຸດທິ</th>
                <th class="column3">ວົງເງິນອະນຸມັດໄດ້</th>       
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td class="column1">2017-09-29 01:22</td>
                  <td class="column2">200398</td>
                  <td class="column3">iPhone X 64Gb Grey</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-28 05:57</td>
                  <td class="column2">200397</td>
                  <td class="column3">Samsung S8 Black</td>
                </tr>          
            </tbody>
          </table>
        </div>
      </div>
  </div> 
    </section><!-- #about -->


    	@endsection