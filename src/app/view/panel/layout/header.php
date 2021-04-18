<?php defined("BASEPATH") or die("<h1>El script no puede ser accedido directamente</h1>"); ?>
<!DOCTYPE html>
<html lang="<?= get_config('app_lang'); ?>" dlang="<?= get_config('default_lang'); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?= baseurl(); ?>">
    <?= \PiecesPHP\Core\Utilities\Helpers\MetaTags::getMetaTagsGeneric(); ?>
    <link rel="shortcut icon" href="<?= get_config('favicon-back'); ?>" type="image/x-icon">
    <?php load_css(['base_url' => "", 'custom_url' => ""]) ?>
    <style>
        :root {
            --primary-color: <?= get_config("primary-color"); ?>;
            --secondary-color: <?= get_config("secondary-color"); ?>;

            --back-color: <?= get_config("back-color"); ?>;

            --navbar-color: <?= get_config("navbar-color"); ?>;
            --navbar-hover-color: <?= get_config("navbar-hover-color"); ?>;
            --navbar-height: <?= get_config("navbar-height"); ?>;
            --navbar-icon-size: <?= get_config("navbar-icon-size"); ?>;

            --gray-color: <?= get_config("gray-color"); ?>;
            --dark-color: <?= get_config("dark-color"); ?>;

            --danger-color: <?= get_config("danger-color"); ?>;
            --alert-color: <?= get_config("alert-color"); ?>;
            --success-color: <?= get_config("success-color"); ?>;
            --info-color: <?= get_config("info-color"); ?>;

            --default-radius: <?= get_config("default-radius"); ?>;
            --dropdown-radius: <?= get_config("dropdown-radius"); ?>;
            --card-radius: <?= get_config("card-radius"); ?>;
            --field-radius: <?= get_config("field-radius"); ?>;


            --sidebar-color: <?= get_config("sidebar-color"); ?>;
            --sidebar-icon-size: <?= get_config("sidebar-icon-size"); ?>;
            --sidebar-text-color: <?= get_config("sidebar-text-color"); ?>;
            --sidebar-text-hover-color: <?= get_config("sidebar-text-hover-color"); ?>;
            --sidebar-button-hover-color: <?= get_config("sidebar-button-hover-color"); ?>;
            --sidebar-button-selected-color: <?= get_config("sidebar-button-selected-color"); ?>;

        }
    </style>

</head>

<body>

    <div class="ui modal" support-js>
        <div class="header"><?= __(SUPPORT_FORM_ADMIN_LANG_GROUP, 'Soporte técnico'); ?></div>
        <div class="content">
            <form action="<?= get_route('tickets-create'); ?>" class="ui form">
                <input type="hidden" name="name" value="<?= htmlentities(stripslashes(get_config('current_user')->firstname . ' ' . get_config('current_user')->first_lastname)); ?>">
                <input type="hidden" name="email" value="<?= htmlentities(stripslashes(get_config('current_user')->email)); ?>">
                <div class="field">
                    <label><?= __(SUPPORT_FORM_ADMIN_LANG_GROUP, 'Asunto'); ?></label>
                    <input type="text" name="subject">
                </div>
                <div class="field">
                    <label><?= __(SUPPORT_FORM_ADMIN_LANG_GROUP, 'Mensaje'); ?></label>
                    <textarea name="comments"></textarea>
                </div>
                <div class="field">
                    <button type="submit" class="ui primary mini button"><?= __(SUPPORT_FORM_ADMIN_LANG_GROUP, 'Enviar'); ?></button>
                </div>
            </form>
        </div>
    </div>

    <?php if (ACTIVE_TIMER) : ?>
        <div timer-platform-js="<?= base64_encode(json_encode(['user_id' => get_config('current_user')->id, 'url' => get_route('timing-add')])); ?>">
        </div>
    <?php endif; ?>

    <?php $this->render('panel/layout/topbar'); ?>

    <div class="ui-pcs container-sidebar">

        <?php $this->render('panel/layout/menu'); ?>

        <div class="content super-content">