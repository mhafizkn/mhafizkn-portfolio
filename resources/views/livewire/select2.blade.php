<div>
    {{-- <h5 style="color: white;">If you look to others for fulfillment, you will never truly be fulfilled.</h5> --}}
    <div class="mb-6" wire:ignore>
        <label for="select2" style="color: white;">Web Series</label>
        <select class="form-control" id="select2" wire:model="item">
            <option value="">Select Option</option>
            @foreach($webseries as $item)
            <option value="{{ $item }}">{{ $item }}</option>
            @endforeach
        </select>
    </div>
</div>


@push('scripts')

<script>
    $(document).ready(function () {
        $('#select2').select2();
        $('#select2').on('change', function (e) {
            var data = $('#select2').select2("val");
            @this.set('ottPlatform', data);
        });
    });

</script>

@endpush
