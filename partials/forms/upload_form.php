<form 
  id="upload-form"
  class="file-form storage-form"
  method="post"
  enctype="multipart/form-data"
  action="../server/upload_handler.php">
  <label for="uploaded_file">
    Select a file to upload: 
  </label>
  <input type="file" 
    id="file-input" 
    class="form-control form-control-file"
    name="uploaded_file"
    required />
  <input type="submit" 
    id="btn-file" 
    class="btn btn-submit"
    value="Upload" 
    required />
</form>