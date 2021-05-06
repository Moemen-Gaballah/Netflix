@extends('main')

@section('content')

	<div class='previewContainer'>
        <img src='entities/thumbnails/2012.jpg' class='previewImage' hidden>
        
        <video autoplay muted class='previewVideo' onended='previewEnded()'>
            <source src='entities/previews/1.mp4' type='video/mp4'>
        </video>

        <div class='previewOverlay'>
            <div class='mainDetails'>
                <h3>Name Test</h3>
                subHeading 
                <div class='buttons'>
                    <button onclick='watchVideo($videoId)'><i class='fas fa-play'></i> play Or Continue</button>
                    <button onclick='volumeToggle(this)'><i class='fas fa-volume-mute'></i></button>
                </div>
            </div>
        </div>

    </div>

    <div class='previewCategories'>


    	<div class='category'>
            <a href='category.php?id=$categoryId'>
                <h3>title Cat</h3>
            </a>

            <div class='entities'>
                entitiesHtml
            </div>
        </div>

    </div>		

@endsection