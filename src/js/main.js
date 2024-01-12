"use script";

const { createApp } = Vue;

const vueConfig = {
  data() {
    return {
      discs: [],
      description: "...",
      apiUrl: "server.php",
      titolo: "",
      artista: "",
      anno: "",
      genere: "",
      descrizione: "",
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
    //funziona sia per index che per id (passo valore divero nell' html)
    showDescription(index) {
      axios.get(this.apiUrl, { params: { index: index } }).then((response) => {
        this.description = response.data.descrizione;
      });
    },
    addDisk() {
      const data = {
        create: 1,
        titolo: this.titolo,
        artista: this.artista,
        anno: this.anno,
        genere: this.genere,
        descrizione: this.descrizione,
      };

      axios
        .post("server.php", data, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((response) => {
          this.discs = response.data;
        });

      this.titolo = "";
      this.artista = "";
      this.anno = "";
      this.genere = "";
      this.descrizione = "";
    },
  },
  created() {
    this.callDiscs();
  },
};

const myApp = createApp(vueConfig);
myApp.mount("#app");
