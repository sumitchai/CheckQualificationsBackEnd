<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>หลักสูตร</th>
    <th>รหัสนิสิต</th>
    <th>รหัสนิสิต</th>
    <th>รหัสนิสิต</th>
    <th>รหัสนิสิต</th>
  </tr>
  @foreach($posts as $row)
  <tr>
    <td>{{ $row->NAME_TH }}</td>
    <td>{{ $row->FACULTY_NAME_TH }}</td>
    <td>{{ $row->ACAD_YEAR }}</td>
    <td>{{ $row->COURSE_NAME_TH }}</td>
    <td>{{ $row->GRADUATE_DATE }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>
