<template>
    <div id="headerMenu" class="container">
        <ul class="nav justify-content-end">
                <router-link to="/home" class="nav-item" activeClass="active" tag="li">
                    <button type="button" class="btn btn-primary endDayButton" >Home</button>
                </router-link>
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