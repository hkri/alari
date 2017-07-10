var curtain = document.createElement('div');
curtain.className = 'loading-curtain';
document.body.insertBefore(curtain, document.body.childNodes[0]);

var wnd = $(window);
var hero = $('#hero-div');
var section = $('.page-section');

var tl = new TimelineLite();
tl.set(hero, {opacity:0, top:-50, ease:Sine.easeOut});
section.each(function(index) {
  TweenLite.set($(this), {opacity:0, top:50});
});

function slideSections() {
  var st = wnd.scrollTop();
  var wh = wnd.height();
  section.each(function(index) {
    var ltop = $(this).offset().top - st;
    var $el = $(this);
    if ((ltop <= (wh * 7 / 8)) && ($el.hasClass('tl-done') === false)) {
      TweenLite.to($el, 0.75, {opacity:1, top:0, ease:Sine.easeOut});
      $el.addClass('tl-done');
    }
  });
}

wnd.on('scroll', function() {slideSections();});
wnd.on('load', function() {
  tl.to(hero, .75, {opacity:1, top:0, ease:Sine.easeOut});
  slideSections();
});
