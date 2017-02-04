
{include file='header.tpl'}

<br/>
{include file='tab.tpl'}
<br/>


<form id="myform" class="form-horizontal" role="form" method="post" action="users.php">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-8" id="createFaultReport">
            <h2>Users</h2>
            <div class="table-responsive">
	    {if $user_data.next > 0} <a id="next" name="next" href="users.php?next={$user_data.next}&rows={$user_data.page_rows}" style="float: left;">Next</a>{/if}
	     &nbsp;&nbsp;&nbsp;Rows :<select id="rows" name="rows" onchange="changeFunc();" style="float: center;">
		<option value="10" {if $user_data.page_rows eq 10} selected {/if}>10</option>
		<option value="20" {if $user_data.page_rows eq 20} selected {/if}>20</option>
		<option value="30" {if $user_data.page_rows eq 30} selected {/if}>30</option></select>
	    {if $user_data.prev > 0} <a href="users.php?prev={$user_data.prev}&rows={$user_data.page_rows}" style="float: right;">Prev</a>{/if}
            <table id="example" class="table table-bordered table-hover table-striped">
	      <thead>
	        <tr>
	          {foreach item=col_name  from=$user_data.cols }
	            <th class="header"> {$col_name}</th>
	          {/foreach}
	        </tr>
	      </thead>
	      <tbody>
	      {foreach item=row from=$user_data.data}
	      <tr>
	        {foreach key=db_col item=col_name  from=$user_data.cols }
		  {if $db_col eq 'user_id'}
		    <td> <a href="#" onClick="populateForm({$row['user_id']}, '{$row['user_name']}', '{$row['email']}', '{$row['phone']}', '{$row['first_name']}', '{$row['last_name']}', '{$row['active']}', '{$row['role_id']}', '{$row['clinic_id']}');"> {$row.$db_col} </a> </td>
		  {elseif $db_col eq 'active'}
		    {if $row.$db_col == 1}
		    <td> Active </td>
		    {else}
		    <td> Inactive </td>
		    {/if}
		  {else}
	            <td>{$row[$db_col]}</td>
		  {/if}
	        {/foreach}
		<td><a href="#" onClick="deleteUser({$row['user_id']});"><i class="fa fa-trash-o"></i></a></td>
	      </tr>
	      {/foreach}
	      </tbody>
	    </table>
            </div>
          </div>
	  {include file='users_form.tpl'}
	  </div>
	</div>
    </div>
</form>
        <script>
                $(document).ready(function(){
                $("#submitNewBtn").click(function(){
                alert("Hi!!!!");
                var user_id = $('#user_id').val();
                var pass = $('#password').val();
                var c_pass = $('#c_password').val();
                var role = $('#role').val();
                var clinic = $('#clinic').val();

                if(user_id == '' && pass == ''){
                        alert("for new user Password is mondatory");
                        return false;
                }

                if( pass ){
                        if( c_pass == ''){
                                alert("Please provide Confirmation Password");
                                return false;
                        } else if (pass != c_pass){
                                alert("Password and Confirmation password should be same");
                                return false;
                        }
                }

		if(role != 1 && clinic == ''){
                        alert("Please map Clinic");
                        return false;
		}

                var URL = $("#myform").attr("action");
                $.ajax({
                        type: "POST",
                        url: URL,
                        data: {
                                user_id: $('#user_id').val(),
                                name: $('#name').val(),
                                email: $('#email').val(),
                                phone: $('#phone').val(),
                                password: $('#password').val(),
                                first_name: $('#first_name').val(),
                                last_name: $('#last_name').val(),
                                active: $('#status').val(),
                                role: $('#role').val(),
                                clinic: $('#clinic').val(),
				action: $("#submitNewBtn").val()
                        },
                        success: function(result){
                                //console.log(result);
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
			document.getElementById("next").href = "users.php?next=0&rows="+selectedValue;
		}
                function deleteUser(user_id){
                        var call_url = "users.php";
                        alert("user id is : " + user_id);
                        $.ajax({
                        type: "POST",
                        url: call_url,
                        data: {
                                user_id: user_id,
				action: 'delete_user'
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
                function populateForm(user_id, user_name, email, phone, first_name, last_name, active, role, clinic){
                        document.getElementById("user_id").value=user_id;
                        document.getElementById("name").value=user_name;
                        document.getElementById("email").value=email;
                        document.getElementById("phone").value=phone;
                        document.getElementById("first_name").value=first_name;
                        document.getElementById("last_name").value=last_name;
                       	document.getElementById("status").value=active;
                       	document.getElementById("role").value=role;
                       	document.getElementById("clinic").value=clinic;
	
                }
        </script>

{include file='footer.tpl'}
