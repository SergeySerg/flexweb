@extends('adminpanel')


@section('breadcrumbs')
<li>
    <i class="icon-home home-icon"></i>
    <a href="/admin30x5/">Головна</a>

                                    <span class="divider">
                                        <i class="icon-angle-right arrow-icon"></i>
                                    </span>
</li>

<li class="active">Коментарі</li>
@stop

@section('content')

<div class="page-content">
    <div class="row-fluid">
        <div class="span12">
            <!--PAGE CONTENT BEGINS-->
            <div class="row-fluid">
                <h3 class="header smaller lighter blue">Коментарі</h3>

                <div class="table-header">
                    Список коментарів
                    <a href="{{ $url }}/comments/{{ $article_id }}/create">
                        <button class="btn btn-warning">
                            <i class="icon-plus"></i>
                            Додати Коментар
                        </button>
                    </a>
                </div>
                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>

                        <th class="center">
                            ID
                        </th>
                        <th class="hidden-phone center">
                            Оцінка
                        </th>
                        <th class="hidden-phone center">
                            Зміст коментарю
                        </th>
                        <th class="hidden-phone center">
                            Дата додавання коментарю
                        </th>
                        <th class="hidden-phone center">
                            Статус
                        </th>
                        <th class="center">
                            Пр-т
                        </th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($admin_comments as $admin_comment)
                    <tr>
                        <td class="center">
                            <label>
                                <span class="lbl">{{ $admin_comment->id }}</span>
                            </label>
                        </td>
                        <td>{{ $admin_comment->getRate() }}</td>
                        <td><a href="{{ $url }}/comments/{{$admin_comment->article_id}}/{{$admin_comment->id}}">{!! str_limit($admin_comment->comment, 80, '...') !!}</a></td>
                        <td>{{date('d-m-Y',strtotime($admin_comment->date))}}</td>
                        <td>
                            @if($admin_comment->active)
                            <span class="label label-success">Активно</span>
                            @else
                            <span class="label label-inverse arrowed-in">Неактивно</span>
                            @endif</td>
                        <td class="center">{{ $admin_comment->priority }}</td>
                        <td class="td-actions">
                            <div class="visible-phone visible-desktop action-buttons">
                                <a class="green" href="{{ $url }}/comments/{{$admin_comment->article_id}}/{{$admin_comment->id}}">
                                    <i class="icon-pencil bigger-130"></i>
                                </a>
                                <a href='{{ $url }}/comments/{{$admin_comment->article_id}}/{{$admin_comment->id}}' data-id='{{$admin_comment->id}}' class='comment-delete'>
                                    <i class="icon-trash bigger-130"></i>
                                </a>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div>
<div id="token" style="display: none">{{csrf_token()}}</div>
<script>
    $(function(){
        var oTable1 = $('#sample-table-2').dataTable( {
            "aaSorting": [[5,'desc']],
            "aoColumns": [
                { "bSortable": true,  "sWidth": "30px" },
                null, null,
                { "bSortable": false,  "sWidth": "90px" },
                { "bSortable": true,  "sWidth": "60px" },
                { "bSortable": true,  "sWidth": "60px" },
                { "bSortable": false,  "sWidth": "60px" }
            ] } );
    });
</script>
@stop