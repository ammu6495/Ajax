<?php
       include 'connect1.php';
       ?>
<html>
    <head>
        <title>country</title>
    </head>
    <body>
        <form id="search-form"  method="post"  >
            <center>
                
            <table>
                <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter Name"/>
            </div>
                
                <div><label>Country</label>
		
                <div class="controls">
                                                                           
             <select  name="countryid" id="country" style="width:190px;" required/>
            
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
                 <div>
									<label><b>State:</b></label>
									<div>
                                                                           
                                                                            <select name="stateid" id="state_select" /><option value="-1">select</option></select>
									</div>
								</div>
                <div>
									<label><b>District:</b></label>
									<div>
                                                                           
									<select  name="districtid" id="district_select"/>
                        <option value="-1">select</option></select>
                                                                        </div>
                                                                </div>
              
              
             
              
              
              <td>  
                <input type="submit" align="center" name="submit" id="pin" value="ADD"></td>
            
        
            </table>
            </center>
        </form>
        <script src="assets/js/jquery-3.3.1.min.js"></script>
 
    <script>
			$(document).ready(function() {

                            $("#country").on("change", function(){
                                 $country = $('#country').val();

                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$country},
                                     url:'getstate.php',
                                     success:function(data){
                                         $data = JSON.parse(data);                                         
                                         $html = '<option value="">--SELECT STATE--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#state_select").html($html);
                                     }
                                 });
                            });
                            
                            
                            $("#state_select").on("change", function(){
                                 $state = $('#state_select').val();
                                 //alert($taluk);
                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$state},
                                     url:'getdistrict.php',
                                     success:function(data){
                                         $data = JSON.parse(data);
                                         
                                         
                                         $html = '<option value="">--SELECT DISTRICT--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#district_select").html($html);
                                     }
                                 });
                            });
                            
			});
                              
                        
                        
		</script>
    </body>
</html>



                                                                           
                 
									
                                                                        
                 
                                 