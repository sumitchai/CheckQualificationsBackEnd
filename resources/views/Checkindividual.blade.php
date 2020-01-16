@extends('layout.header')

@section('main')
<br><br><br><br><br>
<?php
if(Session::has('locale'))
{
$locale = Session::get('locale');
App::setLocale($locale);
}else{
App::setLocale('en');
$locale = 'en';
}
?>
<section>
    <div class="container-full-width">
        <br><br><br>

        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style ">{{__('text.personal')}}</h2>
        
        <div class="container">
            <nav class="navbar  fbg-light">
                <ul class="nav nav-pills" role="tablist" >
                    <li class="nav-item nav-pills active">
                        <a class="nav-link btn-outline-secondary active display-5" data-toggle="tab" href="#SSN">{{__('text.idcard')}} </a>
                    </li>
                    <div ></div>
                    <li class="nav-item nav-pills">
                        <a class="nav-link btn-outline-secondary display-5" data-toggle="tab" href="#name">{{__('text.name')}} </a>
                    </li>
                    <div></div>
                    <li class="nav-item nav-pills">
                        <a class="nav-link btn-outline-secondary display-5" data-toggle="tab" href="#studenID"  >{{__('text.code')}}</a>
                    </li>
                </ul>
            </nav><br>

            
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- เลขประชาชน -->
                <div role="tabpanel" class="tab-pane active" id="SSN">
                    <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="vordh/gURSSKD0ZGMhwpPXnXQfCdn1kgIzcb9RLMtD4POU/26VfzPT4ZQdfy3sekKAHsqN21f9gBkkSBDvFDpO0+riTtmt7266nKhPlmOobIncgB2HZdLa/FUfHNQgOt">
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12 display-5">{{__('text.ty')}}</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-sm-6  form-group" data-for="name">
                                <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-5">{{__('text.idcard')}}</label>
                                <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-1e" placeholder={{__('text.idcard')}}><p></p>
                                <div class="col-md-12 input-group-btn align-center">
                                    <button type="submit" class="btn btn-form btn-secondary display-5" href="Checkindividual">{{__('text.btn02')}}

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
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12 display-5">{{__('text.ty')}}</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-sm-6  form-group" data-for="name">
                                <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-5">{{__('text.name')}}</label>
                                <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-5" id="name-form1-1e" placeholder={{__('text.nname')}}>
                            </div>
                            <div class="col-sm-6  form-group">
                                <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-5">{{__('text.lname')}}</label>
                                <input type="text" name="surname" data-form-field="Surname" required="required" class="form-control display-5" id="surname-form1-1e" placeholder={{__('text.lname')}}>
                            </div>
                            <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-form btn-secondary display-5">{{__('text.btn02')}}</button></div> 
                        </div>
                    </form>
                </div>

                <!-- รหัสนิสิต -->
                <div role="tabpanel" class="tab-pane fade" id="studenID">
                    <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="vordh/gURSSKD0ZGMhwpPXnXQfCdn1kgIzcb9RLMtD4POU/26VfzPT4ZQdfy3sekKAHsqN21f9gBkkSBDvFDpO0+riTtmt7266nKhPlmOobIncgB2HZdLa/FUfHNQgOt">
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12 display-5">{{__('text.btn02')}}</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-sm-6  form-group" data-for="name">
                                <label for="name-form1-1e" class="form-control-label mbr-fonts-style display-5">{{__('text.code')}}</label>
                                <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-5" id="name-form1-1e" placeholder="ระบุรหัสนิสิต"><p></p>
                                <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-form btn-secondary display-5" href="Checkindividual">Reset</button></div>
                            </div>  
                        </div>
                    </form>
                </div>

            </div>

            <!---Formbuilder Form--->
            <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="Nqufa8UczwmfDW6m4yWU8BqgRYVDV+1j7x1IHzMQdCfMftPYZq3BjtuxEKBb5komQLGpLk7E5inGB9TszlbPVxOAuBwCYWRaaUgWVpSTBfe7+4USDydIs5rbMWiydd37">
                <div class="row">
                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12 display-5">{{__('text.ty')}}</div>
                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                    </div>
                </div>
                <div class="dragArea row ">
                    <div class="col-sm-6  form-group" data-for="companyName">
                        <label for="name-form1-1f" class="form-control-label mbr-fonts-style display-5">{{__('text.namecompa')}}</label>
                        <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-1f" placeholder={{__('text.namecompa')}}>
                    </div>
                    <div class="col-sm-6  form-group" data-for="name">
                        <label for="name-form1-1f" class="form-control-label mbr-fonts-style display-5">{{__('text.nameinfo')}}</label>
                        <input type="text" name="companyName" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-1f" placeholder={{__('text.nameinfo')}}>
                    </div>
                    <div class="form-group col-sm-6 display-5">
                        <label>{{__('text.obinfo')}}</label>   
                        <select name="RTID" id="RTID" class="form-control  select2-hidden-accessible" onchange="shownote()" required="" tabindex="-1" aria-hidden="true">
                            <option class="display-5" value="">{{__('text.ch')}}</option>
                            <option class="display-5" value="01">{{__('text.obstudy')}}</option>
                            <option class="display-5" value="02">{{__('text.objob')}}</option>
                            <option class="display-5" value="03">{{__('text.obsalary')}}</option>
                            <option class="display-5" value="04">{{__('text.obevidence')}}</option>
                            <option class="display-5" value="99">{{__('text.another')}}</option>
                        </select>
                        
                    </div>
                    <div class="form-group col-sm-6 display-5">
                        <label>{{__('text.department')}}</label>
                        <select id="OGID" name="OGID" class="form-control  select2 select2-hidden-accessible" required="" tabindex="-1" aria-hidden="true">
                            <option class="display-5"  value="">{{__('text.dd')}}</option>
                            <option class="display-5"  value="01">{{__('text.governmentofficial')}}</option>
                            <option class="display-5"  value="02">{{__('text.stateowned')}}</option>
                            <option class="display-5"  value="03">{{__('text.privatecompany')}}</option>
                            <option class="display-5"  value="04">{{__('text.another')}}</option>
                        </select>                        
                    </div>
                    <div class="form-group col-sm-6 display-5">
                        <label>{{__('text.mail')}}</label>
                        <input id="email" name="email" class="form-control" placeholder="exsample@email.com" type="email" required="">	
                    </div>

                    <div class="form-group col-sm-6 display-5">
                        <label>{{__('text.phonenumber')}}</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="{{__('text.phonenumber')}}" required="">	
                        <br>
                    </div>
                    
                    <div class="col-md-12 input-group-btn align-center ">
                        <button type="submit" class="btn btn-form btn-success display-5">{{__('text.btn01')}}</button>
                        <button type="submit" class="btn btn-form btn-secondary display-5">{{__('text.btn02')}}</button>
                    <br><br><br>
                    </div>
                    
                     
                </div>
            </form><!---Formbuilder Form--->
        </div class="card">

        
    </div>
</section>





