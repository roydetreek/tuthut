<?php
  $file = explode(".",basename (__FILE__));
  $file = $file[0];
  require_once('inc/header.php');
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 text-center">
        <h3>Koffer IP:</h3>
        
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="form-group has-success" style="margin-bottom:0;">
              <input type="text" value="<?php echo getHostByName(getHostName()); ?>" class="form-control input-hg text-center">
              <span class="input-icon fui-check-inverted"></span>
            </div>
            <small style="color:#999;">Gebruik dit IP om de iPad te verbinden met deze koffer</small>
          </div>
        </div>
        <br/>
        <br/>
        <br/>
        <br/>

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