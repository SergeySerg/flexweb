@extends('adminpanel')

@section('breadcrumbs')
<li>
    <i class="icon-home home-icon"></i>
    <a href="{{ $url }}">Головна</a>
        <span class="divider">
            <i class="icon-angle-right arrow-icon"></i>
        </span>
</li>

<li>
    <a href="#">Коментарі</a>

        <span class="divider">
            <i class="icon-angle-right arrow-icon"></i>
        </span>
</li>


@if(isset($admin_comment))
<li class="active">{{$admin_comment->id}}</li>
@else
<li class="active">Додати нову</li>
@endif
@stop

@section('content')

<div class="page-content">
    <div class="page-header position-relative">
        <h1>
            @if (isset($admin_comment))
            Редагувати
            @else
            Додати
            @endif
        </h1>
    </div><!--/.page-header-->

        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->

                <form class="form-horizontal" id="comment-form" method="POST" action="" />

                    <div class="control-group">
                        <label class="control-label" for="form-field-2">Пріоритет</label>

                        <div class="controls">
                            <input type="number" id="form-field-2" name="priority" @if(isset($admin_comment)) value='{{$admin_comment->priority}}' @endif  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="id-date-picker-1">Дата додавання відгуку</label>
                        <div class="controls">
                            <div class="row-fluid input-append">
                                <input class="span2 date-picker" name="date" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" @if(isset($admin_comment)) value='{{date('d-m-Y',strtotime($admin_comment->date))}}' @endif/>
                                        <span class="add-on">
                                            <i class="icon-calendar"></i>
                                       </span>
                            </div>
                         </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Статус</label>
                        <div class="controls">
                            <div class="row-fluid">
                                <div class="span3">
                                    <label>
                                        <input name='active' type='hidden' value='0'>
                                        <input name='active' class="ace-switch ace-switch-6" type="checkbox" value=1 @if(isset($admin_comment) AND $admin_comment->active) checked="checked" @endif />
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label  class="control-label" for="form-field-select-1">Оцінка</label>

                        <div class="controls">
                            <select id="form-field-select-1" name="rate">
                                @if(isset($admin_comment))
                                    <option   value='{{$admin_comment->rate}}' select="selected" />{{ $admin_comment->getRate() }}
                                @endif
                                <option value="5">Відмінно</option>
                                <option value="4">Добре</option>
                                <option value="3">Задовільно</option>
                                <option value="2">Погано</option>
                                <option value="1">Дуже погано</option>
                            </select>

                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="form-field-3">Имя користувача</label>

                        <div class="controls">
                            <input type="text" name="user_name"  @if(isset($admin_comment)) value='{{$admin_comment->user_name}}' @endif id="form-field-3" placeholder="Имя користувача" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="form-field-4">Телефон користувача</label>

                        <div class="controls">
                            <input type="text" name="user_phone"  @if(isset($admin_comment)) value='{{$admin_comment->user_phone}}' @endif id="form-field-4" placeholder="Телефон користувача" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="form-field-5">Email користувача</label>

                        <div class="controls">
                            <input type="text" name="user_email"  @if(isset($admin_comment)) value='{{$admin_comment->user_email}}' @endif id="form-field-4" placeholder="Email користувача" />
                        </div>
                    </div>

                    <h4 class="header blue clearfix">Коментар</h4>
                    <div class="control-group">
                        <textarea name="comment" class="span12" id="form-field-8" placeholder="Текст коментаря">@if(isset($admin_comment)){{ $admin_comment->comment }}@endif</textarea>

                    </div>
                    <div class="space-4"></div>
                    <input type="hidden" name="_method" value='{{$action_method}}'/>
                    <input type="hidden" name="article_id" value='{{$article_id}}'/>
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-actions">
                        <button class="btn btn-info comment-save" type="button">
                            <i class="icon-ok bigger-110"></i>
                            Сохранить
                        </button>
                </form>
                    <!--PAGE CONTENT ENDS-->
            </div><!--/.span-->
        </div><!--/.row-fluid-->
</div><!--/.page-content-->
    <div id="token" style="display: none">{{csrf_token()}}</div>
    @stop

