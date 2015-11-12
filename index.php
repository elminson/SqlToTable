<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>From Insert SQL to Create Table</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>From Insert SQL to Create Table</h1>
<div class="container">
  <h2>Upload Sql Query file </h2>
  <form role="form" action="upload.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="file" class="form-control" id="file" name="file" placeholder="File ">
    </div>
    <H2> OR Paste de sql here</H2>
    <div class="form-group">
      <label for="email">SQL Query</label>
      <textarea class="form-control" id="query"  name="query">
      </textarea> 
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>