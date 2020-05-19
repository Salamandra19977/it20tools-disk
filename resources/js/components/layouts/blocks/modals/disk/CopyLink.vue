<template>
    <div class="modal fade" id="option-copylink-modal" tabindex="-1" role="dialog"
         aria-labelledby="option-copylink-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="option-copylink-modal">Доступ по ссылке включен</h5>
                    <div class="modal-switcher"></div>
                </div>
                <div class="modal-body">
                    <button class="copylink">Копировать ссылку</button>
                    <a href="#">https://IT2.0/DISK/-KGOu3EpPBgP8gdisc</a>
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
        name: "CopyLink"
    }
</script>

<style scoped>

</style>