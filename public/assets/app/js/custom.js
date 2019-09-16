
function callAjax(){
    $.ajax({
        processing: true,
        serverSide: true,
        type: "POST",
        url: 'pembayaran/get_list_va',
        dataType: 'json',
        cache:false,
        success: function (obj) {
            $('#tbl_pembayaran').DataTable({
                data: obj,
                columns: [
                    {'data': 'id'},
                    {'data': 'customer_name'},
                    {'data': 'trx_id'},
                    {'data': 'trx_amount'},
                    {
                        "render": function(data, type, row){
                            var date = new Date(row.datetime_expired);
                            var cnv = date.toLocaleString();

                            return cnv;

                        }
                    },
                    {
                        "render": function (data, type, row) {
                            var expired = new Date(row.datetime_expired);
                            var today = new Date();
                            if( today > expired ){
                                if (row.va_status === 1) {
                                    var status_va = '<span style="color:red;font-size:11px;">Belum Lunas - Expired</span>';
                                } else if (row.va_status === 2) {
                                    var status_va = '<span style="color:green;font-size:11px;">Lunas</span>';
                                } else {
                                    var status_va = '<span style="color:red;font-size:11px;">Belum Lunas - Expired</span>';
                                }
                            }else {
                                if (row.va_status === 1) {
                                    var status_va = '<span style="color:red;font-size:11px;">Belum Lunas</span>';
                                } else if (row.va_status === 2) {
                                    var status_va = '<span style="color:green;font-size:11px;">Lunas</span>';
                                } else {
                                    var status_va = '<span style="color:red;font-size:11px;">Belum Lunas</span>';
                                }
                            }

                            return status_va;
                        },
                    },
                    {
                        "render": function (data, type, row) {
                            var expired = new Date(row.datetime_expired);
                            var today = new Date();
                            if( today > expired ){
                                var status_va = '<a href="javascript:void(0)" class="btn btn-warning btn-sm" onclick="callInquiry('+row.trx_id+')">Inquiry</a>';
                            }else{
                                if (row.va_status === 1) {
                                    var status_va = '<a href="' + window.location.pathname + '/get_inquiry/' + row.trx_id + '" class="btn btn-default btn-sm" target="_blank">Invoice</a> ' +
                                        '<a href="javascript:void(0)" class="btn btn-primary btn-sm" onclick="callUpdateForm('+row.trx_id+','+row.id+')">Update</a> '+
                                        ' <a href="javascript:void(0)" class="btn btn-warning btn-sm" onclick="callInquiry('+row.trx_id+')">Inquiry</a>';
                                } else if (row.va_status === 2) {
                                    var status_va = '<a href="' + window.location.pathname + '/get_inquiry/' + row.trx_id + '" class="btn btn-default btn-sm" target="_blank">Invoice</a> ' + '<a href="javascript:void(0)" class="btn btn-warning btn-sm" onclick="callInquiry('+row.trx_id+')">Inquiry</a>';
                                } else {
                                    var status_va = '-';
                                }
                            }

                            return status_va;
                        },
                    },
                ],
                order: [[0, "desc"]],
                responsive: true,
                bDestroy: true
            });

        },
        error: function (obj, textstatus) {
            alert(obj.msg);
        }
    });
}

function callUpdateForm(trxId, id){
    $('#m_modal_6').modal('show');
    $(".message-response-up").html('Wait, Getting Data ...');
    $.ajax({
        processing:true,
        serverSide:true,
        type: "POST",
        url: 'pembayaran/get_data_inquiry/' + trxId,
        dataType: 'json',
        success: function (obj_iq, textstatus) {
            var iq_nama = obj_iq.message.customer_name;
            var iq_email = obj_iq.message.customer_email;
            var iq_phone = obj_iq.message.customer_phone;
            var iq_va = obj_iq.message.virtual_account;
            var iq_status_va = obj_iq.message.va_status;
            var payment_ntb = obj_iq.message.payment_ntb;

            if(payment_ntb === null && iq_status_va === "2"){
                var status_iq = 'Expired';
                $('#submitInquiry').prop('disabled', true);
            }else if(payment_ntb !== "" && iq_status_va === "2"){
                var status_iq = 'Lunas';
                $('#submitInquiry').prop('disabled', true);
            }else if(payment_ntb === null && iq_status_va === "1"){
                var status_iq = 'Belum Lunas';
                $('#submitInquiry').prop('disabled', false);
            }else{
                var status_iq = 'Undefined';
                $('#submitInquiry').prop('disabled', true);
            }

            var iq_amount = obj_iq.message.trx_amount;

            $("#id_trx_up").val(trxId);
            $("#id_up").val(id);
            $("#up_name").val(iq_nama);
            $("#up_email").val(iq_email);
            $("#up_phone").val(iq_phone);
            $("#up_va").val(iq_va);
            $("#status_va_up").val(status_iq);
            $("#up_trx_amount").val(iq_amount);

            $(".message-response-up").html('');
        },
        error: function (obj_iq, textstatus) {
            $(".message-response-p").html('Failed Getting Data');
        }
    });
}

function callInquiry(trxId){
    $('#m_modal_5').modal('show');

    $(".message-response-iq").html('Wait, Getting Data ...');

    $.ajax({
        processing:true,
        serverSide:true,
        type: "POST",
        url: 'pembayaran/get_data_inquiry/' + trxId,
        dataType: 'json',
        cache:false,
        success: function (obj_iqq, textstatus) {

            var iq_nama = obj_iqq.message.customer_name;
            var iq_email = obj_iqq.message.customer_email;
            var iq_phone = obj_iqq.message.customer_phone;
            var iq_va = obj_iqq.message.virtual_account;
            var iq_status_va = obj_iqq.message.va_status;
            var payment_ntb = obj_iqq.message.payment_ntb;

            if(payment_ntb === null && iq_status_va === "2"){
                var status_iq = 'Expired';
            }else if(payment_ntb !== "" && iq_status_va === "2"){
                var status_iq = 'Lunas';
            }else if(payment_ntb === null && iq_status_va === "1"){
                var status_iq = 'Belum Lunas';
            }else{
                var status_iq = 'Undefined';
            }

            var iq_amount = obj_iqq.message.trx_amount;

            $("#iq_trx_id").val(trxId);
            $("#iq_name").val(iq_nama);
            $("#iq_email").val(iq_email);
            $("#iq_phone").val(iq_phone);
            $("#iq_va").val(iq_va);
            $("#status_va_iq").val(status_iq);
            $("#iq_trx_amount").val(iq_amount);

            $(".message-response-iq").html('');
        },
        error: function (obj_iqq, textstatus) {
            $(".message-response-iq").html('Failed Getting Data');
        }
    });
}

$(document).ready(function() {

    var batasBayarWisuda = new Date('2019-10-07 23:59:00');
    var todayByr = new Date();
    if( todayByr > batasBayarWisuda ){
        $('#message-batas-pembayaran').html('Pembayaran Wisuda Telah Berakhir!');
        $('#create_billing').prop('disabled', true);
    }



        var pathPage = $("#uri-name").val();

        if(pathPage==='pembayaran'){
            callAjax();


            $(document).ready(function(){
                setInterval(callAjax,300000);
            });
        }



    $("#paymentForm").on('submit', function(e) {
        e.preventDefault();
        $('#submitPayment').prop('disabled', true);
        $("#submitPayment").html('Submiting ...');

        var paymentForm = $(this);

        $.ajax({
            url: paymentForm.attr('action'),
            type: 'post',
            data: paymentForm.serialize(),
            success: function(response){
                console.log(response);
                if(response.status === '102'){
                    var pesan = ' ('+ response.status +') ' + response.message + '<br> Silahkan Selesaikan Tagihan Sebelumnya';
                    $("#submitPayment").html('Failed, Try Again');
                    $('#submitPayment').prop('disabled', false);
                }else if(response.status === '000'){
                    var pesan = ' ('+ response.status +') ' + response.message + '<br> Redirect Page ..';
                    $("#submitPayment").html('Success');
                    window.location.reload();
                }else{
                    var pesan = ' ('+ response.status +') ' + response.message;
                    $("#submitPayment").html('Failed, Try Again');
                    $('#submitPayment').prop('disabled', false);
                }
                $("#message-api").html(pesan)

            },
            error: function(xhr, status, error) {
                alert(status);
                e.preventDefault();
            }
        });
    });

    // Get VA By NIM
    $("#txt_nim").bind("keypress", function(e){
        var keyCode = e.which ? e.which : e.keyCode;

        if (!(keyCode >= 48 && keyCode <= 57 || keyCode === 8 || keyCode === 13)) {
            $(".message-response").html('Enter NIM only with numbers');
            return false;
        }else{
            $(".message-response").html('');
            if(e.keyCode === 13){
                $("#va").val('Get data..');
                $("#prodi").val('Get data..');
                $("#c_name").val('Get data..');
                $('#submitPayment').prop('disabled', true);

                $.ajax({
                    processing:true,
                    serverSide:true,
                    type: "POST",
                    url: 'pembayaran/get_va_byNim',
                    data: {nim: $("#txt_nim").val()},
                    dataType: 'json',
                    cache:false,
                    success: function (obj, textstatus) {
                        $("#va").val(obj[0].NoVa);
                        $("#prodi").val(obj[0].Prodi);
                        $("#c_name").val(obj[0].nama);
                        $('#submitPayment').prop('disabled', false);
                    },
                    error: function (obj, textstatus) {
                        $(".message-response").html('NIM tidak ditemukan');
                        $("#va").val('Failed, There is No Data ');
                        $("#prodi").val('Failed, There is No Data ');
                        $("#c_name").val('Failed, There is No Data ');

                        $('#submitPayment').prop('disabled', true);
                    }
                });
            }

        }





    });

    $("#txt_nim").blur(function(){
        $("#va").val('Get data..');
        $("#prodi").val('Get data..');
        $("#c_name").val('Get data..');

        $.ajax({
            processing:true,
            serverSide:true,
            type: "POST",
            url: 'pembayaran/get_va_byNim',
            data: {nim: $("#txt_nim").val()},
            dataType: 'json',
            cache:false,
            success: function (obj, textstatus) {
                $("#va").val(obj[0].NoVa);
                $("#prodi").val(obj[0].Prodi);
                $("#c_name").val(obj[0].nama);
            },
            error: function (obj, textstatus) {
                $(".message-response").html('NIM tidak ditemukan');
                $("#va").val('Failed, There is No Data ');
                $("#prodi").val('Failed, There is No Data ');
                $("#c_name").val('Failed, There is No Data ');
            }
        });
    });

    //Typing Tagihan
    var $form = $( "#paymentForm" );
    var $input = $form.find( "#trx_amount" );

    $input.on( "keyup", function( event ) {


        // When user select text in the document, also abort.
        var selection = window.getSelection().toString();
        if ( selection !== '' ) {
            return;
        }
        // When the arrow keys are pressed, abort.
        if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
            return;
        }


        var $this = $( this );

        // Get the value.
        var input = $this.val();

        var input = input.replace(/[\D\s\._\-]+/g, "");
        input = input ? parseInt( input, 10 ) : 0;

        $this.val( function() {
            return ( input === 0 ) ? "" : input.toLocaleString( "id-ID" );
        } );
    } );

    /**
     * ==================================
     * When Form Submitted
     * ==================================
     */
    $form.on( "submit", function( event ) {

        var $this = $( this );
        var arr = $this.serializeArray();

        for (var i = 0; i < arr.length; i++) {
            arr[i].value = arr[i].value.replace(/[($)\s\._\-]+/g, ''); // Sanitize the values.
        };

        console.log( arr );

        event.preventDefault();
    });

    // $(document).bind("contextmenu",function(e){
    //     return false;
    // });
    // $(document).keydown(function(e) {
    //     var keyCode = e.which ? e.which : e.keyCode;
    //     if(keyCode === 123) {
    //         return false;
    //     }
    //     if(e.ctrlKey && e.shiftKey && e.keyCode === 'I'.charCodeAt(0)){
    //         return false;
    //     }
    //     if(e.ctrlKey && e.shiftKey && e.keyCode === 'R'.charCodeAt(0)){
    //         return false;
    //     }
    //     if(e.ctrlKey && e.shiftKey && e.keyCode === 'T'.charCodeAt(0)){
    //         return false;
    //     }
    //     if(e.ctrlKey && e.shiftKey && e.keyCode === 'J'.charCodeAt(0)){
    //         return false;
    //     }
    //     if(e.ctrlKey && e.keyCode === 'U'.charCodeAt(0)){
    //         return false;
    //     }
    // });


    // INQUIRY
    $("#iq_trx_id").bind("keypress", function(e){
        var keyCode = e.which ? e.which : e.keyCode;

        if (!(keyCode >= 48 && keyCode <= 57 || keyCode === 8 || keyCode === 13)) {
            $(".message-response").html('Enter NIM only with numbers');
            return false;
        }else{
            $(".message-response").html('');
            if(e.keyCode === 13){
                $(".message-response").html('Wait! Getting Data ...');
                $('#submitInquiry').prop('disabled', true);

                $.ajax({
                    processing:true,
                    serverSide:true,
                    type: "POST",
                    url: 'pembayaran/get_data_inquiry/' + $("#iq_trx_id").val(),
                    dataType: 'json',
                    cache:false,
                    success: function (obj_iq, textstatus) {

                        var iq_nama = obj_iq.message.customer_name;
                        var iq_email = obj_iq.message.customer_email;
                        var iq_phone = obj_iq.message.customer_phone;
                        var iq_va = obj_iq.message.virtual_account;
                        var iq_status_va = obj_iq.message.va_status;
                        var payment_ntb = obj_iq.message.payment_ntb;

                        if(payment_ntb === null && iq_status_va === "2"){
                            var status_iq = 'Expired';
                            $('#submitInquiry').prop('disabled', true);
                        }else if(payment_ntb !== "" && iq_status_va === "2"){
                            var status_iq = 'Lunas';
                            $('#submitInquiry').prop('disabled', true);
                        }else if(payment_ntb === null && iq_status_va === "1"){
                            var status_iq = 'Belum Lunas';
                            $('#submitInquiry').prop('disabled', false);
                        }else{
                            var status_iq = 'Undefined';
                            $('#submitInquiry').prop('disabled', true);
                        }

                        var iq_amount = obj_iq.message.trx_amount;

                        $("#iq_name").val(iq_nama);
                        $("#iq_email").val(iq_email);
                        $("#iq_phone").val(iq_phone);
                        $("#iq_va").val(iq_va);
                        $("#status_va").val(status_iq);
                        $("#iq_trx_amount").val(iq_amount);

                        $(".message-response").html('');
                        $('#submitInquiry').prop('disabled', false);
                    },
                    error: function (obj_iq, textstatus) {
                        $(".message-response").html('Failed Getting Data');
                        $('#submitInquiry').prop('disabled', true);
                    }
                });
            }

        }
    });

    $('#m_modal_5').on('hidden.bs.modal', function (e) {
        $('#inquiryForm :input').val('');
    });


    // UPDATE
    $('#m_modal_6').on('hidden.bs.modal', function (e) {
        $('#updateForm :input').val('');
    });
    $("#updateForm").on('submit', function(e) {
        e.preventDefault();
        $('#updatePayment').prop('disabled', true);
        $("#updatePayment").html('Updating ...');

        var updatePayment = $(this);

        $.ajax({
            url: updatePayment.attr('action'),
            type: 'post',
            data: updatePayment.serialize(),
            success: function(response){
                console.log(response);
                if(response.status === '000'){
                    var pesan = ' ('+ response.status +') ' + response.message + '<br> Redirect Page ..';
                    $("#updatePayment").html('Success');
                    window.location.reload();
                }else{
                    var pesan = ' ('+ response.status +') ' + response.message;
                    $("#updatePayment").html('Failed, Try Again');
                    $('#updatePayment').prop('disabled', false);
                }
                $("#message-api-up").html(pesan)

            },
            error: function(xhr, status, error) {
                alert(status);
                e.preventDefault();
            }
        });
    });

    var $formUp = $( "#updateForm" );
    var $inputUp = $formUp.find( "#up_trx_amount" );

    $inputUp.on( "keyup", function( event ) {


        // When user select text in the document, also abort.
        var selection = window.getSelection().toString();
        if ( selection !== '' ) {
            return;
        }
        // When the arrow keys are pressed, abort.
        if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
            return;
        }


        var $this = $( this );

        // Get the value.
        var inputUp = $this.val();

        var inputUp = inputUp.replace(/[\D\s\._\-]+/g, "");
        inputUp = inputUp ? parseInt( inputUp, 10 ) : 0;

        $this.val( function() {
            return ( inputUp === 0 ) ? "" : inputUp.toLocaleString( "id-ID" );
        } );
    } );

});