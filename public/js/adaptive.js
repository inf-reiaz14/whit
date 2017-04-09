var selecteds;

var codeblock = {
    'col-xs-1' : '<div class="col-xs-1"></div>',
    'col-xs-2' : '<div class="col-xs-2"></div>',
    'col-xs-3' : '<div class="col-xs-3"></div>',
    'col-xs-4' : '<div class="col-xs-4"></div>',
    'col-xs-5' : '<div class="col-xs-5"></div>',
    'col-xs-6' : '<div class="col-xs-6"></div>',
    'col-xs-7' : '<div class="col-xs-7"></div>',
    'col-xs-8' : '<div class="col-xs-8"></div>',
    'col-xs-9' : '<div class="col-xs-9"></div>',
    'col-xs-10' : '<div class="col-xs-10"></div>',
    'col-xs-11' : '<div class="col-xs-11"></div>',
    'col-xs-12' : '<div class="col-xs-12"></div>',
    'col-sm-1' : '<div class="col-sm-1"></div>',
    'col-sm-2' : '<div class="col-sm-2"></div>',
    'col-sm-3' : '<div class="col-sm-3"></div>',
    'col-sm-4' : '<div class="col-sm-4"></div>',
    'col-sm-5' : '<div class="col-sm-5"></div>',
    'col-sm-6' : '<div class="col-sm-6"></div>',
    'col-sm-7' : '<div class="col-sm-7"></div>',
    'col-sm-8' : '<div class="col-sm-8"></div>',
    'col-sm-9' : '<div class="col-sm-9"></div>',
    'col-sm-10' : '<div class="col-sm-10"></div>',
    'col-sm-11' : '<div class="col-sm-11"></div>',
    'col-sm-12' : '<div class="col-sm-12"></div>',
    'col-md-1' : '<div class="col-md-1"></div>',
    'col-md-2' : '<div class="col-md-2"></div>',
    'col-md-3' : '<div class="col-md-3"></div>',
    'col-md-4' : '<div class="col-md-4"></div>',
    'col-md-5' : '<div class="col-md-5"></div>',
    'col-md-6' : '<div class="col-md-6"></div>',
    'col-md-7' : '<div class="col-md-7"></div>',
    'col-md-8' : '<div class="col-md-8"></div>',
    'col-md-9' : '<div class="col-md-9"></div>',
    'col-md-10' : '<div class="col-md-10"></div>',
    'col-md-11' : '<div class="col-md-11"></div>',
    'col-md-12' : '<div class="col-md-12"></div>',
    'col-lg-1' : '<div class="col-lg-1"></div>',
    'col-lg-2' : '<div class="col-lg-2"></div>',
    'col-lg-3' : '<div class="col-lg-3"></div>',
    'col-lg-4' : '<div class="col-lg-4"></div>',
    'col-lg-5' : '<div class="col-lg-5"></div>',
    'col-lg-6' : '<div class="col-lg-6"></div>',
    'col-lg-7' : '<div class="col-lg-7"></div>',
    'col-lg-8' : '<div class="col-lg-8"></div>',
    'col-lg-9' : '<div class="col-lg-9"></div>',
    'col-lg-10' : '<div class="col-lg-10"></div>',
    'col-lg-11' : '<div class="col-lg-11"></div>',
    'col-lg-12' : '<div class="col-lg-12"></div>',
    'row' : '<div class="row"></div>',
    'row-panel' : '<div class="row panel-body"></div>',
    'panel' : '<div class="panel panel-default"><div class="panel-head"><h4>Panel heading</h4></div><div class="panel-body">Panel body</div></div>',
};


jQuery.fn.css = (function(css2) { 
    return function() {
        if (arguments.length) { return css2.apply(this, arguments); }
        var attr = ['font-family','font-size','font-weight','font-style','color',
            'text-transform','text-decoration','letter-spacing','word-spacing',
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
        for (var i = 0; i < len; i++) {
          if(css2.call(this, attr[i]) != undefined){
            obj[attr[i]] = css2.call(this, attr[i]);
          }
        }
        return obj;
    };
})(jQuery.fn.css);


function Builder(){
    
    this.destroy    = function(){ $('.builder, .presentation').remove(); }
    
    this.build      = function(){
        $('body').append('\
        <section class="builder">\
            <ul>\
                <li><a><i class="fa fa-cog"></i></a>\
                    <ul>\
                        <li><input class="setter form-control" style="min-width: 100px" value="body" placeholder="Setter" />\
                            <select class="append_after form-control"><option value="prepend" selected>prepend</option><option value="append">append</option><option value="before">before</option><option value="after">after</option></select><i class="fa fa-check process-setter"></i>\
                        </li>\
                        <li><input class="getter form-control" style="min-width: 100px" value="" placeholder="Getter" /></li>\
                    </ul>\
                </li>\
                <li><a>Rows</a>\
                    <ul>\
                        <li><a block="panel">panel</a></li>\
                        <li><a block="row">row</a>\
                            <ul>\
                                <li><a block="row-panel">row-panel</a></li>\
                            </ul>\
                        </li>\
                        <li><a>col-xs</a>\
                            <ul>\
                                <li><a block="col-xs-1">col-xs-1</a></li>\
                                <li><a block="col-xs-2">col-xs-2</a></li>\
                                <li><a block="col-xs-3">col-xs-3</a></li>\
                                <li><a block="col-xs-4">col-xs-4</a></li>\
                                <li><a block="col-xs-5">col-xs-5</a></li>\
                                <li><a block="col-xs-6">col-xs-6</a></li>\
                                <li><a block="col-xs-7">col-xs-7</a></li>\
                                <li><a block="col-xs-8">col-xs-8</a></li>\
                                <li><a block="col-xs-9">col-xs-9</a></li>\
                                <li><a block="col-xs-10">col-xs-10</a></li>\
                                <li><a block="col-xs-11">col-xs-11</a></li>\
                                <li><a block="col-xs-12">col-xs-12</a></li>\
                            </ul>\
                        </li>\
                        <li><a>col-sm</a>\
                        <ul>\
                                <li><a block="col-sm-1">col-sm-1</a></li>\
                                <li><a block="col-sm-2">col-sm-2</a></li>\
                                <li><a block="col-sm-3">col-sm-3</a></li>\
                                <li><a block="col-sm-4">col-sm-4</a></li>\
                                <li><a block="col-sm-5">col-sm-5</a></li>\
                                <li><a block="col-sm-6">col-sm-6</a></li>\
                                <li><a block="col-sm-7">col-sm-7</a></li>\
                                <li><a block="col-sm-8">col-sm-8</a></li>\
                                <li><a block="col-sm-9">col-sm-9</a></li>\
                                <li><a block="col-sm-10">col-sm-10</a></li>\
                                <li><a block="col-sm-11">col-sm-11</a></li>\
                                <li><a block="col-sm-12">col-sm-12</a></li>\
                            </ul>\
                        </li>\
                        <li><a>col-md</a>\
                        <ul>\
                                <li><a block="col-md-1">col-md-1</a></li>\
                                <li><a block="col-md-2">col-md-2</a></li>\
                                <li><a block="col-md-3">col-md-3</a></li>\
                                <li><a block="col-md-4">col-md-4</a></li>\
                                <li><a block="col-md-5">col-md-5</a></li>\
                                <li><a block="col-md-6">col-md-6</a></li>\
                                <li><a block="col-md-7">col-md-7</a></li>\
                                <li><a block="col-md-8">col-md-8</a></li>\
                                <li><a block="col-md-9">col-md-9</a></li>\
                                <li><a block="col-md-10">col-md-10</a></li>\
                                <li><a block="col-md-11">col-md-11</a></li>\
                                <li><a block="col-md-12">col-md-12</a></li>\
                            </ul>\
                        </li>\
                        <li><a>col-lg</a>\
                        <ul>\
                                <li><a block="col-lg-1">col-lg-1</a></li>\
                                <li><a block="col-lg-2">col-lg-2</a></li>\
                                <li><a block="col-lg-3">col-lg-3</a></li>\
                                <li><a block="col-lg-4">col-lg-4</a></li>\
                                <li><a block="col-lg-5">col-lg-5</a></li>\
                                <li><a block="col-lg-6">col-lg-6</a></li>\
                                <li><a block="col-lg-7">col-lg-7</a></li>\
                                <li><a block="col-lg-8">col-lg-8</a></li>\
                                <li><a block="col-lg-9">col-lg-9</a></li>\
                                <li><a block="col-lg-10">col-lg-10</a></li>\
                                <li><a block="col-lg-11">col-lg-11</a></li>\
                                <li><a block="col-lg-12">col-lg-12</a></li>\
                            </ul>\
                        </li>\
                    </ul>\
                </li>\
                <li><a>Nav3</a></li>\
                <li><a>Nav3</a>\
                    <ul>\
                        <li><a>Nav1</a></li>\
                        <li><a>Nav2</a></li>\
                        <li><a>Nav3</a>\
                            <ul>\
                                <li><a>Nav1</a></li>\
                                <li><a>Nav2</a></li>\
                                <li><a>Nav3</a></li>\
                            </ul>\
                        </li>\
                    </ul>\
                </li>\
            </ul>\
        </section>\
        <section class="presentation draggable">\
            <h4><a class="pull-right handle"><i class="fa fa-bars"></i></a></h4>\
            <pre class="selected"></pre>\
            <textarea class="prepared"></textarea>\
        </section>\
        ');
        
        
    }
    
    this.styleit    = function(){
        
        $('.builder').css({
            'position': 'fixed',
            'bottom': '0px',
            'left': '0px',
            'width': '100%',
            'color': '#444444'
        });
        
        $('.builder a, .builder p').css({
            'color': '#444444',
            'font-size': '12px'
        });
        
        $('.builder > ul').css({
            'list-style': 'none',
            'margin': '0',
            'padding': '0',
            'border': '0px transparent',
            'text-align': 'center',
            'font-size': '22px',
            'position': 'fixed',
            'bottom': '0',
            'width': '100%',
        });
        
        $('.builder > ul > li').css({
            'display': 'inline',
            'list-style': 'none',
            'margin': '0',
            'padding': '0',
            'position': 'relative',
            'bottom' : '0px',
            'color': '#444444'
        });
        
        $('.builder > ul > li > ul').css({
            'position' : 'absolute',
            'bottom' : '35px',
            'left' : '0px',
            'margin' : '0px',
            'padding' : '0px',
            'display' : 'none',
            'max-height' : '400px',
            'overflow' : 'scroll',
        });
        
        //$('.builder > ul > li').hover(function(){$(this).children('ul').toggle();});
        $('.builder > ul > li').mouseenter(function(){$(this).children('ul').css({'display': 'inline-table'});}).mouseleave(function(){$(this).children('ul').css({'display': 'none'});});
        $('.builder > ul > li > ul > li').mouseenter(function(){$(this).children('ul').css({'display': 'inline-flex'});}).mouseleave(function(){$(this).children('ul').css({'display': 'none'});});
        
        $('.builder > ul > li > ul > li').css({
            'list-style' : 'none',
            'color': '#444444',
            'position': 'relative'
        });
        
        $('.builder > ul > li > ul > li > ul').css({
            'position' : 'absolute',
            'top' : '0px',
            'left' : '100%',
            'margin' : '0px',
            'padding' : '0px',
            'display' : 'none',
            'max-width' : '300px',
            'overflow' : 'scroll',
        });
        
        $('.builder > ul > li > ul > li > ul > li').css({
            'list-style' : 'none',
            'display' : 'inline-table',
        });
        
        $('.builder li').css({
            'padding' : '5px 15px',
            'border' : '1px solid #ccc'
        });
        
        $('.presentation').css({
            'position': 'fixed',
            'top': '0',
            'left': '0',
            'background-color': 'transparent',
            'min-width': '300px',
            'min-height': '400px',
            'font-size': '8px',
        });
        
        $('.presentation .prepared, .presentation .selected').css({
            'width': '100%',
            'margin': '0 auto',
            'height': '200px',
            'background-color': '#111',
            'overflow': 'scroll',
            'display': 'block',
            'color': '#ddd',
            'padding': '5px',
            'font-size': '8px',
            'white-space': 'pre-wrap',
            'white-space': '-moz-pre-wrap',
            'white-space': '-o-pre-wrap',
            'word-wrap': 'break-word',
        });
        
        $('.presentation .prepared').css({
            'background-color': 'rgb(31,27,1)',
        });
        
        $('.presentation h4').css({
            'background-color': 'green',
            'display': 'flex',
            'margin': '0',
            'padding': '1px 5px',
        });
        
    }
    
}

$(document).ready(function(){
    
    var arc = new Builder;
    
    Mousetrap.bind(['alt+i', 'option+i'], function(){ arc.destroy(); arc.build(); arc.styleit(); });
    Mousetrap.bind(['alt+x', 'option+x'], function(){ arc.destroy(); });
    
    
    $(document).on({
        click: function(e){
            e.preventDefault(); $('.presentation pre, .presentation textarea').toggle();
        }
    },'.presentation .handle');
    
    /**
     * 
     * Resizables
     * 
    */
    
    // resizable Items
    // var resizables = 'input, img, botton';
    // //var resizables = '';

    // $(resizables).each(function (i) {
    //   $(this).click(function () {
    //     $(this).resizable({
    //       distance: 0,
    //       ghost: true
    //     });
    //   });
    // });
    
    $(document).on({
        click: function(){
            $(this).draggable();
        }
    },'.draggable');
    
    
    $(document).on({
        keyup: function(){
            selecteds = $($('input.setter').val());
        }
    }, '.setter');
    
    
    $(document).on({
        keyup: function(){
            $('.selected').text($($('input.getter').val()).html());
        }
    }, '.getter');
    
    $(document).on({
        click: function(){
            $('.prepared').val(codeblock[$(this).attr('block')]);
        }
    }, '[block]');
    
    $(document).on({
        click: function(){
            
            switch ($('.append_after option:selected').val()){
                
                case 'prepend': $(selecteds.context).prepend($('.prepared').val());
                    break;
                case 'append': $(selecteds.context).append($('.prepared').val());
                    break;
                case 'before': $(selecteds.context).before($('.prepared').val());
                    break;
                case 'after': $(selecteds.context).after($('.prepared').val());
                    break;
                
            }
            
        }
    },'.process-setter');
    
    $('body * :not(.builder, .presentation)').on({click:function(e){ selecteds = $(e.target).closest(); $(document).find('.selected').text(selecteds.context.outerHTML);}});

    
});