<template>
    <table class="main-table__table">
        <header-table></header-table>
        <tr class="table-item table-item__folder"
            v-for="(folder, index) in folders"
            v-on:click="selectFolder(folder)"
            v-on:dblclick="openFolder(folder)"
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
                <span>{{folder.size | convertSize}}</span>
                <div class="dots-right" role="button" id="item0dots" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                    <div class="dropdown-menu" aria-labelledby="item0dots">
                        <div class="dropdown-item delete-rename"><span>Переименовать</span></div>
                        <div class="dropdown-item delete-star"><span>Добавить в избранное</span></div>
                        <div class="dropdown-item delete-mkcopy"><span>Создать копию</span></div>
                        <div class="dropdown-item delete-move"><span>Переместить</span></div>
                        <div class="dropdown-item delete-download bordered"><span>Скачать</span></div>
                        <div class="dropdown-item delete-rm bordered"><span>Удалить</span></div>
                    </div>
                </div>
                <button @click="addFolderToFavorites(folder)">{{folder.status_id == 3 ? 'Удалить из избранных' : 'Добавить в избранное'}}</button>
            </td>
        </tr>
        <tr  class="table-item table-item__file"
            v-for="(file, index) in files"
            v-on:click="selectFile(file)"
            v-bind:class="{ selected: checkSelectFile(file)}"
            :file = file>
            <td class="name-data">
                <i class="file"></i><span>{{file.name}}</span>
                <div v-if="file.link != null" class="icon">
                    <svg data-v-0d5efb88="" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask data-v-0d5efb88="" id="nav-contacts1" mask-type="alpha" maskUnits="userSpaceOnUse" x="4" y="8" width="22" height="14">
                            <path data-v-0d5efb88="" fill-rule="evenodd" clip-rule="evenodd" d="M19 14C20.66 14 21.99 12.66 21.99 11C21.99 9.34
                             20.66 8 19 8C17.34 8 16 9.34 16 11C16 12.66 17.34 14 19 14ZM11 14C12.66 14 13.99 12.66 13.99 11C13.99 9.34 12.66
                              8 11 8C9.34 8 8 9.34 8 11C8 12.66 9.34 14 11 14ZM11 16C8.67 16 4 17.17 4 19.5V22H18V19.5C18 17.17 13.33 16 11
                               16ZM19 16C18.71 16 18.38 16.02 18.03 16.05C19.19 16.89 20 18.02 20 19.5V22H26V19.5C26 17.17 21.33 16 19 16Z"
                                  fill="white">
                    </path></mask> <g data-v-0d5efb88="" mask="url(#nav-contacts1)">
                        <rect data-v-0d5efb88="" x="2" y="2" width="26" height="26" fill="#999999">
                        </rect>
                    </g></svg>
                </div>
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
                <span>{{file.size | convertSize}}</span>
                <div class="dots-right" role="button" id="item0dots" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                    <div class="dropdown-menu" aria-labelledby="item0dots">
                        <div class="dropdown-item delete-share"><span>Открыть доступ</span></div>
                        <div class="dropdown-item delete-link"><span>Копировать ссылку общего доступа</span>
                        </div>
                        <div class="dropdown-item delete-rename"><span>Переименовать</span></div>
                        <div class="dropdown-item delete-star"><span>Добавить в избранное</span></div>
                        <div class="dropdown-item delete-mkcopy"><span>Создать копию</span></div>
                        <div class="dropdown-item delete-move"><span>Переместить</span></div>
                        <div class="dropdown-item delete-download bordered"><span>Скачать</span></div>
                        <div class="dropdown-item delete-rm bordered"><span>Удалить</span></div>
                    </div>
                </div>
                <button @click="addFileToFavorites(file)">{{file.status_id == 3 ? 'Удалить из избранных' : 'Добавить в избранное'}}</button>
            </td>
        </tr>
    </table>
</template>

<script>
    import HeaderTable from "./header/HeaderTable";
    export default {
        name: "FullTable",
        components: {HeaderTable},
        computed: {
            files() {
                return this.$store.getters['disk/getFiles']
            },
            folders() {
                return this.$store.getters['disk/getFolders']
            },
        },
        methods: {
            addFileToFavorites(obj) {
                const file = obj
                axios.put("/favorites/${fileId}", {file: file})
                .then(response => {
                    console.log(response)
                    if(response.status == 200){
                        this.$store.dispatch('disk/initFileFolder')               
                    }
                })   
                console.log(file.id);               
            },
            addFolderToFavorites(obj) {
                const folder = obj
                axios.put("/favorites/${folder}", {folder: folder})
                .then(response => {
                    console.log(response)
                    if(response.status == 200){
                        this.$store.dispatch('disk/initFileFolder')               
                    }
                })   
                console.log(folder.id);  
                console.log(folder);   
            },
            selectFolder(obj) {
                this.$store.commit('disk/selectFolder',obj);
            },
            openFolder(obj) {
                this.$store.commit('disk/openFolder',obj);
            },
            selectFile(obj) {
                this.$store.commit('disk/selectFile',obj);
            },
            setFiles(){
                this.$store.dispatch('disk/initFileFolder')
            },
            checkSelectFolder(obj) {
                if(this.$store.state.disk.selectedFolders.indexOf(obj) === -1) {
                    return false;
                }
                return true;
            },
            checkSelectFile(obj) {
                if(this.$store.state.disk.selectedFiles.indexOf(obj) === -1) {
                    return false;
                }
                return true;
            },
        },
        created() {
            this.setFiles();
        }

    }
</script>

<style scoped>
    td {
        display: flex;
        align-items: center;
    }
    .icon {
        display: inline-block;
    }
</style>
