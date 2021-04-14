<template>
  <div class="nav">
    <h2 class="nav__title">Выберите кровельное покрытие</h2>

    <div class="nav__buttons">
      <div
        v-for="(btn, key) in material"
        :key="key"
        :class="classList(key)"
        @click="setCurrentMaterial(key)"
      >
        {{ btn.text }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Header',

  props: {
    material: Object,
    isTouchDevice: Boolean,
    setCurrentMaterial: Function,
    currentMaterial: String,
  },

  methods: {

    classList(key) {
      let classes = {
          'nav__button': true, 
          'nav__button--hover': !this.isTouchDevice,
          'nav__button--active': this.currentMaterial === key,
      }
      return classes;
    },
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

  .nav__title {
    font-size: 18px;
    padding: 0;
    margin: 0 0 20px;
    font-weight: 400;
    text-align: left;
  }

  .nav__buttons {
    text-align: left;
    margin: 0 0 60px;
  }

  .nav__button {
    display: inline-block;
    border: 1px solid #d8d8d8;
    text-align: center;
    font-size: 16px;
    background-color: #fafafa;
    border-radius: 10px;
    margin-bottom: 10px;
    padding: 5px 20px;
    color: #000;
    cursor: pointer;
    transition: background-color 0.4s linear 0s;
  }
  
  .nav__button:not(:last-child) {
    margin-right: 20px;
  }

  .nav__button--hover:hover {
    border-color: #777;
    background-color: #eaeaea;
  }
  
  .nav__button--hover:active {
    border-color: #393;
  }

  .nav__button--active {
    border: 2px solid #393;
    padding: 4px 19px;
  }

  @media screen and (max-width: 800px) {
    .nav__button {
      font-size: 15px;
    }
  }

  @media screen and (max-width: 600px) {
    .nav__button {
      font-size: 15px;
      padding: 5px 15px;
    }
  
    .nav__button:not(:last-child) {
      margin-right: 10px;
    }
  }
</style>
