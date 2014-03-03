<?php
  function get_breadcrumb_paths() {
    $path = $_SERVER['SCRIPT_FILENAME'];
    $paths = array();

    while ($path != $_SERVER['DOCUMENT_ROOT']) {
      $path = dirname($path);
      array_push($paths, $path);
    }

    return array_reverse($paths);
  }

  function get_title_from_path($folder) {
    $file_name = $folder . '/index.php';

    if (file_exists($file_name)) {
      $file = fopen($file_name, 'r');

      do {
        $line = fgets($file);

        if (preg_match('/<h1>(.*)<\/h1>/', $line, $matches) > 0) {
          return $matches[1];
        }
      } while ($line != FALSE);

      fclose($file);

      return 'Header not found';
    }

    return 'File not found';
  }
?>