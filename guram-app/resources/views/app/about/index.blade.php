@extends('app.layout.main')

@section('container')
<div class="div mt-1 p-0" class="width:auto;">
    <div class="justify-content-center flex-wrap text-light">
        <div class="about">
            <h1 class="text-center">About Guram</h1>
            <p class="text-center text-muted">by.{{ $name }}</p>
            <div class="d-flex justify-content-center">
                <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thubnail rounded-circle">
            </div>
            <div class="ms-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt illum iure veritatis sint eveniet nemo tempore fugiat sequi soluta quae asperiores voluptate, quibusdam laboriosam, voluptas fuga. Libero aperiam voluptatem vitae.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptas inventore minus consequuntur dolorem eos omnis doloribus fuga excepturi voluptatum nisi ad amet officiis minima, eaque fugit corporis ratione sapiente sit sequi hic adipisci quisquam? Nihil cupiditate iste reiciendis necessitatibus ipsa incidunt ullam fuga quis illo atque? Ex error in, repudiandae dolorum rem placeat fugiat exercitationem, itaque ea, aliquid at dolor sequi excepturi magni earum! Expedita, culpa repudiandae quae facere, corrupti assumenda, dolor id quia porro unde mollitia veniam placeat dolore. Velit dolore ullam, non a perferendis aspernatur sit autem voluptatum. Aperiam fugit neque suscipit voluptatibus explicabo vitae, optio error.</p>
            </div>
        </div>
    </div>
</div>
@endsection
