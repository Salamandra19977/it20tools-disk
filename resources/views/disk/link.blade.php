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
                            <span>{{ $file->created_at->format('d.m.Y')}}</span>
                        </div>
                        <div class="time-data">
                            <span>{{ $file->created_at->format('H:i')}}</span>
                        </div>
                        <div class="size-data">
                            <span>{{$file->size}} </span>
                            <a class="" href=""
                                onclick="event.preventDefault();
                                document.getElementById('download').submit();">
                                {{ __('  Скачать') }}
                            </a>
                            <form id="download" action="{{route('download',$file->id)}}" method="GET" style="display: none;">
                                <input name="id" value="{{$file->id}}" type="hidden">
                                @csrf
                            </form>
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
