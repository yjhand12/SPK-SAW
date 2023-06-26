@extends('layouts.auth')

@section('title')
    Register
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-form">
                            <div class="text-center">
                                <img src="" style="max-width: 200px">
                            </div>
                            <form action="{{ route('register')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Nama</label><br>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                                </div>
                                <div class="form-group">
                                    <br><label class="form-label">Email</label><br>
                                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <br><label class="form-label">Password</label><br>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                                    <div class="input-group-append toggle-password">
                                        <span class="input-group-text">
                                            <i class="fas fa-eye-slash toggle-password-icon"></i>
                                        </span>
                                    </div>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Masukkan Password">
                                    <div class="input-group-append toggle-password">
                                        <span class="input-group-text">
                                            <i class="fas fa-eye-slash toggle-password-icon"></i>
                                        </span>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Daftar</button>
                            </form>
                            <div class="text-center">
                                Sudah mempunyai akun? <a class="font-weight-bold small" href="">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    $(document).ready(function(){
            let icon = $('.toggle-password-icon');
            $('.toggle-password').click(function(){
                let password = $('.password');
                if(password.attr("type") == "password") {
                    password.attr("type","text");
                    icon.removeClass('fa-eye-slash').addClass('fa-eye');
                } else {
                    password.attr("type","password");
                    icon.removeClass('fa-eye').addClass('fa-eye-slash');
                }
            })
        });
</script>
@endpush