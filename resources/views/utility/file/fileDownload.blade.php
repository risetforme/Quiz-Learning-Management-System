<div class="text-center">
    <h3>{{ __('deskripsi: ') }} {{ $file->description }}</h3>
    <hr/>
    <img class="img" src="{{ asset('storage/'.$file->file) }}" alt="{{ $file->description }}" />
    </div>