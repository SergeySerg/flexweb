@extends('ws-app')

@section('content')
    @if($categories_data['subject']->active == 1 AND count($subject) !== 0)

        <div id="subject" class="mob-block-content mob-block_subject clearfix">
            <h2 class="mob-block_header mob-project-header">{{ $categories_data['subject']->getTranslate('title') }}</h2>
            @if(count($subject) == 1)
                <div class="mob-project-item" data-id="s1" style="background-image: url('{{ asset( $subject->getAttributeTranslate('Картинка предмета')) }}');">
                    <div class="mob-project-item_name">
                        <span class="mob-project-item_name-text">{{ $subject->getTranslate('title') }}</span>
                    </div>
                </div>
                <div id="mob-project-carousel-s1" class="mob-carousel-wrap">
                    <div class="mob-close-gallery"><i class="fa fa-times fa-2x" aria-hidden="true"></i></div>
                    <div class="owl-carousel owl-theme">
                        @foreach($subject->getImages() as $imgSrc)
                            <div class="mob-gallery-item">
                                <img src="/{{ $imgSrc['full'] }}" alt="">
                            </div>
                        @endforeach

                    </div>
                </div>
            @else
                @foreach($subject as $subject_item)
                    <div class="mob-project-item" data-id="p{{ $subject_item->id }}" style="background-image: url('{{ asset( $subject_item->getAttributeTranslate('Картинка предмета')) }}');">
                        <div class="mob-project-item_name">
                            <span class="mob-project-item_name-text">{{ $subject_item->getTranslate('title') }}</span>
                        </div>
                    </div>
                @endforeach
                @foreach($subject as $subject_item)
                    <div id="mob-project-carousel-p{{ $subject_item->id }}" class="mob-carousel-wrap">
                        <div class="mob-close-gallery"><i class="fa fa-times fa-2x" aria-hidden="true"></i></div>
                        <div class="owl-carousel owl-theme">
                            @foreach($subject_item->getImages() as $imgSrc)
                                <div class="mob-gallery-item">
                                    <img src="/{{ $imgSrc['full'] }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    @endif
@endsection
