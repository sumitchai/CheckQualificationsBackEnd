@extends('layout.header')

@section('main')
<br><br><br><br><br><br><br><br><br><br>

 <table class="table">
     <tr>
         <td>Name</td>
         <td>Type</td>
         <td>Oct</td> 
     </tr>
     @foreach ($data as $x)
     <tr>
        <td>{{$x->name}}</td>
        <td>{{$x->type}}</td>
        <td>{{$x->oct}}</td>
      
     </tr>
     @endforeach
     

 </table>
