<?php

namespace Elminson\SqlToTable;

require_once __DIR__ . '../vendor/autoload.php';

//include("../src/SqlToTable.php");
?>
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
    <?php if (!isset($_POST['query'])) { ?>
        <form role="form" action="" method="post" enctype="multipart/form-data">
            <H2> OR Paste de sql here</H2>
            <div class="form-group">
                <label for="email">SQL Query</label>
                <textarea class="form-control" id="query" name="query">
      </textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <?php
    }

    if (isset($_POST['query'])) {
        if ($_POST['query'] == "") {
            echo "Empty value";
            exit();
        }
        $create = new SqlToTable();
        ?>
        <form role="form" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" id="generate" name="generate" value="1">
            <?php echo $create->form($_POST['query']); ?>
            <div class="row">

                <div class="col-lg-6">
                    <button type="submit" class="btn btn-default">Create Table</button>
                </div>
            </div>
        </form>
        <?php
    }
    if (isset($_POST['generate'])) {
        $create = new SqlToTable();
        unset($_POST['generate']);

        ?>
        <form role="form" action="" method="post" enctype="multipart/form-data">
            <H2>Generated</H2>
            <div class="form-group">
                <label for="email">SQL Query Generated</label>
                <pre>
      <?php echo $create->create($_POST) ?>
      </pre>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

        <?php
    }
    ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>