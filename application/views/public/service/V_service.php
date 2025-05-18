<div class="container-fluid service py-1">
   <div class="container py-3">
      <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
         <h6 class="mb-4 display-3">Tiket Kunjungan</h6>
      </div>
      <div class="row">
         <!-- Section Form Pemesanan -->
         <section class="col-lg-4 connectedSortable">
            <div class="card">
               <form id="bookingForm" type="form">
                  <div class="card-body">
                     <h4 class="card-title text-center mb-3">FORM PEMESANAN TIKET</h4>
                     <!-- step1 -->
                     <div id="step1">
                        <div class="row mb-3" hidden>
                           <div class="form-group"></div>
                           <label for="sku" class="form-label">ID</label>
                           <input type="text" class="form-control" id="sku" name="sku">
                        </div>
                        <div class="row mb-3">
                           <div class="form-group">
                              <label for="ticketType" class="form-label">Jenis Tiket</label>
                              <select class="form-control select2 w-100" id="ticketType" name="ticketType">
                                 <option value="">-- Pilih --</option>
                                 <option value="HT" data-price="30000">Harga per jam</option>
                                 <option value="DT" data-price="50000">Harga per hari</option>
                              </select>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="form-group">
                              <label for="name" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control" id="name" name="name">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="form-group">
                              <label for="no_telp">Nomor Telepon</label>
                              <div class="input-group">
                                 <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                 <input type="text" class="form-control" id="no_telp" name="no_telp">
                              </div>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="form-group">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" name="email">
                           </div>
                        </div>
                     </div>
                     <!-- step2 -->
                     <div id="step2" style="display: none;">
                        <div class="row mb-3">
                           <div class="form-group">
                              <label for="reservation_date" class="form-label">Tanggal Booking</label>
                              <input type="date" class="form-control" id="reservation_date" name="reservation_date">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="form-group">
                              <label for="reservation_time" class="form-label">Waktu Booking</label>
                              <input type="time" min="07:00" max="21:00" class="form-control" id="reservation_time" name="reservation_time">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="form-group">
                              <label for="ticket_quantity" class="form-label">Jumlah Tiket</label>
                              <div class="d-flex align-items-center">
                                 <button type="button" class="btn btn-outline-secondary me-2" id="decreaseBtn">-</button>
                                 <input type="number" min="1" value="1" class="form-control text-center" style="width: max-width;" id="ticket_quantity" name="ticket_quantity" readonly>
                                 <button type="button" class="btn btn-outline-secondary ms-2" id="increaseBtn">+</button>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="form-group">
                              <label for="voucher" class="form-label">Punya kode voucher ?</label>
                              <input type="text" class="form-control" id="voucher" name="voucher">
                              <small id="voucherError" class="text-danger" style="display: none;"></small>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="form-group">
                              <label for="total" class="form-label">Total</label>
                              <div class="input-group">
                                 <span class="input-group-text">Rp.</span>
                                 <input type="text" class="form-control" id="total" name="total" disabled>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="form-group">
                              <label for="count" class="form-label">Total Diskon</label>
                              <div class="input-group">
                                 <span class="input-group-text">Rp.</span>
                                 <input type="text" class="form-control" id="count" name="count" disabled>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="form-group">
                              <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="termsCheck" name="termsCheck" required>
                                 <label class="form-check-label" for="termsCheck">Saya menyetujui <br> syarat dan ketentuan</label>
                              </div>
                           </div>
                        </div>
                     </div>
               </form>
            </div>
            <div class="card-footer text-end">
               <button type="button" class="btn btn-secondary py-2 me-2 text-white" id="backbtn" style="display: none;">Kembali</button>
               <button type="button" class="btn btn-primary py-2 text-white" id="primarybtn">Selanjutnya</button>
            </div>
      </div>
      </section>
      <!-- Section Daftar Harga Tiket -->
      <section class="col-lg-8 connectedSortable">
         <div class="card mb-3">
            <div class="card-body">
               <h4 class="card-title text-center mb-5">Daftar Harga Tiket</h4>
               <div class="container">
                  <table class="table display table-bordered text-center">
                     <thead class="table-primary">
                        <tr>
                           <th>Hari</th>
                           <th>Harga per jam</th>
                           <th>Harga per hari</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Weekdays</td>
                           <td>30k /jam</td>
                           <td>50k /hari</td>
                        </tr>
                        <tr>
                           <td>Weekend</td>
                           <td>40k /jam</td>
                           <td>60k /hari</td>
                        </tr>
                        <tr>
                           <td>Membership</td>
                           <td colspan="2">300k /bulan</td>
                        </tr>
                     </tbody>
                  </table>
                  <span><b>Ketentuan :</b>
                     Anak tanpa pendamping dikenakan biaya tambahan seharga 1 tiket yang dibeli
                  </span>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-body">
               <h4 class="card-title text-center mb-3">Jam Operasional</h4>
               <div class="row dflex justify-content-center">
                  <div class="col-md-6">
                     <button type="button" class="btn btn-lg btn-block btn-primary text-white rounded-pill">Senin - Jum'at : 09.00 - 21.00</button>
                  </div>
                  <div class="col-md-6">
                     <button type="button" class="btn btn-lg btn-block btn-primary text-white rounded-pill">Sabtu - Minggu : 07.00 - 21.00</button>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
</div>