<template>
    <div class="modal fade" id="option-access-modal" tabindex="-1" role="dialog" aria-labelledby="option-access-modal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="option-access-modal">Доступ закрыт</h5>
                    <div class="modal-switcher"></div>
                </div>
                <div class="modal-body">
                    <input type="text" class="modal-access__input" placeholder="Введите имена или адрес эл. почты">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Отправить</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "OpenAccess"
    }
</script>

<style scoped>

</style>