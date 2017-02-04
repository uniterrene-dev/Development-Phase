<?php

$uploaddir = '/var/www/myhealth/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";

?>
<!-- The data encoding type, enctype, MUST be specified as below -->
<script src="https://code.jquery.com/jquery-1.12.3.js"></script>
<span id="preview"></span>
<form enctype="multipart/form-data" action="" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" onchange="displayPreview(this.files);"/>
    <input type="submit" value="Send File" />
</form>

<script>
var _URL = window.URL || window.webkitURL;
function displayPreview(files) {
   var file = files[0]
   var img = new Image();
   var sizeKB = file.size / 1024;
   document.getElementById("preview").innerHTML="";
   img.onload = function() {
     
      $('#preview').append(img);
      alert("Size: " + sizeKB + "KB\nWidth: " + img.width + "\nHeight: " + img.height);
   }
   img.src = _URL.createObjectURL(file);
}
</script>
