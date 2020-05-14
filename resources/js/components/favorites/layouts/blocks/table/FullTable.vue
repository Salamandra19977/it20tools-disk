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
            <td class="size-id">
                <span>{{file.id}}</span>
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