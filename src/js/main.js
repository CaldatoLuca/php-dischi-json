"use script";

const { createApp } = Vue;

const vueConfig = {
  data() {
    return {
      disks: [],
      description: "Work in progress..",
    };
  },
  methods: {
    callDisks() {
      axios.get("server.php").then((response) => {
        this.disks = response.data;
      });
    },
  },
  created() {
    this.callDisks();
  },
};

const myApp = createApp(vueConfig);
myApp.mount("#app");
