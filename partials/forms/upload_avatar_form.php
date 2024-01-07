<form 
  id="avatar-form"
  class="file-form avatar-form"
  action="../server/avatar_handler.php"
  method="post"
  enctype="multipart/form-data"
>
  <label class="form-label" for="new-avatar">
  Select an Image to use as an avatar.
  </label>
  <input
  type="file"
  id="avatar-input"
  name="new_avatar"
  class="form-control 
         form-control-file 
         form-control-avatar"
  />
  <input 
    type="submit"
    id="submit-avatar" 
    class="btn btn-submit btn-avatar"
    value="Upload" />
</form>