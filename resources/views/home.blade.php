
@extends('layouts.app')

@section('content')
<script rel="stylesheet" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<section class="section-table cid-rN9ViYOSs1" id="table1-2e">
    <div class="container-table" style="padding:0%">
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
                    <label class="searchInfo mbr-fonts-style display-6">ค้นหา: </label>
                    <input class="form-control-sh input-sm" disabled="">
                  </div>
              </div>
            </div>
          </div>
          {{--<div class="container scroll">
            <table id="dtMaterialDesignExample" class="table striped bordered isSearch" cellspacing="0">
              <thead class="head-item mbr-fonts-style display-6">
                <tr class="table-heads ">
                  <th class="head-item mbr-fonts-style display-6">ลำดับ</th>
                  <th class="head-item mbr-fonts-style display-6">ข้อมูลที่เลือกสืบค้น</th>
                  <th class="head-item mbr-fonts-style display-6">รายละเอียดผู้สืบค้น</th>
                  <th class="head-item mbr-fonts-style display-6">วัตถุประสงค์ในการตรวจสอบ</th>
                  <th class="head-item mbr-fonts-style display-6">ประเภทหน่วยงาน</th>
                  <th class="head-item mbr-fonts-style display-6">เวลาที่สืบค้น</th>
                </tr>
              </thead>--}}
           <div class=" scroll text-nowrap" style="margin:2%" >
            <table class="table isSearch" cellspacing="0" id="dtMaterialDesignExample">
              <thead align="center">
                <tr class="table-heads ">
                  <th class="head-item mbr-fonts-style display-6">ลำดับ</th>
                  <th class="head-item mbr-fonts-style display-6">ข้อมูลที่เลือกสืบค้น</th>
                  <th class="head-item mbr-fonts-style display-6">รายละเอียดผู้สืบค้น</th>
                  <th class="head-item mbr-fonts-style display-6">วัตถุประสงค์ในการตรวจสอบ</th>
                  <th class="head-item mbr-fonts-style display-6">ประเภทหน่วยงาน</th>
                  <th class="head-item mbr-fonts-style display-6">เวลาที่สืบค้น</th>

                </tr>
              </thead> 
            
              <tbody>
                <?php $i = 1; ?>
               @foreach ( $admin as $admins)
                  <tr> 
                    <td class="body-item mbr-fonts-style display-6" align="center">{{$i++}}</td>
                    <td class="body-item mbr-fonts-style display-6" align="center">
                      <br>
                      {{ $admins->CITIZEN_ID }}{{ $admins->NAME_EN }} {{ $admins->NAME_TH }}{{ $admins->STUDENT_CODE }}<br>                        
                    </td>
                    <td class="body-item mbr-fonts-style display-6">
                        ชื่อหน่วยงาน : {{ $admins->companyname }}<br>
                        ชื่อ-นามสกุลผู้ขอตรวจสอบ : {{ $admins->namecheck }}<br>
                        อีเมล์ : {{ $admins->e_mail }}<br>
                        หมายเลขโทรศัพท์ : {{ $admins->phone_number }}<br>
                    </td>
                    <td class="body-item mbr-fonts-style display-6" align="center">
                       <br> 
                         {{ $admins->Objective }}  {{ $admins->Objective_1 }}
                       <br>
                    </td>
                    <td class="body-item mbr-fonts-style display-6" align="center">
                      <br>
                        {{ $admins->department }}  {{ $admins->department_1 }}
                      <br>
                    </td>
                    <td class="body-item mbr-fonts-style display-6" align="center">
                     <br>
                       {{ \Carbon\Carbon::createFromDate($admins->created_at)->addYear(543)->locale('th')->isoformat('D MMMM Y H:mm:ss น.')}}
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
  
@endsection

<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
  
<script>
  $(document).ready(function () {
    
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
    const $this = $(this);
    {this.right}
    $this.attr("placeholder", "Search");
    $this.removeClass('form-control-sm');
  });
  $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
    $(this).parent().append($(this).children());
  });
  $('#dtMaterialDesignExample').DataTable({
    
    columns: [
            { title: "ลำดับที่" },
            { title: "ข้อมูลที่เลือกสืบค้น" },
            { title: "รายละเอียดผู้สืบค้น" },
            { title: "วัตถุประสงค์ในการตรวจสอบ" }
            { title: "ประเภทหน่วยงาน" }
            { title: "เวลาที่สืบค้น" }

        ],  
  });
  $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
  $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
  $('#dtMaterialDesignExample_wrapper select').removeClass(
  'custom-select custom-select-sm form-control form-control-sm');
  $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
  $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
  $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
  
});
</script>