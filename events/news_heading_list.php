<?php
include_once 'news_headingindex.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>NEWS & EVENTS HEADERS</title>
	<link href="styleitemlist.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
function ConfirmDelete()
{
    var d = confirm('Do you really want to delete data?');
    if(d == false){
        return false;
    }
}
</script>
</head>
<body>
    <div class="wrapper">
        <div class="content" >
            
            <table class="menutable">
                <thead>
                    <tr>
                        <th>
                            NEWS & EVENTS HEADER
                        </td>
                        
                        <th></th>
						
                    </tr>
                </thead>
                <tbody>
                    <?php
					
					if ($category_list != '')
					{	
					foreach($category_list as $value): ?>
                        <tr>
                            <td>
							<?php 
						
							echo $value['category'];
							
							?> 
						    </td>
							<td>
                           <form method="post" action="news_index.php"> 
                                    <input type="hidden" name="sn"
                                    value="<?php echo $value["s_no"]; ?>" />
                                    <input type="hidden" name="action" value="edit"/>
                                    <input type="submit" value="EDIT" />
                            </form>
                            </td>
							
                            <td>
                                <form method="POST" action="news_headingindex.php"
                                     onSubmit="return ConfirmDelete();">
                                     <input type="hidden" name="sn"
                                     value="<?php echo $value["category"]; ?>" />
                                     <input type="hidden" name="action" value="delete"/>
                                    <input type="submit" value="DELETE" />
                                </form>
                            </td>
                        <tr>
                    <?php endforeach;
					}					
					?>
                </tbody>
            </table><br/>
           
			
			<br>
			
		
        </div>
    </div>
</body>
</html>