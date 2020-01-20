@extends('layout.header')

@section('main')
<br><br><br><br><br><br><br><br><br><br>

 <table class="table">
     <tr>
         <td>รหัสนิสิต</td>
         <td>ชื่อ</td>
         <td>ปีที่จบ</td> 
     </tr>
     @foreach ($data as $x)
     <tr>
        <td>{{$x->STUDENT_CODE}}</td>
        <td>{{$x->NAME_TH}}</td>
        <td>{{$x->ACAD_YEAR}}</td>
      
     </tr>
     @endforeach
     

 </table>
