<html>

<head>
<title>UPS </title>
</head>


<body>

<div id="dvStatus"></div>
<br/>

<div id="dvdefault"></div>

<script>
</script>

</body>


	<script>
	
		loadstatus();
		loaddefault();
		function loadstatus(){
		
		var postData = 
				   {
					   "name": "ups_status"
					}
					
		   $.ajax({	
						   type: "POST",
						   async: false,
						   url: "<?php echo base_url() ?>index.php/ups/getsRawHtml",
						   contentType: "application/json; charset=utf-8",                   
						   data: JSON.stringify(postData),
						   success: function (data) {
								$('#dvStatus').html(data);
						   },
						   error: function (e) { alert(e); }
					   });
		}

		function loaddefault(){
		
		var postData = 
				   {
					   "name": "ups_default"
					}
					
		   $.ajax({	
						   type: "POST",
						   async: false,
						   url: "<?php echo base_url() ?>index.php/ups/getsRawHtml",
						   contentType: "application/json; charset=utf-8",                   
						   data: JSON.stringify(postData),
						   success: function (data) {
								$('#dvdefault').html(data);
						   },
						   error: function (e) { alert(e); }
					   });
		}
	</script>

</html>
