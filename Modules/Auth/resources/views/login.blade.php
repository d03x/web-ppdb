<x-auth::layouts.master>


    <div class="container  col-md-4 mx-auto">
        <div class="card card-login">
            <div class="card-header">
                <div class="card-title">Login</div>
                <div class="card-description">
                    Silahkan login dengan akun anda
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route("auth.login.post") }}" method="POST">
                    @csrf
                    @method("POST")
                    <div class="form-group">
                        <label for="email" class="form-label text-muted">Email</label>
                        <input id="email" name="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" aria-required="true"
                            aria-describedby="emailHelp" value="{{ old('email') }}" required>
                        <small id="emailHelp" class="form-text text-muted">Masukkan email yang valid.</small>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label text-muted">Password</label>
                        <input id="password" name="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" aria-required="true"
                            aria-describedby="passwordHelp" required>
                        <small id="passwordHelp" class="form-text text-muted">Password minimal 8 karakter.</small>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" aria-label="Login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-auth::layouts.master>