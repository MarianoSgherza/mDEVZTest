@extends('header')

@section('content')
    <div class="search-bar">
        <a href="http://" class="image"><img src="img\twitter_ic.png" alt="Twitter" ></a>
        <form action="" method="get" class="buscador">
            @csrf
            <input type="search" name="tuits" id="tuits">
            {{--<input type="submit" value="Buscar" id="buscar-btn">--}}
        </form>
    
    </div>
    <ul class="tweets-wrapper">    
        @if (!empty($data))
            
            @foreach ($data['statuses'] as $tweet)
                <li class="twt-content">
                    <div class="twt-img"></div>
                    <div class="twt-heading">
                        <h3>{{$tweet['user']['screen_name']}}</h3>
                    </div>
                    <div class="twt-text">
                        <p>
                            {{$tweet['text']}}
                        </p>
                    </div>
                    <div class="twt-links">
                        <div><a href="#"><img src="img\retweet-img.png" alt=""></a></div>
                        <div><a href="#"><img src="img\share-img.png" alt=""></a></div>
                        <div><a href="#"><img src="img\fav-img.png" alt=""></a></div>
                        <div><a href="#"><img src="img\options_img.svg" alt=""></a></div>
                    </div>
                    
                </li>    
            @endforeach

        @endif
    </ul>
    {{--@dump($data)--}}
@endsection
