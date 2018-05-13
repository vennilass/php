    <?php    
        
    while($row = mysql_fetch_object($result)){    
        
        
    ?>  
        <tr>  
            <td>  
                <?php echo $row->reg_no;?>  
            </td>  
            <td>  
                <?php echo $row->sname;?>  
            </td>  
            <td>  
                <?php echo $row->room_no;?>  
            </td>  
            <td>  
                <?php echo $row->block_no;?>  
            </td>  
            <td>  
                <?php echo $row->batch_yr;?>  
            </td>  
            
            <td> <a href="listing.php?id =     
                <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
            </a> | <a href="index.php?id =     
                <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
            </a> </td>  
            <tr>  
                <? php } ?>  
