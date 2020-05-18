<template>
    <table class="main-table__table">
        <header-table></header-table>
        <tr class="table-item table-item__folder"
            v-for="(folder, index) in favoriteFolders"
            v-on:click="selectFolder(folder)"
            v-on:dbclick="openFolder(folder)"
            v-bind:class="{ selected: checkSelectFolder(folder)}"
            :folder = folder>
            <td class="name-data">
                <i class="folder"></i><span>{{folder.name}}</span>
            </td>
            <td class="owner-data">
                <span>{{folder.user.name}}</span>
            </td>
            <td class="date-data">
                <span>{{folder.created_at | shortDate}}</span>
            </td>
            <td class="time-data">
                <span>{{folder.created_at | shortTime}}</span>
            </td>
            <td class="size-data">
                <span>{{folder.size}}</span>
            </td>
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
                        <div class="dropdown-item delete-share"><span>Открыть доступ</span></div>
                        <div class="dropdown-item delete-link"><span>Копировать ссылку общего доступа</span></div>
                        <div class="dropdown-item delete-rename"><span>Переименовать</span></div>
                        <div class="dropdown-item delete-star"><span>Удалить из избранных</span></div>
                        <div class="dropdown-item delete-mkcopy"><span>Создать копию</span></div>
                        <div class="dropdown-item delete-move"><span>Переместить</span></div>
                        <div class="dropdown-item delete-download bordered"><span>Скачать</span></div>
                        <div class="dropdown-item delete-rm bordered"><span>Удалить</span></div>
                    </div>
                </div>
            <td>
                
            </td>
        </tr>
        <tr class="table-item table-item__file"
            v-for="(file, index) in favoriteFiles"
            v-on:click="selectFile(file)"
            v-bind:class="{ selected: checkSelectFile(file)}"
            :file = file>
            <td class="name-data">
                <i class="file"></i><span>{{file.name}}</span>
            </td>
            <td class="owner-data">
                <span>{{file.user.name}}</span>
            </td>
            <td class="date-data">
                <span>{{file.created_at | shortDate}}</span>
            </td>
            <td class="time-data">
                <span>{{file.created_at | shortTime}}</span>
            </td>
            <td class="size-data">
                <span>{{file.size}}</span>
            </td>
            <td>
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
                        <div class="dropdown-item delete-share"><span>Открыть доступ</span></div>
                        <div class="dropdown-item delete-link"><span>Копировать ссылку общего доступа</span></div>
                        <div class="dropdown-item delete-rename"><span>Переименовать</span></div>
                        <div class="dropdown-item delete-star"><span>Удалить из избранных</span></div>
                        <div class="dropdown-item delete-mkcopy"><span>Создать копию</span></div>
                        <div class="dropdown-item delete-move"><span>Переместить</span></div>
                        <div class="dropdown-item delete-download bordered"><span>Скачать</span></div>
                        <div class="dropdown-item delete-rm bordered"><span>Удалить</span></div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</template>

<script>
    import HeaderTable from "./header/HeaderTable";
    export default {
        name: "FullTable",
        components: {HeaderTable},
        data() {
            return {
            //     selectedFavoriteFiles: [],
            //     selectedFavoriteFolders: [],
            }
        },
        computed: {
            favoriteFiles() {
                return this.$store.getters['favorites/getFavoriteFiles']
            },
            favoriteFolders() {
                return this.$store.getters['favorites/getFavoriteFolders']
            },
        },
        methods: {
            selectFolder(obj) {
                this.$store.commit('favorites/selectFavoriteFolders',obj);
            },
            selectFile(obj) {
                this.$store.commit('favorites/selectFavoriteFiles',obj);
            },
            setFavoriteFiles(){
                this.$store.dispatch('favorites/initFileFolder')
            },
            checkSelectFolder(obj) {
                if(this.$store.state.favorites.selectedFavoriteFolders.indexOf(obj) === -1) {
                    return false;
                }
                return true;
            },
            checkSelectFile(obj) {
                if(this.$store.state.favorites.selectedFavoriteFiles.indexOf(obj) === -1) {
                    return false;
                }
                return true;
            },
        },
        created() {
            this.setFavoriteFiles();
        }

    }
</script>

<style scoped>
    .selected {
        background-color: #f5f5f5 !important;;
    }
</style>