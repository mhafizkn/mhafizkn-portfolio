<!DOCTYPE html>
<html>

<head>

    <title>Laravel 8 Livewire Dropdown Example</title>

    @livewireStyles
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>
    <div>
        <h3>Layout Blade</h3>
        <h5>{{ $setting }}</h5>
    </div>
    <div>
        <button>
            <a href="{{ route('home') }}" class="btn btn-primary">Homepage</a>
        </button>
    </div>
</body>

@livewireScripts
@stack('scripts')

</html>
