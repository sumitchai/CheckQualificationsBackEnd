@extends('layout.header')

@section('main')
<br><br><br><br><br><br><br><br><br><br>
 <table class="table">
     <tr>
         <td>Name</td>
         <td>Type</td>
         <td>Course ID</td>
         <td>Oct</td>
         <td>Actions</td>
     </tr>
     @foreach ($data as $x)
     <tr>
        <td>{{$x->name}}</td>
        <td>{{$x->type}}</td>
        <td>{{$x->course_id}}</td>
        <td>{{$x->oct}}</td>
        <td>
            <a href="/test/{{$x->id}}/edit" >Edit</a>
            <a href="/test/delete/{{$x->id}}">Delete</a>
        </td>
     </tr>
     @endforeach
     

 </table>
<div id="test-page">
    @if(isset($update))

    <form action="/test/update/{{$update->id}}" method="post">
        @csrf
        <input class="form-control" type="text" name="name" placeholder="Name" value="{{$update->name}}"   required /><br><br>
        <input class="form-control" type="text" name="course_id" placeholder="Course"   required /><br><br>
        <select class="form-control" id="a" name="type" v-model="select_sex" value="{{$update->type}}"  >
            <option value="1">Man</option>
            <option value="2">Woman</option>
            <option value="3">Other</option>
        </select><br><br>
        <input name="oct" v-if="select_sex == 3" class="form-control" type="text" placeholder="Insert Sex" value="{{$update->oct}}"   required ><br>
        <button class="btn btn-success btn-lg" type="submit" >Save</button>
    </form>

    @else
    <form action="/test" method="post">
        @csrf
        
        <input class="form-control" type="text" name="name" placeholder="Name"   required /><br><br>
        <input class="form-control" type="text" name="course_id" placeholder="Course"   required /><br><br>
        <select class="form-control" id="a" name="type" v-model="select_sex" >
            <option value="1">Man</option>
            <option value="2">Woman</option>
            <option value="3">Other</option>
            

        </select><br><br>
        <input name="oct" v-if="select_sex == 3" class="form-control" type="text" placeholder="Insert Sex" required ><br> 
        <button class="btn btn-success btn-lg" type="submit" >Save</button>
    </form>
    @endif
   
  

</div>
<br><br><br><br><br><br><br><br><br><br>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script> 
new Vue({
   el:'#test-page',
   data:{
    select_sex:2,
   }
})
</script>