<script src="<?= base_url() ?>assets/lib/ckeditor/ckeditor.js"></script>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">ser</h3>
    </div>
    <?= $this->session->flashdata('message') ?>
    <?= form_open_multipart(''); ?>
    <div class="card-body">
        <div class="form-group mt-3">
            <label for="">Internet Services</label>
            <select name="internet" id="internet" class="form-control" required="required">
                <option value="">--Pilih Layanan--</option>
                <option value="RESIDENTAL WIRELESS">RESIDENTAL WIRELESS</option>
                <option value="RESIDENTAL FIBER OPTIC">RESIDENTAL FIBER OPTIC</option>
                <option value="CORPORATE">CORPORATE</option>
            </select>
        </div>

       
        <div id="soho" style="display: none;">
            <label for="">Residental Fiber Optic</label>

            <select class="internetsoho form-control" id="boardboand" name="boardboand">
                <option value="">--Pilih Layanan--</option>
                <option value="BOARDBOAND SOHO">BOARDBOAND SOHO </option>
                <option value="BOARDBOAND SOHO">BOARDBOAND SOHOLITE</option>
            </select>
        </div>
        <div id="infinite" style="display: none;">
            <select class="internetsoho form-control" id="infinite" name="infinite">
                <option value="">--Pilih Layanan--</option>
                <option value="INFINITE LITE ">INFINITE LITE </option>
                <option value="INFINITE HOME ">INFINITE HOME </option>
                <option value="INFINITE COMBO ">INFINITE COMBO </option>
                <option value="INFINITE STREAM ">INFINITE STREAM </option>
            </select>
        </div>
        <div id="corporate" style="display: none;">
            <select class="internetsoho form-control" id="corp" name="corp">
                <option value="">--Pilih Layanan--</option>
                <option value="FAST">FAST </option>
                <option value="DEDICATED INTERNET ACCESS">DEDICATED INTERNET ACCESS</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">About</label>

            <textarea name="about" id="editor1" rows="10" cols="80">

               </textarea>
            <script>
                CKEDITOR.replace('editor1');
            </script>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Header</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="header" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile" required>Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Sidebar 1</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="sidebar1" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile" required>Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Sidebar 2</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="sidebar2" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile" required>Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Footer</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="footer" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile" required>Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Spesifikasi</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="spesifikasi" id="exampleInputFile">
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
    <script type="text/javascript">
        $(function() {
            $("#internet").change(function() {
                if ($(this).val() == "RESIDENTAL WIRELESS") {
                    $("#soho").show();
                    $("#infinite").hide();
                    $("#corporate").hide();
                } else if ($(this).val() == "RESIDENTAL FIBER OPTIC") {
                    $("#infinite").show();
                    $("#soho").hide();
                    $("#corporate").hide();
                } else if ($(this).val() == "CORPORATE") {
                    $("#infinite").hide();
                    $("#soho").hide();
                    $("#corporate").show();
                } else {
                    $("#infinite").hide();
                    $("#soho").hide();
                    $("#corporate").hide();
                }
            });
        });
    </script>
</div>