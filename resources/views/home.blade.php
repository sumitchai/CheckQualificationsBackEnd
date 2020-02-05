@extends('layouts.app')

@section('content')
<section class="section-table cid-rN9ViYOSs1" id="table1-2e">
    <div class="container container-table">
        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-5">ตรวจสอบคุณวุฒิตามหลักสูตร <br></h2>
        <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
          <strong>ข้อมูลการสืบค้นคุณวุฒิ</strong>
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
                  <th class="head-item mbr-fonts-style display-6">ID</th>
                  <th class="head-item mbr-fonts-style display-6">ข้อมูลที่เลือกสืบค้น</th>
                  <th class="head-item mbr-fonts-style display-6">รายละเอียดผู้สืบค้น</th>
                  <th class="head-item mbr-fonts-style display-6">วัตถุประสงค์ในการตรวจสอบ</th>
                  <th class="head-item mbr-fonts-style display-6">ประเภทหน่วยงาน</th>
                  <th class="head-item mbr-fonts-style display-6">เวลาที่สืบค้น</th>

                </tr>
              </thead>
              @foreach ($admin as $t)
              <tbody>
                <?php $i = 1; ?>
              <tr> 
                <td class="body-item mbr-fonts-style display-6">{{$i++}}</td>
                <td class="body-item mbr-fonts-style display-6">
                    ชื่อ-สกุล : {{$t->NAME}} <br>
                    รหัสนิสิต :{{$t->ID_STUDENT}} <br>
                    เลขบัตรประชาชน :{{$t->ID_SSN}} <br>
                </td>
                <td class="body-item mbr-fonts-style display-6">
                    ชื่อหน่วยงาน :{{$t->companyname}}<br>
                    ชื่อ-นามสกุลผู้ขอตรวจสอบ : {{$t->namecheck}} <br>
                    อีเมล์ :{{$t->e_mail}} <br>
                    หมายเลขโทรศัพท์ :{{$t->phone_number}} <br>
                </td>
                <td class="body-item mbr-fonts-style display-6">
                   {{$t->objective}} <br>
                    {{$t->objective_1 }}<br>
                </td>
                <td class="body-item mbr-fonts-style display-6">
                  {{$t->department}}<br>
                  {{$t->department_1 }} <br>
                </td>
                <td class="body-item mbr-fonts-style display-6">
                  {{$t->created_at}} <br>
                </td>
              </tr>
              </tbody>
              @endforeach 
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
  
@endsection
