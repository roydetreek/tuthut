// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var KofferStory = {
  // All pages
  common: {
    init: function() {
      // JS here
    },
    finalize: function() { }
  },
  // Home page
  index: {
    init: function() {
      // JS here
    }
  },
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = KofferStory;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

$(document).ready(UTIL.loadEvents);

// Some general UI pack related JS
// Extend JS String with repeat method
String.prototype.repeat = function(num) {
  return new Array(num + 1).join(this);
};


var currentStep = 0;

function nextStep(){
  currentStep++;
  $("div[id^='step-']").hide();
  $("div[id='step-"+currentStep+"']").show();
}



(function($) {

  nextStep();
  $("div[id^='step-'] button.submit").click(function(e){
    e.preventDefault();
    nextStep();
  });

  // jQuery UI Spinner
  $.widget( "ui.customspinner", $.ui.spinner, {
    widgetEventPrefix: $.ui.spinner.prototype.widgetEventPrefix,
    _buttonHtml: function() { // Remove arrows on the buttons
      return "" +
      "<a class='ui-spinner-button ui-spinner-up ui-corner-tr'>" +
        "<span class='ui-icon " + this.options.icons.up + "'></span>" +
      "</a>" +
      "<a class='ui-spinner-button ui-spinner-down ui-corner-br'>" +
        "<span class='ui-icon " + this.options.icons.down + "'></span>" +
      "</a>";
    }
  });

  $('#spinner-01, .spinner').customspinner({
    min: $(this).data("min"),
    max: $(this).data("max")
  }).on('focus', function () {
    $(this).closest('.ui-spinner').addClass('focus');
  }).on('blur', function () {
    $(this).closest('.ui-spinner').removeClass('focus');
  });


  $("select").selectpicker({style: 'btn-hg btn-primary', menuStyle: 'dropdown-inverse'});
  
  var $inputSlider = $(".input-slider");
  if ($inputSlider.length > 0) {
    $inputSlider.slider({
      min: 1,
      max: 5,
      value: 3,
      range: 'min',
      orientation: "horizontal",
      slide: function (event, ui) {
        $(this).parent().find(".inputNumber").val(ui.value);
      },
      create: function(event, ui){
        $(this).slider('value',$(this).parent().find(".inputNumber").val());
      }
    });
  }        
})(jQuery);
function saveStory(filename){
  // get form data and include value from submit button
  console.log($(this).find("#maxYear"));
  var post_data = { videosource : filename,
                    audiosource : filename,
                    title       : $("#post-story-form #title").val(),
                    description : $("#post-story-form #description").val(),
                    name        : $("#pre-story-form #name").val(),
                    dob         : $("#pre-story-form #dob-d").val()+"-"+$("#pre-story-form #dob-m").val()+"-"+$("#pre-story-form #dob-y").val(),
                    object      : $("#pre-story-form #object").val(),
                    location    : ($("#pre-story-form #location").val() != 'other' ? $("#pre-story-form #name").val() : $("#pre-story-form #name-other").val()),
                    lead        : ($("#pre-story-form #lead").val() != 'other' ? $("#pre-story-form #name").val() : $("#pre-story-form #lead-other").val()),
                    year        : $("#pre-story-form #year").val(),
                    character1  : $("#pre-story-form #character1").val(),
                    character2  : $("#pre-story-form #character2").val(),
                    character3  : $("#pre-story-form #character3").val()};
                    
                    
                    
  $('#storyContainer').html('<h5>Loading...</h5>');
  getVideos(post_data).done(function(data){  
    $('#storyContainer').html('');
    $(data.result).each(function(index){
      var $item = $('<div class="col-sm-6 col-md-4">'+
                        '<div class="thumbnail" data-video-src="'+this.Videosource+'" data-audio-src="'+this.AudioSource+'"><a href="story.php?id='+this.ID+'">'+
                          '<img src="'+this.images[0]+'" alt="">'+
                          '<div class="caption">'+
                            '<strong>'+this.Title+'</strong>'+
                          '</div>'+
                        '</a></div>'+
                      '</div>');
      
      $('#storyContainer').append($item);
    });
  });
  
}


