<x-guest-layout>
<section class="login-content">
    <div class="container">
       <div class="row align-items-center justify-content-center height-self-center">
          <div class="col-lg-8">
             <div class="card auth-card">
                <div class="card-body p-0">
                   <div class="d-flex align-items-center auth-content">
                      <div class="col-lg-6  content-left">
                         <div class="p-3">
                            <h2 class="mb-2 ">Sign Up</h2>
                            <p>Create your Glare account.</p>
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form method="POST" action="{{ route('register') }}" data-toggle="validator">
                                {{csrf_field()}}
                                <div class="row">
                                  <div class="col-lg-6">
                                     <div class="floating-label form-group">
                                        <input id="name"  name="first_name" value="{{old('first_name')}}"  class="floating-input form-control" type="text" placeholder=" " required >
                                        <label>Full Name <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="text" name="last_name" placeholder=" " value="{{old('last_name')}}" required>
                                        <label>Last Name <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="email" id="email"  name="email" value="{{old('email')}}" required placeholder=" ">
                                        <label>Email <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="floating-label form-group">
                                        <input class="floating-input form-control" name="phone_number" type="text" placeholder=" ">
                                        <label>Phone No. <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="password" id="password" name="password" required autocomplete="new-password" placeholder=" ">
                                        <label>Password <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="password" name="password_confirmation" required placeholder=" ">
                                        <label>Confirm Password <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-12">
                                     <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                        <label class="custom-control-label " for="customCheck1">I agree with the terms of use</label>
                                     </div>
                                  </div>
                               </div>
                               <button type="submit" class="btn btn-primary">{{ __('sign up') }}</button>
                               <p class="mt-3">
                                  Already have an Account <a href="{{route('auth.login')}}" class=" text-underline">Sign In</a>
                               </p>
                            </form>
                         </div>
                      </div>
                      <div class="col-lg-6 content-right">
                         <img src="{{ asset('images/login/01.png') }}" class="img-fluid image-right" alt="">
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
</x-guest-layout>
