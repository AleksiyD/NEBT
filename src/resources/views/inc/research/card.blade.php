<div class="card col-md-12 p-3 mb-1 rounded shadow">
    <div class="row ">
        <div class="col-md-4">
            <img class="w-100" width="200" src="{{ asset($img) }}">
        </div>
        <div class="col-md-8">
            <div class="card-block">
                <h6 class="card-title">
                    <a href="{{ $href }}" target="_blank" rel="noopener noreferrer">{{ $title }}</a>
                </h6>
                <p class="card-text text-justify">{{ $text }}</p>
            </div>
        </div>
    </div>
</div>