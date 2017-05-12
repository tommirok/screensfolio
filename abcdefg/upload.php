<?php
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file = strtolower ($target_file);
$uploadOk = 1; 
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// kuvan tarkistus
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        echo "hit backspace to try again";
        $uploadOk = 0;
    }
}
// kopionnin estäminen
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    echo "hit backspace to try again";
    $uploadOk = 0;
}
// tiedostokoon rajoittaminen
if ($_FILES["fileToUpload"]["size"] > 9000000) {
    echo "Sorry, your file is too large.";
    echo "hit backspace to try again";
    $uploadOk = 0;
}
// tarkistaa tiedostotyypin
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    echo "hit backspace to try again";
    $uploadOk = 0;
}
// tarkistaa tuliko viheitä
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    echo "hit backspace to try again";
// jos ei virheitä, lataus suorotetaan
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $juu=basename( $_FILES["fileToUpload"]["name"]);
        $id= $_POST["id"];
        $otsikko=mysqli_real_escape_string($_POST["name"]);
        tosql($juu, $id, $otsikko);
        echo "<script> alert('kuva ladattu') </script>";
        header("location: selectfiles.php");
        
    } else {
        echo "Sorry, there was an error uploading your file.";
        echo "hit backspace to try again";
    }


}
//kuvan vanhan kuvan poisto sql ja uuden kuvan tilalle sijoittaminen
function tosql($juu, $id, $otsikko){
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "pena420";
    $dbname = "portfolioUsers";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $del = "DELETE FROM images WHERE ID=".$id;
    $sql = "SELECT url from images WHERE ID=".$id;
    $name = $conn->query($sql);
    if ($name->num_rows > 0) {
    // output data of each row
    while($row = $name->fetch_assoc()) {
        $palautus=$row["url"];
    }
    }
    if ($conn->query($del) === TRUE) {
        
        $palautus="img/".$palautus;
        remove($palautus);
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $ins = "insert into images values(" . $id . ", '" . $juu . "', '" . $otsikko . "')";
    if ($conn->query($ins) === TRUE) {
        echo "File is in database";
    } else {
        echo "Error adding content: " . $conn->error;
    }
    }
    //vanhan kuvan poisto kansiosta
    function remove($name){
     $file = $name;
    if($file != 'img/'){
    if (!unlink($file))
      {
      echo ("Error deleting $file");
      }
    else
      {
      echo ("Deleted $file");
      }
    
}
}
?>