    <div id="step-1" class="story-step pre-form-container">
      <div class="container">
        <form id="pre-story-form" class="clearfix">
        
        <div class="row panel">
          <div class="col-sm-12">
            <h6 class="text-center">Wat is uw naam en geboortedatum?</h6>
            <input name="name" id="name" class="form-control" type="text" value="" placeholder="Naam">
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
            <h6 class="text-center">Over welk welk object gaat het?</h6>
            <div class="form-group">
              <input name="object" id="object" class="form-control" type="text" />
            </div><!-- .form-group -->
          </div><!-- .col-sm-12 -->
        </div><!-- .row .panel -->
        
        <div class="row panel">
          <div class="col-sm-12">
            <h6 class="text-center">Waar speelt het verhaal zich af?</h6>
            <div class="form-group">
              <select name="location" class="select-block">
                <option value="Thuis">Thuis</option>
                <option value="Onderweg">Onderweg</option>
                <option value="Op werk">Op werk</option>
                <option value="Op school">Op school</option>
                <option value="In de natuur">In de natuur</option>
                <option value="In de stad">In de stad</option>
                <option value="Op de Camping">Op de Camping</option>
                <option value="other">Anders...</option>
              </select>
              <input name="location-other" id="location-other" class="form-control hidden" type="text" />
            </div><!-- .form-group -->
          </div><!-- .col-sm-12 -->
        </div><!-- .row .panel -->
        
        <div class="row panel">
          <div class="col-sm-12">
            <h6 class="text-center">Wie zijn de hoofdrolspelers?</h6>
            <div class="form-group">
              <select name="lead" class="select-block">
                <option value="Familie">Familie</option>
                <option value="Collegas">Collegas</option>
                <option value="Vrienden">Vrienden</option>
                <option value="Huisdieren">Huisdieren</option>
                <option value="Buren">Buren</option>
                <option value="Vreemden">Vreemden</option>
                <option value="Ambtenaren">Ambtenaren</option>
                <option value="other">Anders...</option>
              </select>
              <input name="lead-other" id="lead-other" class="form-control hidden" type="text" />
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
              <div class="col-sm-6 text-right">
                Blij
              </div>
              <div class="col-sm-6">
                <div class="control-group">
                  <input name="character1" class="inputNumber" hidden="hidden" value="3" />
                  <div class="input-slider" class="ui-slider"></div> 
                </div>
              </div><!-- .col-sm-12 -->
            </div><!-- .row -->

            <div class="row">
              <div class="col-sm-6 text-right">
                Historische relevantie
              </div>
              <div class="col-sm-6">
                <div class="control-group">
                  <input name="character2" class="inputNumber" hidden="hidden" value="3" />
                  <div class="input-slider" class="ui-slider"></div> 
                </div>
              </div><!-- .col-sm-12 -->
            </div><!-- .row -->

            <div class="row">
              <div class="col-sm-6 text-right">
                Vermakelijk
              </div>
              <div class="col-sm-6">
                <div class="control-group">
                  <input name="character3" class="inputNumber" hidden="hidden" value="3" />
                  <div class="input-slider" class="ui-slider"></div> 
                </div>
              </div><!-- .col-sm-12 -->
            </div><!-- .row -->
            
          </div><!-- .col-sm-12 -->
        </div><!-- .row .panel -->
                
        <div class="row panel">
          <div class="col-sm-12">
            <h6 class="text-center">&nbsp;</h6>
            <div class="control-group text-center">
              <button class="btn btn-hg btn-primary submit">Volgende</button>
            </div>
          </div><!-- .col-sm-12 -->
        </div><!-- .row .panel -->

        
      </form>
      </div><!-- .container -->
    </div><!-- .pre-form-container -->
