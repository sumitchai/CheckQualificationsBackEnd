 



 <!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>นิสิตไทย</h2>                                                                               
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr> 
        <th>ชื่อหลักสตูร</th>
        <th>จำนวนนิสิต</th> 
        <th>รายละเอียด</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($course as $val) 
      <tr>
        <td>{{ $val->COURSE_NAME_TH }}</td>
        <td>{{ $val->COUNT_STUDENT }}</td> 
        <td><button type="button" class="btn btn-primary btn-sm">ดูข้อมูล</button></td>
      </tr>
       @endforeach 
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
