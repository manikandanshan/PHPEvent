<?php
include 'connection.php';
//Insert or Update item information
if(isset($_POST['action_type']))
{
   if ($_POST['action_type'] == 'add' or $_POST['action_type'] == 'edit')
    {
	//Sanitize the data and assign to variables
	    
        $category = mysqli_real_escape_string($link, strip_tags($_POST['advisoryheader'])); 
		
        if ($_POST['action_type'] == 'add')
        {
		
				$sql = "INSERT INTO newsandeventsitemsheaders SET
						headers = '$category'";
				
        }
		else
		{
		$sql= "UPDATE newsandeventsitemsheaders SET 
				headers = '$category'";
					
       
        }
      
         
        if (!mysqli_query($link, $sql))
        {
            echo 'Error Saving Data. '. mysqli_error($link);
            exit();
        }
    
}
header("Location: news_heading_list.php");
	exit();
}
//End Insert or Update item information
//Start of edit item read
$gresult = ''; //declare global variable
if(isset($_POST["action"]) and $_POST["action"]=="edit")
{
	$id = (isset($_POST["sn"])? $_POST["sn"] : '');
	$sql = "SELECT headers from newsandeventsitemsheaders
			WHERE headers = $id";
	$result = mysqli_query($link, $sql);

	if(!$result)
	{
		echo mysqli_error($link);
		exit();
	}
	$gresult = mysqli_fetch_array($result);
	include 'news_heading_edit.php';
	exit();
}
//end of edit item read

//Start Delete item
if(isset($_POST["action"]) and $_POST["action"]=="delete")
{
	$id = (isset($_POST["sn"])? $_POST["sn"] : '');
	$sql = "DELETE FROM newsandeventsitemsheaders
			WHERE headers = '$id'";

	$result = mysqli_query($link, $sql);

	if(!$result)
	{
		echo mysqli_error($link);
		exit();
	}
}
//End Delete item
$category_list[] ='';
//Read item information from database
$sql = "SELECT headers FROM newsandeventsitemsheaders";
		
$result = mysqli_query($link,$sql);
if(!$result)
{
    echo mysqli_error($link);
    exit();
}

while($rows = mysqli_fetch_array($result))
{
//Loop through each row on array and store the data to $item_list[]
    $category_list[] = array('category' => $rows['headers']);
                         
}
include 'news_heading_list.php';
exit();
?>