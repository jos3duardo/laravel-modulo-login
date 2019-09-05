@extends('login::layouts.login')
@section('content')
    <form method="POST" class="form-signin" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control son-form-field  @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputPassword" class="sr-only">Senha</label>
            <input id="inputPassword" type="password" class="son-form-field form-control @error('password') is-invalid @enderror" placeholder="Senha" name="password" autocomplete="current-password" required>

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="checkbox mb-3">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember"></label>
            {{ __('Permanecer Conectado') }}
        </div>
        <button type="submit" class="btn btn-lg btn-dark btn-block" >Entrar</button>
        <a href="{{route('register')}}" class="btn btn-lg btn-warning btn-block" >Cadastrar-se</a>

        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Esqueci minha senha?') }}
            </a>
        @endif
    </form>
@endsection
