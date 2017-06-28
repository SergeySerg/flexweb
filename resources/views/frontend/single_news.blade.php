@extends('ws-app')

@section('content')
    <div class="container">
        <div class="page-wrap">
            <div class="page-header">
                <a href="javascript:history.go(-1)" class="btn-back btn-back_news">{{ trans('base.back') }}</a>
                <div class="row top-news_wrap">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <h2 class="section_title section_title__top-news-item">
                            <div class="news-date">
                                <div class="news-date_day">{{ date("d", strtotime($article->date))  }}</div>
                                <div class="news-date_month">{{ date("M", strtotime($article->date)) }}</div>
                            </div>
                            {{ $article->getTranslate('title') }}
                        </h2>
                        <div class="section-title_bg section-title_bg__news"></div>
                        <div class="top-news_description-wrap">
                            <img class="top-news_img" src="{{ asset( $article->getAttributeTranslate('Картинка новини')) }}" alt="{{ $article->getTranslate('title') }}">
                            <div class="top-news_description">
                                {!! $article->getTranslate('description') !!}
                            </div>
                            <a class="more more_all-news" href="/{{ App::getLocale() }}/news">{{ trans('base.all_news') }}</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
