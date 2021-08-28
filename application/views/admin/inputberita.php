<script src="<?= base_url() ?>assets/lib/ckeditor/ckeditor.js"></script>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">ser</h3>
    </div>
    <?= $this->session->flashdata('message') ?>
    <?= form_open_multipart(''); ?>
    <div class="card-body">
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control" id="" name="judul" placeholder="" required>
        </div>
        <div class="form-group">
            <label for="">Isi</label>

            <textarea name="isi" id="editor1" rows="10" cols="80">

               </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
            </script>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile" required>Choose file</label>
                </div>
            </div>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <?= form_close(); ?>
</div>