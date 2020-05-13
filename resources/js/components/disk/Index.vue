<template>
    <main>
        <h2 class="main-heading">Диск</h2>
        <div class="main-table">
            <control-panel></control-panel>
            <full-table></full-table>
        </div>
    </main>
</template>

<script>
    import ControlPanel from "./layouts/blocks/option_panel/ControlPanel";
    import FullTable from "./layouts/blocks/table/FullTable";
    export default {
        name: "Index",
        components: {FullTable, ControlPanel}
    }
</script>

<style scoped>

</style>