<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<script src=<?php echo JS_PATH;?>myjs/gongsigaikuang.js></script>
<link rel="stylesheet" href=<?php echo CSS_PATH;?>mycss/pinpaichanpin1.css>
<div class="banner">
    <a href=""><div class="banner1"><img src="<?php echo IMG_PATH;?>myimgs/banner03.jpg" alt=""></div></a>
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
            <div class="shen221">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;北京同仁堂科技发展股份有限公司的产品涉及20多个剂型，200多个品种，包含药品、食品保健品等，并有丰富的已开发新产品和在开发新产品的储备。麦尔海化妆品由北京同仁堂麦尔海生物技术有限公司生产，它是北京同仁堂集团下属的三级公司，在同仁堂博大精深的企业文化指引下，经营业绩连年实现跳跃式增长，使同仁堂麦尔海公司已经成为已成为护肤品市场民族品牌的生力军。北京同仁堂南三环中路药店及同仁堂第二中医医院集名药、名医为一体，相互扶持，相互依托，共同提高，走出了一条适合自身发展的道路，为广大顾客提供满意的医疗服务。
            </div>
            <div class="shen222">
                <img src="<?php echo IMG_PATH;?>myimgs/shen2221.jpg" alt="">
                <img src="<?php echo IMG_PATH;?>myimgs/shen2222.jpg" alt="">
                <img src="<?php echo IMG_PATH;?>myimgs/shen2223.jpg" alt="">
            </div>
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=74ccd2315d18c9c2cfdabd59b26cef79&action=category&catid=%24catid&num=3&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'listorder ASC','limit'=>'3',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="shen23">
            <div class="shen231"><?php echo $r['catname'];?></div>
            <div class="shen232">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=695b486a228b30122fcc4cf45aaf7637&action=lists&catid=%24r%5Bcatid%5D&num=3&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'order'=>'listorder ASC','limit'=>'3',));}?>
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
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>

</div>
<?php include template("content","footer"); ?>