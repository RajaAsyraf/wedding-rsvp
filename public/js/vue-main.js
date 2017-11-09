axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

var app = new Vue({
  el: '#app',

  data: {
    rsvp: '',
    rsvpName: '',
    sendRSVP: false,
    rsvpStatus: "Send"
  },

  methods: {
    addRSVP(){
      this.rsvpStatus = "Loading...";
      var postData = {rsvpName: this.rsvpName, rsvp: this.rsvp};

      axios.post('/api/rsvp', postData).then((response) => {
          // success
          console.log(response);
          this.rsvpStatus = "Sent!";
          this.sendRSVP = true;
      }).catch((error) => {
          // error
          console.log(error);
      }).then(() => {
          // always executed
      });
    }
  }
});

var app2 = new Vue({
  el: '#app2',

  data: {
    wishName: '',
    wishMessage: '',
    sendWish: false,
    wishStatus: 'Send'
  },

  methods: {
    addWish(){
      this.wishStatus = "Loading...";
      var postData = {wishName: this.wishName, wishMessage: this.wishMessage};

      axios.post('/api/wish', postData).then((response) => {
          // success
          console.log(response);
          this.wishStatus = "Sent!";
          this.sendWish = true;
      }).catch((error) => {
          // error
          console.log(error);
      }).then(() => {
          // always executed
      });
    }
  }

});
