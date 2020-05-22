<template>
    <div class="modal fade " v-bind:class="{ show: showAccessModal}" id="option-access-modal" tabindex="-1" role="dialog" aria-labelledby="option-access-modal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="option-access-modal">Открыть доступ пользователям</h5>
                </div>
                <div class="modal-body">
                    <span class="isowner bgr">{{errorServe}}</span>
                    <input v-model="email" type="text" class="modal-access__input" placeholder="Введите email">
                    <div class="has-access">
                        <div class="file-owner">
                            <span class="email">{{getUserEmail()}}</span>
                            <span class="isowner">Владелец</span>
                        </div>
                        <ul>
                            <li v-for="(accesse, index) in accesses">
                                <span class="email">{{accesse.user.email}}</span>
                                <button class="deny-access"
                                    v-on:click="removeAccesses(accesse.id)">
                                    Удалить
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        v-on:click="addAccesses()"
                        v-if="email !== '' "
                        class="btn btn-primary">
                        Отправить
                    </button>
                    <button v-on:click="done()" v-if="email === ''" type="button" class="btn btn-primary">Готово</button>
                    <button type="button" v-on:click="closeAccessModal()" v-if="email !== ''" class="btn btn-default" data-dismiss="modal">Отмена</button>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "OpenAccess",
        data() {
            return {
                email: "",
            }
        },
        computed: {
            selectedFiles() {
                return this.$store.getters['disk/getSelectedFiles']
            },
            showAccessModal() {
                return this.$store.getters['disk/getshowAccessModal']
            },
            selectedFiles() {
                return this.$store.getters['disk/getSelectedFiles']
            },
            curentFolder() {
                return this.$store.getters['disk/getCurentFolder']
            },
            accesses() {
                return this.$store.getters['disk/getAccesses']
            },
            errorServe() {
                return this.$store.getters['disk/getErrorAccesse']
            },
        },
        methods: {
            closeAccessModal() {
                this.$store.commit('disk/closeAccessModal');
            },
            getUserEmail() {
                if(this.selectedFiles[0] != null)
                    return this.selectedFiles[0].user.email
            },
            removeAccesses(id) {
                this.$store.dispatch('disk/removeAccesses', id);
                this.$store.dispatch('disk/showAccesses');
            },
            addAccesses() {
                if(this.email === this.selectedFiles[0].user.email) {
                    alert("Вы не можете самому себе открыть доступ");
                }
                else {
                    let inArray = false;
                    for(let key in this.accesses) {
                        if(this.accesses[key].user.email === this.email) {
                            inArray = true;
                            break;
                        }
                    }
                    if(inArray === true) {
                        alert("Вы уже открыли доступ данному пользователю");
                    }
                    else {
                        this.$store.commit('disk/errorAccesse',200);
                        this.$store.dispatch('disk/addAccesses', this.email);
                        this.email = "";
                    }
                }

            },
            done() {
                this.closeAccessModal();
                if(this.curentFolder.id != null) {
                    this.$store.dispatch('disk/showFolder');
                }
                else {
                    this.$store.dispatch('disk/initFileFolder');
                }
            },

        },
    }
</script>

<style scoped>
    .modal .has-access {
        margin-top: 15px;
    }
    .modal .has-access .file-owner {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .modal .has-access ul li {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        margin: 5px 0;
    }

    .modal .has-access ul li button {
        padding: 5px;
        border: none;
        background: transparent;
        color: #808080;
    }

    .modal .has-access ul li button:hover {
        color: #333;
    }

    .bgr {
        color: #761b18;
    }
</style>