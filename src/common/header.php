<?php include 'breadcrumb.php' ?>

<!doctype html>
<html>
  <head>
    <title>ICT Academie</title>
    <link href="/common/main.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <nav class="breadcrumb">
        <ol>
          <?php
            foreach (get_breadcrumb_paths() as $path) {
              $title = get_title_from_path($path);
              $url = substr($path . '/', strlen($_SERVER['DOCUMENT_ROOT']));
          ?>
            <li>
              <a href="<?php echo $url ?>">
                <?php echo $title ?>
              </a>
            </li>
          <?php
            }
          ?>
        </ol>
      </nav>
    </header>