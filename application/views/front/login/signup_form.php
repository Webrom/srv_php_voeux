<?php
/**
 * Created by PhpStorm.
 * User: zahead
 * Date: 26/05/15
 * Time: 14:50
 */
?>
<div class="bp-docs-section">
    <div class="row">

    </div>

    <div class="row">
        <div class="col-md-3 col-no-border"></div>
        <div class="col-md-6" id="signUpForm">
            <div class="bp-component">
                <?php echo form_open('login/createUser','class="form-horizontal"')?>
                    <fieldset>
                        <legend>Inscription</legend>
                        <div class="col-md-6 col-no-border">
                            <div class="form-group">
                                <div class="col-md-12 col-no-border">
                                    <label for="name" class="control-label">Votre nom</label>
                                    <?php echo form_input('name','John','class="form-control" placeholder="John" id="name"')?>
                                </div>
                                <div class="col-md-12 col-no-border">
                                    <label for="prenom" class="control-label">Votre prenom</label>
                                    <?php echo form_input('prenom','Doe','class="form-control" placeholder="Doe" id="prenom"')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-no-border">
                            <div class="col-md-12 col-no-border">
                                <label for="inputPassword" class="control-label">Mot de passe</label>
                                <?php echo form_input('password','Password','class="form-control" placeholder="password" id="inputPassword"')?>
                            </div>
                            <div class="col-md-12 col-no-border">
                                <label for="select_statut" class="control-label">Votre statut</label>
                                <?php foreach ($status as $lestatut){
                                    echo "$lestatut->statut <br />";
                                }?>
                                <?php echo form_input('name','John','class="form-control" placeholder="John" id="name"')?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <?php echo form_submit('submit','Inscription','class="btn btn-success"')?>
                                <?php echo anchor('login/','Retour','class="btn btn-info"');?>
                            </div>
                        </div>
                    </fieldset>
                <?php echo form_close();?>
            </div>
        </div>
    <div class="col-md-3 col-no-border"></div>
</div>
</div>