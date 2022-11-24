@extends('app.dashboard.layouts.main')
@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new Song</h1>
    </div>


    <div class="col-lg-8">
        <form method="post" action="/dashboard/musics" class="mb-5" enctype="multipart/form-data">
            @csrf
            {{-- crss-side resource forgery --}}
            <div class="mb-3">
              <label for="judul" class="form-label" >Judul</label>
              <input value="{{ old('judul') }}" type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" autofocus>
              @error('judul')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="link" class="form-label" >link</label>
              <input value="{{ old('link') }}" type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" autofocus>
              @error('link')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <select class="form-select"name="genre_id">
                    @foreach ($categories as $category)
                    @if (old('genre_id') == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="lirik" class="form-label">Lirik</label>
                @error('lirik')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <input value="{{ old('lirik') }}" id="lirik" type="hidden" name="lirik">
                <trix-editor input="lirik"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Create post</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title')
        const slug = document.querySelector('#slug')

        title.addEventListener('change', function () {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        })

        document.addEventListener('trix-file-accept',function (e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image')
            const imgPreview = document.querySelector('.img-preview')
            
            imgPreview.style.display = 'block'

            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function (oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }
    </script>
@endsection