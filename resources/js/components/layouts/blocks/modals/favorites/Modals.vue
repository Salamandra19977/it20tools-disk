<template>
    <div>
        <div class="modal fade" id="option-create-modal" tabindex="-1" role="dialog" aria-labelledby="option-create-modal"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="option-create-modal">Новая папка</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Введите имя папки</p>
                        <input type="text">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Создать</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="option-rename-modal" tabindex="-1" role="dialog" aria-labelledby="option-rename-modal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="option-rename-modal">Переименовать?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Введите новое имя</p>
                        <input type="text">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Сохранить</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="option-rm-modal" tabindex="-1" role="dialog" aria-labelledby="option-rm-modal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="option-rm-modal">Удалить?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Переместить выбранный объект в корзину?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Удалить</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="option-mkcopy-modal" tabindex="-1" role="dialog" aria-labelledby="option-mkcopy-modal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="option-mkcopy-modal">Создать копию?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Да</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="option-delete-modal" tabindex="-1" role="dialog" aria-labelledby="option-delete-modal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="option-delete-modal">Удалить навсегда?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Вы уверены, что хотите удалить выбранный объект?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Удалить</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="option-return-modal" tabindex="-1" role="dialog" aria-labelledby="option-return-modal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="option-return-modal">Восстановить?</h5>
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
    </div>
</template>

<script>
    export default {
        name: "Modals"
    }
</script>

<style scoped>

</style>