    <html>    
        <head>    
            <title>student registration</title>    
        </head>    
        <body>    
            <link href = "registration.css" type = "text/css" rel = "stylesheet" />    
            <h2>Sign Up</h2>    
            <form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" >    
                <div class = "container">    
                    <div class = "form_group">    
                        <label>register number:</label>    
                        <input type = "text" name = "reg_no" value = "" required/>    
                    </div>    
                    <div class = "form_group">    
                        <label>student name:</label>    
                        <input type = "text" name = "sname" value = "" required />    
                    </div>    
                    <div class = "form_group">    
                        <label>room number:</label>    
                        <input type = "text" name = "room_no" value = "" required/>    
                    </div>    
                    <div class = "form_group">    
                        <label>block number:</label>    
                        <input type = "text" name = "block_no" value = "" required/>    
                    </div>    
					
					<div class = "form_group">    
                        <label>batch year:</label>    
                        <input type = "text" name = "batch_yr" value = "" required/>    
                    </div>

						 
                        <input type = "button" value = "submit" required/>    
                    </div>    
                </div>    
            </form>    
        </body>    
    </html>    
