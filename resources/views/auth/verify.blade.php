@extends('layouts.app')

@section('isi')
<!--
Start Call To Action
==================================== -->
<section class="call-to-action bg-gray section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="title">
					<h2>{{ __('Verify Your Email Address') }}</h2>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
					<p>{{ __('Before proceeding, please check your email for a verification link.') }}<br>  {{ __('If you did not receive the email') }},</p>
				</div>
				<div class="col-lg-6 col-md-offset-3">
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-main">{{ __('click here to request another') }}</button>.
                    </form>
			    </div><!-- /.col-lg-6 -->
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->
@endsection
