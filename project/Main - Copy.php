<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Export Data to CSV</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#startDatepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();;
	$( "#endDatepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();;
  });
  </script>
</head>
<body>
<p>
	<img src="neo_ogilvy.jpg" alt="Smiley face" width="35%" height="15%" align ="right">
</p>
<div>
<p>
<form method="POST" action="CsvExporter.php">
<label>Select list</label>
      <select id = "myList" name="myList">
         <option value = "IBMMakeGoodV2.MakeGood_SingleAdvertiser_V">DFA_Daily</option>
         <option value = "IBMMakeGoodV2.MakeGood_MobileDelivery">DFA_Mobile</option>
         <option value = "IBMMakeGoodV2.MakeGood_InternationalDelivery">DFA_International</option>
         <option value = "IBMMakeGoodV2.MakeGood_TruEffectDailyPerformanceNew_V">TE_Daily</option>
		 <option value = "IBMMakeGoodV2.MakeGood_TruEffectMobileDelivery_V">TE_Mobile</option>
		 <option value = "IBMMakeGoodV2.MakeGood_TruEffectInternationalDelivery_V">TE_International</option>
		 <option value = "IBMMakeGoodV2.BrandAssureReport">DV_BrandAssure</option>
		 <option value = "IBMMakeGoodV2.AdSureReport">DV_AdAssure</option>
       </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


Start Date: <input type="text" id="startDatepicker" name="startDatepicker"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
End Date: <input type="text" id="endDatepicker" name="endDatepicker">

<p> <center-left> <input type = "submit" name="Export to CSV" value="Export to CSV"></input></center-left></p>
</form>
</p> </div>
<?php
?>
 
</body>
</html>