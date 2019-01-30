<?php
       include 'connect1.php';
    if(isset($_POST['submit']))
    {
	
  		$statename=$_POST['statename'];
              $countryid=$_POST['countryid'];
 		 
 		 mysqli_query($con,"INSERT INTO tbl_state(countryid,statename,status) VALUES('$countryid','$statename',1)");
	}
        ?>

<html>
    <head>
        <title>state</title>
    </head>
    <body>
        <form id="search-form"  method="post"  >
            <center>
                <br><br><br><br><br><br>
                <br><br><br><br>
                <h1>Add state</h1>
            <table>
                <div class="control-group">
									<label><b>Country name</b></label>
									<div class="controls">
                                                                           
                                                                            <select  name="countryid" id="state" style="width:190px;" required/>
                  <option value="-1">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT countryid,countryname FROM tbl_country where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['countryid'] . '>' . $row['countryname'] . '</option>';
            }
            ?>
              </select>
									</div></div>
		<tr>
                    <td><label >State name</label></td>
                <td><input type="text" name="statename" id="statename" onChange="statename();"/>
              </td>
              </tr>
              
              <td>  
                <input type="submit" align="center" name="submit" id="pin" value="ADD"></td>
            
        
            </table>
            </center>
        </form>
    </body>
</html>