@extends('layouts.app')

@section('content')

	<!--Error Section-->
    <section class="error-section">
    	<div class="auto-container">
        	<div class="content">
            	<h1>404</h1>
                <h2>Oops! That page can’t be found</h2>
                <div class="text">Sorry, but the page you are looking for does not existing</div>
				<a href="/" class="theme-btn btn-style-four"><span class="txt">Go to Home Page</span></a>
            </div>
        </div>
    </section>
    <!--End Error Section-->

@endsection

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
