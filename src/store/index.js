import Vue from 'vue'
import Vuex from 'vuex'

import modules from './modules/index.js'

import VuexPersistence from 'vuex-persist'
const vuexLocal = new VuexPersistence({ storage: window.localStorage })

Vue.use(Vuex)

/*
 * If not building with SSR mode, you can
 * directly export the Store instantiation
 */

export default function (/* { ssrContext } */) {
  const Store = new Vuex.Store({
    plugins: [vuexLocal.plugin],
    modules
  })

  return Store
}

