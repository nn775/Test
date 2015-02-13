<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Export Data to CSV</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#startDatepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();;
	$( "#endDatepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();;
  });
  </script>
</head>
<body>
<form method="POST" action="CsvExporter.php">
<table width="70%" height="15%"> 
	<tr>
		<td colspan = "3" >
			<p>
				<img src="neo_ogilvy.jpg" alt="Smiley face" width="35%" height="15%" align ="right">
			</p>
		</td>	
	</tr>	
<tr>
		<td>
		<label>Select list</label>
		<select id = "myList" name="myList">
        <?php   
			require 'Dbconfig.php';
			
			 foreach ($dbarray as $report) {   
					//echo $report['reportname'];
					echo '<option value="'.$report['reportname'].'">'.$report['reportname'].'</option>';
               // echo '<option value="'. $reportName . '">' . $reportName . '<option />';                     
            }                                       
        ?>  
		</select>
		
		
		
		
		
		
		
		
			
		</td>
		<td>
			Start Date: <input type="text" id="startDatepicker" name="startDatepicker" required>
		</td>
		<td>
			End Date: <input type="text" id="endDatepicker" name="endDatepicker" required>
		</td>	
	</tr>
	<tr>
		<td> </td>
		<td align="center">	<input type = "submit" name="Export to CSV" value="Export to CSV"></input>
		</td >
	</tr>
	
</table>


</form>

<?php
?>
 
</body>
</html>