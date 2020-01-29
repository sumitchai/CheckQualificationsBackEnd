@extends('layout.header')

@section('main')
<br><br><br><br>
<section class="section-table cid-rN9ViYOSs1" id="table1-2e">
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-5">ตรวจสอบคุณวุฒิตามหลักสูตร <br></h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
        <strong>ระดับการศึกษา :    
          @if ($degree == 2)
          ปริญญาตรี
          @elseif($degree == 5) 
          ปริญญาตรีควบโท
          @elseif($degree == 3) 
          ปริญญาโท
          @elseif($degree == 4) 
          ปริญญาเอก
          @elseif($degree == 6) 
          ประกาศนียบัตร
          @else
          เลือกระดับปริญญา
          @endif
         </strong><br>
        <div class="dropdown">
          <button class="btn btn-light  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            เลือกระดับปริญญา
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item " href="Check_course?degree=2">ปริญญาตรี</a>
            <a class="dropdown-item" href="Check_course?degree=5">ปริญญาตรีควบโท</a>
            <a class="dropdown-item" href="Check_course?degree=3">ปริญญาโท</a>
            <a class="dropdown-item" href="Check_course?degree=4">ปริญญาเอก</a>
            <a class="dropdown-item" href="Check_course?degree=6">ประกาศนียบัตร</a>
          </div>
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
              @foreach ($course as $x) 
            <tr> 
              <td class="body-item mbr-fonts-style display-6">{{$i++}}</td>
              <td class="body-item mbr-fonts-style display-6">{{$x->COURSE_NAME_TH}}</td>
              <td class="body-item mbr-fonts-style display-6">{{$x->count}}</td>
              <td class="body-item mbr-fonts-style display-6">
                <a href="/SelectThailist/{{$x->COURSE_NAME_TH}}" class="badge badge-dark"> ดูข้อมูล</a>
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


