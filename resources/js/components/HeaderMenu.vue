<template>
    <div id="headerMenu" class="container">
        <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a href="/home" class="btn btn-primary endDayButton" tabindex="-1" role="button" aria-disabled="true">Home</a>
                </li>
                 <router-link to="/showpanel" class="nav-item" activeClass="active" tag="li">
                    <button type="button" class="btn btn-primary endDayButton" >My bookings</button>
                </router-link>
                <router-link to="/createbooking" class="nav-item" activeClass="active" tag="li">
                    <button type="button" class="btn btn-primary endDayButton" >New Booking</button>
                </router-link>
        </ul>
    </div>
</template>

<script>

export default {
  name: "HeaderMenuApp",

};
</script>

<style>
#headerMenu {
  padding-top: 20px;
}
.endDayButton {
  margin-right: 5px;
}
</style>