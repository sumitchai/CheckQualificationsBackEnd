@extends('layout.header')

@section('main')
<br><br><br><br>
@foreach ($data as $x)
<section >
  <div class="mbr-form form-with-styler" style="padding : 40px">
    <br><br>
    <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style ">ข้อมูลการตรวจสอบคุณวุฒิรายบุคคล</h2>
    <br>
    <div >
      <div class="row">
        <div class="col-sm-6" style="padding-left:120px; padding-right:20px;">
          <div class="card">
            <div class="card-body">
              <p class="card-text display-5">ชื่อ-นามสกุล : {{$x->NAME_TH}}</p>
              <p class="card-text display-5">หลักสูตร :	{{$x->COURSE_NAME_TH}}</p>
            <p class="card-text display-5">คณะ : {{ $x->FACULTY_NAME_TH }}</p>
              <p class="card-text display-5">ปีสำเร็จการศึกษา (พ.ศ.): {{ $x->ACAD_YEAR }}</p>
              <p class="card-text display-5">วันที่สำเร็จการศึกษา (พ.ศ.): {{ $x->GRADUATE_DATE }}</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6" style="padding-left:20px; padding-right:120px;">
          <div class="card">
            <div class="card-body">
              <p class="card-text display-5">Fullname :	{{$x->NAME_EN}}</p>
              <p class="card-text display-5">Curriculum : {{$x->COURSE_NAME_EN}}</p>
              <p class="card-text display-5">Facuty :  {{ $x->FACULTY_NAME_EN}}</p>
              <p class="card-text display-5">Year of Graduation (A.D.) : {{ $x->ACAD_YEAR }}</p>
              <p class="card-text display-5">Graduation date (A.D.) : {{ $x->GRADUATE_DATE }}</p>
            </div>
          </div>
        </div>
      </div>
      <br>
      @endforeach
      <div class="input-group-btn item-right" style="float: right ; padding-right : 120px">
        <a href="{{ route('HtmlToPDF') }}" class="btn btn-form btn-success display-5" type="submit" target ="_blank"><span class="glyphicon glyphicon-save"></span>ดาวน์โหลด</a>
      </div>
      <br><br><br><br><br>
    </div>
  </div>
</section>



