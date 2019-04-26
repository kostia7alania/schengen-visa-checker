<template>
  <q-page class="flex flex-center column ">

    <h1> Пагнале </h1>
    <q-input v-model="number" stack-label="Введите номер" placeholder="FNRU/160419/0181/01"/>
    <q-input v-model="bd" float-label="Введите дату рождения" placeholder="26/12/1992" />

  </q-page>
</template>

<style>
</style>

<script>

export default {
  name: 'PageIndex',
  data() {
    return {
      number: 'FNRU/160419/0181/01',
      bd: '26/12/1992'
    }
  }

}
</script>
