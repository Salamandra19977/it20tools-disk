<template>
  <div>
    <b-table
      :items="items"
      :fields="fields"
      :sort-by.sync="sortBy"
      :sort-desc.sync="sortDesc"
      sort-icon-right
      responsive="sm"
    ></b-table>

    <div>
      Sorting By: <b>{{ sortBy }}</b>, Sort Direction:
      <b>{{ sortDesc ? 'Descending' : 'Ascending' }}</b>
    </div>
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

        ]
      }
    }
  }
</script>