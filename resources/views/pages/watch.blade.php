@extends('main')

@section('content')

           
<div class="watchContainer">
    <div class="videoControls watchNav">
        <button onclick="goBack()"><i class="fas fa-arrow-left"></i></button>
        <h1>{{$video->title}}</h1>
    </div>

    <div class="videoControls upNext" style="display:none">
        <button onclick=restartVideo();><i class="fas fa-redo"></i></button>
        <div class="upNextContainer">
            <h2>Up next:</h2>
            <h3>{{$video->title}}</h3>
            <h3>Season {{$video->season}}, Episode {{$video->episode}}</h3>
            
            @if(!empty($nextVideo))
            <button class="playNext" onclick="watchVideo({{$nextVideo}});">
                <i class="fas fa-play"></i>Play
            </button>

            @else 
             <a class="playNext" style="color:#FFF; font-size: 22px;" href="/">
                <i class="fas fa-play" style="color:#FFF; font-size: 22px;"></i>Back to home
            </a>
            @endif
        </div>
    </div>

    <video controls autoplay onended="showUpNext();" src="/{{$video->filePath}}" type="video/mp4" ?>    
    </video>
</div>

<script>
    initVideo("{{$video->id}}", "{{auth::user()->id}}", "{{ csrf_token() }}") ;
</script>

@endsection