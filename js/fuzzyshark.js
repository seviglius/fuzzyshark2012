$(".name").each(function(i) {
new Waypoint({
  element: document.getElementById('name-' + (i + 1)),
  handler: function(direction) {
    $("#featured-project-image-" + (i + 1)).toggle();
    $("#name-" + (i + 1)).toggleClass("underlined");
  },
  offset: '30%'
});

new Waypoint({
  element: document.getElementById('name-' + (i + 1)),
  handler: function(direction) {
    $("#featured-project-image-" + (i + 1)).toggle();
    $("#name-" + (i + 1)).toggleClass("underlined");
  },
  offset: '55%'
});
});

var target = $('#video-container');
var targetHeight = target.outerHeight();

$(document).scroll(function(e){
    var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
    if(scrollPercent >= 50){
        target.css('opacity', scrollPercent);
    }
});