(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {
        //Custom Dropdown List
        function DropDown(el) {
            this.dd = el;
            this.placeholder = this.dd.children('span.single-filter-dropdown');
            this.opts = this.dd.find('ul.dropdown > li');
            this.val = '';
            this.index = -1;
            this.initEvents();
        }
        DropDown.prototype = {
            initEvents: function () {
                var obj = this;

                obj.dd.on('click', function (event) {
                    $(this).toggleClass('active');
                    return false;
                });

                obj.opts.on('click', function () {
                    var opt = $(this);
                    obj.val = opt.text();
                    obj.index = opt.index();
                    obj.placeholder.text(obj.val);
                });
            },
            getValue: function () {
                return this.val;
            },
            getIndex: function () {
                return this.index;
            }
        }

        var dd = new DropDown($('#dd'));

        $(document).click(function () {
            // all dropdowns
            $('.project-filter-list.update1').removeClass('active');
        });

    });


}(jQuery));