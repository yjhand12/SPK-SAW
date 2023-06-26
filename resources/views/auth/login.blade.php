@extends('layouts.auth')

@section('title')
    STEPA - Login
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
                                <img src="/assets/images/pilibist.jpg" style="max-width: 200px">
                            </div>
                            <form action="{{ route('cek-login')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <br><label class="form-label">Email</label><br>
                                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <br><label class="form-label">Password</label><br>
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                                    </div>
                                </div><br><br>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Login</button>
                                </div>
                            </form>
                            <div class="text-center mt-3">
                                Belum mempunyai akun? <a class="font-weight-bold small" href="{{route('register')}}"><button class="btn btn-outline-primary btn-sm">Register</button></a>
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
                if(password.type == 'password') {
                    password.type = "text";
                    icon.removeClass('fa-eye-slash').addClass('fa-eye');
                } else {
                    password.type = "password";
                    icon.removeClass('fa-eye').addClass('fa-eye-slash');
                }
            })
        });
</script>
@endpush