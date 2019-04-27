import { dispatch } from "../../../../../../Users/dev/AppData/Local/Microsoft/TypeScript/3.4.3/node_modules/rxjs/internal/observable/pairs";

const toFormData = obj => {
  const fd = new FormData()
  for ( const key in obj ) { fd.append(key, obj [key]); }
  return fd
}

const createDiv = html => {
  const div = document.createElement('div')
  div.innerHTML = html
  return div
}

const formToObj = (div) => {
  const inputs = div.querySelectorAll('form input')//:NOT([type=submit])')
  return [].reduce.call(inputs, (acc,{name,value}) => ({ ...acc, [name]: value}), {})
}

export default {
  state: {
    output: [],
    REG_NUM: null,
    url: "https://cors-anywhere.herokuapp.com/https://www.vfsrussiavisaservices.com/finland-russia-tracking/Russian/trackingparam.aspx",
  },


  mutations: {
    CLEAR_OUTPUT(state) {
      state.output = []
    },
    ADD_OUTPUT(state, {text, REG_NUM}) {
      if(!(state.output instanceof Array)) state.output = [];
      state.output.push({ REG_NUM, date: new Date(), text })
    },

    SET_REG_NUM (state, val) {
      state.REG_NUM = val
    }
  },

  getters: {

    text(state) {
      const o = state.output
      if(!o || o.length==0) return false;
      return o[o.length-1].text;
    },

    date(state) {
      const o = state.output
      if(!o || o.length==0) return false
      return o[o.length-1].date;
    },

  },
  actions: {

   async get({state, dispatch, commit }, form) {

     const REG_NUM = form.REG_NUM;
     commit('SET_REG_NUM', REG_NUM)
    const html = await axios
      .get(state.url)
      .then(res => createDiv(res.data))
      .catch(e=>{console.log('eerrr',e);return false})

    if(!html) return alert('ошибка на 1 шаге!');
    const obj = formToObj(html)
    obj['ctl00$CPH$txtRef2'] = 'FNRU/160419/0181/01';
    obj['ctl00$CPH$txtDOB$txtDate'] = '26/12/1992';
      return dispatch('post', {obj, REG_NUM})
    },

    async post({state, commit}, {obj, REG_NUM}) {
      const result = await axios.post(state.url, toFormData(obj))
      .then(res => res.data)
      .catch(e=>{console.log('eerrr',e);return false})
      if(!result)  alert('Ошибка на 2 шаге')

      const div =  createDiv(result);
      if(!div || !div.querySelector('.fb') ) return alert('Не нашли поле со статусом')
      const head =div.querySelectorAll('.fb')[1].innerText.trim()
      const text = div.querySelectorAll('.fb')[2].innerText.trim()
      commit('ADD_OUTPUT', {text, REG_NUM}) // => state.output= result
      console.log('результирующий див -> ', createDiv(result))
    }

  }
}
