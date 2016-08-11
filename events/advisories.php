<?php include'connection.php';

$aCategory_list[] ='';
$sql = "SELECT headers FROM advisoriesheader";
		
$result = mysqli_query($link,$sql);
if(!$result)
{
    echo mysqli_error($link);
    exit();
}

while($rows = mysqli_fetch_array($result))
{

    $aCategory_list[]= array('category' => $rows['headers']);
}
//echo $category_list[0]['category'];
$advisoriesVal= count($aCategory_list);
//echo $advisoriesVal;
?>

<!DOCTYPE html>
<html>
<body>
  <h1 style="text-align:center">ADVISORIES FEED</h1>
  <br>
   
 </h1><p><a href="advisories_heading_edit.php" class="link-btn"><h1 style="text-align:center">ADD ADVISORIES HEADER</a> <p>
 <?php 
 if($advisoriesVal!=1)
 {
 ?>
 </h1><p><a href="advisories_update.php" class="link-btn"><h1 style="text-align:center">ADD ADVISORIES</a></p>
 </h1><p><a href="viewAdvisories.php" class="link-btn"><h1 style="text-align:center">VIEW ADVISORIES</a> <p>
  <?php 
  }
  ?>
 
</body>
</html>