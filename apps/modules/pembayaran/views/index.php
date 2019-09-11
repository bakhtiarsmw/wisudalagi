
<div class="row">
    <div class="col-md-12" style="padding:20px 50px;">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_modal_4" >
            Create Billing
        </button>
    </div>
</div>

<div class="row">
    <div class="col-md-12" style="padding:20px 50px;">
        <table id="tbl_pembayaran" class="table table-striped table-bordered nowrap" width="100%" style="font-weight:500;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Virtual Account</th>
                    <th>Transaksi ID</th>
                    <th>Nama</th>
                    <th>Tagihan</th>
                    <th>Pembayaran</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Virtual Account</th>
                    <th>Transaksi ID</th>
                    <th>Nama</th>
                    <th>Tagihan</th>
                    <th>Pembayaran</th>
                    <th>Status</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>


<!--Test Gitraken-->

<div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <form class="m-form m-form--fit m-form--label-align-right" id="paymentForm" method="POST" role="form" action="<?=site_url('pembayaran/post_payment');?>">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Create Billing Now
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--begin::Form-->
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    NIM <span style="color:blue;font-size:12px;">*Press Enter After Typing Nim</span>
                                </label>
                                <input type="text" name="nim" maxlength="11" id="txt_nim" class="form-control m-input" placeholder="NIM" required>
                                <div class="message-response" style="font-size:11px; color:red;padding-left:20px;padding-top:10px;"></div>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Customer Name
                                </label>
                                <input type="text" readonly name="customer_name" id="c_name" class="form-control m-input" placeholder="Customer Name" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Customer Email
                                </label>
                                <input type="email" name="customer_email" class="form-control m-input" placeholder="Customer Email" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Customer Phone
                                </label>
                                <input type="text" name="customer_phone" class="form-control m-input" placeholder="Customer Phone" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Virtual Account
                                </label>
                                <input type="text" readonly name="virtual_account" id="va" class="form-control m-input" placeholder="Virtual Account" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Program Studi
                                </label>
                                <input type="text" readonly name="prodi" id="prodi" class="form-control m-input" placeholder="Customer Name" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="trx_id">
                                    Tahun
                                </label>
                                <select name="tahun" id="tahun" class="form-control m-input" required>
                                    <option value="">Pilih Tahun</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="trx_id">
                                    Periode Semester
                                </label>
                                <div class="form-group">
                                    <input type="radio" name="periode" value="1" required> Ganjil
                                    <input type="radio" name="periode" value="2"> Genap
                                </div>

                            </div>
                            <div class="form-group m-form__group">
                                <label for="trx_id">
                                    Jenis Pembayaran
                                </label>
                                <select name="jenis" id="jenis" class="form-control m-input" required>
                                    <option value="">Pilih Jenis</option>
                                    <option value="05">Wisuda</option>
                                </select>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="trx_amount">
                                    TRX Amount
                                </label>
                                <input type="text" name="trx_amount" class="form-control m-input" id="trx_amount" placeholder="TRX Amount" required>
                            </div>
                        </div>
                    <!--end::Form-->
                </div>
                <div class="modal-footer">
                    <span id="message-api" style="font-size:12px;color:red;font-weight:bold;"></span>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" id="submitPayment" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

<div class="row">
    <div class="col-md-12" style="padding:20px 50px;">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_modal_4" >
            Create Billing
        </button>
    </div>
</div>

<div class="row">
    <div class="col-md-12" style="padding:20px 50px;">
        <table id="tbl_pembayaran" class="table table-striped table-bordered nowrap" width="100%" style="font-weight:500;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Virtual Account</th>
                    <th>Transaksi ID</th>
                    <th>Nama</th>
                    <th>Tagihan</th>
                    <th>Pembayaran</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Virtual Account</th>
                    <th>Transaksi ID</th>
                    <th>Nama</th>
                    <th>Tagihan</th>
                    <th>Pembayaran</th>
                    <th>Status</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>


<!--Test Gitraken-->

<div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-default" role="document">
        <div class="modal-content">
            <form class="m-form m-form--fit m-form--label-align-right" id="paymentForm" method="POST" role="form" action="<?=site_url('pembayaran/post_payment');?>">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Create Billing Now
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--begin::Form-->
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    NIM <span style="color:blue;font-size:12px;">*Press Enter After Typing Nim</span>
                                </label>
                                <input type="text" name="nim" maxlength="11" id="txt_nim" class="form-control m-input" placeholder="NIM" required>
                                <div class="message-response" style="font-size:11px; color:red;padding-left:20px;padding-top:10px;"></div>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Customer Name
                                </label>
                                <input type="text" readonly name="customer_name" id="c_name" class="form-control m-input" placeholder="Customer Name" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Customer Email
                                </label>
                                <input type="email" name="customer_email" class="form-control m-input" placeholder="Customer Email" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Customer Phone
                                </label>
                                <input type="text" name="customer_phone" class="form-control m-input" placeholder="Customer Phone" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Virtual Account
                                </label>
                                <input type="text" readonly name="virtual_account" id="va" class="form-control m-input" placeholder="Virtual Account" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleInputPassword1">
                                    Program Studi
                                </label>
                                <input type="text" readonly name="prodi" id="prodi" class="form-control m-input" placeholder="Customer Name" required>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="trx_id">
                                    Tahun
                                </label>
                                <select name="tahun" id="tahun" class="form-control m-input" required>
                                    <option value="">Pilih Tahun</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="trx_id">
                                    Periode Semester
                                </label>
                                <div class="form-group">
                                    <input type="radio" name="periode" value="1" required> Ganjil
                                    <input type="radio" name="periode" value="2"> Genap
                                </div>

                            </div>
                            <div class="form-group m-form__group">
                                <label for="trx_id">
                                    Jenis Pembayaran
                                </label>
                                <select name="jenis" id="jenis" class="form-control m-input" required>
                                    <option value="">Pilih Jenis</option>
                                    <option value="05">Wisuda</option>
                                </select>
                            </div>
                            <div class="form-group m-form__group">
                                <label for="trx_amount">
                                    TRX Amount
                                </label>
                                <input type="text" name="trx_amount" class="form-control m-input" id="trx_amount" placeholder="TRX Amount" required>
                            </div>
                        </div>
                    <!--end::Form-->
                </div>
                <div class="modal-footer">
                    <span id="message-api" style="font-size:12px;color:red;font-weight:bold;"></span>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" id="submitPayment" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>