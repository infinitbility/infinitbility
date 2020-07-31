<div class="limiter" style="background: #fff">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90" style="padding: 10px;">

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-text"><strong>Success!</strong> {{ session()->get('success') }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if(session()->has('danger'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-text"><strong>Danger!</strong> {{ session()->get('danger') }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form action="{{ url('admin/authenticate') }}" method="POST" class="login100-form validate-form flex-sb flex-w">
                @csrf
                <div class="m-b-16" style="display: block;margin-left: auto;margin-right: auto;">
                    <img src="{{ asset('images/icons/infinitbility.png') }}" />
                </div>

                <span class="login100-form-title p-b-51">
                    Infinitbility
                </span>

                
                <div class="wrap-input100 m-b-16" >
                    <input class="input100" type="email" name="email" placeholder="Email" required>
                    <span class="focus-input100"></span>
                </div>
                
                
                <div class="wrap-input100 m-b-16" >
                    <input class="input100" type="password" name="password" placeholder="Password" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <input type="submit" value="Login" class="login100-form-btn" />
                </div>

            </form>
        </div>
    </div>
</div>
	