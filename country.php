<?php
       include 'connect1.php';
    if(isset($_POST['submit']))
    {
	
  		$countryname=$_POST['countryname'];
 		 
 		 mysqli_query($con,"INSERT INTO tbl_country(countryname,status) VALUES('$countryname',1)");
	}
        ?>
<html>
    <head>
        <title>country</title>
    </head>
    <body>
        <form id="search-form"  method="post"  >
            <center>
                <br><br><br><br><br><br>
                <br><br><br><br>
                <h1>Add Country</h1>
            <table>
		<tr>
                    <td><label >Country name</label></td>
                <td><input type="text" name="countryname" id="countryname" onChange="countryname();"/>
              </td>
              </tr>
              
              <td>  
                <input type="submit" align="center" name="submit" id="pin" value="ADD"></td>
            
        
            </table>
            </center>
        </form>
    </body>
</html>



