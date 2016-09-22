<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<script src=<?php echo JS_PATH;?>myjs/gongsigaikuang.js></script>
<link rel="stylesheet" href=<?php echo CSS_PATH;?>mycss/xinwenzixun1.css>
<div class="banner">
    <a href=""><div class="banner1"><img src="<?php echo IMG_PATH;?>myimgs/banner02.jpg" alt=""></div></a>
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
            <div class="shen221">热点新闻</div>
            <div class="shen222">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5eece9c165aa8f3f9d8419e44d0c6f56&action=position&posid=10&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','order'=>'listorder DESC','limit'=>'1',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <?php if($r[thumb]) { ?><div class="shen2221"><img src="<?php echo thumb($r[thumb]);?>" alt="<?php echo $r['title'];?>" /></div>
                <?php } else { ?>
                <?php } ?>
                <div class="shen2222">
                    <div class="shen22221">
                        <a href="<?php echo $r['url'];?>"> <div class="shen222211"><?php echo $r['title'];?></div></a>
                        <div class="shen222212"><?php echo date('Y-m-d', $r['inputtime']);?></div>
                    </div>
                    <div><?php echo str_cut($r[description],300);?></div>
                    <a href="<?php echo $r['url'];?>"> <div class="shen22223">阅读全文></div></a>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
             </div>
            <!--<div class="shen222">-->
                <!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f3f8adf55e953b2aa9a17a395f6b682a&action=lists&catid=%24catid&num=1&order=listorder+ASC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>-->
                <!--<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
                <!--<div class="shen2221">-->
                    <!--<a href="<?php echo $r['url'];?>"> <div class="shen22211"><?php echo $r['title'];?></div></a>-->
                    <!--<div class="shen22212"><?php echo date('Y-m-d', $r['inputtime']);?></div>-->
                <!--</div>-->
                <!--<div class="shen2222">-->
                    <!--<?php if($r[thumb]) { ?><div class="shen22221"><img src="<?php echo thumb($r[thumb]);?>" alt="<?php echo $r['title'];?>" /></div>-->
                    <!--<?php } else { ?>-->
                    <!--<?php } ?>-->

                    <!--<?php echo $r['description'];?>-->
                <!--</div>-->
                <!--<a href="<?php echo $r['url'];?>"> <div class="shen2223">阅读全文></div></a>-->
                <!--<?php $n++;}unset($n); ?>-->
                <!--<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
            <!--</div>-->

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