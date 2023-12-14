@extends('auth.main')

@section('title', config('app.name') . ' - ' . __('auth.reg_title'))

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card bg-light o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-5">
                    <h3 class="text-center mb-3">@lang('auth.reg_title')</h3>
                    @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @elseif (session('warning'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('warning') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @elseif (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Masukan nama" value="{{old('name')}}"
                                required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Masukan Email" value="{{old('email')}}"
                                required>
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Masukan password" required>
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password2">Konfirmasi kata sandi</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password2" name="password_confirmation"
                                placeholder="Masukan ulang kata sandi" required>
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Daftar</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a href="{{url('login')}}">Sudah memiliki akun? Masuk!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection