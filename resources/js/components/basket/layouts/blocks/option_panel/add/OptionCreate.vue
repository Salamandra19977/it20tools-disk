<template>
    <div class="option-create">
        <a href="#" class="option-create__btn" role="button" id="createDropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Создать</a>
        <div class="dropdown-menu" aria-labelledby="createDropdown">
            <a class="dropdown-item add-folder" href="#">Папку</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item upload-file" href="#">Загрузить файлы</a>
            <a class="dropdown-item upload-folder" href="#">Загрузить папку</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "OptionCreate"
    }
</script>

<style scoped>

</style>