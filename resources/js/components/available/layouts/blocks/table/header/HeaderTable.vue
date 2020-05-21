<template>
    <tr class="table-head table-item table-item__folder">
        <td class="name">
            <span>Название</span>
            <i class="name-asc">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <mask id="name-asc" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                          width="16" height="16">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M23 15L21.59 13.59L16 19.17V7H14V19.17L8.42 13.58L7 15L15 23L23 15Z"
                              fill="white" />
                    </mask>
                    <g mask="url(#name-asc)">
                        <rect x="2" y="2" width="26" height="26" fill="#666666" />
                    </g>
                </svg>
            </i>
            <i class="name-desc">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <mask id="name-desc" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                          width="16" height="16">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M7 15L8.41 16.41L14 10.83V23H16V10.83L21.58 16.42L23 15L15 7L7 15Z"
                              fill="white" />
                    </mask>
                    <g mask="url(#name-desc)">
                        <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                    </g>
                </svg>
            </i>
        </td>
        <td class="owner">
            <span>Владелец</span>
        </td>
        <td class="date">
            <span>Дата</span>
            <i class="date-asc">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <mask id="date-asc" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                          width="16" height="16">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M23 15L21.59 13.59L16 19.17V7H14V19.17L8.42 13.58L7 15L15 23L23 15Z"
                              fill="white" />
                    </mask>
                    <g mask="url(#date-asc)">
                        <rect x="2" y="2" width="26" height="26" fill="#666666" />
                    </g>
                </svg>
            </i>
            <i class="date-desc">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <mask id="date-desc" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                          width="16" height="16">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M7 15L8.41 16.41L14 10.83V23H16V10.83L21.58 16.42L23 15L15 7L7 15Z"
                              fill="white" />
                    </mask>
                    <g mask="url(#date-desc)">
                        <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                    </g>
                </svg>
            </i>
        </td>
    </tr>
</template>

<script>
    export default {
        name: "HeaderTable"
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
        width: 78%;
    }
    main .main-table__table .owner, main .main-table__table .owner-data {
        width: 10%;
    }
    main .main-table__table .date, main .main-table__table .date-data {
        width: 12%;
    }
</style>