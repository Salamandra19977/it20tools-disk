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
                <button @click="addFolderToFavorites(folder)">{{folder.status_id == 3 ? 'Del' : 'Add fav'}}</button>
            </td>
        </tr>
        <tr class="table-item table-item__file"
            v-for="(file, index) in files"
            v-on:click="selectFile(file)"
            v-bind:class="{ selected: checkSelectFile(file)}"
            :file = file>
            <td class="name-data">
                <i class="file"></i><span>{{file.name}}.{{file.extension}}</span>
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
                <button @click="addFileToFavorites(file)">{{file.status_id == 3 ? 'Del' : 'Add fav'}}</button>
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
</style>
