<template>
  <div>
    <div class="main-table__options">
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
      <form action="" class="option-search" id="search-files">
          <input type="text" class="option-search__field" placeholder="Поиск на Диске">
          <button type="submit" class="option-search__btn">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <mask id="options-search" mask-type="alpha" maskUnits="userSpaceOnUse" x="6" y="6"
                      width="18" height="18">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M18.5 17H17.71L17.43 16.73C18.41 15.59 19 14.11 19 12.5C19 8.91 16.09 6 12.5 6C8.91 6 6 8.91 6 12.5C6 16.09 8.91 19 12.5 19C14.11 19 15.59 18.41 16.73 17.43L17 17.71V18.5L22 23.49L23.49 22L18.5 17ZM12.5 17C10.01 17 8 14.99 8 12.5C8 10.01 10.01 8 12.5 8C14.99 8 17 10.01 17 12.5C17 14.99 14.99 17 12.5 17Z"
                          fill="white" />
                  </mask>
                  <g mask="url(#options-search)">
                      <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                  </g>
              </svg>
          </button>
      </form>
      <form class="option-delete" action="" id="delete-files" onsubmit="return false;">
          <button class="option-delete__return" data-toggle="modal" data-target="#option-return-modal">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <mask id="option-return" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="4"
                      width="16" height="20">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M15 8V4L10 9L15 14V10C18.31 10 21 12.69 21 16C21 19.31 18.31 22 15 22C11.69 22 9 19.31 9 16H7C7 20.42 10.58 24 15 24C19.42 24 23 20.42 23 16C23 11.58 19.42 8 15 8Z"
                          fill="white" />
                  </mask>
                  <g mask="url(#option-return)">
                      <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                  </g>
              </svg>
          </button>
          <button class="option-delete__delete" data-toggle="modal" data-target="#option-delete-modal">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <mask id="option-delete" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6"
                      width="14" height="18">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9 22C9 23.1 9.9 24 11 24H19C20.1 24 21 23.1 21 22V10H9V22ZM22 7H18.5L17.5 6H12.5L11.5 7H8V9H22V7Z"
                          fill="white" />
                  </mask>
                  <g mask="url(#option-delete)">
                      <rect x="2" y="2" width="26" height="26" fill="#1875F0" />
                  </g>
              </svg>
          </button>
          <div class="option-delete__dots" role="button" id="deleteDots" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <mask id="option-dots" mask-type="alpha" maskUnits="userSpaceOnUse" x="13" y="7"
                      width="4" height="16">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M15 11C16.1 11 17 10.1 17 9C17 7.9 16.1 7 15 7C13.9 7 13 7.9 13 9C13 10.1 13.9 11 15 11ZM15 13C13.9 13 13 13.9 13 15C13 16.1 13.9 17 15 17C16.1 17 17 16.1 17 15C17 13.9 16.1 13 15 13ZM15 19C13.9 19 13 19.9 13 21C13 22.1 13.9 23 15 23C16.1 23 17 22.1 17 21C17 19.9 16.1 19 15 19Z"
                          fill="white" />
                  </mask>
                  <g mask="url(#option-dots)">
                      <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                  </g>
              </svg>
              <div class="dropdown-menu" aria-labelledby="deleteDots">
                  <a class="dropdown-item delete-return" href="#" data-toggle="modal"
                      data-target="#exampleModal">Восстановить</a>
                  <button class="dropdown-item delete-delete" data-toggle="modal"
                      data-target="#exampleModal" id="asd1">Удалить навсегда</button>
              </div>
          </div>
      </form>
      <div class="option-view">
          <div class="option-view__bulleted">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.12">
                      <mask id="option-view-bulleted" mask-type="alpha" maskUnits="userSpaceOnUse" x="6"
                          y="8" width="19" height="15">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M7.5 14C6.67 14 6 14.67 6 15.5C6 16.33 6.67 17 7.5 17C8.33 17 9 16.33 9 15.5C9 14.67 8.33 14 7.5 14ZM7.5 8C6.67 8 6 8.67 6 9.5C6 10.33 6.67 11 7.5 11C8.33 11 9 10.33 9 9.5C9 8.67 8.33 8 7.5 8ZM7.5 20.17C6.76 20.17 6.17 20.77 6.17 21.5C6.17 22.23 6.77 22.83 7.5 22.83C8.23 22.83 8.83 22.23 8.83 21.5C8.83 20.77 8.24 20.17 7.5 20.17ZM10.5 22.5H24.5V20.5H10.5V22.5ZM10.5 16.5H24.5V14.5H10.5V16.5ZM10.5 8.5V10.5H24.5V8.5H10.5Z"
                              fill="white" />
                      </mask>
                      <g mask="url(#option-view-bulleted)">
                          <rect x="2" y="2" width="26" height="26" fill="#333333" />
                      </g>
                  </g>
              </svg>
          </div>
          <div class="option-view__module">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <mask id="option-view-module" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="7"
                      width="16" height="16">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M7 11H11V7H7V11ZM13 23H17V19H13V23ZM7 23H11V19H7V23ZM7 17H11V13H7V17ZM13 17H17V13H13V17ZM19 7V11H23V7H19ZM13 11H17V7H13V11ZM19 17H23V13H19V17ZM19 23H23V19H19V23Z"
                          fill="white" />
                  </mask>
                  <g mask="url(#option-view-module)">
                      <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                  </g>
              </svg>
          </div>
          <div class="option-view__apps">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <mask id="option-view-apps" mask-type="alpha" maskUnits="userSpaceOnUse" x="7" y="9"
                      width="17" height="13">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M7 15H12V9H7V15ZM7 22H12V16H7V22ZM13 22H18V16H13V22ZM19 22H24V16H19V22ZM13 15H18V9H13V15ZM19 9V15H24V9H19Z"
                          fill="white" />
                  </mask>
                  <g mask="url(#option-view-apps)">
                      <rect x="2" y="2" width="26" height="26" fill="#D8D8D8" />
                  </g>
              </svg>
          </div>
      </div>
  </div>
    <b-table
      ref="selectableTable"
      selectable
      :select-mode="selectMode"
      :items="items"
      :fields="fields"
      @row-selected="onRowSelected"
      responsive="sm"
      :sort-by.sync="sortBy"
      :sort-desc.sync="sortDesc"
      sort-icon-right
    >
      <!-- Example scoped slot for select state illustrative purposes -->
      <template v-slot:cell(selected)="{ rowSelected }">
        <template v-if="rowSelected">
          <span aria-hidden="true">&check;</span>
          <span class="sr-only">Selected</span>
        </template>
        <template v-else>
          <span aria-hidden="true">&nbsp;</span>
          <span class="sr-only">Not selected</span>
        </template>
      </template>
    </b-table>

    <div>
      Sorting By: <b>{{ sortBy }}</b>, Sort Direction:
      <b>{{ sortDesc ? 'Descending' : 'Ascending' }}</b>
    </div>

    <p>
      Selected Rows:<br>
      {{ selected }}
    </p>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        sortBy: 'name',
        sortDesc: false,
        fields: [
          { key: 'name', sortable: true },
          { key: 'owner', sortable: false },
          { key: 'date', sortable: true },
          { key: 'time', sortable: true },
          { key: 'size', sortable: true }
        ],

        items: [
          { name: '1_файл.jpg', owner: 'Astronomy Or Astrology', date: '04.01.2019', time: '16:11', size: '24' },
          { name: '2.txt', owner: 'Astronomy Or Astrology', date: '05.09.2019', time: '17:15', size: '324' },
          { name: '3.doc', owner: 'Pictures In The Sky', date: '09.11.2019', time: '00:00', size: '354' },
          { name: '4.doc', owner: 'Moon Fever', date: '10.02.2019', time: '01:15', size: '3' },
          { name: '5.doc', owner: 'Moon Fever', date: '15.04.2019', time: '12:00', size: '0.2' },
          { name: '2_файл.jpg', owner: 'Pictures In The Sky', date: '15.10.2019', time: '18:30', size: '0.1' },
        ],

        selectMode: 'multi',
        selected: []
      }
    },
    methods: {
      onRowSelected(items) {
        this.selected = items
      },
    }
  }
</script>