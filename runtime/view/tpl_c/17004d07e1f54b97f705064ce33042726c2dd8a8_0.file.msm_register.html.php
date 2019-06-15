<?php
/* Smarty version 3.1.30, created on 2018-09-29 16:19:25
  from "C:\xampp\htdocs\iou.cn\application\home\view\user\msm_register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5baf358dcc0b57_47212740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17004d07e1f54b97f705064ce33042726c2dd8a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\iou.cn\\application\\home\\view\\user\\msm_register.html',
      1 => 1538209161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5baf358dcc0b57_47212740 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta content="IE=edge,Chrome=1" http-equiv="X-UA-Compatible">
    <meta content="webkit" name="renderer">
    <title>注册 - 有问必答</title>
    <meta content="有问必答,知识社区,社交社区,问答社区" name="keywords">
    <meta content="有问必答 社交化知识社区" name="description">
    <link href="<?php echo PUBLIC_PATH;?>
home/css/style.css" type="text/css" rel="stylesheet">
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo PUBLIC_PATH;?>
home/css/default/img/favicon.ico?v=20151125">

    <link href="<?php echo PUBLIC_PATH;?>
home/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="<?php echo PUBLIC_PATH;?>
home/css/icon.css" type="text/css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="<?php echo PUBLIC_PATH;?>
home/css/default/common.css?v=20151125">
    <link type="text/css" rel="stylesheet" href="<?php echo PUBLIC_PATH;?>
home/css/default/link.css?v=20151125">
    <link type="text/css" rel="stylesheet" href="<?php echo PUBLIC_PATH;?>
home/js/plug_module/style.css?v=20151125">
    <link type="text/css" rel="stylesheet" href="<?php echo PUBLIC_PATH;?>
home/css/default/register.css?v=20151125">

    <?php echo '<script'; ?>
 type="text/javascript">
        var _71A31FBF0AB8C1472FF4AE11FC44D88A = "";
        var G_POST_HASH = _71A31FBF0AB8C1472FF4AE11FC44D88A;
        var G_INDEX_SCRIPT = "?/";
        var G_SITE_NAME = "WeCenter";
        var G_BASE_URL = "?";
        var G_STATIC_URL = "static";
        var G_UPLOAD_URL = "uploads";
        var G_USER_ID = "";
        var G_USER_NAME = "";
        var G_UPLOAD_ENABLE = "N";
        var G_UNREAD_NOTIFICATION = 0;
        var G_NOTIFICATION_INTERVAL = 100000;
        var G_CAN_CREATE_TOPIC = "";
        var G_ADVANCED_EDITOR_ENABLE = "Y";

    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/jquery.2.js?v=20151125"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/jquery.form.js?v=20151125"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/plug_module/plug-in_module.js?v=20151125"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/aws.js?v=20151125"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/aw_template.js?v=20151125"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo PUBLIC_PATH;?>
home/js/compatibility.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!--[if lte IE 8]>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/respond.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <style>
        li {
            margin: 20px auto;
        }
    </style>
</head>

<body>
<noscript id="noscript" unselectable="on">
    <div class="aw-404 aw-404-wrap container">
        <img src="<?php echo PUBLIC_PATH;?>
home/common/no-js.jpg">
        <p>你的浏览器禁用了JavaScript, 请开启后刷新浏览器获得更好的体验!</p>
    </div>
</noscript>

<div class="aw-register-box">
    <div class="mod-head">
        <a href="">
            <img alt="" src="<?php echo PUBLIC_PATH;?>
home/css/default/img/login_logo.png"></a>
        <h1>注册新用户</h1>
    </div>
    <div class="mod-body">
        <form method="post" action="?c=user&a=sendMessageAction">
            <ul>
                <li>
                    <input type="text" value="" name="phone" placeholder="请输入手机号码"
                           class="aw-register-email form-control">
                </li>
                <li class="aw-register-verify">
                    <img src="?m=home&c=user&a=makeCaptchaAction"
                         onclick="this.src='?m=home&c=user&a=makeCaptchaAction'" id="captcha" class="pull-right"
                         style="float: right">
                    <input type="text" placeholder="验证码" name="seccode_verify" class="form-control"
                           style="float: left;width: 200px">
                </li>
                <li style="clear: both;height: 5px;"></li>


                <li class="last">
                    <label>
                        <input type="checkbox" name="agreement_chk" value="agree">我同意
                    </label>
                    <a class="aw-agreement-btn" href="javascript:;">用户协议</a>
                    <a class="pull-right" href="?c=user&a=loginAction">已有账号?</a>
                    <div class="aw-register-agreement hide">
                        <div id="register_agreement" class="aw-register-agreement-txt">
                            当您申请用户时，表示您已经同意遵守本规章。
                            <br>
                            欢迎您加入本站点参与交流和讨论，本站点为社区，为维护网上公共秩序和社会稳定，请您自觉遵守以下条款：
                            <br>
                            <br>
                            一、不得利用本站危害国家安全、泄露国家秘密，不得侵犯国家社会集体的和公民的合法权益，不得利用本站制作、复制和传播下列信息：
                            <br>
                            &#12288;（一）煽动抗拒、破坏宪法和法律、行政法规实施的；
                            <br>
                            &#12288;（二）煽动颠覆国家政权，推翻社会主义制度的；
                            <br>
                            &#12288;（三）煽动分裂国家、破坏国家统一的；
                            <br>
                            &#12288;（四）煽动民族仇恨、民族歧视，破坏民族团结的；
                            <br>
                            &#12288;（五）捏造或者歪曲事实，散布谣言，扰乱社会秩序的；
                            <br>
                            &#12288;（六）宣扬封建迷信、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的；
                            <br>
                            &#12288;（七）公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的；
                            <br>
                            &#12288;（八）损害国家机关信誉的；
                            <br>
                            &#12288;（九）其他违反宪法和法律行政法规的；
                            <br>
                            &#12288;（十）进行商业广告行为的。
                            <br>
                            <br>
                            二、互相尊重，对自己的言论和行为负责。
                            <br>
                            三、禁止在申请用户时使用相关本站的词汇，或是带有侮辱、毁谤、造谣类的或是有其含义的各种语言进行注册用户，否则我们会将其删除。
                            <br>
                            四、禁止以任何方式对本站进行各种破坏行为。
                            <br>
                            五、如果您有违反国家相关法律法规的行为，本站概不负责，您的登录信息均被记录无疑，必要时，我们会向相关的国家管理部门提供此类信息。
                        </div>
                    </div>
                </li>

                <li class="clearfix">
                    <input type="submit" value="注册" class="btn btn-large btn-blue btn-block"
                           style="background: #66afe9;">
                </li>
            </ul>
        </form>
    </div>
    <div class="mod-footer"></div>
</div>

<div class="aw-footer-wrap">
    <div class="aw-footer">
        Copyright &copy; 2016-2099, All Rights Reserved
        <span class="hidden-xs">
			Powered By
			<a target="blank" href="http://helloitbull.net/">有问必答 1.0</a>
		</span>

    </div>
</div>
<?php echo '<script'; ?>
>
    function Code() {
        document.getElementById("captcha").src = "?m=home&c=user&a=makeCaptchaAction";
    }
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}