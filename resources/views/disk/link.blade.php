@extends('disk.layouts.default')

@section('title', 'Public link')

@section('content')
    <main class="public_link">
        @if(isset($file))
        <div class="main-table">
            <div class="main-table__table">
                <div class="table-head">
                    <div class="name">
                        <span>Название</span>
                    </div>
                    <div class="owner">
                        <span>Владелец</span>
                    </div>
                    <div class="date">
                        <span>Дата</span>
                    </div>
                    <div class="time">
                        <span>Время</span>
                    </div>
                    <div class="size">
                        <span>Размер</span>
                    </div>
                </div>
                <div class="table-body">
                    <div class="table-item table-item__file">
                        <div class="name-data">
                            <i class="file"></i><span>{{$file->name}}</span>
                        </div>
                        <div class="owner-data">
                            <span>{{$file->user->name}}</span>
                        </div>
                        <div class="date-data">
                            <span>31.01.2018</span>
                        </div>
                        <div class="time-data">
                            <span>18:30</span>
                        </div>
                        <div class="size-data">
                            <span>1451 MB</span>
                        </div>
                        <div class="dots-right" role="button" id="item4dots" data-toggle="dropdown"
                             aria-haspopup="true" aria-expanded="false">
                            <div class="dropdown-menu" aria-labelledby="item4dots">
                                <a class="dropdown-item delete-return" href="#">Восстановить</a>
                                <a class="dropdown-item delete-delete" href="#">Удалить навсегда</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if(!isset($file))
        <div class="message_not_found">
            <span>Ничего не найдено</span>Владелец удалил файлы либо закрыл к ним доступ или в ссылке опечатка.
        </div>
        @endif
    </main>
@endsection
