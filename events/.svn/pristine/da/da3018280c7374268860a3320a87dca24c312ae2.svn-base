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
$nCategory_list[] ='';
$sql = "SELECT headers FROM newsandeventsitemsheaders";
		
$result = mysqli_query($link,$sql);
if(!$result)
{
    echo mysqli_error($link);
    exit();
}

while($rows = mysqli_fetch_array($result))
{

    $nCategory_list[]= array('category' => $rows['headers']);
}
//echo $category_list[0]['category'];
$newsVal= count($nCategory_list);
//echo $val;
?>

<!DOCTYPE html>
<html>
<body>
  <h1 style="text-align:center">ADVISORIES & NEWS AND EVENTS FEED</h1>
  <br>
   
 </h1><p><a href="advisories.php" class="link-btn"><h1 style="text-align:center">ADVISORIES</a> <p>
 
 </h1><p><a href="news.php" class="link-btn"><h1 style="text-align:center">NEWS AND EVENTS</a></p>
 
 
</body>
</html>