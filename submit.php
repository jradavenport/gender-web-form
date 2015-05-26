<?php
  // Small script to save the values to a single CSV file
  $date = date_create();
  $log_file_name = "data.csv"; // Change to the log file name
  $talkref = $_POST['sessionID'];
  $speaker_gender = $_POST['speakerGender'];
  $questions = $_POST['questions'];
  $openform = $_POST['OpenComments'];
  $epoch = date_format($date, 'U');
  $timedate = date_format($date, 'Y-m-d H:i:s');
  $message = "{$epoch},{$timedate},{$talkref},{$speaker_gender},{$questions},{$openform} ;\n";
  file_put_contents($log_file_name, $message, FILE_APPEND);
  header('Location: ./form.html'); // redirect back to the main site
?>
