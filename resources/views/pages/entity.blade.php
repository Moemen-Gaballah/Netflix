@extends('main')

@section('content')


         <div class='previewContainer'>
                    <img src='/{{$entity->thumbnail}}' class='previewImage' hidden>
                    
                    <video autoplay muted class='previewVideo' onended='previewEnded()'>
                        <source src='/{{$entity->preview}}' type='video/mp4'>
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
                <div class='season'>
                    @foreach($seasons as $key => $season)
                    <h3>Season {{$key}}<br></h3>
                    <div class='videos'>
                    @foreach($season as $video)
                        <a href='watch/{{$video->id}}'>
                            <div class='episodeContainer'>
                                <div class='contents'>
                                    <img src='/{{$entity->thumbnail}}'>
                                    <div class='videoInfo'>
                                        <h4>{{$video->title}}</h4>
                                        <span>{{$video->description}}</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    @endforeach
                    </div>
                    @endforeach
                </div>


<!-- ToDo -->
    <div class='previewCategories noScroll'>
        <div class='category'>
        <a href='category.php?id=1'>
            <h3>You might also like</h3>
        </a>

        <div class='entities'>
            <a href='entity.php?id=84'>
        <div class='previewContainer small'>
            <img src='/entities/thumbnails/nfs.jpg' title='Need for Speed'>
        </div>
    </a><a href='entity.php?id=81'>
        <div class='previewContainer small'>
            <img src='/entities/thumbnails/mi.jpg' title='Mission Impossible'>
        </div>
    </a><a href='entity.php?id=62'>
        <div class='previewContainer small'>
            <img src='/entities/thumbnails/tg.jpg' title='Top Gun'>
        </div>
    </a><a href='entity.php?id=82'>
        <div class='previewContainer small'>
            <img src='/entities/thumbnails/nbd.jpg' title='Never Back Down'>
        </div>
    </a><a href='entity.php?id=83'>
        <div class='previewContainer small'>
            <img src='/entities/thumbnails/mec.jpg' title='Mechanic'>
        </div>
    </a>
        </div>
    <div></div>

@endsection