@extends('front.master')

@section('title')
    Boi Chakra
@endsection

@section('body')

<!--				Home Slider Start-->
		@include('front.home.include.slider')
		
	
		
<!--				Main Start-->
		<main id="tg-main" class="tg-main tg-haslayout">

<!--				Contributor Start-->
		  @include('front.home.include.contributor')
		
			
<!--				Featured Ads Start-->
		  @include('front.home.include.featured')
			
			
<!--				Latest Posted Ads Start-->
		  @include('front.home.include.latest')
			
		
			
<!--					Blogs Article Start-->
		  @include('front.home.include.latest')
			
			
<!--					Testimonials Start-->
		  @include('front.home.include.testimonial')
	
			
<!--					Partners Start-->
		  @include('front.home.include.partner')

		</main>
		<!--************************************
				Main End
		*************************************-->
		
	</div>
@endsection