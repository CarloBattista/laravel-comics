@extends('layout.app')

@section('titlePage')
DC Comics - Home
@endsection

@section('content')
    <!-- Container content -->
    <div class="container__content">
        <div class="inner_content">
            <div class="container_heading">
                <h2 class="heading_content">Current Series</h2>
            </div>
            <div class="container_series">
                @foreach( $arrayComics as $elem )
                <div class="cardSeries">
                    <a href="#">
                        <div class="imgWrap">
                            <img class="img_series" src="{{$elem['thumb']}}" alt="{{$elem['title']}}">
                        </div>
                        <div class="infoWrap">
                            <p class="title_series">{{$elem['title']}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="container_cta">
                <button type="button" class="btn_load_more inverted_btn">Load More</button>
            </div>
        </div>
    </div>
@endsection