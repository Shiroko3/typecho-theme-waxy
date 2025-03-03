<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span> Copyright &copy; <?php echo date("Y"); ?> <a href="<?php $this->options->siteUrl(); ?>" target="_blank"><?php $this->options->title(); ?></a></span><br />
                    <span>Powered by <a rel="noopener" href="https://typecho.org/" target="_blank">Typecho</a> | Theme by <a rel="noopener" href="https://github.com/dingzd1995/typecho-theme-waxy" target="_blank">Waxy</a><?php add_ICP($this); ?></span><br />
                </div>
            </div>
        </div>
    </div>

    <a id="back-to-top"><i class="glyphicon glyphicon-menu-up"></i></a>
    
    <!--75cdn-->
    <?php if (strcmp($this->options->CDN,"75cdn")==0): ?>
    <script src="//lib.baomitu.com/jquery/3.1.1/jquery.min.js"></script>
    <script src="//lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//lib.baomitu.com/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="//lib.baomitu.com/jquery.lazyload/1.8.4/jquery.lazyload.min.js"></script>
    <?php endif; ?>
    <!--75cdn END-->

    <!--cdnjs-->
    <?php if (strcmp($this->options->CDN,"cdnjs")==0): ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.8.4/jquery.lazyload.min.js"></script>
    <?php endif; ?>
    <!--cdnjs END-->
	
    <!--zstatic-->
    <?php if (strcmp($this->options->CDN,"zstatic")==0): ?>
    <script src="//s4.zstatic.net/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="//s4.zstatic.net/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//s4.zstatic.net/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="//s4.zstatic.net/ajax/libs/jquery.lazyload/1.8.4/jquery.lazyload.min.js"></script>
    <?php endif; ?>
    <!--zstatic END-->
    
    <!--snrat-->
    <?php if (strcmp($this->options->CDN,"snrat")==0): ?>
    <script src="//cdnjs.snrat.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdnjs.snrat.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdnjs.snrat.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="//cdnjs.snrat.com/ajax/libs/jquery.lazyload/1.8.4/jquery.lazyload.min.js"></script>
    <?php endif; ?>
    <!--snrat END-->
    
    <!--jsdmirror-->
    <?php if (strcmp($this->options->CDN,"jsdmirror")==0): ?>
    <script src="//cdn.jsdmirror.com/gh/jquery/jquery@3.1.1/dist/jquery.min.js"></script>
    <script src="//cdn.jsdmirror.com/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdmirror.com/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="//cdn.jsdmirror.com/npm/lazyload@1.8.4/jquery.lazyload.min.js"></script>
    <?php endif; ?>
    <!--jsdmirror END-->
    
    <!--fastly-->
    <?php if (strcmp($this->options->CDN,"fastly")==0): ?>
    <script src="//fastly.jsdelivr.net/gh/jquery/jquery@3.1.1/dist/jquery.min.js"></script>
    <script src="//fastly.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="//fastly.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="//fastly.jsdelivr.net/npm/lazyload@1.8.4/jquery.lazyload.min.js"></script>
    <?php endif; ?>
    <!--fastly END-->
    
    <!--gcore-->
    <?php if (strcmp($this->options->CDN,"gcore")==0): ?>
    <script src="//gcore.jsdelivr.net/gh/jquery/jquery@3.1.1/dist/jquery.min.js"></script>
    <script src="//gcore.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="//gcore.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="//gcore.jsdelivr.net/npm/lazyload@1.8.4/jquery.lazyload.min.js"></script>
    <?php endif; ?>
    <!--gcore END-->
	
	<!--jsdelivr-->
    <?php if (strcmp($this->options->CDN,"jsdelivr")==0): ?>
    <script src="//cdn.jsdelivr.net/gh/jquery/jquery@3.1.1/dist/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/lazyload@1.8.4/jquery.lazyload.min.js"></script>
    <?php endif; ?>
	<!--jsdelivr END-->
	
	<!--local-->
    <?php if (strcmp($this->options->CDN,"local")==0): ?>
    <script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/jquery.fancybox.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/jquery.lazyload.min.js'); ?>"></script>
    <?php endif; ?>
	<!--local END-->
	
	<script src="<?php $this->options->themeUrl('js/waxy-main.js'); ?>"></script>
	
	<!--代码高亮-->
	<?php if ($this->options->codeHighlightControl): ?>
	<script type="text/javascript">
	(function(){
		var pres = document.querySelectorAll('pre');
		var lineNumberClassName = 'line-numbers';
		pres.forEach(function (item, index) {
			item.className = item.className == '' ? lineNumberClassName : item.className + ' ' + lineNumberClassName;
		});
	})();
    </script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('lib/prism/clipboard.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('lib/prism/prism.js'); ?>"></script>
    <?php endif; ?>
    <!--END-->
    
    <!--置顶文章滚动支持-->
    <?php if (!empty($this->options->sticky)&&count(explode(',', strtr($this->options->sticky, ' ', ',')))>1): ?>
    <script type="text/javascript">
    var doscroll = function(){
        var $parent = $('.js-slide-list');
        var $first = $parent.find('li:first');
        var height = $first.height();
        $first.animate({
            marginTop: -height + 'px'
            }, 500, function() {
            $first.css('marginTop', 0).appendTo($parent);
        });    
    };
    setInterval(function(){doscroll()}, 2000);
    </script>
    <?php endif; ?>
    <!--END-->
    
    <!--网站加载动画-->
    <?php if ($this->options->load_html): ?>
    <script type="text/javascript">
        $("#loading").fadeOut(500);
    </script>
    <?php endif; ?>
    <!--END-->

	<!--自定义JS-->
    <?php add_custom_js($this); ?>
    <!--END-->

<?php $this->footer(); ?>
</body>
</html>
