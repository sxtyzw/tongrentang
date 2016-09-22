<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<script src=<?php echo JS_PATH;?>myjs/gongsigaikuang.js></script>
<link rel="stylesheet" href=<?php echo CSS_PATH;?>mycss/gongsigaikuang.css>
    <div class="banner">
        <a href=""><div class="banner1"><img src="<?php echo IMG_PATH;?>myimgs/banner01.jpg" alt=""></div></a>
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
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fdd4d0719139d12f39e886ae602384f3&action=category&catid=%24catid&num=1&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'listorder ASC','limit'=>'1',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php $a=$r[catid]?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=457a5ecd002e6fcd75d583987438abfa&action=lists&moreinfo=1&catid=%24a&num=10&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('moreinfo'=>'1','catid'=>$a,'order'=>'listorder ASC','limit'=>'10',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="shen21">
                <div class="shen211"><?php echo $CATEGORYS[$a]['catname'];?></div>
                <div class="shen212">
                    <div class="shen2121"><a href="">首页</a> &gt; <?php echo catpos($catid);?></div>
                </div>
            </div>
            <div class="shen22"><?php echo $CATEGORYS[$a]['catname'];?></div>
            <div class="shen23"><?php echo $r['content'];?>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>

    </div>
    <?php include template("content","footer"); ?>