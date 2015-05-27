<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: zahead
 * Date: 26/05/15
 * Time: 12:51
 */
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>srv_voeux</title>
    <link rel="stylesheet" href='<?php echo base_url();?>assets/css/bootstrap.min.css?v=2500' media="screen">
    <link rel="stylesheet" href='<?php echo base_url();?>assets/css/theme.min.css?v=2501'>
    <link rel="stylesheet" href='<?php echo base_url();?>assets/css/customcss.css' media="screen">
</head>
<body>
<div class="navbar navbar-dark navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="<?php echo base_url();?>" class="navbar-brand navbar-title">Trendy</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Help</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>index.php/profile">Profile</a>
                </li>
                <li class="hideMenu">
                    <a href="#">Déconnexion</a>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">Déconnexion</a>
                </li>
            </ul>

        </div>
    </div>
</div>
