<template>
    <ul class="nav" id="nav-accordion">
                <li class="nav__item">
                    <div class="nav__item-heading" id="navitem-1" data-toggle="collapse" data-target="#navcollapse-1"
                        aria-expanded="false" aria-controls="navcollapse-1">
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
                </li>
                <ul class="nav__item-container collapse" id="navcollapse-1"
                    aria-labelledby="navitem-1" data-parent="#nav-accordion">
                    <li>
                        lorem
                    </li>
                    <li>
                        ipsum
                    </li>
                </ul>
                <li class="nav__item">
                    <div class="nav__item-heading" id="navitem-2" data-toggle="collapse" data-target="#navcollapse-2"
                        aria-expanded="true" aria-controls="navcollapse-2">
                        <router-link tag="a" to="/disk">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
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
                        </router-link>
                    </div>
                </li>
                <ul class="nav__item-container collapse show" id="navcollapse-2" aria-labelledby="navitem-2"
                    data-parent="#nav-accordion">
                    <li class="nav__item-inner">
                        <router-link tag="a" to="/available">
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
                        </router-link>
                    </li>
                    <li class="nav__item-inner">
                        <router-link tag="a" to="/recent">
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
                        </router-link>
                    </li>
                    <li class="nav__item-inner">
                        <router-link tag="a" to="/favorities">
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
                        </router-link>
                    </li>
                    <li class="nav__item-inner">
                        <router-link tag="a" to="/basket">
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
                        </router-link>
                    </li>
                </ul>
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
                </li>
                <ul class="nav__item-container collapse" id="navcollapse-3" aria-labelledby="navitem-3"
                    data-parent="#nav-accordion">
                    <li>
                        lorem
                    </li>
                    <li>
                        ipsum
                    </li>
                </ul>
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
                </li>
                <ul class="nav__item-container collapse" id="navcollapse-4" aria-labelledby="navitem-4"
                    data-parent="#nav-accordion">
                    <li>
                        lorem
                    </li>
                    <li>
                        ipsum
                    </li>
                </ul>
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
                </li>
                <ul class="nav__item-container collapse" id="navcollapse-5" aria-labelledby="navitem-5"
                    data-parent="#nav-accordion">
                    <li>
                        lorem
                    </li>
                    <li>
                        ipsum
                    </li>
                </ul>
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
                </li>
                <ul class="nav__item-container collapse" id="navcollapse-6" aria-labelledby="navitem-6"
                    data-parent="#nav-accordion">
                    <li>
                        lorem
                    </li>
                    <li>
                        ipsum
                    </li>
                </ul>
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
                </li>
                <ul class="nav__item-container collapse" id="navcollapse-7" aria-labelledby="navitem-7"
                    data-parent="#nav-accordion">
                    <li>
                        lorem
                    </li>
                    <li>
                        ipsum
                    </li>
                </ul>
            </ul>
</template>

<script>
    export default {
        name: "Navigation"
    }
</script>

<style scoped>
</style>

