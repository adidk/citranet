<script src="<?= base_url() ?>assets/lib/ckeditor/ckeditor.js"></script>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Daftar User</h3>
    </div>
    <?= $this->session->flashdata('message') ?>
    <?= form_open_multipart('admin/updateberita/' . $detailberita['id']) ?>
    <div class="card-body">
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control" id="" name="judul" value="<?= $detailberita['judul'] ?>" required>
        </div>
        <div class="form-group">
            <label for="">Isi</label>

            <textarea name="isi" id="editor1" rows="10" cols="80">
            <?= $detailberita['isi'] ?>
               </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
            </script>
        </div>
        <div class="form-group">
            <img src="<?= base_url('/assets/img/berita/') . $detailberita['gambar'] ?>" width="600px" height="400px" class="mb-3" alt="user" />
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input"  name="foto" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile" required>Ubah</label>
                </div>
            </div>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button class="btn btn-primary">submit</button>
        <a href="<?= base_url('admin/hapusberita/') . $detailberita['id'] ?>" class="btn btn-danger">Hapus Konten</a>

    </div>
    <?= form_close(); ?>
</div>