jQuery.fn.css2 = jQuery.fn.css;
jQuery.fn.css = function() {
    if (arguments.length) return jQuery.fn.css2.apply(this, arguments);
    var attr = ['font-family','font-size','font-weight','font-style','color',
        'text-transform','text-decoration','letter-spacing', 'box-shadow',
        'line-height','text-align','vertical-align','direction','background-color',
        'background-image','background-repeat','background-position',
        'background-attachment','opacity','width','height','top','right','bottom',
        'left','margin-top','margin-right','margin-bottom','margin-left',
        'padding-top','padding-right','padding-bottom','padding-left',
        'border-top-width','border-right-width','border-bottom-width',
        'border-left-width','border-top-color','border-right-color',
        'border-bottom-color','border-left-color','border-top-style',
        'border-right-style','border-bottom-style','border-left-style','position',
        'display','visibility','z-index','overflow-x','overflow-y','white-space',
        'clip','float','clear','cursor','list-style-image','list-style-position',
        'list-style-type','marker-offset'];
    var len = attr.length, obj = {};
    for (var i = 0; i < len; i++) 
        obj[attr[i]] = jQuery.fn.css2.call(this, attr[i]);
    return obj;
};
$(function(){
    $('textarea').keyup(function () {
        var t = $(this);
        
        if (!this.justifyDoc) {
            this.justifyDoc = $(document.createElement('div'));
            // copy css
            this.justifyDoc.css(t.css()).css({
                'display'   :   'none',
                'word-wrap' :   'break-word',
                'min-height':   t.height(),
                'height'    :   'auto'
            }).insertAfter(t.css('overflow-y', 'hidden'));
        }

        var html = t.val().replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/'/g, '&#039;')
            .replace(/"/g, '&quot;')
            .replace(/ /g, '&nbsp;')
            .replace(/((&nbsp;)*)&nbsp;/g, '$1 ')
            .replace(/\n/g, '<br />')
            .replace(/<br \/>[ ]*$/, '<br />-')
            .replace(/<br \/> /g, '<br />&nbsp;');

        this.justifyDoc.html(html);
        t.height(this.justifyDoc.height());
    });
    $.pjax({
        selector: "a:not(#comments a)",
        container: '.main', //内容替换的容器
        show: 'fade',  //展现的动画，支持默认和fade, 可以自定义动画方式，这里为自定义的function即可。
        cache: false,  //是否使用缓存
        storage: true,  //是否使用本地存储
        titleSuffix: ' | Umotion', //标题后缀
        filter: function(){},
        callback: function(status){
            prettyPrint();
        }
    }); 
        //绑定跳转开始事件
    $(".main").bind("pjax.start",
         function() { 
            NProgress.start();
     });
        //绑定跳转结束事件
    $(".main").bind("pjax.end",
         function() {
            NProgress.done();
     }); 
    
    $(document).on('focus', '#comment-form input, #comment-form textarea', function(event) {
        $(this).parent().find('label').addClass('red');
    })
    .on('blur', '#comment-form input, #comment-form textarea', function(event) {
        $(this).parent().find('label').removeClass('red');
    });

});   