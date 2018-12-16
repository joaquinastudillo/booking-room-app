<template>
    <div id="headerMenu" class="container">
        <ul class="nav justify-content-end">
                <li class="nav-item">
                  <button id="endDayButton" type="button" class="btn btn-info" >End Day</button>
                </li>
                <li class="nav-item">
                  <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Save & Load
                    </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" >Save Data</a>
                            <a class="dropdown-item" >Load Data</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                  <p class="nav-link" href="#">Funds: <strong> 87687 </strong></p>
                </li>
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
#endDayButton {
  margin-right: 5px;
}
</style>