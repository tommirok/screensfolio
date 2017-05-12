<!DOCTYPE html>
<html>
<body>
<?php
include ('session.php');
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    </br>
    Insert name:
    <input type="text" name="name" id="name"/> </br>
    Select id:
    <select name="id" id="id">
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
      <option value=5>5</option>
      <option value=6>6</option>
      <option value=7>7</option>
      <option value=8>8</option>
      <option value=9>9</option>
      <option value=10>10</option>
      <option value=11>11</option>
      <option value=12>12</option>
      <option value=13>13</option>
      <option value=14>14</option>
      <option value=15>15</option>
      <option value=16>16</option>
    </select></br>
    <input type="submit" value="Upload Image" name="submit">
</form>
</br>
</br>
<a href="logout.php"><button type="button">Logout!</button></a>

</body>
</html> 

