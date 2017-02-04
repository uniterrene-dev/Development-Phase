                    <div class="col-md-4">
                        <h2>Add/Edit Clinic details </h2>
                        <p>Please enter there Clinic details below</p>
                        <div class="container-fluid">
                            <input type="hidden" id="clinic_id" name="clinic_id">
                            <div class="form-group">
                                <label for="registration" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="name" name="name" class="form-control"  required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="registration"  class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" id="email" name="email" class="form-control"  required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="registration"  class="col-sm-3 control-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" id="phone" name="phone" class="form-control"  required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" id="address" name="address" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-sm-3 control-label">Site</label>
                                <div class="col-sm-9">
                                    <input type="text" id="site" name="site" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-sm-3 control-label">Logo</label>
                                <div class="col-sm-9">
				    <span id="preview"></span>
                                    <input type="file" id="logo" name="logo" onchange="displayPreview(this.files);"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9">
                            	    <input type="hidden" id="actoin" name="action" value="add_clinic">
                                    <button class="btn btn-lg btn-success" id="submitNewBtn" type="button" value="add_clinic">Submit</button>
                                </div>
                            </div>
			</div>
		    </div>

<script>
var _URL = window.URL || window.webkitURL;
function displayPreview(files) {
   var file = files[0]
   var img = new Image();
   var sizeKB = file.size / 1024;
   document.getElementById("preview").innerHTML="";
   img.onload = function() {
     
      $('#preview').append(img);
      alert("Size: " + sizeKB + "KB\nWidth: " + img.width + "\nHeight: " + img.height);
   }
   img.src = _URL.createObjectURL(file);
}
</script>

