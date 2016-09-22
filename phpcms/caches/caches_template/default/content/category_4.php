<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<script src=<?php echo JS_PATH;?>myjs/gongsigaikuang.js></script>
<link rel="stylesheet" href=<?php echo CSS_PATH;?>mycss/zhutihuodong.css>
<div class="banner">
    <a href=""><div class="banner1"><img src="<?php echo IMG_PATH;?>myimgs/banner05.jpg" alt=""></div></a>
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
            <div class="shen221">近期活动</div>
            <div class="shen222">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fab1379b2cfa411b61cb265a367935df&action=lists&catid=36&num=1&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'36','order'=>'listorder ASC','limit'=>'1',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

                <div class="shen2222">
                    <div class="shen22221">
                        <a href="<?php echo $r['url'];?>"> <div class="shen222211"><?php echo $r['title'];?></div></a>
                    </div>
                    <div><?php echo str_cut($r[description],400);?></div>
                </div><?php if($r[thumb]) { ?><div class="shen2221"><img src="<?php echo thumb($r[thumb]);?>" alt="<?php echo $r['title'];?>" /></div>
                <?php } else { ?>
                <?php } ?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
             </div>
            <div class="shen232">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=16ca33256058ae63e2d0d5b9e6f70ec6&action=lists&catid=36&num=3&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'36','order'=>'listorder ASC','limit'=>'3',));}?>
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
        <div class="shen22">
            <div class="shen221">专家专栏</div>
            <div class="shen223">
                <div class="shen2232">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=54d5125648036244f7c23f8091a8585e&action=lists&catid=39&num=3&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'39','order'=>'listorder ASC','limit'=>'3',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <div class="shen22321">
                        <a href="<?php echo $r['url'];?>"><div class="shen223211"><?php echo $r['title'];?></div></a>
                        <div class="shen223212"><?php echo date('Y-m-d', $r['inputtime']);?></div>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <div class="shen22322">更多>></div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include template("content","footer"); ?>