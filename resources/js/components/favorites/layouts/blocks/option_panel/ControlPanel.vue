<template>
    <div class="main-table main-table-disk">
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
                <div class="option-search__field-container">
                    <input type="text" class="option-search__field" placeholder="Поиск на Диске">
                    <span></span>
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
                </div>
            </form>
            <form class="option-delete" action="" id="delete-files" onsubmit="return false;">
                <button class="option-delete__link" data-toggle="modal" data-target="#option-return-modal">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="option-linkk1" mask-type="alpha" maskUnits="userSpaceOnUse" x="5" y="10"
                            width="20" height="10">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.9 15C6.9 13.29 8.29 11.9 10 11.9H14V10H10C7.24 10 5 12.24 5 15C5 17.76 7.24 20 10 20H14V18.1H10C8.29 18.1 6.9 16.71 6.9 15ZM11 16H19V14H11V16ZM20 10H16V11.9H20C21.71 11.9 23.1 13.29 23.1 15C23.1 16.71 21.71 18.1 20 18.1H16V20H20C22.76 20 25 17.76 25 15C25 12.24 22.76 10 20 10Z"
                                fill="white" />
                        </mask>
                        <g mask="url(#option-linkk1)">
                            <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                        </g>
                    </svg>
                </button>
                <button class="option-delete__download">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="3. Icons/ic_cloud_download">
                            <mask id="option-downloadd" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="7"
                                width="24" height="16">
                                <path id="Icon" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22.35 13.04C21.67 9.59 18.64 7 15 7C12.11 7 9.6 8.64 8.35 11.04C5.34 11.36 3 13.91 3 17C3 20.31 5.69 23 9 23H22C24.76 23 27 20.76 27 18C27 15.36 24.95 13.22 22.35 13.04ZM20 16L15 21L10 16H13V12H17V16H20Z"
                                    fill="white" />
                            </mask>
                            <g mask="url(#option-downloadd)">
                                <g id="Icon Color">
                                    <rect id="Gray 85" x="2" y="2" width="26" height="26" fill="#999999" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </button>
                <button class="option-delete__rename">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="option-renamaem" mask-type="alpha" maskUnits="userSpaceOnUse" x="6" y="6"
                            width="19" height="19">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6 20.2525V24.0025H9.75L20.81 12.9425L17.06 9.1925L6 20.2525ZM23.71 10.0425C24.1 9.6525 24.1 9.0225 23.71 8.6325L21.37 6.2925C20.98 5.9025 20.35 5.9025 19.96 6.2925L18.13 8.1225L21.88 11.8725L23.71 10.0425Z"
                                fill="white" />
                        </mask>
                        <g mask="url(#option-renamaem)">
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
                    <div class="dropdown-menu" aria-labelledby="deleteDots" role="menu">
                        <!-- <div class="dropdown-item delete-share"><span>Открыть доступ</span></div>
                        <div class="dropdown-item delete-link"><span>Копировать ссылку общего доступа</span></div>
                        <div class="dropdown-item delete-rename"><span>Переименовать</span></div> -->
                        <div class="dropdown-item delete-star" @click="deleteItemsFromFavorites([getFavoriteSelectedFiles, getFavoriteSelectedFolders])"><span>Удалить из избранных</span></div>
<!--                         <div class="dropdown-item delete-mkcopy"><span>Создать копию</span></div>
                        <div class="dropdown-item delete-move"><span>Переместить</span></div>
                        <div class="dropdown-item delete-download bordered"><span>Скачать</span></div>
                        <div class="dropdown-item delete-rm bordered"><span>Удалить</span></div> -->
                    </div>
                </div>
                <!-- <button @click="deleteItemsFromFavorites([getFavoriteSelectedFiles, getFavoriteSelectedFolders])">Del</button> -->
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
    </div>
</template>

<script>
    import OptionSearch from "./search/OptionSearch";
    export default {
        name: "ControlPanel",
        components: {OptionSearch},
        computed: {
            getFavoriteSelectedFiles() {
                return this.$store.getters['favorites/getFavoriteSelectedFiles']
            },
            getFavoriteSelectedFolders() {
                return this.$store.getters['favorites/getFavoriteSelectedFolders']
            },
        },
        methods: {
            deleteItemsFromFavorites(obj) {
                const itemsArr = obj
  
                if (itemsArr[0].length > 0 || itemsArr[1].length > 0) {
                    axios.put("/favorites/itemsFavorite", {itemsFavorite: itemsArr})
                    .then(response => {
                        if(response.status == 200){
                            this.$store.dispatch('favorites/initFileFolder')   
                            // this.commit('favorites/files', response.data.files)            
                            // this.commit('favorites/folders', response.data.folders)            
                        }
                    }) 
                }                                                 
            },
        },
    }
</script>

<style scoped>

</style>