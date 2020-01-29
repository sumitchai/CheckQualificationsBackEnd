@extends('layout.headerEN')

@section('mainEN')
<br><br><br><br>
<section class="section-table cid-rN9ViYOSs1" id="table1-2e">
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-5">Check the qualifications according to the course<br></h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
        <strong>Education level : 
          @if ($degree == 2)
          Bachelor degree
          @elseif($degree == 5) 
          Bachelor and Master degree
          @elseif($degree == 3) 
          Master degree
          @elseif($degree == 4) 
          Doctoral degree
          @elseif($degree == 6) 
          Certificate  Program 
          @else
          Choose a level
          @endif
        </strong><br>
        <div class="dropdown">
          <button class="btn btn-light  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Choose a level
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="Check_course_EN?degree=2">Bachelor degree</a>
            <a class="dropdown-item" href="Check_course_EN?degree=5">Bachelor and Master degree</a>
            <a class="dropdown-item" href="Check_course_EN?degree=3">Master degree</a>
            <a class="dropdown-item" href="Check_course_EN?degree=4">Doctoral degree</a>
            <a class="dropdown-item" href="Check_course_EN?degree=6">Certificate  Program </a>
          </div>
        </div>
      </h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-6">search: </label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                <th class="head-item mbr-fonts-style display-6">No</th>
                <th class="head-item mbr-fonts-style display-6">COURSE</th>
                <th class="head-item mbr-fonts-style display-6">Total students</th>
                <th class="head-item mbr-fonts-style display-6">View</th>
              </tr>
            </thead>
            
            <tbody>
              <?php $i = 1; ?>
              @foreach ($course as $x) 
            <tr> 
              <td class="body-item mbr-fonts-style display-6">{{$i++}}</td>
              <td class="body-item mbr-fonts-style display-6">{{$x->COURSE_NAME_EN}}</td>
              <td class="body-item mbr-fonts-style display-6">{{$x->count}}</td>
              <td class="body-item mbr-fonts-style display-6">
                <a href="/SelectEN/{{$x->COURSE_NAME_EN}}" class="badge badge-dark"> View</a>
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
                <span class="infoBefore">Total</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">COURSE</span>
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


