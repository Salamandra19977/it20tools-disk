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
                <div class="dots-right" role="button" id="item0dots" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                    <div class="dropdown-menu" aria-labelledby="item0dots">
<!--                         <a class="dropdown-item delete-delete" href="#">Удалить</a>
                        <div class="dropdown-item delete-share"><span>Открыть доступ</span></div>
                        <div class="dropdown-item delete-link"><span>Копировать ссылку общего доступа</span></div>
                        <div class="dropdown-item delete-rename"><span>Переименовать</span></div> -->
                        <div class="dropdown-item delete-star" @click="deleteFolderFromFavorites(folder)"><span>Удалить из избранных</span></div>
<!--                         <div class="dropdown-item delete-mkcopy"><span>Создать копию</span></div>
                        <div class="dropdown-item delete-move"><span>Переместить</span></div>
                        <div class="dropdown-item delete-download bordered"><span>Скачать</span></div>
                        <div class="dropdown-item delete-rm bordered"><span>Удалить</span></div> -->
                    </div>
                </div>    
                <!-- <button @click="deleteFolderFromFavorites(folder)">Del</button>            -->
            </td>
        </tr>
        <tr class="table-item table-item__file"
            v-for="(file, index) in favoriteFiles"
            v-on:click="selectFile(file)"
            v-bind:class="{ selected: checkSelectFile(file)}"
            :file=file
            >
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
                <span>{{file.size | convertSize}}</span>
                <div class="dots-right" role="button" id="item0dots" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                    <div class="dropdown-menu" aria-labelledby="item0dots">
                        <!-- <a class="dropdown-item delete-delete" href="#">Удалить</a> -->
<!--                         <div class="dropdown-item delete-share"><span>Открыть доступ</span></div>
                        <div class="dropdown-item delete-link"><span>Копировать ссылку общего доступа</span></div>
                        <div class="dropdown-item delete-rename"><span>Переименовать</span></div> -->
                        <div class="dropdown-item delete-star" @click="deleteFileFromFavorites(file)"><span>Удалить из избранных</span></div>
<!--                         <div class="dropdown-item delete-mkcopy"><span>Создать копию</span></div>
                        <div class="dropdown-item delete-move"><span>Переместить</span></div>
                        <div class="dropdown-item delete-download bordered"><span>Скачать</span></div>
                        <div class="dropdown-item delete-rm bordered"><span>Удалить</span></div> -->
                    </div>
                </div>  
                <!-- <button @click="deleteFileFromFavorites(file)">Del</button> -->
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
            favoriteFiles() {
                return this.$store.getters['favorites/getFavoriteFiles']
            },
            favoriteFolders() {
                return this.$store.getters['favorites/getFavoriteFolders']
            },
        },
        methods: {
            deleteFileFromFavorites(obj) {
                const file = obj
                axios.put("/favorites/${file.id}", {file: file})
                .then(response => {
                    console.log(response)
                    if(response.status == 200){
                        this.$store.dispatch('favorites/initFileFolder')               
                    }
                })
                console.log(file.id)
            },
            deleteFolderFromFavorites(obj) {
                const folder = obj
                axios.put("/favorites/${folder.id}", {folder: folder})
                .then(response => {
                    console.log(response)
                    if(response.status == 200){
                        this.$store.dispatch('favorites/initFileFolder')               
                    }
                })
                console.log(folder.id);               
            },
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
        },
        // mounted() {
        //     this.$store.subscribe((mutation, state) => {
        //         switch(mutation.type){
        //             case 'favoriteFiles':
        //             const FavoriteFiles = state.FavoriteFiles
        //         }
        //     })
        // }

    }
</script>

<style scoped>
    .selected {
        background-color: #f5f5f5 !important;;
    }
</style>