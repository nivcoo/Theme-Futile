<?php
$form_input = array('title' => 'Envoyer votre image');

if (isset($config['logo']) && $config['logo']) {
    $form_input['img'] = $config['logo'];
    $form_input['filename'] = 'theme_logo.png';
}

echo $this->Html->script('admin/tinymce/tinymce.min.js');

?>
<section class="content">
    <form method="post" enctype="multipart/form-data" data-ajax="false">
        <div class="card">
            <div class="card-body">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link text-dark active" href="#config-accueil" data-toggle="tab">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="#config-footer" data-toggle="tab">Footer</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="#config-services" data-toggle="tab">Services</a></li>
                        <li class="dropdown nav-item">
                            <a href="#" class="nav-link text-dark js-scroll-trigger"
                               data-toggle="dropdown"
                               role="button"
                               aria-expanded="false">Plugins <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#config-boutique" data-toggle="tab">Boutique</a>
                                <a class="dropdown-item" href="#config-votes" data-toggle="tab">Votes</a></ul>
                        </li>
                    </ul>
                    <div class="tab-content" style="padding: 15px;">
                        <div class="tab-pane fade show active" id="config-accueil">
                            <div class="row">
                                <div class="box-body" style="">
                                    <div class="form-group">
                                        <label>IP du serveur</label>
                                        <p>Entrez l'ip du serveur.</p>
                                        <input type="text" value="<?= $config['accueil']->ip ?>"
                                               placeholder="Play.mineweb.com" class="form-control"
                                               name="accueil[ip]" cols="30" rows="10">
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <p>Télécharger votre logo.</p>
                                        <?= $this->element('form.input.upload.img', $form_input) ?>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label>Slider du site</label>
                                        <p>Entrez l'url du Slider.</p>
                                        <input type="text" value="<?= $config['accueil']->slider ?>"
                                               placeholder="Slider url" class="form-control"
                                               name="accueil[slider]" cols="30" rows="10">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                    <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                                    <button class="btn btn-success"
                                            type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?>
                                    </button>
                                    <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>"
                                       type="button"
                                       class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="config-footer">
                            <div class="row">
                                <div class="box-body" style="">
                                    <div class="form-group">
                                        <input type="checkbox" id="disable_vote" name="footer[disable_vote]" value="<?= $config['footer']->disable_vote ?>" <?= (isset($config['footer']->disable_vote) && $config['footer']->disable_vote == 'true') ? ' checked' : '' ?>>
                                        <label for="navbar">Cacher les votes dans le footer</label>
                                        <script>
                                            $('#disable_vote').change(function(){
                                                if($('#disable_vote').is(':checked')) {
                                                    $('#disable_vote').attr('value', 'true');
                                                } else {
                                                    $('#disable_vote').attr('value', 'false');
                                                }
                                            });
                                            if($('#disable_vote').is(':checked')) {
                                                $('#disable_vote').attr('value', 'true');
                                            } else {
                                                $('#disable_vote').attr('value', 'false');
                                            }
                                        </script>
                                    </div>
                                    <hr>
                                    <div class="col-lg-4 col-sm-12">
                                        <label>Partenaire 1</label>
                                        <p>Entrez les informations du partenaire.</p>
                                        <input type="text" value="<?= $config['footer']->un->titre ?>"
                                               placeholder="Nom" class="form-control"
                                               name="footer[un][titre]" cols="30" rows="10">
                                        <br>
                                        <input type="text" value="<?= $config['footer']->un->lien ?>"
                                               placeholder="Lien" class="form-control"
                                               name="footer[un][lien]" cols="30" rows="10">
                                    </div>
                                    <hr>
                                    <div class="col-lg-4 col-sm-12">
                                        <label>Partenaire 2</label>
                                        <p>Entrez les informations du partenaire.</p>
                                        <input type="text" value="<?= $config['footer']->deux->titre ?>"
                                               placeholder="Nom" class="form-control"
                                               name="footer[deux][titre]" cols="30" rows="10">
                                        <br>
                                        <input type="text" value="<?= $config['footer']->deux->lien ?>"
                                               placeholder="Lien" class="form-control"
                                               name="footer[deux][lien]" cols="30" rows="10">
                                    </div>
                                    <hr>
                                    <div class="col-lg-4 col-sm-12">
                                        <label>Partenaire 3</label>
                                        <p>Entrez les informations du partenaire.</p>
                                        <input type="text" value="<?= $config['footer']->trois->titre ?>"
                                               placeholder="Nom" class="form-control"
                                               name="footer[trois][titre]" cols="30" rows="10">
                                        <br>
                                        <input type="text" value="<?= $config['footer']->trois->lien ?>"
                                               placeholder="Lien" class="form-control"
                                               name="footer[trois][lien]" cols="30" rows="10">
                                    </div>
                                    <hr>
                                    <div style="margin-top:20px" class="col-lg-12 col-sm-12">
                                        <label>Informations</label>
                                        <p>Décrivez votre serveur en quelques phrases</p>
                                        <p style="color:red">En 180 caractères</p>
                                        <input type="text" value="<?= $config['footer']->infos ?>"
                                               placeholder="Nom" class="form-control"
                                               name="footer[infos]" cols="30" rows="10" maxlength="180">
                                        <br>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                    <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                                    <button class="btn btn-success"
                                            type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?>
                                    </button>
                                    <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>"
                                       type="button"
                                       class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="config-services">
                            <div class="row">
                                <div class="box-body" style="">
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Service 1</label>
                                            <input type="text" class="form-control" name="service[un][titre]"
                                                   placeholder="Titre"
                                                   value="<?= $config['service']->un->titre ?>">
                                            <input type="text" class="form-control"
                                                   name="service[un][description]"
                                                   placeholder="Description"
                                                   value="<?= $config['service']->un->description ?>">
                                            <br>
                                            <input type="text" class="form-control" name="service[un][image]"
                                                   placeholder="Image"
                                                   value="<?= $config['service']->un->image ?>">
                                            <input type="text" class="form-control" name="service[un][lien]"
                                                   placeholder="Lien"
                                                   value="<?= $config['service']->un->lien ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Service 2</label>
                                            <input type="text" class="form-control" name="service[deux][titre]"
                                                   placeholder="Titre"
                                                   value="<?= $config['service']->deux->titre ?>">
                                            <input type="text" class="form-control"
                                                   name="service[deux][description]"
                                                   placeholder="Description"
                                                   value="<?= $config['service']->deux->description ?>">
                                            <br>
                                            <input type="text" class="form-control" name="service[deux][image]"
                                                   placeholder="Image"
                                                   value="<?= $config['service']->deux->image ?>">
                                            <input type="text" class="form-control" name="service[deux][lien]"
                                                   placeholder="Lien"
                                                   value="<?= $config['service']->deux->lien ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Service 3</label>
                                            <input type="text" class="form-control" name="service[trois][titre]"
                                                   placeholder="Titre"
                                                   value="<?= $config['service']->trois->titre ?>">
                                            <input type="text" class="form-control"
                                                   name="service[trois][description]"
                                                   placeholder="Description"
                                                   value="<?= $config['service']->trois->description ?>">
                                            <br>
                                            <input type="text" class="form-control" name="service[trois][image]"
                                                   placeholder="Image"
                                                   value="<?= $config['service']->trois->image ?>">
                                            <input type="text" class="form-control" name="service[trois][lien]"
                                                   placeholder="Lien"
                                                   value="<?= $config['service']->trois->lien ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                    <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                                    <button class="btn btn-success"
                                            type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?>
                                    </button>
                                    <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>"
                                       type="button"
                                       class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="config-boutique">
                            <div class="row">
                                <div class="box-body" style="">
                                    <div class="form-group">
                                        <label>Boutique</label>
                                        <p>Editez ici la première page de la boutique.</p>
                                        <?= $this->Html->script('admin/tinymce/tinymce.min.js') ?>
                                        <script type="text/javascript">
                                            tinymce.init({
                                                selector: "textarea",
                                                height: 300,
                                                width: '100%',
                                                language: 'fr_FR',
                                                plugins: "textcolor code image link",
                                                toolbar: "fontselect fontsizeselect bold italic underline strikethrough link image forecolor backcolor alignleft aligncenter alignright alignjustify cut copy paste bullist numlist outdent indent blockquote code"
                                            });
                                        </script>
                                        <textarea name="boutique" cols="30"
                                                  rows="10"><?= $config['boutique'] ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                        <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                                        <button class="btn btn-success"
                                                type="submit"><?= $Lang->get('GLOBAL__SUBMIT')
                                            ?>
                                        </button>
                                        <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>"
                                           type="button"
                                           class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="config-votes">
                            <div class="row">
                                <div class="box-body" style="">
                                    <div class="form-group">
                                        <label>Votes</label>
                                        <p>Editez les récompenses affichées des 3 premiers top voteurs.</p>
                                        <div class="form-group">
                                            <label>Récompense 1</label>
                                            <input type="text" class="form-control" name="votes[un]"
                                                   placeholder="Titre"
                                                   value="<?= $config['votes']->un ?>">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label>Récompense 2</label>
                                            <input type="text" class="form-control" name="votes[deux]"
                                                   placeholder="Titre" value="<?= $config['votes']->deux ?>">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label>Récompense 3</label>
                                            <input type="text" class="form-control" name="votes[trois]"
                                                   placeholder="Titre" value="<?= $config['votes']->trois ?>">
                                        </div>
                                        <hr>
                                        <div class="col-md-12">
                                            <hr>
                                            <input name="data[_Token][key]" value="<?= $csrfToken ?>"
                                                   type="hidden">
                                            <button class="btn btn-success" type="submit"><?= $Lang->
                                                get('GLOBAL__SUBMIT') ?>
                                            </button>
                                            <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>"
                                               type="button"
                                               class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>

</section>
