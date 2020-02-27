@extends('layout.header')

@section('main')
<br><br><br><br>

<section >
  <div class="mbr-form form-with-styler" style="padding : 40px">
    <br>
      <div class="mbr-section-btn">
        <a class="btn btn-md btn-bgr btn-primary display-4" onclick="goBack()">ย้อนกลับ</a> 
      </div>
    <br>
    <div class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">ข้อมูลการตรวจสอบคุณวุฒิรายบุคคล</div>
        <br>
    <div >
      

        <div class="row">
          <div class="col-sm-6" style="padding-left:120px; padding-right:20px;">
            <div class="card">
              <div class="card-body">
                {{-- {{ print($posts) }} --}}
               @foreach ($posts as $x)
                  <p class="card-text display-5">ชื่อ-นามสกุล : {{$x->NAME_TH}}</p>
                  <p class="card-text display-5">หลักสูตร :	{{$x->COURSE_NAME_TH}}</p>
                  <p class="card-text display-5">คณะ : {{ $x->FACULTY_NAME_TH }}</p>
                  <p class="card-text display-5">ปีสำเร็จการศึกษา (พ.ศ.): {{ $x->ACAD_YEAR }}</p>
                  <p class="card-text display-5">วันที่สำเร็จการศึกษา (พ.ศ.): {{ \Carbon\Carbon::createFromDate($x->GRADUATE_DATE)->addYear(543)->locale('th')->isoformat('LL')}}</p>
                  
                  @break
                  
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-sm-6" style="padding-left:20px; padding-right:120px;">
            <div class="card">
              <div class="card-body">
                 @foreach ($posts as $x)
                  <p class="card-text display-5">Fullname :	{{$x->NAME_EN}}</p>
                  <p class="card-text display-5">Curriculum : {{$x->COURSE_NAME_EN}}</p>
                  <p class="card-text display-5">Facuty :  {{ $x->FACULTY_NAME_EN}}</p>
                  <p class="card-text display-5">Year of Graduation (A.D.) : {{ $x->ACAD_YEAR-543 }}</p>
                  <p class="card-text display-5">Graduation date (A.D.) :  {{ \Carbon\Carbon::parse($x->GRADUATE_DATE)->locale('en')->isoformat('D  MMMM Y')}}</p>
                  @break
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <br>
      
      <div class="input-group-btn item-right" style="float: right ; padding-right : 120px">
        <a href="{{ route('HtmlToPDF') }}" class="btn btn-form btn-success display-5" type="submit" target ="_blank"><span class="glyphicon glyphicon-save"></span>ดาวน์โหลด</a>
      </div>
      <br><br><br><br><br>
    </div>
  </div>
</section>
<script>
  function goBack() {
    window.history.back();
  }
  </script>
  
  
  
  
  
  


