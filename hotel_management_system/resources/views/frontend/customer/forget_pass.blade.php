@extends('customer.layout.app')
@section('customer_content')



        <div class="page-content">




            <div class="page-top">
                <div class="bg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Reset Password</h2>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('customer.forget.password') }}" method="POST">
                @csrf
                <div class="page-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <div class="login-form">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Email Address</label>
                                        <input type="text" class="form-control" name="email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary bg-website">Submit</button>
                                        <a href="{{ route('CustomerloginPage') }}" class="primary-color">Back to Login
                                            Page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
 
    @endsection
