@extends('layout.header')

@section('main')
<br><br><br><br><br><br><br><br><br><br>

 <table class="table">
     <tr>
         <td>Course ID</td>
         <td>Name</td>
         <td>Action</td>
     </tr>
     @foreach ($data as $x)
     <tr>
        <td>{{$x->course_id}}</td>
        <td>{{$x->name}}</td>
        <td><a href="/book/{{$x->course_id}}">View User</a></td>
     </tr>
     @endforeach
     

 </table>
