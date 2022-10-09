@extends('template_backend.main', ['title' => 'Dashboard'])
@push('header')
<style>
    .clock {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    color: #17D4FE;
    font-size: 60px;
    font-family: Orbitron;
    letter-spacing: 7px;
}
</style>
@endpush

@section('container')
<section class="section">
    <div class="section-header">
        <h1>Profiles</h1>
        <div class="section-header-button">
            {{-- <a href="{{ route('user.edit', Auth::user()->username) }}" class="btn btn-primary">Update Profile</a> --}}
            {{-- <a href="{{ route('password.edit') }}" class="btn btn-primary">Ganti Password</a> --}}
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Profile</div>
        </div>
    </div>
</section>
<div class="section-body">
    {{-- <p class="section-lead">
        Change information about yourself on this page.
    </p> --}}
    
    <div class="row mt-sm-4">
        <div class="col-12 col-md-12">
            <div class="card profile-widget">
                <div class="profile-widget-description">
                    {{-- <h2 class="section-title">Hi, {{ Auth::user()->nama }}!</h2> --}}
                    <div id="MyClockDisplay" class="clock" onload="showTime()"></div>  
                </div>
                <div class="card-footer text-center">
                    {{-- <div class="font-weight-bold mb-2">Follow Ujang On</div>
                    <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-github mr-1">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-instagram">
                        <i class="fab fa-instagram"></i>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@pushOnce('footer')
    <script>

function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();
    </script>
@endPushOnce