(function( $ ) {

var TPL = '<ul class="sharebar" role="navigation">' +
                '<li class="facebook"></li>' +
                '<li class="twitter"></li>' +
                '<li class="google"></li>' +
                '<li class="linkedin"></li>' +
            '</ul>',
    shareWindowOptions = "status=0,toolbar=0, width=500, height=500",
    CALLBACKS = {
        email : {
            callback: function(title, link) {
                window.location.href = 'mailto:?subject=' + title + '&body=Please, follow the link ' + link;
            }
        },
        google : {
            callback: function(title, link) {
                window.open('https://m.google.com/app/plus/x/?v=compose&content=I like this ' + link , null, shareWindowOptions);
            }
        },
        twitter : {
            callback: function(title, link) {
                window.open("http://twitthat.com/go?url=" + link + "&title=" + title, null, shareWindowOptions);
            }
        },
        facebook : {
            callback: function(title, link) {
                window.open("http://www.facebook.com/sharer.php?u=" + link + "&t=" + title, null, shareWindowOptions);
            }
        },
        linkedin : {
            callback: function(title, link) {
                window.open("http://www.linkedin.com/shareArticle?mini=true&url=" + link + "&title=" + title, null, shareWindowOptions);
            }
        },
        digg : {
            callback: function(title, link) {
                window.open("http://digg.com/submit?phase=2&title=" + title+ "&url=" + link, null, shareWindowOptions);
            }
        }
    };
// Document is ready
$(document).bind('ready.app', function() {
   var  srcInfo = $('head > link[rel=demo]'),
        boundingBox, callback;
   if (srcInfo.length) {
       $('body').append('<link href="http://demo.dsheiko.com/share/assets/sharebar.css" rel="stylesheet" media="all" />');
       boundingBox = $(TPL).appendTo($('body > header > div'));
       boundingBox.find('li').unbind('click').bind('click', function(e) {
           e.preventDefault();
           callback = CALLBACKS[$(this).attr('class')];
           if(typeof callback !== undefined) {
               callback.callback(srcInfo.attr('title'), srcInfo.attr('href'));
           }
       });
   }
});
})( jQuery );