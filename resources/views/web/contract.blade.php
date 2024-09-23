@extends ('web.index')

@section ('contract')
    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Contact
              <small>Subheading</small>
            </h1>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-8 mb-4 contact-left">
                <h3>Liên hệ chúng tôi</h3>
                <form action="{{ route('contract.store') }}" method="POST">
                    @csrf
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Họ tên:</label>
                            <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                           
                                <p class="text-danger text-xs mt-2"></p>
                          
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Số điện thoại:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                          
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                          
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Ghi chú:</label>
                            <textarea rows="5" cols="100" class="form-control" id="note" name="note" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                          
                        </div>
                    </div>
                   
                  <button  type="submit" class="btn btn-primary">Gửi</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsectio
