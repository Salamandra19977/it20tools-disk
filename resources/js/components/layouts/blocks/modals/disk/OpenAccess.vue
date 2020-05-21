<template>
    <div class="modal fade" id="option-access-modal" tabindex="-1" role="dialog" aria-labelledby="option-access-modal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="option-access-modal">Îòêðûòü äîñòóï ïîëüçîâàòåëÿì</h5>
                </div>
                <div class="modal-body">
                    <input type="text" class="modal-access__input" placeholder="Ââåäèòå èìåíà èëè àäðåñ ýë. ïî÷òû">
                    <div class="has-access">
                        <div class="file-owner">
                            <span class="email">bogdan.lopatkin@gmail.com</span>
                            <span class="isowner">Âëàäåëåö</span>
                        </div>
                        <ul>
                            <li>
                                <span class="email">sidorov.cs@gmail.com</span>
                                <button class="deny-access">Óäàëèòü</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Îòïðàâèòü</button>
                    <button type="button" class="btn btn-primary">Ãîòîâî</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Îòìåíà</button>
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
</style>