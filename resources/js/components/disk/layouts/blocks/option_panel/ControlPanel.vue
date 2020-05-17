<template>
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
        <option-search></option-search>
        <form class="option-delete" action="" id="delete-files" onsubmit="return false;">
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
                    <button class="dropdown-item delete-delete" data-toggle="modal"
                            data-target="#exampleModal" id="asd1">Удалить</button>
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
</template>

<script>
    import OptionSearch from "./search/OptionSearch";
    export default {
        name: "ControlPanel",
        components: {OptionSearch}
    }
</script>

<style scoped>

</style>