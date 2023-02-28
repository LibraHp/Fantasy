<script>
//pjax 刷新

$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[no-pjax])', {
    container: '#main-pajx',
    fragment: '#main-pajx',
    timeout: 8000
}).on('pjax:send',
function() {
    NProgress.start();//加载动画效果开始
    
}).on('pjax:complete',
function() {
NProgress.done();//加载动画效果结束
imageeffct();//灯箱函数重载
 setupContents();//某个函数重载
lue();//lue函数重载
reHighlightCodeBlock();//代码高亮函数重载

if ($('.ds-thread').length > 0) { if (typeof DUOSHUO !== 'undefined') DUOSHUO.EmbedThread('.ds-thread'); else $.getScript("https://www.ihewro.com/duoshuo/embedhw4.min.js"); }
});//多说模块重载

</script>