

<?php $__env->startSection('content'); ?>
<div class="position-relative mx-n4 mt-n4">
    <div class="profile-wid-bg profile-setting-img">
        <img src="<?php echo e(URL::asset('assets/images/profile-bg.jpg')); ?>" class="profile-wid-img" alt="">
        <div class="overlay-content">
            <div class="text-end p-3">
                <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                    <input id="profile-foreground-img-file-input" type="file"
                        class="profile-foreground-img-file-input">
                    <label for="profile-foreground-img-file-input"
                        class="profile-photo-edit btn btn-light">
                        <i class="ri-image-edit-line align-bottom me-1"></i> Ganti Cover
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xxl-3">
        <div class="card mt-n5">
            <div class="card-body p-4">
                <div class="text-center">
                    <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                        <img src="<?php echo e(URL::asset('assets/images/users/avatar-1.jpg')); ?>"
                            class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                            alt="user-profile-image">
                        <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                            <input id="profile-img-file-input" type="file"
                                class="profile-img-file-input">
                            <label for="profile-img-file-input"
                                class="profile-photo-edit avatar-xs">
                                <span class="avatar-title rounded-circle bg-light text-body">
                                    <i class="ri-camera-fill"></i>
                                </span>
                            </label>
                        </div>
                    </div>
                    <h5 class="fs-16 mb-1">Noga Muktiwati</h5>
                    <p class="text-muted mb-0">Anggota / Koperasi Cahaya</p>
                </div>
            </div>
        </div>
        <!--end card-->

        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-xxl-9">
        <div class="card mt-xxl-n5">
            <div class="card-header">
                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails"
                            role="tab">
                            <i class="fas fa-home"></i>
                            Detail Pribadi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                            <i class="far fa-user"></i>
                             Mengubah Password
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#experience" role="tab">
                            <i class="far fa-envelope"></i>
                            Pengalaman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#privacy" role="tab">
                            <i class="far fa-envelope"></i>
                            Privasi dan Keamanan
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body p-4">
                <div class="tab-content">
                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                        <form action="javascript:void(0);">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="firstnameInput" class="form-label">Nama Depan:</label>
                                        <input type="text" class="form-control" id="firstnameInput"
                                            placeholder="Masukkan nama depan Anda">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="lastnameInput" class="form-label">Nama Belakang:</label>
                                        <input type="text" class="form-control" id="lastnameInput"
                                            placeholder="Masukkan nama belakang Anda">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="phonenumberInput" class="form-label">Nomor Handphone:</label>
                                        <input type="text" class="form-control"
                                            id="phonenumberInput"
                                            placeholder="Masukkan nomor handphone Anda">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="emailInput" class="form-label">Alamat E-mail:</label>
                                        <input type="email" class="form-control" id="emailInput"
                                            placeholder="nogayohuman@gmail.com">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="JoiningdatInput" class="form-label">Tanggal Simpan Pinjam:</label>
                                        <input type="text" class="form-control"
                                            data-provider="flatpickr" id="JoiningdatInput"
                                            data-date-format="d M, Y"
                                            data-deafult-date="30  Mei 2022"
                                            placeholder="Select date" />
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="skillsInput" class="form-label">Status:</label>
                                        <select class="form-control" name="skillsInput" data-choices
                                            data-choices-text-unique-true multiple id="skillsInput">
                                            <option value="illustrator">Simpanan Pokok (SIMPOK)</option>
                                            <option value="photoshop">Simpanan Wajib (SIMWA)</option>
                                            <option value="css">Simpanan Sukarela (SIRELA)</option>
                                            <option value="html">Pinjaman Modal Usaha</option>
                                            <option value="javascript" selected>Pinjaman Jangka Panjang</option>
                                            <option value="python">Pinjaman Jangka Pendek</option>
                                        </select>
                                    </div>
                                </div>
                                <!--end col-->
                                 <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="websiteInput1"
                                            class="form-label">Koperasi Asal:</label>
                                        <input type="text" class="form-control" id="websiteInput1"
                                            placeholder="Masukkan nama koperasi asal " />
                                    </div>
                                </div>
                                      <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="designationInput"
                                            class="form-label">Koperasi yang sedang dalam proses pinjaman dana:</label>
                                        <input type="text" class="form-control"
                                            id="designationInput" placeholder="Masukkan nama koperasi ">
                                    </div>
                                </div>
                                <!--end col-->
                               
                          
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="cityInput" class="form-label">Kabupaten/Kota:</label>
                                        <input type="text" class="form-control" id="cityInput"
                                            placeholder="Ponorogo" />
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="countryInput" class="form-label">Alamat Lengkap:</label>
                                        <input type="text" class="form-control" id="countryInput"
                                            placeholder="Jl. Batoro katong No. 231" />
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="zipcodeInput" class="form-label">Kode Pos:</label>
                                        <input type="text" class="form-control" minlength="5"
                                            maxlength="6" id="zipcodeInput"
                                            placeholder="kode pos" value="90011">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary">Simpan Pembaruan</button>
                                        <button type="button"
                                            class="btn btn-soft-success">Batalkan  Pembaruan</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane" id="changePassword" role="tabpanel">
                        <form action="javascript:void(0);">
                            <div class="row g-2">
                                <div class="col-lg-4">
                                    <div>
                                        <label for="oldpasswordInput" class="form-label">Password Lama Profile Simpan Pinjam*</label>
                                        <input type="password" class="form-control"
                                            id="oldpasswordInput"
                                            placeholder="Masukkan Password Lama Anda">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div>
                                        <label for="newpasswordInput" class="form-label">Password Baru Profile Simpan Pinjam*</label>
                                        <input type="password" class="form-control"
                                            id="newpasswordInput" placeholder="Silahkan Masukkan Password Baru Anda">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div>
                                        <label for="confirmpasswordInput" class="form-label">Konfirmasi Password Yang Telah Diubah*</label>
                                        <input type="password" class="form-control"
                                            id="confirmpasswordInput"
                                            placeholder="Konfirmasi password">
                                    </div>
                                </div>
                                <!--end col-->
                               
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <a href="javascript:void(0);"
                                            class="link-primary text-decoration-underline">Lupa dengan password Anda ?</a>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success">Ganti Password</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                        <div class="mt-4 mb-3 border-bottom pb-2">
                            <div class="float-end">
                                <a href="javascript:void(0);" class="link-primary">All Logout</a>
                            </div>
                            <h5 class="card-title">History Login Simpan Pinjam Kopdig.id</h5>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 avatar-sm">
                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                    <i class="ri-smartphone-line"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>iPhone 12 Pro</h6>
                                <p class="text-muted mb-0">Los Angeles, United States - March 16 at
                                    2:47PM</p>
                            </div>
                            <div>
                                <a href="javascript:void(0);">Logout</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 avatar-sm">
                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                    <i class="ri-tablet-line"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Apple iPad Pro</h6>
                                <p class="text-muted mb-0">Washington, United States - November 06
                                    at 10:43AM</p>
                            </div>
                            <div>
                                <a href="javascript:void(0);">Logout</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 avatar-sm">
                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                    <i class="ri-smartphone-line"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Galaxy S21 Ultra 5G</h6>
                                <p class="text-muted mb-0">Conneticut, United States - June 12 at
                                    3:24PM</p>
                            </div>
                            <div>
                                <a href="javascript:void(0);">Logout</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 avatar-sm">
                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                    <i class="ri-macbook-line"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Dell Inspiron 14</h6>
                                <p class="text-muted mb-0">Phoenix, United States - July 26 at
                                    8:10AM</p>
                            </div>
                            <div>
                                <a href="javascript:void(0);">Logout</a>
                            </div>
                        </div>
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane" id="experience" role="tabpanel">
                        <form>
                            <div id="newlink">
                                <div id="1">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="jobTitle" class="form-label">Pekerjaan:</label>
                                                <input type="text" class="form-control"
                                                    id="jobTitle" placeholder="Ibu Rumah Tangga">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="companyName" class="form-label">Unit Usaha</label>
                                                <input type="text" class="form-control"
                                                    id="companyName" placeholder="Company name">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="experienceYear"
                                                    class="form-label">Pengalaman berwirausaha</label>
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <select class="form-control" data-choices
                                                            data-choices-search-false
                                                            name="experienceYear"
                                                            id="experienceYear">
                                                            <option value="">Pilih tahun</option>
                                                            <option value="Choice 1">2001</option>
                                                            <option value="Choice 2">2002</option>
                                                            <option value="Choice 3">2003</option>
                                                            <option value="Choice 4">2004</option>
                                                            <option value="Choice 5">2005</option>
                                                            <option value="Choice 6">2006</option>
                                                            <option value="Choice 7">2007</option>
                                                            <option value="Choice 8">2008</option>
                                                            <option value="Choice 9">2009</option>
                                                            <option value="Choice 10">2010</option>
                                                            <option value="Choice 11">2011</option>
                                                            <option value="Choice 12">2012</option>
                                                            <option value="Choice 13">2013</option>
                                                            <option value="Choice 14">2014</option>
                                                            <option value="Choice 15">2015</option>
                                                            <option value="Choice 16">2016</option>
                                                            <option value="Choice 17" selected>2017
                                                            </option>
                                                            <option value="Choice 18">2018</option>
                                                            <option value="Choice 19">2019</option>
                                                            <option value="Choice 20">2020</option>
                                                            <option value="Choice 21">2021</option>
                                                            <option value="Choice 22">2022</option>
                                                        </select>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-auto align-self-center">
                                                     sampai
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-5">
                                                        <select class="form-control" data-choices
                                                            data-choices-search-false
                                                            name="choices-single-default2">
                                                            <option value="">Pilih Tahun</option>
                                                            <option value="Choice 1">2001</option>
                                                            <option value="Choice 2">2002</option>
                                                            <option value="Choice 3">2003</option>
                                                            <option value="Choice 4">2004</option>
                                                            <option value="Choice 5">2005</option>
                                                            <option value="Choice 6">2006</option>
                                                            <option value="Choice 7">2007</option>
                                                            <option value="Choice 8">2008</option>
                                                            <option value="Choice 9">2009</option>
                                                            <option value="Choice 10">2010</option>
                                                            <option value="Choice 11">2011</option>
                                                            <option value="Choice 12">2012</option>
                                                            <option value="Choice 13">2013</option>
                                                            <option value="Choice 14">2014</option>
                                                            <option value="Choice 15">2015</option>
                                                            <option value="Choice 16">2016</option>
                                                            <option value="Choice 17">2017</option>
                                                            <option value="Choice 18">2018</option>
                                                            <option value="Choice 19">2019</option>
                                                            <option value="Choice 20" selected>2020
                                                            </option>
                                                            <option value="Choice 21">2021</option>
                                                            <option value="Choice 22">2022</option>
                                                        </select>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="jobDescription" class="form-label">Deskripsi Usaha:</label>
                                                <textarea class="form-control" id="jobDescription"
                                                    rows="3"
                                                    placeholder="Enter description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, inventore nemo. Deserunt quam enim dolor, veritatis dolorum voluptatibus aliquam quod accusantium facere illum reprehenderit, eligendi reiciendis molestias culpa, cum molestiae? </textarea>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="hstack gap-2 justify-content-end">
                                            <a class="btn btn-success"
                                                href="javascript:deleteEl(1)">Hapus</a>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <div id="newForm" style="display: none;">

                            </div>
                            <div class="col-lg-12">
                                <div class="hstack gap-2">
                                    <button type="submit" class="btn btn-success">Simpan Pembaruan</button>
                                    <a href="javascript:new_link()" class="btn btn-primary">Tambahkan Baru</a>
                                </div>
                            </div>
                            <!--end col-->
                        </form>
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane" id="privacy" role="tabpanel">
                        <div class="mb-4 pb-2">
                            <h5 class="card-title text-decoration-underline mb-3">Keamanan:</h5>
                            <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0">
                                <div class="flex-grow-1">
                                    <h6 class="fs-14 mb-1">Two-factor Authentication</h6>
                                    <p class="text-muted">Two-factor authentication is an enhanced
                                        security meansur. Once enabled, you'll be required to give
                                        two types of identification when you log into Google
                                        Authentication and SMS are Supported.</p>
                                </div>
                                <div class="flex-shrink-0 ms-sm-3">
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm btn-primary">Enable Two-facor
                                        Authentication</a>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                <div class="flex-grow-1">
                                    <h6 class="fs-14 mb-1">Secondary Verification</h6>
                                    <p class="text-muted">The first factor is a password and the
                                        second commonly includes a text with a code sent to your
                                        smartphone, or biometrics using your fingerprint, face, or
                                        retina.</p>
                                </div>
                                <div class="flex-shrink-0 ms-sm-3">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Set
                                        up secondary method</a>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                <div class="flex-grow-1">
                                    <h6 class="fs-14 mb-1">Backup Codes</h6>
                                    <p class="text-muted mb-sm-0">A backup code is automatically
                                        generated for you when you turn on two-factor authentication
                                        through your iOS or Android Twitter app. You can also
                                        generate a backup code on twitter.com.</p>
                                </div>
                                <div class="flex-shrink-0 ms-sm-3">
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm btn-primary">Generate backup codes</a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h5 class="card-title text-decoration-underline mb-3">Application
                                Notifications:</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex">
                                    <div class="flex-grow-1">
                                        <label for="directMessage"
                                            class="form-check-label fs-14">Direct messages</label>
                                        <p class="text-muted">Messages from people you follow</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox"
                                                role="switch" id="directMessage" checked />
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <label class="form-check-label fs-14"
                                            for="desktopNotification">
                                            Show desktop notifications
                                        </label>
                                        <p class="text-muted">Choose the option you want as your
                                            default setting. Block a site: Next to "Not allowed to
                                            send notifications," click Add.</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox"
                                                role="switch" id="desktopNotification" checked />
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <label class="form-check-label fs-14"
                                            for="emailNotification">
                                            Show email notifications
                                        </label>
                                        <p class="text-muted"> Under Settings, choose Notifications.
                                            Under Select an account, choose the account to enable
                                            notifications for. </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox"
                                                role="switch" id="emailNotification" />
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <label class="form-check-label fs-14"
                                            for="chatNotification">
                                            Show chat notifications
                                        </label>
                                        <p class="text-muted">To prevent duplicate mobile
                                            notifications from the Gmail and Chat apps, in settings,
                                            turn off Chat notifications.</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox"
                                                role="switch" id="chatNotification" />
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <label class="form-check-label fs-14"
                                            for="purchaesNotification">
                                            Show purchase notifications
                                        </label>
                                        <p class="text-muted">Get real-time purchase alerts to
                                            protect yourself from fraudulent charges.</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox"
                                                role="switch" id="purchaesNotification" />
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="card-title text-decoration-underline mb-3">Delete This
                                Account:</h5>
                            <p class="text-muted">Go to the Data & Privacy section of your profile
                                Account. Scroll to "Your data & privacy options." Delete your
                                Profile Account. Follow the instructions to delete your account :
                            </p>
                            <div>
                                <input type="password" class="form-control" id="passwordInput"
                                    placeholder="Enter your password" value="make@321654987"
                                    style="max-width: 265px;">
                            </div>
                            <div class="hstack gap-2 mt-3">
                                <a href="javascript:void(0);" class="btn btn-soft-danger">Tutup & Hapus Akun Ini</a>
                                <a href="javascript:void(0);" class="btn btn-light">Batalkan</a>
                            </div>
                        </div>
                    </div>
                    <!--end tab-pane-->
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simpanpinjam.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kopdig-web-simpan-pinjam\resources\views/auth/profile/edit.blade.php ENDPATH**/ ?>