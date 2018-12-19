<template>
    <div>
        <nav class="navbar navbar-expand navbar-light bg-light">
            <a href="/home" class="navbar-brand">Room Scheduler</a>
            <ul class="navbar-nav">
                <router-link to="/showpanel" class="nav-item" activeClass="active" tag="li">
                    <a class="nav-link">Bookings</a>
                </router-link>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
  name: 'HeaderComponent',
  components: {
    
  }
}
</script>