$(function () {

    $('.tombolTambahData').on('click', function () {
        $('#formModalLabel').html('Tambah Data Pelanggan');
        $('.modal-footer button[type=submit]').html('Tambah Data')
    });

    $('.tampilModalUbah').on('click', function () {

        $('#formModalLabel').html('Ubah Data Pelanggan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpproject/phpmvc/public/pelanggan/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpproject/phpmvc/public/pelanggan/getubah',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#kdpl').val(data.kd_pelanggan);
                $('#nmpl').val(data.nama_pelanggan);
                $('#alm').val(data.alamat);
                $('#telp').val(data.telp);
            }
        });

    });

});