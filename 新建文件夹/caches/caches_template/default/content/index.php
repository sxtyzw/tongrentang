<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href=<?php echo CSS_PATH;?>mycss/index.css>
<script src=<?php echo JS_PATH;?>myjs/index.js></script>
    <div class="banner">
        <a href=""><div class="banner1"><img src="<?php echo IMG_PATH;?>myimgs/banner1.jpg" alt=""></div></a>
        <a href=""><div class="banner1"><img src="<?php echo IMG_PATH;?>myimgs/banner2.jpg" alt=""></div></a>
        <a href=""><div class="banner1"><img src="<?php echo IMG_PATH;?>myimgs/banner3.jpg" alt=""></div></a>
        <a href=""><div class="banner1"><img src="<?php echo IMG_PATH;?>myimgs/banner4.jpg" alt=""></div></a>
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
        <div class="btn">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="shen">
        <div class="shen1">
            <div class="shen11">
                <div class="shen111">新闻动态</div>
                <div class="shen112"><a href=""><div class="shen1121">更多  >></div></a></div>
            </div>
            <div class="shen12">
                <div class="shen121"><img src="images/shen121.png" alt=""></div>
                <div class="shen122"><img src="images/shen122.jpg" alt=""></div>
                <div class="shen123">
                    <a href=""><div class="shen1231">质量--同仁堂的牌额之眼</div></a>
                    <div class="shen1232">摘自：中国质量报2016-03-2310：49阿胶味甘，性平，归肺、肝、肾经，可补血滋阴、润燥、止血。作为一味名贵中药，早已从皇家特供飞向寻常百姓家。北京同仁堂制胶历史已有百年，在追求</div>
                </div>
            </div>
            <div class="shen12">
                <div class="shen121"><img src="images/shen121.png" alt=""></div>
                <div class="shen122"><img src="images/shen122.jpg" alt=""></div>
                <div class="shen123">
                    <a href=""><div class="shen1231">质量--同仁堂的牌额之眼</div></a>
                    <div class="shen1232">摘自：中国质量报2016-03-2310：49阿胶味甘，性平，归肺、肝、肾经，可补血滋阴、润燥、止血。作为一味名贵中药，早已从皇家特供飞向寻常百姓家。北京同仁堂制胶历史已有百年，在追求</div>
                </div>
            </div>
            <div class="shen11 shen14">
                <div class="shen111">最新活动</div>
                <div class="shen112"><a href=""><div class="shen1121">更多  >></div></a></div>
            </div>
            <div class="shen15">
                <div class="shen151"><img src="images/shen151.jpg" alt=""></div>
                <div class="shen152"><img src="images/shen152.jpg" alt=""></div>
                <div class="shen153">
                    <a href=""><div class="shen1531">“同仁堂药典APP正式上线”</div></a>
                    <div class="shen1532">“同仁堂药典APP”简介随着移动互联网和手机终端的发展，移动互联网时代已经来...</div>
                </div>
            </div>
        </div>
        <div class="shen2">
            <div class="shen21">
                <div class="shen211">最新活动</div>
                <div class="shen212"><a href=""><div class="shen2121">更多  >></div></a></div>
            </div>
            <div class="shen22">
                <div class="shen221"><img src="images/shen22.jpg" alt="">
                </div>
                <div class="shen222">
                    <div class="shen2221">西黄丸（天然方）</div>
                    <div class="shen2222">核准日期：2007年03月27日修改日期：2010年07月14日西黄丸说明书
                        请仔...</div>
                </div>
            </div>
            <div class="shen23">
                <div class="shen222 shen2223">
                    <div class="shen2221 ">北京同仁堂阿胶酥糖</div>
                    <div class="shen2222">【产品名称】北京同仁堂冰爽宝（清凉西瓜味）【规格】120g/罐【配料表】白砂糖、...</div>
                </div>
                <div class="shen221"><img src="images/shen23.jpg" alt="">
                </div>
            </div>
            <div class="shen24">
                <div class="shen221"><img src="images/shen24.jpg" alt="">
                </div>
                <div class="shen222">
                    <div class="shen2221">北京同仁堂冰爽宝（清凉西瓜味）</div>
                    <div class="shen2222">【产品名称】北京同仁堂冰爽宝（清凉西瓜味）【规格】40g【配料表】白砂糖、高麦芽...</div>
                </div>
            </div>
        </div>
    </div>
<?php include template("content","footer"); ?>
