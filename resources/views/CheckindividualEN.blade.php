@extends('layout.headerEN')

@section('mainEN')
<br><br><br><br><br>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript">
function hideshow1()
{
var s1= document.getElementById('RTID');
if( s1.options[s1.selectedIndex].value=="อื่นๆ")
{document.getElementById('RTIDANS').style.display = "block";}else{document.getElementById('RTIDANS').style.display = "none";}
}


function hideshow2()
{
var s1= document.getElementById('OGID');
if( s1.options[s1.selectedIndex].value=="อื่นๆ")
{document.getElementById('OGIDANS').style.display = "block";}else{document.getElementById('OGIDANS').style.display = "none";}
}




</script>



<section>
    <input type="hidden" name="email" data-form-email="true" value="Nqufa8UczwmfDW6m4yWU8BqgRYVDV+1j7x1IHzMQdCfMftPYZq3BjtuxEKBb5komQLGpLk7E5inGB9TszlbPVxOAuBwCYWRaaUgWVpSTBfe7+4USDydIs5rbMWiydd37">

        @csrf
        <div class="container-full-width">
            <br><br>

            <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style ">Individual Qualification Examination</h2>
            
            <div class="container">
                <nav class="navbar  fbg-light">
                    <ul class="nav nav-pills" role="tablist" >
                        <li class="nav-item nav-pills active">
                            <a class="nav-link btn-outline-secondary active display-5" data-toggle="tab" href="#SSN">Citizen Id</a>
                        </li>
                        <div ></div>
                        <li class="nav-item nav-pills">
                            <a class="nav-link btn-outline-secondary display-5" data-toggle="tab" href="#name">Full name </a>
                        </li>
                        <div></div>
                        <li class="nav-item nav-pills">
                            <a class="nav-link btn-outline-secondary display-5" data-toggle="tab" href="#studenID"  >Student ID number</a>
                        </li>
                    </ul>
                </nav><br>

                
                <!-- Tab panes -->
                <form action="/data" method="POST" class="mbr-form form-with-styler" id="form1" data-form-title="Mobirise Form">
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
                                    <input type="number" name="CITIZEN_ID" data-form-field="CITIZEN_ID" class="form-control display-7" id="CITIZEN_ID" placeholder="เลขบัตรประชาชน" maxlength="13"><p></p>
                                    
                                </div>
                            </div>
                        
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
                                    <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-5">ชื่อ-นามสกุล</label>
                                    <input type="Name" name="NAME_TH" data-form-field="NAME_TH"  class="form-control display-5" id="NAME_TH" placeholder="ระบุชื่อ">
                                </div>
                                
                            </div>
                        
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
                                    <input type="number" name="STUDENT_CODE" data-form-field="STUDENT_CODE"  class="form-control display-5" id="STUDENT_CODE" placeholder="ระบุรหัสนิสิต"><p></p>
                                    
                                </div>  
                            </div>
                        
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
                            <input type="text" name="companyname" data-form-field="companyname" required="required" class="form-control display-7" id="companyname" placeholder="ระบุชื่อหน่วยงาน">
                        </div>
                        <div class="col-sm-6  form-group" data-for="name">
                            <label for="name-form1-1f" class="form-control-label mbr-fonts-style display-5">ชื่อ-นามสกุลผู้ขอตรวจสอบ</label>
                            <input type="text" name="namecheck" data-form-field="namecheck" required="required" class="form-control display-7" id="namecheck" placeholder="ระบุชื่อ-นามสกุลผู้ขอตรวจสอบ">
                        </div>
                        <div class="form-group col-sm-6 display-5" >
                            <label>วัตถประสงค์ในการตรวจสอบ</label>   
                            <select name="Objective" id="RTID" class="form-control  select2 select2-hidden-accessible"  onChange="hideshow1()">
                                <option class="display-5" value="">เลือกประเภทหน่วยงาน</option>
                                <option class="display-5" value="เพื่อรับเข้าศึกษาต่อ" >เพื่อรับเข้าศึกษาต่อ</option>
                                <option class="display-5" value="เพื่อรับเข้าทำงาน">เพื่อรับเข้าทำงาน</option>
                                <option class="display-5" value="เพื่อปรับฐานเงินเดือนหรือโครงสร้างหน่วยงาน">เพื่อปรับฐานเงินเดือนหรือโครงสร้างหน่วยงาน</option>
                                <option class="display-5" value="เพื่อเป็นหลักฐานประกอบการอสิทธิ์ลดวันรับราชการกองประจำการ">เพื่อเป็นหลักฐานประกอบการอสิทธิ์ลดวันรับราชการกองประจำการ </option>
                                <option class="display-5" value="อื่นๆ">อื่นๆ</option>
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
                                <option class="display-5"  value="อื่นๆ">อื่นๆ</option>
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
                            <button type="submit" id="submit" class="btn btn-form btn-success display-5">ตรวจสอบ</button>
                            <button type="reset" class="btn btn-form btn-secondary display-5">คืนค่า</button>
                        <br><br><br>
                        </div>
                        
                        
                    </div>
                <!---Formbuilder Form--->
                </form>

                
            </div >

            
        </div>
    
</section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
        $("#submit").click(function () {
                
                $.ajax({
                    type: "POST",
                    data: $('#form1').serialize(),
                    url: "/data",
                    success: function (url) {
                      //alert(data);
                      window.location.assign('dataindividual');
                      $.ajax({
                            type: "POST",
                            data: $('#form1').serialize(),
                            url: "/save",
                            success: function (data) {
                            //alert(data);
                            window.location.assign('dataindividual');
                            

                            }

                        });

                    }

                });
            });
    });
</script>