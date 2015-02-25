var panelPlugin = {
    init: function(options) {
        var self = this;
        var opt = {

        };
        self.options = $.extend(opt, options);
        self.prevent();
        self.addListener(); 
    },
    openPanel: function() {
        var self = this;
        self.options.element.addClass('active');
        $(document).on('mousewheel', function(event) {
            event.preventDefault();
        });
        $('.dim').fadeIn();
    },
    closePanel: function() {
        var self = this;
        self.options.element.removeClass('active');
        $(document).off('mousewheel');
        $('.dim').fadeOut();
    },
    prevent: function() {
        var self = this;
        self.options.element.on('click', function(event) {
            event.stopPropagation();
        });
        self.options.openBtn.on('click', function(event) {
            event.stopPropagation();
        });
    },
    addListener: function() {
        var self = this;
        self.options.openBtn.on('click', function(event) {
            self.openPanel();
        });
        self.options.closeBtn.on('click',function(event) {
            self.closePanel();
        });
        $('body').on('click', function(event) {
            self.closePanel(); 
        });
    }
};
