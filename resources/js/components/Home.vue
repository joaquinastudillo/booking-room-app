<template>
    <div>
        <h1>My Bookings</h1>
        <h6>You may Edit or Delete your Data</h6>
        <h6>Click your meeting to edit it!</h6>
        <hr>

        <table class="table table-borderless">
        <thead>
            <tr>
            <th scope="col">Meeting Room Name</th>
            <th scope="col">Title Meeting</th>
            <th scope="col">Start Date / Start Time</th>
            <th scope="col">End Date / End Time</th>
            <th scope="col">Duration</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="event in events" :key="event.id" @click="editEvent(event.id)" v-if="userId == event.user_id" class="itemDisplay">
            <td scope="row" v-if="event.room == 1">Tatooine</td>
            <td scope="row" v-if="event.room == 2">Goldenrod</td>
            <td scope="row" v-if="event.room == 3">Gotham</td>
            <td scope="row" v-if="event.room == 4">Duckburg</td>
            <td>{{ event.title }}</td>
            <td>{{ event.start_date }} / {{ event.start_time }}</td>
            <td>{{ event.end_date }} / {{ event.end_time }}</td>
            <td>{{ moment.duration(moment(event.start_date + " " + event.start_time).diff(moment(event.end_date + " " + event.end_time))).humanize() }}</td>
            </tr>
        </tbody>
        </table>

    </div>
</template>

<script>
var moment = require('moment')
export default {
  name: 'HomeComponent',
  data(){
      return{
          moment: moment,
          show: true,
          label: 'Loading...'
      }
  },
  mounted(){
      this.fetchEvents()
  },
  components: {
      
  },
   computed: {
          events(){
            return this.$store.getters.events
          },
          userId(){
              return this.$store.getters.userId
          }
    },
    methods: {
        fetchEvents(){
            this.$store.dispatch('fetchEvents')
        },
        editEvent(value){
            this.$router.push({
                path: '/createbooking',
                query: {
                    idEvent: value
                }
            })
        }
    }
}
</script>

<style>
    .itemDisplay{
        transition: all 0.5s ease-out;
    }
    .itemDisplay:hover{
        transform: scale(1.05);
        cursor: pointer;
    }
</style>