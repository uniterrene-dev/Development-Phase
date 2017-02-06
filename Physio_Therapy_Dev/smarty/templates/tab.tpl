
<form id="form_list" class="form-horizontal" role="form" action="index.php" method="post">
        <div class="row">
			<div class="col-sm-9">
			{if $role_id == 1}
				<button class="btn-primary" value="Users" type="submit" name="submitButton">Users</button>
				<button class="btn-primary" value="Clinics" type="submit" name="submitButton">Clinics</button>
				<button class="btn-primary" value="UserInfo" type="submit" name="submitButton">Users Info</button>
				<button class="btn-primary" value="Reports" type="submit" name="submitButton">Reports</button>
				<button class="btn-primary" value="Exercises" type="submit" name="submitButton">Exercises</button>
				<button class="btn-primary" value="ExeSteps" type="submit" name="submitButton">Exe - Steps</button>
				<button class="btn-primary" value="Categories" type="submit" name="submitButton">Categories</button>
			{/if}
		
			<button class="btn-primary" value="Images" type="submit" name="submitButton">Images</button>
			<button class="btn-primary" value="Patients" type="submit" name="submitButton">Patients</button>
			</div>
        </div>
</form>

