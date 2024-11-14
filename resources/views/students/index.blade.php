<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
</head>
<body>
    <h1>Hello World, this is the master layout.</h1>
    <h1>student data</h1>

    <div>
      <table border="1" cellspacing="0" cellpadding="10">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Program</th>
          </tr>
        </thead>
        <tbody>
          @foreach($students as $student)
            <tr>
              <td>{{ $student['id'] }}</td>
              <td>{{ $student['name'] }}</td>
              <td>{{ $student['program'] }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</body>
</html>
