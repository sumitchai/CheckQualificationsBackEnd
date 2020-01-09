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
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr> 
        <th>Name</th>
        <th>Count</th> 
      </tr>
    </thead>
    <tbody>
      @foreach ($course as $val) 
      <tr>
        <td>{{ $val->COURSE_NAME_EN }}</td>
        <td>{{ $val->COUNT_STUDENT }}</td> 
      </tr>
       @endforeach 
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
