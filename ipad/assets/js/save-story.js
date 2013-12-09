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


