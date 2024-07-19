@extends('frontend.master')
@section('content')
<div class="container">
    <div class="border-login">
        <form action="/login/admin/submit" method="post">
            @csrf
            <div class="login">
                <span id="login-label">Admin Login</span>
                <div class="name"><input type="text" autocomplete="off"  name="serial" placeholder="Serial or username"><i class="fa fa-user" aria-hidden="true"></i></div>
                <span id="or-serial"></span>
                <div class="serial"><input type="password" autocomplete="off" name="password" placeholder="Password"><i class="fa fa-key" aria-hidden="true"></i></div>
    
                <button>Submit</button>
                <div class="menu-register">

                <a href="/login" id="Register" class="text mt-3">Login as Tester</a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
