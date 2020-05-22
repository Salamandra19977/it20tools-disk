<template>
    <main>
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
    export default {
        name: "Index",
        components: { FullTable, ControlPanel},
        data () {
            return {
                completedSteps: 10,
                totalSteps: 10
            }
        },
        computed: {
            nameFolder() {
                return this.$store.getters['basket/getCurentFolder']
            },
        },
    }
</script>

<style scoped>
    main .main-table__options .option-search {
        border-right: 2px solid #f5f5f5;
        padding: 25px 20px 20px 15px;
        width: 72%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }
    main .main-table__table .name, main .main-table__table .name-data {
        width: 67%;
    }
    main .main-table__table .owner, main .main-table__table .owner-data {
        width: 10%;
    }
    main .main-table__table .date, main .main-table__table .date-data {
        width: 23%;
    }
    .progressBar {
        display: flex;
        position: relative;
    }
</style>