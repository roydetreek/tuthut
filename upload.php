<?php
  $file = explode(".",basename (__FILE__));
  $file = $file[0];
  require_once('inc/header.php');
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 text-center">
        <p style="color:#999;">Upload alle Koffer Stories naar kofferstory.org:</p>
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <button type="Submit" name="copyfiles" class="btn btn-primary btn-hg btn-block" onclick="viewUpload()">
              <span class="fui-upload"></span> 
              Start Upload
            </button>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  <script>
  function viewUpload(){
    window.open(SITEURL+"/fileupload.php","_blank","toolbar=yes, scrollbars=yes, resizable=yes, top=200, left=500, width=400, height=600");
    return false;
  }
  </script>

<?php
  require_once('inc/footer.php');
?>