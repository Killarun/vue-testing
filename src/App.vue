<template>
  <div id="appvue_20201228">
    <div 
      v-if="!state.isLoadData"
      class="appvue-nodata"
    >Загружается справочник стоимости строительства скатных кровель...</div>

    <Header 
      v-if="state.isLoadData"
      :material="setting.material"
      :isTouchDevice="state.isTouchDevice"
      :setCurrentMaterial="setCurrentMaterial"
      :currentMaterial="state.currentMaterial"
    />

    <WorkList
      v-if="state.isLoadData"
      :currentMaterial="state.currentMaterial"
      :mainMaterial="setting.mainMaterial"
      :smeta="setting.smeta"
      :level="setting.level"
      :group="setting.group"
      :setExpandGroup="setExpandGroup"
      :reconstruction="setting.reconstruction"
      :section="setting.section"
    />
  </div>
</template>

<script>
import Header from './components/Header.vue'
import WorkList from './components/WorkList.vue'

const URL_API_JSON = "https://unikma.ru/get_json/"

export default {
  name: 'App',
  components: {
    Header,
    WorkList,
  },

  data: () => {
    return {
      setting: {
        material: {},
        level: {},
        mainMaterial: {},
        smeta: {},
        group: {},
        reconstruction: {},
        section: {},
      },
      state: {
        isLoadData: false,
        isTouchDevice: false,
        currentMaterial: '',
      },
    }
  },

  methods: {
    setCurrentMaterial(codeMaterial) {
      this.state.currentMaterial = codeMaterial;
    },

    setExpandGroup(currentMaterial, keySection, keyArticle) {
      this.setting.group[currentMaterial][keySection][keyArticle]['expand'] = !this.setting.group[currentMaterial][keySection][keyArticle]['expand'];
    }
  },

  mounted() {
    // настройка на устройства с touch-экранами
    this.state.isTouchDevice = typeof window.ontouchstart !== 'undefined'

    // выборка данных
    const AXIOS = require('axios').default;// - axios
    
    const API_JSON = AXIOS.create({
      baseURL: URL_API_JSON,
      timeout: 0,
      headers: {
        'Content-Type': 'application/json',
      }
    });

    let sendData = {};

    API_JSON.post('price_list_roofing_works.php', sendData).then(response => {
      this.setting.material = response.data.material;
      this.setting.level = response.data.level;
      this.setting.mainMaterial = response.data.mainMaterial;
      this.setting.smeta = response.data.smeta;
      this.setting.group = response.data.group;
      this.setting.reconstruction = response.data.reconstruction;
      this.setting.section = response.data.section;

      this.$nextTick(() => {
        let materials = response.data.material;

        for (let item in materials) {
          if (materials[item].default) {
            this.state.currentMaterial = item;
            break;
          }
        }
      })

      this.$nextTick(() => {
        this.state.isLoadData = true;
      })
    });
  }
}
</script>

<style>
/*
#appvue_20201228 {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
*/
  .appvue-nodata {
    color: #777;
    font-size: 20px;
    font-weight: 600;
    margin: 40px 0;
  }
</style>
