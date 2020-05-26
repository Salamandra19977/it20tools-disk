<template>
    <table class="main-table__table">
        <header-table></header-table>
        <tr  class="table-item table-item__file"
            v-for="(file, index) in files"
            v-on:click="selectFile(file)"
            v-bind:class="{ selected: checkSelectFile(file)}"
            :file = file>
            <td class="name-data">
                <i class="file"></i><span>{{file.file.name}}</span>
            </td>
            <td class="owner-data">
                <span>{{file.file.user.name}}</span>
            </td>
            <td class="date-data">
                <span>{{file.created_at | shortDate}}</span>
                <button @click="downloadFile(file.id)">D</button>
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
                return this.$store.getters['available/getFiles']
            },
        },
        methods: {
            downloadFile(id) {
                axios({
                    url: '/api/disk/download/'+ id,
                    method: 'GET',
                    responseType: 'blob',
                }).then((response) => {
                    var fileURL = window.URL.createObjectURL(new Blob([response.data]));
                    var fileLink = document.createElement('a');
                    let type = response.headers.type
                    let name = response.headers.name
                    fileLink.href = fileURL;
                    fileLink.setAttribute('download', name+'.'+type);
                    document.body.appendChild(fileLink);

                    fileLink.click();
                });
            },
            selectFolder(obj) {
                this.$store.commit('available/selectFolder',obj);
            },
            openFolder(obj) {
                this.$store.commit('available/openFolder',obj);
            },
            selectFile(obj) {
                this.$store.commit('available/selectFile',obj);
            },
            setFiles(){
                this.$store.dispatch('available/initFileFolder')
            },
            checkSelectFolder(obj) {
                if(this.$store.state.available.selectedFolders.indexOf(obj) === -1) {
                    return false;
                }
                return true;
            },
            checkSelectFile(obj) {
                if(this.$store.state.available.selectedFiles.indexOf(obj) === -1) {
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
    .selected {
        background-color: #f5f5f5 !important;
    }
    main .main-table__table .name, main .main-table__table .name-data {
        width: 78%;
    }
    main .main-table__table .owner, main .main-table__table .owner-data {
        width: 10%;
    }
    main .main-table__table .date, main .main-table__table .date-data {
        width: 12%;
    }
</style>