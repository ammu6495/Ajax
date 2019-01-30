<?php
       include 'connect1.php';
    if(isset($_POST['submit']))
    {
	
  		$stateid=$_POST['stateid'];
              $districtname=$_POST['districtname'];
 		 
 		 mysqli_query($con,"INSERT INTO tbl_district(stateid,districtname,status) VALUES('$stateid','$districtname',1)");
	}
        ?>

<html>
    <head>
        <title>district</title>
    </head>
    <body>
        <form id="search-form"  method="post"  >
            <center>
                <br><br><br><br><br><br>
                <br><br><br><br>
                <h1>Add disrtrict</h1>
            <table>
                <div class="control-group">
									<label><b>State name</b></label>
									<div class="controls">
                                                                           
                                                                            <select  name="stateid" id="state" style="width:190px;" required/>
                  <option value="-1">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT stateid,statename FROM tbl_state where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['stateid'] . '>' . $row['statename'] . '</option>';
            }
            ?>
              </select>
									</div></div>
		<tr>
                    <td><label >District name</label></td>
                <td><input type="text" name="districtname" id="districtname" onChange="districtname();"/>
              </td>
              </tr>
              
              <td>  
                <input type="submit" align="center" name="submit"  value="ADD"></td>
            
        
            </table>
            </center>
        </form>
    </body>
</html>
