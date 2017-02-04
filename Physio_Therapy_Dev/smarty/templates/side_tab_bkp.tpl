<br/>

<table style="position: absolute;top: 84;left: 0;" border="0" width="100%" height="100%" cellspacing="-1">
  <tr>
    <form name="sidebar" action="" method="post">
		<td valign="top" width="20%" bgcolor="#fcfcfc" rowspan="2">
		  <div id="listContainer" class="listControl">
			<ul id="nav">
			  <div title="Conditions" class="pad_left0"><b>Conditions</b>
				{$cond_data}
			  </div>
			  <br/>
			  <div title="Bodyparts" class="pad_left0"><b>Bodyparts</b>
				{$bp_data}
			  </div>
			  <br/>
			  <div title="Positions" class="pad_left0"><b>Positions</b>
				{$pos_data}
			  </div>
			  <br/>
			  <div title="Purpose" class="pad_left0"><b>Purpose</b>
				{$purpose_data}
			  </div>
			  <br/>
			  <div title="Equipments" class="pad_left0"><b>Equipments</b>
				{$equip_data}
			  </div>
			</ul>
		  </div>
		</td>
    </form>
    <script>
	var canodition = '';
	var bodyparts = '';
	var positions = '';
	var purpose = '';
	var equipment = '';
	function image_select(type, value){
        	var call_url = "images.php";
		//alert("url : " + call_url);
                //alert("type is : " + type + " value: " + value);
		if(type == 'conditions'){
			canodition = value;
		} else if(type == 'bodyparts'){
			bodyparts = value;
		} else if(type == 'positions'){
			positions = value;
		} else if(type == 'purpose'){
			purpose = value;
		} else if(type == 'equipment'){
			equipment = value;
		}

			$.ajax({
					type: "POST",
					url: call_url,
					data: {
							conditions: canodition,
							bodyparts: bodyparts,
							positions: positions,
							purpose: purpose,
							equipment: equipment,
							action: 'search'
					},
					success: function(result){
							console.log(result);
							var newObject = JSON.parse(result);
							//alert(newObject.output);
							document.getElementById("image_content").innerHTML = newObject.output;
							//window.location.reload(true);
					},
					error: function(XMLHttpRequest, textStatus, errorThrown){
							//alert("Error" +XMLHttpRequest);
							//alert("test status :" + textStatus);
							//alert(" error thrown" + errorThrown);
					}
			});
	}
    </script>

    <td width="20px" rowspan="2">
    
    <td valign="top">
      <div style="font-size: 0.8em;margin-left: 5px;">


      </div>
    </td>
  </tr>
</table> <!-- Center Table -->

