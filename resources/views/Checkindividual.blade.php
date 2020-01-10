@extends('layout.header')

@section('main')
<br><br><br><br>

<section class="mbr-section form1 cid-rJyj8GnMBf" id="form1-17">
    <div class="container-full-width">

        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style ">ตรวจสอบคุณวุฒิรายบุคคล</h2>
        
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

                
                <div class="container">
                    <nav class="navbar  fbg-light">
                        <ul class="nav nav-pills" role="tablist" >
                            <li class="nav-item nav-pills active">
                                <a class="nav-link btn-outline-secondary active" data-toggle="tab" href="#SSN">เลขประจำตัวประชาชน </a>
                            </li>
                            <div ></div>
                            <li class="nav-item nav-pills">
                                <a class="nav-link btn-outline-secondary" data-toggle="tab" href="#name">ชื่อ-นามสกุล </a>
                            </li>
                            <div></div>
                            <li class="nav-item nav-pills">
                                <a class="nav-link btn-outline-secondary " data-toggle="tab" href="#studenID" >รหัสนิสิต</a>
                            </li>
                        </ul>
                    </nav><br>

                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- เลขประชาชน -->
                        <div role="tabpanel" class="tab-pane active" id="SSN">
                            <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="vordh/gURSSKD0ZGMhwpPXnXQfCdn1kgIzcb9RLMtD4POU/26VfzPT4ZQdfy3sekKAHsqN21f9gBkkSBDvFDpO0+riTtmt7266nKhPlmOobIncgB2HZdLa/FUfHNQgOt">
                                <div class="row">
                                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                    </div>
                                </div>
                                <div class="dragArea row">
                                    <div class="col-sm-6  form-group" data-for="name">
                                        <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-6">เลขประจำตัวประชาชน</label>
                                        <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-1e" placeholder="ระบุเลขประจำตัวประชาชน"><p></p>
                                        <div class="col-md-12 input-group-btn align-center">
                                            <button type="submit" class="btn btn-form btn-secondary display-4" href="Checkindividual">Reset

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- ชื่อ สุกล -->
                        <div role="tabpanel" class="tab-pane fade" id="name">
                            <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="vordh/gURSSKD0ZGMhwpPXnXQfCdn1kgIzcb9RLMtD4POU/26VfzPT4ZQdfy3sekKAHsqN21f9gBkkSBDvFDpO0+riTtmt7266nKhPlmOobIncgB2HZdLa/FUfHNQgOt">
                                <div class="row">
                                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                    </div>
                                </div>
                                <div class="dragArea row">
                                    <div class="col-sm-6  form-group" data-for="name">
                                        <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-4">ชื่อ</label>
                                        <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-1e" placeholder="ระบุชื่อ">
                                    </div>
                                    <div class="col-sm-6  form-group">
                                        <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-4">นามสกุล</label>
                                        <input type="text" name="surname" data-form-field="Surname" required="required" class="form-control display-4" id="surname-form1-1e" placeholder="ระบุนามสกุล">
                                    </div>
                                    <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-form btn-secondary display-4">Reset</button></div> 
                                </div>
                            </form>
                        </div>

                        <!-- รหัสนิสิต -->
                        <div role="tabpanel" class="tab-pane fade" id="studenID">
                            <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="vordh/gURSSKD0ZGMhwpPXnXQfCdn1kgIzcb9RLMtD4POU/26VfzPT4ZQdfy3sekKAHsqN21f9gBkkSBDvFDpO0+riTtmt7266nKhPlmOobIncgB2HZdLa/FUfHNQgOt">
                                <div class="row">
                                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                    </div>
                                </div>
                                <div class="dragArea row">
                                    <div class="col-sm-6  form-group" data-for="name">
                                        <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-4">รหัสนิสิต</label>
                                        <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-4" id="name-form1-1e" placeholder="ระบุรหัสนิสิต"><p></p>
                                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-form btn-secondary display-4" href="Checkindividual">Reset</button></div>
                                    </div>  
                                </div>
                            </form>
                        </div>

                    </div>
                
                

                <!---Formbuilder Form--->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="title col-12 col-lg-8">
                        </div>
                    </div>
                </div>

                <!---Formbuilder Form--->
                <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="Nqufa8UczwmfDW6m4yWU8BqgRYVDV+1j7x1IHzMQdCfMftPYZq3BjtuxEKBb5komQLGpLk7E5inGB9TszlbPVxOAuBwCYWRaaUgWVpSTBfe7+4USDydIs5rbMWiydd37">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row ">
                        <div class="col-sm-6  form-group" data-for="companyName">
                            <label for="name-form1-1f" class="form-control-label mbr-fonts-style display-4">ชื่อหน่วยงาน</label>
                            <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-4" id="name-form1-1f" placeholder="ระบุชื่อหน่วยงาน">
                        </div>
                        <div class="col-sm-6  form-group" data-for="name">
                            <label for="name-form1-1f" class="form-control-label mbr-fonts-style display-4">ชื่อ-สกุลผู้ขอตรวจสอบ</label>
                            <input type="text" name="companyName" data-form-field="Name" required="required" class="form-control display-4" id="name-form1-1f" placeholder="ระบุชื่อ-นามสกุลผู้ขอตรวจสอบ">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>วัตถุประสงค์ในการตรวจสอบ</label>   
                            <select name="RTID" id="RTID" class="form-control  select2-hidden-accessible" onchange="shownote()" required="" tabindex="-1" aria-hidden="true">
                                <option value="">เลือกวัตถุประสงค์</option>
                                <option value="01">เพื่อรับเข้าศึกษาต่อ</option>
                                <option value="02">เพื่อรับเข้าทำงาน</option>
                                <option value="03">เพื่อปรับฐานเงินเดือนหรือโครงสร้างหน่วยงาน</option>
                                <option value="04">เพื่อเป็นหลักฐานประกอบการอสิทธิ์ลดวันรับราชการกองประจำการ</option>
                                <option value="99">อื่นๆ</option>
                            </select>
                            
                        </div>
                        <div class="form-group col-sm-6">
                            <label>ประเภทหน่วยงาน</label>
                            <select id="OGID" name="OGID" class="form-control  select2 select2-hidden-accessible" required="" tabindex="-1" aria-hidden="true">
                                <option value="">เลือกประเภทหน่วยงาน</option>
                                <option value="01">หน่วยงานราชการ</option>
                                <option value="02">หน่วยงานรัฐวิสาหกิจ</option>
                                <option value="03">หน่วยงานเอกชน</option>
                                <option value="04">อื่นๆ</option>
                            </select>                        
                        </div>
                        <div class="form-group col-sm-6">
							<label>อีเมล์</label>
							<input id="email" name="email" class="form-control" placeholder="อีเมล์ exsample@email.com" type="email" required="">	
						</div>
                        <div class="form-group col-sm-6">
                            <label>โทรศัพท์</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="โทรศัพท์" required="">		
                        </div>
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-form btn-success display-4">Check</button>
                             <button type="submit" class="btn btn-form btn-secondary display-4">Reset</button>
                        </div>
                        
                         
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>





