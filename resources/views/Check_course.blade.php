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
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-5">{{__('text.checkcoure')}}<br></h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
        <strong>{{__('text.de')}} : </strong><br>
        <div class="dropdown">
          <button class="btn btn-light  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{__('text.degree')}}
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="Check_course?degree=2">{{__('text.bachelor')}}</a>
            <a class="dropdown-item" href="Check_course?degree=5">{{__('text.dual')}}</a>
            <a class="dropdown-item" href="Check_course?degree=3">{{__('text.masters')}}</a>
            <a class="dropdown-item" href="Check_course?degree=4">{{__('text.doctor')}}</a>
            <a class="dropdown-item" href="Check_course?degree=6">{{__('text.certificate')}}</a>
          </div>
        </div>
      </h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-6">{{__('text.search')}}:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                <th class="head-item mbr-fonts-style display-6">{{__('text.number')}}</th>
                <th class="head-item mbr-fonts-style display-6">{{__('text.course')}}</th>
                <th class="head-item mbr-fonts-style display-6">{{__('text.total')}}</th>
                <th class="head-item mbr-fonts-style display-6">{{__('text.info')}}</th>
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
                <a href="#" class="badge badge-dark"> {{__('text.info2')}}</a>
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
                <span class="infoBefore">{{__('text.sh')}}</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">{{__('text.sh2')}}</span>
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


