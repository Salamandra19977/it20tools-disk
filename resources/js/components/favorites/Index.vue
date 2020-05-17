<template>
    <main>
        <h2 class="main-heading">Избранное</h2>
        <div class="main-table">
            <control-panel></control-panel>
            <full-table></full-table>
            <remove-object></remove-object>
            <restore-object></restore-object>
        </div>
    </main>
</template>

<script>
    import ControlPanel from "./layouts/blocks/option_panel/ControlPanel";
    import FullTable from "./layouts/blocks/table/FullTable";

    import RemoveObject from "../layouts/blocks/modals/basket/RemoveObject";
    import RestoreObject from "../layouts/blocks/modals/basket/RestoreObject";
    export default {
        name: "Index",
        components: {FullTable, ControlPanel, RestoreObject, RemoveObject}
    }
</script>

<style scoped>

</style>