@extends('layout.header')

@section('main')
<br><br><br><br><br>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript">
function hideshow1()
{
var s1= document.getElementById('RTID');
if( s1.options[s1.selectedIndex].value=="99")
{document.getElementById('RTIDANS').style.display = "block";}else{document.getElementById('RTIDANS').style.display = "none";}
}


function hideshow2()
{
var s1= document.getElementById('OGID');
if( s1.options[s1.selectedIndex].value=="99")
{document.getElementById('OGIDANS').style.display = "block";}else{document.getElementById('OGIDANS').style.display = "none";}
}




</script>

<section>
    <form action="/dataindividual" method="get" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="Nqufa8UczwmfDW6m4yWU8BqgRYVDV+1j7x1IHzMQdCfMftPYZq3BjtuxEKBb5komQLGpLk7E5inGB9TszlbPVxOAuBwCYWRaaUgWVpSTBfe7+4USDydIs5rbMWiydd37">

        @csrf
        <div class="container-full-width">
            <br><br>

            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style ">ตรวจสอบคุณวุฒิรายบุคคล</h2>
            
            <div class="container">
                <nav class="navbar  fbg-light">
                    <ul class="nav nav-pills" role="tablist" >
                        <li class="nav-item nav-pills active">
                            <a class="nav-link btn-outline-secondary active display-5" data-toggle="tab" href="#SSN">เลขบัตรประชาชน</a>
                        </li>
                        <div ></div>
                        <li class="nav-item nav-pills">
                            <a class="nav-link btn-outline-secondary display-5" data-toggle="tab" href="#name">ชื่อ-นามสกุล </a>
                        </li>
                        <div></div>
                        <li class="nav-item nav-pills">
                            <a class="nav-link btn-outline-secondary display-5" data-toggle="tab" href="#studenID"  >รหัสนิสิต</a>
                        </li>
                    </ul>
                </nav><br>

                
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- เลขประชาชน -->
                    <div role="tabpanel" class="tab-pane active" id="SSN" >
                            
                            <div class="row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12 display-5">กรอกแบบฟรอมเรียบร้อยแล้ว</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                </div>
                            </div>
                            <div class="dragArea row">
                                <div class="col-sm-6  form-group" data-for="name" >
                                    <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-5">เลขบัตรประชาชน</label>
                                    <input type="search" name="ID_SSN" data-form-field="Name" class="form-control display-7" id="name-form1-1e" placeholder="เลขบัตรประชาชน"><p></p>
                                    <div class="col-md-12 input-group-btn align-center">
                                        <button type="reset" class="btn btn-form btn-secondary display-5" href="Checkindividual">คืนค่า

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- ชื่อ สุกล -->
                    <div role="tabpanel" class="tab-pane fade" id="name">
                            
                            <div class="row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12 display-5">กรอกแบบฟรอมเรียบร้อยแล้ว</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                </div>
                            </div>
                            <div class="dragArea row">
                                <div class="col-sm-6  form-group" data-for="name">
                                    <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-5">ชื่อ</label>
                                    <input type="search" name="NAME" data-form-field="Name"  class="form-control display-5" id="name-form1-1e" placeholder="ระบุชื่อ">
                                </div>
                                <div class="col-sm-6  form-group">
                                    <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-5">นามสกุล</label>
                                    <input type="search" name="SUR_NAME" data-form-field="Surname"  class="form-control display-5" id="surname-form1-1e" placeholder="ระบุนามสกุล">
                                </div>
                                <div class="col-md-12 input-group-btn align-center">
                                    <button type="reset" class="btn btn-form btn-secondary display-5">คืนค่า</button>
                                </div> 
                            </div>
                        </form>
                    </div>

                    <!-- รหัสนิสิต -->
                    <div role="tabpanel" class="tab-pane fade" id="studenID">
                            
                            <div class="row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12 display-5">คืนค่า</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                </div>
                            </div>
                            <div class="dragArea row">
                                <div class="col-sm-6  form-group" data-for="name">
                                    <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-5">รหัสนิสิต</label>
                                    <input type="search" name="ID_STUDENT" data-form-field="Name"  class="form-control display-5" id="name-form1-1e" placeholder="ระบุรหัสนิสิต"><p></p>
                                    <div class="col-md-12 input-group-btn align-center">
                                        <button type="reset" class="btn btn-form btn-secondary display-5" href="Checkindividual">คืนค่า</button>
                                    </div>
                                </div>  
                            </div>
                        </form>
                    </div>

                </div>

                <!---Formbuilder Form--->
                    
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12 display-5">กรอกแบบฟรอมเรียบร้อยแล้ว</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row ">
                        <div class="col-sm-6  form-group" data-for="companyName">
                            <label for="name-form1-1f" class="form-control-label mbr-fonts-style display-5">ชื่อหน่วยงาน</label>
                            <input type="text" name="companyname" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-1f" placeholder="ระบุชื่อหน่วยงาน">
                        </div>
                        <div class="col-sm-6  form-group" data-for="name">
                            <label for="name-form1-1f" class="form-control-label mbr-fonts-style display-5">ชื่อ-นามสกุลผู้ขอตรวจสอบ</label>
                            <input type="text" name="namecheck" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-1f" placeholder="ระบุชื่อ-นามสกุลผู้ขอตรวจสอบ">
                        </div>
                        <div class="form-group col-sm-6 display-5" >
                            <label>วัตถประสงค์ในการตรวจสอบ</label>   
                            <select name="Objective" id="RTID" class="form-control  select2 select2-hidden-accessible"  onChange="hideshow1()">
                                <option class="display-5" value="">เลือกประเภทหน่วยงาน</option>
                                <option class="display-5" value="เพื่อรับเข้าศึกษาต่อ" >เพื่อรับเข้าศึกษาต่อ</option>
                                <option class="display-5" value="เพื่อรับเข้าทำงาน">เพื่อรับเข้าทำงาน</option>
                                <option class="display-5" value="เพื่อปรับฐานเงินเดือนหรือโครงสร้างหน่วยงาน">เพื่อปรับฐานเงินเดือนหรือโครงสร้างหน่วยงาน</option>
                                <option class="display-5" value="เพื่อเป็นหลักฐานประกอบการอสิทธิ์ลดวันรับราชการกองประจำการ">เพื่อเป็นหลักฐานประกอบการอสิทธิ์ลดวันรับราชการกองประจำการ </option>
                                <option class="display-5" value="99">อื่นๆ</option>
                            </select>
                            <div  id="RTIDANS" style="display:none;">ระบุอื่นๆ
                                <input class="form-control display-7" name="Objective_1" id="RTIDANS" type="text"  placeholder="กรุณาระบุอื่นๆ"/>
                            </div>
                        </div>
                        <div class="form-group col-sm-6 display-5" >
                            <label>ประเภทหน่วยงาน</label>
                            <select id="OGID" name="department" class="form-control  select2 select2-hidden-accessible" onChange="hideshow2()">
                                <option class="display-5"  value="">เลือกประเภทหน่วยงาน</option>
                                <option class="display-5"  value="หน่วยงานราชการ">หน่วยงานราชการ</option>
                                <option class="display-5"  value="หน่วยงานรัฐวิสาหกิจ">หน่วยงานรัฐวิสาหกิจ</option>
                                <option class="display-5"  value="หน่วยงานเอกชน">หน่วยงานเอกชน</option>
                                <option class="display-5"  value="99">อื่นๆ</option>
                            </select>  
                            
                            <div  id="OGIDANS" style="display:none;">ระบุอื่นๆ
                                <input class="form-control display-7" name="department_1" id="OGIDANS" type="text"  placeholder="กรุณาระบุอื่นๆ"/>
                            </div>
                        </div>
                        <div class="form-group col-sm-6 display-5">
                            <label>อีเมล์</label>
                            <input id="email" name="e_mail" class="form-control" placeholder="exsample@email.com" type="email" required="">	
                        </div>

                        <div class="form-group col-sm-6 display-5">
                            <label>หมายเลขโทรศัพท์</label>
                            <input type="text" id="phone" name="phone_number" class="form-control" placeholder="ระบุหมายเลขโทรศัพท์" required="">	
                            <br>
                        </div>
                        
                        <div class="col-md-12 input-group-btn align-center ">
                            <button type="submit" class="btn btn-form btn-success display-5">ตรวจสอบ</button>
                            <button type="reset" class="btn btn-form btn-secondary display-5">คืนค่า</button>
                        <br><br><br>
                        </div>
                        
                        
                    </div>
                <!---Formbuilder Form--->
            </div >

            
        </div>
    </form>
</section>





