<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"> CRUD menggunakan CodeIgniter 4 dan Bootstrap 4. </div>
                <div class="card-body">
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th> <?= form_button(['type' => 'button', 'class' => 'btn btn-success btn-sm btn-block', 'data-toggle' => 'modal', 'data-target' => '#add', 'content' => 'Tambah',]) ?> </th>
                                <th>Judul</th>
                                <th>Link</th>
                                <th>Text</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($get_all as $row => $value) : ?>
                            <tr>
                                <td align="center">
                                    <?= form_button(['type' => 'button', 'class' => 'btn btn-primary btn-sm', 'data-toggle' => 'modal', 'data-id' => $value->id, 'data-target' => '#upd', 'content' => 'Ubah',]) ?>&nbsp;<?= anchor('crud/del/'.$value->id, 'Hapus', ['class' => 'btn btn-danger btn-sm']) ?>
                                </td>
                                <td><?= $value->judul ?></td>
                                <td><?= $value->link ?></td>
                                <td><?= $value->text ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- begin:: tambah data -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open('crud/add') ?>
                    <div class="form-group">
                        <?= form_input(['type' => 'text', 'name' => 'id_data', 'placeholder' => 'Masukkan Id data', 'class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_input(['type' => 'text', 'name' => 'judul', 'placeholder' => 'Masukkan Judul', 'class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_input(['type' => 'text', 'name' => 'link', 'placeholder' => 'Masukkan Link', 'class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_input(['type' => 'text', 'name' => 'text', 'placeholder' => 'Masukkan Text', 'class' => 'form-control']) ?>
                    </div>
                    <?= form_submit('tambah', 'Tambah', ['class' => 'btn btn-success btn-sm']); ?>
                    <?= form_button(['type' => 'button', 'class' => 'btn btn-secondary btn-sm', 'data-dismiss' => 'modal', 'content' => 'Close']) ?>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<!-- end:: tambah data -->

<!-- begin:: ubah data -->
<div class="modal fade" id="upd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="form-ubah">
                    <!-- isi form ubah -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:: ubah data -->