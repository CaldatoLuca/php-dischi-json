"use script";

const { createApp } = Vue;

const vueConfig = {
  data() {
    return {
      disks: ["ciao", "io", "sono"],
    };
  },
  methods: {
    callDisks() {
      axios.get("server.php").then((response) => {
        console.log(response);
      });
    },
  },
  created() {
    this.callDisks();
  },
};

const myApp = createApp(vueConfig);
myApp.mount("#app");
