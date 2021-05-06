@extends('main')

@section('content')
       <div class='previewContainer'>
            <img src='{{$entity->thumbnail}}' class='previewImage' hidden>
            
            <video autoplay muted class='previewVideo' onended='previewEnded()'>
                <source src='{{$entity->preview}}' type='video/mp4'>
            </video>

            <div class='previewOverlay'>
                <div class='mainDetails'>
                    <h3>{{$entity->name}}</h3>
                    <h4>Season 1, Episode 1</h4> 
                    <div class='buttons'>

                        <button onclick='watchVideo({{$entity->videos->first()->id}})'><i class='fas fa-play'></i> Play</button>
                        <button onclick='volumeToggle(this)'><i class='fas fa-volume-mute'></i></button>
                    </div>
                </div>
            </div>

        </div>

        <div class='previewCategories'>
            @foreach($categories as $category)
            <div class='category'>
                <a href='category.php?id=1'>
                    <h3>{{$category->name}}</h3>
                </a>

                <div class='entities'>
                    @foreach($category->entities as $entity)
                    <a href='entity/{{$entity->id}}'>
                        <div class='previewContainer small'>
                            <img src='{{$entity->thumbnail}}' title='Top Gun'>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>


@endsection