<template>
    <div> 
    <h1>New Booking</h1>
    <hr>

    <div class="alert alert-danger alert-dismissible fade show" role="alert" v-if="errorOnloading">
    <strong>Error!</strong> {{ errorOnloading }}.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>

    <form @submit.prevent="checkAddEvent">
        <div class="form-group">
            <label>Event Title</label>
            <input v-model="event.title" type="text" class="form-control" name="title" placeholder="Enter Title" required>
            <small class="form-text text-muted">Representative name for your meeting.</small>
        </div>
        <div class="form-group">
            <label>Room</label>
            <select v-model="event.room" class="form-control" name="room" required>
            <option value="" disabled hidden>Select Room</option>
            <option value="1">Tatooine</option>
            <option value="2">Goldenrod</option>
            <option value="3">Gotham</option>
            <option value="4">Duckburg</option>
            </select>
        </div>
        <div class="row form-group">
            <div class="col">
                <label>Start Date</label>
                <input v-model="event.start_date" type="date" class="form-control" name="start_date">
            </div>
            <div class="col">
                <label>Start Time</label>
                <input v-model="event.start_time" type="time" class="form-control" name="start_time" required>
            </div>
        </div>

         <div class="row form-group">
            <div class="col">
                <label>End Date</label>
                <input v-model="event.end_date" type="date" class="form-control" name="end_date" required>
            </div>
            <div class="col">
                <label>End Time</label>
                <input v-model="event.end_time" type="time" class="form-control" name="end_time" required>
            </div>
        </div>

        <input type="hidden" v-model="event.user_id">
        <input type="hidden" v-model="event.id">

        <button type="submit" class="btn btn-primary">Create</button>
        <button type="submit" class="btn btn-primary" @click="backToDash">Back</button>
   
    </form>
    </div>
</template>

<script>
const Moment = require('moment');
const MomentRange = require('moment-range');
const moment = MomentRange.extendMoment(Moment);
    export default {
        name: 'CreateComponent',
        data(){
            return{
                event: {
                    id: '',
                    title: '',
                    room: '',
                    start_date: '',
                    start_time: '',
                    end_date: '',
                    end_time: '',
                    user_id: ''
                },
                edit: false,
                errorOnloading: '',
                today: ''
            }
        },
        mounted() {
            this.assignId()
            if(this.$route.query.idEvent){
                this.getEvent(this.$route.query.idEvent)
                this.edit = true
            }else{
                this.edit = false
                this.today = this.getToday()
                this.event.start_date = this.today
                this.event.end_date = this.event.start_date
            }
        },
        computed:{
            events(){
                return this.$store.getters.events
            }
        }, 
        methods: {
            getToday(){
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth() + 1;
                var yyyy = today.getFullYear();
                if (dd < 10) {
                dd = '0' + dd;
                } 
                if (mm < 10) {
                mm = '0' + mm;
                } 
                var today = yyyy + '-' + mm + '-' + dd;
                return today
            },
            backToDash(){
                this.$router.push("/showpanel")
            },
            checkAddEvent(){
                this.addEvent()
            },
            addEvent(){
                axios.defaults.baseURL = 'http://localhost:8000/api';
                if(this.edit == false){
                    axios.post('events', this.event)
                    .then(response => {
                        response = response.data.data
                        this.$router.push('showpanel')
                    })
                    .catch(error => {
                        this.errorOnloading = error.response.data.error
                    })
                }else{
                    axios.put('events', this.event)
                    .then(response => {
                        response = response.data.data
                        this.$router.push('showpanel')
                    })
                    .catch(error => {
                        this.errorOnloading = error.response.data.error
                    })
                }
            },
            getEvent(value){
                this.event = this.$store.getters.event(value)
            },
            assignId(){
                this.event.user_id = this.$store.getters.userId
            }
        }
    }
</script>