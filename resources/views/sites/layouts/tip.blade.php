<div class="tips">
	@if (Auth::guest())
         <b>Mẹo: </b>đăng nhập <b>website</b> để
         <b><a href="javascript:void(0)" class="loginlink">Upload</a></b> nhiều ảnh lên! 
    @else
        @if (Auth::user()->role == 0)
            <b>Mẹo: </b>đăng nhập <b>website</b> để 
            <b><a href="#" title="upload">Upload</a></b> nhiều ảnh lên!
        @else
            <b>Mẹo: </b>đăng nhập <b>website</b> để 
            <b><a href="javascript:void(0)" class="loginlink">Upload</a></b> nhiều ảnh lên! 
        @endif
    @endif
</div>
