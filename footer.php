<footer>
    <div class="wrap mid">
        <section class="foot-action">
            <div class="to-top"></div>
        </section>
        <section class="foot-widget">
<div class="row">
                <div class="col-m-3">
                    <h3>时光机：</h3>
                    <ul class="clear">
                        <?php $this -> widget('Widget_Contents_Post_Date', 'type=month&format=Y 年 m 月&limit=6') -> parse('<li><a href="{permalink}" rel="nofollow" target="_blank">{date}</a></li>'); ?>
                    </ul>
                </div>

            </div>
        </section>
        <section class="foot-copyright">
            <div class="row">
                <div class="col-m-6 left bottom to-center">
<?php if(in_array('verify', $this -> options -> footer_content) && $this -> options -> verify_num): ?>
                    <p><a href="http://www.miitbeian.gov.cn" rel="nofollow" target="_blank"><?php $this -> options -> verify_num() ?></a></p>
<?php endif; ?>
<?php if(in_array('link', $this -> options -> footer_content) && $this -> options -> home_social): ?>
                    <p class="foot-social"><?php $this -> options -> home_social() ?></p>
<?php endif; ?>
<?php if(in_array('time', $this -> options -> footer_content)): ?>
                    <p class="foot-date">我们已经在一起 <a>?</a> 天 <a>?</a> 小时 <a>?</a> 分 <a>?</a> 秒</p>
<?php endif; ?>
<?php if(in_array('hitokoto', $this -> options -> footer_content)): ?>
                    <p class="foot-hitokoto">重要的是无论我们选择哪条路，都要担负起选择的责任。</p>
<?php endif; ?>
                </div>
                <div class="col-m-6 right bottom to-center">
                    <p>&copy; <?php echo date('Y') ?> <a href="<?php $this -> options -> siteUrl() ?>"><?php $this->options->title(); ?></a>. 版权所有.</p>
                    <p>Published With <a href="http://typecho.org" target="_blank" rel="nofollow">Typecho.</a> Theme By <a href="https://github.com/Dreamer-Paul/Fantasy" target="_blank" rel="nofollow">Fantasy</a>.</p>
                </div>
            </div>
        </section>
    </div>
</footer>
<script src="<?php $this->options->themeUrl('static/kico.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('static/fantasy.js'); ?>"></script>
<link href="https://cdn.bootcdn.net/ajax/libs/nprogress/0.2.0/nprogress.css" rel="stylesheet">
<script src="https://cdn.bootcdn.net/ajax/libs/nprogress/0.2.0/nprogress.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<script>
$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"],a[no-pjax])', {
    container: '#pjax-container',
    fragment: '#pjax-container',
    timeout: 8000
}).on('pjax:send',
function() {
    NProgress.start();//加载动画效果开始
    
}).on('pjax:complete',
function() {
NProgress.done();//加载动画效果结束
});

</script>
<script>var fantasy = new Fantasy_Theme({created: <?php if($this -> options -> site_created): ?>"<?php echo $this -> options -> site_created; ?>"<?php else: ?>false<?php endif; ?>});</script>
<?php $this -> options -> custom_script() ?>
<?php $this -> footer() ?>


</body>
</html>