<template>
  <div class="card" draggable="true">{{ this.name + ' ' + this.nickname }}</div>
</template>

<script>
export default {
  name : "PlayerCard",
  props : {
    name : String,
    nickname : String
  }
}
</script>

<style scoped>
.card{
  height: 250px;
  min-width: 250px;
  border: black 2px solid;
  border-radius: 10px;
}
</style>