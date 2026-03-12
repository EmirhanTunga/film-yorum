@extends($masterpage ?? 'panel.master')
 
@section('content')
<div class="row">
 
    @foreach($channels as $channel) 
    <div class="col-sm-6 col-xl-3">
        <a href="{{ route('panel.index', ['cid' => $channel->id]) }}" href="javascript:void(0)">
            <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                <div class="">
                    <h3 class="display-4 d-block l-h-n m-0 fw-500">
                        {{ $channel->tickets->count() }}
                        <small class="m-0 l-h-n">{{ $channel->name }}</small>
                    </h3>
                </div>
                @if(!is_null($channel->image))
                <img style="width: 90px;bottom: 8px;right: 8px;" class="fal fa-globe position-absolute pos-right pos-bottom opacity-80 mb-n1 mr-n1" src="{{ env('CDN_URL') . 'upload/channel/' . $channel->image }}">
                @elseif(!is_null($channel->icon)) 
                <i class="{{ $channel->icon }} position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i> 
                @endif
            </div>
        </a>
    </div>
    @endforeach
 
</div>
<div class="row"> 
    <div class="col-lg-12">
         
    </div> 
</div> 
@endsection 
