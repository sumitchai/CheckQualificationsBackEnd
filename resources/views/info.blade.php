@extends('layout.header')

@section('main')
<br><br><br><br>

<section class="section-table cid-rN9ViYOSs1" id="table1-2e">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-5">Verification Of Qualifications<br></h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
        <strong>Education Level : <!---ปริญญา----> </strong><br><br>
        <strong> <!-----ชื่อหลักสูตร------>
      </h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-6">Search:</label>
                  <input class="form-control-sh input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
              <th class="head-item mbr-fonts-style display-6">studen id </th>
              <th class="head-item mbr-fonts-style display-6">full name</th>
              <th class="head-item mbr-fonts-style display-6">Description</th>
              </tr>
            </thead>

            <tbody>
            <tr> 
              <td class="body-item mbr-fonts-style display-6"></td>
              <td class="body-item mbr-fonts-style display-6"></td>
              <td class="body-item mbr-fonts-style display-6"></td>
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


