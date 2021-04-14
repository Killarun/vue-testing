<template>
  <div class="work-list">
    <div class="work-list--desktop">
      <div class="work-list__header layout">
        <div></div>
        <div
          v-for="(itemLevel, keyLevel) in level"
          :key="keyLevel"
          class="work-list__header-title"
        >{{ itemLevel.text }}</div>
      </div>
    </div>

    <!--  Основной кровельный материал  -->
    <section>
      <div
        class="work-list__section"
        v-for="(itemSection, keySection) in mainMaterial[currentMaterial]"
        :key="keySection"
      >
        <div class="work-list__section-name">{{ keySection }}</div>
        <div class="work-list__section-text" v-html="getCommentSection(keySection)"></div>

        <article
          class="work-list__article layout"
          v-for="(itemArticle, keyArticle) in mainMaterial[currentMaterial][keySection]"
          :key="keyArticle"
        >
          <div class="work-list__article-name work-list__article-name--special">{{ keyArticle }}</div>

          <div
            class="work-list__value work-list__value--special work-list--desktop"
            v-for="(itemLevel, keyLevel) in level"
            :key="keyLevel"
          >{{ mainMaterial[currentMaterial][keySection][keyArticle][keyLevel] }}</div>

          <div
            class="work-list__value-interval work-list--mobile"
          >{{ getValueInterval(mainMaterial, currentMaterial, keySection, keyArticle, null) + ' *' }}</div>
        </article>
      </div>
    </section>

    <section class="section-legend section-legend--after-main-material work-list--mobile">
      *) Здесь и далее может быть указан диапазон цен на работы. В этом случае цена зависит от сложности кровли.
    </section>

    <!--  Прочие работы  -->
    <section class="section-smeta">
       <div
        class="work-list__section"
        v-for="(itemSection, keySection) in smeta[currentMaterial]"
        :key="keySection"
      >
        <div class="work-list__section-name">{{ keySection }}</div>
        <div class="work-list__section-text" v-html="getCommentSection(keySection)"></div>

        <article
          class="work-list__article"
          v-for="(itemArticle, keyArticle) in smeta[currentMaterial][keySection]"
          :key="keyArticle"
        >
          <div 
            :class="classListArticleName()"
            @click="setExpandGroup(currentMaterial, keySection, keyArticle)"
          >
            {{ keyArticle }}
            <!-- <font-awesome-icon
              v-if="isExpand(currentMaterial, keySection, keyArticle)" 
              :icon="iconAwesome['falAngleUp']" 
              :class="['awesome-icon']"
            />
            <font-awesome-icon 
              v-if="!isExpand(currentMaterial, keySection, keyArticle)" 
              :icon="iconAwesome['falAngleDown']" 
              :class="['awesome-icon']"
            /> -->
          </div>

          <div v-if="isExpand(currentMaterial, keySection, keyArticle)">
            <div
              class="work-list__work layout"
              v-for="(itemWork, keyWork) in smeta[currentMaterial][keySection][keyArticle]"
              :key="keyWork"
            >
              
              <div class="work-list__work-name">{{ keyWork }}</div>

              <div
                class="work-list__value work-list--desktop"
                v-for="(itemLevel, keyLevel) in level"
                :key="keyLevel"
              >{{ smeta[currentMaterial][keySection][keyArticle][keyWork][keyLevel] }}</div>

              <div
                class="work-list__value-interval work-list--mobile"
              >{{ getValueInterval(smeta, currentMaterial, keySection, keyArticle, keyWork) }}</div>
            </div>
          </div>
        </article>
      </div>
    </section>

    <!--  Реконструкция  -->
    <section>
      <div
        class="work-list__section"
        v-for="(itemSection, keySection) in reconstruction[currentMaterial]"
        :key="keySection"
      >
        <div class="work-list__section-name">{{ keySection }}</div>
        <div class="work-list__section-text" v-html="getCommentSection(keySection)"></div>

        <article
          class="work-list__work work-list__work--special layout"
          v-for="(itemArticle, keyArticle) in reconstruction[currentMaterial][keySection]"
          :key="keyArticle"
        >
          <div class="work-list__work-name">{{ keyArticle }}</div>

          <div
            class="work-list__value work-list--desktop"
            v-for="(itemLevel, keyLevel) in level"
            :key="keyLevel"
          >{{ reconstruction[currentMaterial][keySection][keyArticle][keyLevel] }}</div>

          <div
            class="work-list__value-interval work-list--mobile"
          >{{ getValueInterval(reconstruction, currentMaterial, keySection, keyArticle, null) }}</div>
        </article>
      </div>
    </section>

    <section class="section-legend">
      Итоговая стоимость строительства кровли может варьироваться в зависимости от состава работ. Цены не включают НДС и не являются публичной офертой.<br>
      Присылайте нам проект и мы посчитаем вам смету индивидуально.
    </section>
  </div>
</template>

<script>
// import { faAngleUp as falAngleUp, faAngleDown as falAngleDown } from '@fortawesome/pro-light-svg-icons'
// import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

export default {

  name: 'WorkList',

  components: {
    FontAwesomeIcon,
  },

  props: {
    mainMaterial: Object,
    smeta: Object,
    level: Object,
    group: Object,
    reconstruction:  Object,
    section:  Object,
    isTouchDevice: Boolean,
    currentMaterial: String,
    setExpandGroup: Function,
  },

    
  data: () => {
    return {
      iconAwesome: {
        falAngleUp: falAngleUp,
        falAngleDown: falAngleDown,
      }
    }
  },

  methods: {

    classListArticleName() {
      let classes = {
          'work-list__article-name': true, 
          //'work-list__article-name--hover': !this.isTouchDevice,
      }
      return classes;
    },

    isExpand(currentMaterial, keySection, keyArticle) {
      return this.group[currentMaterial][keySection][keyArticle]['expand']
    },

    getCommentSection(keySection) {
      let text = "";

      //if (currentMaterial in this.section) {[currentMaterial]
        if (keySection in this.section) {
          text = this.section[keySection]["text"];
        }
      //}
      return text;  
    },

    getValueInterval(arr, currentMaterial, keySection, keyArticle, keyWork) {
      let dataLink = arr;
      
      if (keyWork == null) {
        dataLink = arr[currentMaterial][keySection][keyArticle];
      } else {
        dataLink = arr[currentMaterial][keySection][keyArticle][keyWork];
      }

      //if (dataLink === null) {return '-'}

      let isMin = 'min' in dataLink;
      let isMax = 'max' in dataLink;

      if (!(isMin && isMax)) {return '-'}

      let minValueString = dataLink['min'];
      let maxValueString = dataLink['max'];

      if (minValueString === maxValueString) {return maxValueString}

      let minValue = minValueString.match(/[0-9]*\b/g);
      if (minValue === null) {return '-'}

      return `${minValue[0]}-${maxValueString}`
    }
  },
}
</script>

<style>
  .layout {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr;
    column-gap: 20px;  
  }

  .work-list {
    /* empty */
  }

  .work-list--desktop {
    display: block;
  }

  .work-list--mobile {
    display: none;
  }

  @media screen and (max-width: 700px) {
    .work-list--desktop {
      display: none;
    }

    .work-list--mobile {
      display: block;
    }
  }

  @media screen and (max-width: 414px) {
    .layout {
      grid-template-columns: 1fr 1fr;
      column-gap: 20px;  
    }
  }

  /* *************************************** */

  .work-list__header {
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
    margin-bottom: 15px;
    font-size: 16px;
  }

  .work-list__header-title {
    font-weight: 600;
    color: #b33;
    text-align: right;
  }

  @media screen and (max-width: 800px) {
    .work-list__header {
      font-size: 15px;
    }
  }

  /* *************************************** */

  .work-list__section-name {
    text-align: left;
    margin: 40px 0 20px;
    font-size: 20px;
    font-weight: 400;
    color: #666;/* 555 333 999999  */
    text-transform: uppercase;
  }

  .work-list__section-text {
    font-size: 16px;
    color: #777;
    margin: 0 0 20px;
  }

  @media screen and (max-width: 800px) {
    .work-list__section-name {
      font-size: 18px;
    }

    .work-list__section-text {
      font-size: 16px;
    }
  }

  /* *************************************** */
  
  .work-list__article {
    padding: 15px 0 0;
    border-bottom: 1px solid #eee;
    font-size: 18px;
  }

  .work-list__article-name {
    text-align: left;
    font-weight: 400;
    color: #b33;
    margin-bottom: 15px;
    cursor: pointer;

    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .work-list__article-name--special {
    color: #3b3;
    font-size: 20px;
  }
  /*
  .work-list__article-name--hover:hover {
    color: #999;
  }
  */

  @media screen and (max-width: 800px) {
    .work-list__article {
      font-size: 16px;
    }

    .work-list__article-name--special {
      font-size: 18px;
    }
  }

  @media screen and (max-width: 700px) {
    .work-list__article-name--special {
      font-size: 16px;
    }
  }

  /* *************************************** */

  .work-list__work {
    padding: 7px 0;
    padding-left: 20px;
    font-size: 16px;
    text-align: right;
  }
  
  .work-list__work--special {
    padding-left: 0;
  }

  .work-list__work:not(:last-child) {
    border-bottom: 1px dotted #eee; /* fafafa */
  }

  .work-list__work-name {
    text-align: left;
    font-weight: 400;
    color: #333;    
  }

  .work-list__value--special {
    color: #3b3;    
    font-size: 20px;
    text-align: right;
  }

  .work-list__value-interval {
    color: #3b3;    
    text-align: right;
    grid-column: 2 / -1; 
    padding-right: 20px;   
  }

  @media screen and (max-width: 800px) {
    .work-list__work {
      font-size: 15px;
    }

    .work-list__value--special {
      font-size: 18px;
    }
  }

  @media screen and (max-width: 414px) {
    .work-list__work {
      padding-left: 0;
    }

    .work-list__value-interval {
      padding-right: 0;   
    }
  }

  /* *************************************** */

  .section-legend {
    margin: 40px 0;
    font-size: 16px;
    text-align: left;
    color: #777;
  }

  .section-legend--after-main-material {
    margin: 10px 0 40px;
  }

  @media screen and (max-width: 800px) {
    .section-legend {
      font-size: 15px;
    }
  }

  /* *************************************** */

  .awesome-icon{
    width: 40px;
    text-align: left;
    display: inline-block;
    font-style: normal;
    opacity: .7;
    font-weight: 400;
    /*font-size: 24px;*/
    font-size: 150%;
    line-height: 1;
    margin-right: 10px;
  }

</style>