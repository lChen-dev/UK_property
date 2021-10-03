@extends('master')
@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}">
 @endsection
@section('content')
		<nav aria-label="breadcrumb" class="breadcrumb fd-completely-hidden fd-display-block--bp-l fd-bg-white">
			<ol class="breadcrumb-list fd-flex fd-align-items-center fd-p-vertical-2xs fd-container-full fd-container fd-m-auto">
				<li>
					<a class="fd-btn fd-btn--tertiary fd-color-dark-2" href="{{url('/')}}"><span class="fd-text--ellipsis fd-text--nowrap fd-overflow-hidden">Home</span></a> <span class="icon-arrow-right-grey fd-icon fd-icon--m fd-m-horizontal-2xs"></span>
				</li>
				<li>
					<a class="fd-btn fd-btn--tertiary fd-color-dark-2" href="/en/koop/olst/"><span class="fd-text--ellipsis fd-text--nowrap fd-overflow-hidden">Olst</span></a> <span class="icon-arrow-right-grey fd-icon fd-icon--m fd-m-horizontal-2xs"></span>
				</li>
				<li>
					<a class="fd-btn fd-btn--tertiary fd-color-dark-2" href="/en/koop/olst/kortrick-en-zonnekamp/"><span class="fd-text--ellipsis fd-text--nowrap fd-overflow-hidden">Kortrick en Zonnekamp</span></a> <span class="icon-arrow-right-grey fd-icon fd-icon--m fd-m-horizontal-2xs"></span>
				</li>
				<li><span class="fd-color-dark-3">Jan Schamhartstraat 78</span></li>
			</ol>
		</nav>
		<dialog data-component="dialog" data-dialog="user-form" data-isuserloggedinurl="/en/mijn/account/isuserloggedin/">
			<div class="dialog-container">
				<div class="dialog-content">
					<button class="dialog-close-button" data-dialog-close=""><span class="button-text">Close</span> <span class="icon icon-close" data-grunticon-embed=""></span></button>
					<div data-dialog-body=""></div>
					<div class="app-spinner" data-dialog-spinner=""><svg class="svg-circular" viewbox="0 0 48 48">
					<circle class="path" cx="24" cy="24" fill="none" r="20" stroke-dasharray="89,200" stroke-dashoffset="-124" stroke-width="3"></circle></svg> <img class="gif-circular" src="https://assets.fstatic.nl/master_3718/assets/components/app-spinner/spinner.gif"></div>
				</div>
			</div>
		</dialog>
		<div class="object-detail fd-container--xl fd-m-auto" data-interaction-logging="" data-interaction-tinyid="42427849" data-interaction-url="/interaction/logdetail/" data-object-locations="" data-object-locations-personal-places-endpoint="/search/personalplaces/list/" data-object-locations-route-endpoint="/search/personalplaces/traveltimes/" data-page-viewed="Listing Viewed" data-test-object-detail="">
			<section class="object-media mb-4 fd-container--xl relative lg:mx-auto" data-object-media="">
				<div data-vue-container="">
					<div class="object-save-share md:mt-4 absolute top-0 w-full md:w-auto right-0 z-10">
						<div class="object-save-share__buttons fd-flex fd-justify-content-end fd-m-right">
							<button class="object-save-share__button object-save-share__button-share fd-btn fd-btn--tertiary fd-btn--secondary--bp-m fd-color-white fd-color-blue-2--bp-m fd-m-right--bp-l fd-m-right--bp-m fd-border-remove"><svg height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M36 31.3a6 6 0 00-4.81 2.42l-13.51-7.8a5.92 5.92 0 00.08-3.58l13.7-7.91a6 6 0 10-1.33-2.69l-13.89 8a6 6 0 10-.2 8.68l14 8.09A6 6 0 1036 31.3zm0-23.78a3 3 0 11-3 3 3 3 0 013-3zM12 27a3 3 0 113-3 3 3 0 01-3 3zm24 13.3a3 3 0 113-3 3 3 0 01-3 3z"></path></svg></button> <button class="object-save-share__button object-save-share__button-save fd-btn fd-btn--tertiary fd-border-remove fd-p-horizontal-s--bp-m fd-btn--secondary--bp-m"><svg class="fd-completely-hidden--bp-m fd-color-red-1" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.33 6.76a8.79 8.79 0 00-8.77 8.78 21.8 21.8 0 00.76 5.71 25.32 25.32 0 002 5.09 35 35 0 008.4 10.11 29.67 29.67 0 007.15 4.65h.22a29.67 29.67 0 007.15-4.65 34.83 34.83 0 008.39-10.11 25.22 25.22 0 002-5.1 21.79 21.79 0 00.76-5.7A8.75 8.75 0 0029.29 8a8.88 8.88 0 00-3.14 3.1c-.09.15-.18.3-.26.46l-.51 1.16a1.5 1.5 0 01-1.37.91 1.51 1.51 0 01-1.38-.9l-.51-1.16-.27-.47A8.88 8.88 0 0018.71 8a8.63 8.63 0 00-4.38-1.24z"></path>
							<path d="M24 44.26a1.5 1.5 0 01-.55-.11l-.65-.25a32.13 32.13 0 01-8-5.15 38.24 38.24 0 01-9.12-11A28.26 28.26 0 013.43 22a24.69 24.69 0 01-.87-6.49A11.76 11.76 0 0120.23 5.35 12.12 12.12 0 0124 8.85a12.12 12.12 0 013.77-3.5 11.77 11.77 0 0117.67 10.19 25.21 25.21 0 01-.86 6.46 28.42 28.42 0 01-2.27 5.71 38.1 38.1 0 01-9.12 11 31.83 31.83 0 01-8 5.15l-.65.25a1.5 1.5 0 01-.54.15zm-9.67-37.5a8.79 8.79 0 00-8.77 8.78 21.8 21.8 0 00.76 5.71 25.32 25.32 0 002 5.09 35 35 0 008.4 10.11 29.67 29.67 0 007.15 4.65h.22a29.67 29.67 0 007.15-4.65 34.83 34.83 0 008.39-10.11 25.22 25.22 0 002-5.1 21.79 21.79 0 00.76-5.7A8.75 8.75 0 0029.29 8a8.88 8.88 0 00-3.14 3.1c-.09.15-.18.3-.26.46l-.51 1.16a1.5 1.5 0 01-1.37.91 1.51 1.51 0 01-1.38-.9l-.51-1.16-.27-.47A8.88 8.88 0 0018.71 8a8.63 8.63 0 00-4.38-1.24z" fill="#fff"></path></svg> <svg class="fd-color-red-1 fd-completely-hidden fd-display-inline-block--bp-m fd-m-right-xs--bp-m" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M42 17a10 10 0 00-18-6 10 10 0 00-18 6c0 15 16 24 18 24s18-9 18-24z"></path></svg> <span class="fd-completely-hidden fd-display-inline-block--bp-m">Saved</span></button>
						</div><!---->
					</div>
				</div>
				<div class="object-media-fotos-container relative overflow-hidden">
					<div class="object-media-fotos absolute lg:static inset-0 lg:grid gap-1 grid-cols-3 xl:grid-cols-4 grid-rows-2" data-interaction="Object.Fotos" data-interaction-swipe="" data-object-media-fotos="">
						<div class="object-media-foto col-span-2 row-span-2 bg-light-2 relative">
							<a class="block absolute inset-0" data-media-viewer-overlay="foto-1" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_preview&quot;,&quot;media_type&quot;:&quot;photo&quot;,&quot;funda_user_id&quot;:&quot;&quot;,&quot;position&quot;:1}"><img alt="View photo 1 of Jan Schamhartstraat 78" class="w-full h-full object-cover" data-interaction="Object.Fotos" data-interaction-click="" data-media-id="148028509" sizes="(min-width: 1200px) 712px,(min-width: 1020px) 656px,100vw" src="{{asset('data/photo/1.jpg')}}"></a>
						</div>
						<div class="object-media-foto object-media-foto--video-thumbnail bg-light-2 relative">
							<a class="block absolute inset-0" data-media-viewer-overlay="video" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_preview&quot;,&quot;media_type&quot;:&quot;video&quot;,&quot;funda_user_id&quot;:&quot;&quot;,&quot;position&quot;:2}"><img alt="Video" src="{{asset('data/video/movie.jpg')}}">
							<div class="absolute inset-0 bg-black bg-opacity-60 w-20 h-20 rounded-full flex items-center content-center m-auto">
								<svg class="w-12 h-12 m-0 text-white mx-auto" role="img" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
								<path d="M39.16 23.19a1.48 1.48 0 00-.51-.48l-.11-.09L13.32 6.24l-.16-.08h-.09l-.18-.06h-.11L12.6 6H12.19a1.49 1.49 0 00-1 .65 1.47 1.47 0 00-.1.2 1.46 1.46 0 00-.07.21v.08a1.48 1.48 0 000 .2V40.52a1.49 1.49 0 000 .2v.08a1.46 1.46 0 00.07.21 1.48 1.48 0 00.11.21 1.49 1.49 0 001 .65H12.9l.18-.06h.08l.16-.08 25.41-16.5a1.5 1.5 0 00.43-2.04zM14 10.26L35.16 24 14 37.74z"></path></svg>
							</div></a>
						</div>
						<div class="object-media-foto bg-light-2 relative">
							<a class="block absolute inset-0" data-media-viewer-overlay="foto-2" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_preview&quot;,&quot;media_type&quot;:&quot;photo&quot;,&quot;funda_user_id&quot;:&quot;&quot;,&quot;position&quot;:3}"><img alt="View photo 2 of Jan Schamhartstraat 78" class="w-full h-full object-cover" data-interaction="Object.Fotos" data-interaction-click="" data-media-id="148028510" sizes="(min-width: 1200px) 712px,(min-width: 1020px) 656px,100vw" src="{{asset('data/photo/2.jpg')}}"></a>
						</div>
						<div class="object-media-foto bg-light-2 relative">
							<a class="block absolute inset-0" data-media-viewer-overlay="foto-3" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_preview&quot;,&quot;media_type&quot;:&quot;photo&quot;,&quot;funda_user_id&quot;:&quot;&quot;,&quot;position&quot;:4}"><img alt="View photo 3 of Jan Schamhartstraat 78" class="w-full h-full object-cover" data-interaction="Object.Fotos" data-interaction-click="" data-media-id="148028511" sizes="(min-width: 1200px) 712px,(min-width: 1020px) 656px,100vw" src="{{asset('data/photo/3.jpg')}}"></a>
						</div>
						<div class="object-media-foto bg-light-2 relative">
							<a class="block absolute inset-0" data-media-viewer-overlay="foto-4" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_preview&quot;,&quot;media_type&quot;:&quot;photo&quot;,&quot;funda_user_id&quot;:&quot;&quot;,&quot;position&quot;:5}"><img alt="View photo 4 of Jan Schamhartstraat 78" class="w-full h-full object-cover" data-interaction="Object.Fotos" data-interaction-click="" data-media-id="148028512" sizes="(min-width: 1200px) 712px,(min-width: 1020px) 656px,100vw" src="{{asset('data/photo/4.jpg')}}"></a>
						</div>
					</div>
				</div>
				<div class="border-light-2 border-b md:border-b-2 md:border-orange-2" data-listing-media-teasers="" data-test-listing-media-teasers="">
					<ul class="fd-container py-3 md:py-2 mx-auto list-none flex overflow-auto lg:overflow-visible px-0">
						<li class="flex-shrink-0 flex-grow md:flex-grow-0 md:px-3 pr-3 pl-4">
							<a class="listing-media-teaser-item flex-wrap md:flex-nowrap h-auto md:h-11 w-full md:w-auto leading-6 inline-flex whitespace-no-wrap border-solid rounded-sm align-middle cursor-pointer text-center items-center justify-center focus:outline-none text-blue-2 hover:text-blue-1" data-interaction="Object.Plattegrond" data-interaction-click="" data-media-viewer-overlay="plattegrond" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_teaser&quot;,&quot;media_type&quot;:&quot;virtual_tour&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="#plattegrond" title="View floorplan">
							<div class="listing-media-teaser-item__image-container bg-light-2 relative rounded overflow-hidden mb-1 md:hidden flex-shrink-0 w-full">
								<img alt="View floorplan" class="absolute inset-y-0 left-1/2 h-full w-full transform -translate-x-1/2 object-cover mix-blend-multiply" src="https://cloud.funda.nl/valentina_media/148/029/558_plattegrondgroot.png"> <span class="absolute inset-0 h-full w-full flex" data-img-error-placeholder=""><span class="h-8 w-8 p-1 block m-auto rounded-full bg-black text-white bg-opacity-50"><svg role="img" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
								<path d="M42 7.5A1.5 1.5 0 0040.5 6h-33A1.5 1.5 0 006 7.5v33A1.5 1.5 0 007.5 42H18v-3H9V9h30v30h-7.76L20.8 28.56l-2.12 2.12L30 42h10.5a1.5 1.5 0 001.5-1.5v-33z"></path></svg></span></span>
							</div><span class="fill-current align-middle h-6 w-6 hidden md:inline-block mr-2"><svg role="img" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
							<path d="M42 7.5A1.5 1.5 0 0040.5 6h-33A1.5 1.5 0 006 7.5v33A1.5 1.5 0 007.5 42H18v-3H9V9h30v30h-7.76L20.8 28.56l-2.12 2.12L30 42h10.5a1.5 1.5 0 001.5-1.5v-33z"></path></svg></span> <span class="">Floorplan</span> <span class="text-dark-3 ml-1 hidden md:inline">3</span></a>
						</li>
						<li class="flex-shrink-0 flex-grow md:flex-grow-0 md:px-3 pr-3">
							<a class="listing-media-teaser-item flex-wrap md:flex-nowrap h-auto md:h-11 w-full md:w-auto leading-6 inline-flex whitespace-no-wrap border-solid rounded-sm align-middle cursor-pointer text-center items-center justify-center focus:outline-none text-blue-2 hover:text-blue-1" data-interaction="Object.Fotos360" data-interaction-click="" data-media-viewer-overlay="360-foto-foto1" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_teaser&quot;,&quot;media_type&quot;:&quot;virtual_tour&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="#360-foto-foto1" title="View 360° photos">
							<div class="listing-media-teaser-item__image-container bg-light-2 relative rounded overflow-hidden mb-1 md:hidden flex-shrink-0 w-full">
								<img alt="View 360° photos" class="absolute inset-y-0 left-1/2 h-full w-full transform -translate-x-1/2 object-cover mix-blend-multiply" src=""> <span class="absolute inset-0 h-full w-full flex" data-img-error-placeholder=""><span class="h-8 w-8 p-1 block m-auto rounded-full bg-black text-white bg-opacity-50"><svg role="img" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
								<path d="M42 9.5A1.5 1.5 0 0040.5 8h-10A1.5 1.5 0 0029 9.5v10a1.5 1.5 0 003 0v-7a14 14 0 11-8-2.5V7a17 17 0 1010.92 4h5.58A1.5 1.5 0 0042 9.5z" data-name="360"></path></svg></span></span>
							</div><span class="fill-current align-middle h-6 w-6 hidden md:inline-block mr-2"><svg role="img" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
							<path d="M42 9.5A1.5 1.5 0 0040.5 8h-10A1.5 1.5 0 0029 9.5v10a1.5 1.5 0 003 0v-7a14 14 0 11-8-2.5V7a17 17 0 1010.92 4h5.58A1.5 1.5 0 0042 9.5z" data-name="360"></path></svg></span> <span class="">360° photos</span> <span class="text-dark-3 ml-1 hidden md:inline">10</span></a>
						</li>
						<li class="flex-shrink-0 flex-grow md:flex-grow-0 md:px-3 pr-3">
							<a class="listing-media-teaser-item flex-wrap md:flex-nowrap h-auto md:h-11 w-full md:w-auto leading-6 inline-flex whitespace-no-wrap border-solid rounded-sm align-middle cursor-pointer text-center items-center justify-center focus:outline-none text-blue-2 hover:text-blue-1" data-interaction="Object.Video" data-interaction-click="" data-media-viewer-overlay="video" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_teaser&quot;,&quot;media_type&quot;:&quot;virtual_tour&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="#video" title="View video">
							<div class="listing-media-teaser-item__image-container bg-light-2 relative rounded overflow-hidden mb-1 md:hidden flex-shrink-0 w-full">
								<img alt="View video" class="absolute inset-y-0 left-1/2 h-full w-full transform -translate-x-1/2 object-cover mix-blend-multiply" src="{{asset('')}}"> <span class="bg-light-2 absolute inset-0 h-full w-full flex" data-img-error-placeholder=""><span class="h-8 w-8 p-1 block m-auto rounded-full bg-black text-white bg-opacity-50"><svg role="img" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
								<path d="M39.16 23.19a1.48 1.48 0 00-.51-.48l-.11-.09L13.32 6.24l-.16-.08h-.09l-.18-.06h-.11L12.6 6H12.19a1.49 1.49 0 00-1 .65 1.47 1.47 0 00-.1.2 1.46 1.46 0 00-.07.21v.08a1.48 1.48 0 000 .2V40.52a1.49 1.49 0 000 .2v.08a1.46 1.46 0 00.07.21 1.48 1.48 0 00.11.21 1.49 1.49 0 001 .65H12.9l.18-.06h.08l.16-.08 25.41-16.5a1.5 1.5 0 00.43-2.04zM14 10.26L35.16 24 14 37.74z"></path></svg></span></span>
							</div><span class="fill-current align-middle h-6 w-6 hidden md:inline-block mr-2"><svg role="img" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
							<path d="M39.16 23.19a1.48 1.48 0 00-.51-.48l-.11-.09L13.32 6.24l-.16-.08h-.09l-.18-.06h-.11L12.6 6H12.19a1.49 1.49 0 00-1 .65 1.47 1.47 0 00-.1.2 1.46 1.46 0 00-.07.21v.08a1.48 1.48 0 000 .2V40.52a1.49 1.49 0 000 .2v.08a1.46 1.46 0 00.07.21 1.48 1.48 0 00.11.21 1.49 1.49 0 001 .65H12.9l.18-.06h.08l.16-.08 25.41-16.5a1.5 1.5 0 00.43-2.04zM14 10.26L35.16 24 14 37.74z"></path></svg></span> <span class="">Video</span></a>
						</li>
						<li class="flex-shrink-0 flex-grow md:flex-grow-0 md:px-3 pr-3 hidden">
							<a class="listing-media-teaser-item flex-wrap md:flex-nowrap h-auto md:h-11 w-full md:w-auto leading-6 inline-flex whitespace-no-wrap border-solid rounded-sm align-middle cursor-pointer text-center items-center justify-center focus:outline-none text-blue-2 hover:text-blue-1" data-enhancements-endpoint="/objectenhancements/enhancements/?GlobalId=6072486" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_teaser&quot;,&quot;media_type&quot;:&quot;virtual_tour&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" title="View 3d tour">
							<div class="listing-media-teaser-item__image-container bg-light-2 relative rounded overflow-hidden mb-1 md:hidden flex-shrink-0 w-full">
								<img alt="View 3d tour" class="absolute inset-y-0 left-1/2 h-full w-full transform -translate-x-1/2 object-cover mix-blend-multiply" src=""> <span class="bg-light-2 absolute inset-0 h-full w-full flex" data-img-error-placeholder=""><span class="h-8 w-8 p-1 block m-auto rounded-full bg-black text-white bg-opacity-50"><svg viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
								<defs>
									<style>
									.cls-1{fill:none;}
									</style>
								</defs>
								<g id="Concept">
									<rect class="cls-1" height="48" width="48"></rect>
								</g>
								<g id="Productie">
									<path d="M44.5,7a1.54,1.54,0,0,0-.82.24s0,0,0,0C39.4,10.15,32.1,12.1,24,12.1S8.6,10.15,4.36,7.28l0,0A1.54,1.54,0,0,0,3.5,7,1.5,1.5,0,0,0,2,8.5v31A1.5,1.5,0,0,0,3.5,41a1.54,1.54,0,0,0,.82-.24s0,0,0,0C8.6,37.85,15.9,35.9,24,35.9s15.4,2,19.64,4.82l0,0a1.54,1.54,0,0,0,.82.24A1.5,1.5,0,0,0,46,39.5V8.5A1.5,1.5,0,0,0,44.5,7ZM5,11.09a35.08,35.08,0,0,0,10,3.22V33.69A35.08,35.08,0,0,0,5,36.91ZM18,33.25V14.75a52.75,52.75,0,0,0,6,.35,52.75,52.75,0,0,0,6-.35v18.5a51.6,51.6,0,0,0-12,0Zm25,3.66a35.08,35.08,0,0,0-10-3.22V14.31a35.08,35.08,0,0,0,10-3.22Z"></path>
								</g></svg></span></span>
							</div><span class="fill-current align-middle h-6 w-6 hidden md:inline-block mr-2"><svg viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
							<defs>
								<style>
								.cls-1{fill:none;}
								</style>
							</defs>
							<g id="Concept">
								<rect class="cls-1" height="48" width="48"></rect>
							</g>
							<g id="Productie">
								<path d="M44.5,7a1.54,1.54,0,0,0-.82.24s0,0,0,0C39.4,10.15,32.1,12.1,24,12.1S8.6,10.15,4.36,7.28l0,0A1.54,1.54,0,0,0,3.5,7,1.5,1.5,0,0,0,2,8.5v31A1.5,1.5,0,0,0,3.5,41a1.54,1.54,0,0,0,.82-.24s0,0,0,0C8.6,37.85,15.9,35.9,24,35.9s15.4,2,19.64,4.82l0,0a1.54,1.54,0,0,0,.82.24A1.5,1.5,0,0,0,46,39.5V8.5A1.5,1.5,0,0,0,44.5,7ZM5,11.09a35.08,35.08,0,0,0,10,3.22V33.69A35.08,35.08,0,0,0,5,36.91ZM18,33.25V14.75a52.75,52.75,0,0,0,6,.35,52.75,52.75,0,0,0,6-.35v18.5a51.6,51.6,0,0,0-12,0Zm25,3.66a35.08,35.08,0,0,0-10-3.22V14.31a35.08,35.08,0,0,0,10-3.22Z"></path>
							</g></svg></span> <span class="">3D tour</span></a>
						</li>
						<li class="flex-shrink-0 flex-grow md:flex-grow-0 md:px-3 pr-4 md:pl-4 lg:pl-0 md:order-first">
							<a class="listing-media-teaser-item flex-wrap md:flex-nowrap h-auto md:h-11 w-full md:w-auto leading-6 inline-flex whitespace-no-wrap border-solid rounded-sm align-middle cursor-pointer text-center items-center justify-center focus:outline-none text-blue-2 hover:text-blue-1" data-interaction="Object.Fotos" data-interaction-click="" data-media-viewer-overlay="foto-1" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_teaser&quot;,&quot;media_type&quot;:&quot;virtual_tour&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="#foto-1" title="View photos">
							<div class="listing-media-teaser-item__image-container bg-light-2 relative rounded overflow-hidden mb-1 md:hidden flex-shrink-0 w-full">
								<img alt="View photos" class="absolute inset-y-0 left-1/2 h-full w-full transform -translate-x-1/2 object-cover mix-blend-multiply" src="https://cloud.funda.nl/valentina_media/148/028/510_360x240.jpg"> <span class="absolute inset-0 h-full w-full flex" data-img-error-placeholder=""><span class="h-8 w-8 p-1 block m-auto rounded-full bg-black text-white bg-opacity-50"><svg role="img" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
								<path d="M40.5 14h-29a1.5 1.5 0 00-1.5 1.5v25a1.5 1.5 0 001.5 1.5h29a1.5 1.5 0 001.5-1.5v-25a1.5 1.5 0 00-1.5-1.5zM13 17h26v22H13z"></path>
								<path d="M7 11h26v1h3V9.5A1.5 1.5 0 0034.5 8h-29A1.5 1.5 0 004 9.5v25A1.5 1.5 0 005.5 36H8v-3H7z"></path></svg></span></span>
							</div><span class="fill-current align-middle h-6 w-6 hidden md:inline-block mr-2"><svg role="img" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
							<path d="M40.5 14h-29a1.5 1.5 0 00-1.5 1.5v25a1.5 1.5 0 001.5 1.5h29a1.5 1.5 0 001.5-1.5v-25a1.5 1.5 0 00-1.5-1.5zM13 17h26v22H13z"></path>
							<path d="M7 11h26v1h3V9.5A1.5 1.5 0 0034.5 8h-29A1.5 1.5 0 004 9.5v25A1.5 1.5 0 005.5 36H8v-3H7z"></path></svg></span> <span class="md:hidden mr-1">46</span> <span class="lowercase md:normal-case">Photos</span> <span class="text-dark-3 ml-1 hidden md:inline">46</span></a>
						</li>
						<li class="hidden md:block ml-auto md:px-4 lg:-mr-4">
							<a class="listing-media-teaser-item flex-wrap md:flex-nowrap h-auto md:h-11 w-full md:w-auto leading-6 inline-flex whitespace-no-wrap border-solid rounded-sm align-middle cursor-pointer text-center items-center justify-center focus:outline-none text-blue-2 hover:text-blue-1" data-media-viewer-overlay="overzicht" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_teaser&quot;,&quot;media_type&quot;:&quot;virtual_tour&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="#overzicht" title="View all media">
							<div class="listing-media-teaser-item__image-container bg-light-2 relative rounded overflow-hidden mb-1 md:hidden flex-shrink-0 w-full">
								<img alt="View all media" class="absolute inset-y-0 left-1/2 h-full w-full transform -translate-x-1/2 object-cover mix-blend-multiply" src=""> <span class="bg-light-2 absolute inset-0 h-full w-full flex" data-img-error-placeholder=""><span class="h-8 w-8 p-1 block m-auto rounded-full bg-black text-white bg-opacity-50"><svg role="img" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.5 26h-15A1.5 1.5 0 004 27.48v13A1.5 1.5 0 005.5 42h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.5zM7 29h12v10H7zM42.5 26h-15a1.5 1.5 0 00-1.5 1.5v13a1.5 1.5 0 001.5 1.5h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.5zM29 29h12v10H29zM20.5 5.93h-15A1.5 1.5 0 004 7.44v13A1.5 1.5 0 005.5 22h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.57zM7 8.94h12V19H7zM42.5 6h-15A1.5 1.5 0 0026 7.47v13A1.5 1.5 0 0027.5 22h15a1.5 1.5 0 001.5-1.5v-13A1.5 1.5 0 0042.5 6zM29 9h12v10H29z"></path></svg></span></span>
							</div><span class="fill-current align-middle h-6 w-6 hidden md:inline-block mr-2"><svg role="img" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
							<path d="M20.5 26h-15A1.5 1.5 0 004 27.48v13A1.5 1.5 0 005.5 42h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.5zM7 29h12v10H7zM42.5 26h-15a1.5 1.5 0 00-1.5 1.5v13a1.5 1.5 0 001.5 1.5h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.5zM29 29h12v10H29zM20.5 5.93h-15A1.5 1.5 0 004 7.44v13A1.5 1.5 0 005.5 22h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.57zM7 8.94h12V19H7zM42.5 6h-15A1.5 1.5 0 0026 7.47v13A1.5 1.5 0 0027.5 22h15a1.5 1.5 0 001.5-1.5v-13A1.5 1.5 0 0042.5 6zM29 9h12v10H29z"></path></svg></span> <span class="">All media</span></a>
						</li>
					</ul>
				</div>
			</section>
			<div class="object-detail__content fd-container fd-m-auto">
				<div class="object-primary">
					<header class="object-header fd-border-light-2 fd-border-horizontal-remove fd-border-top-remove fd-m-bottom">
						<div class="object-header__content fd-p-bottom fd-p-top-xs fd-p-top-none--bp-l fd-p-bottom--bp-l">
							<div class="object-header__details">
								<div class="object-header__labels">
									<ul class="fd-list--none fd-flex fd-p-none fd-color-white fd-text-size-s fd-text--emphasis fd-m-bottom-xs">
										<li class="label-transactie-voorbehoud fd-p-horizontal-xs fd-border-radius fd-m-right-2xs">Sold under reservation</li>
									</ul>
								</div>
								<div class="object-header__details-info fd-m-bottom-l fd-m-bottom-s--bp-m fd-flex">
									<div class="object-header__container fd-m-right-xs fd-flex-grow">
										<h1 class="fd-m-top-none fd-m-bottom-xs fd-m-bottom-s--bp-m" data-global-id="6072486"><span class="object-header__title">Jan Schamhartstraat 78</span> <span class="object-header__subtitle fd-color-dark-3">8121 PB Olst <a class="fd-m-left-2xs--bp-m fd-display-block fd-display-inline--bp-m" data-local-insights-entry-point="olst/kortrick-en-zonnekamp" data-test-insights-url-entry-point="" data-track-click="Local Insights Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_summary&quot;,&quot;funda_user_id&quot;:&quot;&quot;,&quot;city&quot;:&quot;Olst&quot;,&quot;neighbourhood&quot;:&quot;Kortrick en Zonnekamp&quot;}" href="/en/informatie/olst/kortrick-en-zonnekamp/">Kortrick en Zonnekamp</a></span></h1>
										<section class="kenmerken-highlighted" data-vue-container="">
											<h2 class="a11y-sr-only">Hightlighted features</h2>
											<ul class="kenmerken-highlighted__list fd-flex fd-list--none fd-p-none">
												<li class="fd-m-right-s fd-m-right-xl--bp-m fd-flex fd-align-items-center">
													<span class="fd-color-dark-3 fd-m-right-2xs" data-test-kenmerken-highlighted-icon="" title="living area"></span>
													<div class="fd-icon">
														<span class="fd-color-dark-3 fd-m-right-2xs" data-test-kenmerken-highlighted-icon="" title="living area"><svg height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
														<path d="M38.5 32.25v-16.5a5 5 0 10-6.25-6.25h-16.5a5 5 0 10-6.25 6.25v16.5a5 5 0 106.25 6.25h16.5a5 5 0 106.25-6.25zm-6.25 3.25h-16.5a5 5 0 00-3.25-3.25v-16.5a5 5 0 003.25-3.25h16.5a5 5 0 003.25 3.25v16.5a5 5 0 00-3.25 3.25zM37 9a2 2 0 11-2 2 2 2 0 012-2zM11 9a2 2 0 11-2 2 2 2 0 012-2zm0 30a2 2 0 112-2 2 2 0 01-2 2zm26 0a2 2 0 112-2 2 2 0 01-2 2z"></path></svg></span>
													</div><span class="kenmerken-highlighted__value fd-text--nowrap" data-test-kenmerken-highlighted-value="">150 m²</span> <span class="fd-color-dark-2 fd-m-left-2xs fd-completely-hidden fd-display-inline-block--bp-m" data-test-kenmerken-highlighted-description="">living area</span>
												</li>
												<li class="fd-m-right-s fd-m-right-xl--bp-m fd-flex fd-align-items-center">
													<span class="fd-color-dark-3 fd-m-right-2xs" data-test-kenmerken-highlighted-icon="" title="plot size"></span>
													<div class="fd-icon">
														<span class="fd-color-dark-3 fd-m-right-2xs" data-test-kenmerken-highlighted-icon="" title="plot size"><svg height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
														<path d="M43 5.5A1.5 1.5 0 0041.5 4h-35A1.5 1.5 0 005 5.5v37A1.5 1.5 0 006.5 44h35a1.5 1.5 0 001.5-1.5zm-35 9h13v5a1.5 1.5 0 001.5 1.5H30v20H8zm25 5a1.5 1.5 0 00-1.5-1.5H24v-5a1.5 1.5 0 00-1.5-1.5H8V7h32v34h-7z"></path></svg></span>
													</div><span class="kenmerken-highlighted__value fd-text--nowrap" data-test-kenmerken-highlighted-value="">2,776 m²</span> <span class="fd-color-dark-2 fd-m-left-2xs fd-completely-hidden fd-display-inline-block--bp-m" data-test-kenmerken-highlighted-description="">plot size</span>
												</li>
												<li class="fd-flex fd-align-items-center">
													<span class="fd-color-dark-3 fd-m-right-2xs" data-test-kenmerken-highlighted-icon="" title="bedrooms"></span>
													<div class="fd-icon">
														<span class="fd-color-dark-3 fd-m-right-2xs" data-test-kenmerken-highlighted-icon="" title="bedrooms"><svg height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
														<path d="M11 20l-3.999 5.999h33.998L37 20h3l3.999 5.999L44 26v9.5a1.5 1.5 0 01-1.5 1.5H39v1.5a1.5 1.5 0 01-3 0V37H12v1.5a1.5 1.5 0 01-3 0V37H5.5A1.5 1.5 0 014 35.5V26l.001-.001L8 20h3zm30 9H7v5h34v-5zM38.5 8A1.5 1.5 0 0140 9.5V20l-9-.001V21.5a1.5 1.5 0 01-1.5 1.5h-11a1.5 1.5 0 01-1.5-1.5v-1.501L8 20V9.5A1.5 1.5 0 019.5 8h29zM28 17h-8v3h8v-3zm9-6H11v5.999h6V15.5a1.5 1.5 0 011.5-1.5h11a1.5 1.5 0 011.5 1.5v1.499h6V11z"></path></svg></span>
													</div><span class="kenmerken-highlighted__value fd-text--nowrap" data-test-kenmerken-highlighted-value="">4</span> <span class="fd-color-dark-2 fd-m-left-2xs fd-completely-hidden fd-display-inline-block--bp-m" data-test-kenmerken-highlighted-description="">bedrooms</span>
												</li>
											</ul>
										</section>
									</div>
									<div class="fd-flex-shrink-0 fd-text--center">
										<div class="object-header__map fd-border-radius-l fd-overflow-hidden fd-border-light-2">
											<a class="fd-display-block object-header__map-illustration" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_summary&quot;,&quot;media_type&quot;:&quot;map&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="#kaart"></a>
										</div><a class="fd-m-top-s fd-completely-hidden fd-display-block--bp-m" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_summary&quot;,&quot;media_type&quot;:&quot;map&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="#kaart">Map</a>
									</div>
								</div>
								<div class="object-header__pricing fd-text-size-l fd-flex--bp-m fd-align-items-center">
									<div>
										<strong class="object-header__price">€ 599,000 k.k.</strong>
									</div><a class="fd-btn fd-btn--tertiary fd-text-size" data-test-maandlasten-indicator-link="" data-track-click="Mortgage Calculation Tool Clicked" href="/hypotheek/maandlasten/ing/?id=42427849"><span class="icon-calculator-blue" data-grunticon-embed=""></span>Calculate monthly payment</a>
								</div>
							</div>
						</div>
					</header>
					<div aria-expanded="false" class="async-object-rating -async-object-rating is-expandible" data-async-object-rating="" data-controller-uid="0" data-expandible="" data-expandible-scroll="" data-sync-rating-container="">
						<div class="async-object-rating-handle-wrapper">
							<a class="async-object-rating-handle" data-async-object-rating-handle="user-saved-objects" data-expandible-handle="object-rating" href="/en/mijn/objectrating/?tinyId=42427849&amp;location=ObjectDetailHeader&amp;trackingListingOfferingType=koop&amp;trackingPageType=listing&amp;trackingSiteSection=listings"><span class="expandible-handle-icon icon-plus-blue" data-grunticon-embed=""></span> <span class="expandible-handle-icon icon-minus-blue" data-grunticon-embed=""></span> <span class="object-rating-handle-text" data-async-object-rating-handle-text="My score and note">My score and note</span></a>
							<form action="/en/mijn/objectrating/savecommonrating/?tinyId=42427849&amp;location=ObjectDetailHeader&amp;trackingListingOfferingType=koop&amp;trackingPageType=listing&amp;trackingSiteSection=listings" class="overall-object-rating-form" data-overall-object-rating-form="" method="post">
								<input name="__RequestVerificationToken" type="hidden" value="Ue420tKChp5hBmN6-UQMFAdiWlhq02xI0J5mlckMltS6uDApUieCqvRc2NDGMtXmjYu4x8AVHyeqXNSa8nE4UOm8n6w0qLXiOsoeplHMTIYzSxYo9wl9s9LC651V2qW_A5QbKg2">
								<fieldset class="rating object-rating-instance" data-controller-uid="9" data-rating="42427849-objectdetailheader">
									<legend class="object-rating-legend"></legend>
									<div class="ratings">
										<label class="radio-default" for="42427849-0--0-ObjectDetailHeader"><input checked="checked" class="custom-rating is-rated" data-default-rating-input="" id="42427849-0--0-ObjectDetailHeader" name="common-42427849-0-0" type="radio" value="0"> <span class="rating-replacement"><span class="label-text">No rating</span></span></label> <label for="42427849-0--1-ObjectDetailHeader" title="1 star"><input class="custom-rating" id="42427849-0--1-ObjectDetailHeader" name="common-42427849-0-0" type="radio" value="1"> <span class="rating-replacement"><span class="label-text">1 star</span></span></label> <label for="42427849-0--2-ObjectDetailHeader" title="2 stars"><input class="custom-rating" id="42427849-0--2-ObjectDetailHeader" name="common-42427849-0-0" type="radio" value="2"> <span class="rating-replacement"><span class="label-text">2 stars</span></span></label> <label for="42427849-0--3-ObjectDetailHeader" title="3 stars"><input class="custom-rating" id="42427849-0--3-ObjectDetailHeader" name="common-42427849-0-0" type="radio" value="3"> <span class="rating-replacement"><span class="label-text">3 stars</span></span></label> <label for="42427849-0--4-ObjectDetailHeader" title="4 stars"><input class="custom-rating" id="42427849-0--4-ObjectDetailHeader" name="common-42427849-0-0" type="radio" value="4"> <span class="rating-replacement"><span class="label-text">4 stars</span></span></label> <label for="42427849-0--5-ObjectDetailHeader" title="5 stars"><input class="custom-rating" id="42427849-0--5-ObjectDetailHeader" name="common-42427849-0-0" type="radio" value="5"> <span class="rating-replacement"><span class="label-text">5 stars</span></span></label>
									</div>
								</fieldset><button class="button-primary" type="submit">Save</button>
							</form>
						</div>
						<div class="object-rating">
							<div class="app-spinner" data-async-object-rating-spinner=""><svg class="svg-circular" viewbox="0 0 48 48">
							<circle class="path" cx="24" cy="24" fill="none" r="20" stroke-dasharray="89,200" stroke-dashoffset="-124" stroke-width="3"></circle></svg> <img class="gif-circular" src="https://assets.fstatic.nl/master_3718/assets/components/app-spinner/spinner.gif"></div>
							<div class="async-object-rating-content" data-async-object-rating-content=""></div>
						</div>
					</div>
					<section></section>
					<section aria-expanded="false" class="object-description fd-p-top-xs fd-p-top-s--bp-l is-expandable" data-object-description="">
						<h2 class="object-description-title">Description</h2>
						<script data-object-description-config="" type="application/json">
						  {"0px": 300, "500px": 450, "760px": 650, "1020px": 500}
						</script>
						<div class="object-description-body" data-gtm-vis-first-on-screen-1273266_1190="339321" data-gtm-vis-has-fired-1273266_1190="1" data-gtm-vis-total-visible-time-1273266_1190="100" data-object-description-body="" data-object-description-strip-markup="">
							Zo treffen wij ze maar zelden! Op een unieke locatie aan een verkeersluwe straat op een kavel van 2.776 m² grond ligt deze VRIJSTAANDE BUNGALOW met inpandige garage, royale vrijstaande houten schuur en een heerlijk vrije tuin met veel privacy. De woning is landelijk gelegen aan de Jan Schamhartstraat (alleen bestemmingsverkeer en langzaam rijdend verkeer), gesitueerd achter de bestaande nieuwbouwwijk Zonnekamp-West en tegenover de nieuw te bouwen wijk Olstergaard. Vanuit uw wonin …
						</div><button class="object-description-open-button" data-interaction="Object.Omschrijving" data-interaction-click="" data-object-description-expand-handle=""><span class="icon-plus-blue" data-grunticon-embed=""></span>Read the full description</button>
					</section>
					<section class="object-sponsorblock">
						<aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/overzicht/web/sponsorblok1_koop_overzicht_web_r0" data-advertisement-lok="3001" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[500, 0],[&quot;fluid&quot;]],[[0, 0],[&quot;fluid&quot;,[320, 100],[320, 50]]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="" data-advertisements-lazy-type="scroll" data-advertisements-render-margin="10" data-test-advertisement="" id="ad_222640aa-2815-4b44-ac51-a13b23c57180"></aside>
					</section>
					<section aria-expanded="true" class="object-kenmerken is-expanded is-expandible" data-object-kenmerken="">
						<h2 class="object-kenmerken-title">Features</h2>
						<div class="object-kenmerken-body" data-gtm-vis-first-on-screen-1273266_1192="338800" data-gtm-vis-has-fired-1273266_1192="1" data-gtm-vis-total-visible-time-1273266_1192="100" data-object-kenmerken-body="" data-test-object-kenmerken-body="" style="height: auto;">
							<h3 class="object-kenmerken-list-header">Transfer of ownership</h3>
							<dl class="object-kenmerken-list">
								<dt>Asking price</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center">
									<span class="fd-m-right-xs">€ 599,000 kosten koper</span> <span class="textlink-banner"></span>
									<aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/overzicht/web/tekstlink-overdracht_koop_overzicht_web_r0" data-advertisement-lok="5001" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[0, 0],[&quot;fluid&quot;]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="" data-advertisements-lazy-type="scroll" data-advertisements-render-margin="10" data-test-advertisement="" id="ad_016fc235-3f59-44f5-aaf0-3a9577883659">
										<span class="textlink-banner"></span>
									</aside>
								</dd>
								<dt>Asking price per m²</dt>
								<dd class="object-kenmerken-list__asking-price fd-flex fd-align-items-center" data-vue-container="">
									€ 3,993
									<div class="fd-tooltip fd-tooltip--bottom fd-display-block" data-tooltip-ui="">
										<div class="fd-tooltip__balloon fd-p fd-bg-yellow-2 fd-color-dark-1" role="tooltip">
											<strong>Keep in mind, this house has a large plot size</strong><br>
											The asking price per m² (€ 599,000) is calculated by dividing the asking price of the home by the living area (150 m²). Plot size and outbuildings aren't taken into account into this calculation.<br>
											<br>
											Because of the large plot size, the asking price per m² is less suited for comparisons between houses in this situation and we advise you to <a href="/makelaars/">consult a real estate agent</a> for further interpretation.
										</div><a class="relative fd-m-left-2xs fd-display-block" data-tooltip-ui-handle="">
										<div class="fd-icon fd-display-block fd-color-orange-2">
											<svg height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
											<path d="M45.79 41.26l.08-.14V41a1.5 1.5 0 000-.16v-.12a1.49 1.49 0 000-.18v-.07a1.48 1.48 0 000-.18v-.13a1.49 1.49 0 000-.15l-.06-.14v-.08L25.3 4.24l-.05-.07-.09-.17-.1-.11-.06-.05-.14-.1h-.07l-.15-.07H23.53l-.15.07h-.07l-.14.1-.1.09-.1.11-.09.12-.05.07L2.2 39.75v.07l-.1.18v.13a1.26 1.26 0 000 .3v.14a1.48 1.48 0 000 .16V41a1.49 1.49 0 00.05.14l.07.12.08.13.09.11.1.11.11.09.13.09h.08l.19.11H45.03l.14-.06h.08l.12-.09.12-.1.09-.09.1-.13zM24 8l17.9 31H6.1z"></path>
											<rect height="15" rx="1.5" ry="1.5" transform="rotate(180 24 23.5)" width="3" x="22.5" y="16"></rect>
											<rect height="3" rx="1.5" ry="1.5" transform="rotate(-180 24 34.5)" width="3" x="22.5" y="33"></rect></svg>
										</div><span class="fd-tooltip__caret fd-color-yellow-2"></span></a>
									</div>
								</dd>
								<dt>Listed since</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">4 weeks</span></dd>
								<dt>Status</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Sold under reservation</span></dd>
								<dt>Acceptance</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Available in consultation</span></dd>
							</dl>
							<div class="category-banner" data-test-category-banner="">
								<aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/overzicht/web/categoriebanner-overdracht_koop_overzicht_web_r0" data-advertisement-lok="5000" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[0, 0],[&quot;fluid&quot;]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="kenmerkenExpanded" data-advertisements-lazy-type="event" data-advertisements-render-margin="10" data-test-advertisement="" id="ad_bfaeb066-6a62-4618-9042-74f9759b34e6"></aside>
							</div>
							<h3 class="object-kenmerken-list-header">Construction</h3>
							<dl class="object-kenmerken-list">
								<dt>Kind of house</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Bungalow, detached residential property</span></dd>
								<dt>Building type</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Resale property</span></dd>
								<dt>Year of construction</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center">
									<span class="fd-m-right-xs">1965</span> <span class="textlink-banner"></span>
									<aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/overzicht/web/tekstlink-bouw_koop_overzicht_web_r0" data-advertisement-lok="5011" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[0, 0],[&quot;fluid&quot;]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="kenmerkenExpanded" data-advertisements-lazy-type="event" data-advertisements-render-margin="10" data-test-advertisement="" id="ad_fba3f49d-7ddb-438f-bb50-78ba944d2208">
										<span class="textlink-banner"></span>
									</aside>
								</dd>
								<dt>Type of roof</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Gable roof</span></dd>
							</dl>
							<div class="category-banner" data-test-category-banner="">
								<aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/overzicht/web/categoriebanner-bouw_koop_overzicht_web_r0" data-advertisement-lok="5010" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[0, 0],[&quot;fluid&quot;]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="kenmerkenExpanded" data-advertisements-lazy-type="event" data-advertisements-render-margin="10" data-test-advertisement="" id="ad_06dd1ff6-e79a-4ea0-a311-3ad22f28a9bc"></aside>
							</div>
							<h3 class="object-kenmerken-list-header" data-interaction="Object.Kenmerken" data-scroll-watch="">Surface areas and volume</h3>
							<dl class="object-kenmerken-list">
								<dt class="object-kenmerken-group-header object-kenmerken-group-header-half"></dt>
								<dd>
									<div class="">
										Areas
									</div>
								</dd>
								<dd></dd>
								<dd class="object-kenmerken-group-list">
									<dl>
										<dt>Living area</dt>
										<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">150 m²</span></dd>
										<dt>Other space inside the building</dt>
										<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">26 m²</span></dd>
										<dt>External storage space</dt>
										<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">86 m²</span></dd>
									</dl>
								</dd>
								<dt>Plot size</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">2,776 m²</span></dd>
								<dt>Volume in cubic meters</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">675 m³</span></dd>
							</dl>
							<div class="category-banner" data-test-category-banner="">
								<aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/overzicht/web/categoriebanner-oppervlakteinhoud_koop_overzicht_web_r0" data-advertisement-lok="5150" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[0, 0],[&quot;fluid&quot;]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="kenmerkenExpanded" data-advertisements-lazy-type="event" data-advertisements-render-margin="10" data-test-advertisement="" id="ad_9488b84b-1a76-49f6-a12a-4c6cc107120f"></aside>
							</div>
							<h3 class="object-kenmerken-list-header">Layout</h3>
							<dl class="object-kenmerken-list">
								<dt>Number of rooms</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">5 rooms (4 bedrooms)</span></dd>
								<dt>Number of bath rooms</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">2 bathrooms and 1 separate toilet</span></dd>
								<dt>Bathroom facilities</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Bath, shower and toilet</span></dd>
								<dt>Number of stories</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">1 story and a attic</span></dd>
								<dt>Facilities</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Optical fibre and sliding door</span></dd>
							</dl>
							<div class="category-banner" data-test-category-banner="">
								<aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/overzicht/web/categoriebanner-indeling_koop_overzicht_web_r0" data-advertisement-lok="5030" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[0, 0],[&quot;fluid&quot;]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="kenmerkenExpanded" data-advertisements-lazy-type="event" data-advertisements-render-margin="10" data-test-advertisement="" id="ad_bb7ce486-57bf-48bb-b793-77f547591295"></aside>
							</div>
							<h3 class="object-kenmerken-list-header">Energy</h3>
							<dl class="object-kenmerken-list">
								<dt>Energy label</dt>
								<dd>
									<span class="energielabel energielabel-d" title="Energy label D">D</span> <a href="/meer-weten/energielabel/" title="energielabel">What does this mean?</a>
								</dd>
								<dt>Insulation</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Double glazing</span></dd>
								<dt>Heating</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">CH boiler and wood heater</span></dd>
								<dt>Hot water</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">CH boiler</span></dd>
								<dt>CH boiler</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">HR (gas-fired combination boiler from 2017, in ownership)</span></dd>
							</dl>
							<div class="category-banner" data-test-category-banner="">
								<aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/overzicht/web/categoriebanner-energie_koop_overzicht_web_r0" data-advertisement-lok="5040" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[0, 0],[&quot;fluid&quot;]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="kenmerkenExpanded" data-advertisements-lazy-type="event" data-advertisements-render-margin="10" data-test-advertisement="" id="ad_6707bf9c-dcf1-479a-b674-34cc0e2aa97e"></aside>
							</div>
							<h3 class="object-kenmerken-list-header">Cadastral data</h3>
							<dl class="object-kenmerken-list">
								<dt class="object-kenmerken-group-header object-kenmerken-group-header-half"></dt>
								<dd>
									<div class="kadaster-title">
										OLST F 5403
									</div>
								</dd>
								<dd>
									<a href="kadaster">Cadastral map</a>
								</dd>
								<dd class="object-kenmerken-group-list">
									<dl>
										<dt>Area</dt>
										<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">2.776 m²</span></dd>
										<dt>Ownership situation</dt>
										<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Full ownership</span></dd>
									</dl>
								</dd>
							</dl>
							<h3 class="object-kenmerken-list-header">Exterior space</h3>
							<dl class="object-kenmerken-list">
								<dt>Location</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Alongside a quiet road, alongside water, in residential district and rural</span></dd>
								<dt>Garden</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Surrounded by garden</span></dd>
							</dl>
							<div class="category-banner" data-test-category-banner="">
								<aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/overzicht/web/categoriebanner-buitenruimte_koop_overzicht_web_r0" data-advertisement-lok="5160" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[0, 0],[&quot;fluid&quot;]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="kenmerkenExpanded" data-advertisements-lazy-type="event" data-advertisements-render-margin="10" data-test-advertisement="" id="ad_fde59b76-6138-4e64-ab47-c319e3ff59ba"></aside>
							</div>
							<h3 class="object-kenmerken-list-header">Storage space</h3>
							<dl class="object-kenmerken-list">
								<dt>Shed / storage</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Detached wooden storage</span></dd>
							</dl>
							<h3 class="object-kenmerken-list-header">Garage</h3>
							<dl class="object-kenmerken-list">
								<dt>Type of garage</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Built-in</span></dd>
								<dt>Capacity</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">1 car</span></dd>
								<dt>Facilities</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Electricity and heating</span></dd>
							</dl>
							<h3 class="object-kenmerken-list-header">Parking</h3>
							<dl class="object-kenmerken-list">
								<dt>Type of parking facilities</dt>
								<dd class="fd-flex--bp-m fd-flex-wrap fd-align-items-center"><span class="">Public parking</span></dd>
							</dl>
						</div><button class="object-kenmerken-open-button" data-object-kenmerken-handle=""><span class="icon-plus-blue"></span>View all features</button>
					</section>
					<div data-vue-container="">
						<section class="bg-light-3 mb-6 md:mb-7 pt-6 px-4 md:pt-6 md:pb-1">
							<div class="flex">
								<div class="flex-grow">
									<h4 class="m-0">Do you know the value of your home?</h4>
									<p class="mt-1 mb-3">Get your estimated home value within 10 seconds, using the funda Waardecheck.</p>
								</div>
								<div class="px-3 pt-3 flex-grow hidden md:block"><img alt="Waardecheck scanner" class="mb-4" src="https://assets.fstatic.nl/master_3718/assets/views/object-detail/waardecheck-scanner.svg"></div>
							</div>
							<div class="flex flex-col md:flex-row">
								<div class="md:pr-4 address-form--dark">
									<div class="address-form">
										<div class="flex">
											<div class="mb-5 mr-2 w-6/12">
												<label class="block py-1 truncate" data-abbr="Postcode" for="postalCode">Postcode</label>
												<div class="relative input-uppercase">
													<!----><input class="w-full rounded-sm border bg-white shadow-inner py-2 px-4 outline-none text-base font-normal h-11 disabled:bg-light-3 border-light-1 focus:border-dark-3" id="postalCode" maxlength="7" name="postalCode"> <!---->
												</div>
											</div>
											<div class="mb-5 mr-2 w-3/12">
												<label class="block py-1 truncate" data-abbr="House no." for="houseNumber">House no.</label>
												<div class="relative">
													<!----><input class="w-full rounded-sm border bg-white shadow-inner py-2 px-4 outline-none text-base font-normal h-11 disabled:bg-light-3 border-light-1 focus:border-dark-3" id="houseNumber" name="houseNumber" pattern="[0-9]*"> <!---->
												</div>
											</div>
											<div class="mb-5 w-3/12">
												<label class="block py-1 truncate" for="addition">Addition</label>
												<div class="relative">
													<select class="appearance-none cursor-pointer w-full rounded-sm border bg-white shadow-inner py-2 px-4 outline-none text-base font-normal h-11 disabled:bg-light-3 border-light-1 focus:border-dark-3 bg-light-3" disabled="disabled" id="addition" name="addition">
														<option value="">
															-
														</option>
													</select>
													<div class="absolute p-2 inline-flex right-0 top-0 pointer-events-none">
														<div class="text-blue-2 fill-current align-middle h-6 w-6 text-dark-3">
															<svg role="img" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
															<path d="M35.66 18.83a1.5 1.5 0 00-2.12 0L24 28.37l-9.54-9.54A1.5 1.5 0 0012.34 21l10.57 10.53a1.52 1.52 0 002.13 0L35.66 21a1.5 1.5 0 000-2.17z"></path></svg>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="-mt-5 mb-5 address-form__validation">
											<!----><!----><!----><!----><!---->
										</div>
									</div>
								</div>
								<div class="md:pt-8 sm:w-44">
									<button class="w-full leading-6 inline-flex h-11 whitespace-no-wrap border-solid rounded-sm align-middle cursor-pointer text-center items-center justify-center focus:outline-none bg-blue-2 border-blue-2 hover:bg-blue-1 hover:border-blue-1 shadow px-6 border text-white hover:text-white"><span class="md:hidden">Check the value</span> <span class="hidden md:inline">Check value</span></button>
								</div>
								<div class="flex justify-center pt-4 md:hidden"><img alt="Waardecheck scanner" class="self-center h-12" src="https://assets.fstatic.nl/master_3718/assets/views/object-detail/waardecheck-scanner.svg"></div>
							</div>
						</section>
					</div>
					<script data-i18n="" type="application/json">
					{
					"entryTitle":"Do you know the value of your home?",
					"entryText":"Get your estimated home value within 10 seconds, using the funda Waardecheck.",
					"PostalCode":"Postcode",
					"PostalCodeAbbr":"Postcode",
					"PostalCodeRequired": "Please add a postcode.",
					"HouseNumber":"House no.",
					"HouseNumberAbbr":"House no.",
					"HouseNumberRequired": "Please add a house number.",
					"HouseNumberInvalid": "Please add a valid house number.",
					"AddressNotValidated": "Because of a problem we couldn’t process your request right now. Please try again later.",
					"AddressNotFound": "We can’t find this address",
					"Addition":"Addition",
					"CheckTheValue": "Check the value",
					"CheckValue": "Check value"
					}
					</script>
				</div>
				<div class="object-secondary">
					<section class="object-contact is-enhanced" data-gtm-vis-first-on-screen-1273266_1190="339604" data-gtm-vis-has-fired-1273266_1190="1" data-gtm-vis-total-visible-time-1273266_1190="100" data-object-contact="">
						<div class="object-contact-container object-contact-container__new vereniging nvm">
							<div class="object-contact-header object-contact-header__new object-contact-header__has-logo">
								<div class="object-contact-header-logo fd-m-top-l fd-p-2xs fd-border-radius-l">
									<a href="/en/makelaars/raalte/3066-hannink-makelaars/" title="Hannink Makelaars"><img alt="Logo" class="fd-display-block fd-border-radius" src="https://cloud.funda.nl/valentina_media/141/001/573_720x720.jpg"></a>
								</div><span class="icon icon-logo-nvm" title="NVM selling agent"></span>
							</div>
							<h3 class="object-contact-aanbieder-name"><a class="object-contact-aanbieder-link" href="/en/makelaars/raalte/3066-hannink-makelaars/" title="Go to the the office page(s) of Hannink Makelaars">Hannink Makelaars</a></h3>
							<div class="object-contact-text">
								<span class="icon icon-clock-grey"></span><span class="object-contact-text__content">Available Monday from 8:30</span>
							</div>
							<div class="object-contact-show-phonenumber" data-interaction="Object.Tel" data-interaction-click="" data-object-contact-phone-handle="">
								<button data-log-request="/en/koop/olst/huis-42427849-jan-schamhartstraat-78/statistics/telefoonclick/3066/" data-object-contact-phone-number-handle="" data-track-click="Phone Shown" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_contact_container&quot;,&quot;broker_id&quot;:3066,&quot;lead_broker_id&quot;:3066,&quot;funda_user_id&quot;:&quot;&quot;}" type="button"><span class="icon icon-phone-blue" data-grunticon-embed=""></span>Show phone number</button> <a data-track-click="Phone Called" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_contact_container&quot;,&quot;broker_id&quot;:3066,&quot;lead_broker_id&quot;:3066,&quot;funda_user_id&quot;:&quot;&quot;}" href="tel:0572-351291"><span class="icon icon-phone-blue" data-grunticon-embed=""></span> Call <span class="fd-completely-hidden fd-display-inline-block--bp-m">0572-351291</span></a>
							</div>
							<div class="object-contact-actions" data-broker-id="3066">
								<a class="object-contact-reageer contact-messsage-ab-test-selector" data-contact-broker="" data-test-object-contact-respond="" href="/en/koop/olst/huis-42427849-jan-schamhartstraat-78/reageer/"><span class="icon icon-comment-blue" data-grunticon-embed=""></span>Contact with the agent</a> <a class="object-contact-brochure" data-contact-brochure="" data-test-brochure="" href="/en/koop/olst/huis-42427849-jan-schamhartstraat-78/brochure/"><span class="icon icon-download-blue" data-grunticon-embed=""></span>Request a brochure</a>
							</div>
						</div>
					</section>
					<div class="object-meld-een-fout fd-m-vertical-xs">
						<a href="/en/koop/olst/huis-42427849-jan-schamhartstraat-78/meld-een-fout/">Report an error about this house</a>
					</div>
					<div class="object-rectangle">
						<aside class="advertisement dfp-display-blocked hidden" data-advertisement-adunit-path="/7276/funda.koop/overzicht/web/rectangle1_koop_overzicht_web_r0" data-advertisement-lok="3003" data-advertisement-size-default="[ 0, 0 ]" data-advertisement-size-mapping="[[[1020, 0],[[300, 250],[300, 600]]],[[0, 0],[]]]" data-advertisements="" data-advertisements-async="true" data-advertisements-event-trigger="" data-advertisements-lazy-type="scroll" data-advertisements-render-margin="10" data-test-advertisement="" id="ad_b4da61c4-e255-45bf-80dd-0cf74ba96c49"></aside>
					</div>
					<aside data-component="kopers-services-traffic-driver" data-kopers-services-traffic-driver="" data-kopers-services-traffic-driver-adreplacement="" hidden=""></aside>
				</div>
				<div class="object-statistics" data-vue-container="">
					<div class="fd-m-bottom-xl fd-m-bottom-2xl--bp-m">
						<h2 class="fd-m-none fd-m-bottom-xs">Activity</h2>
						<div class="fd-flex fd-text--center fd-p-vertical fd-border-light-2 fd-border-horizontal-remove">
							<div class="object-statistics__item fd-border-light-2 fd-border-vertical-remove fd-border-left-remove">
								<svg class="fd-icon fd-color-dark-3" data-testid="icon-view" height="48" viewbox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
								<path d="M23.71325,16 C28.13125,16 31.71325,19.582 31.71325,24 C31.71325,28.418 28.13125,32 23.71325,32 C19.29525,32 15.71325,28.418 15.71325,24 C15.71325,19.582 19.29525,16 23.71325,16 Z M23.71325,29 C26.47425,29 28.71325,26.761 28.71325,24 C28.71325,21.239 26.47425,19 23.71325,19 C20.95125,19 18.71325,21.239 18.71325,24 C18.71325,26.761 20.95125,29 23.71325,29 Z M23.71325,10 C12.58025,10 4.25225,18.728 1.96525,21.402 C0.67825,22.908 0.67825,25.092 1.96525,26.598 C4.25225,29.272 12.58025,38 23.71325,38 C34.84625,38 43.17325,29.272 45.46125,26.598 C46.74825,25.092 46.74825,22.908 45.46125,21.402 C43.17325,18.728 34.84625,10 23.71325,10 M23.71325,13 C33.60025,13 41.16425,20.993 43.18125,23.352 C43.50225,23.728 43.50225,24.272 43.18125,24.648 C41.16425,27.007 33.60025,35 23.71325,35 C13.82625,35 6.26225,27.007 4.24525,24.648 C3.92425,24.272 3.92425,23.728 4.24525,23.352 C6.26225,20.993 13.82625,13 23.71325,13" id="View"></path><!----> <!----> <!----> <!----></svg>
								<p class="fd-m-none"><strong>21293x</strong></p>
								<p class="fd-m-none">Viewed</p>
							</div>
							<div class="object-statistics__item fd-border-light-2 fd-border-vertical-remove fd-border-left-remove">
								<svg class="fd-icon fd-color-dark-3" data-testid="icon-heart-border" height="48" viewbox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><!---->
								<g id="Heart-outline">
									<path d="M24,44.25a1.5,1.5,0,0,1-.55-.11l-.65-.25h0a32.13,32.13,0,0,1-8-5.15,38.1,38.1,0,0,1-9.12-11A28.26,28.26,0,0,1,3.43,22a24.69,24.69,0,0,1-.87-6.49A11.76,11.76,0,0,1,20.23,5.34,12.12,12.12,0,0,1,24,8.84a12,12,0,0,1,3.77-3.5A11.77,11.77,0,0,1,45.44,15.53,24.8,24.8,0,0,1,44.57,22a27.8,27.8,0,0,1-2.26,5.71,38,38,0,0,1-9.12,11,31.83,31.83,0,0,1-8,5.15l-.66.26A1.66,1.66,0,0,1,24,44.25Zm-.11-3.16.11,0,.11,0a29.67,29.67,0,0,0,7.15-4.65,35,35,0,0,0,8.39-10.11,25.22,25.22,0,0,0,2-5.1,21.79,21.79,0,0,0,.76-5.7A8.75,8.75,0,0,0,29.28,7.94,8.93,8.93,0,0,0,26.15,11c-.09.15-.18.3-.26.46l-.51,1.16a1.5,1.5,0,0,1-1.37.91h0a1.51,1.51,0,0,1-1.38-.9l-.51-1.16c-.09-.16-.17-.31-.27-.47a8.8,8.8,0,0,0-3.14-3.1,8.63,8.63,0,0,0-4.38-1.19,8.79,8.79,0,0,0-8.77,8.78,21.67,21.67,0,0,0,.76,5.7,24.82,24.82,0,0,0,2,5.1,35,35,0,0,0,8.4,10.11,29.79,29.79,0,0,0,7.15,4.65Z"></path>
								</g><!----> <!----> <!----></svg>
								<p class="fd-m-none"><strong>149x</strong></p>
								<p class="fd-m-none">Saved</p>
							</div>
							<div class="object-statistics__item">
								<svg class="fd-icon fd-color-dark-3" data-testid="icon-calendar" height="48" viewbox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><!----> <!---->
								<g id="Calendar">
									<path d="M42,38.41V12.5h0A1.5,1.5,0,0,0,40.5,11h-7V9.5a1.5,1.5,0,0,0-3,0V11h-13V9.5a1.5,1.5,0,0,0-3,0V11h-7A1.5,1.5,0,0,0,6,12.5v26A1.5,1.5,0,0,0,7.5,40h33A1.5,1.5,0,0,0,42,38.5S42,38.44,42,38.41ZM16,17a1.5,1.5,0,0,0,1.5-1.5V14h13v1.5a1.5,1.5,0,0,0,3,0V14H39V37H9V14h5.5v1.5A1.5,1.5,0,0,0,16,17Z"></path>
									<circle cx="16" cy="23" r="2"></circle>
									<circle cx="16" cy="31" r="2"></circle>
									<circle cx="24.01" cy="23" r="2"></circle>
									<circle cx="24.01" cy="31" r="2"></circle>
									<circle cx="32" cy="23" r="2"></circle>
									<circle cx="32" cy="31" r="2"></circle>
								</g><!----> <!----></svg>
								<p class="fd-m-none"><strong>9/1/2021</strong></p>
								<p class="fd-m-none">On funda</p>
							</div>
						</div>
					</div>
					<script data-i18n="" type="application/json">
					   {
					   "Activity": "Activity",
					   "Viewed": "Viewed",
					   "Saved": "Saved",
					   "OnFunda": "On funda"
					   }
					</script>
				</div>
				<div class="object-buurt" data-gtm-vis-first-on-screen-1273266_1190="337786" data-gtm-vis-has-fired-1273266_1190="1" data-gtm-vis-total-visible-time-1273266_1190="100" data-object-buurt="">
					<h2 class="object-buurt__title">Neighborhood</h2>
					<div data-local-insights-entry-point="olst/kortrick-en-zonnekamp">
						<div data-vue-container="">
							<div>
								<div class="shadow md:shadow-none shadow-lg border border-light-2 border-solid rounded">
									<a class="flex md:inline-flex items-center p-4 relative" href="/informatie/olst/kortrick-en-zonnekamp"><img alt="Kortrick en Zonnekamp, Olst" class="h-16 w-16 rounded" src="https://marketinsightsassets.funda.nl/maps/map_olst_kortrick-en-zonnekamp_64x64@2x.jpg">
									<div class="pl-3 w-4/6 md:w-auto">
										<span class="font-bold font-emphasis block md:text-2xl truncate">Kortrick en Zonnekamp</span> <span class="text-dark-1 block truncate">Olst</span>
									</div><svg class="self-center ml-auto md:hidden" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
									<path d="M31.56 22.93L21 12.34a1.5 1.5 0 00-2.12 2.12L28.37 24l-9.54 9.54A1.5 1.5 0 0021 35.66l10.53-10.57a1.52 1.52 0 000-2.13z"></path></svg></a>
									<ul class="list-none px-4 py-1 border-t border-light-2 border-solid">
										<li class="flex py-1.5 border-b border-light-2 border-solid">
											<div class="flex-grow md:flex-grow-0 leftCardColumn text-dark-2">
												Residents
											</div>
											<div class="text-right md:text-left rightCardColumn text-dark-1">
												1,745
											</div>
										</li>
										<li class="flex py-1.5 border-b border-light-2 border-solid">
											<div class="flex-grow md:flex-grow-0 leftCardColumn text-dark-2">
												Family with children
											</div>
											<div class="text-right md:text-left rightCardColumn text-dark-1">
												41%
											</div>
										</li>
										<li class="flex py-1.5">
											<div class="flex-grow md:flex-grow-0 leftCardColumn text-dark-2">
												Avg. asking price / m²
											</div>
											<div class="text-right md:text-left rightCardColumn text-dark-1">
												€ 2,183
											</div>
										</li>
									</ul><a class="hidden md:block text-blue-2 p-4 border-t border-light-2 border-solid" href="/informatie/olst/kortrick-en-zonnekamp">More about the neighborhood <svg class="text-blue-2 -mt-0.5 inline-block" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
									<path d="M31.56 22.93L21 12.34a1.5 1.5 0 00-2.12 2.12L28.37 24l-9.54 9.54A1.5 1.5 0 0021 35.66l10.53-10.57a1.52 1.52 0 000-2.13z"></path></svg></a>
								</div>
							</div>
						</div>
						<h2 class="fd-m-top-xl fd-m-top-2xl--bp-m fd-m-bottom-none">In the neighborhood</h2>
					</div>
					<ul class="object-buurt__list">
						<li class="object-buurt__list-item">
							<a class="object-buurt__link" data-object-buurt-category-select="education-1" href="#kaart" title="Show elementary school on the map"><span class="object-buurt__icon icon-school-blue"></span> <span class="object-buurt__term">Elementary school</span> <span class="object-buurt__navigate icon-navigate-blue" data-grunticon-embed=""></span></a>
						</li>
						<li class="object-buurt__list-item">
							<a class="object-buurt__link" data-object-buurt-category-select="shopping-1" href="#kaart" title="Show supermarkets on the map"><span class="object-buurt__icon icon-supermarket-blue"></span> <span class="object-buurt__term">Supermarket</span> <span class="object-buurt__navigate icon-navigate-blue" data-grunticon-embed=""></span></a>
						</li>
						<li class="object-buurt__list-item">
							<a class="object-buurt__link" data-object-buurt-category-select="transport-2" href="#kaart" title="Show bus stops on the map"><span class="object-buurt__icon icon-bus-blue"></span> <span class="object-buurt__term">Bus stop</span> <span class="object-buurt__navigate icon-navigate-blue" data-grunticon-embed=""></span></a>
						</li>
					</ul><a class="object-buurt__expand button-tertiary" data-object-buurt-explore-locations="" href="#kaart"><span class="icon-fullscreen-blue" data-grunticon-embed=""></span>Discover locations in the neighborhood</a>
				</div>
				<section class="object-map is-interactive-map" data-object-map="object-map" data-object-map-init-type="lazy" data-test-object-map="" data-vue-container="">
					<h2 class="object-map__header a11y-sr-only">Map</h2>
					<div class="object-map__container">
						<div class="object-map-canvas" data-object-map-canvas="" style="position: relative; overflow: hidden;">
							<div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19319.7119566683!2d5.954587833545063!3d52.750884860934576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c864e4c31e9e2f%3A0x48e769caf7673b45!2sNederland%2C%20Netherlands!5e0!3m2!1sen!2sru!4v1633205169423!5m2!1sen!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
					</div>
					<div class="object-map__expand">
						<a class="object-map__expand-link button-tertiary" data-media-viewer-overlay="kaart" data-track-click="Map Clicked" href="#kaart"><span class="icon-fullscreen-blue"></span>Open larger map</a>
					</div>
				</section>
				<div class="object-my-locations places-loaded" data-object-my-locations="">
					<section class="object-my-locations-items" data-gtm-vis-first-on-screen-1273266_1190="2220" data-gtm-vis-has-fired-1273266_1190="1" data-gtm-vis-total-visible-time-1273266_1190="100" data-object-my-locations-items="">
						<h2 class="object-my-locations-title">Travel time</h2>
						<div class="object-my-locations-wrap">
							<div class="travel-time-modality-toggle" data-travel-time-modality-toggle="" data-travel-time-modality-toggle-route-endpoint="/search/personalplaces/traveltimes/" role="radiogroup">
								<input checked class="travel-time-modality-toggle__select-radio checked" data-travel-time-modality-toggle__type-control="" id="travel-time-modality-toggle__type-default" name="travel-time-modality-toggle__type-control" type="radio" value="car"> <label class="travel-time-modality-toggle__select-label" for="travel-time-modality-toggle__type-default"><span class="modality">Car</span></label> <input class="travel-time-modality-toggle__select-radio" data-travel-time-modality-toggle__type-control="" id="travel-time-modality-toggle__type-bus" name="travel-time-modality-toggle__type-control" type="radio" value="transit"> <label class="travel-time-modality-toggle__select-label" for="travel-time-modality-toggle__type-bus"><span class="modality">Transit</span></label> <input class="travel-time-modality-toggle__select-radio" data-travel-time-modality-toggle__type-control="" id="travel-time-modality-toggle__type-bike" name="travel-time-modality-toggle__type-control" type="radio" value="bike"> <label class="travel-time-modality-toggle__select-label" for="travel-time-modality-toggle__type-bike"><span class="modality">Bike</span></label> <input class="travel-time-modality-toggle__select-radio" data-travel-time-modality-toggle__type-control="" id="travel-time-modality-toggle__type-walk" name="travel-time-modality-toggle__type-control" type="radio" value="walk"> <label class="travel-time-modality-toggle__select-label" for="travel-time-modality-toggle__type-walk"><span class="modality">Walk</span></label>
							</div>
						</div>
						<div class="object-my-locations__welcome">
							<div class="welcome-image"></div>
							<p class="welcome">See how long it takes you to travel from this house to for example your work or family.</p>
						</div>
						<ul class="object-my-locations__list" data-object-my-locations-list=""></ul>
						<div class="object-my-locations__add">
							<a class="object-my-locations__add-button button-tertiary" data-entry-point="add-location" data-media-viewer-overlay="kaart/bewaren" href="#kaart/bewaren"><span class="icon-plus-blue" data-grunticon-embed=""></span>Add Location</a>
						</div>
					</section>
				</div>
				<section class="related-objects is-enhanced" data-gtm-vis-first-on-screen-1273266_1190="1752" data-gtm-vis-has-fired-1273266_1190="1" data-gtm-vis-total-visible-time-1273266_1190="100" data-related-objects="" data-related-objects-json="/en/relatedobjects/koop/42427849/" data-related-objects-set="1">
					<h2 class="related-objects__title">Similar in the vicinity</h2>
					<script data-related-objects-button-element="" type="template/html">
					       <button class="related-objects__toggle-button" data-related-objects-toggle-button>...</button>
					</script> <span class="related-objects__toggle" data-related-objects-toggle=""><button class="related-objects__toggle-button" data-related-objects-toggle-button="1" disabled><span class="related-objects__toggle" data-related-objects-toggle="">For sale</span><button class="related-objects__toggle-button" data-related-objects-toggle-button="2">Sold</button></button></span>
					<div class="carousel" data-related-objects-carousel="">
						<button class="carousel-next-button slick-arrow" data-carousel-next="" style=""><span class="icon-arrow-right-blue" data-grunticon-embed=""></span><span class="a11y-sr-only">Next</span></button>
						<div class="carousel-list slick-initialized slick-slider is-enhanced" data-carousel-list="">
							<div aria-live="polite" class="slick-list draggable">
								<div class="slick-track" role="listbox" style="opacity: 1; width: 4032px; transform: translate3d(-1008px, 0px, 0px);">
									<a aria-describedby="slick-slide03" aria-hidden="true" aria-labelledby="related-object-3-title related-object-3-city" class="related-objects__item slick-slide slick-cloned" data-object-url-tracking="indebuurt" data-slick-index="-3" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6014276,&quot;placement&quot;:&quot;listing_vicinity&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.funda.nl/en/koop/diepenveen/huis-42469639-dorpsstraat-39-b/?navigateSource=indebuurt" id="" role="option" style="width: 312px;" tabindex="-1"><img alt="" sizes="(min-width: 1020px) 312px, (min-width: 760px) 36vw, 83vw" src="https://cloud.funda.nl/valentina_media/145/107/536_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/145/107/536_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/145/107/536_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/145/107/536_720x480.jpg 720w, https://cloud.funda.nl/valentina_media/145/107/536_1080x720.jpg 1080w, https://cloud.funda.nl/valentina_media/145/107/536_1440x960.jpg 1440w, https://cloud.funda.nl/valentina_media/145/107/536_2160x1440.jpg 2160w">
									<h4 class="related-objects__item-title" id="">Dorpsstraat 39 b</h4><span class="related-objects__item-info--city" id="">7431 CH Diepenveen</span> <span class="related-objects__item-price--primary">Sale by tender</span>
									<ul class="fd-list--none fd-flex fd-p-none fd-color-white fd-text-size-s fd-text--emphasis fd-m-bottom-xs">
										<li class="label-transactie-voorbehoud fd-p-horizontal-xs fd-border-radius fd-m-right-2xs">Sold under reservation</li>
									</ul></a> <a aria-describedby="slick-slide04" aria-hidden="true" aria-labelledby="related-object-4-title related-object-4-city" class="related-objects__item slick-slide slick-cloned" data-object-url-tracking="indebuurt" data-slick-index="-2" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6056659,&quot;placement&quot;:&quot;listing_vicinity&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.funda.nl/en/koop/wijhe/huis-42401012-dolskamp-19/?navigateSource=indebuurt" id="" role="option" style="width: 312px;" tabindex="-1"><img alt="" sizes="(min-width: 1020px) 312px, (min-width: 760px) 36vw, 83vw" src="https://cloud.funda.nl/valentina_media/146/559/043_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/146/559/043_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/146/559/043_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/146/559/043_720x480.jpg 720w, https://cloud.funda.nl/valentina_media/146/559/043_1080x720.jpg 1080w, https://cloud.funda.nl/valentina_media/146/559/043_1440x960.jpg 1440w, https://cloud.funda.nl/valentina_media/146/559/043_2160x1440.jpg 2160w">
									<h4 class="related-objects__item-title" id="">Dolskamp 19</h4><span class="related-objects__item-info--city" id="">8131 NS Wijhe</span> <span class="related-objects__item-price--primary">€ 489,000 k.k.</span>
									<ul class="fd-list--none fd-flex fd-p-none fd-color-white fd-text-size-s fd-text--emphasis fd-m-bottom-xs">
										<li class="label-transactie-voorbehoud fd-p-horizontal-xs fd-border-radius fd-m-right-2xs">Sold under reservation</li>
									</ul></a> <a aria-describedby="slick-slide05" aria-hidden="true" aria-labelledby="related-object-5-title related-object-5-city" class="related-objects__item slick-slide slick-cloned" data-object-url-tracking="indebuurt" data-slick-index="-1" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6068800,&quot;placement&quot;:&quot;listing_vicinity&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.funda.nl/en/koop/wijhe/huis-42413263-molenbelt-14/?navigateSource=indebuurt" id="" role="option" style="width: 312px;" tabindex="-1"><img alt="" sizes="(min-width: 1020px) 312px, (min-width: 760px) 36vw, 83vw" src="https://cloud.funda.nl/valentina_media/147/359/700_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/147/359/700_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/147/359/700_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/147/359/700_720x480.jpg 720w, https://cloud.funda.nl/valentina_media/147/359/700_1080x720.jpg 1080w, https://cloud.funda.nl/valentina_media/147/359/700_1440x960.jpg 1440w, https://cloud.funda.nl/valentina_media/147/359/700_2160x1440.jpg 2160w">
									<h4 class="related-objects__item-title" id="">Molenbelt 14</h4><span class="related-objects__item-info--city" id="">8131 BG Wijhe</span> <span class="related-objects__item-price--primary">€ 498,000 k.k.</span></a> <a aria-describedby="slick-slide00" aria-hidden="false" aria-labelledby="related-object-0-title related-object-0-city" class="related-objects__item slick-slide slick-current slick-active" data-object-url-tracking="indebuurt" data-slick-index="0" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6069721,&quot;placement&quot;:&quot;listing_vicinity&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.funda.nl/en/koop/olst/huis-42414184-hannie-schaftlaan-4/?navigateSource=indebuurt" role="option" style="width: 312px;" tabindex="-1"><img alt="" sizes="(min-width: 1020px) 312px, (min-width: 760px) 36vw, 83vw" src="https://cloud.funda.nl/valentina_media/147/419/391_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/147/419/391_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/147/419/391_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/147/419/391_720x480.jpg 720w, https://cloud.funda.nl/valentina_media/147/419/391_1080x720.jpg 1080w, https://cloud.funda.nl/valentina_media/147/419/391_1440x960.jpg 1440w, https://cloud.funda.nl/valentina_media/147/419/391_2160x1440.jpg 2160w">
									<h4 class="related-objects__item-title" id="related-object-0-title">Hannie Schaftlaan 4</h4><span class="related-objects__item-info--city" id="related-object-0-city">8121 KE Olst</span> <span class="related-objects__item-price--primary">€ 485,000 k.k.</span>
									<ul class="fd-list--none fd-flex fd-p-none fd-color-white fd-text-size-s fd-text--emphasis fd-m-bottom-xs">
										<li class="label-transactie-voorbehoud fd-p-horizontal-xs fd-border-radius fd-m-right-2xs">Sold under reservation</li>
									</ul></a> <a aria-describedby="slick-slide01" aria-hidden="false" aria-labelledby="related-object-1-title related-object-1-city" class="related-objects__item slick-slide slick-active" data-object-url-tracking="indebuurt" data-slick-index="1" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6050319,&quot;placement&quot;:&quot;listing_vicinity&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.funda.nl/en/koop/welsum/huis-42405772-kerklaan-38/?navigateSource=indebuurt" role="option" style="width: 312px;" tabindex="-1"><img alt="" sizes="(min-width: 1020px) 312px, (min-width: 760px) 36vw, 83vw" src="https://cloud.funda.nl/valentina_media/146/335/263_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/146/335/263_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/146/335/263_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/146/335/263_720x480.jpg 720w, https://cloud.funda.nl/valentina_media/146/335/263_1080x720.jpg 1080w, https://cloud.funda.nl/valentina_media/146/335/263_1440x960.jpg 1440w, https://cloud.funda.nl/valentina_media/146/335/263_2160x1440.jpg 2160w">
									<h4 class="related-objects__item-title" id="related-object-1-title">Kerklaan 38</h4><span class="related-objects__item-info--city" id="related-object-1-city">8196 KW Welsum</span> <span class="related-objects__item-price--primary">€ 495,000 k.k.</span></a> <a aria-describedby="slick-slide02" aria-hidden="false" aria-labelledby="related-object-2-title related-object-2-city" class="related-objects__item slick-slide slick-active" data-object-url-tracking="indebuurt" data-slick-index="2" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6076205,&quot;placement&quot;:&quot;listing_vicinity&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.funda.nl/en/koop/welsum/huis-42421668-vrijstaande-woning-bouwnr-1/?navigateSource=indebuurt" role="option" style="width: 312px;" tabindex="-1"><img alt="" sizes="(min-width: 1020px) 312px, (min-width: 760px) 36vw, 83vw" src="https://cloud.funda.nl/valentina_media/148/210/848_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/148/210/848_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/148/210/848_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/148/210/848_720x480.jpg 720w, https://cloud.funda.nl/valentina_media/148/210/848_1080x720.jpg 1080w, https://cloud.funda.nl/valentina_media/148/210/848_1440x960.jpg 1440w, https://cloud.funda.nl/valentina_media/148/210/848_2160x1440.jpg 2160w">
									<h4 class="related-objects__item-title" id="related-object-2-title">IJsseldijk Welsum</h4><span class="related-objects__item-price--primary">€ 568,200 v.o.n.</span>
									<ul class="fd-list--none fd-flex fd-p-none fd-color-white fd-text-size-s fd-text--emphasis fd-m-bottom-xs">
										<li class="label-transactie-voorbehoud fd-p-horizontal-xs fd-border-radius fd-m-right-2xs">Under option</li>
									</ul></a> <a aria-describedby="slick-slide03" aria-hidden="true" aria-labelledby="related-object-3-title related-object-3-city" class="related-objects__item slick-slide" data-object-url-tracking="indebuurt" data-slick-index="3" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6014276,&quot;placement&quot;:&quot;listing_vicinity&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.funda.nl/en/koop/diepenveen/huis-42469639-dorpsstraat-39-b/?navigateSource=indebuurt" role="option" style="width: 312px;" tabindex="-1"><img alt="" sizes="(min-width: 1020px) 312px, (min-width: 760px) 36vw, 83vw" src="https://cloud.funda.nl/valentina_media/145/107/536_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/145/107/536_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/145/107/536_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/145/107/536_720x480.jpg 720w, https://cloud.funda.nl/valentina_media/145/107/536_1080x720.jpg 1080w, https://cloud.funda.nl/valentina_media/145/107/536_1440x960.jpg 1440w, https://cloud.funda.nl/valentina_media/145/107/536_2160x1440.jpg 2160w">
									<h4 class="related-objects__item-title" id="related-object-3-title">Dorpsstraat 39 b</h4><span class="related-objects__item-info--city" id="related-object-3-city">7431 CH Diepenveen</span> <span class="related-objects__item-price--primary">Sale by tender</span>
									<ul class="fd-list--none fd-flex fd-p-none fd-color-white fd-text-size-s fd-text--emphasis fd-m-bottom-xs">
										<li class="label-transactie-voorbehoud fd-p-horizontal-xs fd-border-radius fd-m-right-2xs">Sold under reservation</li>
									</ul></a> <a aria-describedby="slick-slide04" aria-hidden="true" aria-labelledby="related-object-4-title related-object-4-city" class="related-objects__item slick-slide" data-object-url-tracking="indebuurt" data-slick-index="4" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6056659,&quot;placement&quot;:&quot;listing_vicinity&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.funda.nl/en/koop/wijhe/huis-42401012-dolskamp-19/?navigateSource=indebuurt" role="option" style="width: 312px;" tabindex="-1"><img alt="" sizes="(min-width: 1020px) 312px, (min-width: 760px) 36vw, 83vw" src="https://cloud.funda.nl/valentina_media/146/559/043_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/146/559/043_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/146/559/043_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/146/559/043_720x480.jpg 720w, https://cloud.funda.nl/valentina_media/146/559/043_1080x720.jpg 1080w, https://cloud.funda.nl/valentina_media/146/559/043_1440x960.jpg 1440w, https://cloud.funda.nl/valentina_media/146/559/043_2160x1440.jpg 2160w">
									<h4 class="related-objects__item-title" id="related-object-4-title">Dolskamp 19</h4><span class="related-objects__item-info--city" id="related-object-4-city">8131 NS Wijhe</span> <span class="related-objects__item-price--primary">€ 489,000 k.k.</span>
									<ul class="fd-list--none fd-flex fd-p-none fd-color-white fd-text-size-s fd-text--emphasis fd-m-bottom-xs">
										<li class="label-transactie-voorbehoud fd-p-horizontal-xs fd-border-radius fd-m-right-2xs">Sold under reservation</li>
									</ul></a> <a aria-describedby="slick-slide05" aria-hidden="true" aria-labelledby="related-object-5-title related-object-5-city" class="related-objects__item slick-slide" data-object-url-tracking="indebuurt" data-slick-index="5" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6068800,&quot;placement&quot;:&quot;listing_vicinity&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.funda.nl/en/koop/wijhe/huis-42413263-molenbelt-14/?navigateSource=indebuurt" role="option" style="width: 312px;" tabindex="-1"><img alt="" sizes="(min-width: 1020px) 312px, (min-width: 760px) 36vw, 83vw" src="https://cloud.funda.nl/valentina_media/147/359/700_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/147/359/700_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/147/359/700_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/147/359/700_720x480.jpg 720w, https://cloud.funda.nl/valentina_media/147/359/700_1080x720.jpg 1080w, https://cloud.funda.nl/valentina_media/147/359/700_1440x960.jpg 1440w, https://cloud.funda.nl/valentina_media/147/359/700_2160x1440.jpg 2160w">
									<h4 class="related-objects__item-title" id="related-object-5-title">Molenbelt 14</h4><span class="related-objects__item-info--city" id="related-object-5-city">8131 BG Wijhe</span> <span class="related-objects__item-price--primary">€ 498,000 k.k.</span></a> <a aria-describedby="slick-slide00" aria-hidden="true" aria-labelledby="related-object-0-title related-object-0-city" class="related-objects__item slick-slide slick-cloned" data-object-url-tracking="indebuurt" data-slick-index="6" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6069721,&quot;placement&quot;:&quot;listing_vicinity&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.funda.nl/en/koop/olst/huis-42414184-hannie-schaftlaan-4/?navigateSource=indebuurt" id="" role="option" style="width: 312px;" tabindex="-1"><img alt="" sizes="(min-width: 1020px) 312px, (min-width: 760px) 36vw, 83vw" src="https://cloud.funda.nl/valentina_media/147/419/391_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/147/419/391_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/147/419/391_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/147/419/391_720x480.jpg 720w, https://cloud.funda.nl/valentina_media/147/419/391_1080x720.jpg 1080w, https://cloud.funda.nl/valentina_media/147/419/391_1440x960.jpg 1440w, https://cloud.funda.nl/valentina_media/147/419/391_2160x1440.jpg 2160w">
									<h4 class="related-objects__item-title" id="">Hannie Schaftlaan 4</h4><span class="related-objects__item-info--city" id="">8121 KE Olst</span> <span class="related-objects__item-price--primary">€ 485,000 k.k.</span>
									<ul class="fd-list--none fd-flex fd-p-none fd-color-white fd-text-size-s fd-text--emphasis fd-m-bottom-xs">
										<li class="label-transactie-voorbehoud fd-p-horizontal-xs fd-border-radius fd-m-right-2xs">Sold under reservation</li>
									</ul></a> <a aria-describedby="slick-slide01" aria-hidden="true" aria-labelledby="related-object-1-title related-object-1-city" class="related-objects__item slick-slide slick-cloned" data-object-url-tracking="indebuurt" data-slick-index="7" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6050319,&quot;placement&quot;:&quot;listing_vicinity&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.funda.nl/en/koop/welsum/huis-42405772-kerklaan-38/?navigateSource=indebuurt" id="" role="option" style="width: 312px;" tabindex="-1"><img alt="" sizes="(min-width: 1020px) 312px, (min-width: 760px) 36vw, 83vw" src="https://cloud.funda.nl/valentina_media/146/335/263_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/146/335/263_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/146/335/263_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/146/335/263_720x480.jpg 720w, https://cloud.funda.nl/valentina_media/146/335/263_1080x720.jpg 1080w, https://cloud.funda.nl/valentina_media/146/335/263_1440x960.jpg 1440w, https://cloud.funda.nl/valentina_media/146/335/263_2160x1440.jpg 2160w">
									<h4 class="related-objects__item-title" id="">Kerklaan 38</h4><span class="related-objects__item-info--city" id="">8196 KW Welsum</span> <span class="related-objects__item-price--primary">€ 495,000 k.k.</span></a> <a aria-describedby="slick-slide02" aria-hidden="true" aria-labelledby="related-object-2-title related-object-2-city" class="related-objects__item slick-slide slick-cloned" data-object-url-tracking="indebuurt" data-slick-index="8" data-track-click="Featured Listing Clicked" data-track-exclude-page-properties="" data-track-props="{&quot;global_id&quot;:6076205,&quot;placement&quot;:&quot;listing_vicinity&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.funda.nl/en/koop/welsum/huis-42421668-vrijstaande-woning-bouwnr-1/?navigateSource=indebuurt" id="" role="option" style="width: 312px;" tabindex="-1"><img alt="" sizes="(min-width: 1020px) 312px, (min-width: 760px) 36vw, 83vw" src="https://cloud.funda.nl/valentina_media/148/210/848_360x240.jpg" srcset="https://cloud.funda.nl/valentina_media/148/210/848_360x240.jpg 360w, https://cloud.funda.nl/valentina_media/148/210/848_180x120.jpg 180w, https://cloud.funda.nl/valentina_media/148/210/848_720x480.jpg 720w, https://cloud.funda.nl/valentina_media/148/210/848_1080x720.jpg 1080w, https://cloud.funda.nl/valentina_media/148/210/848_1440x960.jpg 1440w, https://cloud.funda.nl/valentina_media/148/210/848_2160x1440.jpg 2160w">
									<h4 class="related-objects__item-title" id="">IJsseldijk Welsum</h4><span class="related-objects__item-price--primary">€ 568,200 v.o.n.</span>
									<ul class="fd-list--none fd-flex fd-p-none fd-color-white fd-text-size-s fd-text--emphasis fd-m-bottom-xs">
										<li class="label-transactie-voorbehoud fd-p-horizontal-xs fd-border-radius fd-m-right-2xs">Under option</li>
									</ul></a>
								</div>
							</div>
						</div>
					</div><a class="button-tertiary related-objects__more-link" href="/en/koop/olst/"><span class="icon-arrow-right-blue" data-grunticon-embed=""></span>More houses in Olst</a>
				</section>
				<section class="object-actions" data-gtm-vis-first-on-screen-1273266_1190="1601" data-gtm-vis-has-fired-1273266_1190="1" data-gtm-vis-total-visible-time-1273266_1190="100" data-object-actions="">
					<ul class="object-actions__content">
						<li class="object-actions__item">
							<div class="user-save-object is-saved" data-controller-uid="8" data-is-user-logged-in="true" data-listing-tracking-properties="{&quot;global_id&quot;:6072486,&quot;listing_offering_type&quot;:&quot;koop&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" data-save-object="" data-save-object-tinyid="42427849">
								<button class="user-save-object__handle user-save-object__handle--add fd-p-none fd-m-none object-actions__item object-actions__link" data-save-object-add-url="/en/mijn/objectactions/saveobject/?internalId=7b47c00b-9712-43e7-8614-0baf4f28a17c&amp;tinyId=42427849&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing&amp;trackingNavigationTrigger=listing_footer" data-save-object-handle="add"><span class="user-save-object__handle-icon icon-heart-blue" data-grunticon-embed=""></span> <span class="user-save-object__handle-label" data-test-save-object="">Save</span></button> <button class="user-save-object__handle user-save-object__handle--remove fd-p-none fd-m-none object-actions__item object-actions__link" data-save-object-handle="remove" data-save-object-remove-url="/en/mijn/objectactions/removesavedobject/?internalId=7b47c00b-9712-43e7-8614-0baf4f28a17c&amp;tinyId=42427849&amp;trackingListingOfferingType=koop&amp;trackingSiteSection=listings&amp;trackingPageType=listing&amp;trackingNavigationTrigger=listing_footer"><span class="user-save-object__handle-icon icon-heart-filled-red" data-grunticon-embed=""></span> <span class="user-save-object__handle-label" data-test-saved-object="">Saved</span></button>
							</div>
						</li>
						<li class="object-actions__item">
							<div class="object-share-menu">
								<button aria-expanded="false" class="object-share-menu__dropdown-handle button-tertiary" data-expandible-handle="object-share-menu-dropdown-e528a181-5912-4bb9-b2e6-6bbd6a91a407"><span class="object-share-menu__dropdown-handle-icon icon-share-blue" data-grunticon-embed=""></span> Share<span class="object-share-menu__dropdown-handle-icon-arrow icon-arrow-down-blue" data-grunticon-embed=""></span></button>
								<ul aria-expanded="false" class="object-share-menu__dropdown-list expandible push-content is-expandible" data-controller-uid="1" data-expandible="object-share-menu-dropdown-e528a181-5912-4bb9-b2e6-6bbd6a91a407" data-expandible-on-blur="close" data-object-share-menu="">
									<li class="object-share-menu__dropdown-item">
										<a class="object-share-menu__dropdown-link share-link-mail" data-social-platform-url="" data-track-click="Listing Shared" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_footer&quot;,&quot;target_app&quot;:&quot;email&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="/en/koop/olst/huis-42427849-jan-schamhartstraat-78/doorsturen/" target="_blank" title="Share via email"><span class="icon icon-mail-blue" data-grunticon-embed=""></span>E-mail</a>
									</li>
									<li class="object-share-menu__dropdown-item">
										<a class="object-share-menu__dropdown-link share-link-facebook" data-social-platform-url="" data-track-click="Listing Shared" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_footer&quot;,&quot;target_app&quot;:&quot;facebook&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.facebook.com/sharer/sharer.php?u=https%3a%2f%2fwww.funda.nl%2fen%2fkoop%2folst%2fhuis-42427849-jan-schamhartstraat-78%2f" target="_blank" title="Share on Facebook"><span class="icon icon-facebook-blue" data-grunticon-embed=""></span>Facebook</a>
									</li>
									<li class="object-share-menu__dropdown-item">
										<a class="object-share-menu__dropdown-link share-link-whatsapp" data-social-platform-url="" data-track-click="Listing Shared" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_footer&quot;,&quot;target_app&quot;:&quot;whatsapp&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://api.whatsapp.com/send?phone=&amp;text=https%3a%2f%2fwww.funda.nl%2fen%2fkoop%2folst%2fhuis-42427849-jan-schamhartstraat-78%2f" target="_blank" title="Share via WhatsApp"><span class="icon icon-whatsapp-blue" data-grunticon-embed=""></span>WhatsApp</a>
									</li>
									<li class="object-share-menu__dropdown-item">
										<a class="object-share-menu__dropdown-link share-link-twitter" data-social-platform-url="" data-track-click="Listing Shared" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_footer&quot;,&quot;target_app&quot;:&quot;twitter&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://www.twitter.com/intent/tweet?text=Home+found+in+Olst+via+%23funda+https%3a%2f%2fwww.funda.nl%2fen%2fkoop%2folst%2fhuis-42427849-jan-schamhartstraat-78%2f" target="_blank" title="Share on Twitter"><span class="icon icon-twitter-blue" data-grunticon-embed=""></span>Twitter</a>
									</li>
									<li class="object-share-menu__dropdown-item">
										<a class="object-share-menu__dropdown-link share-link-pinterest" data-social-platform-url="" data-track-click="Listing Shared" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_footer&quot;,&quot;target_app&quot;:&quot;pinterest&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="https://pinterest.com/pin/create/button/?url=https%3a%2f%2fwww.funda.nl%2fen%2fkoop%2folst%2fhuis-42427849-jan-schamhartstraat-78%2f&amp;media=https://cloud.funda.nl/valentina_media/148/028/509_1440.jpg&amp;description=home+found+in+Olst+via+funda+https%3a%2f%2fwww.funda.nl%2fen%2fkoop%2folst%2fhuis-42427849-jan-schamhartstraat-78%2f" target="_blank" title="Share on Pinterest"><span class="icon icon-pinterest-blue" data-grunticon-embed=""></span>Pinterest</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="object-actions__item">
							<a class="object-actions__link object-actions__link--printer" href="/en/koop/olst/huis-42427849-jan-schamhartstraat-78/print/"><span class="icon icon-printer-blue" data-grunticon-embed=""></span>Print page</a>
						</li>
						<li class="object-actions__item">
							<a class="object-actions__link object-actions__link--for-sale" href="/en/mijn/huis-instellen/6072486/"><span class="icon icon-for-sale-blue" data-grunticon-embed=""></span>I'm selling this house</a>
						</li>
						<li class="object-actions__item object-actions__item--mobile">
							<a class="object-actions__link object-actions__link--warning" href="/en/koop/olst/huis-42427849-jan-schamhartstraat-78/meld-een-fout/"><span class="icon icon-warning-blue" data-grunticon-embed=""></span>Report an error about this house</a>
						</li>
					</ul>
				</section>
				<div class="fixed inset-0 bg-white overflow-hidden z-50 lg:flex lg:hidden" data-media-viewer>
					<div class="flex flex-col h-full lg:flex-1 lg:min-w-0">
						<header class="media-viewer__header py-1 text-right" data-vue-container="">
							<button class="mr-1 p-0 bg-transparent leading-6 inline-flex h-11 whitespace-no-wrap border-solid rounded-sm align-middle cursor-pointer text-center items-center justify-center focus:outline-none text-blue-2 hover:text-blue-1" data-media-viewer-fullscreen=""><span class="sr-only">Fullscreen</span> <svg class="h-11 w-11 text-dark-3" data-fullscreen-open="" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M42 7.5a1.49 1.49 0 00-.11-.5 1.5 1.5 0 00-.82-.82A1.49 1.49 0 0040.5 6h-9a1.5 1.5 0 000 3h5.38L26.44 19.44a1.5 1.5 0 002.12 2.12L39 11.12v5.38a1.5 1.5 0 003 0v-9zM19.44 26.44L9 36.88V31.5A1.5 1.5 0 007.5 30 1.5 1.5 0 006 31.5v9a1.49 1.49 0 00.11.56 1.48 1.48 0 00.82.82 1.49 1.49 0 00.57.12h9a1.5 1.5 0 000-3h-5.38l10.44-10.44a1.5 1.5 0 00-2.12-2.12z"></path></svg> <svg class="h-11 w-11 text-dark-3 hidden" data-fullscreen-exit="" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M41.56 6.44a1.5 1.5 0 00-2.12 0L29 16.88V11.5a1.5 1.5 0 00-3 0v9a1.49 1.49 0 00.11.56 1.5 1.5 0 00.82.82 1.49 1.49 0 00.55.11h9a1.5 1.5 0 000-3h-5.36L41.56 8.56a1.5 1.5 0 000-2.12zM22 27.5a1.49 1.49 0 00-.11-.55 1.5 1.5 0 00-.8-.81 1.49 1.49 0 00-.59-.14h-9a1.5 1.5 0 000 3h5.38L6.44 39.44a1.5 1.5 0 002.12 2.12L19 31.12v5.38a1.5 1.5 0 001.5 1.5 1.5 1.5 0 001.5-1.5v-9z"></path></svg></button> <button class="mr-1 p-0 bg-transparent leading-6 inline-flex h-11 whitespace-no-wrap border-solid rounded-sm align-middle cursor-pointer text-center items-center justify-center focus:outline-none text-blue-2 hover:text-blue-1" data-media-viewer-close=""><span class="sr-only">Close</span> <svg class="h-11 w-11 text-dark-3" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M26.12 24l10.61-10.61a1.5 1.5 0 000-2.12 1.5 1.5 0 00-2.12 0L24 21.88 13.39 11.27a1.5 1.5 0 10-2.12 2.12L21.88 24 11.27 34.61a1.5 1.5 0 102.12 2.12L24 26.12l10.61 10.61a1.5 1.5 0 002.12 0 1.5 1.5 0 000-2.12z"></path></svg></button>
						</header>
						<section class="media-viewer-fotos flex-grow flex flex-col lg:hidden" data-media-viewer-fotos="" data-vue-container="">
							<div class="media-viewer-fotos__container relative flex-grow overflow-hidden md:pt-24 lg:pt-0">
								<div class="media-viewer-fotos__slides absolute inset-0">
							     	<img src="{{asset('data/photo/1.jpg')}}" class="absolute inset-0 h-full w-full object-contain m-auto">
							     	<img src="{{asset('data/photo/2.jpg')}}" class="absolute inset-0 h-full w-full object-contain m-auto">
							     	<img src="{{asset('data/photo/3.jpg')}}" class="absolute inset-0 h-full w-full object-contain m-auto">
							     	<img src="{{asset('data/photo/4.jpg')}}" class="absolute inset-0 h-full w-full object-contain m-auto">
							     	<img src="{{asset('data/photo/5.jpg')}}" class="absolute inset-0 h-full w-full object-contain m-auto">
							     	<img src="{{asset('data/photo/6.jpg')}}" class="absolute inset-0 h-full w-full object-contain m-auto">
							     	<img src="{{asset('data/photo/7.jpg')}}" class="absolute inset-0 h-full w-full object-contain m-auto">
							     	<img src="{{asset('data/photo/8.jpg')}}" class="absolute inset-0 h-full w-full object-contain m-auto">
							     	<img src="{{asset('data/photo/9.jpg')}}" class="absolute inset-0 h-full w-full object-contain m-auto">
							     	<img src="{{asset('data/photo/10.jpg')}}" class="absolute inset-0 h-full w-full object-contain m-auto">
								</div>
							</div>
							<div class="media-viewer__footer flex justify-between items-center px-4 py-1 mt-auto">
								<span class="mr-1" data-media-viewer-current="">1</span>/<span class="ml-1" data-media-viewer-total="">46</span> <a class="ml-auto leading-6 inline-flex h-11 whitespace-no-wrap border-solid rounded-sm align-middle cursor-pointer text-center items-center justify-center focus:outline-none text-blue-2 hover:text-blue-1" data-media-viewer-overlay-switch="overzicht" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_viewer&quot;,&quot;media_type&quot;:&quot;all_media&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="#overzicht"><svg class="mr-2" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.5 26h-15A1.5 1.5 0 004 27.48v13A1.5 1.5 0 005.5 42h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.5zM7 29h12v10H7zM42.5 26h-15a1.5 1.5 0 00-1.5 1.5v13a1.5 1.5 0 001.5 1.5h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.5zM29 29h12v10H29zM20.5 5.93h-15A1.5 1.5 0 004 7.44v13A1.5 1.5 0 005.5 22h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.57zM7 8.94h12V19H7zM42.5 6h-15A1.5 1.5 0 0026 7.47v13A1.5 1.5 0 0027.5 22h15a1.5 1.5 0 001.5-1.5v-13A1.5 1.5 0 0042.5 6zM29 9h12v10H29z"></path></svg> <span class="media-viewer__all-media-text">All media</span></a>
							</div>
						</section>
						<section class="media-viewer-plattegrond flex-grow flex flex-col lg:hidden" data-media-viewer-plattegrond="">
							<header class="mr-32 -mt-14 pt-1">
								<div class="media-viewer-view-plattegrond" data-media-viewer-view-plattegrond="">
									<div class="plattegrond-view-select">
										<input checked class="view-select-radio" data-view-select="" id="plattegrond-2d" name="plattegrond-view-select" type="radio" value="2d"> <label class="view-select-label view-2d" for="plattegrond-2d">2D</label> <input class="view-select-radio" data-view-select="" id="plattegrond-3d" name="plattegrond-view-select" type="radio" value="3d"> <label class="view-select-label view-3d" for="plattegrond-3d">3D</label>
									</div>
								</div>
							</header>
							<div class="relative flex-grow overflow-hidden">
								<div class="media-viewer-plattegrond-container" data-plattegrond-src="">
									<div class="media-viewer-plattegrond-view" data-plattegrond-3d-view=""></div>
									<div class="media-viewer-plattegrond-view" data-plattegrond-2d-view=""></div>
								</div>
								<div class="media-viewer-plattegrond-zoom-controls">
									<button class="media-viewer-plattegrond-zoom-controls__button media-viewer-plattegrond-zoom-controls__button--plus" data-plattegrond-zoom-in=""><span class="media-viewer-plattegrond-zoom-controls__button-icon icon-plus-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Zoom in</span></button> <button class="media-viewer-plattegrond-zoom-controls__button media-viewer-plattegrond-zoom-controls__button--minus" data-plattegrond-zoom-out=""><span class="media-viewer-plattegrond-zoom-controls__button-icon icon-minus-blue" data-grunticon-embed=""></span> <span class="a11y-sr-only">Zoom out</span></button>
								</div>
								<div class="media-viewer-plattegrond-disclaimer">
									<div aria-expanded="false" class="tooltip is-expandible" data-controller-uid="2" data-expandible="" data-expandible-on-blur="close" data-title="Funda and the real estate agent cannot guarantee the accuracy and completeness of the floor plan and can accept no liability whatsoever in this regard" data-tooltip="" title="">
										<span data-expandible-handle="">Disclaimer</span>
									</div>
								</div>
							</div>
							<div class="media-viewer__footer flex justify-between items-center px-4 py-1 mt-auto" data-vue-container="">
								<div class="hidden" data-plattegrond-menu-footer="">
									<div class="dropdown-group dropup">
										<button class="dropdown-toggle" data-menu-toggle=""><span class="dropdown-toggle-title" data-dropup-title=""></span> <span class="icon-arrow-down-blue"></span></button>
										<ul class="dropdown-menu" data-menu-items=""></ul>
									</div>
								</div><a class="ml-auto whitespace-nowrap leading-6 inline-flex h-11 whitespace-no-wrap border-solid rounded-sm align-middle cursor-pointer text-center items-center justify-center focus:outline-none text-blue-2 hover:text-blue-1" data-media-viewer-overlay-switch="overzicht" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_viewer&quot;,&quot;media_type&quot;:&quot;all_media&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="#overzicht"><svg class="mr-2" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.5 26h-15A1.5 1.5 0 004 27.48v13A1.5 1.5 0 005.5 42h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.5zM7 29h12v10H7zM42.5 26h-15a1.5 1.5 0 00-1.5 1.5v13a1.5 1.5 0 001.5 1.5h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.5zM29 29h12v10H29zM20.5 5.93h-15A1.5 1.5 0 004 7.44v13A1.5 1.5 0 005.5 22h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.57zM7 8.94h12V19H7zM42.5 6h-15A1.5 1.5 0 0026 7.47v13A1.5 1.5 0 0027.5 22h15a1.5 1.5 0 001.5-1.5v-13A1.5 1.5 0 0042.5 6zM29 9h12v10H29z"></path></svg><span class="media-viewer__all-media-text">All media</span></a>
							</div>
						</section>
						<section class="media-viewer-foto360 flex-grow flex flex-col lg:hidden" data-media-viewer-auto-initialize="false" data-media-viewer-foto360="">
							<header class="hidden xl:block mx-32 -mt-14 pt-1">
								<div class="vr-view-select">
									<button class="vr-view-select-button" data-vr-view-select="" name="vr-view-select" value="vr"><span class="icon icon-vr-blue" data-grunticon-embed=""></span>Virtual reality</button>
								</div>
								<div class="media-viewer-view-header-menu" data-foto360-menu-header="">
									<ul class="fd-flex-inline flat-list" data-menu-items="">
										<li><button class="menu-item-text active" data-menu-item-param="foto1" data-view-type="foto360" type="button">foto1</button></li>
										<li><button class="menu-item-text" data-menu-item-param="foto2" data-view-type="foto360" type="button">foto2</button></li>
										<li><button class="menu-item-text" data-menu-item-param="foto3" data-view-type="foto360" type="button">foto3</button></li>
										<li><button class="menu-item-text" data-menu-item-param="foto4" data-view-type="foto360" type="button">foto4</button></li>
									</ul>
								</div>
							</header>
							<div class="relative flex-grow overflow-hidden">
								<div class="media-viewer-foto360-container">
									<div id="pano" style="width: 100%;height: 100%;">
										
									</div>
								</div>
							</div>
							<div class="media-viewer__footer flex justify-between items-center px-4 py-1 mt-auto" data-vue-container="">
								<div data-foto360-menu-footer="">
									<div class="dropdown-group dropup">
										<button class="dropdown-toggle" data-menu-toggle=""><span class="dropdown-toggle-title" data-dropup-title="">foto1</span> <span class="icon-arrow-down-blue"></span></button>
										<ul class="dropdown-menu" data-menu-items="">
											<li><button class="menu-item-text active" data-menu-item-param="foto1" data-view-type="foto360" type="button">foto1</button></li>
											<li><button class="menu-item-text" data-menu-item-param="foto2" data-view-type="foto360" type="button">foto2</button></li>
											<li><button class="menu-item-text" data-menu-item-param="foto3" data-view-type="foto360" type="button">foto3</button></li>
											<li><button class="menu-item-text" data-menu-item-param="foto4" data-view-type="foto360" type="button">foto4</button></li>
											<li><button class="menu-item-text" data-menu-item-param="foto5" data-view-type="foto360" type="button">foto5</button></li>
											<li><button class="menu-item-text" data-menu-item-param="foto6" data-view-type="foto360" type="button">foto6</button></li>
											<li><button class="menu-item-text" data-menu-item-param="foto7" data-view-type="foto360" type="button">foto7</button></li>
											<li><button class="menu-item-text" data-menu-item-param="foto8" data-view-type="foto360" type="button">foto8</button></li>
											<li><button class="menu-item-text" data-menu-item-param="foto9" data-view-type="foto360" type="button">foto9</button></li>
											<li><button class="menu-item-text" data-menu-item-param="foto10" data-view-type="foto360" type="button">foto10</button></li>
										</ul>
									</div>
								</div><a class="ml-auto whitespace-nowrap leading-6 inline-flex h-11 whitespace-no-wrap border-solid rounded-sm align-middle cursor-pointer text-center items-center justify-center focus:outline-none text-blue-2 hover:text-blue-1" data-media-viewer-overlay-switch="overzicht" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_viewer&quot;,&quot;media_type&quot;:&quot;all_media&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="#overzicht"><svg class="mr-2" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.5 26h-15A1.5 1.5 0 004 27.48v13A1.5 1.5 0 005.5 42h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.5zM7 29h12v10H7zM42.5 26h-15a1.5 1.5 0 00-1.5 1.5v13a1.5 1.5 0 001.5 1.5h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.5zM29 29h12v10H29zM20.5 5.93h-15A1.5 1.5 0 004 7.44v13A1.5 1.5 0 005.5 22h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.57zM7 8.94h12V19H7zM42.5 6h-15A1.5 1.5 0 0026 7.47v13A1.5 1.5 0 0027.5 22h15a1.5 1.5 0 001.5-1.5v-13A1.5 1.5 0 0042.5 6zM29 9h12v10H29z"></path></svg><span class="media-viewer__all-media-text">All media</span></a>
							</div>
						</section>
						<section class="media-viewer-video flex-grow flex flex-col lg:hidden" data-media-viewer-video="">
							<div class="flex-grow overflow-hidden flex items-center justify-center" data-video-container="">
								
							</div>
							<div class="media-viewer__footer px-4 py-1 mt-auto text-right" data-vue-container="">
								<a class="whitespace-nowrap leading-6 inline-flex h-11 whitespace-no-wrap border-solid rounded-sm align-middle cursor-pointer text-center items-center justify-center focus:outline-none text-blue-2 hover:text-blue-1" data-media-viewer-overlay-switch="overzicht" data-track-click="Media Clicked" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_media_viewer&quot;,&quot;media_type&quot;:&quot;all_media&quot;,&quot;funda_user_id&quot;:&quot;&quot;}" href="#overzicht"><svg class="mr-2" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.5 26h-15A1.5 1.5 0 004 27.48v13A1.5 1.5 0 005.5 42h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.5zM7 29h12v10H7zM42.5 26h-15a1.5 1.5 0 00-1.5 1.5v13a1.5 1.5 0 001.5 1.5h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.5zM29 29h12v10H29zM20.5 5.93h-15A1.5 1.5 0 004 7.44v13A1.5 1.5 0 005.5 22h15a1.5 1.5 0 001.5-1.5v-13a1.5 1.5 0 00-1.5-1.57zM7 8.94h12V19H7zM42.5 6h-15A1.5 1.5 0 0026 7.47v13A1.5 1.5 0 0027.5 22h15a1.5 1.5 0 001.5-1.5v-13A1.5 1.5 0 0042.5 6zM29 9h12v10H29z"></path></svg><span class="media-viewer__all-media-text">All media</span></a>
							</div>
						</section>
						<section class="media-viewer-overview flex-grow flex flex-col md:flex-col-reverse lg:hidden" data-media-viewer-overview="">
							<div class="media-viewer-overview__container relative overflow-scroll px-4 lg:px-0" data-media-viewer-overview-content="">
								<div class="media-viewer-overview__section max-w-container lg:mx-auto" data-media-viewer-overview-section="" id="overview-photos">
									<!--Foto's <number> -->
									<h2 class="media-viewer-overview__section-title">Photos <span class="media-viewer-overview__section-title-number">6</span></h2>
									<div class="mt-4 md:mt-6">
										<ol class="grid list-none p-0 m-0 grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
											<li class="media-viewer-overview__section-list-item--photo">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="foto-1" href="#foto-1"><img alt="Photo 1 van 46" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" sizes="(min-width: 1020px) 312px, calc((100vw - 48px) / 2)" src="{{asset('data/photo/1.jpg')}}"></a>
											</li>
											<li class="media-viewer-overview__section-list-item--photo">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="foto-2" href="#foto-2"><img alt="Photo 2 van 46" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" sizes="(min-width: 1020px) 312px, calc((100vw - 48px) / 2)" src="{{asset('data/photo/2.jpg')}}"></a>
											</li>
											<li class="media-viewer-overview__section-list-item--photo">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="foto-3" href="#foto-3"><img alt="Photo 3 van 46" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" sizes="(min-width: 1020px) 312px, calc((100vw - 48px) / 2)" src="{{asset('data/photo/3.jpg')}}"></a>
											</li>
											<li class="media-viewer-overview__section-list-item--photo">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="foto-4" href="#foto-4"><img alt="Photo 4 van 46" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" sizes="(min-width: 1020px) 312px, calc((100vw - 48px) / 2)" src="{{asset('data/photo/4.jpg')}}"></a>
											</li>
											<li class="media-viewer-overview__section-list-item--photo">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="foto-5" href="#foto-5"><img alt="Photo 5 van 46" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" sizes="(min-width: 1020px) 312px, calc((100vw - 48px) / 2)" src="{{asset('data/photo/5.jpg')}}"></a>
											</li>
											<li class="media-viewer-overview__section-list-item--photo">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="foto-6" href="#foto-6"><img alt="Photo 6 van 46" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" sizes="(min-width: 1020px) 312px, calc((100vw - 48px) / 2)" src="{{asset('data/photo/6.jpg')}}"></a>
											</li>
											<li class="media-viewer-overview__section-list-item--photo">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="foto-7" href="#foto-7"><img alt="Photo 7 van 46" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" sizes="(min-width: 1020px) 312px, calc((100vw - 48px) / 2)" src="{{asset('data/photo/7.jpg')}}"></a>
											</li>
											<li class="media-viewer-overview__section-list-item--photo">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="foto-8" href="#foto-8"><img alt="Photo 8 van 46" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" sizes="(min-width: 1020px) 312px, calc((100vw - 48px) / 2)" src="{{asset('data/photo/8.jpg')}}"></a>
											</li>
											<li class="media-viewer-overview__section-list-item--photo">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="foto-9" href="#foto-9"><img alt="Photo 9 van 46" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" sizes="(min-width: 1020px) 312px, calc((100vw - 48px) / 2)" src="{{asset('data/photo/9.jpg')}}"></a>
											</li>
											<li class="media-viewer-overview__section-list-item--photo">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="foto-10" href="#foto-10"><img alt="Photo 10 van 46" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" sizes="(min-width: 1020px) 312px, calc((100vw - 48px) / 2)" src="{{asset('data/photo/10.jpg')}}"></a>
											</li>
										</ol>
									</div>
								</div>
								<div class="media-viewer-overview__section max-w-container lg:mx-auto" data-media-viewer-overview-section="" id="overview-floorplan">
									<h2 class="media-viewer-overview__section-title">Floorplans <span class="media-viewer-overview__section-title-number">3</span></h2>
									<div class="mt-4 md:mt-6">
										<ol class="grid list-none p-0 m-0 grid-cols-2 gap-4 md:gap-6">
											<li class="media-viewer-overview__section-list-item--floorplan">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="plattegrond-2" href="#plattegrond-2"><img alt="Floorplan from Begane grond" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" src="{{asset('data/floorplan/1.jpg')}}">
												<div class="media-viewer-overview__item-overlay--floorplan">
													<span>Begane grond</span>
												</div></a>
											</li>
											<li class="media-viewer-overview__section-list-item--floorplan">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="plattegrond-1" href="#plattegrond-1"><img alt="Floorplan from 1e Verdieping" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" src="{{asset('data/floorplan/1.jpg')}}">
												<div class="media-viewer-overview__item-overlay--floorplan">
													<span>1e Verdieping</span>
												</div></a>
											</li>
											<li class="media-viewer-overview__section-list-item--floorplan">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="plattegrond-3" href="#plattegrond-3"><img alt="Floorplan from Berging" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" src="{{asset('data/floorplan/1.jpg')}}">
												<div class="media-viewer-overview__item-overlay--floorplan">
													<span>Berging</span>
												</div></a>
											</li>
										</ol>
									</div>
								</div>
								<div class="media-viewer-overview__section max-w-container lg:mx-auto" data-media-viewer-overview-section="" id="overview-360photos">
									<h2 class="media-viewer-overview__section-title">360° photos <span class="media-viewer-overview__section-title-number">10</span></h2>
									<div class="mt-4 md:mt-6">
										<ol class="grid list-none p-0 m-0 grid-cols-2 gap-4 md:gap-6">
											<li class="media-viewer-overview__section-list-item--360">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="360-foto-foto1" href="#360-foto-foto1"><img alt="360° photo from foto1" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" src="{{asset('data/360degree/1.jpg')}}">
												<div class="media-viewer-overview__item-overlay">
													<span>foto1</span>
												</div></a>
											</li>
											<li class="media-viewer-overview__section-list-item--360">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="360-foto-foto2" href="#360-foto-foto2"><img alt="360° photo from foto2" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" src="{{asset('data/360degree/2.jpg')}}">
												<div class="media-viewer-overview__item-overlay">
													<span>foto2</span>
												</div></a>
											</li>
											<li class="media-viewer-overview__section-list-item--360">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="360-foto-foto3" href="#360-foto-foto3"><img alt="360° photo from foto3" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" src="{{asset('data/360degree/3.jpg')}}">
												<div class="media-viewer-overview__item-overlay">
													<span>foto3</span>
												</div></a>
											</li>
											<li class="media-viewer-overview__section-list-item--360">
												<a class="media-viewer-overview__image-wrapper" data-media-viewer-overlay-switch="360-foto-foto4" href="#360-foto-foto4"><img alt="360° photo from foto4" class="media-viewer-overview__section-image" data-media-viewer-overview-image="" src="{{asset('data/360degree/4.jpg')}}">
												<div class="media-viewer-overview__item-overlay">
													<span>foto4</span>
												</div></a>
											</li>
										</ol>
									</div>
								</div>
								<div class="media-viewer-overview__section max-w-container lg:mx-auto" data-media-viewer-overview-section="" id="overview-video" style="min-height: 749.6px;">
									<h2 class="media-viewer-overview__section-title">Video</h2>
									<div class="mt-4 md:mt-6">
										<ol class="grid list-none p-0 m-0 grid-cols-2 gap-4 md:gap-6">
											<li class="media-viewer-overview__section-list-item--video">
												<a data-media-viewer-overlay-switch="video" href="#video"><img alt="Video" data-media-viewer-overview-image="" src="{{asset('data/video/movie.jpg')}}">
												<div class="media-viewer-overview__item-overlay--video">
													<span class="icon-video-white"></span>
												</div></a>
											</li>
										</ol>
									</div>
								</div>
							</div>
							<div class="media-viewer__footer py-1 px-4 lg:px-0 mt-auto overflow-x-auto md:-mt-14 md:mr-32 max-w-container lg:mx-auto w-full" data-tab-container="">
								<ul class="media-viewer-view-header-menu flex list-none" role="tablist">
									<li>
										<a class="menu-item-text active" data-tab-handle="" href="#overview-photos" role="tab">Photos</a>
									</li>
									<li>
										<a class="menu-item-text" data-tab-handle="" href="#overview-floorplan" role="tab">Floorplans</a>
									</li>
									<li>
										<a class="menu-item-text" data-tab-handle="" href="#overview-360photos" role="tab">360° photos</a>
									</li>
									<li>
										<a class="menu-item-text" data-tab-handle="" href="#overview-video" role="tab">Video</a>
									</li>
								</ul>
							</div>
						</section>
					</div>
				</div>
				<div class="sticky-contact-button" data-sticky-contact-buttons="object" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_sticky_header&quot;,&quot;broker_id&quot;:3066,&quot;lead_broker_id&quot;:3066,&quot;funda_user_id&quot;:&quot;&quot;}" data-vue-container="">
					<div class="container">
						<div class="sticky-contact-button__info">
							<h4>Jan Schamhartstraat 78</h4>
							<div class="sticky-contact-button__price">
								<span>€ 599,000 k.k.</span>
							</div>
						</div>
						<div class="sticky-contact-button__buttons" data-broker-id="3066">
							<div class="sticky-contact-button__phone sticky-contact-button__phone--small" data-interaction="Object.Tel" data-interaction-click="" data-sticky-contact-call-button="">
								<a class="fd-btn fd-btn--primary" data-log-request="/en/koop/olst/huis-42427849-jan-schamhartstraat-78/statistics/telefoonclick/3066/" data-track-click="Phone Called" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_sticky_header&quot;,&quot;broker_id&quot;:3066,&quot;lead_broker_id&quot;:3066,&quot;funda_user_id&quot;:&quot;&quot;}" href="tel:0572-351291"><span class="sticky-contact-button__small-only">Call</span> <span class="sticky-contact-button__medium-and-up">Call agent</span></a>
							</div>
							<div class="sticky-contact-button__phone sticky-contact-button__phone--big" data-interaction="Object.Tel" data-interaction-click="" data-sticky-contact-call-button="">
								<button class="fd-btn" data-log-request="/en/koop/olst/huis-42427849-jan-schamhartstraat-78/statistics/telefoonclick/3066/" data-sticky-contact-phone-handle="" data-track-click="Phone Shown" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_sticky_header&quot;,&quot;broker_id&quot;:3066,&quot;lead_broker_id&quot;:3066,&quot;funda_user_id&quot;:&quot;&quot;}" type="button">Show phone number</button> <a class="fd-btn" data-sticky-contact-phone-number="" data-track-click="Phone Called" data-track-props="{&quot;navigation_trigger&quot;:&quot;listing_sticky_header&quot;,&quot;broker_id&quot;:3066,&quot;lead_broker_id&quot;:3066,&quot;funda_user_id&quot;:&quot;&quot;}" href="tel:0572-351291">Call 0572-351291</a>
							</div>
							<div class="sticky-contact-button__message contact-messsage-ab-test-selector" data-sticky-contact-message-button="">
								<a class="fd-btn" href="/en/koop/olst/huis-42427849-jan-schamhartstraat-78/reageer/"><span class="sticky-contact-button__small-only">E-mail</span> <span class="sticky-contact-button__medium-and-up">Send e-mail</span></a>
							</div>
						</div>
						<div class="object-save-share fd-completely-hidden">
							<div class="object-save-share__buttons fd-flex fd-justify-content-end fd-m-right">
								<button class="object-save-share__button object-save-share__button-share fd-btn fd-btn--tertiary fd-btn--secondary--bp-m fd-color-white fd-color-blue-2--bp-m fd-m-right--bp-l fd-m-right--bp-m fd-border-remove"><svg height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
								<path d="M36 31.3a6 6 0 00-4.81 2.42l-13.51-7.8a5.92 5.92 0 00.08-3.58l13.7-7.91a6 6 0 10-1.33-2.69l-13.89 8a6 6 0 10-.2 8.68l14 8.09A6 6 0 1036 31.3zm0-23.78a3 3 0 11-3 3 3 3 0 013-3zM12 27a3 3 0 113-3 3 3 0 01-3 3zm24 13.3a3 3 0 113-3 3 3 0 01-3 3z"></path></svg></button> <button class="object-save-share__button object-save-share__button-save fd-btn fd-btn--tertiary fd-border-remove fd-p-horizontal-s--bp-m fd-btn--secondary--bp-m"><svg class="fd-completely-hidden--bp-m fd-color-red-1" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.33 6.76a8.79 8.79 0 00-8.77 8.78 21.8 21.8 0 00.76 5.71 25.32 25.32 0 002 5.09 35 35 0 008.4 10.11 29.67 29.67 0 007.15 4.65h.22a29.67 29.67 0 007.15-4.65 34.83 34.83 0 008.39-10.11 25.22 25.22 0 002-5.1 21.79 21.79 0 00.76-5.7A8.75 8.75 0 0029.29 8a8.88 8.88 0 00-3.14 3.1c-.09.15-.18.3-.26.46l-.51 1.16a1.5 1.5 0 01-1.37.91 1.51 1.51 0 01-1.38-.9l-.51-1.16-.27-.47A8.88 8.88 0 0018.71 8a8.63 8.63 0 00-4.38-1.24z"></path>
								<path d="M24 44.26a1.5 1.5 0 01-.55-.11l-.65-.25a32.13 32.13 0 01-8-5.15 38.24 38.24 0 01-9.12-11A28.26 28.26 0 013.43 22a24.69 24.69 0 01-.87-6.49A11.76 11.76 0 0120.23 5.35 12.12 12.12 0 0124 8.85a12.12 12.12 0 013.77-3.5 11.77 11.77 0 0117.67 10.19 25.21 25.21 0 01-.86 6.46 28.42 28.42 0 01-2.27 5.71 38.1 38.1 0 01-9.12 11 31.83 31.83 0 01-8 5.15l-.65.25a1.5 1.5 0 01-.54.15zm-9.67-37.5a8.79 8.79 0 00-8.77 8.78 21.8 21.8 0 00.76 5.71 25.32 25.32 0 002 5.09 35 35 0 008.4 10.11 29.67 29.67 0 007.15 4.65h.22a29.67 29.67 0 007.15-4.65 34.83 34.83 0 008.39-10.11 25.22 25.22 0 002-5.1 21.79 21.79 0 00.76-5.7A8.75 8.75 0 0029.29 8a8.88 8.88 0 00-3.14 3.1c-.09.15-.18.3-.26.46l-.51 1.16a1.5 1.5 0 01-1.37.91 1.51 1.51 0 01-1.38-.9l-.51-1.16-.27-.47A8.88 8.88 0 0018.71 8a8.63 8.63 0 00-4.38-1.24z" fill="#fff"></path></svg> <svg class="fd-color-red-1 fd-completely-hidden fd-display-inline-block--bp-m fd-m-right-xs--bp-m" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
								<path d="M42 17a10 10 0 00-18-6 10 10 0 00-18 6c0 15 16 24 18 24s18-9 18-24z"></path></svg> <span class="fd-completely-hidden fd-display-inline-block--bp-m">Saved</span></button>
							</div><!---->
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
@section('js')
<script src="{{asset('js/slick.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('js/krpano.js')}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	if($('div[data-media-viewer]').hasClass('lg:hidden')){
		$('.sticky-contact-button').removeClass('is-visible');
	}else{
		$(window).scroll(function(){
		    if ($(window).scrollTop() >= 300) {
		        $('.sticky-contact-button').addClass('is-visible');
		    }
		    else {
		        $('.sticky-contact-button').removeClass('is-visible');
		    }
		});
	}
	$('.media-viewer-fotos__slides').slick({
	 	autoplay: true,
  		autoplaySpeed: 1000,
	  	slidesToShow: 1,
		speed: 100,
  		slidesToScroll: 1,
		fade: true,
		prevArrow: '<button class="media-viewer-fotos__navigation absolute top-0 h-full bg-transparent text-white transition-opacity hidden lg:block left-0 pr-12" data-media-viewer-previous="" style="z-index:1"><span class="sr-only">Previous photo</span> <span class="rounded-full w-11 h-11 bg-black bg-opacity-50 hover:bg-opacity-70 inline-flex items-center justify-center"><svg class="w-7 h-7 lg:w-9 lg:h-9" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M19.63 24l9.54-9.54A1.5 1.5 0 0027 12.34L16.47 22.91a1.52 1.52 0 000 2.13L27 35.66a1.5 1.5 0 002.12-2.12z"></path></svg></span></button>',
		nextArrow: '<button class="media-viewer-fotos__navigation absolute top-0 h-full bg-transparent text-white transition-opacity hidden lg:block right-0 pl-12" data-media-viewer-next=""><span class="sr-only">Next photo</span> <span class="rounded-full w-11 h-11 bg-black bg-opacity-50 hover:bg-opacity-70 inline-flex items-center justify-center"><svg class="w-7 h-7 lg:w-9 lg:h-9" height="24" role="img" viewbox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M31.56 22.93L21 12.34a1.5 1.5 0 00-2.12 2.12L28.37 24l-9.54 9.54A1.5 1.5 0 0021 35.66l10.53-10.57a1.52 1.52 0 000-2.13z"></path></svg></span></button>'
	});
</script>
@endsection
@section('footer')
@include('footer')
@endsection