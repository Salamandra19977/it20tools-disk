<template>
    <div class="navigate-folder"
         v-show="folderPath">
        <ul class="navigate-folder-links">
            <li class="navigate-folder-links-item"
                v-on:click="setFiles()">
                Мой диск
            </li>
            <li class="navigate-folder-links-item"
                v-for="(link, index) in links"
                v-on:click="openFolder(link)">
                <object
                        type="image/svg+xml"
                        data="img/ic_keyboard_arrow_right.svg">
                </object>
                <span>
                   {{link.name}}
                </span>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "NavigateFolder",
        computed: {
            links() {
                return this.$store.getters['disk/getFolderPath']
            },
            folderPath() {
                let path = this.$store.getters['disk/getFolderPath'];
                if(path.length > 0)
                    return true;
                return false;
            },
        },
        methods: {
            openFolder(obj) {
                this.$store.commit('disk/openFolder',obj);
            },
            setFiles(){
                this.$store.dispatch('disk/initFileFolder')
            },
        },
    }
</script>

<style scoped>
    ul {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .navigate-folder-links {
        display: flex;
        flex-direction: row;
    }
    .navigate-folder-links-item {
        display: flex;
        align-items: center;
        cursor: pointer;
        font-weight: 500;
        font-size: 13px;
        color: #cccccc;
        list-style: none;
    }
    .navigate-folder {
        margin: 29px 0 5px 15px;
    }
</style>