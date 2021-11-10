//DIKA
//Screening Dua pilih radio obj pembiayaan
$('input[type="radio"]').change(function () {
	if (this.id == "radio-obj-kend") {
		console.log('pilih radio efd objek pembiayaan kendaraan');
		$('#form-object-pemb-dp').show();
		$('#form-object-pemb-dp-min').show();
		$('#form-object-pemb-angs').show();
		$('#form-object-pemb-tot-pembayaran').show();
		$('#form-object-pemb-dana-est-harga').hide();
		$('#form-object-pemb-dana-pengajuan-cair').hide();
		$('#form-object-pemb-dana-max-pencairan').hide();
	} else if (this.id == "radio-obj-dana") {
		console.log('pilih radio efd objek pembiayaan dana');
		$('#form-object-pemb-dp').hide();
		$('#form-object-pemb-dp-min').hide();
		$('#form-object-pemb-angs').show();
		$('#form-object-pemb-tot-pembayaran').hide();
		$('#form-object-pemb-dana-est-harga').show();
		$('#form-object-pemb-dana-pengajuan-cair').show();
		$('#form-object-pemb-dana-max-pencairan').show();
	}
});

//Dika responsive DataTables TAB
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	$($.fn.dataTable.tables(true)).DataTable()
		.columns.adjust()
		.responsive.recalc();
});
//DataTable Upload Dokumen
var tbl_upload_dok = $('#tbl-upload-dokumen').DataTable({
	"autoWidth": false,
	"responsive": true,
	"searching": false,
	"paging": false,
	"info": false
});

//Dika
//Trigger modal bantuan isi data
$('#btn-bantuan-isi-data').click(function () {
	console.log('trigger button modal bantuan isi datas');
	$('#modal-bantuan-isi').modal('show');
});

//Trigger modal bantuan isi data final
$('#btn-submit-bantuan').click(function () {
	if (document.getElementById('bantuan-isi-ya').checked) {
		console.log('bantuan ya');
		$('#notif-positif').show();
		$('#notif-negatif').hide();
		$('#modal-bantuan-final').modal('show');

	} else if (document.getElementById('bantuan-isi-tidak').checked) {
		console.log('bantuan tidak');
		$('#notif-positif').hide();
		$('#notif-negatif').show();
		$('#modal-bantuan-final').modal('show');
	}
});

//DIKA
//Screening Dua show form alasan batal
$('input[type="radio"]').change(function () {
	if (this.id == "bantuan-isi-ya") {
		console.log('bantuan ya');
		$('#form-alasan-batal').hide();
	} else if (this.id == "bantuan-isi-tidak") {
		console.log('bantuan tidak');
		$('#form-alasan-batal').show();
	}
});