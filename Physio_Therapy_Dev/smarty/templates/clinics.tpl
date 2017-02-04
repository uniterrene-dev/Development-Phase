
{include file='header.tpl'}

<br/>
{include file='tab.tpl'}
<br/>


<form id="myform" class="form-horizontal" role="form" method="post" action="clinics.php" enctype="multipart/form-data">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-8" id="createFaultReport">
            <h2>Clinic Details</h2>
            <div class="table-responsive">
	    {if $clinic_data.next > 0} <a id="next" name="next" href="clinics.php?next={$clinic_data.next}&rows={$clinic_data.page_rows}" style="float: left;">Next</a>{/if}
	     &nbsp;&nbsp;&nbsp;Rows :<select id="rows" name="rows" onchange="changeFunc();" style="float: center;">
		<option value="10" {if $clinic_data.page_rows eq 10} selected {/if}>10</option>
		<option value="20" {if $clinic_data.page_rows eq 20} selected {/if}>20</option>
		<option value="30" {if $clinic_data.page_rows eq 30} selected {/if}>30</option></select>
	    {if $clinic_data.prev > 0} <a href="clinics.php?prev={$clinic_data.prev}&rows={$clinic_data.page_rows}" style="float: right;">Prev</a>{/if}
            <table id="example" class="table table-bordered table-hover table-striped">
	      <thead>
	        <tr>
	          {foreach item=col_name  from=$clinic_data.cols }
	            <th class="header"> {$col_name}</th>
	          {/foreach}
	        </tr>
	      </thead>
	      <tbody>
	      {foreach item=row from=$clinic_data.data}
	      <tr>
	        {foreach key=db_col item=col_name  from=$clinic_data.cols }
		  {if $db_col eq 'clinic_id'}
		    <td> <a href="#" onClick="populateForm({$row['clinic_id']}, '{$row['clinic_name']}', '{$row['clinic_email']}', '{$row['phone']}', '{$row['clinic_address']}', '{$row['clinic_site']}');"> {$row.$db_col} </a> </td>
		  {elseif $db_col eq 'clinic_logo_path'}
		    <td> <img src="{$row.$db_col}"  style="width:120px;height:50px;"/> </td>
		    <!--td style="background-image:url({$row.$db_col});background-repeat:no-repeat;background-size:120px 50px;   width: 120px; height: 50px;"></td-->
		  {else}
	            <td>{$row[$db_col]}</td>
		  {/if}
	        {/foreach}
		<td><a href="#" onClick="deleteUser({$row['clinic_id']});"><i class="fa fa-trash-o"></i></a></td>
	      </tr>
	      {/foreach}
	      </tbody>
	    </table>
            </div>
          </div>
	  {include file='clinics_form.tpl'}
	  </div>
	</div>
    </div>
</form>
        <script>
                $(document).ready(function(){
                $("#submitNewBtn").click(function(){
                alert("Hi!!!!");
                var URL = $("#myform").attr("action");
		var formData = new FormData();
		formData.append('clinic_id', $('#clinic_id').val());
		formData.append('name', $('#name').val());
		formData.append('email', $('#email').val());
		formData.append('phone', $('#phone').val());
		formData.append('address', $('#address').val());
		formData.append('site', $('#site').val());
		formData.append('action', 'add_clinic');
		formData.append('logo', $('#logo')[0].files[0]);

                $.ajax({
			type: "POST",
                        url: URL,
                        data: formData,
                        processData: false,  // tell jQuery not to process the data
                        contentType: false, 
                        success: function(result){
                                console.log(result);
                                var newObject = JSON.parse(result);
                                alert(newObject.output);
                                window.location.reload(true);
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown){
                                alert("Error" +XMLHttpRequest);
                                alert("test status :" + textStatus);
                                alert(" error thrown" + errorThrown);
                        }
                       });
                });
                });
        </script>
        <script type="text/javascript">
		function changeFunc() {
    			var selectBox = document.getElementById("rows");
			var selectedValue = selectBox.options[selectBox.selectedIndex].value;
			alert(selectedValue);
			document.getElementById("next").href = "clinics.php?next=0&rows="+selectedValue;
		}
                function deleteUser(clinic_id){
                        var call_url = "clinics.php";
                        alert("clinic id is : " + clinic_id);
                        $.ajax({
                        type: "POST",
                        url: call_url,
                        data: {
                                user_id: user_id,
				action: 'delete_clinic'
                        },
                        success: function(result){
                                console.log(result);
                                var newObject = JSON.parse(result);
                                alert(newObject.output);
                                window.location.reload(true);
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown){
                                alert("Error" +XMLHttpRequest);
                                alert("test status :" + textStatus);
                                alert(" error thrown" + errorThrown);
                        }
                       });
                }
        </script>
        <script type="text/javascript">
                function populateForm(clinic_id, name, email, phone, address, site){
                        document.getElementById("clinic_id").value=clinic_id;
                        document.getElementById("name").value=name;
                        document.getElementById("email").value=email;
                        document.getElementById("phone").value=phone;
                        document.getElementById("address").value=address;
                        document.getElementById("site").value=site;
                }
        </script>

{include file='footer.tpl'}
