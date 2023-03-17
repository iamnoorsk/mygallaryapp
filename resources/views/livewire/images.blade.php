<div class="container">
    <div class="modal" {{ !empty($key) ? '' : 'hidden' }}>
        <div class="sub-modal">
            @if(!empty($key))
                <div class="modal-img-container">
                    <span class="close-mark" wire:click="storeKey(null,null)">&#10060;</span>
                    <img class="view-img" src="{{ asset('storage/'.$images[$key-1]->path) }}" />
                    <div class="menu-container">
                        <a class="btn-download" href="{{ asset('storage/'.$images[$key-1]->path) }}" download="image"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="download-icon" viewBox="0 0 16 16"> <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/> <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/></svg> Download</a>
                        <span class="like-icon" wire:click="like({{$image_id}})">
                            <svg viewBox="0 0 24 24" class="heart-icon" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.1315 3.71436C14.4172 3.71436 12.9029 4.57721 12 5.8915C11.0972 4.57721 9.58289 3.71436 7.86861 3.71436C5.10289 3.71436 2.85718 5.96007 2.85718 8.72578C2.85718 14.8344 12 20.3258 12 20.3258C12 20.3258 21.1429 14.8344 21.1429 8.72578C21.1429 5.96007 18.8972 3.71436 16.1315 3.71436Z" fill="url(#paint0_radial)"></path> <path opacity="0.5" d="M18.2056 4.16016C20.9485 8.53158 18.4228 14.2687 15.3885 15.8973C12.0399 17.6973 9.74847 16.8516 5.00562 14.1602C7.70847 17.743 11.9999 20.3202 11.9999 20.3202C11.9999 20.3202 21.1428 14.8287 21.1428 8.72016C21.1428 6.6973 19.937 4.94873 18.2056 4.16016Z" fill="url(#paint1_radial)"></path> <path opacity="0.5" d="M16.1315 3.71436C14.4172 3.71436 12.9029 4.57721 12 5.8915C11.0972 4.57721 9.58289 3.71436 7.86861 3.71436C5.10289 3.71436 2.85718 5.96007 2.85718 8.72578C2.85718 14.8344 12 20.3258 12 20.3258C12 20.3258 21.1429 14.8344 21.1429 8.72578C21.1429 5.96007 18.8972 3.71436 16.1315 3.71436Z" fill="url(#paint2_radial)"></path> <path opacity="0.5" d="M16.1315 3.71436C14.4172 3.71436 12.9029 4.57721 12 5.8915C11.0972 4.57721 9.58289 3.71436 7.86861 3.71436C5.10289 3.71436 2.85718 5.96007 2.85718 8.72578C2.85718 14.8344 12 20.3258 12 20.3258C12 20.3258 21.1429 14.8344 21.1429 8.72578C21.1429 5.96007 18.8972 3.71436 16.1315 3.71436Z" fill="url(#paint3_radial)"></path> <path opacity="0.24" d="M10.7486 5.74883C11.2514 6.93169 10.1371 8.5374 8.25714 9.33169C6.37714 10.126 4.45143 9.8174 3.94857 8.64026C3.44571 7.46312 4.56 5.85169 6.44 5.0574C8.32 4.26312 10.2457 4.56597 10.7486 5.74883Z" fill="url(#paint4_radial)"></path> <path opacity="0.24" d="M16.8742 4.78885C17.5885 5.57742 17.1485 7.13742 15.8971 8.26885C14.6456 9.40028 13.0513 9.68028 12.3371 8.8917C11.6228 8.10313 12.0628 6.54313 13.3142 5.41171C14.5656 4.28028 16.1599 4.00028 16.8742 4.78885Z" fill="url(#paint5_radial)"></path> <path opacity="0.32" d="M16.2229 5.04578C18.7372 5.90293 21.1372 9.61721 17.0801 14.2458C14.6515 17.0172 12.0001 18.4172 8.62866 17.8686C10.4515 19.3886 12.0058 20.3258 12.0058 20.3258C12.0058 20.3258 21.1487 14.8344 21.1487 8.72578C21.1429 5.96007 18.8972 3.71436 16.1315 3.71436C14.4172 3.71436 12.9029 4.57721 12.0001 5.8915C12.0001 5.8915 14.3829 4.41721 16.2229 5.04578Z" fill="url(#paint6_linear)"></path> <defs> <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(9.38479 8.34769) rotate(-29.408) scale(14.3064 11.3486)"> <stop offset="0.2479" stop-color="{{ optional($images[$key-1]->imageLike)->is_like ? '#FF0000' : '#000000' }}"></stop> <stop offset="0.8639" stop-color="{{ optional($images[$key-1]->imageLike)->is_like ? '#FF0000' : '#000000' }}"></stop> </radialGradient> <radialGradient id="paint1_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(9.7385 7.47018) rotate(-29.408) scale(12.3173 9.77078)"> <stop offset="0.2479" stop-color="{{ optional($images[$key-1]->imageLike)->is_like ? '#FF0000' : '#000000' }}"></stop> <stop offset="1" stop-color="{{ optional($images[$key-1]->imageLike)->is_like ? '#FF0000' : '#000000' }}"></stop> </radialGradient> <radialGradient id="paint2_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(9.38479 8.34769) rotate(-29.408) scale(14.3064 11.3486)"> <stop stop-color="white" stop-opacity="0.25"></stop> <stop offset="1" stop-color="white" stop-opacity="0"></stop> </radialGradient> <radialGradient id="paint3_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(14.5277 13.2044) rotate(-26.296) scale(10.4431 5.16038)"> <stop stop-color="{{ optional($images[$key-1]->imageLike)->is_like ? '#FF0000' : '#000000' }}" stop-opacity="0.25"></stop> <stop offset="1" stop-color="{{ optional($images[$key-1]->imageLike)->is_like ? '#FF0000' : '#000000' }}" stop-opacity="0"></stop> </radialGradient> <radialGradient id="paint4_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(7.34746 7.19453) rotate(-21.6908) scale(3.71252 2.30616)"> <stop stop-color="white"></stop> <stop offset="1" stop-color="white" stop-opacity="0"></stop> </radialGradient> <radialGradient id="paint5_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(14.6004 6.84619) rotate(-40.7634) scale(3.07376 1.9095)"> <stop stop-color="white"></stop> <stop offset="1" stop-color="white" stop-opacity="0"></stop> </radialGradient> <linearGradient id="paint6_linear" x1="13.8868" y1="26.8498" x2="15.6583" y2="2.96408" gradientUnits="userSpaceOnUse"> <stop stop-color="{{ optional($images[$key-1]->imageLike)->is_like ? '#FF0000' : '#000000' }}"></stop> <stop offset="1" stop-color="{{ optional($images[$key-1]->imageLike)->is_like ? '#FF0000' : '#000000' }}" stop-opacity="0"></stop> </linearGradient> </defs> </g></svg>
                        </span>
                        <span style="padding-top:5px">{{ $images[$key-1]->like_count }}</span>
                    </div>
                </div>
            @endif
        </div>
    </div>
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
            @if(empty(auth()->id()))
                <a href="/login" class="btn-login">Login</a>
            @else    
                <a href="/logout" class="btn-login">Log Out</a>
            @endif
        </div>
        @foreach($images as $key => $image)
            <div class="image-container">
                <img src="{{ asset('storage/'.$image->path) }}" wire:click="storeKey({{$key+1}},{{$image->id}})" class="image"/>

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