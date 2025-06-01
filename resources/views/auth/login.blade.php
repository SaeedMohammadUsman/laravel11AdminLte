@extends('auth.auth')

@section('content')
  <div class="d-flex justify-content-center align-items-center min-vh-600 ">
    {{-- Login Box --}}
    <div class="login-box text-center "style="position: relative; z-index: 1000;">
      {{-- Logo + Title side by side --}}
      <div class="d-flex align-items-center mb-3 justify-content-center">
        <img
          src="{{ asset('img/logo.png') }}"
          alt="HRMIS Logo"
          style="max-height: 80px"
          class="mr-3"
        />
        <h2 class="mb-0 font-weight-bold">HRMIS</h2>
      </div>

      {{-- Login Card --}}
      <div class="card shadow">
        <div class="card-body login-card-body">
          <p class="login-box-msg text-muted">Sign in to start your session</p>

          <form action="{{ route('login') }}" method="POST">
            @csrf

            {{-- Email --}}
            <div class="input-group mb-3">
              <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror"
                placeholder="Email"
                required
                autofocus
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              @error('email')
                <div class="invalid-feedback d-block text-left">
                  {{ $message }}
                </div>
              @enderror
            </div>

            {{-- Password --}}
            <div class="input-group mb-3">
              <input
                type="password"
                name="password"
                class="form-control @error('password') is-invalid @enderror"
                placeholder="Password"
                required
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              @error('password')
                <div class="invalid-feedback d-block text-left">
                  {{ $message }}
                </div>
              @enderror
            </div>

            {{-- Remember & Submit --}}
            <div class="row">
              <div class="col-7 text-left">
                <div class="icheck-primary">
                  <input
                    type="checkbox"
                    id="remember"
                    name="remember"
                    {{ old('remember') ? 'checked' : '' }}
                  />
                  <label for="remember">Remember Me</label>
                </div>
              </div>
              <div class="col-5">
                <button type="submit" class="btn btn-primary btn-block">
                  <span class="fas fa-sign-in-alt"></span>
                  Sign In
                </button>
              </div>
            </div>
          </form>
        </div>

        {{-- Footer --}}
        <div class="card-footer text-center">
          <p class="my-0 text-muted">
            Developed by
            <strong class="text-primary">EBTECH</strong>
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection
