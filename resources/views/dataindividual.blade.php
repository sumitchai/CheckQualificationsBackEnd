@extends('layout.header')

@section('main')
<br><br><br><br>

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
              <p class="card-text display-5">ชื่อ-นามสกุล : นางสาวอุรวี มาหล้า</p>
              <p class="card-text display-5">หลักสูตร :	หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์</p>
              <p class="card-text display-5">คณะ : คณะวิทยาศาสตร์</p>
              <p class="card-text display-5">ปีสำเร็จการศึกษา (พ.ศ.): 2561</p>
              <p class="card-text display-5">วันที่สำเร็จการศึกษา (พ.ศ.): 09 เม.ย. 2562</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6" style="padding-left:20px; padding-right:120px;">
          <div class="card">
            <div class="card-body">
              <p class="card-text display-5">Fullname :	Miss AURAVEE MALA</p>
              <p class="card-text display-5">Curriculum : Bachelor of Science Program in Computer Science</p>
              <p class="card-text display-5">Facuty : Faculty of Science</p>
              <p class="card-text display-5">Year of Graduation (A.D.) : 2018</p>
              <p class="card-text display-5">Graduation date (A.D.) : 09 APR 2019</p>
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



