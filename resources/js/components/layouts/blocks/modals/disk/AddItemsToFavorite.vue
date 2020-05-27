<template>
    <div class="modal fade" v-bind:class="{ show: showFavoritesModal}" id="option-star-modal" tabindex="-1" role="dialog"
         aria-labelledby="option-star-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="option-star-modal">Добавить в избранное?</h5>
                    <button type="button" class="close" v-on:click="closeFavoritesModal()" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"
                        v-on:click="addItemsToFavorites([selectedFiles, selectedFolders])">Да</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"
                        v-on:click="closeFavoritesModal()">
                        Отмена
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AddItemsToFavorite",
        computed: {
            showFavoritesModal() {
                return this.$store.getters['disk/getShowFavoritesModal']
            },
            selectedFiles() {
                return this.$store.getters['disk/getSelectedFiles']
            },
            selectedFolders() {
                return this.$store.getters['disk/getSelectedFolders']
            },
        },
        methods: {
            closeFavoritesModal() {
                console.log('sdadsa')
                this.$store.commit('disk/closeFavoritesModal');
            },
            addItemsToFavorites(state) {
                this.$store.dispatch('disk/addItemsToFavorites');
                this.closeFavoritesModal();
            },
            addItemsToFavorites(obj) {
                const itemsArr = obj
                    axios.put("/favorites/itemsFavorite", {itemsFavorite: itemsArr})
                        .then(response => {
                            if (response.status == 200) {
                                this.$store.dispatch('disk/initFileFolder');
                                this.closeFavoritesModal()
                            }
                    })
            },
        },
    }
</script>

<style scoped>

</style>