//Dika
//Trigger button next
$('.btnNext').click(function () {
	console.log('trigger next');
	var nextTab;
	$('.nav-link').map(function (element) {
		if ($(this).hasClass("active")) {
			nextTab = $(this).parent().next('li');
		}
	})
	nextTab.find('a').trigger('click');
});

//Dika
//Trigger button prev
$('.btnPrev').click(function () {
	console.log('trigger prev');
	var prevTab;
	$('.nav-link').map(function (element) {
		if ($(this).hasClass("active")) {
			prevTab = $(this).parent().prev('li');
		}
	})
	prevTab.find('a').trigger('click');
});

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

//DIKA
//Screening Dua show form alasan batal
$('input[type="radio"]').change(function () {
	if (this.id == "bantuan-isi-ya") {
		console.log('bantuan ya');
		$('#form-alasan-batal').hide();
	}else if (this.id == "bantuan-isi-tidak") {
		console.log('bantuan tidak');
		$('#form-alasan-batal').show();
	}
});