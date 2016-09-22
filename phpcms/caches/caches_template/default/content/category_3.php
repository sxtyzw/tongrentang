<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<script src=<?php echo JS_PATH;?>myjs/gongsigaikuang.js></script>
<link rel="stylesheet" href=<?php echo CSS_PATH;?>mycss/touzizheguanxi.css>
<div class="banner">
    <a href=""><div class="banner1"><img src="<?php echo IMG_PATH;?>myimgs/banner04.jpg" alt=""></div></a>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=76e9f473481a5982ee8a9f7c5e388b26&action=category&catid=0&num=6&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder ASC','limit'=>'6',));}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <div class="banner2">
        <a href="<?php echo $r['url'];?>"><div class="banner11"><?php echo $r['catname'];?></div></a>
        <div class="shang">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=991749d68b9f7f5a9f541f7581b46d4d&action=category&catid=%24r%5Bcatid%5D&num=6&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'order'=>'listorder ASC','limit'=>'6',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <a href="<?php echo $r['url'];?>"><div><?php echo $r['catname'];?></div></a>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<div class="shen">
    <div class="shen1">
        <div class="shen11"><?php echo $CATEGORYS[$catid]['catname'];?></div>
        <div class="shen12">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ed356cc59c8186b700be5e194718c706&action=category&catid=%24catid&num=10&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'listorder ASC','limit'=>'10',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="shen121"><a href="<?php echo $r['url'];?>"><div class="shen122"><?php echo $r['catname'];?></div></a></div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
    <div class="shen2">
        <div class="shen21">
            <div class="shen211"><?php echo $CATEGORYS[$catid]['catname'];?></div>
            <div class="shen212">
                <div class="shen2121"><a href="">首页</a> &gt; <?php echo catpos($catid);?></div>
            </div>
        </div>
        <div class="shen22">
            <div class="shen221">同仁堂是我国中药行业的老字号，1997年6月，北京同仁堂股份有限公司隆重挂牌，在上海证交所上市。2000年3月，北京同仁堂股份有限公司下沉部分优良资产组建北京同仁堂科技发展股份有限公司，同年10月底在香港联交所创业板挂牌上市。上市之后，同仁堂科技始终保持着良好的业绩表现，并于2010年7月9日正式转入香港联交所主板上市，股票代码01666。 </div>
        </div>
        <div class="shen23">
            <div class="shen231">最新公告</div>
            <div class="shen232">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=033ba5ef40f2264ecbb457d50f15b182&action=lists&catid=33&num=5&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'33','order'=>'listorder ASC','limit'=>'5',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="shen2321">
                    <a href="<?php echo $r['url'];?>"><div class="shen23211"><?php echo $r['title'];?></div></a>
                    <div class="shen23212"><?php echo date('Y-m-d', $r['inputtime']);?></div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="shen2322">更多>></div>
            </div>
        </div>
        <div class="shen23">
            <div class="shen231">股票行情</div>
            <div class="shen232">
                实时图 日K图
                <br>
                <img src="<?php echo IMG_PATH;?>myimgs/shen232.jpg" alt="">
            </div>
        </div>
    </div>

</div>
<?php include template("content","footer"); ?>