<template>

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
  name : "PlayersDraft",
  mounted() {
    axios.get('/api/players').then((response) => {
      this.players = response.data;
    })
  }
}
</script>

<style scoped>

</style>