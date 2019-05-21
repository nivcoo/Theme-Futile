<section id="signup">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title-profil" wfd-id="46">
                    <b><?= $Lang->get('USER__LOGIN') ?></b>
                </div>
                <div class="thumbnail text-center sign" style="padding:15px">
                    <form method="post" data-redirect-url="?" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_login')) ?>">
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
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </span>
                                <input class="form-control" name="password" placeholder="<?= $Lang->get('USER__PASSWORD_LABEL') ?>" type="password" autofocus />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <input type="checkbox" name="remember_me">
                                        <?= $Lang->get('USER__REMEMBER_ME') ?>
                                    </div>
                                    <div class="col-6 text-right">
                                        <input type="submit" class="btn btn-secondary" value="<?= $Lang->get('USER__LOGIN') ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>