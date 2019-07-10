<?php
    define('IN_SYS', true);
    require_once "core.php";
    $security_id = md5(rand(6000, getrandmax())); // $security_id = md5(rand(6000,PHP_INT_MAX));
    $title = $title . ' - ' . I18N('register');
?>
<?php include ("include/header.php"); ?>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo I18N('signup_free_hosting'); ?></h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method=post action="//order.<?php echo $domain; ?>/register.php"><!--remote_reg.php-->
                    <input type="hidden" name="plan_name" value="free webhosting">
                    <div class="form-group">
                        <label for="inputUsername" class="col-sm-4 control-label"><?php echo I18N('username'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="username" class="form-control" id="inputUsername" placeholder="<?php echo I18N('input_username'); ?>" value="<?php if (isset($_GET['username'])) {echo $_GET['username'];}?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-4 control-label"><?php echo I18N('password'); ?></label>
                        <div class="col-sm-5">
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="<?php echo I18N('input_password'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-4 control-label"><?php echo I18N('email'); ?></label>
                        <div class="col-sm-5">
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="<?php echo I18N('input_email'); ?>" value="<?php if (isset($_GET['email'])) {echo $_GET['email'];}?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCategory" class="col-sm-4 control-label"><?php echo I18N('site_category'); ?></label>
                        <div class="col-sm-5">
                            <select class="form-control" name="website_category" id="inputCategory">
                                <option value=""><?php echo I18N('choose_from_below'); ?></option>
                                <option value="personal"><?php echo I18N('personal'); ?></option>
                                <option value="business"><?php echo I18N('business'); ?></option>
                                <option value="hobby"><?php echo I18N('hobby'); ?></option>
                                <option value="forum"><?php echo I18N('forum'); ?></option>
                                <option value="dating"><?php echo I18N('dating'); ?></option>
                                <option value="software_download"><?php echo I18N('software_download'); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLanguage" class="col-sm-4 control-label"><?php echo I18N('site_language'); ?></label>
                        <div class="col-sm-5">
                            <select class="form-control" name="website_language" id="inputLanguage">
                                <option value=""><?php echo I18N('choose_from_below'); ?></option>
                                <option value="english" data-i18n="english">English</option>
                                <option value="non-english" data-i18n="non_english">Non-English</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputID" class="col-sm-4 control-label"><?php echo I18N('security_code'); ?></label>
                        <div class="col-sm-5">
                            <img width="90px" height="25px" src="/security_code.php?id=<?php echo $security_id; ?>">
                            <input type="hidden" name="id" class="form-control" id="inputID" value="<?php echo $security_id; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSecurityCode" class="col-sm-4 control-label"><?php echo I18N('input_security_code'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="number" class="form-control" id="inputSecurityCode" placeholder="<?php echo I18N('input_security_code_above'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                            <button type="submit" name="submit" class="btn btn-default"><?php echo I18N('register'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include "include/footer.php";?>
