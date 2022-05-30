<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>
  <table class="table table-hover">

      <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Mobile No.</th>
        <th>Comment</th>
      </tr>
      @foreach ($form as $a)
      <tr>
          <td>{{$a->id}}</td>
          <td>{{$a->name}}</td>
          <td>{{$a->number}}</td>
          <td>{{$a->comment}}</td>


      @endforeach




  </table>
</div>

</body>
</html>
