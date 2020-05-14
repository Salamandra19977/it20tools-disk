<template>
    <main>
        <navigate-folder></navigate-folder>
        <h2 class="main-heading">{{nameFolder.name}}</h2>
        <div class="main-table">
            <control-panel></control-panel>
            <full-table></full-table>
        </div>
    </main>
</template>

<script>
    import ControlPanel from "./layouts/blocks/option_panel/ControlPanel";
    import FullTable from "./layouts/blocks/table/FullTable";
    import NavigateFolder from "./layouts/blocks/navigateFolder/NavigateFolder";
    export default {
        name: "Index",
        components: {NavigateFolder, FullTable, ControlPanel},
        computed: {
            nameFolder() {
                return this.$store.getters['disk/getCurentFolder']
            },
        },
    }
</script>

<style scoped>
</style>