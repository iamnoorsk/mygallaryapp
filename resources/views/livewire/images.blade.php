<div class="container">
    <div class="navbar">
        <div class="search-container">
            <input
                class="navbar-sinput"
                type="text"
                placeholder="Search images here..."
            />
            <input type="button" value="Search" class="search-btn">
        </div>
    </div>
    @foreach($images as $image)
        <div class="image-container">
            <img src="{{ asset('storage/'.$image->path) }}" class="image"/>

            <div class="text-container">
                <p class="tag">#{{ $image->tags }} </p>
                <p class="description">{{ $image->tags }} </p>
            </div>
        </div>
    @endforeach
</div>