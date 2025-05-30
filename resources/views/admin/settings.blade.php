@extends('admin.layouts.master')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Settings</h1>
    </div>

    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="container">
        <h1>Change Settings</h1>
        <hr>
        <form method="POST" action="/settingsUpdate" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="site_name" class="form-label">Site Name</label>
                <input type="text" class="form-control" id="site_name" name="site_name" value="{{ $setting['site_name'] }}">
            </div>
            <div class="mb-3">
                <label for="site_description" class="form-label">Site Description</label>
                <textarea class="form-control" id="site_description" name="site_description">{{ $setting['site_description'] }}</textarea>
            </div>
            <div class="mb-3">
                <label for="site_email" class="form-label">Site Email</label>
                <input type="email" class="form-control" id="site_email" name="site_email" value="{{ $setting['site_email'] }}">
            </div>
            <div class="mb-3">
                <label for="site_phone" class="form-label">Site Phone</label>
                <input type="text" class="form-control" id="site_phone" name="site_phone" value="{{ $setting['site_phone'] }}">
            </div>
                <div class="mb-3">
                        <label for="site_address" class="form-label">Site Address</label>
                        <input type="text" class="form-control" id="site_address" name="site_address" value="{{ $setting['site_address'] }}">
                </div>
            {{-- <div class="mb-3">
                <label for="site_logo" class="form-label">Site Logo</label>
                <input type="file" class="form-control" id="site_logo" name="site_logo">
                @if ($setting['site_logo'])
                    <img src="{{ asset('storage/' . $setting['site_logo']) }}" class="img-thumbnail mt-2" style="max-width: 150px;">
                @else
                    <p class="text-muted mt-2">No logo uploaded</p>
                @endif
                </div>
                <div class="mb-3">
                    <label for="site_favicon" class="form-label">Site Favicon</label>
                    <input type="file" class="form-control" id="site_favicon" name="site_favicon">
                    @if ($setting['site_favicon'])
                        <img src="{{ asset('storage/' . $setting['site_favicon']) }}" class="img-thumbnail mt-2" style="max-width: 50px;">
                    @else
                        <p class="text-muted mt-2">No favicon uploaded</p>
                    @endif
                </div> --}}
            {{-- <div class="mb-3">
                <label for="site_status" class="form-label">Site Status</label>
                <select class="form-select" id="site_status" name="site_status">
                    <option value="1" {{ $setting['site_status'] == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $setting['site_status'] == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
                </div> --}}
                <div class="mb-3">
                        <label for="site_keywords" class="form-label">Site Keywords</label>
                        <input type="text" class="form-control" id="site_keywords" name="site_keywords" value="{{ $setting['site_keywords'] }}">
                </div>
                <div class="mb-3">
                        <label for="site_copyright" class="form-label">Site Copyright</label>
                        <input type="text" class="form-control" id="site_copyright" name="site_copyright" value="{{ $setting['site_copyright'] }}">
                </div>
                <div class="mb-3">
                        <label for="site_social_facebook" class="form-label">Facebook URL</label>
                        <input type="text" class="form-control" id="site_social_facebook" name="site_social_facebook" value="{{ $setting['site_social_facebook'] }}">
                </div>
                <div class="mb-3">
                        <label for="site_social_twitter" class="form-label">Twitter URL</label>
                        <input type="text" class="form-control" id="site_social_twitter" name="site_social_twitter" value="{{ $setting['site_social_twitter'] }}">
                </div>
                <div class="mb-3">
                        <label for="site_social_instagram" class="form-label">Instagram URL</label>
                        <input type="text" class="form-control" id="site_social_instagram" name="site_social_instagram" value="{{ $setting['site_social_instagram'] }}">
                </div>
                <div class="mb-3">
                        <label for="site_social_linkedin" class="form-label">LinkedIn URL</label>
                        <input type="text" class="form-control" id="site_social_linkedin" name="site_social_linkedin" value="{{ $setting['site_social_linkedin'] }}">
                </div>
                <div class="mb-3">
                        <label for="site_social_youtube" class="form-label">YouTube URL</label>
                        <input type="text" class="form-control" id="site_social_youtube" name="site_social_youtube" value="{{ $setting['site_social_youtube'] }}">
                </div>

            <button type="submit" class="btn btn-primary">Update Settings</button>
        </form>
    </div>

@endsection