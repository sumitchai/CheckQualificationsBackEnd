@extends('layout.header')

@section('main')
<br><br><br><br>
<section>
<div class="grid-container">
    <div class="item1">
        <img src="assets/images/home.png" class="responsive">
    </div>

    <div class="item2">
        <div class="grid-item">
            <div class="container-full-width clearfix">
                <div class="column-content">
                    <div class="text-content">
                        <br><br>
                        <h1 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-1">ตรวจสอบคุณวุฒิ<br>มหาวิทยาลัยพะเยา</h1><br>
                     
                        <div class="mbr-section-btn">
                            <a class="btn btn-md btn-bgr btn-primary display-4" href="/SelectTH">ตรวจสอบคุณวุฒิตามหลักสูตร</a> 
                            <a class="btn btn-md btn-bgr btn-primary display-4" href="/Checkindividual">ตรวจสอบคุณวุฒิรายบุคคล</a>
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
    
    .grid-item {
      text-align: center;
      padding: 20px;
      font-size: 30px;
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
    }
    
    </style>