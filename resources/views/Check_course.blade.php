@extends('layout.header')

@section('main')
<br><br><br><br>
<?php
if(Session::has('locale'))
{
$locale = Session::get('locale');
App::setLocale($locale);
}else{
App::setLocale('en');
$locale = 'en';
}
?>
<section class="section-table cid-rN9ViYOSs1" id="table1-2e">
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-5">ตรวจสอบคุณวุฒิตามหลักสูตร<br></h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
        <strong>ระดับการศึกษา : </strong><br>
        <div class="dropdown">
          <select class="btn btn-light  dropdown-toggle" style="height :60px" name="dropdown" onchange="location = this.options[this.selectedIndex].value;">
            <option class="dropdown-item display-6" value="Check_course?degree=2">ปริญญาตรี</option>
            <option class="dropdown-item display-6" value="Check_course?degree=5">ปริญญาโท</option>
            <option class="dropdown-item display-6" value="Check_course?degree=3">ปริญญาเอก</option>
            <option class="dropdown-item display-6" value="Check_course?degree=4">ปริญญาตรีควบโท</option>
            <option class="dropdown-item display-6" value="Check_course?degree=6">ประกาศนียบัตร</option>
          </select>
        </div>
      </h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-6">ค้นหา : </label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                <th class="head-item mbr-fonts-style display-6">ลำดับที่</th>
                <th class="head-item mbr-fonts-style display-6">หลักสูตร</th>
                <th class="head-item mbr-fonts-style display-6">จำนวนนิสิต</th>
                <th class="head-item mbr-fonts-style display-6">รายละเอียด</th>
              </tr>
            </thead>
            
            <tbody>
              <?php $i = 1; ?>
              @foreach ($course as $val) 
            <tr> 
              <td class="body-item mbr-fonts-style display-6">{{$i++}}</td>
              <td class="body-item mbr-fonts-style display-6">{{ $val->COURSE_NAME_TH }}</td>
              <td class="body-item mbr-fonts-style display-6">{{ $val->COUNT_STUDENT }}</td>
              <td class="body-item mbr-fonts-style display-6">
                <a href="#" class="badge badge-dark"> ดูข้อมูล</a>
              </td>
            </tr>
              @endforeach 
              
            </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">แสดง</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">รายการ</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>


