<section id="signup">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title-profil" wfd-id="46">
                    <b><?= $Lang->get('USER__REGISTER') ?></b>
                </div>
                <div class="thumbnail text-center sign" style="padding:15px">
                    <form method="post" data-redirect-url="?" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_register')) ?>">
                        <input type="hidden" name="data[_Token][key]" value="<?= $csrfToken ?>" />
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </span>
                                <input class="form-control" name="pseudo" placeholder="<?= $Lang->get('USER__USERNAME_LABEL') ?>" type="text" autofocus />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </span>
                                <input class="form-control" name="password" placeholder="<?= $Lang->get('USER__PASSWORD_LABEL') ?>" type="password" autofocus />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </span>
                                <input class="form-control" name="password_confirmation" placeholder="<?= $Lang->get('USER__PASSWORD_CONFIRM_LABEL') ?>" type="password" autofocus />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </span>
                                <input class="form-control" name="email" placeholder="<?= $Lang->get('USER__EMAIL_LABEL') ?>" type="text" autofocus />
                            </div>
                        </div>

                        <?php if($reCaptcha['type'] == "google"): ?>
                            <script src='https://www.google.com/recaptcha/api.js'></script>
                            <div class="form-group text-center">
                                <div class="g-recaptcha" style="display:inline-block" data-sitekey="<?= $reCaptcha['siteKey'] ?>"></div>
                            </div>
                        <?php else: ?>
                            <div class="form-group">
                                <?= $this->Html->image(array('controller' => 'user', 'action' => 'get_captcha', 'plugin' => false, 'admin' => false), array('plugin' => false, 'admin' => false, 'id' => 'captcha_image')); ?>
                                <a href="javascript:void(0);" id="reload"><i class="fa fa-refresh"></i></a>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" name="captcha" id="inputPassword3" placeholder="<?= $Lang->get('FORM__CAPTCHA_LABEL') ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($condition)) { ?>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="condition">
                                        <?=$Lang->get('USER__CONDITION_1')?> <a href="<?= $condition ?>"> <?= $Lang->get('USER__CONDITION_2')?></a>
                                    </label>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="form-group text-right">
                            <input type="submit" class="btn btn-secondary" value="<?= $Lang->get('USER__REGISTER') ?>" />
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>