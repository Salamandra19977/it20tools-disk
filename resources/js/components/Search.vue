<template>
  <b-container fluid>
    <!-- User Interface controls -->
    <b-row>
      <b-col lg="6" class="my-1">
        <b-form-group
          label-cols-sm="3"
          label-align-sm="right"
          label-size="sm"
          label-for="filterInput"
          class="mb-0"
        >
          <b-input-group size="sm">
            <b-form-input
              v-model="filter"
              type="search"
              id="filterInput"
              placeholder="Поиск на диске"
            ></b-form-input>

          </b-input-group>
        </b-form-group>
      </b-col>
    </b-row>

    <!-- Main table element -->
    <b-table 
      class="table-item table-item__file"
      :items="items"
      :fields="fields"
      :filter="filter"
      :filterIncludedFields="filterOn"
      @filtered="onFiltered"
      selectable
      @row-selected="onRowSelected"
      responsive="sm"
      sort-icon-right
    >
    </b-table>
    <div>
      Sorting By: <b>{{ sortBy }}</b>, Sort Direction:
      <b>{{ sortDesc ? 'Descending' : 'Ascending' }}</b>
    </div>

    <p>
      Selected Rows:<br>
      {{ selected }}
    </p>
  </b-container>
</template>

<script>
  export default {
    data() {
      return {
        fields: [
          { key: 'name', sortable: true, label: 'Название' },
          { key: 'owner', sortable: false, label: 'Владелец', style:'color:red'},
          { key: 'date', sortable: true, label: 'Дата' },
          { key: 'time', sortable: true, label: 'Время' },
          { key: 'size', sortable: true, label: 'Размер'}
        ],

        items: [
          { name: '3.doc', owner: 'ГPictures In The Sky', date: '09.11.2019', time: '00:00', size: '354' },
          { name: '1_файл.jpg', owner: 'ДAstronomy Or Astrology', date: '04.01.2019', time: '16:11', size: '24' },
          { name: '2.txt', owner: 'ВAstronomy Or Astrology', date: '05.09.2019', time: '17:15', size: '324' },
          { name: '2_файл.jpg', owner: 'Pictures In The Sky', date: '15.10.2019', time: '18:30', size: '0.1' },
          { name: '4.doc', owner: 'АMoon Fever', date: '10.02.2019', time: '01:15', size: '3' },
          { name: '5.doc', owner: 'БMoon Fever', date: '15.04.2019', time: '12:00', size: '0.2' },
        ],
        sortBy: 'name',
        sortDesc: false,
        sortDirection: 'asc',
        filter: null,
        filterOn: ['name', 'owner'],
        selected: []
      }
    },
    methods: {
      onFiltered(filteredItems) {
        // Trigger pagination to update the number of buttons/pages due to filtering
        this.totalRows = filteredItems.length
      },
      onRowSelected(items) {
        this.selected = items
      },
    }
  }
</script>

<style scoped>

.main-table {
  background-color: red;
}

</style>