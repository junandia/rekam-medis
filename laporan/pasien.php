<form action="laporan/view-pasien.php" method="GET" target="_blank">
<table class="table border" cellspacing="1" cellpadding="2">
	<tr>
		<td>Tanggal Daftar </td>
		<td>
			<div class="input-control text" data-role="datepicker" data-date="1972-12-21" data-format="yyyy-mm-dd">
                <input type="text" name="Tawal" required="">
                <button class="button"><span class="mif-calendar"></span></button>
            </div>
		</td>
		<td>Sampai dengan</td>
		<td>
			<div class="input-control text" data-role="datepicker" data-date="1972-12-21" data-format="yyyy-mm-dd">
                <input type="text" name="Takhir" required="">
                <button class="button"><span class="mif-calendar"></span></button>
            </div>
		</td>
		<td><input type="submit" class="button primary" value="Lihat"></td>
	</tr>
</table>
</form>