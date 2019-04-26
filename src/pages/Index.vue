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
      backend: "/backend/index.php",
      visa_url: "https://www.vfsrussiavisaservices.com/finland-russia-tracking/Russian/trackingparam.aspx",
      proxy_url: 'https://cors-anywhere.herokuapp.com/',
    };
  },
  methods: {
    get() {
      /*
      const bd = this.bd;
      const number = this.number;
      if (!bd) return alert("Введите дату рождения");
      if (!number) return alert("Введите номер");
      const url = `${this.backend}?number=${number}&bd=${bd}`;
      axios
        .get(url)
        .then(res => (this.output = res.data))
        .catch(err => (this.output = err));
*/

      var headers = {
        Connection: "keep-alive",
        'Access-Control-Allow-Origin': '*',
        Pragma: "no-cache",
        "Cache-Control": "no-cache",
        Origin: "https://www.vfsrussiavisaservices.com",
        "Upgrade-Insecure-Requests": "1",
        "Content-Type": "application/x-www-form-urlencoded",
        "User-Agent":
          "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.108 Safari/537.36",
        Accept:
          "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3",
        Referer:
          "https://www.vfsrussiavisaservices.com/finland-russia-tracking/Russian/trackingparam.aspx",
        "Accept-Encoding": "gzip, deflate, br",
        "Accept-Language": "en-US,en;q=0.9,ru;q=0.8"
      };

      const data =
        "__LASTFOCUS=&__EVENTTARGET=&__EVENTARGUMENT=&__VIEWSTATE=%2FwEPDwUKMTY0NjkzNDM3OQ9kFgJmD2QWAgIDD2QWAgIBD2QWDAIFDw8WAh4UVmFsaWRhdGlvbkV4cHJlc3Npb24FDl5cdysoWy9dXHcrKSokZGQCCw8PFgIfAAUUXihbYS16XXxbQS1aXXxbIF0pKiRkZAINDw9kFgIeB29uY2xpY2sFH0hpZGVFcnJvcignY3RsMDBfQ1BIX2RpdkVycm9yJylkAhMPDxYCHwAFDl5cdysoWy9dXHcrKSokZGQCFQ9kFgJmDw9kFggfAQU1ZXZlbnQuY2FuY2VsQnViYmxlPXRydWU7IHRoaXMuc2VsZWN0KCk7IGNhbF9sY3ModGhpcykeCm9ua2V5cHJlc3MFF3JldHVybiBjYWxfQ2hlY2soZXZlbnQpHgZvbmJsdXIFE2NhbF9WYWxpZGF0ZSh0aGlzKTseCW9ua2V5ZG93bgUqaWYoZXZlbnQua2V5Q29kZT09OSljYWxfY2hlY2tDbGljayhldmVudCk7ZAIXDw9kFgIfAQUfSGlkZUVycm9yKCdjdGwwMF9DUEhfZGl2RXJyb3InKWRkPaRkSx91DMMkCKir6FKtJiOekAk%3D&__VIEWSTATEGENERATOR=3076BCAC&__EVENTVALIDATION=%2FwEWBwLlrvrGBQKxutWeBQL3x9r6DgKS3ezXCAKnld7qBwL3m8e3AwKLz8%2BYBrrjknQyu3%2F9D4UWrQ0wO49fE1Tn&ctl00%24CPH%24txtRef=&ctl00%24CPH%24txtLname=&ctl00%24CPH%24txtRef2=FNRU%2F160419%2F0181%2F01&ctl00%24CPH%24txtDOB%24txtDate=26%2F12%2F1992&ctl00%24CPH%24btnDOB=Submit";

      const url = this.proxy_url + this.visa_url
      const method = "POST"
      const options = { url, data, method, headers };


      axios(options)
        .then(res => (this.output = res.data))
        .catch(err => (this.output = err));
    }
  }
};
</script>
