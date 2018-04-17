<!--Judul-->
<div class="container" style="margin-top: 70px">
    <div class="container" style="margin-left:45px;">
        <div class="row">
            <h3>Layanan Online</h3>
        </div>
    </div>
</div>
<!-- Pilih Data -->
<div class="container" style="background-color: white;margin-top: 2%; margin-bottom:70px;">
    <div class="col-lg-12">
        <div class="col-lg-10">
            <h3>Pemesanan Data</h3>
        </div>
        <div class="col-lg-2" style="text-align: end">
            <a type="button" class="btn btn-primary" href="<?php echo base_url('publikasi/pemesanan'); ?>" style="margin-top: 30px">Lanjutkan</a>
        </div>
    </div>
    <div class="col-lg-12" style="margin-bottom: 1%">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#hari" data-toggle="tab">Data Harian</a></li>
            <li><a href="#bulan" data-toggle="tab">Data Bulanan</a></li>
            <li><a href="#tahun" data-toggle="tab">Data Tahunan</a></li>
        </ul>
    </div>
    <div class="tab-content">
        
        <div id="hari" class="tab-pane fade in active">
            <div class="col-lg-12" style="margin-bottom: 1%">
                <table class="table" id="tblAddRow">
                    <thead>
                        <tr>
                            <th style="text-align:center;">Jenis Data</th>
                            <th style="text-align:center;">Tanggal Mulai</th>
                            <th style="text-align:center;">Jumlah Hari</th>
                            <th style="text-align:center;">Harga</th>
                            <th><input type="checkbox" id="checkedAll" style="width: 20px; height: 20px"/></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select class="form-group form-control">
                                    <option>--Jenis Data--</option>
                                    <option>Data Gempa</option>
                                    <option>Data Petir</option>
                                    <option>Data Angin</option>
                                    <option>Data Harian Hujan</option>
                                    <option>Data Suhu</option>
                                    <option>Data Kelembapan</option>
                                    <option>Lama penyinaran</option>
                                    <option>Arah/Kecepatan Angin</option>
                                    <option>Data Penguapan</option>
                                    <option>Data Curah Hujan</option>
                                    <option>Data Intensitas Hujan</option>
                                </select>
                            </td>
                            <td><input name="txtDate[]" type="date" class="form-group form-control"/></td>
                            <td><input name="txtName[]" type="input" class="form-group form-control" /></td>
                            <td><input name="txtName[]" type="input" class="form-group form-control" disabled="disabled" /></td>
                            <td><input name="ckcDel[]" type="checkbox" class="form-group form-control " style="width: 20px; height: 20px" /></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td style="text-align:center;"></td>
                            <td style="text-align:center;"></td>
                            <td style="text-align:right;"><h4>Total Harga :</h4></td>
                            <td style="text-align:center;"><input name="txtName[]" type="input" class="form-group form-control" disabled="disabled" /></td>
                            <td></td>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <td>
                                <button class="btn btn-primary" id="btnAddRow">Tambah Data</button>
                                <button class="btn btn-danger" id="btnDelCheckRow">Hapus Data</button>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>    
        <div id="bulan" class="tab-pane fade">
            <div class="col-lg-12" style="margin-bottom: 1%" >
                <table class="table" id="tblAddRow2">
                    <thead>
                        <tr>
                            <th style="text-align:center;">Jenis Data</th>
                            <th style="text-align:center;">Pilih Bulan</th>
                            <th style="text-align:center;">Pilih Tahun</th>
                            <th style="text-align:center;">Jumlah Bulan</th>
                            <th style="text-align:center;">Harga</th>
                            <th><input type="checkbox" id="checkedAll2" style="width: 20px; height: 20px"/></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select class="form-group form-control">
                                    <option>--Jenis Data--</option>
                                    <option>Data Gempa</option>
                                    <option>Data Petir</option>
                                    <option>Data Angin</option>
                                    <option>Data Harian Hujan</option>
                                    <option>Data Suhu</option>
                                    <option>Data Kelembapan</option>
                                    <option>Lama penyinaran</option>
                                    <option>Arah/Kecepatan Angin</option>
                                    <option>Data Penguapan</option>
                                    <option>Data Curah Hujan</option>
                                    <option>Data Intensitas Hujan</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-group form-control">
                                    <option>--Pilih Bulan--</option>
                                    <option>Januari</option>
                                    <option>Februari</option>
                                    <option>Maret</option>
                                    <option>April</option>
                                    <option>Mei</option>
                                    <option>Juni</option>
                                    <option>Juli</option>
                                    <option>Agustus</option>
                                    <option>September</option>
                                    <option>Oktober</option>
                                    <option>November</option>
                                    <option>Desember</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-group form-control">
                                    <option>--Pilih Bulan--</option>
                                    <option>Januari</option>
                                    <option>Februari</option>
                                    <option>Maret</option>
                                    <option>April</option>
                                    <option>Mei</option>
                                    <option>Juni</option>
                                    <option>Juli</option>
                                    <option>Agustus</option>
                                    <option>September</option>
                                    <option>Oktober</option>
                                    <option>November</option>
                                    <option>Desember</option>
                                </select>
                            </td>
                            <td><input name="txtName[]" type="input" class="form-group form-control" /></td>
                            <td><input name="txtName[]" type="input" class="form-group form-control" disabled="disabled" /></td>
                            <td><input name="ckcDel[]" type="checkbox" class="form-group form-control " style="width: 20px; height: 20px" /></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="text-align:right;"><h4>Total Harga :</h4></td>
                            <td style="text-align:center;"><input name="txtName[]" type="input" class="form-group form-control" disabled="disabled" /></td>
                            <td></td>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <td>
                                <button class="btn btn-primary" id="btnAddRow2">Tambah Data</button>
                                <button class="btn btn-danger" id="btnDelCheckRow2">Hapus Data</button>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div id="tahun" class="tab-pane fade">
            <div class="col-lg-12" style="margin-bottom: 1%" >
                <table class="table" id="tblAddRow3">
                    <thead>
                        <tr>
                            <th style="text-align:center;">Jenis Data</th>
                            <th style="text-align:center;">Tahun Mulai</th>
                            <th style="text-align:center;">Tahun Akhir</th>
                            <th style="text-align:center;">Harga</th>
                            <th><input type="checkbox" id="checkedAll3" style="width: 20px; height: 20px"/></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select class="form-group form-control">
                                    <option>--Jenis Data--</option>
                                    <option>Data Gempa</option>
                                    <option>Data Petir</option>
                                    <option>Data Angin</option>
                                    <option>Data Harian Hujan</option>
                                    <option>Data Suhu</option>
                                    <option>Data Kelembapan</option>
                                    <option>Lama penyinaran</option>
                                    <option>Arah/Kecepatan Angin</option>
                                    <option>Data Penguapan</option>
                                    <option>Data Curah Hujan</option>
                                    <option>Data Intensitas Hujan</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-group form-control">
                                    <option>--Pilih Tahun--</option>
                                    <option>2018</option>
                                    <option>2017</option>
                                    <option>2016</option>
                                    <option>2015</option>
                                    <option>2014</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-group form-control">
                                    <option>--Pilih Tahun--</option>
                                    <option>2018</option>
                                    <option>2017</option>
                                    <option>2016</option>
                                    <option>2015</option>
                                    <option>2014</option>
                                </select>
                            </td>
                            <td><input name="txtName[]" type="input" class="form-group form-control" disabled="disabled" /></td>
                            <td><input name="ckcDel[]" type="checkbox" class="form-group form-control " style="width: 20px; height: 20px" /></td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <td style="text-align:center;"></td>
                            <td style="text-align:center;"></td>
                            <td style="text-align:right;"><h4>Total Harga :</h4></td>
                            <td style="text-align:center;"><input name="txtName[]" type="input" class="form-group form-control" disabled="disabled" /></td>
                            <td></td>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <td>
                                <button class="btn btn-primary" id="btnAddRow3">Tambah Data</button>
                                <button class="btn btn-danger" id="btnDelCheckRow3">Hapus Data</button>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<!--Tanggal dan Bulan-->
<div class="container" style="background-color: white; margin-top: 25px;">
    <div class="container" style="padding-top: 25px; margin-bottom: 50px">
        <div class="col-lg-12" >
            <div class="col-lg-2">
                <form role="form">
                    <div class="form-group">
                        <select class="form-control">
                            <option>---- Pilih Bulan ----</option>
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-lg-2">
                <form role="form">
                    <div class="form-group">
                        <select class="form-control">
                            <option>---- Pilih Tahun ----</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-lg-2">
              <form role="form">
              <div class="form-group">
                <a type="button" class="btn btn-default" href=" ">Search</a>
              </div>
              </form>
            </div>

            <table class="table table-striped" style="width: 100%;">
            <!--Table Head-->
                <thead>
                    <tr>
                        <th rowspan="2" style="text-align: center; padding-bottom: 2.5%; font-size: 16px">Jenis Data</th>
                        <th colspan="31" style="text-align: center">Bulan : Tahun</th>
                    </tr>
                    <tr>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                            <th ><?php echo $i?></th>
                        <?php }?>
                    </tr>
                </thead>

            <!--Table Body-->
                <tbody >

            <!--Data Gempa-->
                    <tr>
                        <td>Data Gempa</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Petir-->
                    <tr>
                        <td>Data Petir</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Angin-->
                    <tr>
                        <td>Data Angin</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Hari Hujan-->
                    <tr>
                        <td>Data Harian Hujan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Suhu-->
                    <tr>
                        <td>Data Suhu</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Kelembapan-->
                    <tr>
                        <td>Data Kelembapan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Lama Penyinaran-->
                    <tr>
                        <td>Lama penyinaran</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Arah/Kecepatan Angin-->
                    <tr>
                        <td>Arah/Kecepatan Angin</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Penguapan-->
                    <tr>
                        <td>Data Penguapan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Curah Hujan-->
                    <tr>
                        <td>Data Curah Hujan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>

                    <!--Data Intensitas Hujan-->
                    <tr>
                        <td>Data Intensitas Hujan</td>
                        <?php for($i = 1; $i <= 31; $i++)
                        {?>
                        <th ><span class="glyphicon glyphicon-ok-circle" style="font-size:14px;color:green"></span></th>
                        <?php }?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Koding icon Circle X -->
<!-- <span class="glyphicon glyphicon-remove-circle" style="font-size:24px;"> -->

<script>
// For select all checkbox in table
$('#checkedAll').click(function (e) {
	//e.preventDefault();
    $(this).closest('#tblAddRow').find('td input:checkbox').prop('checked', this.checked);
});

$('#checkedAll2').click(function (e) {
	//e.preventDefault();
    $(this).closest('#tblAddRow2').find('td input:checkbox').prop('checked', this.checked);
});
    
$('#checkedAll3').click(function (e) {
	//e.preventDefault();
    $(this).closest('#tblAddRow3').find('td input:checkbox').prop('checked', this.checked);
});
    
// Add row the table
$('#btnAddRow').on('click', function() {
    var lastRow = $('#tblAddRow tbody tr:last').html();
    //alert(lastRow);
    $('#tblAddRow tbody').append('<tr>' + lastRow + '</tr>');
    $('#tblAddRow tbody tr:last input').val('');
});

$('#btnAddRow2').on('click', function() {
    var lastRow = $('#tblAddRow2 tbody tr:last').html();
    //alert(lastRow);
    $('#tblAddRow2 tbody').append('<tr>' + lastRow + '</tr>');
    $('#tblAddRow2 tbody tr:last input').val('');
});

$('#btnAddRow3').on('click', function() {
    var lastRow = $('#tblAddRow3 tbody tr:last').html();
    //alert(lastRow);
    $('#tblAddRow3 tbody').append('<tr>' + lastRow + '</tr>');
    $('#tblAddRow3 tbody tr:last input').val('');
});

// Delete row on click in the table
$('#tblAddRow').on('click', 'tr a', function(e) {
    var lenRow = $('#tblAddRow tbody tr').length;
    e.preventDefault();
    if (lenRow == 1 || lenRow <= 1) {
        alert("Can't remove all row!");
    } else {
        $(this).parents('tr').remove();
    }
});
    
$('#tblAddRow2').on('click', 'tr a', function(e) {
    var lenRow = $('#tblAddRow2 tbody tr').length;
    e.preventDefault();
    if (lenRow == 1 || lenRow <= 1) {
        alert("Can't remove all row!");
    } else {
        $(this).parents('tr').remove();
    }
});
    
$('#tblAddRow3').on('click', 'tr a', function(e) {
    var lenRow = $('#tblAddRow3 tbody tr').length;
    e.preventDefault();
    if (lenRow == 1 || lenRow <= 1) {
        alert("Can't remove all row!");
    } else {
        $(this).parents('tr').remove();
    }
});

// Delete selected checkbox in the table
$('#btnDelCheckRow').click(function() {
	var lenRow		= $('#tblAddRow tbody tr').length;
    var lenChecked	= $("#tblAddRow input[type='checkbox']:checked").length;
    var row	= $("#tblAddRow tbody input[type='checkbox']:checked").parent().parent();
    //alert(lenRow + ' - ' + lenChecked);
    if (lenRow == 1 || lenRow <= 1 || lenChecked >= lenRow) {
        alert("Can't remove all row!");
    } else {
        row.remove();
    }
});
    
$('#btnDelCheckRow2').click(function() {
	var lenRow		= $('#tblAddRow2 tbody tr').length;
    var lenChecked	= $("#tblAddRow2 input[type='checkbox']:checked").length;
    var row	= $("#tblAddRow2 tbody input[type='checkbox']:checked").parent().parent();
    //alert(lenRow + ' - ' + lenChecked);
    if (lenRow == 1 || lenRow <= 1 || lenChecked >= lenRow) {
        alert("Can't remove all row!");
    } else {
        row.remove();
    }
});
    
$('#btnDelCheckRow3').click(function() {
	var lenRow		= $('#tblAddRow3 tbody tr').length;
    var lenChecked	= $("#tblAddRow3 input[type='checkbox']:checked").length;
    var row	= $("#tblAddRow3 tbody input[type='checkbox']:checked").parent().parent();
    //alert(lenRow + ' - ' + lenChecked);
    if (lenRow == 1 || lenRow <= 1 || lenChecked >= lenRow) {
        alert("Can't remove all row!");
    } else {
        row.remove();
    }
});

    
</script>