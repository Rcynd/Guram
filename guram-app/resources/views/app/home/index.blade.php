@extends('app.layout.main')

@section('container')
<div class="div mt-1 p-0" class="width:auto;">
    <div class=" d-flex justify-content-between flex-wrap">
        @for($i = 0 ; $i < 6; $i++)
        <a href="" class=" text-decoration-none" style="">
        <div class="card bg-none p-1 m-1 shadow-sm" style="background-color:rgba(0, 0, 0, 0.1);">
            {{-- <iframe class="rounded" width="318" height="240" src="https://www.youtube.com/embed/TDi-hGRYX6g" title="RADWIMPS - カナタハルカ [Official Music Video]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
            <image class="rounded" width="318" height="240" src="https://i.ytimg.com/vi/TDi-hGRYX6g/hq720.jpg">
            <div class=" text-center" style="width:100%;">
                <h5>RADWIMPS - カナタハルカ</h5>
                <p class="m-0"> see <em>Lyrics</em> </p>
                <p class="text text-muted mb-0 mt-1 p-0" style="font-size:10px;">by.RADWIMPS</p>
            </div>
        </div>
        </a>
        @endfor
    </div>
</div>
@endsection
