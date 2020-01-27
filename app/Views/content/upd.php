<?= form_open('crud/upd') ?>
    <!-- begin::id -->
    <?= form_input(['type' => 'hidden', 'name' => 'id', 'value' => $get_upd->id]) ?>
    <!-- end::id -->
    <div class="form-group">
        <?= form_input(['type' => 'text', 'name' => 'id_data', 'value' => $get_upd->id_data, 'class' => 'form-control']) ?>
    </div>
    <div class="form-group">
        <?= form_input(['type' => 'text', 'name' => 'judul', 'value' => $get_upd->judul, 'class' => 'form-control']) ?>
    </div>
    <div class="form-group">
        <?= form_input(['type' => 'text', 'name' => 'link', 'value' => $get_upd->link, 'class' => 'form-control']) ?>
    </div>
    <div class="form-group">
        <?= form_input(['type' => 'text', 'name' => 'text', 'value' => $get_upd->text, 'class' => 'form-control']) ?>
    </div>
    <?= form_submit('ubah', 'Ubah', ['class' => 'btn btn-success btn-sm']); ?>
    <?= form_button(['type' => 'button', 'class' => 'btn btn-secondary btn-sm', 'data-dismiss' => 'modal', 'content' => 'Close']) ?>
<?= form_close() ?>