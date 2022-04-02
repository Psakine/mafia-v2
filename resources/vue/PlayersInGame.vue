<template>
  <div class="flex overflow-x-auto absolute bottom-0">
    <PlayerCard
        v-for="{name, nickname} in players"
        v-bind:name="name"
        v-bind:nickname="nickname"
    />
  </div>
</template>

<script>
import PlayerCard from "./PlayerCard";

export default {
  data() {
    return {
      players : []
    }
  },
  components : {
    PlayerCard
  },
  name : "PlayersInGame",
  mounted() {
    axios.get('/api/players').then((response) => {
      this.players = response.data;
    })
  }
}
</script>

<style scoped>

</style>