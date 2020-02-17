
<p>ที่&nbsp;ศธ&nbsp;๐๕๙๐.๐๖&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="{{env('APP_URL')}}/assets/images/logo-full.png" alt="Mobirise" title="" style="height:80px; ">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มหาวิทยาลัยพะเยา <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตำบลแม่กา&nbsp;อำเภอเมือง <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จังหวัดพะเยา&nbsp;๕๖๐๐๐

</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 มกราคม&nbsp;&nbsp;2562</p>
<p>
    เรื่อง&nbsp;ขอส่งผลการตรวจสอบวุฒิการศึกษา
</p>
<p>
    เรียน&nbsp;เจ้ากรมสวัสดิการทหารเรือ
</p>
<p>
    อ้างถึง&nbsp;หนังสือกรมสวัสดิการทหารเรือ&nbsp;ที่&nbsp;กห&nbsp;0532.1/135&nbsp;ลงวันที่&nbsp;23&nbsp;มกราคม&nbsp;2562
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	ตามหนังสือที่อ้างถึง&nbsp;กรมสวัสดิการทหารเรือได้ขอความร่วมมือมหาวิทยาลัยพะเยาตรวจสอบ&nbsp;วุฒิใบแสดงผลการเรียนของนายวิวรรธน์หาทรัพย์ตามความทราบแล้วนั้น <br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	มหาวิทยาลัยพะเยา&nbsp;ได้ตรวจสอบแล้วพบว่า&nbsp;ผู้ที่มีรายชื่อดังกล่าว&nbsp;สำเร็จการศึกษาหลักสูตร&nbsp;&nbsp;นิเทศศาสตรบัณฑิต&nbsp;สาขาวิชาการประชาสัมพันธ์&nbsp;
	เมื่อวันที่&nbsp;26&nbsp;ธันวาคม&nbsp;2559&nbsp;จากมหาวิทยาลัยพะเยา&nbsp;จริง&nbsp;และได้รับอนุมัติให้สำเร็จการศึกษาถูกต้องตามที่ระบุไว้ในเอกสาร&nbsp;ซึ่งสำนักงาน&nbsp;ก.พ. รับรองเรียบร้อยแล้ว
</p>
<p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จึงเรียนมาเพื่อโปรดทราบ <br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;ขอแสดงความนับถือ

</p>
				 @foreach ($posts as $x)
                  <p class="card-text display-5">ชื่อ-นามสกุล : {{$x->NAME_TH}}</p>
                  <p class="card-text display-5">หลักสูตร :	{{$x->COURSE_NAME_TH}}</p>
                  <p class="card-text display-5">คณะ : {{ $x->FACULTY_NAME_TH }}</p>
                  <p class="card-text display-5">ปีสำเร็จการศึกษา (พ.ศ.): {{ $x->ACAD_YEAR }}</p>
                  <p class="card-text display-5">วันที่สำเร็จการศึกษา (พ.ศ.): {{ $x->GRADUATE_DATE }}</p>
                  @break
                  
                @endforeach

                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td>
                                
                                    
                                    <p align="center">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ดร.ชลธิดา&nbsp;เทพหินลัพ) <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รองอธิการบดีฝ่ายวิชาการและประกันคุณภาพ&nbsp;ปฏิบัติการแทน <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อธิการบดีมหาวิทยาลัยพะเยา <br>
                                    </p>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            
<p>
	&nbsp;&nbsp;กองบริการการศึกษา&nbsp;งานทะเบียนนิสิตและประมวลผล <br>
    โทร.&nbsp;๐&nbsp;๕๔๔๖&nbsp;๖๖๖๖&nbsp;ต่อ&nbsp;๑๐๒๑ <br>
    โทรสาร&nbsp;๐&nbsp;๕๔๔๖&nbsp;๖๖๙๐ <br>
</p>






 
 
