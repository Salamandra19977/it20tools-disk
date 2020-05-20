<template>
    <div class="modal fade" v-bind:class="{ show: showLinksModal}" id="option-copylink-modal" tabindex="-1" role="dialog"
         aria-labelledby="option-copylink-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="option-copylink-modal">Доступ по ссылке включен</h5>
                    <div class="modal-switcher"
                         v-on:click="selectPozition()"
                         v-bind:class="{ switchOn: status_link === status}"></div>
                </div>
                <div class="modal-body">
                    <button class="copylink">Копировать ссылку</button>
                    <a href="#">{{getLink()}}</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"
                        v-on:click="send()">Отправить</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"
                        v-on:click="closeLinksModals()">Отмена</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CopyLink",
        data() {
            return {
                status_link: false,
                status: true,
            }
        },
        computed: {
            showLinksModal() {
                return this.$store.getters['disk/getShowLinksModal']
            },
            selectedFiles() {
                return this.$store.getters['disk/getSelectedFiles']
            },
        },
        methods: {
            closeLinksModals() {
                this.status_link = false;
                this.status = true;

                this.$store.commit('disk/closeLinksModal');
            },
            getLink() {
                if(this.selectedFiles[0] != null) {
                    if(this.selectedFiles[0].link != null) {
                        this.status_link = true;
                    }
                    else {
                        this.status_link = false;
                    }

                    return "php.loc/DISK/" + this.CryptoJS.MD5(this.selectedFiles[0].name);
                }
            },
            selectPozition() {
                this.status = !this.status;
            },
            send() {
                if(this.selectedFiles[0].link != null && this.status == true) {
                    console.log(1)
                    this.closeLinksModals();
                }
                if(this.selectedFiles[0].link != null && this.status == false) {
                    console.log(2)
                    this.$store.dispatch('disk/removeLinks');
                    this.closeLinksModals();
                }
                if(this.selectedFiles[0].link == null && this.status == false) {
                    console.log(3)
                    this.closeLinksModals();
                }
                if(this.selectedFiles[0].link == null && this.status == true) {
                    console.log(4)
                    this.$store.dispatch('disk/addLinks');
                    this.closeLinksModals();
                }
            }
        },
    }
</script>

<style scoped>

</style>