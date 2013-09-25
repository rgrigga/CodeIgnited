
  function fixMyOverlap(){
    $('.admin-top').css({'margin-top':($('.user-top').height()+0)+'px'});
    $('.content-wrap') .css({'padding-top': (
        $('.user-top').height()
         + $('.admin-top').height()
         + 0 )+'px'
        });
  }
  $(document).ready(function(){
    fixMyOverlap();
    // $('pre').addClass('prettyprint');
  });
  $(window).resize(function(){
    fixMyOverlap();
  });

window.onload = function()
    {
        // alert('bam!');
        if(!window.jQuery)
        {
            alert('jQuery not loaded');
        }
        else
        {
             // alert('jQuery is definitely loaded');
        }
    }

$(document).ready(function(){
  $('pre').addClass('prettyprint');
  $('.carousel-inner > .item:first').addClass('active');
});