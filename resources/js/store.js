import Vuex from "vuex";
import Vue from "vue";

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        userId: null,
        events: []
    },
    actions: {
        fetchEvents({ commit }){
            axios.defaults.baseURL = 'http://localhost:8000/api';
            axios.get('events')
            .then(response => {
                commit('SET_EVENTS', response.data.data)
            })
            .catch(error => console.log(error))
        }
    },
    mutations: {
        setupIdUser(state, payload){
            state.userId = payload
        },
        SET_EVENTS(state, payload){
            state.events = payload
        } 
    },
    getters: {
        userId: state => {
            return state.userId
        },
        events: state => {
            return state.events
        },
        event: state => {
            return value => state.events.find(x => x.id === value)
        }
    }
})