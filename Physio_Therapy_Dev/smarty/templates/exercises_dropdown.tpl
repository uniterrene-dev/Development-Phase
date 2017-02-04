

<form id="myform" class="form-horizontal" role="form" method="post" action="exesteps.php">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-2" id="createFaultReport">
            <h2>Exercises Steps</h2>
            <div class="table-responsive">
            <table id="example" class="table table-bordered table-hover table-striped">
                <tr>
                    <td>
                    <select id="exer_dropdown" name="exer_dropdown" >
                            <option value="-1">Select Exercise </option>
                        {foreach item=row from=$exercise_data.drop_down}
                            <option value="{$row.exercise_id}">{$row.name} </option>
                        {/foreach}
                    </select>
			<input type="hidden" id="action" name="action" value="search">
                    </td>
                    <td><button class="btn btn-lg btn-success" id="submitNewBtn" type="submit" value="search">Submit</button></td>
                </tr>
            </table>
            </div>
          </div>
        </div>
    </div>
</form>

