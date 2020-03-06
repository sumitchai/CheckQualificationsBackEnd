<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.6, mobirise.com">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{env('APP_URL')}}/assets/images/up-536x536.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Qualification | University Of Phayao</title>
    <!-----fonts--->
    <link href="https://fonts.googleapis.com/css?family=K2D&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/web/{{env('APP_URL')}}/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/tether/tether.min.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/assets/theme/css/style.css">
  <link rel="preload" as="style" href="{{env('APP_URL')}}/assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="{{env('APP_URL')}}/assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
</head>
<body>
<section class="menu cid-rN35OUwakP" once="menu" id="menu2-26">
 
    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="/indexEN">
                        <img src="{{env('APP_URL')}}/assets/images/1200px-UPLogo11.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item dropdown">
                    <a class="nav-link link text-black dropdown-toggle display-4" href="https://mobirise.co" data-toggle="dropdown-submenu" aria-expanded="true">Menu</a>
              <div class="dropdown-menu">
                <a class="text-black dropdown-item display-4" href="/indexEN">Home</a>
                <a class="text-black dropdown-item display-4" href="/Check_course_EN">Check The Course Qualifications</a>
                <a class="text-black dropdown-item display-4" href="/CheckindividualEN">Individual Qualification Examination</a>
                
              </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link link text-black display-4" href="/Check_course" aria-expanded="false">Thai</a>
              </li>
              <li class="nav-item">
                <a class="text display-4">|</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link text-black display-4" href="/Check_course_EN" aria-expanded="false">English</a>
              </li></ul>
            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-success display-4"  data-toggle="modal" data-target="#myModal">
                <span class="display-2 mobi-mbri mobi-mbri-phone mbr-iconfont mbr-iconfont-btn"></span>
                    <font face="MobiriseIcons">
                        <span class="display-3">Contact us</span>
                    </font>
                &nbsp;
              </a>
            </div>
        </div>
    </nav>
    <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" style="height:550px;">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="myModalLong">Enroll university of phayao</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <div class="display-4 modal-body text-center" style="font-size: 18px;">
                <b>Student registration and processing</b><br>
                <br>
                <a>Address 19 No. 2  Area: city Sub-area: meaka <br> Province: phayao post: 56000</a><br>
                <a>Phone:  054466666  </a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div><br/>
        </div>
    </div>
</div>

</section>
<section class="section-table cid-rN9ViYOSs1" id="table1-2e">
  <div class="container-table" style="padding:5%">
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
                  <input class="form-control-sh input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

<<<<<<< HEAD
        <div class="container scroll">
          <table id="dtMaterialDesignExample" class="table striped bordered" cellspacing="0">
            <thead class="head-item mbr-fonts-style display-6">
=======
        <div >
          <table id="example" class="table striped bordered" cellspacing="0">
            <thead>
>>>>>>> 8b5b36628d8be7eb8b8acbb513afd609b1893d9b
              <tr class="table-heads ">
                
              </tr>
            </thead>
            
            <tbody>
              <?php $i = 1; ?>
              @foreach ($course as $x) 
                <tr> 
                  <td class="body-item mbr-fonts-style display-6" >{{$i++}}</td>
                  <td class="body-item mbr-fonts-style display-6" >{{$x->COURSE_NAME_EN}}</td>
                  <td class="body-item mbr-fonts-style display-6" width="180px" align="center">{{$x->count}}</td>
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
    <!-- Footer --
<footer class="page-footer font-small blue">
  Copyright --
  <div class="display-4 bg-dark text-white-50 page-footer text-center ">
      <br>
      <br>
      มหาวิทยาลัยพะเยา, ระบบตรวจสอบคุณวุฒิ<br>
      Copyright 2019 © University of Phayao Page
      <br>
      <br>
      <div>
          <a href="home" class="display-4 float-right">แก้ไขเว็บไซต์ </a><br>
      </div>
  </div>
  Copyright --
</footer>
 Footer -->
</section>



       


  <script src="{{env('APP_URL')}}/assets/web/{{env('APP_URL')}}/assets/jquery/jquery.min.js"></script>
  <script src="{{env('APP_URL')}}/assets/popper/popper.min.js"></script>
  <script src="{{env('APP_URL')}}/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{env('APP_URL')}}/assets/dropdown/js/nav-dropdown.js"></script>
  <script src="{{env('APP_URL')}}/assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="{{env('APP_URL')}}/assets/smoothscroll/smooth-scroll.js"></script>
  <script src="{{env('APP_URL')}}/assets/tether/tether.min.js"></script>
  <script src="{{env('APP_URL')}}/assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="{{env('APP_URL')}}/assets/parallax/jarallax.min.js"></script>
  <script src="{{env('APP_URL')}}/assets/datatables/jquery.data-tables.min.js"></script>
  <script src="{{env('APP_URL')}}/assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="{{env('APP_URL')}}/assets/theme/js/script.js"></script>
  <script src="{{env('APP_URL')}}/assets/formoid/formoid.min.js"></script>
  
  <script>
    $(window).load(function(){
      $('#cover').fadeOut(1000);
      
  });
    </script>
    <script>
      function goBack() {
        window.history.back();
      }
      </script>
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    
    <script>
      $(document).ready(function () {
        
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
        const $this = $(this);
        $this.attr("placeholder", "Search");
        $this.removeClass('form-control-sm');
      });
      $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
        $(this).parent().append($(this).children());
      });
      $('#dtMaterialDesignExample').DataTable({
        columns: [
                
                { title: "No" },
                { title: "COURSE" },
                { title: "Total students" },
                { title: "View" }
            ]
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

</body>
</html> 
