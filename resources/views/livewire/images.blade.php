<div class="container">
    <div class="sub-container">
        <div class="navbar">
            <div class="search-container">
                <input
                    wire:model.lazy="search"
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
                    <p class="tag">#{{ substr($image->tags,0,40) }}... </p>
                    <p class="description">{{ substr($image->description,0,40) }}...</p>
                </div>
            </div>
        @endforeach
        <br>
    </div>
    <div class="link-container">
        {{ $images->links() }}
    </div>
</div>