    <?php    
        
    include "connection.php";    
        
    if(isset($_GET['id'])){    
    $sql = "delete from registration where id = '".$_GET['id']."'";    
    $result = mysql_query($sql);    
    }    
        
    $sql = "select * from registration";    
    $result = mysql_query($sql);    
    ?>    
    <html>    
        <body>    
            <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
                <tr>    
                    <td>register number</td>    
                    <td>student name</td>    
                    <td>room number</td>    
                    <td>Last Name</td>    
                    <td>block number</td>    
                    <td>batch year</td>    
                    
                    <td colspan = "2">Action</td>    
                </tr>    
            </table>    
        </body>    
    </html>    
