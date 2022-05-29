@extends('layouts.login')

@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
                <!--Link da imagem:
                        https://media.istockphoto.com/photos/open-bible-in-psalm-119-on-a-large-stone-vertical-image-picture-id1127786575?k=20&m=1127786575&s=170667a&w=0&h=CDLaM3s49BcWSiznErGnXwAS29PFFhmbpf5qUZ58ci8= 
                -->
              <img src="{{asset('public/biblia.jpg')}}"
  alt="login form" class="img-fluid" style="width:100%;height:100%;border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                                     <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-school fa-2x me-3" style="color: #2B8318;"></i>
                    <span class="h1 fw-bold mb-0">ESQUECEU A <BR>SENHA?</span>
                  </div>

            
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="form-label">{{ __('E-mail') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit  ">{{ __('Send Password Reset Link') }}</button>
                  </div>
                  <p class=" pb-lg-2" style="color: #393f81;">
                        <a href="{{ route('login') }}" class="small text-muted">{{ __('Retornar ao login') }}</a>
                    </p>
                    </form>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection