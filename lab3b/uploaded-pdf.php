<?php
if (isset($_FILES['pdf_file'])) {
$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';

// Handle Text File
$file_name = $_FILES['pdf_file']['name'];
$uploaded_text_file = $upload_directory . basename($file_name);
$temporary_file = $_FILES['pdf_file']['tmp_name'];
$server_path = $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] . $relative_path . basename($file_name);
}?>

<html>
  <head>
    <title>IPT10 Lab activity 3b</title>
  </head>
  <body>
    <h1>PDF Example by Object Tag</h1>
<?php
if (move_uploaded_file($temporary_file, $uploaded_text_file)) {
    $correct_directory = str_replace('\\', '/', $server_path);
    $text_file_content = file_get_contents($uploaded_text_file, 'r');
    ?>
    <object data="<?php echo "http://$correct_directory";?>" type="application/pdf" width="100%" height="500px">
    <p>Unable to display PDF file. <a href="<?php echo "http://$correct_directory";?>" target="_blank" download>Download</a> instead.</p>
    </object>
    <?php
} else {
    echo '<p>Failed to upload file</p>';
}
?>
  </body>
</html>
<!-- echo '<pre>';
var_dump($_FILES);
exit; -->