axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

var app = new Vue({
  el: '#app',

  data: {
    rsvp: '',
    rsvpName: '',
    sendRSVP: false,
    rsvpStatus: "Send",
    show: false
  },

  computed: {
    isDisabled () {
      if (this.rsvpName.length > 1 && this.rsvp.length > 1) {
        return false;
      } else {
        return true;
      }
    }
  },

  methods: {
    addRSVP(){
      this.rsvpStatus = "Submitting...";
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

  computed: {
    isDisabled () {
      if (this.wishName.length > 3 && this.wishMessage.length > 3) {
        return false;
      } else {
        return true;
      }
    }
  },

  methods: {
    addWish(){
      this.wishStatus = "Submitting...";
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
