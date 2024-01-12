"use script";

const { createApp } = Vue;

const vueConfig = {
  data() {
    return {
      discs: [],
      description: "...",
      apiUrl: "server.php",
    };
  },
  methods: {
    //chiamo tutti i dischi
    callDiscs() {
      axios.get(this.apiUrl).then((response) => {
        this.discs = response.data;
      });
    },
    //chiamo disco con indice del click, do parametro index
    showDescription(index) {
      axios.get(this.apiUrl, { params: { index: index } }).then((response) => {
        this.description = response.data.descrizione;
      });
    },
  },
  created() {
    this.callDiscs();
  },
};

const myApp = createApp(vueConfig);
myApp.mount("#app");
