<div class="col-md-5 ml-xl-auto mr-md-auto mr-xl-0 mb-8 mb-md-0">
    <!-- Title -->
    <div class="border-bottom border-color-1 mb-6">
        <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Login</h3>
    </div>
    <p class="text-gray-90 mb-4">Welcome back! Sign in to your account.</p>
    <!-- End Title -->
    <form class="js-validate" novalidate="novalidate">
        <!-- Form Group -->
        <div class="js-form-message form-group">
            <label class="form-label" for="signinSrEmailExample3">Username or Email address
                <span class="text-danger">*</span>
            </label>
            <input type="email" class="form-control" name="email" id="signinSrEmailExample3" placeholder="Username or Email address" aria-label="Username or Email address" required
                   data-msg="Please enter a valid email address."
                   data-error-class="u-has-error"
                   data-success-class="u-has-success">
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="js-form-message form-group">
            <label class="form-label" for="signinSrPasswordExample2">Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="password" id="signinSrPasswordExample2" placeholder="Password" aria-label="Password" required
                   data-msg="Your password is invalid. Please try again."
                   data-error-class="u-has-error"
                   data-success-class="u-has-success">
        </div>
        <!-- End Form Group -->

        <!-- Checkbox -->
        <div class="js-form-message mb-3">
            <div class="custom-control custom-checkbox d-flex align-items-center">
                <input type="checkbox" class="custom-control-input" id="rememberCheckbox" name="rememberCheckbox" required
                       data-error-class="u-has-error"
                       data-success-class="u-has-success">
                <label class="custom-control-label form-label" for="rememberCheckbox">
                    Remember me
                </label>
            </div>
        </div>
        <!-- End Checkbox -->

        <!-- Button -->
        <div class="mb-1">
            <div class="mb-3">
                <button type="submit" class="btn btn-primary-dark-w px-5">Login</button>
            </div>
            <div class="mb-2">
                <a class="text-blue" href="#">Lost your password?</a>
            </div>
        </div>
        <!-- End Button -->
    </form>
</div>