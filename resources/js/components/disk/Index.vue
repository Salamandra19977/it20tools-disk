<template>
    <main>
        <add-items></add-items>
        <copy-link></copy-link>
        <open-access></open-access>
        <navigate-folder></navigate-folder>
        <h2 class="main-heading">{{nameFolder.name}}</h2>
        <div class="main-table main-table-disk">
            <control-panel></control-panel>
            <full-table></full-table>
        </div>
    </main>
</template>

<script>
    import ControlPanel from "./layouts/blocks/option_panel/ControlPanel";
    import FullTable from "./layouts/blocks/table/FullTable";
    import NavigateFolder from "./layouts/blocks/navigateFolder/NavigateFolder";
    import AddItems from "../layouts/blocks/modals/disk/AddItems";
    import CopyLink from "../layouts/blocks/modals/disk/CopyLink";
    import OpenAccess from "../layouts/blocks/modals/disk/OpenAccess";
    export default {
        name: "Index",
        components: {OpenAccess, CopyLink, AddItems, NavigateFolder, FullTable, ControlPanel},
        computed: {
            nameFolder() {
                return this.$store.getters['disk/getCurentFolder']
            },
        },
    }
</script>

<style scoped>
</style>
