<div>
    @if(session()->has('success'))
      <div class="border  rounded bg-green-200 border-green-300 text-green-800  opacity-0 opacity-100 block">
            {{ session('success') }}
        </div>
    @endif

    @if(session()->has('error'))
        <div class="border rounded bg-red-200 border-red-300 text-red-800  opacity-0 opacity-100 block">
            {{ session('error') }}
        </div>
    @endif
    @if(session()->has('message'))
        <div class="border rounded bg-gray-200-200 border-gray-300-300 text-gray-800  opacity-0 opacity-100 block">
            {{ session('message') }}
        </div>
    @endif
</div>
{{--<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-2" role="alert">--}}
{{--    <div class="flex">--}}
{{--        <div>--}}
{{--            <p class="text-sm">{{ session('message') }}</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
