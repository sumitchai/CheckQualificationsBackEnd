@extends('layout.headerEN')

@section('mainEN')
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
    <div class="container-full-width">
        <br><br>

        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style ">Individual Qualification Examination</h2>
        
        <div class="container">
            <nav class="navbar  fbg-light">
                <ul class="nav nav-pills" role="tablist" >
                    <li class="nav-item nav-pills active">
                        <a class="nav-link btn-outline-secondary active display-5" data-toggle="tab" href="#SSN">Citizen ID</a>
                    </li>
                    <div ></div>
                    <li class="nav-item nav-pills">
                        <a class="nav-link btn-outline-secondary display-5" data-toggle="tab" href="#name">Full name</a>
                    </li>
                    <div></div>
                    <li class="nav-item nav-pills">
                        <a class="nav-link btn-outline-secondary display-5" data-toggle="tab" href="#studenID">Student ID number</a>
                    </li>
                </ul>
            </nav><br>

            
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- เลขประชาชน -->
                <div role="tabpanel" class="tab-pane active" id="SSN">
                    <form action="/CheckindividualEN" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="vordh/gURSSKD0ZGMhwpPXnXQfCdn1kgIzcb9RLMtD4POU/26VfzPT4ZQdfy3sekKAHsqN21f9gBkkSBDvFDpO0+riTtmt7266nKhPlmOobIncgB2HZdLa/FUfHNQgOt">
                        @csrf
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12 display-5">Thanks for filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-sm-6  form-group" data-for="name">
                                <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-5">Citizen Id</label>
                                <input type="text" name="ID_SSN" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-1e" placeholder="Specify Citizen ID"><p></p>
                                <div class="col-md-12 input-group-btn align-center">
                                    <button type="reset" class="btn btn-form btn-secondary display-5" href="Checkindividual">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- ชื่อ สุกล -->
                <div role="tabpanel" class="tab-pane fade" id="name">
                    <form action="/CheckindividualEN" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="vordh/gURSSKD0ZGMhwpPXnXQfCdn1kgIzcb9RLMtD4POU/26VfzPT4ZQdfy3sekKAHsqN21f9gBkkSBDvFDpO0+riTtmt7266nKhPlmOobIncgB2HZdLa/FUfHNQgOt">
                        @csrf
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12 display-5">Thanks for filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-sm-6  form-group" data-for="name">
                                <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-5">Name</label>
                                <input type="text" name="NAME" data-form-field="Name" required="required" class="form-control display-5" id="name-form1-1e" placeholder="Specify Name">
                            </div>
                            <div class="col-sm-6  form-group">
                                <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-5">Last Name</label>
                                <input type="text" name="SUR_NAME" data-form-field="Surname" required="required" class="form-control display-5" id="surname-form1-1e" placeholder="Specify Last Name">
                            </div>
                            <div class="col-md-12 input-group-btn align-center">
                                <button type="reset" class="btn btn-form btn-secondary display-5">Reset</button>
                            </div> 
                        </div>
                    </form>
                </div>

                <!-- รหัสนิสิต -->
                <div role="tabpanel" class="tab-pane fade" id="studenID">
                    <form action="/CheckindividualEN" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="vordh/gURSSKD0ZGMhwpPXnXQfCdn1kgIzcb9RLMtD4POU/26VfzPT4ZQdfy3sekKAHsqN21f9gBkkSBDvFDpO0+riTtmt7266nKhPlmOobIncgB2HZdLa/FUfHNQgOt">
                        @csrf
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12 display-5">Thanks for filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-sm-6  form-group" data-for="name">
                                <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-5">Student ID number</label>
                                <input type="text" name="ID_STUDENT" data-form-field="Name" required="required" class="form-control display-5" id="name-form1-1e" placeholder="Specify Student ID number"><p></p>
                                <div class="col-md-12 input-group-btn align-center">
                                    <button type="reset" class="btn btn-form btn-secondary display-5" href="Checkindividual">Reset</button>
                                </div>
                            </div>  
                        </div>
                    </form>
                </div>

            </div>

            <!---Formbuilder Form--->
            <form action="/CheckindividualEN" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="Nqufa8UczwmfDW6m4yWU8BqgRYVDV+1j7x1IHzMQdCfMftPYZq3BjtuxEKBb5komQLGpLk7E5inGB9TszlbPVxOAuBwCYWRaaUgWVpSTBfe7+4USDydIs5rbMWiydd37">
                @csrf
                <div class="row">
                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12 display-5">Thanks for filling out the form!</div>
                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                    </div>
                </div>
                <div class="dragArea row ">
                    <div class="col-sm-6  form-group" data-for="companyName">
                        <label for="name-form1-1f" class="form-control-label mbr-fonts-style display-5">Name of Department</label>
                        <input type="text" name="companyname" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-1f" placeholder="Specify Name of Department">
                    </div>
                    <div class="col-sm-6  form-group" data-for="name">
                        <label for="name-form1-1f" class="form-control-label mbr-fonts-style display-5">Name of Applicant</label>
                        <input type="text" name="namecheck" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-1f" placeholder="Specify Name of Applicant">
                    </div>
                    <div class="form-group col-sm-6 display-5" >
                        <label>Purpose of inspection</label>   
                        <select name="Objective" id="RTID" class="form-control  select2 select2-hidden-accessible"  onChange="hideshow1()">
                            <option class="display-5" value="">Select audit purpose</option>
                            <option class="display-5" value="1">Education</option>
                            <option class="display-5" value="2">Work</option>
                            <option class="display-5" value="3">Salary adjustment or Organizational structure adjustment</option>
                            <option class="display-5" value="4">Military service</option>
                            <option class="display-5" value="99">Other</option>
                        </select>
                        <div  id="RTIDANS" style="display:none;">Specify Other
                            <input class="form-control display-7" name="Objective" id="RTIDANS" type="text"  placeholder="Specify Other Please"/>
                        </div>
                    </div>
                    <div class="form-group col-sm-6 display-5" >
                        <label>Type of Agency</label>
                        <select id="OGID" name="department" class="form-control  select2 select2-hidden-accessible" onChange="hideshow2()">
                            <option class="display-5"  value="">Select Type of Agency</option>
                            <option class="display-5"  value="01">Government agencies</option>
                            <option class="display-5"  value="02">State Enterprise Agency</option>
                            <option class="display-5"  value="03">Private sector</option>
                            <option class="display-5"  value="99">Other</option>
                        </select>  
                        
                        <div  id="OGIDANS" style="display:none;">Specify Other
                            <input class="form-control display-7" name="department" id="OGIDANS" type="text"  placeholder="Specify Other Please"/>
                        </div>
                    </div>
                    <div class="form-group col-sm-6 display-5">
                        <label>Email</label>
                        <input id="email" name="e_mail" class="form-control" placeholder="exsample@email.com" type="email" required="">	
                    </div>

                    <div class="form-group col-sm-6 display-5">
                        <label>Telephone</label>
                        <input type="text" id="phone" name="phone_number" class="form-control" placeholder="Specify Telephone" required="">	
                        <br>
                    </div>
                    
                    <div class="col-md-12 input-group-btn align-center ">
                        <button type="submit" class="btn btn-form btn-success display-5">Check</button>
                        <button type="reset" class="btn btn-form btn-secondary display-5">Reset</button>
                    <br><br><br>
                    </div>
                    
                     
                </div>
            </form><!---Formbuilder Form--->
        </div class="card">

        
    </div>
</section>





