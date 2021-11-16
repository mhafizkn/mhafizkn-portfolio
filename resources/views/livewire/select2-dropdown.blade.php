@section('contents')
<div>
    The best athlete wants his opponent at his best.
</div>
<div>

    <div wire:ignore>
        <select class="form-control" wire:model="item" id="select2-dropdown">
            <option value="">Select Option</option>
            @foreach($webseries as $item)
            <option value="{{ $item }}">{{ $item }}</option>
            @endforeach
        </select>
    </div>

</div>
@endsection

@push('scripts')

<script>
    $(document).ready(function () {
        $('#select2-dropdown').select2();
        $('#select2-dropdown').on('change', function (e) {
            var data = $('#select2-dropdown').select2("val");
            @this.set('ottPlatform', data);
        });
    });

</script>

@endpush
