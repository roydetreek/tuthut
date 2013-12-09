<?php
  $file = explode(".",basename (__FILE__));
  $file = $file[0];
  require_once('inc/header.php');
?>
    
    <div class="form-container">
      <div class="container">
        <form class="clearfix" action="post.php" method="post">
        
        <div class="row panel">
          <div class="col-sm-12">
            <h6 class="text-center">Wat is uw naam en geboortedatum?</h6>
            <input name="name" class="form-control" type="text" value="" placeholder="Naam">
            <br/>
            <div class="control-group">
              <div class="row">
                <div class="col-sm-4">
                  <input type="text" style="width:100%" class="spinner form-control" id="dob-d" value="1" data-min="1" data-max="31" name="dob-d" />
                </div>
                <div class="col-sm-4">
                  <input type="text" style="width:100%" class="spinner form-control" id="dob-m" value="1" data-min="1" data-max="12" name="dob-m" />
                </div>
                <div class="col-sm-4">
                  <input type="text" style="width:100%" class="spinner form-control" id="dob-y" value="80" data-min="1900" data-max="2013" name="dob-y" />
                </div>
              </div>
            </div>
          </div><!-- .col-sm-12 -->
        </div><!-- .row .panel -->
        
        <div class="row panel">
          <div class="col-sm-12">
            <h6 class="text-center">Waar gaat het verhaal in één woord over?</h6>
            <div class="form-group">
              <input name="subject" class="form-control" type="text" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
            </div><!-- .form-group -->
          </div><!-- .col-sm-12 -->
        </div><!-- .row .panel -->
        
        <div class="row panel">
          <div class="col-sm-12">
            <h6 class="text-center">Waar speelt het verhaal zich af?</h6>
            <div class="form-group">
              <select name="location[]" multiple="multiple" class="select-block">
                <option value="Thuis">Thuis</option>
                <option value="Onderweg">Onderweg</option>
                <option value="Op werk">Op werk</option>
                <option value="Op school">Op school</option>
                <option value="In de natuur">In de natuur</option>
                <option value="In de stad">In de stad</option>
                <option value="Op de Camping">Op de Camping</option>
              </select>
            </div><!-- .form-group -->
          </div><!-- .col-sm-12 -->
        </div><!-- .row .panel -->
        
        <div class="row panel">
          <div class="col-sm-12">
            <h6 class="text-center">Wie zijn de hoofdrolspelers?</h6>
            <div class="form-group">
              <select name="lead[]" multiple="multiple" class="select-block">
                <option value="Familie">Familie</option>
                <option value="Collegas">Collegas</option>
                <option value="Vrienden">Vrienden</option>
                <option value="Huisdieren">Huisdieren</option>
                <option value="Buren">Buren</option>
                <option value="Vreemden">Vreemden</option>
                <option value="Ambtenaren">Ambtenaren</option>
              </select>
            </div><!-- .form-group -->
          </div><!-- .col-sm-12 -->
        </div><!-- .row .panel -->
        
        <div class="row panel">
          <div class="col-sm-12">
            <h6 class="text-center">In welk jaar speelt het verhaal zich af?</h6>
            <div class="control-group text-center">
              <input name="year" style="width:100px" type="text" class="spinner form-control" id="year" value="2013" data-min="1900" data-max="2013" />
            </div>
          </div><!-- .col-sm-12 -->
        </div><!-- .row .panel -->
        
        <div class="row panel">
          <div class="col-sm-12">
            <h6 class="text-center">Wat is het karakter van het verhaal?</h6>
            
            <div class="row">
              <div class="col-sm-3 text-right">
                Blij
              </div>
              <div class="col-sm-6">
                <div class="control-group">
                  <input name="happy" class="inputNumber" hidden="hidden" value="3" />
                  <div class="slider" class="ui-slider"></div> 
                </div>
              </div><!-- .col-sm-12 -->
              <div class="col-sm-3 text-left">
                Verdrietig
              </div>
            </div><!-- .row -->

            <div class="row">
              <div class="col-sm-3 text-right">
                Gelukkig
              </div>
              <div class="col-sm-6">
                <div class="control-group">
                  <input name="happyness" class="inputNumber" hidden="hidden" value="3" />
                  <div class="slider" class="ui-slider"></div> 
                </div>
              </div><!-- .col-sm-12 -->
              <div class="col-sm-3 text-left">
                Ongelukkig
              </div>
            </div><!-- .row -->

            <div class="row">
              <div class="col-sm-3 text-right">
                Vermakelijk
              </div>
              <div class="col-sm-6">
                <div class="control-group">
                  <input name="fun" class="inputNumber" hidden="hidden" value="3" />
                  <div class="slider" class="ui-slider"></div> 
                </div>
              </div><!-- .col-sm-12 -->
              <div class="col-sm-3 text-left">
                Interessant
              </div>
            </div><!-- .row -->
            
          </div><!-- .col-sm-12 -->
        </div><!-- .row .panel -->
                
        <div class="row panel">
          <div class="col-sm-12">
            <h6 class="text-center">&nbsp;</h6>
            <div class="control-group text-center">
              <button class="btn btn-hg btn-primary">
                Sla op
              </button>
            </div>
          </div><!-- .col-sm-12 -->
        </div><!-- .row .panel -->

        
      </form>
      </div><!-- .container -->
    </div><!-- .row -->
<?php
  require_once('inc/footer.php');
?>