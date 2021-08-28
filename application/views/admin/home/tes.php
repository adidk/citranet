<form action="testing.php" method="POST" style="margin-top: 50px;">
    <?= form_open_multipart(''); ?>
    <div class="form-group mt-3">
        <select name="internet" id="internet" class="form-control" required="required">
            <option value="">--Pilih Layanan--</option>
            <option value="RESIDENTAL WIRELESS">RESIDENTAL WIRELESS</option>
            <option value="RESIDENTAL FIBER OPTIC">RESIDENTAL FIBER OPTIC</option>
            <option value="CORPORATE">CORPORATE</option>
        </select>
    </div>
    <div id="soho" style="display: none;">
        <select class="internetsoho form-control" id="layanan" name="layanan">
            <option value="">--Pilih Layanan--</option>
            <option value="BOARDBOAND SOHO">BOARDBOAND SOHO </option>
            <option value="BOARDBOAND SOHO">BOARDBOAND SOHOLITE</option>
        </select>
    </div>
    <div id="infinite" style="display: none;">
        <select class="internetsoho form-control" id="layanan" name="layanan">
            <option value="">--Pilih Layanan--</option>
            <option value="INFINITE LITE ">INFINITE LITE  </option>
            <option value="INFINITE HOME ">INFINITE HOME </option>
            <option value="INFINITE COMBO ">INFINITE COMBO  </option>
            <option value="INFINITE STREAM ">INFINITE STREAM </option>
        </select>
    </div>
    <div id="corporate" style="display: none;">
        <select class="internetsoho form-control" id="layanan" name="layanan">
            <option value="">--Pilih Layanan--</option>
            <option value="FAST">FAST </option>
            <option value="DEDICATED INTERNET ACCESS">DEDICATED INTERNET ACCESS</option>
        </select>
    </div>

        <tr id="mobil1" style="display: none;">
            <td><label>Plat Nomor <i style="color: red; font-size: 12px;">(* Harap di isi bila membawa kendaraan)</i></label></td>
            <td><input type="text" name="nopol" id="nopol" class="form-control" /></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="kirim" id="kirim" class="btn btn-sm btn-primary" /> <a href="testing.php" class="btn btn-sm btn-warning"> Refresh</a></td>
        </tr>
        <script type="text/javascript">
            $(function() {
                $("#internet").change(function() {
                    if ($(this).val() == "RESIDENTAL WIRELESS") {
                        $("#soho").show();
                        $("#infinite").hide();
                        $("#corporate").hide();
                    } else if($(this).val() == "RESIDENTAL FIBER OPTIC") {
                        $("#infinite").show();
                        $("#soho").hide();
                        $("#corporate").hide();
                    } else if($(this).val() == "CORPORATE") {
                        $("#infinite").hide();
                        $("#soho").hide();
                        $("#corporate").show();
                    }
                });
            });
        </script>
        </body>

        </html>