<?php
include 'connection.php';


$sql = "SELECT headers FROM advisoriesheader";
		
$result = mysqli_query($link,$sql);
if(!$result)
{
    echo mysqli_error($link);
    exit();
}

while($rows = mysqli_fetch_array($result))
{

    $category_list[]= array('category' => $rows['headers']);
}

$val= count($category_list);

		for($i=0; $i<$val; $i++)
		{

		$header=$category_list[$i]['category'];
		//Read item information from database
		$sql = "SELECT s_no, name, image_path, advisories_header,
				designation, description FROM advisoriesitems
				WHERE advisories_header='$header'";
		
		$result = mysqli_query($link,$sql);
		if(!$result)
		{
			echo mysqli_error($link);
			exit();
		}

		while($rows = mysqli_fetch_array($result))
			{
		//Loop through each row on array and store the data to $item_list[]
		$item_list[$i][] =  array('s_no' => $rows['s_no'],
								'name' => $rows['name'],
								'images_path' => $rows['image_path'],                         
								'item_header' => $rows['advisories_header'],
								'designation' => $rows['designation'],
								'description' => $rows['description']
								);
	
			}
		
	}
	
				for ($i = 0; $i <$val; $i++) 
					{
					$data = array();
						if($item_list[$i]!=null)	{
				 
							foreach($item_list[$i] as $key => $value):
								$data[$key] = $value;
				
								echo "image path :".$value['images_path'];
                          
								echo "name  : ".$value['name']; 
                           
								echo "designation  : ".$value['designation']; 
                           
								echo "description  : ".$value['description'];
					
							
							endforeach; 
						}
			
					}	
?>