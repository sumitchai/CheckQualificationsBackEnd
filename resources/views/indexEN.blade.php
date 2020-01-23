@extends('layout.headerEN')

@section('mainEN')
<br><br><br><br>
<section>
<div class="grid-container">
    <div class="item1">
        <img src="assets/images/home.png" class="responsive">
    </div>

    <div class="item2 center">
        <div >
            <div class="container-full-width clearfix">
                <div class="column-content">
                    <div class="text">
                        <h1 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-1">Verification Of Qualifications</h1>
                        <h1 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-1">University Of Phayao</h1>
                     
                        <div class="mbr-section-btn">
                            <a class="btn btn-md btn-bgr btn-primary display-4" href="/Check_course_EN">Check The Course Qualifications</a> 
                            <a class="btn btn-md btn-bgr btn-primary display-4" href="/CheckindividualEN">Individual Qualification Examination</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

</section>

<style>
    .grid-container {
      display: grid;
      grid-gap: 0px;
      background-color: #ffffff;
      padding: 0px;
    }
    

    .responsive {
      width: 90%;
      height: auto;
    }
    
    .item1 {
        grid-column: 1 ;
        grid-row: 1;
    }

    .item2 {
        grid-column: 2  ;
        grid-row: 1 ;
        text-align: center;
    }

    .center {
    padding: 20px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    
    </style>