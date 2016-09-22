<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<script src=<?php echo JS_PATH;?>myjs/zhongchengyao.js></script>
<link rel="stylesheet" href=<?php echo CSS_PATH;?>mycss/pinpaichanpin_1.css>
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
        <div class="shen12"></div>
    </div>
    <div class="shen2">
        <div class="shen21"><img src="<?php echo IMG_PATH;?>myimgs/shen21.jpg" alt=""></div>
        <div class="shen22"><img src="<?php echo IMG_PATH;?>myimgs/shen22.jpg" alt=""></div>
        <div class="shen23"><img src="<?php echo IMG_PATH;?>myimgs/shen23.jpg" alt=""></div>
        <div class="shen24"><img src="<?php echo IMG_PATH;?>myimgs/shen24.jpg" alt=""></div>
        <div class="shen25"><img src="<?php echo IMG_PATH;?>myimgs/shen25.jpg" alt=""></div>
        <div class="shen26"><img src="<?php echo IMG_PATH;?>myimgs/shen26.jpg" alt=""></div>
        <div class="shen27"><img src="<?php echo IMG_PATH;?>myimgs/shen27.jpg" alt=""></div>
        <div class="shen28"><img src="<?php echo IMG_PATH;?>myimgs/shen28.jpg" alt=""></div>
    </div>
    <div class="shen3">
        <div class="shen31"><img src="<?php echo IMG_PATH;?>myimgs/shen31.jpg" alt=""></div>
        <div class="shen32">
            <div class="shen320">
                <div class="shen321 shen3210">
                    <div class="shen3200">
                        <div class="shen3211">
                            <img src="<?php echo IMG_PATH;?>myimgs/shen321.jpg" alt="">
                        </div>
                    </div>
                    <div>补益药</div>
                </div>
                <div class="shen322  shen3210">
                    <div class="shen3200">
                        <div class="shen3211">
                            <img src="<?php echo IMG_PATH;?>myimgs/shen322.jpg" alt="">
                        </div>
                    </div>
                    <div>止咳平喘</div>
                </div>
                <div class="shen323  shen3210">
                    <div class="shen3200">
                        <div class="shen3211">
                            <img src="<?php echo IMG_PATH;?>myimgs/shen323.jpg" alt="">
                        </div>
                    </div>
                    <div>胃肠道疾病用</div>
                </div>
                <div class="shen324  shen3210">
                    <div class="shen3200">
                        <div class="shen3211">
                            <img src="<?php echo IMG_PATH;?>myimgs/shen324.jpg" alt="">
                        </div>
                    </div>
                    <div>妇科用药</div>
                </div>
                <div class="shen325 shen3210">
                    <div class="shen3200">
                        <div class="shen3211">
                            <img src="<?php echo IMG_PATH;?>myimgs/shen325.jpg" alt="">
                        </div>
                    </div>
                    <div>清火药</div>
                </div>
                <div class="shen326 shen3210">
                    <div class="shen3200">
                        <div class="shen3211">
                            <img src="<?php echo IMG_PATH;?>myimgs/shen326.jpg" alt="">
                        </div>
                    </div>
                    <div>感冒类药</div>
                </div>
                <div class="shen327 shen3210">
                    <div class="shen3200">
                        <div class="shen3211">
                            <img src="<?php echo IMG_PATH;?>myimgs/shen327.jpg" alt="">
                        </div>
                    </div>
                    <div>祛暑药</div>
                </div>
                <div class="shen328 shen3210">
                    <div class="shen3200">
                        <div class="shen3211">
                            <img src="<?php echo IMG_PATH;?>myimgs/shen328.jpg" alt="">
                        </div>
                    </div>
                    <div>心脑血管类药</div>
                </div>
            </div>
        </div>
        <div class="shen33"><img src="<?php echo IMG_PATH;?>myimgs/shen33.jpg" alt=""></div>
    </div>

</div>
<?php include template("content","footer"); ?>