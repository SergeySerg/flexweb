@extends('ws-app')

@section('content')
    <div id="contact" class="mob-block-content mob-block_contact">
        <h2 class="mob-block_header mob-block_header-contact">{{ $categories_data['contact']->getTranslate('title') }}</h2>
        <div class="mob-about_desc">
            {{ $texts->get('address') }}<br>
            {{trans('base.tel')}}: {{ $texts->get('telephone') }} <br>
            {{ $texts->get('email') }}  <br>
        </div>
        <ul class="mob-soc">
            @foreach($social as $social_item)
                <li class="mob-soc_item"><a href="{{ $social_item->getAttributeTranslate('Ссилка') }}" target="_blank">{{ $social_item->getTranslate('title') }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection