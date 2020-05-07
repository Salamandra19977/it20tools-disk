<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500,900&display=swap&subset=cyrillic"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet"/> -->
    <!-- <script src="{{ asset('js/app.js') }}" type="text/javascript"></script> -->
</head>

<body>
    <!-- modals -->
    <div class="modal fade" id="option-delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Удалить навсегда?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Вы уверены, что хотите удалить выбранный объект?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Удалить</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="option-return-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Восстановить?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Восстановить выбранный объект?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Да</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /modals/ -->
    <header class="header">
        <a href="#" class="nav-brand">
            <img src="img/logo_foot 2.png" alt="header-logo">
            <i>
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="nav-brand-arrow" mask-type="alpha" maskUnits="userSpaceOnUse" x="11" y="9" width="8"
                        height="12">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M18.41 19.59L13.83 15L18.41 10.41L17 9L11 15L17 21L18.41 19.59Z" fill="white" />
                    </mask>
                    <g mask="url(#nav-brand-arrow)">
                        <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                    </g>
                </svg>
            </i>
        </a>
        <div class="user-info">
            <span class="user-info__name">Анна Кононенко</span>
            <img src="img/avatar.jpg" alt="user-img" class="user-info__img">
            <div class="user-info__dropdown">
                <span role="button" id="user-info__list" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="userprofile-arrow" mask-type="alpha" maskUnits="userSpaceOnUse" x="9" y="11"
                            width="12" height="8">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.41 11L15 15.58L19.59 11L21 12.41L15 18.41L9 12.41L10.41 11Z" fill="white" />
                        </mask>
                        <g mask="url(#userprofile-arrow)">
                            <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                        </g>
                    </svg>
                </span>
                <div class="dropdown-menu" aria-labelledby="user-info__list">
                    <a class="dropdown-item" href="#">Профиль</a>
                    <a class="dropdown-item" href="#">Настройки</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Выйти</a>
                </div>
            </div>
        </div>
    </header>
    <div class="main-content">
        <aside>
            <ul class="nav" id="nav-accordion">
                <li class="nav__item">
                    <div class="nav__item-heading" id="navitem-1" data-toggle="collapse" data-target="#navcollapse-1"
                        aria-expanded="false
                    aria-controls=" navcollapse-1">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="nav-home" mask-type="alpha" maskUnits="userSpaceOnUse" x="5" y="5" width="20"
                                height="17">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13 22V16H17V22H22V14H25L15 5L5 14H8V22H13Z" fill="white" />
                            </mask>
                            <g mask="url(#nav-home)">
                                <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                            </g>
                        </svg>
                        <span>Главная страница</span>
                    </div>
                    <ul class="nav__item-container collapse" id="navcollapse-1" class="collapse show"
                        aria-labelledby="navitem-1" data-parent="#nav-accordion">
                        <li>
                            lorem
                        </li>
                        <li>
                            ipsum
                        </li>
                    </ul>
                </li>
                <li class="nav__item">
                    <div class="nav__item-heading" id="navitem-2" data-toggle="collapse" data-target="#navcollapse-2"
                        aria-expanded="true" aria-controls="navcollapse-2">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="3. Icons/ic_cloud_download">
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="7" width="24"
                                    height="16">
                                    <path id="Icon" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.35 13.04C21.67 9.59 18.64 7 15 7C12.11 7 9.6 8.64 8.35 11.04C5.34 11.36 3 13.91 3 17C3 20.31 5.69 23 9 23H22C24.76 23 27 20.76 27 18C27 15.36 24.95 13.22 22.35 13.04ZM20 16L15 21L10 16H13V12H17V16H20Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#mask0)">
                                    <g id="Icon Color">
                                        <rect id="Gray 85" x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>Диск</span>
                    </div>
                    <ul class="nav__item-container collapse show" id="navcollapse-2" aria-labelledby="navitem-2"
                        data-parent="#nav-accordion">
                        <li>
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="nav-contacts1" mask-type="alpha" maskUnits="userSpaceOnUse" x="4" y="8"
                                    width="22" height="14">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19 14C20.66 14 21.99 12.66 21.99 11C21.99 9.34 20.66 8 19 8C17.34 8 16 9.34 16 11C16 12.66 17.34 14 19 14ZM11 14C12.66 14 13.99 12.66 13.99 11C13.99 9.34 12.66 8 11 8C9.34 8 8 9.34 8 11C8 12.66 9.34 14 11 14ZM11 16C8.67 16 4 17.17 4 19.5V22H18V19.5C18 17.17 13.33 16 11 16ZM19 16C18.71 16 18.38 16.02 18.03 16.05C19.19 16.89 20 18.02 20 19.5V22H26V19.5C26 17.17 21.33 16 19 16Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#nav-contacts1)">
                                    <rect x="2" y="2" width="26" height="26" fill="#999999" />
                                </g>
                            </svg>
                            <span>Доступные</span>
                        </li>
                        <li>
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="nav-recent1" mask-type="alpha" maskUnits="userSpaceOnUse" x="5" y="5"
                                    width="20" height="20">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15 5C9.5 5 5 9.5 5 15C5 20.5 9.5 25 15 25C20.5 25 25 20.5 25 15C25 9.5 20.5 5 15 5ZM19.2 19.2L14 16V10H15.5V15.2L20 17.9L19.2 19.2Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#nav-recent1)">
                                    <rect x="2" y="2" width="26" height="26" fill="#999999" />
                                </g>
                            </svg>
                            <span>Недавние</span>
                        </li>
                        <li>
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="nav-star" mask-type="alpha" maskUnits="userSpaceOnUse" x="5" y="5" width="20"
                                    height="19">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15 20.27L21.18 24L19.54 16.97L25 12.24L17.81 11.63L15 5L12.19 11.63L5 12.24L10.46 16.97L8.82 24L15 20.27Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#nav-star)">
                                    <rect x="2" y="2" width="26" height="26" fill="#999999" />
                                </g>
                            </svg>
                            <span>Избранное</span>
                        </li>
                        <li>
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="nav-delete" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6"
                                    width="14" height="18">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9 22C9 23.1 9.9 24 11 24H19C20.1 24 21 23.1 21 22V10H9V22ZM22 7H18.5L17.5 6H12.5L11.5 7H8V9H22V7Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#nav-delete)">
                                    <rect x="2" y="2" width="26" height="26" fill="#1875F0" />
                                </g>
                            </svg>
                            <span>Корзина</span>
                        </li>
                    </ul>
                </li>
                <li class="nav__item">
                    <div class="nav__item-heading" id="navitem-3" data-toggle="collapse" data-target="#navcollapse-3"
                        aria-expanded="false" aria-controls="navcollapse-3">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="nav-mail" mask-type="alpha" maskUnits="userSpaceOnUse" x="5" y="7" width="20"
                                height="16">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M23 7H7C5.9 7 5.01 7.9 5.01 9L5 21C5 22.1 5.9 23 7 23H23C24.1 23 25 22.1 25 21V9C25 7.9 24.1 7 23 7ZM23 11L15 16L7 11V9L15 14L23 9V11Z"
                                    fill="white" />
                            </mask>
                            <g mask="url(#nav-mail)">
                                <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                            </g>
                        </svg>
                        <span>Почта</span>
                    </div>
                    <ul class="nav__item-container collapse" id="navcollapse-3" aria-labelledby="navitem-3"
                        data-parent="#nav-accordion">
                        <li>
                            lorem
                        </li>
                        <li>
                            ipsum
                        </li>
                    </ul>
                </li>
                <li class="nav__item">
                    <div class="nav__item-heading" id="navitem-4" data-toggle="collapse" data-target="#navcollapse-4"
                        aria-expanded="false" aria-controls="navcollapse-4">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="nav-calendar" mask-type="alpha" maskUnits="userSpaceOnUse" x="6" y="5" width="18"
                                height="20">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22 7H21V5H19V7H11V5H9V7H8C6.89 7 6.01 7.9 6.01 9L6 23C6 24.1 6.89 25 8 25H22C23.1 25 24 24.1 24 23V9C24 7.9 23.1 7 22 7ZM22 23H8V12H22V23ZM10 14H15V19H10V14Z"
                                    fill="white" />
                            </mask>
                            <g mask="url(#nav-calendar)">
                                <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                            </g>
                        </svg>
                        <span>Календарь</span>
                    </div>
                    <ul class="nav__item-container collapse" id="navcollapse-4" aria-labelledby="navitem-4"
                        data-parent="#nav-accordion">
                        <li>
                            lorem
                        </li>
                        <li>
                            ipsum
                        </li>
                    </ul>
                </li>
                <li class="nav__item">
                    <div class="nav__item-heading" id="navitem-5" data-toggle="collapse" data-target="#navcollapse-5"
                        aria-expanded="false" aria-controls="navcollapse-5">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="nav-photo" mask-type="alpha" maskUnits="userSpaceOnUse" x="5" y="6" width="20"
                                height="18">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.17 8L12 6H18L19.83 8H23C24.1 8 25 8.9 25 10V22C25 23.1 24.1 24 23 24H7C5.9 24 5 23.1 5 22V10C5 8.9 5.9 8 7 8H10.17ZM10 16C10 18.76 12.24 21 15 21C17.76 21 20 18.76 20 16C20 13.24 17.76 11 15 11C12.24 11 10 13.24 10 16Z"
                                    fill="white" />
                            </mask>
                            <g mask="url(#nav-photo)">
                                <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                            </g>
                        </svg>
                        <span>Фотографии</span>
                    </div>
                    <ul class="nav__item-container collapse" id="navcollapse-5" aria-labelledby="navitem-5"
                        data-parent="#nav-accordion">
                        <li>
                            lorem
                        </li>
                        <li>
                            ipsum
                        </li>
                    </ul>
                </li>
                <li class="nav__item">
                    <div class="nav__item-heading" id="navitem-6" data-toggle="collapse" data-target="#navcollapse-6"
                        aria-expanded="false" aria-controls="navcollapse-6">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="nav-contacts2" mask-type="alpha" maskUnits="userSpaceOnUse" x="4" y="8" width="22"
                                height="14">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19 14C20.66 14 21.99 12.66 21.99 11C21.99 9.34 20.66 8 19 8C17.34 8 16 9.34 16 11C16 12.66 17.34 14 19 14ZM11 14C12.66 14 13.99 12.66 13.99 11C13.99 9.34 12.66 8 11 8C9.34 8 8 9.34 8 11C8 12.66 9.34 14 11 14ZM11 16C8.67 16 4 17.17 4 19.5V22H18V19.5C18 17.17 13.33 16 11 16ZM19 16C18.71 16 18.38 16.02 18.03 16.05C19.19 16.89 20 18.02 20 19.5V22H26V19.5C26 17.17 21.33 16 19 16Z"
                                    fill="white" />
                            </mask>
                            <g mask="url(#nav-contacts2)">
                                <rect x="2" y="2" width="26" height="26" fill="#999999" />
                            </g>
                        </svg>
                        <span>Контакты</span>
                    </div>
                    <ul class="nav__item-container collapse" id="navcollapse-6" aria-labelledby="navitem-6"
                        data-parent="#nav-accordion">
                        <li>
                            lorem
                        </li>
                        <li>
                            ipsum
                        </li>
                    </ul>
                </li>
                <li class="nav__item">
                    <div class="nav__item-heading" id="navitem-7" data-toggle="collapse" data-target="#navcollapse-7"
                        aria-expanded="false" aria-controls="navcollapse-7">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="nav-business" mask-type="alpha" maskUnits="userSpaceOnUse" x="5" y="6" width="20"
                                height="18">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13 19V18H6.01L6 22C6 23.11 6.89 24 8 24H22C23.11 24 24 23.11 24 22V18H17V19H13ZM23 10H18.99V8L16.99 6H12.99L10.99 8V10H7C5.9 10 5 10.9 5 12V15C5 16.11 5.89 17 7 17H13V15H17V17H23C24.1 17 25 16.1 25 15V12C25 10.9 24.1 10 23 10ZM17 10H13V8H17V10Z"
                                    fill="white" />
                            </mask>
                            <g mask="url(#nav-business)">
                                <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                            </g>
                        </svg>
                        <span>Управление</span>
                    </div>
                    <ul class="nav__item-container collapse" id="navcollapse-7" aria-labelledby="navitem-7"
                        data-parent="#nav-accordion">
                        <li>
                            lorem
                        </li>
                        <li>
                            ipsum
                        </li>
                    </ul>
                </li>
                <li class="nav__item">

                </li>
            </ul>
            <div class="disk">
                <img src="img/disk-flag.png" alt="flag">
                <div class="disk-usage">
                    <p>Хранилище Disk</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 42%" aria-valuenow="42"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p>Занято <span>6.25 ГБ</span> из <span>15 ГБ </span><span>(42%)</span></p>
                </div>
            </div>
        </aside>
        <main>

            <div id="app">
                
                <!-- <breadcrumb></breadcrumb> -->
                <h2 class="main-heading">Моя работа любимия</h2>
                
                <search></search>

                <!-- <selected></selected> -->
            </div>

            <div class="main-table">
                <div class="main-table__options">
                    <div class="option-create">
                        <a href="#" class="option-create__btn" role="button" id="createDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Создать</a>
                        <div class="dropdown-menu" aria-labelledby="createDropdown">
                            <a class="dropdown-item add-folder" href="#">Папку</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item upload-file" href="#">Загрузить файлы</a>
                            <a class="dropdown-item upload-folder" href="#">Загрузить папку</a>
                        </div>
                    </div>
                    <form action="" class="option-search" id="search-files">
                        <input type="text" class="option-search__field" placeholder="Поиск на Диске">
                        <button type="submit" class="option-search__btn">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="options-search" mask-type="alpha" maskUnits="userSpaceOnUse" x="6" y="6"
                                    width="18" height="18">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.5 17H17.71L17.43 16.73C18.41 15.59 19 14.11 19 12.5C19 8.91 16.09 6 12.5 6C8.91 6 6 8.91 6 12.5C6 16.09 8.91 19 12.5 19C14.11 19 15.59 18.41 16.73 17.43L17 17.71V18.5L22 23.49L23.49 22L18.5 17ZM12.5 17C10.01 17 8 14.99 8 12.5C8 10.01 10.01 8 12.5 8C14.99 8 17 10.01 17 12.5C17 14.99 14.99 17 12.5 17Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#options-search)">
                                    <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                                </g>
                            </svg>
                        </button>
                    </form>
                    <form class="option-delete" action="" id="delete-files" onsubmit="return false;">
                        <button class="option-delete__return" data-toggle="modal" data-target="#option-return-modal">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="option-return" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="4"
                                    width="16" height="20">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15 8V4L10 9L15 14V10C18.31 10 21 12.69 21 16C21 19.31 18.31 22 15 22C11.69 22 9 19.31 9 16H7C7 20.42 10.58 24 15 24C19.42 24 23 20.42 23 16C23 11.58 19.42 8 15 8Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#option-return)">
                                    <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                                </g>
                            </svg>
                        </button>
                        <button class="option-delete__delete" data-toggle="modal" data-target="#option-delete-modal">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="option-delete" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6"
                                    width="14" height="18">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9 22C9 23.1 9.9 24 11 24H19C20.1 24 21 23.1 21 22V10H9V22ZM22 7H18.5L17.5 6H12.5L11.5 7H8V9H22V7Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#option-delete)">
                                    <rect x="2" y="2" width="26" height="26" fill="#1875F0" />
                                </g>
                            </svg>
                        </button>
                        <div class="option-delete__dots" role="button" id="deleteDots" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="option-dots" mask-type="alpha" maskUnits="userSpaceOnUse" x="13" y="7"
                                    width="4" height="16">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15 11C16.1 11 17 10.1 17 9C17 7.9 16.1 7 15 7C13.9 7 13 7.9 13 9C13 10.1 13.9 11 15 11ZM15 13C13.9 13 13 13.9 13 15C13 16.1 13.9 17 15 17C16.1 17 17 16.1 17 15C17 13.9 16.1 13 15 13ZM15 19C13.9 19 13 19.9 13 21C13 22.1 13.9 23 15 23C16.1 23 17 22.1 17 21C17 19.9 16.1 19 15 19Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#option-dots)">
                                    <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                                </g>
                            </svg>
                            <div class="dropdown-menu" aria-labelledby="deleteDots">
                                <a class="dropdown-item delete-return" href="#" data-toggle="modal"
                                    data-target="#exampleModal">Восстановить</a>
                                <button class="dropdown-item delete-delete" data-toggle="modal"
                                    data-target="#exampleModal" id="asd1">Удалить навсегда</button>
                            </div>
                        </div>
                    </form>
                    <div class="option-view">
                        <div class="option-view__bulleted">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.12">
                                    <mask id="option-view-bulleted" mask-type="alpha" maskUnits="userSpaceOnUse" x="6"
                                        y="8" width="19" height="15">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.5 14C6.67 14 6 14.67 6 15.5C6 16.33 6.67 17 7.5 17C8.33 17 9 16.33 9 15.5C9 14.67 8.33 14 7.5 14ZM7.5 8C6.67 8 6 8.67 6 9.5C6 10.33 6.67 11 7.5 11C8.33 11 9 10.33 9 9.5C9 8.67 8.33 8 7.5 8ZM7.5 20.17C6.76 20.17 6.17 20.77 6.17 21.5C6.17 22.23 6.77 22.83 7.5 22.83C8.23 22.83 8.83 22.23 8.83 21.5C8.83 20.77 8.24 20.17 7.5 20.17ZM10.5 22.5H24.5V20.5H10.5V22.5ZM10.5 16.5H24.5V14.5H10.5V16.5ZM10.5 8.5V10.5H24.5V8.5H10.5Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#option-view-bulleted)">
                                        <rect x="2" y="2" width="26" height="26" fill="#333333" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="option-view__module">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="option-view-module" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                                    width="16" height="16">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7 11H11V7H7V11ZM13 23H17V19H13V23ZM7 23H11V19H7V23ZM7 17H11V13H7V17ZM13 17H17V13H13V17ZM19 7V11H23V7H19ZM13 11H17V7H13V11ZM19 17H23V13H19V17ZM19 23H23V19H19V23Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#option-view-module)">
                                    <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                                </g>
                            </svg>
                        </div>
                        <div class="option-view__apps">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="option-view-apps" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="9"
                                    width="17" height="13">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7 15H12V9H7V15ZM7 22H12V16H7V22ZM13 22H18V16H13V22ZM19 22H24V16H19V22ZM13 15H18V9H13V15ZM19 9V15H24V9H19Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#option-view-apps)">
                                    <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="main-table__table">
                    <div class="table-head">
                        <div class="name">
                            <span>Название</span>
                            <i class="name-asc">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="name-asc" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                                        width="16" height="16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M23 15L21.59 13.59L16 19.17V7H14V19.17L8.42 13.58L7 15L15 23L23 15Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#name-asc)">
                                        <rect x="2" y="2" width="26" height="26" fill="#666666" />
                                    </g>
                                </svg>
                            </i>
                            <i class="name-desc">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="name-desc" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                                        width="16" height="16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7 15L8.41 16.41L14 10.83V23H16V10.83L21.58 16.42L23 15L15 7L7 15Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#name-desc)">
                                        <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                                    </g>
                                </svg>
                            </i>
                        </div>
                        <div class="owner">
                            <span>Владелец</span>
                        </div>
                        <div class="date">
                            <span>Дата</span>
                            <i class="date-asc">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="date-asc" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                                        width="16" height="16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M23 15L21.59 13.59L16 19.17V7H14V19.17L8.42 13.58L7 15L15 23L23 15Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#date-asc)">
                                        <rect x="2" y="2" width="26" height="26" fill="#666666" />
                                    </g>
                                </svg>
                            </i>
                            <i class="date-desc">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="date-desc" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                                        width="16" height="16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7 15L8.41 16.41L14 10.83V23H16V10.83L21.58 16.42L23 15L15 7L7 15Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#date-desc)">
                                        <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                                    </g>
                                </svg>
                            </i>
                        </div>
                        <div class="time">
                            <span>Время</span>
                        </div>
                        <div class="size">
                            <span>Размер</span>
                            <i class="size-asc">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="size-asc" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                                        width="16" height="16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M23 15L21.59 13.59L16 19.17V7H14V19.17L8.42 13.58L7 15L15 23L23 15Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#size-asc)">
                                        <rect x="2" y="2" width="26" height="26" fill="#666666" />
                                    </g>
                                </svg>
                            </i>
                            <i class="size-desc">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="size-desc" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                                        width="16" height="16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7 15L8.41 16.41L14 10.83V23H16V10.83L21.58 16.42L23 15L15 7L7 15Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#size-desc)">
                                        <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                                    </g>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="table-body">
                        <div class="table-item table-item__folder">
                            <div class="name-data">
                                <i class="folder"></i><span>Папка</span>
                            </div>
                            <div class="owner-data">
                                <span>The Basics Of Buyin…</span>
                            </div>
                            <div class="date-data">
                                <span>17.02.2020</span>
                            </div>
                            <div class="time-data">
                                <span>16:11</span>
                            </div>
                            <div class="size-data">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="table-item table-item__file">
                            <div class="name-data">
                                <i class="file"></i><span>1_файл.jpg</span>
                            </div>
                            <div class="owner-data">
                                <span>Astronomy Or Astrology</span>
                            </div>
                            <div class="date-data">
                                <span>15.01.2019</span>
                            </div>
                            <div class="time-data">
                                <span>17:15</span>
                            </div>
                            <div class="size-data">
                                <span>342.86 MB</span>
                            </div>
                            <div class="dots-right" role="button" id="item0dots" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="dropdown-menu" aria-labelledby="item0dots">
                                    <a class="dropdown-item delete-return" href="#">Восстановить</a>
                                    <a class="dropdown-item delete-delete" href="#">Удалить навсегда</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-item table-item__file">
                            <div class="name-data">
                                <i class="file"></i><span>2.txt</span>
                            </div>
                            <div class="owner-data">
                                <span>Pictures In The Sky</span>
                            </div>
                            <div class="date-data">
                                <span>01.01.2020</span>
                            </div>
                            <div class="time-data">
                                <span>00:00</span>
                            </div>
                            <div class="size-data">
                                <span>392.26 MB</span>
                            </div>
                            <div class="dots-right" role="button" id="item1dots" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="dropdown-menu" aria-labelledby="item1dots">
                                    <a class="dropdown-item delete-return" href="#">Восстановить</a>
                                    <a class="dropdown-item delete-delete" href="#">Удалить навсегда</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-item table-item__file">
                            <div class="name-data">
                                <i class="file"></i><span>3.doc</span>
                            </div>
                            <div class="owner-data">
                                <span>Moon Fever</span>
                            </div>
                            <div class="date-data">
                                <span>02.02.2019</span>
                            </div>
                            <div class="time-data">
                                <span>01:15</span>
                            </div>
                            <div class="size-data">
                                <span>25.27 MB</span>
                            </div>
                            <div class="dots-right" role="button" id="item2dots" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="dropdown-menu" aria-labelledby="item2dots">
                                    <a class="dropdown-item delete-return" href="#">Восстановить</a>
                                    <a class="dropdown-item delete-delete" href="#">Удалить навсегда</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-item table-item__file">
                            <div class="name-data">
                                <i class="file"></i><span>4.doc</span>
                            </div>
                            <div class="owner-data">
                                <span>Moon Fever</span>
                            </div>
                            <div class="date-data">
                                <span>05.05.2020</span>
                            </div>
                            <div class="time-data">
                                <span>12:00</span>
                            </div>
                            <div class="size-data">
                                <span>25.27 MB</span>
                            </div>
                            <div class="dots-right" role="button" id="item3dots" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="dropdown-menu" aria-labelledby="item3dots">
                                    <a class="dropdown-item delete-return" href="#">Восстановить</a>
                                    <a class="dropdown-item delete-delete" href="#">Удалить навсегда</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-item table-item__file">
                            <div class="name-data">
                                <i class="file"></i><span>5.doc</span>
                            </div>
                            <div class="owner-data">
                                <span>Space The Final Frontier</span>
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
        </main>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo-block">
                <a href="#"><img src="img/logo_foot 2.png" alt="footer-logo"></a>
                <p class="rights">Все права защищены</p>
                <p>© OOO «IT 2.0»</p>
            </div>
            <div class="footer-tools-block">
                <h3>Инструменты</h3>
                <ul>
                    <li><a href="#">Диск</a></li>
                    <li><a href="#">Календарь</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">Почта</a></li>
                    <li><a href="#">Фото</a></li>
                </ul>
            </div>
            <div class="footer-contacts-block">
                <h3>Контакты</h3>
                <div class="contacts">
                    <span class="number">+38095 900 38 00</span>
                    <span class="mail">mail@aiti20.com</span>
                </div>
                <div class="contacts-line"></div>
                <div class="social">
                    <a href="#" class="facebook">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="footer-facebook" mask-type="alpha" maskUnits="userSpaceOnUse" x="11" y="6"
                                width="9" height="18">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.8416 24V15.7891H19.4981L19.8929 12.591H16.8416V10.5469C16.8416 9.62225 17.0892 8.98957 18.3673 8.98957H20V6.12514C19.719 6.08343 18.7487 6 17.6245 6C15.2691 6 13.6632 7.49479 13.6632 10.2341V12.5979H11V15.7961H13.6632V24H16.8416Z"
                                    fill="white" />
                            </mask>
                            <g mask="url(#footer-facebook)">
                                <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                            </g>
                        </svg>
                    </a>
                    <a href="#" class="twitter">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="footer-twitter" mask-type="alpha" maskUnits="userSpaceOnUse" x="6" y="8"
                                width="18" height="15">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24 9.77519C23.3378 10.0769 22.6266 10.2806 21.8788 10.3712C22.6412 9.90269 23.2269 9.16077 23.5032 8.27692C22.7892 8.71019 21.9992 9.02635 21.1581 9.19538C20.4841 8.45981 19.5242 8 18.4614 8C16.4218 8 14.7693 9.695 14.7693 11.7863C14.7693 12.0829 14.8014 12.3725 14.8644 12.6494C11.7952 12.4913 9.07427 10.9838 7.25244 8.69288C6.93511 9.2525 6.75281 9.90269 6.75281 10.5967C6.75281 11.911 7.40491 13.0694 8.39516 13.749C7.79032 13.7288 7.22093 13.5592 6.72299 13.2754C6.72243 13.291 6.72243 13.3077 6.72243 13.3227C6.72243 15.1579 7.99512 16.6885 9.68473 17.0363C9.37528 17.1223 9.04895 17.169 8.71193 17.169C8.47337 17.169 8.24269 17.1454 8.01763 17.1015C8.48687 18.605 9.85128 19.7 11.4666 19.7312C10.2035 20.7465 8.61122 21.3529 6.8811 21.3529C6.5829 21.3529 6.28863 21.335 6 21.2998C7.63391 22.3729 9.57502 23 11.6607 23C18.4529 23 22.168 17.2302 22.168 12.226C22.168 12.0621 22.1635 11.8983 22.1568 11.7356C22.8787 11.2019 23.5043 10.5356 24 9.77519Z"
                                    fill="white" />
                            </mask>
                            <g mask="url(#footer-twitter)">
                                <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                            </g>
                        </svg>
                    </a>
                    <a href="#" class="instagram">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="footer-instagram" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                                width="16" height="16">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22.5796 9.75734C22.3756 9.23184 22.1036 8.78671 21.6584 8.34158C21.2133 7.89645 20.7682 7.62442 20.2427 7.4204C19.7357 7.22257 19.1484 7.08655 18.3014 7.04946L18.287 7.04883C17.4451 7.01223 17.1639 7 15 7C12.8238 7 12.5518 7.00618 11.6986 7.04946C10.8454 7.08655 10.2643 7.22257 9.75734 7.4204C9.23184 7.62442 8.78671 7.89645 8.34158 8.34158C7.89645 8.78671 7.62442 9.23184 7.4204 9.75734C7.22257 10.2643 7.08655 10.8516 7.04946 11.6986L7.04883 11.713C7.01223 12.5549 7 12.8361 7 15C7 17.1762 7.00618 17.4482 7.04946 18.3014C7.08655 19.1546 7.22257 19.7357 7.4204 20.2427C7.62442 20.7682 7.89645 21.2133 8.34158 21.6584C8.78671 22.1036 9.23184 22.3756 9.75734 22.5796C10.2643 22.7774 10.8516 22.9134 11.6986 22.9505L11.713 22.9512C12.5549 22.9878 12.8361 23 15 23C17.1762 23 17.4482 22.9938 18.3014 22.9505C19.1546 22.9134 19.7357 22.7774 20.2427 22.5796C20.7682 22.3756 21.2133 22.1036 21.6584 21.6584C22.1036 21.2133 22.3756 20.7682 22.5796 20.2427C22.7774 19.7357 22.9134 19.1484 22.9505 18.3014L22.9512 18.287C22.9878 17.4451 23 17.1639 23 15C23 12.8238 22.9938 12.5518 22.9505 11.6986C22.9134 10.8454 22.7774 10.2643 22.5796 9.75734ZM20.9548 17.9548C20.9209 18.6667 20.8023 19.0565 20.7006 19.3107C20.5706 19.6497 20.4068 19.8983 20.1525 20.1525C19.8983 20.4068 19.6554 20.565 19.3107 20.7006C19.0508 20.8023 18.6667 20.9209 17.9548 20.9548L17.918 20.9564C17.1731 20.9891 16.9235 21 15 21C13.0452 21 12.8136 20.9944 12.0452 20.9548C11.3333 20.9209 10.9435 20.8023 10.6893 20.7006C10.3503 20.5706 10.1017 20.4068 9.84746 20.1525C9.59322 19.8983 9.43503 19.6554 9.29944 19.3107C9.19774 19.0508 9.0791 18.6667 9.0452 17.9548L9.04386 17.9242C9.011 17.1743 9 16.9233 9 15C9 13.0508 9.00565 12.8136 9.0452 12.0452C9.0791 11.3333 9.19774 10.9435 9.29944 10.6893C9.42938 10.3503 9.59322 10.1017 9.84746 9.84746C10.1017 9.59322 10.3446 9.43503 10.6893 9.29944C10.9492 9.19774 11.3333 9.0791 12.0452 9.0452L12.0758 9.04386C12.8257 9.011 13.0767 9 15 9C16.9492 9 17.1864 9.00565 17.9548 9.0452C18.6667 9.0791 19.0565 9.19774 19.3107 9.29944C19.6497 9.42938 19.8983 9.59322 20.1525 9.84746C20.4068 10.1017 20.565 10.3446 20.7006 10.6893C20.8023 10.9492 20.9209 11.3333 20.9548 12.0452L20.9561 12.0758V12.0758C20.989 12.8257 21 13.0768 21 15C21 16.9306 20.9889 17.1818 20.9558 17.933L20.9548 17.9548ZM20 11C20 11.5523 19.5523 12 19 12C18.4477 12 18 11.5523 18 11C18 10.4477 18.4477 10 19 10C19.5523 10 20 10.4477 20 11ZM15 11C12.7925 11 11 12.7925 11 15C11 17.2075 12.7925 19 15 19C17.2075 19 19 17.2075 19 15C19 12.7925 17.2075 11 15 11ZM13 15C13 16.1065 13.8981 17 15 17C16.1019 17 17 16.1019 17 15C17 13.8935 16.1065 13 15 13C13.8935 13 13 13.8981 13 15Z"
                                    fill="white" />
                            </mask>
                            <g mask="url(#footer-instagram)">
                                <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    
</body>

</html>