<template>
  <q-page class="flex flex-center column ">

    <h3> Пагналеeeee </h3>

    <div v-if="!output">
        <q-input v-model="number" stack-label="Регистрационный номер" placeholder="FNRU/160419/0181/01"/>
        <q-input v-model="bd" float-label="Фамилия" placeholder="Bazrov" />

      <q-btn @click="get" icon="keyboard_arrow_right" label="Получить данные"  />
    </div>

  <div class="flex flex-center column " v-if="output">
    <q-input
      v-html="output"
      type="textarea"
      float-label="Результат"
      :max-height="100"
      readonly
      rows="7"
    />
      <q-btn @click="output=null" icon="keyboard_arrow_right" label="Попробовать еще раз"  />
  </div>
  </q-page>
</template>


<script>
import axios from "axios";
export default {
  name: "PageIndex",
  data() {
    return {
      number: "FNRU/160419/0181/01",
      bd: "26/12/1992",
      output: null,
      backend: "/backend/index.php"
    };
  },
  methods: {
    get() {
      const bd = this.bd;
      const number = this.number;
      if (!bd) return alert("Введите дату рождения");
      if (!number) return alert("Введите номер");
      const url = `${this.backend}?number=${number}&bd=${bd}`;
      axios
        .get(url)
        .then(res => (this.output = res.data))
        .catch(err => (this.output = err));
    }
  }
};
</script>
