<template>
    <div class="modal fade" id="option-return-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Восстановить?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Восстановить выбранный объект?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Да</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "RestoreObject"
    }
</script>

<style scoped>

</style>