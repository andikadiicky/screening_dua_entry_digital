$(document).ready(function () {
	app.formEntryDigitalScrDua.init();
});

$(document).on('select2:open', () => {
	document.querySelector('.select2-search__field').focus();
	$('.select2-search__field').css("text-transform", "uppercase");
});

app.formEntryDigitalScrDua = {
	controller: 'c_data_entry_digital/',
	api: 'c_data_entry_digital_api/',
	elm: {},

	init: function () {
		var that = this;
		
	},
}

//FUNCTION FOR TAB IDENTITAS

//FUNCTION FOR TAB PEKERJAAN

//FUNCTION FOR TAB PENDAPATAN

//FUNCTION FOR TAB OBJECT PEMBIAYAAN
//Pilih Radio Obj Pembiayaan
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


//FUNCTION FOR TAB DATA KEPEMILIKAN


//Responsive DataTables TAB
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


//Trigger modal bantuan isi data
$('#btn-bantuan-isi-data').click(function () {
	console.log('trigger button modal bantuan isi data');
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


//Show form alasan batal
$('input[type="radio"]').change(function () {
	if (this.id == "bantuan-isi-ya") {
		console.log('bantuan ya');
		$('#form-alasan-batal').hide();
	} else if (this.id == "bantuan-isi-tidak") {
		console.log('bantuan tidak');
		$('#form-alasan-batal').show();
	}
});
