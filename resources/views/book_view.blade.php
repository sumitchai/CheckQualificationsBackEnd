
<br><br><br><br><br><br><br><br><br><br>

 <table class="table">
     <tr>
         <td>Course ID</td>
         <td>count<td>
         <td>Action</td>
     </tr>
     @foreach ($data as $x)
     <tr>
        <td>{{$x->COURSE_NAME_TH}}</td>
        <td></td>
        <td><a href="/book/{{$x->COURSE_ID}}">View User</a></td>
     </tr>
     @endforeach
     

 </table>
