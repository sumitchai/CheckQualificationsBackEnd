 

  <section class="menu cid-rL4N5C6fZy" once="menu" id="menu2-23">

    

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
                    <a href="index.html">
                        <img src="assets/images/up-122x122.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item dropdown">
                    <a class="nav-link link text-black dropdown-toggle display-5" href="https://mobirise.co" data-toggle="dropdown-submenu" aria-expanded="false">เมนู</a>
                    <div class="dropdown-menu">
                        <a class="text-black dropdown-item display-5" href="index.html">หน้าหลัก</a>
                        <a class="text-black dropdown-item display-5" href="CheckCourse.html">ตรวจสอบคุณวุฒิตามหลักสูตร</a>
                        <a class="text-black dropdown-item display-5" href="Checkindividual.html">ตรวจสอบคุณวุฒิรายบุคคล</a>
                        <a class="text-black dropdown-item display-5" href="studying.html">รายชื่อนิสิตชาวต่างชาติที่กำลังศึกษา</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link text-black dropdown-toggle display-5" href="index.html" data-toggle="dropdown-submenu" aria-expanded="true">ภาษา</a>
                    <div class="dropdown-menu">
                        <a class="text-black dropdown-item display-5" href="checkThailandlist.html">ภาษาไทย</a>
                        <a class="text-black dropdown-item display-5" href="checkThailandlistEng.html">English</a>
                    </div>
                </li>
            </ul>
            <div class="navbar-buttons mbr-section-btn">
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >ติดต่อเรา</a>
            </div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/l">free web templates</a></section><section class="section-table cid-rJtSmZmqbi" id="table1-v">

  <div class="container">
    <a type="button" class="btn btn-primary btn-sm" href="CheckThailand.html" >กลับ</a>
  </div>
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-5">
        ตรวจสอบคุณวุฒิตามหลักสูตร : นิสิตไทย<br>
      </h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
        <strong>ระดับการศึกษา : ปริญญาตรี</strong><br><br>
        <strong>หลักสูตร : หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาภูมิศาสตร์</strong>
      </h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                <th class="head-item mbr-fonts-style display-7">ลำดับที่</th>
                <th class="head-item mbr-fonts-style display-7">รหัสนิสิต</th>
                <th class="head-item mbr-fonts-style display-7">ชื่อ-นามสกุล</th>
                <th class="head-item mbr-fonts-style display-7">ปีที่สำเร็จการศึกษา</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($course as $val) 
            <tr>  
              <td class="body-item mbr-fonts-style display-7">1</td>
              <td class="body-item mbr-fonts-style display-7"></td>
              <td class="body-item mbr-fonts-style display-7">{{ $val->COURSE_NAME_TH }}</td>
              <td class="body-item mbr-fonts-style display-7" >2561</a></td>
            </tr>
            
            
          </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
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
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" style="height:550px;">
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title text-center" id="myModalLong">กองบริการการศึกษา : มหาวิทยาลัยพะเยา</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
          </div>
          <div class="modal-body text-center" style="font-size: 18px;">
              <b>งานทะเบียนนิสิตและประมวลผล</b><br>
              <a> 19 หมู่ 2 ตำบลแ่กา อำเภอเมือง จังหวัดพะเยา รหัสไปรษณีย์ 56000</a><br>
              <a>โทรศัพท์:  054466666 </a>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div><br/>
      </div>
  </div>
</div>
