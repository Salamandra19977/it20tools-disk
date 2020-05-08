<template>
    <main>
        <h2 class="main-heading">Доступные мне</h2>
        <div class="main-table">
            <div class="main-table__options">
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
                        <svg data-v-0d5efb88="" width="30" height="30" viewBox="0 0 30 30" fill="none"
                             xmlns="http://www.w3.org/2000/svg"><g data-v-0d5efb88="" id="3. Icons/ic_cloud_download">
                            <mask data-v-0d5efb88="" id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="7"
                                  width="24" height="16">
                                <path data-v-0d5efb88="" id="Icon" fill-rule="evenodd" clip-rule="evenodd"
                                      d="M22.35 13.04C21.67 9.59 18.64 7 15 7C12.11 7 9.6 8.64 8.35 11.04C5.34 11.36 3 13.91 3 17C3 20.31 5.69 23 9 23H22C24.76 23 27 20.76 27 18C27 15.36
                                       24.95 13.22 22.35 13.04ZM20 16L15 21L10 16H13V12H17V16H20Z" fill="white"></path></mask> <g data-v-0d5efb88="" mask="url(#mask0)">
                            <g data-v-0d5efb88="" id="Icon Color"><rect data-v-0d5efb88="" id="Gray 85" x="2" y="2" width="26" height="26" fill="#D8D8D8"></rect></g></g></g>
                        </svg>
                    </button>
                    <button class="option-delete__delete" data-toggle="modal" data-target="#option-delete-modal">
                        <object
                                type="image/svg+xml"
                                data="img/ic_content_copy.svg">

                        </object>
                    </button>
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
                        <span>Дата предоставлени доступа</span>
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
                </div>
                <div class="table-body">
                    <div class="table-item table-item__file">
                        <div class="name-data">
                            <i class="file"></i><span>aпк.doc</span>
                        </div>
                        <div class="owner-data">
                            <span>Kany West</span>
                        </div>
                        <div class="date-data">
                            <span>17.01.2020</span>
                        </div>
                    </div>
                    <div class="table-item table-item__file">
                        <div class="name-data">
                            <i class="file"></i><span>1_файл.jpg</span>
                        </div>
                        <div class="owner-data">
                            <span>John Kileryn</span>
                        </div>
                        <div class="date-data">
                            <span>15.02.2020</span>
                        </div>
                    </div>
                    <div class="table-item table-item__file">
                        <div class="name-data">
                            <i class="file"></i><span>2.txt</span>
                        </div>
                        <div class="owner-data">
                            <span>Red Bay</span>
                        </div>
                        <div class="date-data">
                            <span>01.01.2020</span>
                        </div>
                    </div>
                    <div class="table-item table-item__file">
                        <div class="name-data">
                            <i class="file"></i><span>3.doc</span>
                        </div>
                        <div class="owner-data">
                            <span>Catch Ces</span>
                        </div>
                        <div class="date-data">
                            <span>10.10.2019</span>
                        </div>
                    </div>
                    <div class="table-item table-item__file">
                        <div class="name-data">
                            <i class="file"></i><span>4.doc</span>
                        </div>
                        <div class="owner-data">
                            <span>Dr Lens</span>
                        </div>
                        <div class="date-data">
                            <span>12.12.2019</span>
                        </div>
                    </div>
                    <div class="table-item table-item__file">
                        <div class="name-data">
                            <i class="file"></i><span>5.doc</span>
                        </div>
                        <div class="owner-data">
                            <span>Festyu Ser</span>
                        </div>
                        <div class="date-data">
                            <span>31.01.2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    export default {
        name: "Index"
    }
</script>

<style scoped>
    main .main-table__options .option-search {
        border-right: 2px solid #f5f5f5;
        padding: 25px 20px 20px 15px;
        width: 72%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }
    main .main-table__table .name, main .main-table__table .name-data {
        width: 67%;
    }
    main .main-table__table .owner, main .main-table__table .owner-data {
        width: 10%;
    }
    main .main-table__table .date, main .main-table__table .date-data {
        width: 23%;
    }
</style>