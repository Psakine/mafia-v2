<template>
  <div class="flex overflow-x-auto absolute top-0">
    <PlayerCard
        v-for="{name, nickname} in playersDraft"
        v-bind:name="name"
        v-bind:nickname="nickname"
    />
  </div>
  <div class="flex overflow-x-auto absolute bottom-0">
    <!--    <PlayerCard-->
    <!--        v-for="{name, nickname} in players"-->
    <!--        v-bind:name="name"-->
    <!--        v-bind:nickname="nickname"-->
    <!--    />-->
    <div v-for="player in playersInGame" class="card" draggable="true"></div>
  </div>
</template>

<script>
import PlayerCard from "./PlayerCard";

export default {
  data() {
    return {
      playersInGame : [],
      playersDraft : [],
    }
  },
  components : {
    PlayerCard
  },
  name : "PlayersInGame",
  mounted() {
    this.getDraft();
    this.getInGame();
  },
  methods: {
    getDraft() {
      axios.get('/api/players').then((response) => {
        this.playersDraft = response.data;
      })
    },
    getInGame() {
      axios.get('/api/players/game').then((response) => {
        if (response.data.length > 0) {
          let players = response.data;
          if (players.length < 10) {
            for (let i = players.length + 1; i <= 10; i++) {
              players.push({"sort" : i});
            }
          }

          this.playersInGame = players;
        } else {
          for (let i = 1; i <= 10; i++) {
            this.playersInGame.push({"sort" : i});
          }
        }
      })
    }
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