<div class="col-md-5 mx-auto">
    <!-- Title -->
    <div class="border-bottom border-color-1 mb-6">
        <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Ingresar</h3>
    </div>
    <p class="text-gray-90 mb-4">Bienvenido! Ingrese con su correo y contraseña.</p>
    <!-- End Title -->
    <form action="{{ route('login') }}" method="POST" class="js-validate">
        @csrf
        <!-- Form Group -->
        <div class="js-form-message form-group">
            <label class="form-label" for="signinSrEmailExample3">Direccion de correo
                <span class="text-danger">*</span>
            </label>
            <input type="email" class="form-control" name="email" id="signinSrEmailExample3" value="{{ old('email') }}" placeholder="Email" autofocus aria-label="Username or Email address" required
                   data-msg="Ingrese un correo electrónico válido."
                   data-error-class="u-has-error"
                   data-success-class="u-has-success">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="js-form-message form-group">
            <label class="form-label" for="signinSrPasswordExample2">Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="password" id="signinSrPasswordExample2" placeholder="Password" aria-label="Password" required
                   data-msg="Su contraseña no es correcta. Vuelva a intentarlo."
                   data-error-class="u-has-error"
                   data-success-class="u-has-success">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!-- End Form Group -->

        <!-- Checkbox -->
        <div class="js-form-message mb-3">
            <div class="custom-control custom-checkbox d-flex align-items-center">
                <input type="checkbox" class="custom-control-input" id="rememberCheckbox" name="remember"
                       data-error-class="u-has-error"
                       data-success-class="u-has-success">
                <label class="custom-control-label form-label" for="rememberCheckbox">
                    Recuérdame
                </label>
            </div>
        </div>
        <!-- End Checkbox -->

        <!-- Button -->
        <div class="mb-1">
            <div class="mb-3">
                <button type="submit" class="btn btn-primary-dark-w px-5">Ingresar</button>
            </div>
            <div class="mb-2">
                <a class="text-blue" href="#">Lost your password?</a>
            </div>
        </div>
        <!-- End Button -->
    </form>
</div>