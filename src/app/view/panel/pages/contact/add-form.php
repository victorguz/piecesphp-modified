<?php defined("BASEPATH") or die("<h1>El script no puede ser accedido directamente</h1>"); ?>

<div style="max-width:992px;">
    <form pcs-generic-handler-js method='POST' action="<?= $action; ?>" class="ui form">
        <div class="admin-title">
            <h1 class="ui header">
                <?= strphrasecase(__('general', 'Agregar') . " " . $title); ?>
            </h1>
            <div class="">
                <button class="ui icon secondary button" coky-go-back-button>
                    <i class="icon left arrow"></i>
                    <?= __("general", "Volver") ?>
                </button>
                <button type="submit" class="ui primary button"><?= __('general', 'Guardar') ?></button>
            </div>
        </div>








        <div class="field required">
            <label>Taller</label>
        </div>

        <div class="field required">
            <label>Descripción</label>
            <input required type="text" name="name" maxlength="255">
        </div>

        <div class="field required">
            <label>Valor</label>
            <input required type="number" name="value">
        </div>



    </form>
</div>