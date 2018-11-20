<?php




?>
<!Doctype html>

<html>
<head>
  <title>Faculty Expenses</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/src/css/style.css">

</head>
<body>
  <div class="container">
  <h3 style="text-align:center">Faculty Expenses</h3>

<form method="post">
  <div class="form-horizontal">
		<input type="text" name="Name"style="border-color:#d2d4d8" class="form-control" placeholder="Name" required autofocus >
		</div>
	<div class="form-horizontal">
    <input type="text" name="ID"style="border-color:#d2d4d8" class="form-control" placeholder="ID" required autofocus >
  </div>
  <div class="form-horizontal">
    <input type="text" name="Department"style="border-color:#d2d4d8" class="form-control" placeholder="Department" required autofocus >
  </div>
  <div class="form-horizontal">
    <select  type="text" id="Type_of_job"style="border-color:#d2d4d8" class="form-control" placeholder="Type" required autofocus >
        <option value="0">Type of Job</option>
        <option value="part-time">Part-time</option>
        <option value="full-time">Full-time</option>
    </select>
  </div>
  <div class="form-horizontal">
    <select  type="text" id="Subject_total" style="border-color:#d2d4d8" class="form-control" placeholder="Total Subjects" required autofocus >
        <option value="0" default>Total Subjects</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>  </div>
    <div class="form-horizontal" id="Subject_name1">
      <input type="text" style="border-color:#d2d4d8" class="form-control" placeholder="Name of Subject" required autofocus >
    </div>
    <div class="form-horizontal" id="Subject_name2">
      <input type="text" style="border-color:#d2d4d8" class="form-control" placeholder="Name of Subject" required autofocus >
    </div>
    <div class="form-horizontal" id="Subject_name3">
      <input type="text" style="border-color:#d2d4d8" class="form-control" placeholder="Name of Subject" required autofocus >
    </div>
    <div class="form-horizontal" id="Subject_name4">
      <input type="text" style="border-color:#d2d4d8" class="form-control" placeholder="Name of Subject" required autofocus >
    </div>
    <div class="form-horizontal" id="Subject_name5">
      <input type="text" style="border-color:#d2d4d8" class="form-control" placeholder="Name of Subject" required autofocus >
    </div>

  <div class="form-horizontal" id="Yearly_salary">
    <input type="text" style="border-color:#d2d4d8" class="form-control" placeholder="Yearly Salary" required autofocus >
  </div>
  <div class="form-horizontal" id="Pay_per_sebject">
    <input type="text" style="border-color:#d2d4d8" class="form-control" placeholder="Pay Per Subject" required autofocus >
  </div>
  <div class="form-horizontal" id="Hours">
    <input type="text" style="border-color:#d2d4d8" class="form-control" placeholder="No. of Hours" required autofocus >
  </div>

  <div class="form-horizontal">
  <p>
    <button id="faculty_submit"  type="submit" class="btn btn-success" name="faculty_submit">Submit</button>
  </p>
  </div>
</form>
</div>
<script
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script type="text/javascript" src="/src/js/main.js"></script>

  </body>
</html>
